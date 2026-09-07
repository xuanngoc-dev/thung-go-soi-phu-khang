<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Vì sao chọn Phú Khang</h2>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="relative pt-40 sm:pt-20">
      <div
        class="overflow-hidden pb-30 js-section-slider"
        data-gap="30"
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
                'img' => 'ck1.webp',
                'alt' => 'Gỗ tự nhiên',
                'title' => 'Gỗ sồi tự nhiên',
                'text' => 'Nguyên liệu gỗ sồi tự nhiên, không hóa chất độc hại, an toàn khi ngâm rượu lâu dài.',
              ],
              [
                'img' => 'ck2.webp',
                'alt' => 'Uy tín',
                'title' => 'Uy tín – chất lượng',
                'text' => 'Gia công chắc chắn, đai siết đều, hạn chế rò rỉ; hỗ trợ hướng dẫn xử lý thùng mới.',
              ],
              [
                'img' => 'ck3.webp',
                'alt' => 'Nhập khẩu',
                'title' => 'Sản phẩm cao cấp',
                'text' => 'Đa dạng dung tích và phụ kiện (vòi inox, vòi crom), phù hợp gia đình đến kinh doanh.',
              ],
              [
                'img' => 'ck4.webp',
                'alt' => 'Giao hàng',
                'title' => 'Giao hàng toàn quốc',
                'text' => 'Đóng gói cẩn thận, giao nhanh toàn quốc; tư vấn chọn dung tích theo nhu cầu thực tế.',
              ],
            ];
          @endphp
          @foreach ($reasons as $reason)
          <div class="swiper-slide">
            <div class="featureIcon -type-1 why-choose-card py-30 px-30 border-1 rounded-12 bg-white -hover-shadow h-full">
              <div class="featureIcon__icon size-70 rounded-12 border-1 flex-center bg-light-1">
                <img src="{{ asset('user/img/icons/'.$reason['img']) }}" alt="{{ $reason['alt'] }}" style="width:40px;height:40px;object-fit:contain;">
              </div>
              <h3 class="featureIcon__title text-18 fw-500 mt-25">{{ $reason['title'] }}</h3>
              <p class="featureIcon__text mt-10">{{ $reason['text'] }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="navAbsolute -type-1 justify-between">
        <button class="navAbsolute__button bg-white js-why-choose-prev" type="button" aria-label="Slide trước">
          <i class="icon-arrow-left text-14"></i>
        </button>
        <button class="navAbsolute__button bg-white js-why-choose-next" type="button" aria-label="Slide sau">
          <i class="icon-arrow-right text-14"></i>
        </button>
      </div>
    </div>
  </div>
</section>
