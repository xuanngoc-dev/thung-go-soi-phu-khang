<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row y-gap-10 justify-between items-end">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Danh mục sản phẩm</h2>
      </div>
      <div class="col-auto">
        <button class="buttonArrow d-flex items-center">
          <span>Xem tất cả</span>
          <i class="icon-arrow-top-right text-16 ml-10"></i>
        </button>
      </div>
    </div>

    <div class="overflow-hidden pt-40 sm:pt-20 js-section-slider" data-anim-child="slide-up delay-2" data-slider-cols="xl-8 lg-5 md-4 sm-3 base-2" data-gap="16" data-pagination="js-dest-pagination">
      <div class="swiper-wrapper">
        @php
          $categories = [
            ['img' => 'cat-thung-ruou.webp', 'name' => 'Thùng rượu gỗ sồi', 'count' => '20+ mẫu'],
            ['img' => 'cat-ban-trang-tri.webp', 'name' => 'Bàn trang trí', 'count' => '12+ mẫu'],
            ['img' => 'cat-bon-tam.webp', 'name' => 'Bồn tắm gỗ', 'count' => '8+ mẫu'],
            ['img' => 'cat-trong.webp', 'name' => 'Trống các loại', 'count' => '10+ mẫu'],
            ['img' => 'cat-xong-hoi.webp', 'name' => 'Phòng xông hơi', 'count' => '6+ mẫu'],
            ['img' => 'cat-dung-gao.webp', 'name' => 'Thùng đựng gạo', 'count' => '9+ mẫu'],
            ['img' => 'cat-ngam-chan.webp', 'name' => 'Chậu ngâm chân', 'count' => '7+ mẫu'],
            ['img' => 'cat-khac.webp', 'name' => 'Sản phẩm khác', 'count' => '15+ mẫu'],
          ];
        @endphp
        @foreach ($categories as $cat)
        <div class="swiper-slide">
          <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
            <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
              <img src="{{ asset('user/img/categories/'.$cat['img']) }}" alt="{{ $cat['name'] }}" class="size-130 object-cover rounded-full">
            </div>
            <h3 class="featureImage__title text-16 fw-500 mt-20">{{ $cat['name'] }}</h3>
            <p class="featureImage__text text-14">{{ $cat['count'] }}</p>
          </a>
        </div>
        @endforeach
      </div>

      <div class="pagination -type-1 justify-center pt-60 md:pt-40 js-dest-pagination">
        <div class="pagination__button"></div>
      </div>
    </div>
  </div>
</section>
