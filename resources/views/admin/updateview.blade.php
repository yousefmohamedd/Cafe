<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    
    
    @include("admin.admincss")



   




  </head>
  <body>
   
  <div class="container-scroller">
    @include("admin.navbar")


    <div style="position:relative; top: 60px; right:-150px;">

<form action="{{url('/update' , $data->id)}}" method="post" enctype="multipart/form-data">

@csrf

<div>
    <label for="">Title</label>
    <input style="color: blue;" type="text"name="title" value="{{$data->title}}" required>
</div>


<div>
    <label for="">Price</label>
    <input style="color: blue;" type="num"name="price" value="{{$data->price}}" required>
</div>





<div>
    <label for="">Description</label>
    <input style="color: blue;" type="text"name="description" value="{{$data->description}}" required>
</div>

<div>
    <label for="">Old Image</label>
    <img height="200px"; width="200px" src="/foodimage/{{$data->image}}" alt="">
</div>


<div>
    <label for="">New Image</label>
    <input style="color: blue;" type="file"name="image" value="{{$data->image}}" required>
</div>

<div>

<input type="submit" value="Save">

</div>

</form>


<div>
  

  </div>
   
    @include("admin.adminscript")

    <!-- End custom js for this page -->
  </body>
</html>