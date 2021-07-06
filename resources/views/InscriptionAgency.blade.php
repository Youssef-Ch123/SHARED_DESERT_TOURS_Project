<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <link href="{{url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />



</head>
<body>
        <div class="container" style="width: 75%;margin: auto">
            <div class="card-body">

                    @if ($msg != "")
                    <?php
                    echo "
                        <div class='row'>
                                <div class='col-lg-12 alert-success'>
                                    <p class='alert'>Success, please check your mail and click on the link to confirm your email adress</p>
                                </div>
                        </div><br/>
                        ";
                    ?>
                    @endif


            <form action="{{url('Create')}}" method="POST">

                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Agency Name: *</label>
                                <div class="kt-input-icon kt-input-icon--right">
                                    <input type="text" class="form-control" name="Name" placeholder="Enter the agency name" required>
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-edit"></i></span></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Address:</label>
                                <div class="kt-input-icon kt-input-icon--right">
                                    <input type="text" class="form-control" name="Adress" placeholder="Enter your address">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="">Contact:</label>
                                <div class="kt-input-icon kt-input-icon--right">
                                    <input type="email" class="form-control" name="Tel" placeholder="Enter contact number">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-phone"></i></span></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="">Fax:</label>
                                <div class="kt-input-icon kt-input-icon--right">
                                    <input type="text" class="form-control" name="Fax" placeholder="Fax number">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-info-circle"></i></span></span>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="">Email: *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope"></i></span></div>
                                    <input type="email" class="form-control" name="Email" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Create password: *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-lock"></i></span></div>
                                    <input type="password" class="form-control" name="Password" placeholder="Please enter your password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Create account</button>
                                </div>
                            </div>
                            <div class="row border-top card-body text-center"><p>Have an account?<a href="/Agency/SignIn" class="btn btn-link">Log In</a></p></div>
                        </div>
                    </div>
                </form>
            </div>

                </div>
</body>
</html>
