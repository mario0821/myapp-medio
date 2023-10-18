</DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF"-8>
        <meta http-equiv="X-UA-Compataible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-
        scale=1.0">

        <title>MyApp | login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fontawsome/css/all.css">
        </head>
        <body class="bg-dark">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5"> <div class="card o-hidden border-1 my-5">
                        <div class="card-body p-0"> <div class="row"> <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <h4>welcome to MyApp</h4> </div>
                                    <from action="config.php" method="post">
                                        <div class="input-group mb-3>
                                        <span class="input-group-text" id="basic-addon1"><i class="fas
                                        fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="username"
                                        aria-lable="username" aria-describedby="basic-addon1" name="username">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas
                                        fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="password"
                                        aria-label="password" aria-describedby="basic-addon1" name="password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="submit" class="btn btn-primary form-control" name="login"
                                        value="login">
                                    </div>  
                                    </from>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>