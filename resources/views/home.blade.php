@extends('layouts.app')

@section('title', 'Developer & Creator')

@section('content')
<section class="space-y-6">
    <h1 class="text-3xl sm:text-4xl font-semibold tracking-tight leading-tight text-neutral-900">
        Building web architecture, interactive experiences, and clean design systems.
    </h1>
    <p class="text-neutral-600 text-base leading-relaxed">
        Full-stack developer focusing on web architecture, interactive experiences, and clean design systems.
    </p>

    <!-- Stack / Badges -->
    <div class="flex flex-wrap gap-2 pt-2 text-xs font-mono text-neutral-600">
        <span class="px-2.5 py-1 bg-neutral-100 border border-neutral-200 rounded">Laravel</span>
        <span class="px-2.5 py-1 bg-neutral-100 border border-neutral-200 rounded">Next.js</span>
        <span class="px-2.5 py-1 bg-neutral-100 border border-neutral-200 rounded">Tailwind CSS</span>
        <span class="px-2.5 py-1 bg-neutral-100 border border-neutral-200 rounded">MySQL</span>
    </div>
</section>

<!-- Featured Snippet -->
<section class="mt-16 space-y-6">
    <div class="flex justify-between items-center border-b border-neutral-200 pb-3">
        <h2 class="text-sm uppercase tracking-wider text-neutral-400 font-mono">Selected Work</h2>
        <a href="{{ route('projects') }}" class="text-xs text-neutral-500 hover:text-neutral-900 transition">View all &rarr;</a>
    </div>

    <div class="space-y-2">
        <!-- Project 1 -->
        <a href="{{ route('projects') }}" class="block p-4 -mx-4 rounded-lg hover:bg-neutral-50 transition group">
            <div class="flex justify-between items-baseline">
                <h3 class="font-medium text-neutral-900 group-hover:text-black">Clean Portfolio Website</h3>
                <span class="text-xs font-mono text-neutral-400">2026</span>
            </div>
            <p class="text-sm text-neutral-600 mt-1">Full-stack web platform built with Laravel and Next.js.</p>
        </a>

        <!-- Project 2 -->
        <a href="{{ route('projects') }}" class="block p-4 -mx-4 rounded-lg hover:bg-neutral-50 transition group">
            <div class="flex justify-between items-baseline">
                <h3 class="font-medium text-neutral-900 group-hover:text-black">Teamwork Portfolio Website</h3>
                <span class="text-xs font-mono text-neutral-400">2026</span>
            </div>
            <p class="text-sm text-neutral-600 mt-1">Full-stack web platform built collaboratively with Next.js in a 3-person team.</p>
        </a>

        <!-- Project 3 -->
        <a href="{{ route('projects') }}" class="block p-4 -mx-4 rounded-lg hover:bg-neutral-50 transition group">
            <div class="flex justify-between items-baseline">
                <h3 class="font-medium text-neutral-900 group-hover:text-black">JavaScript Essentials 2</h3>
                <span class="text-xs font-mono text-neutral-400">2026</span>
            </div>
            <p class="text-sm text-neutral-600 mt-1">JavaScript Essentials 2 Certificate from Cisco Networking Academy.</p>
        </a>

                <!-- Project 4 -->
        <a href="{{ route('projects') }}" class="block p-4 -mx-4 rounded-lg hover:bg-neutral-50 transition group">
            <div class="flex justify-between items-baseline">
                <h3 class="font-medium text-neutral-900 group-hover:text-black">Tips Melindungi Diri Dari Ancaman Phising dan Malware di Era Digital</h3>
                <span class="text-xs font-mono text-neutral-400">2026</span>
            </div>
            <p class="text-sm text-neutral-600 mt-1">JavaScript Essentials 2 Certificate from Cisco Networking Academy.</p>
        </a>

                <!-- Project 5 -->
        <a href="{{ route('projects') }}" class="block p-4 -mx-4 rounded-lg hover:bg-neutral-50 transition group">
            <div class="flex justify-between items-baseline">
                <h3 class="font-medium text-neutral-900 group-hover:text-black">Computational Thinking : Cara Berpikir Logis untuk Mengatasi Masalah (Jenjang SMA)</h3>
                <span class="text-xs font-mono text-neutral-400">2026</span>
            </div>
            <p class="text-sm text-neutral-600 mt-1">JavaScript Essentials 2 Certificate from Cisco Networking Academy.</p>
        </a>
    </div>
</section>
@endsection
