@extends('back.layouts.main')

@section('content')
    <h1> Newly Added Students</h1>

    <table border = 1 class="table">
        <tr>

            <th>Name:</th>
            <th>Class:</th>
            <th> Roll:</th>
            <th>Gender</th>
            <th>D.O.B</th>
            <th>Email</th>
            <th>Shift</th>

            <th>Edit</th>
            <th>Delete</th>

        </tr>
        @foreach ($students as $student)
            <tr>

                <td>{{ $student->name}}</td>
                <td>{{ $student->grade}}</td>
                <td>{{ $student->roll}}</td>
                <td>{{ $student->gender}}</td>
                <td>{{ $student->dob}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->shift}}</td>

                <td> <a href="{{route('edit-student',$student->id)}}" class="btn btn-warning"> Edit</a> </td>
                <td> <a href="{{route('deletestudent',$student->id)}}" class="btn btn-danger"> Delete</a> </td>




            </tr>
        @endforeach
    </table>


@endsection