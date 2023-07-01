
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
<div class="container-fluid page-body-wrapper">
    <div align="center" style="padding-left: 600px">
        <table>
            <tr style="background-color: black">
                <th style="padding: 10px">Doctor Name</th>
                <th style="padding: 10px">Phone</th>
                <th style="padding: 10px">Speciality</th>
                <th style="padding: 10px">Room</th>
                <th style="padding: 10px">Image</th>
                <th style="padding: 10px">Delete</th>
                <th style="padding: 10px">Update</th>


            </tr>
            @foreach($data as $doctor)
                <tr align="center" style="background-color: skyblue">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="images/{{$doctor->image}}"></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" href="{{url('delete',$doctor->id)}}" >Delete</a></td>
                    <td><a class="btn btn-primary"  href="{{url('update',$doctor->id)}}" >Update</a></td>

                </tr>
            @endforeach
        </table>
    </div>
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
