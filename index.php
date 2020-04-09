<!DOCTYPE html>
<html lang="it">
<head>
        <title>Layout bootstrap 3</title>
        <?php include "shared/meta.php";?>
</head>

<body>
    <?php include "shared/modal.php";?>
    <?php include "shared/navbar.php";?>
    <?php include "shared/carousel.php";?>

    <div class="container push-container-top">
        <div class="row">
          <div class="col-md-6">
         <?php include "shared/front-end-course.php";?>
        </div>


        <div class="col-md-6">
        <?php include "shared/backend-course.php";?>
        </div>
    </div>
 </div>
      <?php include "shared/footer.php";?>

    </body>
    </html>
