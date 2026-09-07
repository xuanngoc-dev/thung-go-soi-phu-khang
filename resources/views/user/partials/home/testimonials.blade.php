<section data-anim-wrap class="relative layout-pt-xl layout-pb-xl">
  <div data-anim-child="slide-up delay-1" class="sectionBg md:d-none">
    <img src="{{ asset('user/img/hero/phukhang/trung-bay.jpg') }}" alt="Đánh giá khách hàng">
  </div>

  <div data-anim-child="slide-up delay-3" class="container">
    <div class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Đánh giá từ khách hàng</h2>
      </div>
    </div>

    <div class="relative pt-40 sm:pt-20">
      <div class="overflow-hidden pb-30 js-section-slider" data-gap="30" data-slider-cols="xl-2 lg-2 md-1 sm-1 base-1" data-nav-prev="js-testimonials-prev" data-nav-next="js-testimonials-next">
        <div class="swiper-wrapper">
          @php
            $reviews = [
              ['img' => '1.webp', 'title' => 'Uy tín rõ ràng', 'text' => 'Mua thùng tại Phú Khang thấy rõ sự uy tín, hỗ trợ tận tình ngay cả sau khi giao hàng, rất đáng tin cậy.', 'name' => 'Anh Tuấn', 'role' => 'Chủ quán nhậu'],
              ['img' => '2.webp', 'title' => 'Chất lượng tốt', 'text' => 'Trước khi mua khá cân nhắc, nhưng sau khi dùng tôi thấy sản phẩm rất chắc, gỗ đẹp, rượu ngâm êm hơn rõ rệt.', 'name' => 'Chị Hoa', 'role' => 'Khách hàng gia đình'],
              ['img' => '3.webp', 'title' => 'Vừa dùng vừa trưng bày', 'text' => 'Thùng vừa ngâm rượu vừa trưng bày đẹp, phù hợp cho gia đình và quán, ai nhìn cũng khen.', 'name' => 'Chị Mỹ', 'role' => 'Chủ homestay'],
              ['img' => '4.webp', 'title' => 'Tư vấn tận tâm', 'text' => 'Được tư vấn kỹ từ khâu chọn thùng đến cách xử lý ban đầu, dùng yên tâm đúng như cam kết của Phú Khang.', 'name' => 'Anh Thể', 'role' => 'Khách hàng Hà Nội'],
              ['img' => '5.webp', 'title' => 'Giao hàng nhanh', 'text' => 'Đặt hàng xong được giao đúng hẹn, đóng gói cẩn thận, thùng nguyên vẹn và đẹp hơn cả hình ảnh trên web.', 'name' => 'Anh Long', 'role' => 'Chủ nhà hàng'],
              ['img' => '6.webp', 'title' => 'Đáng tiền đầu tư', 'text' => 'Dùng được một thời gian thấy gỗ không bị thấm, vòi inox chắc chắn, rất hài lòng với mức giá đã trả.', 'name' => 'Chị Lan', 'role' => 'Khách hàng TP.HCM'],
            ];
          @endphp
          @foreach ($reviews as $r)
          <div class="swiper-slide">
            <div class="d-flex items-start py-30 px-30 border-1 rounded-12 bg-white -hover-shadow">
              <div class="testimonials -type-1">
                <div class="testimonials__image size-80 rounded-full" style="margin: 0;">
                  <img src="{{ asset('user/img/testimonials/phukhang/'.$r['img']) }}" alt="{{ $r['name'] }}" class="object-cover rounded-full">
                  <div class="testimonials__icon">
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="ml-20">
                <div class="lh-16 text-16 fw-500">{{ $r['name'] }}</div>
                <div class="lh-16 text-14 text-light-2">{{ $r['role'] }}</div>
                <div class="text-16 fw-500 text-accent-1 mt-15">{{ $r['title'] }}</div>
                <div class="text-15 mt-10">{{ $r['text'] }}</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="navAbsolute -type-1 justify-between">
        <button class="navAbsolute__button bg-white js-testimonials-prev" type="button">
          <i class="icon-arrow-left text-14"></i>
        </button>
        <button class="navAbsolute__button bg-white js-testimonials-next" type="button">
          <i class="icon-arrow-right text-14"></i>
        </button>
      </div>
    </div>
  </div>
</section>
