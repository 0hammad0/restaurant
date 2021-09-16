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
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
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
                <input type="file" name="image" placeholder="Write Image" require>
            </div>
            <div>
                <label>Description: </label>
                <input type="text" name="description" placeholder="Write Description" require style="color: black;">
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