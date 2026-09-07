<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div class="container">
    <div class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Ứng dụng phổ biến</h2>
      </div>
      <div class="col-auto">
        <button class="buttonArrow d-flex items-center">
          <span>Xem tất cả</span>
          <i class="icon-arrow-top-right text-16 ml-10"></i>
        </button>
      </div>
    </div>

    <div data-anim-wrap class="grid -type-1 pt-40 sm:pt-20">
      @php
        $uses = [
          ['img' => 'thung-10l.webp', 'title' => 'Ngâm rượu gia đình'],
          ['img' => 'thung-20l-thuc-te.webp', 'title' => 'Quán nhậu / nhà hàng'],
          ['img' => 'thung-100l.webp', 'title' => 'Ủ rượu kinh doanh'],
          ['img' => 'thung-ngam-ruou.webp', 'title' => 'Trưng bày không gian'],
          ['img' => 'thung-300l.webp', 'title' => 'Xưởng sản xuất'],
          ['img' => 'thung-50l.webp', 'title' => 'Quà tặng cao cấp'],
        ];
      @endphp
      @foreach ($uses as $i => $u)
      <a href="#" data-anim-child="slide-up delay-{{ $i + 1 }}" class="featureCard -type-1 -hover-1 popular-use-card overflow-hidden rounded-12 px-30 py-30">
        <div class="featureCard__image">
          <img src="{{ asset('user/img/products/'.$u['img']) }}" alt="{{ $u['title'] }}">
        </div>
        <div class="featureCard__content popular-use-card__content">
          <h4 class="popular-use-card__title text-white">{{ $u['title'] }}</h4>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>
