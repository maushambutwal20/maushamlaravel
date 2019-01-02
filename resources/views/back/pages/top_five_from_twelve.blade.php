@extends('back.layouts.main')

@section('content')
    <!-- Search form -->
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
        @foreach ($topfives as $topfive)
            <tr>

                <td>{{ $topfive->name}}</td>
                <td>{{ $topfive->roll}}</td>
                <td>{{ $topfive->gender}}</td>
                <td>{{ $topfive->shift}}</td>
                <td>{{ $topfive->total}}</td>
                <td>{{ $topfive->total}}</td>
                <td> <a href="" class="btn btn-warning"> view</a> </td>
            </tr>
        @endforeach
    </table>


@endsection