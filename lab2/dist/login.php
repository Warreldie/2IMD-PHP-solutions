<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - twitch login</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <nav class="nav">
      <a href="?page=browser">Browse</a>
      <a href="?page=getdesktop">Get desktop</a>
      <a href="?page=tryprime">Try prime</a>
      <a href="#" class="loggedIn">
        <div class="user--avatar"><img
            src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387"
            alt=""></div>
        <h3 class="user--name">Username here</h3>
        <span class="user--status">Watching dakotaz</span>
      </a>
      <a href="logout">Log out?</a>
    </nav>
  </header>

  <div id="app">
    <form action="login.php" method="post"></form>
    <h1>Log in to Twitch</h1>
    <nav class="nav--login">
      <a href="#" id="tabLogin">Log in</a>
      <a href="#" id="tabSignIn">Sign up</a>
    </nav>

    <div class="alert hidden">That password was incorrect. Please try again</div>

    <div class="form form--login">
      <label for="username">Username</label>
      <input type="text" id="username" name="username">

      <label for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>

    <div class="form form--signup hidden">
      <label for="username2">Username</label>
      <input type="text" id="username2">

      <label for="password2">Password</label>
      <input type="password" id="password2">

      <label for="email">Email</label>
      <input type="text" id="email">
    </div>

    <input type="Login" value="Log in" class="btn">
    </form>
  </div>
  <!-- partial -->

</body>

</html>