@extends('back.layouts.main')

@section('content')


    <div class="row">
        <div class="col-md-1">
        </div>


        <div class="col-md-7">
            <h1 class="text-center">Fill the form below to add result</h1>
        </div>

        <div class="col-md-4">
        </div>
    </div>




    <div class="row">
        <div class="col-md-4">
        </div>


        <div class="col-md-4">

            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form role="form" method="post" action="{{route('addnewresult')}}">
                @csrf


                <div class="form-group">
                    <label>Class :</label>
                    <select class="form-control" name="grade">
                        <option disabled selected>Select class</option>
                        <option value="class 11">class 11</option>
                        <option value="class 12">class 12</option>
                    </select>
                    @if($errors->has('grade'))
                       <span class="alert-danger">{{$errors->first('grade')}}</span>
                    @endif
                </div>





                <div class="form-group">
                    <label> Roll.NO:</label>
                    <input type="number" name="roll" class="form-control" placeholder="Enter the Roll.no">
                    @if($errors->has('shift'))
                        <span class="alert-danger">{{$errors->first('roll')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Select shift :</label>
                    <select class="form-control" name="shift">
                        <option disabled selected>Select shift</option>
                        <option value="day">Day</option>
                        <option value="morning">Morning</option>
                    </select>
                    @if($errors->has('shift'))
                        <span class="alert-danger">{{$errors->first('shift')}}</span>
                    @endif
                </div>



                <input type="submit" type="button" class="btn btn-success">
            </form>


        </div>

        <div class="col-md-4">
        </div>
    </div>













@endsection