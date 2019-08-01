
<?php
$baseurl="http://localhost/git/API/";
$key ="123abc";

if (isset($_GET["insert"])) {
  if ($_GET["insert"]==1) {
    $url="Eklendi.";
  }
  else {
    $url="Ekleme başarısız.";
  }

}


if (isset($_POST["key"])) {
  if ($_POST["key"]==$key) {
    $url=$baseurl.sprintf("?il=%s&ilce=%s&kayitli=%s&oykullanan=%s&gecerli=%s&gecersiz=%s&evet=%s&hayir=%s&p=insert&key=123abc",
                $_POST["il"],$_POST["ilce"],$_POST["kayitli"],$_POST["oykullanan"],
                $_POST["gecerli"],$_POST["gecersiz"],$_POST["evet"],$_POST["hayir"]);
    if ($_POST["url"]<>"url") {
      header("location:$url");
    }
  }
  else {
    $url="API Key yanlış.";
  }
}
 ?>

 <!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Referandum API</title>
  </head>
  <body>
    <div class="container">

      <div class="row mt-5">
            <div class="col">
            </div>
              <div class="col-6">
                <h1>Referandum API</h1>
                <div class="jumbotron">
                  <form method="post">
                    <div class="container">
                      <div class="alert alert-success w-100" role="alert">
                        <?php echo $url; ?>
                      </div>
                      <div class="form-group col-8 offset-2">
                        <input class="form-control form-control-sm mt-2" type="text" name="key" placeholder="api key" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="il" placeholder="il" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="ilce" placeholder="ilçe" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="kayitli" placeholder="kayıtlı" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="oykullanan" placeholder="oy kullanan" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="gecerli" placeholder="geçerli" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="gecersiz" placeholder="geçersiz" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="evet" placeholder="evet" value="">
                        <input class="form-control form-control-sm mt-2" type="text" name="hayir" placeholder="hayır" value="">
                        <br>
                        <button type="submit" class="btn btn-success">Ekle</button>
                        <button type="submit" name="url" value="url" class="btn btn-success">URL</button>
                      </div>
                    </div>
                    <br>
                    <br>

                    <a href="index.php"><button type="button" class="btn btn-light">Geri Dön</button></a>
                    <a href="api.php"><button type="button" class="btn btn-light">Api Test</button></a>

                  </form>
                </div>
              </div>
            <div class="col">
            </div>
      </div>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
