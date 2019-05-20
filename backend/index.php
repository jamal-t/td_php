<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1>Identifiez-vous !</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="login">Votre login</label>
                    <input class=" form-control" type="text" name="login" id="login">
                </div>
                <div class="form-group">
                    <label for="password">Votre mot de passe</label>
                    <input class=" form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary" value="se connecter">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>