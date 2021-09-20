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
    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div>
                <label>Title: </label>
                <input type="text" name="title" placeholder="Write title" require style="color: black;">
            </div>
            <div>
                <label>Price: </label>
                <input type="text" name="price" placeholder="Write Price" require style="color: black;">
            </div>
            <div>
                <label>Image: </label>
                <input type="file" name="image" require>
            </div>
            <div>
                <label>Description: </label>
                <input type="text" name="description" placeholder="Write description" require style="color: black;">
            </div>
            <div>
                <input type="submit" value="save" style="color: black">
            </div>
        </form>
        <table bgcolor="black"; >
        <tr>
            <th style="padding: 30px">Title</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Action 2</th>
        </tr>
        @foreach($data as $data)
        <tr align= "center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}$</td>
            <td>{{$data->description}}</td>
            <td><img src="/foodimage/{{$data->image}}"; width="200" height="200"></td>
            <td><a href="{{url('/deleteitem', $data->id)}}">Delete</a></td>
            <td><a href="{{url('/updateitem', $data->id)}}">Update</a></td>
        </tr>
        @endforeach
        </table>
    </div>
</div> 

    @include("admin.adminscript")
  </body>
</html>