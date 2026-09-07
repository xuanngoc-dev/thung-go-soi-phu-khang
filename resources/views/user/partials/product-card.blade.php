@php
  $product = $product ?? [];
  $url = $product['url'] ?? '#';
  $img = $product['img'] ?? '';
  $title = $product['title'] ?? '';
  $loc = $product['loc'] ?? '';
  $price = $product['price'] ?? 0;
  $old = $product['old'] ?? null;
  $rating = $product['rating'] ?? '4.8 (120+)';
  $tag = $product['tag'] ?? '';
  $cardClass = trim('tourCard -type-1 py-10 px-10 border-1 rounded-12 -hover-shadow '.($class ?? ''));
@endphp

<a href="{{ $url }}" class="{{ $cardClass }}">
  <div class="tourCard__header">
    <div class="tourCard__image ratio ratio-28:20">
      <img src="{{ asset('user/img/products/'.$img) }}" alt="{{ $title }}" class="img-ratio rounded-12">
      @if ($tag !== '')
      <div class="tourCard__badge">
        <i class="icon-clock text-12 mr-5"></i>
        {{ $tag }}
      </div>
      @endif
    </div>
    <button class="tourCard__favorite" type="button">
      <i class="icon-heart"></i>
    </button>
  </div>
  <div class="tourCard__content px-10 pt-10">
    @if ($loc !== '')
    <div class="tourCard__location d-flex items-center text-13 text-light-2">
      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
      {{ $loc }}
    </div>
    @endif
    <h3 class="tourCard__title text-16 fw-500 mt-5" title="{{ $title }}">
      <span>{{ $title }}</span>
    </h3>
    <div class="tourCard__rating d-flex items-center text-13 mt-5">
      <div class="d-flex x-gap-5">
        @for ($s = 0; $s < 5; $s++)
        <div><i class="icon-star text-10 text-yellow-2"></i></div>
        @endfor
      </div>
      <span class="text-dark-1 ml-10">{{ $rating }}</span>
    </div>
    <div class="d-flex justify-end items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
      <div class="tourCard__priceWrap d-flex items-baseline">
        <span class="tourCard__price text-16 fw-500">{{ number_format($price, 0, ',', '.') }}đ</span>
        @if ($old)
        <span class="tourCard__price-old ml-5">{{ number_format($old, 0, ',', '.') }}đ</span>
        @endif
      </div>
    </div>
  </div>
</a>
