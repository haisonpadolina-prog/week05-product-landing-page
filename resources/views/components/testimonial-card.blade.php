@props([
    'name',
    'position',
    'review',
    'initials' => 'C',
])

<article class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">
    <div class="flex items-center gap-4">
        <div class="grid h-12 w-12 place-items-center rounded-full bg-coffee-100 font-black text-coffee-700">
            {{ $initials }}
        </div>
        <div>
            <h3 class="font-bold">{{ $name }}</h3>
            <p class="text-sm text-stone-500">{{ $position }}</p>
        </div>
    </div>

    <div class="mt-5 text-amber-500" aria-label="5 star review">★★★★★</div>
    <p class="mt-3 leading-7 text-stone-600">“{{ $review }}”</p>
</article>
