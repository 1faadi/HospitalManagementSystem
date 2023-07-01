
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        <form method="post" action="{{url('editDoctor',$data->id)}}" enctype="multipart/form-data">

            @csrf
            <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" name="name" style="color: #0a0a0a;" value="{{$data->name}}">
            </div>

            <div style="padding: 15px;">
                <label>Phone Number</label>
                <input type="number" name="number" style="color: #0a0a0a;" value="{{$data->phone}}">
            </div>

            <div style="padding: 15px;">
                <label>Speciality</label>
                <input type="text" name="speciality" style="color: #0a0a0a;" value="{{$data->speciality}}">

            </div>

            <div style="padding: 15px;">
                <label>Room No.</label>
                <input type="text" name="room" style="color: #0a0a0a;" value="{{$data->room}}">
            </div>

            <div style="padding: 15px;">
                <label>Old Image</label>
                <img height="50" width="50" src="images/{{$data->image}}">
            </div>
            <div style="padding: 15px;">
                <label>Change Image</label>
                <input type="file" name="file"  >
            </div>
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success" >
            </div>
        </form>

    </div>
    <!-- page-body-wrapper ends -->
</div>

@include('admin.body')
<!-- page-body-wrapper ends -->
{{--</div>--}}
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
