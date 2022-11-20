<!-- BEGIN: Vendor JS-->
{{-- <script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script> --}}

@vite([
    'resources/assets/vendor/libs/jquery/jquery.js',
    'resources/assets/vendor/libs/popper/popper.js',
    'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
    'resources/assets/vendor/js/bootstrap.js',
    'resources/assets/vendor/js/menu.js',
])

@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
{{-- <script src="{{ asset(mix('assets/js/main.js')) }}"></script> --}}

@vite('resources/assets/js/main.js')

{{-- @vite('resources/js/app.js') --}}

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
