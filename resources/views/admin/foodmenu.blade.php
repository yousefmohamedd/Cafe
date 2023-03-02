<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include("admin.admincss")

  </head>
  <body>

  <div class="container-scroller">
   
  
    @include("admin.navbar")


        <div style="position:relative; top: 60px; right:-150px;">

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
            <label for="">Title</label>
            <input style="color: blue;" type="text"name="title" placeholder="Write A Title" required>
        </div>


        <div>
            <label for="">Price</label>
            <input style="color: blue;" type="num"name="price" placeholder="Write A Title" required>
        </div>


        <div>
            <label for="">Image</label>
            <input style="color: blue;" type="file"name="image" required>
        </div>


        <div>
            <label for="">Description</label>
            <input style="color: blue;" type="text"name="description" placeholder="Write A Title" required>
        </div>

        <div>

        <input  type="submit" value="Save">

        </div>

        </form>


        <div>

        <table bgcolor="black">
            
                <tr>
                    <th style="padding: 30px; ">Food Name</th>
                    <th style="padding: 30px; ">Price</th>
                    <th style="padding: 30px; ">Description</th>
                    <th style="padding: 30px; ">Image</th>
                    <th style="padding: 30px; ">Action</th>
                    <th style="padding: 30px; ">Action2</th>
                   
                </tr>

                @foreach($data as $data)

                <tr align="center"">

                  <td>{{$data->title}}</td>
                  <td>{{$data->price}}</td>
                  <td>{{$data->description}}</td>
                  <td><img height="200px" width="200px" src="/foodimage/{{$data->image}}" alt=""></td>
                  <td><a href="{{url('deletemenue' , $data->id)}}">Delete</a></td>
                  <td><a href="{{url('updateview' , $data->id)}}">Update</a></td>

                </tr>

                @endforeach

        </table>
          
        </div>

        </div>

    
  </div>
   
    @include("admin.adminscript")

    <!-- End custom js for this page -->
  </body>
</html>