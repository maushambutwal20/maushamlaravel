@extends('back.layouts.main')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <div class="btn-group">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> Search By Job Type <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item px-2"><a href="{{route('viewloksewa')}}">Lok sewa</a></li>
                        <li class="dropdown-item px-2"><a href="#">Lok sewa</a></li>
                        <li class="dropdown-item px-2"><a href="#">science and technology</a></li>
                        <li class="dropdown-item px-2"><a href="#"> own company </a></li>
                        <li class="dropdown-item px-2"><a href="#"> other</a></li>
                    </ul>
                </div>

            </div>




            <div class="form-group">
                <label>Roll.no</label>
                <input type="number" name="name" class="form-control col-xs-1" >
            </div>



            <div class="form-group">
                <label for="sel1">Select class :</label>
                <select class="form-control" id="sel1">
                    <option>Select class</option>
                    <option>class 11</option>
                    <option>class 12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Select shift :</label>
                <select class="form-control" id="sel1">
                    <option>Select shift</option>
                    <option>Day</option>
                    <option>Morning</option>
                </select>
            </div>

















            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border" style="background:#3c8dbc;">
                    <h3 class="box-title " > View Page</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <table border = 1 class="table">
                        <tr>

                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Slc batch</th>
                            <th>Thumbnail</th>
                            <th>Job</th>
                            <th>Position</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        @foreach ($graduates as $graduate)
                            <tr>

                                <td>{{ $graduate->name}}</td>
                                <td>{{ $graduate->email}}</td>
                                <td>{{ $graduate->phone}}</td>
                                <td>{{ $graduate->slcbatch}}</td>
                                <td>{{ $graduate->thumbnail}}</td>
                                <td>{{ $graduate->job}}</td>
                                <td>{{ $graduate->position}}</td>


                                <td> <a href="" class="btn btn-warning"> Edit</a> </td>
                                <td> <a href="{{route('delete',$graduate->id)}}" class="btn btn-danger"> Delete</a> </td>




                            </tr>
                        @endforeach
                    </table>






                </div>
                <!-- /.box-body -->
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection