<section class="layout-pt-xl layout-pb-xl relative section-bg-oak">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Sản phẩm nổi bật</h2>
      </div>
      <div class="col-auto">
        <button class="buttonArrow d-flex items-center">
          <span>Xem tất cả</span>
          <i class="icon-arrow-top-right text-16 ml-10"></i>
        </button>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="relative pt-40 sm:pt-20">
      <div
        class="overflow-hidden pb-30 js-section-slider"
        data-gap="16"
        data-slider-cols="xl-4 lg-3 md-2 sm-2 base-2"
        data-loop
        data-autoplay="3500"
        data-nav-prev="js-slider1-prev"
        data-nav-next="js-slider1-next"
      >
        <div class="swiper-wrapper">
          @php
            $trending = [
              ['img' => 'thung-10l-inox.webp', 'title' => 'Thùng gỗ sồi 10L vòi inox', 'loc' => 'Gia đình', 'price' => 2050000, 'tag' => 'Cao cấp'],
              ['img' => 'thung-20l-crom.webp', 'title' => 'Thùng gỗ sồi 20L vòi crom', 'loc' => 'Gia đình / Quán', 'price' => 2750000, 'tag' => 'Bán chạy'],
              ['img' => 'thung-100l.webp', 'title' => 'Thùng gỗ sồi 100L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 8750000, 'tag' => 'Số lượng lớn'],
              ['img' => 'thung-200l.webp', 'title' => 'Thùng gỗ sồi 200L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 12900000, 'tag' => 'Xưởng'],
              ['img' => 'thung-200l.webp', 'title' => 'Thùng gỗ sồi 200L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 12900000, 'tag' => 'Xưởng'],
              ['img' => 'thung-300l.webp', 'title' => 'Thùng gỗ sồi 300L ghép thủ công', 'loc' => 'Xưởng sản xuất', 'price' => 18900000, 'tag' => 'Đặt hàng'],
              ['img' => 'thung-10l-crom.webp', 'title' => 'Thùng gỗ sồi 10L vòi crom cao cấp', 'loc' => 'Gia đình', 'price' => 2150000, 'tag' => 'Mới'],
              ['img' => 'thung-200l.webp', 'title' => 'Thùng gỗ sồi 200L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 12900000, 'tag' => 'Xưởng'],
              ['img' => 'thung-100l.webp', 'title' => 'Thùng gỗ sồi 100L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 8750000, 'tag' => 'Số lượng lớn'],
              ['img' => 'thung-200l.webp', 'title' => 'Thùng gỗ sồi 200L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 12900000, 'tag' => 'Xưởng'],
              ['img' => 'thung-200l.webp', 'title' => 'Thùng gỗ sồi 200L chuyên nghiệp', 'loc' => 'Kinh doanh', 'price' => 12900000, 'tag' => 'Xưởng'],
            ];
          @endphp
          @foreach ($trending as $p)
          <div class="swiper-slide">
            @include('user.partials.product-card', ['product' => $p, 'class' => 'bg-white'])
          </div>
          @endforeach
        </div>
      </div>

      <div class="navAbsolute -type-1 justify-between">
        <button class="navAbsolute__button bg-white js-slider1-prev" type="button">
          <i class="icon-arrow-left text-14"></i>
        </button>
        <button class="navAbsolute__button bg-white js-slider1-next" type="button">
          <i class="icon-arrow-right text-14"></i>
        </button>
      </div>
    </div>
  </div>
</section>
