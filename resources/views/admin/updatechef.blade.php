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
    <div>
    <form action="{{url('/updatingchef', $data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
      <div>
       <label>Name: </label>
        <input type="text" name="name" value="{{$data->name}}" require style="color: black">
      </div>
      <div>
        <lable>Speciality: </lable>
        <input type="text" name="speciality" value="{{$data->speciality}}" require style="color: black">
      </div>
      <div>
        <lable>Old Image: </lable>
        <img src="/chefimage/{{$data->image}}" height="200" width="200">
      </div>
      <div>
        <lable>New Image: </lable>
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