@props(['icon', 'title', 'description'])

<article class="group rounded-3xl border border-stone-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
    <div class="grid h-12 w-12 place-items-center rounded-2xl bg-coffee-50 text-2xl transition group-hover:bg-coffee-600 group-hover:text-white">
        {{ $icon }}
    </div>
    <h3 class="mt-5 text-lg font-bold">{{ $title }}</h3>
    <p class="mt-2 leading-7 text-stone-600">{{ $description }}</p>
</article>
