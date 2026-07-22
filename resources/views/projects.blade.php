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
                <a href="https://github.com/NighTarget/" target="_blank" class="text-xs font-mono text-neutral-500 hover:text-neutral-900 transition">GitHub &rarr;</a>
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
    </div>
</section>
@endsection
