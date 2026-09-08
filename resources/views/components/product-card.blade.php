@props(['image', 'name', 'price'])

<div class="product">
    <img src="{{ asset($image) }}" alt="{{ $name }}">

    <div class="product__body">
        <div class="product__name">{{ $name }}</div>
        <div class="product__price">{{ $price }}</div>
    </div>
</div>
