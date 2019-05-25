@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-dark" style="color: white">As you like Search!
                  <div class="card-tools text-right">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="form-inline">
                      <form enctype="multipart/form-data"  method="get">
                        <p>Demographic</p>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="age" name="age" >
                          <option>Age</option>
                          <option>10</option>
                        </select>

                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="gender" name="gender" >
                          <option>Gender</option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Other</option>
                        </select>

                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="water" name="water" >
                          <option>Water</option>
                          <option>Pure Water</option>
                        </select>

                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="married" name="married" >
                          <option>Married</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="household" name="household" >
                          <option>Household List</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                        </select>

                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="income" name="income" >
                          <option>Income</option>
                          <option>10000-100000</option>
                          <option>10000-500000</option>
                          <option>50000-1000000</option>
                          <option>1500000-2000000</option>
                        </select>
                        <br>
                        <p>Location</p>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="village" name="village" >
                          <option>Village</option>
                          <option>Mawlamyine</option>
                          <option>Mudon</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="township" name="township" >
                          <option>Township</option>
                          <option>Yangon</option>
                          <option>Bago</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="city" name="city" >
                          <option>City</option>
                          <option>Yangon</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="state" name="state" >
                          <option>State</option>
                          <option>Mon</option>
                        </select>
                        <br>
                        <p>Health</p>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 113px" id="township" name="township" >
                          <option>Hospital</option>
                          <option>Yangon</option>
                          <option>Bago</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 113px" id="city" name="city" >
                          <option>Doctors</option>
                          <option>Yangon</option>
                        </select>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 113px" id="state" name="state" >
                          <option>Disease</option>
                          <option>Mon</option>
                        </select>
                        <br>
                        <p>Organization</p>
                        <select class="btn btn-outline-dark btn-sm mb-2" style="width: 140px" id="organization" name="organization" >
                          <option>Organization</option>
                          <option>NGO</option>
                          <option>Government</option>
                          <option>Local Private</option>
                          <option>Bidget</option>
                        </select>
                        <br>
                        <button class="btn btn-outline-dark btn-lg mb-2" style="height: auto" type="submit"><i class="fa fa-search"></i></button>

                        @csrf
                      </form>
                    </div>
                  </div>
              </div>
            </div>
        </div>





      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card-tools">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">
                <i class="fa fa-pie-chart mr-1"></i> Show
              </h3>
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
              </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
              </div>
            </div>
          </div>
        </section>

          <!-- solid sales graph -->
          <div class="card bg-info-gradient">
            <div class="card-header no-border">
              <h3 class="card-title">
                <i class="fa fa-th mr-1"></i> Show Graph
              </h3>

              <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="text-white">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="text-white">In-Store</div>
                </div>
                <!-- ./col -->
              </div>
            </div>
          </div>
      </div>
    </div>
</section>


</div>

@endsection
 
@section('javascript')
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/dist/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/dist/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@stop