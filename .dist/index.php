<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>

    <div class="container-md mt-3 border">


        <div class="justify-content-center">

            <!-- Navigation Header Bar -->

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Bill Africa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" id="headernav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Subscription</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Airtime
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">MTN</a>
                                <a class="dropdown-item" href="#">GLO</a>
                                <a class="dropdown-item" href="#">AIRTEL</a>
                                <a class="dropdown-item" href="#">ETISALAT</a>

                            </div>
                        </li>
                    </ul>

                    <!-- Login Form -->

                    <form class="form-inline">

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username / Email</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                placeholder="Username / Email">
                        </div>

                        <label class="sr-only" for="inlineFormInputName2">Password</label>
                        <input type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                            placeholder="Password">

                        <button type="submit" class="btn btn-success mb-2">Login</button>
                    </form>
                </div>
            </nav>

        </div>

        <!-- Jumbotron Header -->

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">
                    <marquee>Welcome To Bill Africa</marquee>
                </h1>
                <p class="lead">Enjoy Unbeatable Discounts While you Pay All Bills and Subscriptions In The Snap Of A
                    Finger
                </p>
            </div>
        </div>

        <div id="headertxt">
            <h1> PAY ALL YOUR BILL WITH EASE </h1>
        </div>

        <!-- Available payments -->

        <div class="card-deck" class="row row-cols-1 row-cols-md-2">

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Airtime Nigeria</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: NG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Airtime Ghana</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: GH</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Airtime Ethopia</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: ET</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Airtime Uganda</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: UG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Airtime Kenya</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: KE</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Cable TV (DSTV, GoTV, Startimes)</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: NG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h3 class="card-title">DStv Subscription Ghana</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: GH</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Cable TV (DSTV, GoTV)</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: UG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Cable Dstv Kenya</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: KE</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Power & Electricity</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: NG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Electricity Uganda</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: UG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Electricity Kenya</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: KN</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">LCC Lekki & Ikoyi</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: NG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Data bundles all network Nigeria</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: NG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Data bundles all network Uganda</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: UG</h5>
                    </div>
                </div>
            </div>

            <div class="card-group" id="Remita">

                <div class="card text-white bg-dark mb-3" id="Remita">
                    <div class="card-body">
                        <h3 class="card-title">Remita government bill payments</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Country: UG</h5>
                    </div>
                </div>
            </div>


        </div>


        <!-- Footer -->

        <div class="footer" id="foot">
            © Bill Africa 2021, All Right Reserved
        </div>

    </div>

</body>

</html>