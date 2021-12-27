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
        <div class="row d-flex justify-content-center mt-200"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Kayıt İşlemini Başlat</button> </div> <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kayıt İşlemini </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">

                        <form action="<?php echo base_url("kayitformu/insert") ?>" method="get">
                            <div id="smartwizard">
                                <ul>
                                    <li><a href="#genelBilgiler">Aşama-1<br /><small>Genel Bilgiler</small></a></li>
                                    <li><a href="#kullaniciBilgileri">Aşama-2<br /><small>Kullanıcı Bilgileri</small></a></li>
                                    <li><a href="#odemeBilgileri">Aşama-3<br /><small>Ödeme Bilgileri</small></a></li>
                                    <li><a href="#onay">Aşama-4<br /><small>Onay</small></a></li>
                                </ul>
                                <div class="mt-4">
                                    <div id="genelBilgiler">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="isim" class="form-control" placeholder="İsim Yazınız"> </div>
                                            <div class="col-md-6"> <input type="text" name="email" class="form-control" placeholder="Email"> </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="parola" class="form-control" placeholder="Parola"> </div>
                                            <div class="col-md-6"> <input type="text" name="kullaniciAdi" class="form-control" placeholder="Kullanıcı Adı"> </div>
                                        </div>
                                    </div>
                                    <div id="kullaniciBilgileri">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="adres" class="form-control" placeholder="Addres"> </div>
                                            <div class="col-md-6"> <input type="text" name="sehir" class="form-control" placeholder="Şehir"> </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="ilce" class="form-control" placeholder="İlçe"> </div>
                                            <div class="col-md-6"> <input type="text" name="mahalle" class="form-control" placeholder="Mahalle"> </div>
                                        </div>
                                    </div>
                                    <div id="odemeBilgileri" class="">
                                        <div class="row">
                                            <div class="col-md-6"> <input type="text" name="kartNumarasi" class="form-control" placeholder="Kart Numarası"> </div>
                                            <div class="col-md-6"> <input type="text" name="kartIsim" class="form-control" placeholder="Kart Üzerindeki İsim"> </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"> <input type="text" name="cvv" class="form-control" placeholder="CVV"> </div>
                                            <div class="col-md-6"> <input type="text" name="gsm" class="form-control" placeholder="Gsm"> </div>
                                        </div>
                                    </div>
                                    <div id="onay" class="">
                                        <div class="row">
                                            <div class="col-md-12"> <input type="submit" class="form-control btn btn-primary" value="Formu Gönder"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>