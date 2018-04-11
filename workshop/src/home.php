<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    <?php
        try {
            if (/*Requete connexion validée*/) {
                if ($donnees["Type"] == 1) {
                    echo '':
                } elseif ($donnees["Type"] == 2) {
                    echo '':
                } elseif ($donnees["Type"] == 3) {
                    echo '':
                }
            }
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    ?>
</body>
</html>