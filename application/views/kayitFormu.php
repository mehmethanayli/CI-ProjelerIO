<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Formu</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />

    <style>
        body {
            background-color: #eee
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25)
        }

        .btn-secondary:focus {
            box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
        }

        .close:focus {
            box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
        }

        .mt-200 {
            margin-top: 200px
        }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                autoAdjustHeight: true,
                transitionEffect: 'fade',
                showStepURLhash: false,

            });

        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-200"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Launch multistep Wizard </button> </div> <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div id="smartwizard">
                            <ul>
                                <li><a href="#step-1">Step 1<br /><small>Account Info</small></a></li>
                                <li><a href="#step-2">Step 2<br /><small>Personal Info</small></a></li>
                                <li><a href="#step-3">Step 3<br /><small>Payment Info</small></a></li>
                                <li><a href="#step-4">Step 4<br /><small>Confirm details</small></a></li>
                            </ul>
                            <div class="mt-4">
                                <div id="step-1">
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Name" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Email" required> </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Password" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Repeat password" required> </div>
                                    </div>
                                </div>
                                <div id="step-2">
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Address" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="City" required> </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="State" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Country" required> </div>
                                    </div>
                                </div>
                                <div id="step-3" class="">
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Number" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Holder Name" required> </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="CVV" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Mobile Number" required> </div>
                                    </div>
                                </div>
                                <div id="step-4" class="">
                                    <div class="row">
                                        <div class="col-md-12"> <span>Thanks For submitting your details with BBBootstrap.com. we will send you a confirmation email. We will review your details and revert back.</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>