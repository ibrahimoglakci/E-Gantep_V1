<?php 
$value=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);

?>

<div class="d-flex justify-content-center align-items-center container">
  <div class="card py-5 px-3">
    <h5 class="m-0">E-Gaziantep Telefon Doğrulaması</h5><span class="mobile-text">Lütfen telefon numaranıza gönderdiğimiz kodu giriniz. <b class="text-danger">+9<?=$value[0]["telefon"]?></b></span>
    <div class="d-flex flex-row mt-5">
      <form action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">EG-</span>
          </div>
          <input type="text" class="form-control" placeholder="Doğrulama kodunu giriniz." aria-describedby="inputGroupPrepend" name="onay">
        </div>
        <input type="submit" class="btn btn-success col-6" name="onayla" value="Onayla">
      </form>
    </div>
    <div class="text-center mt-5"><span class="d-block mobile-text">Kodu almadın mı?</span><span class="font-weight-bold text-danger cursor">Tekrar Gönder</span></div>
  </div>
</div>

<style type="text/css">
.card {
  width: 350px;
  padding: 10px;
  border-radius: 20px;
  background: #fff;
  border: none;
  height: 350px;
  position: relative
}

.container {
  height: 100vh
}


.mobile-text {
  color: #989696b8;
  font-size: 15px
}

.cursor {
  cursor: pointer
}
</style>