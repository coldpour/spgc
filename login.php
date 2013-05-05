<form class="login" action="index.php" method="post">
    <input class="login" type="password" placeholder="password" name="password">
    <span class="login">
        <?php if (isset($_SESSION['LoginFailed'])) { ?>
    	    X
        <?php } ?>
    </span>
    <input class="login" type="submit" value="Log In">
</form>
