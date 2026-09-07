@extends('user.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <section class="hero -type-1">
      <div class="hero__bg">
        <img src="{{ asset('user/img/hero/1/1.png') }}" alt="image">
        <img src="{{ asset('user/img/hero/1/shape.svg') }}" alt="image">
      </div>

      <div data-anim-wrap class="container">
        <div class="row justify-center">
          <div class="col-xl-8 col-lg-10">
            <div data-anim-child="slide-up" class="hero__content">
              <h1 class="hero__title">
                Your world of joy
              </h1>

              <p class="hero__text">
                From local escapes to far-flung adventures, find what makes you happy anytime, anywhere
              </p>

              <div class="mt-60 md:mt-35">
                <div class="searchForm -type-1">
                  <div class="searchForm__form">
                    <div class="searchFormItem js-select-control js-form-dd">
                      <div class="searchFormItem__button" data-x-click="location">
                        <div class="searchFormItem__icon size-50 rounded-12 border-1 flex-center">
                          <i class="text-20 icon-pin"></i>
                        </div>
                        <div class="searchFormItem__content">
                          <h5>Where</h5>
                          <div class="js-select-control-chosen">Search destinations</div>
                        </div>
                      </div>

                      <div class="searchFormItemDropdown -location" data-x="location" data-x-toggle="is-active">
                        <div class="searchFormItemDropdown__container">
                          <div class="searchFormItemDropdown__list sroll-bar-1">

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Europe</span>
                                <span>Continent</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">France</span>
                                <span>Country</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">London</span>
                                <span>Destinations</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Asia</span>
                                <span>Continent</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">United States</span>
                                <span>Country</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Tokio</span>
                                <span>Destinations</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Africa</span>
                                <span>Continent</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">New Zealand</span>
                                <span>Country</span>
                              </button>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="searchFormItem js-select-control js-form-dd js-calendar">
                      <div class="searchFormItem__button" data-x-click="calendar">
                        <div class="searchFormItem__icon size-50 rounded-12 border-1 flex-center">
                          <i class="text-20 icon-calendar"></i>
                        </div>
                        <div class="searchFormItem__content">
                          <h5>When</h5>
                          <div>
                            <span class="js-first-date">Add dates</span>
                            <span class="js-last-date"></span>
                          </div>
                        </div>
                      </div>


                      <div class="searchFormItemDropdown -calendar" data-x="calendar" data-x-toggle="is-active">
                        <div class="searchFormItemDropdown__container">

                          <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                              <div class="bg-white rounded-4">
                                <div class="elCalendar js-calendar-el-calendar"></div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="searchFormItem js-select-control js-form-dd">
                      <div class="searchFormItem__button" data-x-click="tour-type">
                        <div class="searchFormItem__icon size-50 rounded-12 border-1 flex-center">
                          <i class="text-20 icon-flag"></i>
                        </div>
                        <div class="searchFormItem__content">
                          <h5>Tour Type</h5>
                          <div class="js-select-control-chosen">All tour</div>
                        </div>
                      </div>

                      <div class="searchFormItemDropdown -tour-type" data-x="tour-type" data-x-toggle="is-active">
                        <div class="searchFormItemDropdown__container">
                          <div class="searchFormItemDropdown__list sroll-bar-1">

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">City Tour</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Hiking</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Food Tour</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Cultural Tours</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Museums Tours</span>
                              </button>
                            </div>

                            <div class="searchFormItemDropdown__item">
                              <button class="js-select-control-button">
                                <span class="js-select-control-choice">Beach Tours</span>
                              </button>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="searchForm__button">
                    <button class="button -dark-1 bg-accent-1 text-white">
                      <i class="icon-search text-16 mr-10"></i>
                      Search
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-xl">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Why choose Tourz</h2>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row md:x-gap-20 pt-40 sm:pt-20 mobile-css-slider -w-280">

          <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 pr-40 md:pr-0">
              <div class="featureIcon__icon">
                <img src="{{ asset('user/img/icons/1/ticket.svg') }}" alt="icon">
              </div>

              <h3 class="featureIcon__title text-18 fw-500 mt-30">Ultimate flexibility</h3>
              <p class="featureIcon__text mt-10">You&#39;re in control, with free cancellation and payment options to satisfy any plan or budget.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 pr-40 md:pr-0">
              <div class="featureIcon__icon">
                <img src="{{ asset('user/img/icons/1/hot-air-balloon.svg') }}" alt="icon">
              </div>

              <h3 class="featureIcon__title text-18 fw-500 mt-30">Memorable experiences</h3>
              <p class="featureIcon__text mt-10">Browse and book tours and activities so incredible, you&#39;ll want to tell your friends.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 pr-40 md:pr-0">
              <div class="featureIcon__icon">
                <img src="{{ asset('user/img/icons/1/diamond.svg') }}" alt="icon">
              </div>

              <h3 class="featureIcon__title text-18 fw-500 mt-30">Quality at our core</h3>
              <p class="featureIcon__text mt-10">High quality standards. Millions of reviews. A tourz company.</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 pr-40 md:pr-0">
              <div class="featureIcon__icon">
                <img src="{{ asset('user/img/icons/1/medal.svg') }}" alt="icon">
              </div>

              <h3 class="featureIcon__title text-18 fw-500 mt-30">Award-winning support</h3>
              <p class="featureIcon__text mt-10">New price? New plan? No problem. We&#39;re here to help, 24/7.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-xl">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Trending destinations</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div class="overflow-hidden pt-40 sm:pt-20 js-section-slider" data-anim-child="slide-up delay-2" data-slider-cols="xl-8 lg-5 md-4 sm-3 base-2" data-gap="36" data-pagination="js-dest-pagination">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/1.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Paris</h3>
                <p class="featureImage__text text-14">100+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/2.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Singapore</h3>
                <p class="featureImage__text text-14">300+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/3.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Roma</h3>
                <p class="featureImage__text text-14">400+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/4.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Bangkok</h3>
                <p class="featureImage__text text-14">100+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/5.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Bali</h3>
                <p class="featureImage__text text-14">600+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/6.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Phuket</h3>
                <p class="featureImage__text text-14">200+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/7.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Tokyo</h3>
                <p class="featureImage__text text-14">700+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/8.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Cappadocia</h3>
                <p class="featureImage__text text-14">900+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/9.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Paris</h3>
                <p class="featureImage__text text-14">100+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/10.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Singapore</h3>
                <p class="featureImage__text text-14">300+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/11.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Roma</h3>
                <p class="featureImage__text text-14">400+ Tours</p>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="featureImage -type-1 text-center -hover-image-scale">
                <div class="featureImage__image mx-auto rounded-full -hover-image-scale__image">
                  <img src="{{ asset('user/img/destinationCards/1/12.png') }}" alt="image" class="size-130 object-cover rounded-full">
                </div>

                <h3 class="featureImage__title text-16 fw-500 mt-20">Bangkok</h3>
                <p class="featureImage__text text-14">100+ Tours</p>
              </a>
            </div>

          </div>

          <div class="pagination -type-1 justify-center pt-60 md:pt-40 js-dest-pagination">
            <div class="pagination__button"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-xl layout-pb-xl">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Find Popular Tours</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div class="row y-gap-30 justify-between pt-40 sm:pt-20 mobile-css-slider -w-300">

          <div data-anim-child="slide-up delay-1" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/1.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  Paris, France
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Centipede Tour - Guided Arizona Desert Tour by ATV</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$189,25</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-2" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/2.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  New York, USA
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Molokini and Turtle Town Snorkeling Adventure Aboard</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$225,00</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/3.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  London, UK
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Westminster Walking Tour &amp; Westminster Abbey Entry</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$943,00</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/4.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  New York, USA
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>All Inclusive Ultimate Circle Island Day Tour with Lunch</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$771,00</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-5" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/5.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  Paris, France
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Space Center Houston Admission Ticket</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$189,25</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-6" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/6.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  New York, USA
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Clear Kayak Tour of Shell Key Preserve and Tampa Bay Area</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$225,00</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-7" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/7.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  London, UK
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>History and Hauntings of Salem Guided Walking Tour</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$943,00</span></div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-8" class="col-lg-3 col-md-6">

            <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12  -hover-shadow">
              <div class="tourCard__header">
                <div class="tourCard__image ratio ratio-28:20">
                  <img src="{{ asset('user/img/tourCards/1/9.png') }}" alt="image" class="img-ratio rounded-12">
                </div>

                <button class="tourCard__favorite">
                  <i class="icon-heart"></i>
                </button>
              </div>

              <div class="tourCard__content px-10 pt-10">
                <div class="tourCard__location d-flex items-center text-13 text-light-2">
                  <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                  New York, USA
                </div>

                <h3 class="tourCard__title text-16 fw-500 mt-5">
                  <span>Mauna Kea Summit Sunset and Stars Free Astro Photos Hilo Kona Waikoloa Pick Up</span>
                </h3>

                <div class="tourCard__rating d-flex items-center text-13 mt-5">
                  <div class="d-flex x-gap-5">

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                    <div><i class="icon-star text-10 text-yellow-2"></i></div>

                  </div>

                  <span class="text-dark-1 ml-10">4.8 (269)</span>
                </div>

                <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                  <div class="d-flex items-center">
                    <i class="icon-clock text-16 mr-5"></i>
                    4 days
                  </div>

                  <div>From <span class="text-16 fw-500">$771,00</span></div>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section data-anim="slide-up" class="cta -type-2">
      <div class="cta__bg">
        <img src="{{ asset('user/img/cta/2/bg.png') }}" alt="image">

        <div class="cta__image">
          <img src="{{ asset('user/img/cta/2/1.png') }}" alt="image">
          <img src="{{ asset('user/img/cta/2/shape.svg') }}" alt="image">
          <img src="{{ asset('user/img/cta/2/shape2.svg') }}" alt="image">
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7">
            <div class="cta__content">
              <h2 class="text-40 md:text-30  lh-13">
                Grab up to <span class="text-accent-1">35% off</span><br class="lg:d-none">
                on your favorite<br class="lg:d-none">
                Destination
              </h2>

              <p class="mt-10">
                Limited time offer, don't miss the opportunity
              </p>

              <div class="mt-30 md:mt-20">
                <button class="button -md -dark-1 bg-accent-1 text-white">
                  Book Now
                  <i class="icon-arrow-top-right ml-10 text-16"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-xl layout-pb-xl">
      <div class="container">
        <div class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Popular things to do</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-wrap class="grid -type-1 pt-40 sm:pt-20">

          <a href="#" data-anim-child="slide-up delay-1" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/1.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                Cruises
              </h4>
            </div>
          </a>

          <a href="#" data-anim-child="slide-up delay-2" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/2.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                Beach Tours
              </h4>
            </div>
          </a>

          <a href="#" data-anim-child="slide-up delay-3" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/3.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                City Tours
              </h4>
            </div>
          </a>

          <a href="#" data-anim-child="slide-up delay-4" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/4.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                Museum Tour
              </h4>
            </div>
          </a>

          <a href="#" data-anim-child="slide-up delay-5" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/5.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                Food
              </h4>
            </div>
          </a>

          <a href="#" data-anim-child="slide-up delay-6" class="featureCard -type-1 -hover-1 overflow-hidden rounded-12 px-30 py-30">
            <div class="featureCard__image">
              <img src="{{ asset('user/img/features/1/6.png') }}" alt="image">
            </div>

            <div class="featureCard__content">
              <h4 class="text-white">
                Hiking
              </h4>
            </div>
          </a>

        </div>
      </div>
    </section>

    <section class="layout-pt-xl layout-pb-xl relative">
      <div class="sectionBg -w-1530 rounded-12 bg-light-1"></div>

      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Top Trending</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="relative pt-40 sm:pt-20">
          <div class="overflow-hidden pb-30 js-section-slider" data-gap="30" data-slider-cols="xl-4 lg-3 md-2 sm-1 base-1" data-nav-prev="js-slider1-prev" data-nav-next="js-slider1-next">
            <div class="swiper-wrapper">

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/1.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Centipede Tour - Guided Arizona Desert Tour by ATV</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$189,25</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/2.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Molokini and Turtle Town Snorkeling Adventure Aboard</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$225,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/3.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      London, UK
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Westminster Walking Tour &amp; Westminster Abbey Entry</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$943,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/4.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>All Inclusive Ultimate Circle Island Day Tour with Lunch</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$771,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/5.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      Paris, France
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Centipede Tour - Guided Arizona Desert Tour by ATV</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$189,25</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/6.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      New York, USA
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Molokini and Turtle Town Snorkeling Adventure Aboard</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$225,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

              <div class="swiper-slide">

                <a href="" class="tourCard -type-1 py-10 px-10 border-1 rounded-12 bg-white -hover-shadow">
                  <div class="tourCard__header">
                    <div class="tourCard__image ratio ratio-28:20">
                      <img src="{{ asset('user/img/tourCards/1/7.png') }}" alt="image" class="img-ratio rounded-12">
                    </div>

                    <button class="tourCard__favorite">
                      <i class="icon-heart"></i>
                    </button>
                  </div>

                  <div class="tourCard__content px-10 pt-10">
                    <div class="tourCard__location d-flex items-center text-13 text-light-2">
                      <i class="icon-pin d-flex text-16 text-light-2 mr-5"></i>
                      London, UK
                    </div>

                    <h3 class="tourCard__title text-16 fw-500 mt-5">
                      <span>Westminster Walking Tour &amp; Westminster Abbey Entry</span>
                    </h3>

                    <div class="tourCard__rating d-flex items-center text-13 mt-5">
                      <div class="d-flex x-gap-5">

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                        <div><i class="icon-star text-10 text-yellow-2"></i></div>

                      </div>

                      <span class="text-dark-1 ml-10">4.8 (269)</span>
                    </div>

                    <div class="d-flex justify-between items-center border-1-top text-13 text-dark-1 pt-10 mt-10">
                      <div class="d-flex items-center">
                        <i class="icon-clock text-16 mr-5"></i>
                        4 days
                      </div>

                      <div>From <span class="text-16 fw-500">$943,00</span></div>
                    </div>
                  </div>
                </a>

              </div>

            </div>
          </div>

          <div class="navAbsolute">
            <button class="navAbsolute__button bg-white js-slider1-prev">
              <i class="icon-arrow-left text-14"></i>
            </button>

            <button class="navAbsolute__button bg-white js-slider1-next">
              <i class="icon-arrow-right text-14"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section data-anim-wrap class="relative layout-pt-xl layout-pb-xl">
      <div data-anim-child="slide-up delay-1" class="sectionBg md:d-none">
        <img src="{{ asset('user/img/testimonials/1/1.png') }}" alt="image">
      </div>

      <div data-anim-child="slide-up delay-3" class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Customer Reviews</h2>
          </div>
        </div>

        <div class="row justify-center pt-60 md:pt-20">
          <div class="col-xl-6 col-md-8 col-sm-10">
            <div class="overflow-hidden js-section-slider" data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1" data-pagination="js-testimonials-pagination">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonials -type-1 pt-10 text-center">
                    <div class="testimonials__image size-100 rounded-full">
                      <img src="{{ asset('user/img/testimonials/1/2.png') }}" alt="image">

                      <div class="testimonials__icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                        </svg>
                      </div>
                    </div>

                    <div class="text-18 fw-500 text-accent-1 mt-60 md:mt-40">Great quality!</div>

                    <div class="text-20 fw-500 mt-20">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-20 md:mt-40">
                      <div class="lh-16 text-16 fw-500">Brooklyn Simmons</div>
                      <div class="lh-16">Web Developer</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 pt-10 text-center">
                    <div class="testimonials__image size-100 rounded-full">
                      <img src="{{ asset('user/img/testimonials/1/2.png') }}" alt="image">

                      <div class="testimonials__icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                        </svg>
                      </div>
                    </div>

                    <div class="text-18 fw-500 text-accent-1 mt-60 md:mt-40">Great quality!</div>

                    <div class="text-20 fw-500 mt-20">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-20 md:mt-40">
                      <div class="lh-16 text-16 fw-500">Brooklyn Simmons</div>
                      <div class="lh-16">Web Developer</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 pt-10 text-center">
                    <div class="testimonials__image size-100 rounded-full">
                      <img src="{{ asset('user/img/testimonials/1/2.png') }}" alt="image">

                      <div class="testimonials__icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                        </svg>
                      </div>
                    </div>

                    <div class="text-18 fw-500 text-accent-1 mt-60 md:mt-40">Great quality!</div>

                    <div class="text-20 fw-500 mt-20">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-20 md:mt-40">
                      <div class="lh-16 text-16 fw-500">Brooklyn Simmons</div>
                      <div class="lh-16">Web Developer</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 pt-10 text-center">
                    <div class="testimonials__image size-100 rounded-full">
                      <img src="{{ asset('user/img/testimonials/1/2.png') }}" alt="image">

                      <div class="testimonials__icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                        </svg>
                      </div>
                    </div>

                    <div class="text-18 fw-500 text-accent-1 mt-60 md:mt-40">Great quality!</div>

                    <div class="text-20 fw-500 mt-20">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-20 md:mt-40">
                      <div class="lh-16 text-16 fw-500">Brooklyn Simmons</div>
                      <div class="lh-16">Web Developer</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 pt-10 text-center">
                    <div class="testimonials__image size-100 rounded-full">
                      <img src="{{ asset('user/img/testimonials/1/2.png') }}" alt="image">

                      <div class="testimonials__icon">
                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.3165 0.838867C12.1013 1.81846 10.9367 3.43478 9.77215 5.63887C8.65823 7.84295 8 10.2429 7.8481 12.8389H12.4557C12.4051 8.87152 13.6203 5.24703 16 1.91642L13.3165 0.838867ZM5.51899 0.838867C4.25316 1.81846 3.08861 3.43478 1.92405 5.63887C0.810126 7.84295 0.151899 10.2429 0 12.8389H4.60759C4.55696 8.87152 5.77215 5.19805 8.20253 1.91642L5.51899 0.838867Z" fill="white" />
                        </svg>
                      </div>
                    </div>

                    <div class="text-18 fw-500 text-accent-1 mt-60 md:mt-40">Great quality!</div>

                    <div class="text-20 fw-500 mt-20">The tours in this website are great. I had been really enjoy with my family! The team is very professional and taking care of the customers. Will surely recommend to my freind to join this company!</div>

                    <div class="mt-20 md:mt-40">
                      <div class="lh-16 text-16 fw-500">Brooklyn Simmons</div>
                      <div class="lh-16">Web Developer</div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="pagination -type-1 justify-center pt-60 md:pt-40 js-testimonials-pagination">
                <div class="pagination__button"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section data-anim="slide-up delay-1" class="cta -type-1">
      <div class="cta__bg">
        <img src="{{ asset('user/img/cta/1/bg.png') }}" alt="image">
      </div>

      <div class="container">
        <div class="row justify-between">
          <div class="col-xl-5 col-lg-6">
            <div class="cta__content">
              <h2 class="text-40 md:text-24 lh-13 text-white">
                Get 5% off your 1st<br class="lg:d-none">
                app booking
              </h2>

              <p class="mt-10 text-white">
                Booking's better on the app. Use promo code<br class="lg:d-none">
                "TourBooking" to save!
              </p>

              <div class="text-18 text-white mt-40 md:mt-20">
                Get a magic link sent to your email
              </div>

              <div class="mt-10">
                <div class="singleInput -type-2 row x-gap-10 y-gap-10">
                  <div class="col-md-auto col-12">
                    <input type="email" placeholder="Email" class="">
                  </div>
                  <div class="col-md-auto col-12">
                    <button class="button -md -accent-1 bg-white col-12 text-accent-2">Send</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="cta__image">
              <img src="{{ asset('user/img/cta/1/1.png') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-xl layout-pb-xl">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row justify-between items-end y-gap-10">
          <div class="col-auto">
            <h2 class="text-30 md:text-24">Travel Articles</h2>
          </div>

          <div class="col-auto">

            <button class="buttonArrow d-flex items-center ">
              <span>See all</span>
              <i class="icon-arrow-top-right text-16 ml-10"></i>
            </button>

          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row y-gap-30 pt-40 sm:pt-20">

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{ asset('user/img/blogCards/1/1.png') }}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{ asset('user/img/blogCards/1/2.png') }}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6">
            <a href="#" class="blogCard -type-1">
              <div class="blogCard__image ratio ratio-41:30">
                <img src="{{ asset('user/img/blogCards/1/3.png') }}" alt="image" class="img-ratio rounded-12">

                <div class="blogCard__badge">Trips</div>
              </div>

              <div class="blogCard__content mt-30">
                <div class="blogCard__info text-14">
                  <div class="lh-13">April 06 2023</div>
                  <div class="blogCard__line"></div>
                  <div class="lh-13">By Ali Tufan</div>
                </div>

                <h3 class="blogCard__title text-18 fw-500 mt-10">Kenya vs Tanzania Safari: The Better African Safari Experience</h3>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>


@endsection
