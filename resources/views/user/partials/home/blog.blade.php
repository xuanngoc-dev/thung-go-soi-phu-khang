<section class="layout-pt-xl layout-pb-xl section-bg-muted">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
      <div class="col-auto">
        <h2 class="text-30 md:text-24">Tin tức &amp; kiến thức</h2>
      </div>
      <div class="col-auto">
        <button class="buttonArrow d-flex items-center">
          <span>Xem tất cả</span>
          <i class="icon-arrow-top-right text-16 ml-10"></i>
        </button>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="row y-gap-30 pt-40 sm:pt-20">
      @php
        $posts = [
          ['img' => 'blog-1.webp', 'badge' => 'Hướng dẫn', 'title' => 'Thùng gỗ sồi 10L bao nhiêu tiền? Cách chọn thùng mini cho gia đình', 'date' => '07/09/2026', 'author' => 'Phú Khang'],
          ['img' => 'blog-2.webp', 'badge' => 'Mua hàng', 'title' => 'Mua thùng gỗ sồi 20L – 30L giá tốt: tiêu chí vân gỗ, đai siết, vòi', 'date' => '05/09/2026', 'author' => 'Phú Khang'],
          ['img' => 'blog-3.webp', 'badge' => 'Kinh nghiệm', 'title' => 'Tại sao nên dùng thùng rượu gỗ sồi trong gia đình?', 'date' => '01/09/2026', 'author' => 'Phú Khang'],
        ];
      @endphp
      @foreach ($posts as $post)
      <div class="col-lg-4 col-md-6">
        <a href="#" class="blogCard -type-1">
          <div class="blogCard__image ratio ratio-41:30">
            <img src="{{ asset('user/img/blog/'.$post['img']) }}" alt="{{ $post['title'] }}" class="img-ratio rounded-12">
            <div class="blogCard__badge">{{ $post['badge'] }}</div>
          </div>
          <div class="blogCard__content mt-30">
            <div class="blogCard__info text-14">
              <div class="lh-13">{{ $post['date'] }}</div>
              <div class="blogCard__line"></div>
              <div class="lh-13">Bởi {{ $post['author'] }}</div>
            </div>
            <h3 class="blogCard__title text-18 fw-500 mt-10">{{ $post['title'] }}</h3>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
