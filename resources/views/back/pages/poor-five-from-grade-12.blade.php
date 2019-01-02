@extends('back.layouts.main')

@section('content')


    <div class="row">
        <div class="col-md-4">
        </div>


        <div class="col-md-4">
            <h3> Top-5 Students</h3>
            <table border = 1 class="table">
                <tr>

                    <th>Name:</th>
                    <th> Roll:</th>

                    <th>Shift</th>
                    <th>Poor marks:</th>

                </tr>
                @foreach ($poorfives as $poorfive )
                    <tr>

                        <td>{{ $poorfive ->name}}</td>

                        <td>{{ $poorfive ->roll}}</td>
                        <td>{{ $poorfive ->shift}}</td>
                        <td>{{ $poorfive ->total}}</td>
                    </tr>
                @endforeach
            </table>

        </div>

        <div class="col-md-4">
        </div>
    </div>


@endsection