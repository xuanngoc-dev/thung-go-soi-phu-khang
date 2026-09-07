@php
  $hotline = '0866333766';
  $hotlineDisplay = '0866 333 766';
  $icon = fn (string $name) => asset('user/img/icons/support/'.$name.'.png');
@endphp

<div class="floatSupport js-float-support" aria-live="polite">
  <div class="floatSupport__channels" id="floatSupportChannels" aria-hidden="true">
    <a
      class="floatSupport__channel -zalo"
      href="https://zalo.me/{{ $hotline }}"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Chat Zalo"
    >
      <span class="floatSupport__icon" aria-hidden="true">
        <img src="{{ $icon('zalo') }}" alt="" width="22" height="22" loading="lazy">
      </span>
      <span class="floatSupport__label">Zalo</span>
    </a>

    <a
      class="floatSupport__channel -facebook"
      href="https://www.facebook.com/"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Facebook"
    >
      <span class="floatSupport__icon" aria-hidden="true">
        <img src="{{ $icon('facebook') }}" alt="" width="22" height="22" loading="lazy">
      </span>
      <span class="floatSupport__label">Facebook</span>
    </a>

    <a
      class="floatSupport__channel -messenger"
      href="https://m.me/"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Messenger"
    >
      <span class="floatSupport__icon" aria-hidden="true">
        <img src="{{ $icon('messenger') }}" alt="" width="22" height="22" loading="lazy">
      </span>
      <span class="floatSupport__label">Messenger</span>
    </a>

    <a
      class="floatSupport__channel -phone"
      href="tel:{{ $hotline }}"
      aria-label="Gọi {{ $hotlineDisplay }}"
    >
      <span class="floatSupport__icon" aria-hidden="true">
        <img src="{{ $icon('phone') }}" alt="" width="20" height="20" loading="lazy">
      </span>
      <span class="floatSupport__label">{{ $hotlineDisplay }}</span>
    </a>
  </div>

  <button
    type="button"
    class="floatSupport__toggle js-float-support-toggle"
    aria-expanded="false"
    aria-controls="floatSupportChannels"
    aria-label="Mở kênh hỗ trợ"
  >
    <span class="floatSupport__ripple" aria-hidden="true"></span>
    <span class="floatSupport__ripple floatSupport__ripple--delay" aria-hidden="true"></span>
    <span class="floatSupport__toggleIcon" aria-hidden="true">
      <img class="floatSupport__iconOpen" src="{{ $icon('chat') }}" alt="" width="26" height="26">
      <img class="floatSupport__iconClose" src="{{ $icon('close') }}" alt="" width="22" height="22">
    </span>
  </button>
</div>
