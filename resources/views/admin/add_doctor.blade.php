
<!DOCTYPE html>
<html lang="en">
<head>
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
        <form method="post" action="{{url('upload_doctor')}}" enctype="multipart/form-data">

            @csrf
            <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" name="name" style="color: #0a0a0a;" placeholder="Write the name" required="">
            </div>

            <div style="padding: 15px;">
                <label>Phone Number</label>
                <input type="number" name="number" style="color: #0a0a0a;" required="" placeholder="Write the number">
            </div>

            <div style="padding: 15px;">
                <label>Speciality</label>
                <select name="speciality" required="" style="color: #0a0a0a; width: 200px;">
                    <option>--Select--</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>


                </select>
            </div>

            <div style="padding: 15px;">
                <label>Room No.</label>
                <input type="text" name="room" required="" style="color: #0a0a0a;" placeholder="Write the room number">
            </div>

            <div style="padding: 15px;">
                <label>Doctor Image</label>
                <input type="file" name="file" required="" >
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
