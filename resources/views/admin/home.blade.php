
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
@include('admin.css')
</head>
<body>

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
{{--    <div class="container-fluid page-body-wrapper">--}}
        <!-- partial:partials/_navbar.html -->
@include('admin.navbar')
        <!-- partial -->
@include('admin.body')
    <!-- page-body-wrapper ends -->
{{--</div>--}}
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
