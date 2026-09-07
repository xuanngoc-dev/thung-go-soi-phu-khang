{{-- SEO + Ads meta — override per page via @section --}}
@php
  $siteName = config('app.name', 'Thùng Gỗ Sồi Phú Khang');
  $hotline = '0866333766';
  $hotlineDisplay = '0866 333 766';
  $siteEmail = 'lienhe@phukhang.vn';
  $defaultDescription = 'Thùng gỗ sồi Phú Khang chuyên sản xuất thùng ngâm rượu gỗ sồi từ 10L đến 300L. Gỗ sồi tự nhiên, giao hàng toàn quốc. Hotline tư vấn '.$hotlineDisplay.'.';
  $defaultKeywords = 'thùng gỗ sồi, thùng ngâm rượu, thùng rượu gỗ sồi, thùng gỗ sồi 10L, thùng gỗ sồi 20L, thùng gỗ sồi 50L, thùng gỗ sồi 100L, Phú Khang, mua thùng gỗ sồi';
  $defaultImage = asset('user/img/hero/phukhang/trung-bay.jpg');
  $logoUrl = asset('user/img/general/logo-phukhang.png');
  $canonicalUrl = url()->current();
  $pageTitle = trim($__env->yieldContent('title', 'Trang chủ'));
  $fullTitle = trim($__env->yieldContent('meta_title', $pageTitle.' - '.$siteName));
  $metaDescription = trim($__env->yieldContent('meta_description', $defaultDescription));
  $metaKeywords = trim($__env->yieldContent('meta_keywords', $defaultKeywords));
  $metaRobots = trim($__env->yieldContent('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'));
  $ogImage = trim($__env->yieldContent('og_image', $defaultImage));
  $ogType = trim($__env->yieldContent('og_type', 'website'));
  $canonical = trim($__env->yieldContent('canonical', $canonicalUrl));
@endphp

{{-- Primary SEO --}}
<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="keywords" content="{{ $metaKeywords }}">
<meta name="author" content="{{ $siteName }}">
<meta name="robots" content="{{ $metaRobots }}">
<meta name="googlebot" content="{{ $metaRobots }}">
<meta name="theme-color" content="#EB662B">
<meta name="format-detection" content="telephone=yes">
<meta name="hotline" content="{{ $hotline }}">
<meta name="telephone" content="{{ $hotline }}">
<meta name="contact" content="{{ $hotlineDisplay }}">
<meta name="geo.region" content="VN">
<meta name="geo.placename" content="Việt Nam">
<meta name="language" content="Vietnamese">
<meta name="revisit-after" content="7 days">
<meta name="rating" content="general">
<meta name="distribution" content="global">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<link rel="canonical" href="{{ $canonical }}">
<link rel="alternate" hreflang="vi" href="{{ $canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonical }}">

{{-- Favicon / App icons --}}
<link rel="icon" type="image/png" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" href="{{ $logoUrl }}">
<link rel="shortcut icon" href="{{ $logoUrl }}">

{{-- Open Graph (Facebook / Zalo / Messenger ads) --}}
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:secure_url" content="{{ $ogImage }}">
<meta property="og:image:alt" content="{{ $siteName }}">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="business:contact_data:phone_number" content="+84{{ ltrim($hotline, '0') }}">
<meta property="business:contact_data:website" content="{{ url('/') }}">
<meta property="business:contact_data:country_name" content="Vietnam">

{{-- Twitter / X Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:image:alt" content="{{ $siteName }}">
<meta name="twitter:label1" content="Hotline">
<meta name="twitter:data1" content="{{ $hotlineDisplay }}">
<meta name="twitter:label2" content="Email">
<meta name="twitter:data2" content="{{ $siteEmail }}">

{{-- Facebook / Ads verification placeholders (override via @section) --}}
@hasSection('fb_app_id')
  <meta property="fb:app_id" content="@yield('fb_app_id')">
@endif
@hasSection('google_site_verification')
  <meta name="google-site-verification" content="@yield('google_site_verification')">
@endif
@hasSection('facebook_domain_verification')
  <meta name="facebook-domain-verification" content="@yield('facebook_domain_verification')">
@endif
@hasSection('zalo_oa_verification')
  <meta name="zalo-platform-site-verification" content="@yield('zalo_oa_verification')">
@endif

{{-- Structured data: Organization + LocalBusiness --}}
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'Organization',
      '@id' => url('/').'/#organization',
      'name' => $siteName,
      'url' => url('/'),
      'logo' => [
        '@type' => 'ImageObject',
        'url' => $logoUrl,
      ],
      'image' => $ogImage,
      'email' => $siteEmail,
      'telephone' => '+84'.ltrim($hotline, '0'),
      'contactPoint' => [
        [
          '@type' => 'ContactPoint',
          'telephone' => '+84'.ltrim($hotline, '0'),
          'contactType' => 'customer service',
          'areaServed' => 'VN',
          'availableLanguage' => ['Vietnamese'],
        ],
        [
          '@type' => 'ContactPoint',
          'telephone' => '+84'.ltrim($hotline, '0'),
          'contactType' => 'sales',
          'areaServed' => 'VN',
          'availableLanguage' => ['Vietnamese'],
        ],
      ],
      'sameAs' => array_values(array_filter([
        // Thêm link Fanpage / Zalo OA khi có
      ])),
    ],
    [
      '@type' => 'WebSite',
      '@id' => url('/').'/#website',
      'url' => url('/'),
      'name' => $siteName,
      'description' => $defaultDescription,
      'publisher' => [
        '@id' => url('/').'/#organization',
      ],
      'inLanguage' => 'vi-VN',
      'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => url('/').'?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
      ],
    ],
    [
      '@type' => 'WebPage',
      '@id' => $canonical.'#webpage',
      'url' => $canonical,
      'name' => $fullTitle,
      'description' => $metaDescription,
      'isPartOf' => [
        '@id' => url('/').'/#website',
      ],
      'about' => [
        '@id' => url('/').'/#organization',
      ],
      'inLanguage' => 'vi-VN',
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@stack('meta')
