@php
  $heroSlides = [
    ['src' => 'user/img/hero/phukhang/slide.webp', 'alt' => 'Thùng gỗ sồi Phú Khang'],
    ['src' => 'user/img/hero/phukhang/banner.webp', 'alt' => 'Banner thùng gỗ sồi'],
    ['src' => 'user/img/hero/phukhang/ngam-ruou.jpg', 'alt' => 'Ngâm rượu gỗ sồi'],
    ['src' => 'user/img/hero/phukhang/trung-bay.jpg', 'alt' => 'Trưng bày sản phẩm Phú Khang'],
  ];

  $heroTitles = [
    'Tinh hoa gỗ sồi – Khởi nguồn hương vị rượu ngon',
    'Thùng gỗ sồi nhập khẩu – Chắc chắn, bền đẹp',
    'Ngâm rượu chuẩn vị – Từ 10L đến 300L',
    'Phú Khang – Đồng hành cùng hương vị truyền thống',
  ];

  $heroCategories = [
    'Thùng rượu gỗ sồi',
    'Bàn trang trí',
    'Bồn tắm gỗ',
    'Phòng xông hơi',
    'Trống các loại',
    'Thùng đựng gạo',
    'Chậu ngâm chân',
    'Sản phẩm khác',
  ];
@endphp

<section class="hero -type-1 hero--compact" data-hero>
  <div class="hero__bg">
    <div class="hero__slides" data-hero-slides>
      @foreach ($heroSlides as $index => $slide)
        <img
          src="{{ asset($slide['src']) }}"
          alt="{{ $slide['alt'] }}"
          class="hero__slide{{ $index === 0 ? ' is-active' : '' }}"
          @if ($index === 0) fetchpriority="high" @else loading="lazy" @endif
        >
      @endforeach
    </div>
    <img src="{{ asset('user/img/hero/1/shape.svg') }}" alt="" class="hero__shape">
  </div>

  <div data-anim-wrap class="container">
    <div class="row justify-center">
      <div class="col-xl-8 col-lg-10">
        <div data-anim-child="slide-up" class="hero__content">
          <h1 class="hero__title">
            <span data-hero-typing aria-live="polite">{{ $heroTitles[0] }}</span><span class="hero__cursor" aria-hidden="true"></span>
          </h1>

          <p class="hero__text">
            Thùng Gỗ Sồi Phú Khang cung cấp thùng ngâm rượu nhập khẩu, gia công chắc chắn, đa dạng dung tích từ 10L đến 300L, giao hàng toàn quốc.
          </p>

          <div class="hero__search-wrap mt-35 md:mt-25">
            <form action="#" method="get" class="hero__search" data-hero-search>
              <label class="hero__search-field hero__keyword" for="hero-keyword">
                <i class="icon-search hero__search-icon" aria-hidden="true"></i>
                <span class="hero__search-meta">
                  <span class="hero__search-label">Từ khóa</span>
                  <input
                    id="hero-keyword"
                    type="search"
                    name="q"
                    class="hero__keyword-input"
                    placeholder="Tìm thùng gỗ sồi, bàn trang trí..."
                    autocomplete="off"
                  >
                </span>
              </label>

              <div class="hero__search-divider" aria-hidden="true"></div>

              <div class="hero__search-field js-select-control js-form-dd">
                <button type="button" class="hero__search-trigger" data-x-click="location">
                  <i class="icon-pin hero__search-icon" aria-hidden="true"></i>
                  <span class="hero__search-meta">
                    <span class="hero__search-label">Danh mục</span>
                    <span class="js-select-control-chosen">Chọn loại sản phẩm</span>
                  </span>
                </button>

                <div class="searchFormItemDropdown -location" data-x="location" data-x-toggle="is-active">
                  <div class="searchFormItemDropdown__container">
                    <div class="searchFormItemDropdown__list sroll-bar-1">
                      @foreach ($heroCategories as $category)
                        <div class="searchFormItemDropdown__item">
                          <button type="button" class="js-select-control-button">
                            <span class="js-select-control-choice">{{ $category }}</span>
                            <span>Sản phẩm</span>
                          </button>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>

                <input type="hidden" name="category" value="" data-hero-category>
              </div>

              <button type="submit" class="hero__search-submit button -dark-1 bg-accent-1 text-white">
                <i class="icon-search text-16 mr-10"></i>
                <span>Tìm</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('styles')
<style>
  .hero.-type-1.hero--compact {
    padding-top: 150px;
    padding-bottom: 150px;
  }

  @media (max-width: 991px) {
    .hero.-type-1.hero--compact {
      padding-top: 120px;
      padding-bottom: 120px;
    }
  }

  @media (max-width: 767px) {
    .hero.-type-1.hero--compact {
      padding-top: 90px;
      padding-bottom: 48px;
    }

    .hero.-type-1.hero--compact .hero__search-wrap {
      margin-top: 20px;
      margin-bottom: 8px;
    }
  }

  .hero.-type-1 .hero__slides {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
  }

  .hero.-type-1 .hero__slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease;
  }

  .hero.-type-1 .hero__slide.is-active {
    opacity: 1;
  }

  .hero.-type-1 .hero__shape {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    object-fit: cover;
    z-index: 1;
    pointer-events: none;
  }

  @media (max-width: 991px) {
    .hero.-type-1 .hero__shape {
      height: 35px;
    }
  }

  .hero.-type-1 .hero__title {
    min-height: 2.4em;
  }

  @media (max-width: 767px) {
    .hero.-type-1 .hero__title {
      min-height: 3.6em;
    }
  }

  .hero.-type-1 .hero__cursor {
    display: inline-block;
    width: 3px;
    height: 0.85em;
    margin-left: 4px;
    background: currentColor;
    vertical-align: -0.08em;
    animation: hero-cursor-blink 0.8s step-end infinite;
  }

  @keyframes hero-cursor-blink {
    50% { opacity: 0; }
  }

  .hero__search-wrap {
    max-width: 760px;
    margin-left: auto;
    margin-right: auto;
  }

  .hero__search {
    display: flex;
    align-items: stretch;
    gap: 0;
    width: 100%;
    min-height: 58px;
    padding: 6px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
  }

  .hero__search-field {
    position: relative;
    display: flex;
    flex: 1 1 0;
    min-width: 0;
    align-items: center;
  }

  .hero__keyword,
  .hero__search-trigger {
    display: flex;
    align-items: center;
    gap: 10px;
    width: 100%;
    min-width: 0;
    padding: 0 14px;
    border: 0;
    background: transparent;
    text-align: left;
    cursor: text;
    color: inherit;
  }

  .hero__search-trigger {
    cursor: pointer;
  }

  .hero__search-icon {
    flex-shrink: 0;
    font-size: 18px;
    color: #757575;
  }

  .hero__search-meta {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
    width: 100%;
  }

  .hero__search-label {
    font-size: 12px;
    font-weight: 600;
    line-height: 1.2;
    color: #05073c;
  }

  .hero__keyword-input,
  .hero__search .js-select-control-chosen {
    width: 100%;
    border: 0;
    outline: 0;
    background: transparent;
    padding: 0;
    margin: 0;
    font: inherit;
    font-size: 14px;
    line-height: 1.3;
    color: #05073c;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .hero__keyword-input::placeholder {
    color: #757575;
    opacity: 1;
  }

  .hero__search-divider {
    flex-shrink: 0;
    width: 1px;
    align-self: stretch;
    margin: 8px 0;
    background: #e7e6e6;
  }

  .hero__search-submit {
    flex-shrink: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 110px;
    height: auto !important;
    padding: 0 22px !important;
    border-radius: 10px !important;
    white-space: nowrap;
  }

  .hero__search .searchFormItemDropdown {
    position: absolute;
    top: calc(100% + 8px);
    left: 0;
    right: 0;
    z-index: 30;
    padding-top: 0;
    opacity: 0;
    pointer-events: none;
    transition: 0.2s;
  }

  .hero__search .searchFormItemDropdown.is-active {
    opacity: 1;
    pointer-events: auto;
  }

  .hero__search .searchFormItemDropdown__container {
    width: 100%;
    min-width: 240px;
    max-width: calc(100vw - 24px);
    padding: 12px;
    border-radius: 12px;
    background: #fff;
    border: 1px solid #e7e6e6;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
  }

  .hero__search .searchFormItemDropdown__list {
    display: flex;
    flex-direction: column;
    max-height: 260px;
    overflow-y: auto;
  }

  .hero__search .searchFormItemDropdown__item button {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    min-height: 48px;
    padding: 0 14px;
    border: 0;
    border-radius: 10px;
    background: transparent;
    transition: 0.2s;
  }

  .hero__search .searchFormItemDropdown__item button > span:nth-child(1) {
    color: #05073c;
    font-size: 14px;
    font-weight: 500;
  }

  .hero__search .searchFormItemDropdown__item button > span:nth-child(2) {
    color: #717171;
    font-size: 13px;
  }

  .hero__search .searchFormItemDropdown__item button:hover,
  .hero__search .searchFormItemDropdown__item button.-is-button-active {
    background: #f5f5f5;
  }

  @media (max-width: 767px) {
    .hero__search {
      flex-wrap: nowrap;
      min-height: 52px;
      padding: 5px;
      border-radius: 12px;
    }

    .hero__search-label {
      display: none;
    }

    .hero__keyword,
    .hero__search-trigger {
      padding: 0 10px;
      gap: 8px;
    }

    .hero__search-submit {
      min-width: 72px;
      padding: 0 14px !important;
    }

    .hero__search-submit .mr-10 {
      margin-right: 0 !important;
    }

    .hero__search-submit span {
      display: none;
    }

    .hero__search .searchFormItemDropdown {
      left: auto;
      right: 0;
      min-width: 220px;
    }
  }
</style>
@endpush

@push('scripts')
<script>
  (() => {
    const root = document.querySelector('[data-hero]');
    if (!root) {
      return;
    }

    const titles = @json($heroTitles);
    const slides = root.querySelectorAll('[data-hero-slides] .hero__slide');
    const typingEl = root.querySelector('[data-hero-typing]');
    const form = root.querySelector('[data-hero-search]');
    const categoryInput = root.querySelector('[data-hero-category]');
    const chosenCategory = root.querySelector('.js-select-control-chosen');

    let slideIndex = 0;
    let titleIndex = 0;
    let charIndex = titles[0]?.length ?? 0;
    let isDeleting = true;

    const typeSpeed = 55;
    const deleteSpeed = 28;
    const holdDelay = 1800;
    const slideInterval = 5000;

    if (slides.length > 1) {
      window.setInterval(() => {
        slides[slideIndex].classList.remove('is-active');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.add('is-active');
      }, slideInterval);
    }

    const typeNext = () => {
      if (!typingEl || !titles.length) {
        return;
      }

      const current = titles[titleIndex];

      if (!isDeleting) {
        charIndex += 1;
        typingEl.textContent = current.slice(0, charIndex);

        if (charIndex === current.length) {
          isDeleting = true;
          window.setTimeout(typeNext, holdDelay);
          return;
        }

        window.setTimeout(typeNext, typeSpeed);
        return;
      }

      charIndex -= 1;
      typingEl.textContent = current.slice(0, Math.max(charIndex, 0));

      if (charIndex <= 0) {
        isDeleting = false;
        titleIndex = (titleIndex + 1) % titles.length;
        charIndex = 0;
        window.setTimeout(typeNext, 320);
        return;
      }

      window.setTimeout(typeNext, deleteSpeed);
    };

    if (typingEl && titles.length) {
      window.setTimeout(typeNext, holdDelay);
    }

    root.querySelectorAll('.js-select-control-button').forEach((button) => {
      button.addEventListener('click', () => {
        const choice = button.querySelector('.js-select-control-choice');
        if (choice && categoryInput) {
          categoryInput.value = choice.textContent.trim();
        }
      });
    });

    form?.addEventListener('submit', () => {
      if (categoryInput && chosenCategory && !categoryInput.value) {
        const label = chosenCategory.textContent.trim();
        if (label && label !== 'Chọn loại sản phẩm') {
          categoryInput.value = label;
        }
      }
    });
  })();
</script>
@endpush
