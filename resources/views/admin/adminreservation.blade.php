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
    <div style="position: relative; top: 60px; right: -150px">
      <table bgcolor="grey">
        <tr>
          <th style="padding: 30px">Name: </th>
          <th style="padding: 30px">Email: </th>
          <th style="padding: 30px">Phone Number: </th>
          <th style="padding: 30px">Guest: </th>
          <th style="padding: 30px">Time: </th>
          <th style="padding: 30px">Message: </th>
        </tr>
        @foreach($data as $data)
        <tr align= "center">
          <th>{{$data->name}}</th>
          <th>{{$data->email}}</th>
          <th>{{$data->phonenumber}}</th>
          <th>{{$data->guest}}</th>
          <th>{{$data->time}}</th>
          <th>{{$data->message}}</th>
        </tr>
        @endforeach
      </table>
    </div>
</div>

    @include("admin.adminscript")
  </body>
</html>