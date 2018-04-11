<<<<<<< HEAD:workshop/src/login.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jean Tokin</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<div><h1>L'équipe est token</h1></div>

<section class="section">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://www.poneygroup.com/images/logo.jpg" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    </nav>
    <div class="field1">
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
        </p>
    </div>
    
    <div class="field">
        <p class="control has-icons-left">
            <form action="home.php" method="post" >
        <p>
            <input type="password" name="mot_de_passe" />
        </p>
</form>
            <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
        </p>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Login
            </button>
        </p>
    </div>
</section>
</body>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de projets</title>
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<nav class="navbar is-mobile" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="login.php">
            <img src="logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="28" height="auto">
        </a>
        <div class="title is-mobile"><h1>Gestion de projets</h1></div>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
</nav>

<div class="center">
<section class="section">
    <div class="field">
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
        </p>
    </div>
    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
        </p>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Login
            </button>
        </p>
    </div>
</section>
</div>
</body>
>>>>>>> 71e8d554fe6d53143e8e63e0f56bf67c9366aeac:workshop/src/login.html
</html>