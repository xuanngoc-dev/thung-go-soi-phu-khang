<section class="layout-pt-xl layout-pb-xl section-bg-oak">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Sản phẩm bán chạy</h2>
      </div>
      <div class="col-auto">
        <button class="buttonArrow d-flex items-center">
          <span>Xem tất cả</span>
          <i class="icon-arrow-top-right text-16 ml-10"></i>
        </button>
      </div>
    </div>

    <div class="row y-gap-30 pt-40 sm:pt-20 productGridMobile">
      @php
        $bestSellers = [
          ['img' => 'thung-10l.webp', 'title' => 'Thùng gỗ sồi 10L ngâm rượu', 'loc' => 'Gia đình', 'price' => 1890000, 'old' => 2200000, 'rating' => '4.9 (128)', 'tag' => 'Bán chạy'],
          ['img' => 'thung-20l.webp', 'title' => 'Thùng gỗ sồi 20L vòi crom', 'loc' => 'Gia đình / Quán nhỏ', 'price' => 2590000, 'old' => 2990000, 'rating' => '4.8 (214)', 'tag' => 'Phổ biến'],
          ['img' => 'thung-30l.webp', 'title' => 'Thùng gỗ sồi 30L thực tế', 'loc' => 'Gia đình / Quán nhậu', 'price' => 3290000, 'old' => 3650000, 'rating' => '4.9 (96)', 'tag' => 'Mới'],
          ['img' => 'thung-50l.webp', 'title' => 'Thùng gỗ sồi 50L vận hành thực tế', 'loc' => 'Nhà hàng / Quán', 'price' => 4890000, 'old' => 5400000, 'rating' => '4.7 (77)', 'tag' => 'Ưu đãi'],
          ['img' => 'thung-10l.webp', 'title' => 'Thùng gỗ sồi 10L ngâm rượu', 'loc' => 'Gia đình', 'price' => 1890000, 'old' => 2200000, 'rating' => '4.9 (128)', 'tag' => 'Bán chạy'],
          ['img' => 'thung-20l.webp', 'title' => 'Thùng gỗ sồi 20L vòi crom', 'loc' => 'Gia đình / Quán nhỏ', 'price' => 2590000, 'old' => 2990000, 'rating' => '4.8 (214)', 'tag' => 'Phổ biến'],
          ['img' => 'thung-20l.webp', 'title' => 'Thùng gỗ sồi 20L vòi crom', 'loc' => 'Gia đình / Quán nhỏ', 'price' => 2590000, 'old' => 2990000, 'rating' => '4.8 (214)', 'tag' => 'Phổ biến'],
          ['img' => 'thung-30l.webp', 'title' => 'Thùng gỗ sồi 30L thực tế', 'loc' => 'Gia đình / Quán nhậu', 'price' => 3290000, 'old' => 3650000, 'rating' => '4.9 (96)', 'tag' => 'Mới'],
        ];
      @endphp
      @foreach ($bestSellers as $i => $p)
      <div data-anim-child="slide-up delay-{{ $i + 1 }}" class="col-6 col-md-6 col-lg-3">
        @include('user.partials.product-card', ['product' => $p, 'class' => 'bg-white'])
      </div>
      @endforeach
    </div>
  </div>
</section>
