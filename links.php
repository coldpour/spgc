<?php include 'head.php'; publicPage('links.php'); ?>

<div id='links' class='slide'>
  <ul class='links'>

  <?php 
    $sites = array(
    	       array('url' => 'http://gcamerica.org', 
	       	     'text' => 'Garden Club of America',
		     'img' => 'images/links/gca.png'),
    	       array('url' => 'http://www.northerngardener.org', 
	       	     'text' => 'Minnesota State Horticultural Society',
		     'img' => 'images/links/horticultural_society.png'),
    	       array('url' => 'http://www.arboretum.umn.edu',
	             'text' => 'Minnesota Landscape Arboretum',
		     'img' => 'images/links/minnesota_landscape_arboretum.png'),
    	       array('url' => 'http://www.saintpaulparksconservancy.org/',
	             'text' => 'The Saint Paul Parks Conservancy',
		     'img' => 'images/links/stpaul_parks_conservancy.png'),
    	       array('url' => 'http://www.gcamerica.org/what-we-do-NAL-Conservation.cfm',
	             'text' => 'National Affairs & Legislation',
		     'img' => 'images/links/nal.png'),
    	       array('url' => 'http://www.stpaul.gov/index.aspx?NID=1031',
	             'text' => 'Blooming Saint Paul',
		     'img' => 'images/links/blooming_stpaul.png'),
    	       array('url' => 'http://www.greatrivergreening.org/',
	             'text' => 'Great River Greening',
		     'img' => 'images/links/great_river_greening.png'),
    	       array('url' => 'http://www.childrensmn.org/blog/kidshealth/2013/05/a-green-thumb-with-a-healing-touch/',
	             'text' => 'Children’s Hospital MN',
		     'img' => 'images/links/childrens_hospital.png'),
	     );

    for($i = 0; $i < count($sites); ++$i) {
      echo "<li class='links'>";
      echo "  <img class='links' src=".$sites[$i]['img'].">";
      echo "  <br />";
      echo "  <a href=".$sites[$i]['url'].">".$sites[$i]['text']."</a>";
      echo "</li>";
    }
  ?>

  </ul>
</div>

<?php include 'footer.php' ?>