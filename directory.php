<?php include 'head.php';
      if (!empty($_SESSION['LoggedIn'])) {
          include 'logout.php';
      } else {
          echo "<meta http-equiv='refresh' content='0;index.php' />";
      }
      include 'banner.php';
?>

<div class="stripe">
  <div class="center slide middle">
    <div id="memberLinks">
      <ul>
        <li><a href="directory.php">Directory</a></li>
      </ul>	
    </div>
    <div id="memberContent">
      <h3>Judy McManus</h3>
      <p>some info</p>
      <h3>Susan Brust</h3>
      <p>some other info</p>
    </div>
  </div>
</div>

<?php include 'footer.php';
      include 'foot.php';
?>