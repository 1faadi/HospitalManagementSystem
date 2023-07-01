
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <style>
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>

<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->

<!-- partial:partials/_navbar.html -->
@include('admin.navbar')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        <form method="post" action="{{url('sendEmail',$data->id)}}" >

            @csrf
            <div style="padding: 15px;">
                <label>Greetings</label>
                <input type="text" name="greeting" style="color: #0a0a0a;" >
            </div>

            <div style="padding: 15px;">
                <label>Mail Body</label>
                <input type="text" name="body" style="color: #0a0a0a;" >
            </div>


            <div style="padding: 15px;">
                <label>Action Text</label>
                <input type="text" name="actiontext" style="color: #0a0a0a;" >
            </div>
            <div style="padding: 15px;">
                <label>Action URL</label>
                <input type="text" name="actionurl" style="color: #0a0a0a;" >
            </div>
            <div style="padding: 15px;">
                <label>End Part</label>
                <input type="text" name="endpart" style="color: #0a0a0a;" >
            </div>

            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success" >
            </div>
        </form>

    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
