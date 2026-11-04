#!/bin/sh

echo "[INFO] Running Laravel startup entrypoint..."

# Remove hot reload file & old view cache if exists
rm -f /var/www/html/public/hot
rm -rf /var/www/html/storage/framework/views/*.php

# Ensure storage & cache directories exist
mkdir -p /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public 2>/dev/null || true
chmod -R 755 /var/www/html/public 2>/dev/null || true

# Wait for MySQL to be ready if DB_HOST is configured
if [ -n "$DB_HOST" ] && [ "$DB_CONNECTION" = "mysql" ]; then
    echo "[INFO] Waiting for MySQL database ($DB_HOST)..."
    for i in 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15; do
        if php -r "try { new PDO('mysql:host='.getenv('DB_HOST').';port='.(getenv('DB_PORT')?:3306).';dbname='.getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD')); exit(0); } catch(Exception \$e){ exit(1); }"; then
            echo "[INFO] MySQL database is ready!"
            break
        fi
        echo "[INFO] Database not ready yet, waiting 2s ($i/15)..."
        sleep 2
    done
fi

# Run database migrations & seeders safely
php /var/www/html/artisan migrate --force 2>&1 || echo "[WARNING] Migration failed or database not ready yet."
php /var/www/html/artisan db:seed --force 2>&1 || echo "[WARNING] Database seed failed or skipped."

# Create storage link
php /var/www/html/artisan storage:link --force 2>/dev/null || true

# Optimize Laravel Production Caching for ultra-fast (<0.1s) response time
php /var/www/html/artisan config:cache 2>&1 || true
php /var/www/html/artisan route:cache 2>&1 || true
php /var/www/html/artisan view:cache 2>&1 || true
php /var/www/html/artisan event:cache 2>&1 || true

echo "[INFO] Laravel startup entrypoint completed."
