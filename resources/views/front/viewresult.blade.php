<!DOCTYPE html>
<html lang="en">
<head>
    <title> hamro school </title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-fluid text-center">
        <a href="" class="navbar-brand"> Hamro school </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto text-white">
                <li class="nav-item"> <a href="" class="nav-link text-white"> Home</a> </li>



                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Top students
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">from Grade 11</a>
                        <a class="dropdown-item" href="#"> from Grade 12</a>
                    </div>
                </div>



                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        poor performing students
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">from Grade 11</a>
                        <a class="dropdown-item" href="#"> from Grade 12</a>
                    </div>
                </div>


                <li class="nav-item"> <a href="#" class="nav-link text-white"> Notice</a> </li>
                <li class="nav-item"> <a href="#" class="nav-link text-white">Team</a> </li>
                <li class="nav-item"> <a href="#" class="nav-link text-white">Contact</a> </li>

            </ul>
        </div>

    </div>

</nav>

@foreach ($datas as $data)

<div class="row">
    <div class="col-md-4">
    </div>


    <div class="col-md-4">
        <div class="">
            <br> <br>
            <h1>Butwal Public Campus </h1>
            <h4> Send-Up Examination Result 2075</h4>
            <p>Name-> {{ $data->name}} </p>
            <p> {{ $data->grade}} </p>
            <p>Shift-> {{ $data->shift}} </p>
            <p>date of birth-> {{ $data->dob}} </p>
        </div>
    </div>

    <div class="col-md-4">
    </div>



</div>








<div class="row">
    <div class="col-md-4">
    </div>


    <div class="col-md-4">
        <div class="">
            <br> <br>


            <table class="table">

                <thead>
                <tr>
                    <th>subject name:</th>
                    <th>oobtained mark:</th>
                    <th>full mark:</th>
                    <th>Pass mark:</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nepali</td>
                    <td>{{ $data->nepali}}</td>
                    <td>100</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>{{ $data->english}}</td>
                    <td>100</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td> Math
                    </td>
                    <td>{{ $data->math}}</td>
                    <td>100</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>Account</td>
                    <td>{{ $data->account}}</td>
                    <td>100</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>Economics</td>
                    <td>{{ $data->economics}}</td>
                    <td>100</td>
                    <td>35</td>
                </tr>
                </tbody>
                @endforeach
            </table>


            Total-> <td>{{ $data->total}}</td>




        </div>
    </div>

    <div class="col-md-4">
    </div>



</div>










<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href=""> Hamroschool.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>







