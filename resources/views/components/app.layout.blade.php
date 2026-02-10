@props(['header' => null])

<div class="min-h-screen bg-[#f5f6f7] text-slate-900">
    @include('layouts.navigation')

    @if ($header)
        <header class="bg-white border-b border-black/10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <main>
        {{ $slot }}
    </main>
</div>