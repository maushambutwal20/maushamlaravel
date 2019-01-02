@extends('back.layouts.main')

@section('content')
    <form role="form" method="post" action="{{route('storestudent')}}">
        @csrf
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
        <div class="form-group
            {{$errors->has('phone')?'has-error':''}}">
            <label>Phone</label>
            <input type="phone" name="phone" class="form-control" placeholder="Enter your phone number">
            @if($errors->has('phone'))
                <span class="help-block">
                                    <span>{{$errors->first('phone')}}</span>
                                </span>
            @endif
        </div>

        <div class="form-group
            {{$errors->has('thumbnail')?'has-error':''}}">
            <label>Upload image</label>
            <input type="text" name="thumbnail" class="form-control" placeholder="its testing">
            @if($errors->has('thumbnail'))
                <span class="help-block">
                                    <span>{{$errors->first('thumbnail')}}</span>
                                </span>
            @endif
        </div>

        <div class="form-group
            {{$errors->has('slcbatch')?'has-error':''}}">
            <label>Slc Batch</label>
            <input type="date" name="slcbatch" class="form-control" placeholder="Enter Your Slc batch">
            @if($errors->has('slcbatch'))
                <span class="help-block">
                                    <span>{{$errors->first('slcbatch')}}</span>
                                </span>
            @endif
        </div>

        <div class="form-group
            {{$errors->has('job')?'has-error':''}}">
            <label>Job</label>
            <input type="text" name="job" class="form-control" placeholder="Enter Your current job">
            @if($errors->has('job'))
                <span class="help-block">
                                    <span>{{$errors->first('job')}}</span>
                                </span>
            @endif
        </div>



        <div class="form-group
            {{$errors->has('position')?'has-error':''}}">
            <label>position</label>
            <input type="text" name="position" class="form-control" placeholder="Enter Your Job Position">
            @if($errors->has('position'))
                <span class="help-block">
                                    <span>{{$errors->first('position')}}</span>
                                </span>
            @endif
        </div>



        <input type="submit" type="button" class="btn btn-success">
    </form>
@endsection