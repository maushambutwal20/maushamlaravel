@extends('back.layouts.main')

@section('content')



    <div class="row">
        <div class="col-md-4">
        </div>


        <div class="col-md-4">
            <h1> class 11 day shift</h1>

            <table border = 1 class="table">
                <tr>

                    <th>Name:</th>
                    <th>Class:</th>
                    <th> Roll:</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Email</th>



                </tr>
                @foreach ($students as $student)
                    <tr>

                        <td>{{ $student->name}}</td>
                        <td>{{ $student->grade}}</td>
                        <td>{{ $student->roll}}</td>
                        <td>{{ $student->gender}}</td>
                        <td>{{ $student->dob}}</td>
                        <td>{{ $student->email}}</td>





                    </tr>
                @endforeach
            </table>



        </div>

        <div class="col-md-4">
        </div>
    </div>



@endsection