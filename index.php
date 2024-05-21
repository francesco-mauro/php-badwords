<?php
// file che gestisce i dati del form 
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>PHP Badwords</title>
    <!--  Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>PHP Badwords</h2>
                    </div>
                    <div class="card-body">
                        <form action="greetings.php" method="get">
                            <div class="form-group">
                                <label for="paragraph"><h5>Paragrafo:</h5></label>
                                <textarea class="form-control" name="paragraph" id="paragraph" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="badword"><h5>Parola da censurare:</h5></label>
                                <input type="text" class="form-control" name="badword" id="badword">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Invia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

