<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Ekstrakurikuler | IDN Boarding School</title>
    <meta name="description" content="Melakukan olahraga-olahraga Sunnah di era digital bersama IDN Boarding School. Temukan berbagai ekstrakurikuler favorit seperti memanah, berenang, berkuda, dan bela diri.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Funnel+Display:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS Vite Import -->
    @vite(['resources/css/app.css'])

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#fafafa] text-[#181d27] font-['Geist',sans-serif] antialiased min-h-screen flex flex-col justify-between selection:bg-[#0c61cf] selection:text-white">

    <!-- Header Navigation -->
    <x-navbar active="program" activeSub="ekstrakurikuler" />

    <main class="flex-1 w-full">

        <!-- Hero Section (Matching Figma Node 19902:13681 100%) -->
        <section class="w-full bg-[#fafafa] pt-[130px] md:pt-[160px] pb-12 lg:pb-[72px]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-[#0c61cf] text-sm md:text-base font-semibold tracking-wide block">
                        Program · Ekstrakurikuler
                    </span>
                    
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                        Melakukan Olahraga-Olahraga <span class="text-[#0c61cf]">Sunnah</span> di Era Digital.
                    </h1>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        IDN Boarding School mengimbangi pendidikan akademik dan teknologi dengan pengembangan karakter melalui kegiatan ekstrakurikuler. Program ekskul ini dirancang untuk melatih kepemimpinan, kerja sama tim, disiplin, dan tanggung jawab agar santri menjadi pribadi yang ahli dan bermanfaat bagi masyarakat.
                    </p>
                </div>

                <!-- Right Hero Image -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[24px] lg:rounded-[32px] overflow-hidden shadow-[0px_12px_40px_rgba(0,0,0,0.08)] border border-slate-200/80 w-full max-w-[548px] h-[260px] sm:h-[320px] lg:h-[360px] relative bg-slate-100 group">
                        <img src="{{ asset('assets/ekskul/image-ekskul.avif') }}" 
                             alt="Kegiatan Ekstrakurikuler IDN" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

            </div>
        </section>

        <!-- Main Extracurricular Grid Section (Matching Figma Node 19902:13681 100%) -->
        <section class="w-full py-12 lg:py-20 bg-white border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="flex items-center justify-center gap-3 mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif] text-center">
                        Berbagai <span class="text-[#0c61cf]">Ekstrakurikuler</span> Yang Ada di IDN
                    </h2>   
                </div>

                <!-- 2x2 Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                    
                    <!-- Card 1: Memanah -->
                    <div class="bg-white rounded-[24px] flex flex-col justify-between transition-all duration-300 group">
                        <div>
                            <div class="rounded-[20px] overflow-hidden border border-slate-200/80 h-[220px] sm:h-[260px] lg:h-[280px] w-full bg-slate-100 relative">
                                <img src="{{ asset('assets/ekskul/memanah.avif') }}" 
                                     alt="Ekstrakurikuler Memanah" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            
                            <h3 class="text-xl sm:text-2xl font-bold text-[#181d27] mt-6 mb-3 font-['Funnel_Display',sans-serif]">
                                Memanah
                            </h3>
                            
                            <p class="text-[#717680] text-sm sm:text-base leading-relaxed font-normal">
                                Ekstrakurikuler favorit berbasis olahraga sunnah ini melatih konsentrasi, kesabaran, dan ketenangan jiwa agar santri lebih fokus dan konsisten dalam mencapai tujuan.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Berenang -->
                    <div class="bg-white rounded-[24px] flex flex-col justify-between transition-all duration-300 group">
                        <div>
                            <div class="rounded-[20px] overflow-hidden border border-slate-200/80 h-[220px] sm:h-[260px] lg:h-[280px] w-full bg-slate-100 relative">
                                <img src="{{ asset('assets/ekskul/renang.avif') }}" 
                                     alt="Ekstrakurikuler Berenang" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            
                            <h3 class="text-xl sm:text-2xl font-bold text-[#181d27] mt-6 mb-3 font-['Funnel_Display',sans-serif]">
                                Berenang
                            </h3>
                            
                            <p class="text-[#717680] text-sm sm:text-base leading-relaxed font-normal">
                                Olahraga sunnah yang melatih ketahanan fisik, keberanian, dan kepercayaan diri santri, sekaligus menanamkan disiplin serta pengendalian diri dengan aman.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Berkuda -->
                    <div class="bg-white rounded-[24px] flex flex-col justify-between transition-all duration-300 group">
                        <div>
                            <div class="rounded-[20px] overflow-hidden border border-slate-200/80 h-[220px] sm:h-[260px] lg:h-[280px] w-full bg-slate-100 relative">
                                <img src="{{ asset('assets/ekskul/berkuda.avif') }}" 
                                     alt="Ekstrakurikuler Berkuda" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            
                            <h3 class="text-xl sm:text-2xl font-bold text-[#181d27] mt-6 mb-3 font-['Funnel_Display',sans-serif]">
                                Berkuda
                            </h3>
                            
                            <p class="text-[#717680] text-sm sm:text-base leading-relaxed font-normal">
                                Sebagai olahraga sunnah, berkuda melatih keberanian, keseimbangan, dan kepemimpinan santri melalui ikatan emosional serta kontrol emosi yang kuat terhadap hewan tunggangannya.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4: Bela Diri -->
                    <div class="bg-white rounded-[24px] flex flex-col justify-between transition-all duration-300 group">
                        <div>
                            <div class="rounded-[20px] overflow-hidden border border-slate-200/80 h-[220px] sm:h-[260px] lg:h-[280px] w-full bg-slate-100 relative">
                                <img src="{{ asset('assets/ekskul/beladiri.avif') }}" 
                                     alt="Ekstrakurikuler Bela Diri" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            
                            <h3 class="text-xl sm:text-2xl font-bold text-[#181d27] mt-6 mb-3 font-['Funnel_Display',sans-serif]">
                                Bela Diri
                            </h3>
                            
                            <p class="text-[#717680] text-sm sm:text-base leading-relaxed font-normal">
                                Pencak Silat adalah salah satu ekstrakurikuler di IDN yang melatih ketahanan fisik, refleks, dan teknik mempertahankan diri santri, sekaligus menanamkan jiwa kedisiplinan dan rasa kepercayaan diri.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- Footer Component -->
    <x-footer />

    <!-- Chatbot Component -->
    <x-chatbot />

</body>
</html>
