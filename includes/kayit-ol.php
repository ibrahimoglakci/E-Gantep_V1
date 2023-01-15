<?php 
if(!empty($_GET['referans'])) {
    $referans=$DB->filter($_GET['referans']);

}
if(!empty($_GET['errorcode'])) {
    $errorcode=$DB->filter($_GET['errorcode']);

}

if(!empty($_SESSION['email'])) {
    ?>
    <meta http-equiv="refresh" content="0;url=<?=SITE?>">
    <?php
}


 ?>


<head>
    
    <title>Kayıt Ol | E-Gaziantep</title>
</head>

<div class="body-form">
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5">
                    <?php 
                    if(!empty($errorcode) && $errorcode==100) 
                    {
                        ?>
                        <div class="alert alert-danger"><i class="fas fa-times-circle"></i> Girilen e-posta adresi zaten alınmış. Lütfen farklı bir e-posta deneyiniz!</div>
                        <?php
                    }
                    if(!empty($errorcode) && $errorcode==35) 
                    {
                        ?>
                        <div class="alert alert-danger"><i class="fas fa-times-circle"></i> Şifrenizin uzunluğu en az 8 karakter olmak zorundadır!</div>
                        <?php
                    }

                     ?>
                    <h3 class="mt-3" style="color: #fff;">Kayıt Ol <br> </h5> 
                    <form action="<?=SITE?>register.php" method="post">
                        <div class="form-input"> <i class="fa fa-envelope"></i> <input type="text" class="form-control" name="registeremail" placeholder="E-posta Adresini Giriniz"> </div>
                        <div class="form-input"> <i class="fa fa-user"></i> <input type="text" class="form-control" name="username" placeholder="İsim Soyisim Giriniz"> </div>
                        <div class="form-input"> <i class="fa fa-lock"></i> <input type="password" class="form-control" name="sifre" placeholder="Şifrenizi giriniz"> </div>
                        <div class="form-input"> <i class="fas fa-key"></i> <input type="text" class="form-control" name="referans" placeholder="Referans Kodunu Giriniz" <?php if(!empty($referans)) {echo "value='$referans'";} else {echo "";} ?>> </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Üyelik sözleşmesini okudum, kabul ediyorum. </label> </div> 
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Fırsat ve kapmanyalardan haberdar ol. </label> </div>
                       
                        <input type="submit" name="kayit" class="btn btn-info btn-block mt-3" value="Kayıt Ol">
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

    .body-form {
    background-color: lightgray;
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    margin-top: -48px;

    }
    

    .card {
        border: none;
        
        background-color: #535fe6;
        color: #fff
    }


    .form-input {
        position: relative;
        margin-bottom: 10px;
        margin-top: 10px
    }

    .form-input i {
        position: absolute;
        font-size: 18px;
        top: 15px;
        left: 10px;
        color: darkgray;
    }

    .form-control {
        height: 50px;
        background-color: #fff;
        text-indent: 24px;
        font-size: 15px
    }

    .form-control:focus {
        background-color: #25272a;
        box-shadow: none;
        color: #fff;
        border-color: #4f63e7
    }

    .form-check-label {
        margin-top: 2px;
        font-size: 15px
    }

    form .signup {
        height: 50px;
        font-size: 14px;

    }

   

</style>