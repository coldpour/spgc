<?php if (isset($_SESSION['LoginFailed'])) { echo "Login Failed"; } ?>
<form class="login" action="index.php" method="post">
      <input class="login" type="password" placeholder="password" name="password">
      <input class="login" type="submit" value="Log In">
</form>