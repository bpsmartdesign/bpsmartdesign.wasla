<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>

<head>
  <meta charset="utf-8" />

  {{-- Title Section --}}
  <title>{{ config('app.name') }} | Sign In</title>

  {{-- Meta Data --}}
  <meta name="description" content="@yield('page_description', $page_description ?? '')" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('website/media/img/logo.png') }}" />

  {{-- Fonts --}}
  {{ Metronic::getGoogleFontsInclude() }}

  {{-- Global Theme Styles (used by all pages) --}}
  @foreach(config('layout.resources.css') as $style)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Layout Themes (used by all pages) --}}
  @foreach (Metronic::initThemes() as $theme)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Includable CSS --}}
  @yield('styles')
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">


  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class=" login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
      <!--begin::Content-->
      @yield('content')
      <!--begin::Content-->

      <!--begin::Aside-->
      <div class=" login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
        <div class=" login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style=" background-image: url(/media/svg/illustrations/login-visual-4.svg);">
          <!--begin::Aside title-->
          <h3 class=" pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">
            We Got<br />
            A Surprise<br />
            For You
          </h3>
          <!--end::Aside title-->
        </div>
      </div>
      <!--end::Aside-->
    </div>
    <!--end::Login-->
  </div>

  <script>
    var HOST_URL = "{{ route('quick-search') }}";
  </script>

  {{-- Global Config (global config for global JS scripts) --}}
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#3699FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#E4E6EF",
            "dark": "#181C32"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1F0FF",
            "secondary": "#EBEDF3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#3F4254",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32"
        }
      },
      "font-family": "Poppins"
    };
  </script>

  {{-- Global Theme JS Bundle (used by all pages)  --}}
  @foreach(config('layout.resources.js') as $script)
  <script src="{{ asset($script) }}" type="text/javascript"></script>
  @endforeach

  {{-- Includable JS --}}
  @yield('scripts')

  @section('scripts')
  <script src="{{ asset('js/pages/login-4.js') }}" type="text/javascript"></script>
  @endsection
</body>

</html>
