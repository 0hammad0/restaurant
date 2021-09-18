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
    <form action="{{url('/updatechef')}}" method="post" enctype="multipart/form-data">
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
    </form>
    <table>
      <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Speciality</th>
        <th style="padding: 30px">Picture of Chef</th>
      </tr>
      <tr align = "center">
        <th>A</th>
        <th>B</th>
        <th>C</th>
      </tr>
    </table>
</div>

    @include("admin.adminscript")
  </body>
</html>