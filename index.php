<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Jeżeli szukasz webdevelopera, potrzebujesz osoby odpowiedzialnej za frontend czy backend albo szukasz kogoś kto ma wszystkie te umiejętności i pomoże Ci - w takim razie dobrze trafiłeś! Każda propozycja jest mile widziana :).">
    <title>mrkamis - wszystko o mnie i moich projektach</title>
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
</head>
<body class="container">
    <nav class="navbar navbar-light border-bottom">
        <a class="navbar-brand" href="./">
            mrkamis
        </a>
    </nav>
    <article>
        <?php
            require_once "app/router.php";
            Router::route($_GET);
        ?>
    </article>
    <div class="border-top" id="footer">
        <div class="text-center font-italic">
            Skontaktuj się ze mną 
            <a href="mailto:kamis2k16@outlook.com">poprzez email</a>
        </div>
    </div>
</body>
</html>