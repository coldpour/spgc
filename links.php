<?php include 'head.php'; publicPage('links.php'); ?>

<div id='links' class='slide fixed-height'>
  <ul class='links'>

  <?php 
    $sites = array(
    	       array('url' => 'http://gcamerica.org', 
	       	     'text' => 'Garden Club of America'),
    	       array('url' => 'http://www.northerngardener.org', 
	       	     'text' => 'Minnesota State Horticultural Society'),
    	       array('url' => 'http://www.arboretum.umn.edu',
	             'text' => 'Minnesota Landscape Arboretum'),
	     );

    for($i = 0; $i < count($sites); ++$i) {
      echo "<li class='links'>";
      echo "  <a href=".$sites[$i]['url'].">".$sites[$i]['text']."</a>";
      echo "</li>";
    }
  ?>

  </ul>
</div>

<?php include 'footer.php' ?>