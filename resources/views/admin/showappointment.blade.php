
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
                <th style="padding: 10px">Customer Name</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Phone</th>
                <th style="padding: 10px">Doctor Name</th>
                <th style="padding: 10px">Date</th>
                <th style="padding: 10px">Message</th>
                <th style="padding: 10px">Status</th>
                <th style="padding: 10px">Approved</th>
                <th style="padding: 10px">Cancelled</th>
                <th style="padding: 10px">Send Email</th>


            </tr>
            @foreach($data as $appoint)
            <tr style="background-color: skyblue">
                <td style="padding: 10px">{{$appoint->name}}</td>
                <td style="padding: 10px">{{$appoint->email}}</td>
                <td style="padding: 10px">{{$appoint->phone}}</td>
                <td style="padding: 10px">{{$appoint->doctor}}</td>
                <td style="padding: 10px">{{$appoint->date}}</td>
                <td style="padding: 10px">{{$appoint->message}}</td>
                <td style="padding: 10px">{{$appoint->status}}</td>
                <td style="padding: 10px">
                    <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                </td>
                <td style="padding: 10px">
                    <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a>
                </td>
                <td style="padding: 10px">
                    <a class="btn btn-primary" href="{{url('emailView',$appoint->id)}}">Send Mail</a>
                </td>

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
