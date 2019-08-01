
<?php

if (isset($_POST["url"])) {
  $url=trim($_POST["url"]);
}
 $json = file_get_contents($url);
 $sonuc = json_decode($json, true);

 $veri.="<h1>{$sonuc["il"]}</h1>".
  "<h3>{$sonuc["ilce"]}</h3>".
  "<b>KAYITLI :</b> {$sonuc["kayitli"]}<br>".
  "<b>OY KULLANAN :</b> {$sonuc["oykullanan"]}<br>".
  "<b>GEÇERLİ :</b> {$sonuc["gecerli"]}<br>".
  "<b>GEÇERSİZ :</b> {$sonuc["gecersiz"]}<br>".
  "<b>EVET :</b> {$sonuc["evet"]}<br>".
  "<b>HAYIR :</b> {$sonuc["hayir"]}<br>";

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
                        <input class="form-control form-control-sm" type="text" name="url" placeholder="api url" value="">
                        <br>
                        <button type="submit" class="btn btn-success">Getir</button>
                    </div>

                    <br>
                    <br>

                    <div class="alert alert-secondary w-100" role="alert">
                      <?php echo $veri ?>
                    </div>
                    <a href="index.php"><button type="button" class="btn btn-light">Geri Dön</button></a>
                    <a href="insert.php"><button type="button" class="btn btn-light">Veri Ekle</button></a>

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
