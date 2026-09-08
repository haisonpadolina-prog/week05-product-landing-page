@props([
    'name',
    'price',
    'description',
    'features' => [],
    'featured' => false,
])

<article @class([
    'relative rounded-3xl border p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl',
    'border-coffee-600 bg-stone-950 text-white' => $featured,
    'border-stone-200 bg-white' => ! $featured,
])>
    @if($featured)
        <span class="absolute right-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-bold text-stone-950">
            Popular
        </span>
    @endif

    <p class="text-sm font-bold uppercase tracking-widest {{ $featured ? 'text-amber-200' : 'text-coffee-600' }}">
        {{ $name }}
    </p>

    <div class="mt-4 flex items-end gap-2">
        <span class="text-4xl font-black">{{ $price }}</span>
        <span class="{{ $featured ? 'text-stone-400' : 'text-stone-500' }}">starting price</span>
    </div>

    <p class="mt-4 leading-7 {{ $featured ? 'text-stone-300' : 'text-stone-600' }}">
        {{ $description }}
    </p>

    <ul class="mt-6 space-y-3">
        @foreach($features as $feature)
            <li class="flex gap-3 text-sm">
                <span class="font-black {{ $featured ? 'text-amber-200' : 'text-coffee-600' }}">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button
        href="#contact"
        :variant="$featured ? 'secondary' : 'primary'"
        class="mt-7 w-full"
    >
        Choose This Pick
    </x-button>
</article>
