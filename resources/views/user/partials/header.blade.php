    <header class="header -type-1 js-header">
      <div data-anim="fade delay-3" class="header__container container">
        <div class="headerMobile__left">
          <button class="header__menuBtn js-menu-button">
            <i class="icon-main-menu"></i>
          </button>
        </div>

        <div class="header__logo">
          <a href="{{ route('user.home') }}" class="header__logo">
            <img src="{{ asset('user/img/general/logo-phukhang.png') }}" alt="Thùng Gỗ Sồi Phú Khang" style="max-height: 48px; width: auto;">
          </a>

          <div class="xl:d-none ml-30">
            <div class="header__search js-liverSearch js-form-dd">
              <i class="icon-search text-18"></i>
              <input type="text" placeholder="Tìm thùng gỗ sồi, dung tích..." class="js-search" data-x-click="headerSearch">

              <div class="headerSearchRecent" data-x="headerSearch" data-x-toggle="is-active">
                <div class="headerSearchRecent__container">
                  <div class="headerSearchRecent__title">
                    <h4 class="text-18 fw-500">Tìm kiếm phổ biến</h4>
                  </div>

                  <div class="headerSearchRecent__list js-results">
                    <button class="headerSearchRecent__item js-search-option" data-x-click="headerSearch">
                      <div class="size-50 bg-white rounded-12 border-1 flex-center">
                        <i class="icon-price-tag text-20"></i>
                      </div>
                      <div class="ml-10">
                        <div class="fw-500 js-search-option-target">Thùng gỗ sồi 10L</div>
                        <div class="lh-14 text-14 text-light-2">Gia đình, ngâm thử</div>
                      </div>
                    </button>

                    <button class="headerSearchRecent__item js-search-option" data-x-click="headerSearch">
                      <div class="size-50 bg-white rounded-12 border-1 flex-center">
                        <i class="icon-price-tag text-20"></i>
                      </div>
                      <div class="ml-10">
                        <div class="fw-500 js-search-option-target">Thùng gỗ sồi 20L</div>
                        <div class="lh-14 text-14 text-light-2">Phổ biến nhất</div>
                      </div>
                    </button>

                    <button class="headerSearchRecent__item js-search-option" data-x-click="headerSearch">
                      <div class="size-50 bg-white rounded-12 border-1 flex-center">
                        <i class="icon-price-tag text-20"></i>
                      </div>
                      <div class="ml-10">
                        <div class="fw-500 js-search-option-target">Thùng gỗ sồi 50L</div>
                        <div class="lh-14 text-14 text-light-2">Quán nhậu, nhà hàng</div>
                      </div>
                    </button>

                    <button class="headerSearchRecent__item js-search-option" data-x-click="headerSearch">
                      <div class="size-50 bg-white rounded-12 border-1 flex-center">
                        <img src="{{ asset('user/img/products/thung-100l.webp') }}" alt="Thùng 100L" class="rounded-12">
                      </div>
                      <div class="ml-10">
                        <div class="text-overflow fw-500 js-search-option-target">Thùng gỗ sồi 100L</div>
                        <div class="lh-14 text-14 text-light-2">Kinh doanh</div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="headerMobile__right">
          <button class="d-flex">
            <i class="icon-search text-18"></i>
          </button>

          <button class="d-flex ml-20">
            <i class="icon-person text-18"></i>
          </button>
        </div>

        <div class="header__right">
          <div class="headerDropdown lg:d-none js-form-dd">
            <div class="headerDropdown__button" data-x-click="headerDestinations">
              Danh mục
              <i class="icon-chevron-down text-18"></i>
            </div>

            <div class="headerDropdown__content" data-x="headerDestinations" data-x-toggle="is-active">
              <div class="tabsMenu">
                <div class="tabsMenu__container">
                  <div class="tabsMenu__content p-20">
                    <div class="row y-gap-15">
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Thùng rượu gỗ sồi</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Bàn trang trí</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Bồn tắm gỗ</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Trống các loại</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Phòng xông hơi</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Thùng đựng gạo</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Chậu ngâm chân</a>
                      </div>
                      <div class="col-6">
                        <a class="d-block fw-500" href="#">Sản phẩm khác</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="lg:d-none ml-20 fw-500">Giới thiệu</a>
          <a href="#" class="lg:d-none ml-20 fw-500">Tin tức</a>
          <a href="#" class="lg:d-none ml-20 fw-500">Liên hệ</a>

          <a href="tel:0866333766" class="button -sm -dark-1 bg-accent-1 rounded-200 text-white ml-30">
            Gọi ngay
          </a>

          <button class="header__menuBtn ml-30 js-menu-button">
            <i class="icon-main-menu"></i>
          </button>
        </div>
      </div>
    </header>
