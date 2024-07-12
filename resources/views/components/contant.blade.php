@extends('home')
@section('main-content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
 
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 col-12 align-self-center">
      <h3 class="text-themecolor mb-0">Admin Panel</h3>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">Home</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
    </div>
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
      <div class="d-flex mt-2 justify-content-end">
        <div class="d-flex me-3 ms-2">
          <div class="chart-text me-2">
            <h6 class="mb-0"><small>THIS MONTH</small></h6>
            <h4 class="mt-0 text-info">$58,356</h4>
          </div>
          <div class="spark-chart">
            <div id="monthchart"></div>
          </div>
        </div>
        <div class="d-flex ms-2">
          <div class="chart-text me-2">
            <h6 class="mb-0"><small>LAST MONTH</small></h6>
            <h4 class="mt-0 text-primary">$48,356</h4>
          </div>
          <div class="spark-chart">
            <div id="lastmonthchart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- -------------------------------------------------------------- -->
  <!-- Container fluid  -->
  <!-- -------------------------------------------------------------- -->
  <div class="container-fluid">
    <!-- -------------------------------------------------------------- -->
    <!-- Start Page Content -->
    <!-- -------------------------------------------------------------- -->
    <div class="widget-content searchable-container list">
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-xl-2">
         
          </div>
          <div
            class="
              col-md-8 col-xl-10
              text-end
              d-flex
              justify-content-md-end justify-content-center
              mt-3 mt-md-0
            "
          >
           
            <a
              href="/components/add"
              id="btn-add-contact"
              class="btn btn-info"
            >
              <i data-feather="users" class="feather-sm fill-white me-1">
              </i>
              Add Users</a
            >
          </div>
        </div>
      </div>
      <!-- Modal -->
    
      
      </div>
      <div class="card card-body">
        <div class="table-responsive">
          <table class="table search-table v-middle">
            <thead class="header-item">
             
             <th>id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Number</th>
              <th>Address</th>
              <th>Role</th>
              <th>created_at</th>
              
              <th>Action</th>
            </thead>
          <tbody>

              @foreach($users as $users)
               <tr>
                 
                  <td>{{$users->id}}</td>
                  <td>{{$users->name}}</td>
                  <td>{{$users->email}}</td>
                  <td>{{$users->number}}</td>
                  <td>{{$users->address}}</td>
                  <td>{{$users->role}}</td>
                  <td>{{$users->created_at}}</td>
                  <td class="flex flex-row">
                      <a href="{{'/trytodelete/'.$users->id}}"><button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
                      <a href="{{'/trytoupdate/'.$users->id}}"><button type="button" class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></button></a>
                      <a href="{{'/view/'.$users->id}}"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                  </td>
              </tr>
              @endforeach

          </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
  <!-- Share Modal -->

  </div>

</body>
</html>
@endsection