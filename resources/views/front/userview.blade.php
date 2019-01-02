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
                <li class="nav-item"> <a href="{{route('home')}}" class="nav-link text-white"> Home</a> </li>



                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Top students
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('topfromgrade11')}}">from Grade 11</a>
                        <a class="dropdown-item" href="{{route('topfrom12')}}"> from Grade 12</a>
                    </div>
                </div>



                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        poor performing students
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('poorfromgrade11')}}">from Grade 11</a>
                        <a class="dropdown-item" href="{{route('poorfromfrade12')}}"> from Grade 12</a>
                    </div>
                </div>


                <li class="nav-item"> <a href="#" class="nav-link text-white"> Notice</a> </li>
                <li class="nav-item"> <a href="#" class="nav-link text-white">Team</a> </li>
                <li class="nav-item"> <a href="#" class="nav-link text-white">Contact</a> </li>

            </ul>
        </div>

    </div>

</nav>












<section class="container-fluid ourservices text-center">

        <div class="row">
            <div class="col-md-4">
            </div>


            <div class="col-md-4">
                <div class="">
                    <br> <br>
                    <hr>
                    <h1>Butwal Public Campus </h1>
                    <p>Class XI & Class XI : Send-Up Examination Results 2075 </p>
                </div>
            </div>

            <div class="col-md-4">
            </div>



        </div>


        <div class="row">
            <div class="col-md-4">

                <div class="">

                </div>
            </div>

            <div class="col-md-3">

                <form role="form" method="get" action="{{route('checkresult')}}">
                    <div class="form-group">

                        <input type="number" name="roll" class="form-control" placeholder=" Roll.no" >
                    </div>

                    <div class="form-group">

                        <select class="form-control" name="grade">
                            <option disabled selected>Select class</option>
                            <option value="class 11">class 11</option>
                            <option value="class 12">class 12</option>
                        </select>
                    </div>


                    <div class="form-group">

                        <select class="form-control" name="shift">
                            <option disabled selected>Select shift</option>
                            <option value="day">Day</option>
                            <option value="morning">Morning</option>
                        </select>
                    </div>
                    <input type="submit" type="button" class="btn btn-success">
                    <hr> <hr>
                </form>
            </div>

            <div class="col-md-5">
                <div class="">

                </div>
            </div>


            <div class="row">

                <div class="col-md-12">
                    <div class="">

                    </div>

                </div>

            </div>



        </div>

    </section>
    <br> <br> <br>

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







