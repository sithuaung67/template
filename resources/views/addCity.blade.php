@extends('layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="fa fa-list"></span> City
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Session('info'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="tem alert alert-success navbar-fixed-bottom"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                        </div>
                    </div>
                @endif
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            City / Data
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-hover">
                                    <tr>
                                        <td>Id</td>
                                        <td>City</td>
                                        <td>Created Dated</td>
                                        <td>Action</td>

                                    </tr>
                                    @foreach($cit as $cats)
                                        <tr>
                                            <td>{{$cats->id}}</td>
                                            <td>{{$cats->name}}</td>
                                            <td>{{$cats->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#e{{$cats->id}}"><i class="fa fa-edit"></i></a>
                                                <input type="hidden" name="id" value="{{$cats->id}}">
                                                <div class="modal" tabindex="-1" id="e{{$cats->id}}" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h5 class="modal-title">Edit "{{$cats->name}}"</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route('updateCity',['cit'=>$cats->id])}}">

                                                                    <div class="form-group">
                                                                        <label for="cit_name" class="control-label">City Name</label>
                                                                        <input type="text" class="form-control" name="cit_name" value="{{$cats->name}}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                    @csrf
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" data-toggle="modal" data-target="#d{{$cats->id}}" class="text-light btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="d{{$cats->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <form method="post" action="{{route('city.delete')}}">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <h4 class="modal-title" style="color: white" id="myModalLabel"><i class="fa fa-warning" style="color: white"></i> confirm delete data</h4>
                                                                    <button type="button" class="close" style="color: white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body text-danger">
                                                                    <input type="hidden" name="id" value="{{$cats->id}}">
                                                                    Are you sure want to delete this letter no of <b>"{{$cats->name}}"</b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                                                </div>

                                                            </div>
                                                            {{csrf_field()}}
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            Create Department
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{route('addCity')}}">
                                <div class="form-group">
                                    <label for="cit_name" class="control-label" >City Name</label>
                                    <input type="text" id="cit_name" name="cit_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                                </div>
                                @csrf
                            </form>
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
    <!-- Bootstrap -->
    <script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="/dist/plugins/chart.js/Chart.min.js"></script>
    <script src="/dist/js/demo.js"></script>
    <script src="/dist/js/pages/dashboard3.js"></script>
@stop