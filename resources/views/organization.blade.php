@extends('layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> Organization
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-8">
                    <select class="btn btn-outline-dark btn-lg mb-2"  id="organization" name="organization" >
                        <option>Organization</option>
                        <option>NGO</option>
                        <option>Government</option>
                        <option>Local Private</option>
                        <option>Bidget</option>
                    </select>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('javascript')
    <!-- jQuery -->
    <script src="/dist/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="/dist/plugins/chart.js/Chart.min.js"></script>
    <script src="/dist/js/demo.js"></script>
    <script src="/dist/js/pages/dashboard3.js"></script>
@endsection