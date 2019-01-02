@extends('back.layouts.main')

@section('content')

<h1> Update Roll.No </h1>

    <form role="form" method="post" action="">
        @csrf
    <div class="form-group">
        <label> Name:</label>
        <input type="text" name="name" class="form-control" value="{{old('name')?old('name'):$student->name}}">
    </div>


        <div class="form-group">
            <label>Class :</label>
            <select class="form-control" name="grade">
                <option>{{$student->grade}}</option>
                <option value="class 11">class 11</option>
                <option value="class 12">class 12</option>
            </select>
        </div>


    <div class="form-group">
        <label> Roll.NO:</label>
        <input type="number" name="roll" class="form-control" value="{{old('roll')?old('roll'):$student->roll}}" placeholder="Enter the Roll.no">
    </div>



    <div class="form-group">
        <label>Gender</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
    </div>

    <div class="form-group">
        <label>Date of birth :</label>
        <input type="date" name="dob"  class="form-control">
    </div>


    <div class="form-group">
        <label>Email: </label>
        <input type="email" name="email" value="{{old('email')?old('email'):$student->email}}" class="form-control">
    </div>


    <div class="form-group">
        <label>Select shift :</label>
        <select class="form-control" name="shift">
            <option>Select shift</option>
            <option value="day">Day</option>
            <option value="morning">Morning</option>
        </select>
    </div>



    <input type="submit" type="button" class="btn btn-success">
    </form>
@endsection