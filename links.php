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
    	       array('url' => 'http://www.saintpaulparksconservancy.org/',
	             'text' => 'The Saint Paul Parks Conservancy'),
    	       array('url' => 'http://www.gcamerica.org/what-we-do-NAL-Conservation.cfm',
	             'text' => 'National Affairs & Legislation'),
    	       array('url' => 'http://www.stpaul.gov/index.aspx?NID=1031',
	             'text' => 'Blooming Saint Paul'),
    	       array('url' => 'http://www.greatrivergreening.org/',
	             'text' => 'Great River Greening'),
    	       array('url' => 'http://www.childrensmn.org/blog/kidshealth/2013/05/a-green-thumb-with-a-healing-touch/',
	             'text' => 'Children’s Hospital MN'),
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