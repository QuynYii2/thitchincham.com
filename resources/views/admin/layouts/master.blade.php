<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>

@include('admin.layouts.header')
@include('admin.layouts.side-bar')

<main id="main" class="main">

    @yield('content')

</main>
<!-- End #main -->

@include('admin.layouts.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/admin/js/main.js')}}"></script>

<script>
    let desc = document.querySelectorAll('.description');
    for (let i = 0; i < desc.length; i++) {
        CKEDITOR.replace( desc[i], {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );
        // CKEDITOR.replace(desc[i]);
    }
</script>

</body>

</html>