@extends('layouts.app')

@section('title', 'Projects & Portfolio')

@section('content')
<section class="space-y-8">
    <div>
        <h1 class="text-2xl font-semibold tracking-tight text-neutral-900">Portfolio</h1>
        <p class="text-neutral-600 text-sm mt-1">A curated collection of systems, applications, and creative builds.</p>
    </div>

    <div class="space-y-10">
        <!-- Project Item 1 -->
        <article class="border-b border-neutral-200 pb-8 space-y-3">
            <div class="flex justify-between items-baseline">
                <h2 class="text-lg font-medium text-neutral-900">Clean Portfolio Website</h2>
                <span class="text-xs font-mono text-neutral-400">Laravel / Next.js</span>
            </div>
            <p class="text-sm text-neutral-600 leading-relaxed">
                Full-stack web platform built with Laravel and Next.js, featuring a clean minimalist layout and responsive design.
            </p>
            <div class="pt-1">
                <a href="https://github.com/NighTarget/Clean-Portfolio-Website" target="_blank" class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition">GitHub &rarr;</a>
            </div>
        </article>

        <!-- Project Item 2 -->
        <article class="border-b border-neutral-200 pb-8 space-y-3">
            <div class="flex justify-between items-baseline">
                <h2 class="text-lg font-medium text-neutral-900">Teamwork Portfolio Website</h2>
                <span class="text-xs font-mono text-neutral-400">Next.js</span>
            </div>
            <p class="text-sm text-neutral-600 leading-relaxed">
                Full-stack web platform built collaboratively with Next.js in a 3-person team.
            </p>
            <div class="pt-1">
                <a href="https://github.com/NighTarget/project-firstweek" target="_blank" class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition">GitHub &rarr;</a>
            </div>
        </article>

        <!-- Project Item 3 -->
        <article class="border-b border-neutral-200 pb-8 space-y-3">
            <div class="flex justify-between items-baseline">
                <h2 class="text-lg font-medium text-neutral-900">Javascript Essentials 2</h2>
                <span class="text-xs font-mono text-neutral-400">Javascript</span>
            </div>
            <p class="text-sm text-neutral-600 leading-relaxed">
                JavaScript Essentials 2 Certificate from Cisco Networking Academy.
            </p>
            <details class="pt-1 group cursor-pointer">
                <summary class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition list-none select-none">
                    Certificate &rarr;
                </summary>
                <div class="mt-3 overflow-hidden rounded-lg border border-neutral-200 bg-neutral-50">
                    <img 
                        src="https://imgur.com/bOO27f0.jpeg" 
                        alt="Preview Javascript Essentials 2" 
                        class="w-full h-auto object-cover" 
                        loading="lazy"
                    />
                </div>
            </details>
        </article>

                <!-- Project Item 4 -->
        <article class="border-b border-neutral-200 pb-8 space-y-3">
            <div class="flex justify-between items-baseline">
                <h2 class="text-lg font-medium text-neutral-900">Tips Melindungi Diri Dari Ancaman Phising dan Malware di Era Digital</h2>
                <span class="text-xs font-mono text-neutral-400">Micro Skill</span>
            </div>
            <p class="text-sm text-neutral-600 leading-relaxed">
                Tips Melindungi Diri Dari Ancaman Phising dan Malware di Era Digital Certificate from Digital Talent Scholarship 2026.
            </p>
            <details class="pt-1 group cursor-pointer">
                <summary class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition list-none select-none">
                    Certificate &rarr;
                </summary>
                <div class="mt-3 overflow-hidden rounded-lg border border-neutral-200 bg-neutral-50">
                    <img 
                        src="https://imgur.com/WMHsXkz.jpeg" 
                        alt="Preview Tips Melindungi Diri Dari Ancaman Phising dan Malware di Era Digital" 
                        class="w-full h-auto object-cover" 
                        loading="lazy"
                    />
                </div>
            </details>
        </article>

        <!-- Project Item 5 -->
        <article class="border-b border-neutral-200 pb-8 space-y-3">
            <div class="flex justify-between items-baseline">
                <h2 class="text-lg font-medium text-neutral-900">Computational Thinking : Cara Berpikir Logis untuk Mengatasi Masalah (Jenjang SMA)</h2>
                <span class="text-xs font-mono text-neutral-400">Micro Skill</span>
            </div>
            <p class="text-sm text-neutral-600 leading-relaxed">
                Computational Thinking : Cara Berpikir Logis untuk Mengatasi Masalah (Jenjang SMA) Certificate from Digital Talent Scholarship 2026.
            </p>
            <details class="pt-1 group cursor-pointer">
                <summary class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition list-none select-none">
                    Certificate &rarr;
                </summary>
                <div class="mt-3 overflow-hidden rounded-lg border border-neutral-200 bg-neutral-50">
                    <img 
                        src="https://i.imgur.com/oD1gFIS.jpeg" 
                        alt="Preview Computational Thinking : Cara Berpikir Logis untuk Mengatasi Masalah (Jenjang SMA)" 
                        class="w-full h-auto object-cover" 
                        loading="lazy"
                    />
                </div>
            </details>
        </article>
    </div>
</section>
@endsection
