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
          [
            'img' => 'blog-1.webp',
            'title' => 'Thùng gỗ sồi 10L bao nhiêu tiền? Cách chọn thùng mini cho gia đình',
            'desc' => 'Gợi ý mức giá thực tế và tiêu chí chọn thùng 10L phù hợp nhu cầu ngâm rượu tại nhà.',
            'date' => '07/09/2026',
            'author' => 'Phú Khang',
            'views' => 1280,
          ],
          [
            'img' => 'blog-2.webp',
            'title' => 'Mua thùng gỗ sồi 20L – 30L giá tốt: tiêu chí vân gỗ, đai siết, vòi',
            'desc' => 'Những điểm cần kiểm tra trước khi mua thùng dung tích trung bình để dùng lâu bền.',
            'date' => '05/09/2026',
            'author' => 'Phú Khang',
            'views' => 964,
          ],
          [
            'img' => 'blog-3.webp',
            'title' => 'Tại sao nên dùng thùng rượu gỗ sồi trong gia đình?',
            'desc' => 'Lợi ích của gỗ sồi với hương vị rượu và cách bảo quản thùng đúng kỹ thuật.',
            'date' => '01/09/2026',
            'author' => 'Phú Khang',
            'views' => 1524,
          ],
          [
            'img' => 'blog-1.webp',
            'title' => 'Hướng dẫn xử lý thùng gỗ sồi mới trước khi ngâm rượu',
            'desc' => 'Các bước ngâm nước, kiểm tra kín và vệ sinh thùng mới để tránh mùi gỗ thô.',
            'date' => '28/08/2026',
            'author' => 'Phú Khang',
            'views' => 743,
          ],
          [
            'img' => 'blog-2.webp',
            'title' => 'Cách bảo quản thùng gỗ sồi khi tạm ngưng sử dụng',
            'desc' => 'Giữ thùng luôn ẩm vừa phải, tránh nứt gỗ và mốc khi không ngâm rượu trong thời gian dài.',
            'date' => '22/08/2026',
            'author' => 'Phú Khang',
            'views' => 611,
          ],
          [
            'img' => 'blog-3.webp',
            'title' => 'Nên chọn thùng 50L khi nào? Gợi ý cho quán và nhà hàng',
            'desc' => 'Phân tích dung tích phù hợp theo lượng rượu quay vòng, không gian trưng bày và ngân sách đầu tư.',
            'date' => '15/08/2026',
            'author' => 'Phú Khang',
            'views' => 892,
          ],
        ];
      @endphp
      @foreach ($posts as $post)
      <div class="col-6 col-md-4 col-lg-4">
        <a href="#" class="blogCard -type-home">
          <div class="blogCard__image">
            <img src="{{ asset('user/img/blog/'.$post['img']) }}" alt="{{ $post['title'] }}">
          </div>
          <div class="blogCard__content">
            <h3 class="blogCard__title text-16 fw-500">{{ $post['title'] }}</h3>
            <p class="blogCard__desc text-13 text-light-2 mt-5">{{ $post['desc'] }}</p>
            <div class="blogCard__meta text-12 text-light-2 mt-10">
              <span class="blogCard__meta-item">{{ $post['author'] }}</span>
              <span class="blogCard__meta-item">{{ $post['date'] }}</span>
              <span class="blogCard__views d-flex items-center">
                <svg class="blogCard__eye" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
                </svg>
                <span>{{ number_format($post['views'], 0, ',', '.') }}</span>
              </span>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
