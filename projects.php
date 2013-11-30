<?php include 'head.php'; publicPage('projects.php'); ?>

<div id='projects' class='slide fixed-height'>
  <h3>Donations 2013</h3>
  <ul class='projects'>
  <?php 
    $orgs = array(
    	       array('name' => 'Children’s Hospital Green Plant Therapy Program', 
	       	     'grant' => '$ 2,000.00'),
    	       array('name' => 'Community Design Center', 
	       	     'grant' => '$ 2,800.00'),
    	       array('name' => 'Dayton’s Bluff',
	             'grant' => '$ 1,500.00'),
    	       array('name' => 'Hamline Midway Coalition',
	             'grant' => '$ 1,450.00'),
    	       array('name' => 'Lower Phalen Creek Projects',
	             'grant' => '$ 2,575.00'),
    	       array('name' => 'Minnesota State Horticultural Society',
	             'grant' => '$ 3,000.00'),
    	       array('name' => 'Ordway-Flint Hills Festival',
	             'grant' => '$ 1,000.00'),
    	       array('name' => 'St. Paul Parks and Rec',
	             'grant' => '$ 3,225.00'),
    	       array('name' => 'New Rice Park Ad Hoc Committee',
	             'grant' => '$ 4,000.00'),
    	       array('name' => 'New Metropolitan State University',
	             'grant' => '$ 1,000.00'),
    	       array('name' => 'GCA Scholarship',
	             'grant' => '$ 250.00'),
    	       array('name' => 'MN Landscape Arboretum',
	             'grant' => '$ 500.00'),
	     );

    for($i = 0; $i < count($orgs); ++$i) {
      echo "      <li class='project'>";
      echo "        ".$orgs[$i]['name'];
      echo "      </li>";
    }
  ?>
  </ul>
</div>

<?php include 'footer.php'; ?>