<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <link href="{{url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />



</head>
<body>
        <div class="container" style="width: 75%;margin: auto">
            <div class="card-body" style="padding: 15%">
                <form method="POST" action="/Register">
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <label class="">Email: *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope"></i></span></div>
                                    <input type="email" class="form-control" required  placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

                </div>
</body>
</html>
