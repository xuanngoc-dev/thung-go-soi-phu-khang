<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div data-anim-wrap>
    <div class="container">
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
    </div>

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

    <div data-anim-child="slide-up delay-2" class="categories-marquee pt-40 sm:pt-20" aria-label="Danh mục sản phẩm">
      <div class="categories-marquee__track">
        @foreach ([false, true] as $isDuplicate)
          @foreach ($categories as $cat)
            <article
              class="categories-marquee__item"
              @if ($isDuplicate) aria-hidden="true" @endif
            >
              <div class="categories-marquee__image">
                <img
                  src="{{ asset('user/img/categories/'.$cat['img']) }}"
                  alt="{{ $isDuplicate ? '' : $cat['name'] }}"
                  loading="lazy"
                >
                <div class="categories-marquee__overlay">
                  <a
                    href="#"
                    class="button -sm -dark-1 bg-accent-1 text-white categories-marquee__btn"
                    @if ($isDuplicate) tabindex="-1" @endif
                  >
                    Chi tiết
                  </a>
                </div>
              </div>
              <div class="categories-marquee__content">
                <h3 class="categories-marquee__title">{{ $cat['name'] }}</h3>
                <p class="categories-marquee__count">{{ $cat['count'] }}</p>
              </div>
            </article>
          @endforeach
        @endforeach
      </div>
    </div>
  </div>
</section>
