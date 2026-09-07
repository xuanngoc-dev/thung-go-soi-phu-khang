<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Vì sao chọn Phú Khang</h2>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="pt-40 sm:pt-20">
      <div class="relative why-choose-slider">
        <div
          class="overflow-hidden js-section-slider"
          data-gap="16"
          data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1"
          data-loop
          data-autoplay="3500"
          data-nav-prev="js-why-choose-prev"
          data-nav-next="js-why-choose-next"
        >
          <div class="swiper-wrapper">
            @php
              $reasons = [
                [
                  'img' => 'products/thung-ngam-ruou.webp',
                  'alt' => 'Gỗ sồi tự nhiên',
                  'title' => 'Gỗ sồi tự nhiên',
                  'text' => 'Nguyên liệu gỗ sồi tự nhiên, không hóa chất độc hại, an toàn khi ngâm rượu lâu dài.',
                ],
                [
                  'img' => 'products/thung-20l-thuc-te.webp',
                  'alt' => 'Uy tín – chất lượng',
                  'title' => 'Uy tín – chất lượng',
                  'text' => 'Gia công chắc chắn, đai siết đều, hạn chế rò rỉ; hỗ trợ hướng dẫn xử lý thùng mới.',
                ],
                [
                  'img' => 'products/thung-10l-inox.webp',
                  'alt' => 'Sản phẩm cao cấp',
                  'title' => 'Sản phẩm cao cấp',
                  'text' => 'Đa dạng dung tích và phụ kiện (vòi inox, vòi crom), phù hợp gia đình đến kinh doanh.',
                ],
                [
                  'img' => 'hero/phukhang/trung-bay.jpg',
                  'alt' => 'Giao hàng toàn quốc',
                  'title' => 'Giao hàng toàn quốc',
                  'text' => 'Đóng gói cẩn thận, giao nhanh toàn quốc; tư vấn chọn dung tích theo nhu cầu thực tế.',
                ],
              ];
            @endphp
            @foreach ($reasons as $reason)
            <div class="swiper-slide">
              <div class="featureCard -type-1 -hover-1 why-choose-card overflow-hidden rounded-12">
                <div class="featureCard__image">
                  <img src="{{ asset('user/img/'.$reason['img']) }}" alt="{{ $reason['alt'] }}">
                </div>
                <div class="featureCard__content why-choose-card__content">
                  <div>
                    <h3 class="why-choose-card__title text-white">{{ $reason['title'] }}</h3>
                    <p class="why-choose-card__text text-white mt-10">{{ $reason['text'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="why-choose-nav">
          <button class="why-choose-nav__btn js-why-choose-prev" type="button" aria-label="Slide trước">
            <i class="icon-arrow-left text-16"></i>
          </button>
          <button class="why-choose-nav__btn js-why-choose-next" type="button" aria-label="Slide sau">
            <i class="icon-arrow-right text-16"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
