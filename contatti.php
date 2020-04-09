<!DOCTYPE html>
<html lang="it">
<head>
        <title>Contatti</title>
        <?php include "shared/meta.php";?>
</head>

<body class="contatti">
    <?php include "shared/modal.php";?>
    <?php include "shared/navbar.php";?>

    <div class="container push-container-top">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <h1>Contatti</h1>

            <p>Per richieste informazioni compilare il modulo qui sotto</p>

            <form >
                <div class="form-group">
                  <label for="exampleInputEmail1">Inserisci il tuo nome</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Come ti chiami">
                  <small class="help-block">Non hai inserito il tuo nome</small>
                </div>
                <div class="form-group has-error">
                  <label class="control-label">Inserisci la tua email</label>
                  <input type="email" class="form-control"  placeholder="La tua email">
                  <small class="help-block">Non hai inserito la tua email</small>
                </div>
                <div class="form-group">
                  <label class="control-label">Messaggio</label>
                  <textarea class="form-control" row="3" placeholder="Srivi il tuo messaggio"></textarea
                  <small class="help-block">Il messaggio deve essere di almeno 200 caratteri..</small>
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
              </form>



            </div>
        </div>
    </div>


    <?php include "shared/footer.php";?>




    </body>
    </html>
