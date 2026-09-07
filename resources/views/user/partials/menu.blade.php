    <div class="menu js-menu">
      <div class="menu__overlay js-menu-button"></div>

      <div class="menu__container">
        <div class="menu__header">
          <h4>Menu chính</h4>

          <button class="js-menu-button"><i class="icon-cross text-10"></i></button>
        </div>

        <div class="menu__content">
          <ul class="menuNav js-navList">
            <li class="menuNav__item">
              <a href="{{ route('user.home') }}">Trang chủ</a>
            </li>

            <li class="menuNav__item -has-submenu js-has-submenu">
              <a>
                Sản phẩm
                <i class="icon-chevron-right"></i>
              </a>

              <ul class="submenu">
                <li class="submenu__item js-nav-list-back">
                  <a>Quay lại</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Thùng rượu gỗ sồi</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Bàn trang trí</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Bồn tắm gỗ</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Trống các loại</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Phòng xông hơi</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Thùng gỗ đựng gạo</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Chậu ngâm chân</a>
                </li>
                <li class="submenu__item">
                  <a href="#">Sản phẩm khác</a>
                </li>
              </ul>
            </li>

            <li class="menuNav__item">
              <a href="#">Giới thiệu</a>
            </li>

            <li class="menuNav__item">
              <a href="#">Khuyến mãi</a>
            </li>

            <li class="menuNav__item">
              <a href="#">Tin tức</a>
            </li>

            <li class="menuNav__item">
              <a href="#">FAQ</a>
            </li>

            <li class="menuNav__item">
              <a href="#">Liên hệ</a>
            </li>
          </ul>
        </div>

        <div class="menu__footer">
          <i class="icon-headphone text-50"></i>

          <div class="text-20 lh-12 fw-500 mt-20">
            <div>Tư vấn miễn phí</div>
            <div class="text-accent-1">0866333766</div>
          </div>

          <div class="d-flex items-center x-gap-10 pt-30">
            <div>
              <a class="d-block" href="#" aria-label="Facebook">
                <i class="icon-facebook"></i>
              </a>
            </div>
            <div>
              <a class="d-block" href="#" aria-label="Zalo">
                <i class="icon-twitter"></i>
              </a>
            </div>
            <div>
              <a class="d-block" href="#" aria-label="Instagram">
                <i class="icon-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
