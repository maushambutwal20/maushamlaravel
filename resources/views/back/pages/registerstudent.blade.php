@extends('back.layouts.main')

@section('content')






    <div class="row">
        <div class="col-md-4">
            <div class="">




            </div>
        </div>

        <div class="col-md-4">

            <form role="form" method="post" action="{{route('addstudent')}}">
                {{--@csr--}}
                {{csrf_field()}}

                <div class="form-group
            {{$errors->has('name')?'has-error':''}}">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your name">
                    @if($errors->has('name'))
                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Class :</label>
                    <select class="form-control" name="grade" required>
                        <option disabled selected>Select Class</option>
                        <option value="class 11">class 11</option>
                        <option value="class 12">class 12</option>
                        @if($errors->has('shift'))
                            <span class="alert-danger">{{$errors->first('grade')}}</span>
                        @endif
                    </select>
                </div>


                <div class="form-group
            {{$errors->has('roll')?'has-error':''}}">
                    <label>Roll.no</label>
                    <input type="number" name="roll" class="form-control" placeholder="Enter Your Roll.no">
                    @if($errors->has('roll'))
                        <span class="help-block">
                                    <span>{{$errors->first('roll')}}</span>
                                </span>
                    @endif
                </div>


                <div class="form-group">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                    @if($errors->has('shift'))
                        <span class="alert-danger">{{$errors->first('gender')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Date of birth :</label>
                    <input type="date" name="dob"  class="form-control">
                </div>


                <div class="form-group
            {{$errors->has('email')?'has-error':''}}">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter The Email">
                    @if($errors->has('email'))
                        <span class="help-block">
                                    <span>{{$errors->first('email')}}</span>
                                </span>
                    @endif
                </div>


                <div class="form-group">
                    <label>Select shift :</label>
                    <select class="form-control" name="shift" required>
                        <option disabled selected>Select shift</option>
                        <option value="day">Day</option>
                        <option value="morning">Morning</option>
                        @if($errors->has('shift'))
                            <span class="alert-danger">{{$errors->first('shift')}}</span>
                        @endif
                    </select>
                </div>



                <input type="submit" type="button" class="btn btn-success">
            </form>




        </div>

        <div class="col-md-4">
            <div class="">

            </div>
        </div>

















@endsection