<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        .div_center{
            text-align:center;
            color:red;
            
        }
        .h1_font{
            font-size:40px;
            padding:20px;
        }
    </style>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar');
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <div class="div_center">
            <h1 class="h1_font">add catagory<h1>
                <form action="{{url('/add_catagory')}}" method="post">
                    @csrf
                    <input type="text" placeholder="catagory name" name="catagory">
                    <input type="submit" class="btn btn-primary" value="add">
                </form>
           </div>
         </div>
         </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer');
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js');
    <!-- End custom js for this page -->
  </body>
</html>