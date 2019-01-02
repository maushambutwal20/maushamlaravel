<!DOCTYPE html>
<html lang="en">
<head>
    <title> Hamro School </title>
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





<div class="row">
    <div class="col-md-4">


    </div>


    <div class="col-md-4">
        <br> <br>  <br> <br>
        <p>TOp Students from grade 12</p>

    </div>

    <div class="col-md-4">
    </div>

</div>

<div class="row">
    <div class="col-md-2">


    </div>


    <div class="col-md-6">

        <table border = 2 class="table">
            <tr>

                <th>Name:</th>
                <th>Roll.no:</th>
                <th> Grade:</th>
                <th>Shift</th>
                <th>Total Secured Marks</th>


            </tr>
            @foreach ($topfives as $topfive)
                <tr>

                    <td>{{ $topfive->name}}</td>
                    <td>{{ $topfive->roll}}</td>>
                    <td>{{ $topfive->grade}}</td>
                    <td>{{ $topfive->shift}}</td>
                    <td>{{ $topfive->total}}</td>





                </tr>
            @endforeach
        </table>

    </div>

    <div class="col-md-2">
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







