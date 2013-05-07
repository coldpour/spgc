<?php include 'head.php';
      if (loggedIn()) {
          include 'logout.php';
      } else {
          redirect('index.php', 0);
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

<?php include 'footer.php'; ?>