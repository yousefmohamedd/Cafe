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

<div style="position: relative; top: 70px; right: -150px;">


    <table bgcolor="gray" border="1px">

          <tr>

              <td style="padding: 30px;">Name</td>

              <td style="padding: 30px;">Email</td>
    
              <td style="padding: 30px;">Phone</td>
    
              <td style="padding: 30px;">Guest</td>
    
              <td style="padding: 30px;">Date</td>
    
              <td style="padding: 30px;">Time</td>
    
              <td style="padding: 30px;">Message</td>

    </tr>

    @foreach($data as $data)

    <tr align="center">

    
              <td>{{$data->name}}</td>
    
              <td>{{$data->email}}</td>
    
              <td>{{$data->phone}}</td>
    
              <td>{{$data->guest}}</td>
    
              <td>{{$data->date}}</td>
    
              <td>{{$data->time}}</td>
    
              <td>{{$data->message}}</td>

    </tr>
    @endforeach

    </table>


    </table>

    </div>



  </div>
   
    @include("admin.adminscript")

    <!-- End custom js for this page -->
  </body>
</html>