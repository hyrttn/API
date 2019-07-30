
<?php
$baseurl="http://localhost/git/API/";
$server="localhost";
$user="root";
$pass="123";
$db="bilgiler";

$con = mysqli_connect($server,$user,$pass,$db);
if (!$con) {
  die();
}

if ($_POST["il"] <> "" and $_POST["ilce"] <> "") {
  $key = "$baseurl?il={$_POST["il"]}&ilce={$_POST["ilce"]}&key=123abc";
}
else if ($_POST["ilce"] <> "") {
  $key = "$baseurl?ilce={$_POST["ilce"]}&key=123abc";
}
else if ($_POST["il"] <> "") {
  $key = "$baseurl?il={$_POST["il"]}&key=123abc";
}

if($_POST["i"] <> "") {
  $apiurl = "$baseurl?i={$_POST["i"]}&key=123abc";
}

  if (isset($_GET["key"])) {
    if ($_GET["key"]=="123abc") {

      if ($_GET["i"] <> "") {
          $rows = mysqli_query($con,"SELECT * FROM referandum WHERE id='{$_GET["i"]}'");
          $row=mysqli_fetch_assoc($rows);
          echo json_encode($row);
        }

      if ($_GET["il"] <> "" and $_GET["ilce"] <> "") {
        $rows = mysqli_query($con,"SELECT * FROM referandum WHERE il='{$_GET["il"]}' AND ilce='{$_GET["ilce"]}'");
        $row=mysqli_fetch_assoc($rows);
        echo json_encode($row);
      }
      else if ($_GET["ilce"] <> "") {
        $rows = mysqli_query($con,"SELECT * FROM referandum WHERE ilce='{$_GET["ilce"]}'");
        $row=mysqli_fetch_assoc($rows);
        echo json_encode($row);
      }
      else if ($_GET["il"] <> "") {
        $rows = mysqli_query($con,"SELECT * FROM referandum WHERE il= '{$_GET["il"]}'");
        $row=mysqli_fetch_assoc($rows);
        echo json_encode($row);
      }
  }
  else {
    echo '{"Response":"False","Error":"Geçersiz API key!"}';
  }
  header('Content-Type: application/json');
}
else {

  $rows = mysqli_query($con,"SELECT id,il,ilce FROM referandum");
  while ($row=mysqli_fetch_assoc($rows)) {
    $iller .= "<option value='{$row["id"]}'>{$row["il"]} - {$row["ilce"]}</option>";
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
                        <div class="col-6 offset-3">
                          <select class='form-control form-control-sm' name="i">
                            <?php echo $iller; ?>
                          </select>
                          <br>
                          <button type="submit" class="btn btn-success">Oluştur</button>
                        </div>
                      </div>

                      <br>
                      <br>
                    </form>
                      <div class="alert alert-secondary w-100" role="alert">
                        <?php echo $apiurl ?>
                      </div>
                    <a href="api.php"><button type="button" class="btn btn-light">API Test</button></a>
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
<?php } ?>
