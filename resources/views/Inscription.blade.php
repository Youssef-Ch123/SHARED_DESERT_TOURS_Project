<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
            .link{
                border:2px solid black;padding:3%;margin-bottom: 2%;
            }
        </style>
</head>
<body>
        <div class="container" style="padding-left: 20%;">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                <header class="card-header">
                    <div class="form-row col-12 link">
                            <a href="#" class="fa fa-google"> <span > Sign up with Google </span> </a>
                    </div>
                    <div class="form-row col-6 link">
                            <a href="#" class="fa fa-facebook"> <span >Sign up with Facebook</span></a>
                    </div>

                    <div class="form-row col-6 link">
                            <a href="#" class="fa fa-apple"> <span >Sign up with Apple</span> </a>
                    </div>

                </header>
                <div class="card-body">
                <form method="POST" action="/Register">

                    <div class="form-row">

                        <div class="form-group col-12">
                                <hr style="font-weight: bold;">
                        </div>

                        <div class="form-group col-md-6">
                                      <label>First name *</label>
                                      <input type="text" class="form-control" placeholder="" required>
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                      <label>Last name *</label>
                                      <input type="text" class="form-control" placeholder="" required>
                        </div> <!-- form-group end.// -->

                        <div class="form-group col-md-6">
                                <label>Phone number</label>
                                <input type="tel" class="form-control" placeholder="">
                              </div> <!-- form-group end.// -->
                              <div class="form-group col-md-6">
                                <label>Birth day</label>
                                <input type="date" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->


                        <div class="form-group col-md-12">
                                <label>Home Town</label>
                                <input type="text" class="form-control" placeholder="">
                            </div> <!-- form-group end.// -->
                        <div class="form-group col-md-12">
                            <label>Email address *</label>
                            <input type="email" class="form-control" placeholder="" required>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> <!-- form-group end.// -->


                        <div class="form-group col-md-12">
                            <label>Create password *</label>
                            <input class="form-control" type="password" required>

                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                        </div> <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                </form>
            </div> <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="/SignIn">Log In</a></div>
                </div> <!-- card.// -->
                </div> <!-- col.//-->

                </div> <!-- row.//-->


                </div>
</body>
</html>
