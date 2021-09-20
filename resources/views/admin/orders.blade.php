<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    
<div align="center" clas="container">
    <h1>Customers Orders</h1>

<form action="{{url('/search')}}" method="get">
  <input type="text" name="search" style="color:blue;">
  <input type="submit" value="search" class="btn btn-success">
</fomr>

    <table align="center" bgcolor="black">
        <tr>
            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Quantity</th>
            <th style="padding: 30px">Customer Name</th>
            <th style="padding: 30px">Phone No.</th>
            <th style="padding: 30px">Address</th>
            <th style="padding: 30px">Total Price</th>
        </tr>
@foreach($data as $data)
        <tr align="center">
            <td style="padding: 30px">{{$data->foodname}}</td>
            <td style="padding: 30px">{{$data->price}}$</td>
            <td style="padding: 30px">{{$data->quantity}}</td>
            <td style="padding: 30px">{{$data->name}}</td>
            <td style="padding: 30px">{{$data->phone}}</td>
            <td style="padding: 30px">{{$data->address}}</td>
            <td style="padding: 30px">{{$data->price * $data->quantity}}$</td>
        </tr>
        @endforeach
    </table>
</div>

</div>

    @include("admin.adminscript")
  </body>
</html>