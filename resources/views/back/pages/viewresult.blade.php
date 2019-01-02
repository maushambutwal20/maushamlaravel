@extends('back.layouts.main')

@section('content')
    <h1> view marks</h1>

    <table border = 1 class="table">
        <tr>

            <th>Name:</th>
            <th>Class:</th>
            <th> Roll:</th>
            <th>Shift</th>

            <th>english</th>
            <th>nepali</th>
            <th>math</th>
            <th>economics</th>
            <th>account</th>

        </tr>
        @foreach ($students as $student)
            <tr>

                <td>{{ $student->name}}</td>
                <td>{{ $student->grade}}</td>
                <td>{{ $student->roll}}</td>

                <td>{{ $student->shift}}</td>
                <td>{{ $student->english}}</td>
                <td>{{ $student->nepali}}</td>
                <td>{{ $student->math}}</td>
                <td>{{ $student->economics}}</td>
                <td>{{ $student->account}}</td>






            </tr>
        @endforeach
    </table>


@endsection