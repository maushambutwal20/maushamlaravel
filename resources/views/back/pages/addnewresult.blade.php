@extends('back.layouts.main')

@section('content')



    <div class="row">
        <div class="col-md-3">
            <div class="">




            </div>
        </div>

        <div class="col-md-5">

            <h1 class="text-center">Fill the form below to add result</h1>
            <form role="form" method="post" action="{{route('updatemark',$id)}}">
                {{csrf_field()}}
                <div class="form-group {{$errors->has('english')?'has-error':''}}">
                    <label> english:</label>
                    <input type="number" name="english" class="form-control" placeholder="Enter the number out of 100">
                    @if($errors->has('english'))
                        <span class="help-block">
                                    <span>{{$errors->first('english')}}</span>
                                </span>
                    @endif

                </div>

        <div class="form-group {{$errors->has('nepali')?'has-error':''}}">
                    <label> nepali:</label>
                    <input type="number" name="nepali" class="form-control" placeholder="Enter the number out of 100">
            @if($errors->has('nepali'))
                <span class="help-block">
                                    <span>{{$errors->first('nepali')}}</span>
                                </span>
            @endif
                </div>

        <div class="form-group {{$errors->has('account')?'has-error':''}}">
                    <label> account:</label>
                    <input type="number" name="account" class="form-control" placeholder="Enter the number out of 100">
            @if($errors->has('account'))
                <span class="help-block">
                                    <span>{{$errors->first('account')}}</span>
                                </span>
            @endif
        </div>

        <div class="form-group {{$errors->has('math')?'has-error':''}}">
                    <label> Math:</label>
                    <input type="number" name="math" class="form-control" placeholder="Enter the number out of 100">
            @if($errors->has('math'))
                <span class="help-block">
                                    <span>{{$errors->first('math')}}</span>
                                </span>
            @endif
                </div>

        <div class="form-group {{$errors->has('economics')?'has-error':''}}">
                    <label> Economics:</label>
                    <input type="number" name="economics" class="form-control" placeholder="Enter the number out of 100">
            @if($errors->has('economics'))
                <span class="help-block">
                                    <span>{{$errors->first('economics')}}</span>
                                </span>
            @endif
                </div>








                <input type="submit" type="button" class="btn btn-success">
            </form>

        </div>

        <div class="col-md-3">
            <div class="">

            </div>
        </div>





@endsection