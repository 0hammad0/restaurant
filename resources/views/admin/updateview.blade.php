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
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div>
                <label>Title: </label>
                <input type="text" name="title" value="{{$data->title}}" require style="color: black;">
            </div>
            <div>
                <label>Price: </label>
                <input type="text" name="price" value="{{$data->price}}" require style="color: black;">
            </div>
            <div>
                <label>Description: </label>
                <input type="text" name="description" value="{{$data->description}}" require style="color: black;">
            </div>
            <div>
                <label>Old Image: </label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>
            <div>
                <label>New Image: </label>
                <input type="file" name="image" height="200" width="200" require>
            </div>
            <div>
                <input type="submit" value="save" style="color: black">
            </div>
        </form>
      </div>
</div>

    @include("admin.adminscript")
  </body>
</html>