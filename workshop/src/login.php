<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de projets</title>
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css%22%3E
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js%22%3E</script>
</head>
<body>
<nav class="navbar is-mobile" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="login.php">
            <img src="https://pbs.twimg.com/profile_images/378800000029970227/348c5650e8547d5d1961d43ddc6d21c6_400x400.jpeg" alt="Bulma: a modern CSS framework based on Flexbox" width="28" height="auto">
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

<form action="home.php" method='post'>
<table align="center" border="0">
  <tr>
    <td><input type="text" name="login" maxlength="250" placeholder="Email..."></td>
  </tr>
  <tr>
    <td><input type="password"name="pass" maxlength="10" placeholder="Password..."></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="log in"></td>
  </tr>
</table>
</form>

</div>
</body>
</html>