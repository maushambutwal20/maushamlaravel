@extends('back.layouts.main')

@section('content')
    <!-- Search form -->


    <div class="row">
        <div class="col-md-4">
        </div>


        <div class="col-md-4">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            <h3> Top-5 Students</h3>
            <table border = 1 class="table">
                <tr>

                    <th>Name:</th>
                    <th> Roll.no</th>
                    <th>Gender</th>
                    <th>Shift</th>
                    <th>Highest Total:</th>
                    <th>View Detail:</th>

                </tr>
                @foreach ($toptens as $topten)
                    <tr>

                        <td>{{ $topten->name}}</td>
                        <td>{{ $topten->roll}}</td>
                        <td>{{ $topten->gender}}</td>
                        <td>{{ $topten->shift}}</td>
                        <td>{{ $topten->total}}</td>
                        <td>{{ $topten->total}}</td>
                        <td> <a href="{{route('viewdetail',$topten->id)}}" class="btn btn-warning"> view</a> </td>
                    </tr>
                @endforeach
            </table>

        </div>

        <div class="col-md-4">
        </div>
    </div>



@endsection