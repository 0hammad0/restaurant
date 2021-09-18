<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div>
        <label>Name: </label>
        <input type="text" name="name" placeholder="enter chef's name here" style="color:black" require>
      </div>
      <div>
        <lable>Speciality: </label>
        <input type="text" name="speciality" placeholder="enter chef's speciality" style="color:black" require>
      </div>
      <div>
        <input type="file" name="image" required="">
      </div>
      <div>
        <input type="submit" value="save" style="color: black">
      </div>
    <div style="position: relative; top: 60px; right: -150px">
    <table bgcolor="grey">
      <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Speciality</th>
        <th style="padding: 30px">Picture of Chef</th>
        <th style="padding: 30px">Action</th>
        <th style="padding: 30px">Action 2</th>
      </tr>
      @foreach($data as $data)
      <tr align = "center">
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img src="/chefimage/{{$data->image}}" height="200" width="200"></td>
        <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
        <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
      </tr>
      @endforeach
    </table>
    </form>
</div>
</div>

    @include("admin.adminscript")
  </body>
</html>