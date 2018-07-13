<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lunabotics - Sponsors</title>

    <link rel="stylesheet" type="text/css" href="css/sponsorstyles.css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	<script type="text/javascript" src="js/jquery.flip.min.js"></script>

    <script type="text/javascript" src="js/sponsorscript.js"></script>
	
	<![if !IE]>
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
<![endif]>
<!-- This is needed for IE -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

</head>

<body>
    <div id="main-content">
	<!-- Header -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  
      <a class="navbar-brand" href="#">Purdue Lunabotics</a>
    </div>
	 <div class="collapse navbar-collapse" id="myNavbar">

    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
		<li><a href="Updates.html">Updates</a></li>
        <li><a href="Competition.html">Competitions</a></li>
        <!-- <li><a href="Gallery.html">Gallery</a></li> -->
        <li><a href="Team.html">Team</a></li>
		<li class="active"><a href="#">Sponsors</a></li>
		<li><a href="JoinUs.html">Join Us</a></li>
		<li><a href="Donate.html">Partner With Us</a></li>
		
      </ul>
	  
	  			<div class="nav navbar-nav navbar-right">
	        <a href="#"><img src="images/Purduelogo.png" style="width:  auto; height: 50px; padding:0px; margin-right: 10px;"></a>
			</div>

    </div>
	</div>
 </div>
</nav>
    <div style = "padding: 50px;"></div>
	
    <!-- Header End -->
	<center>
	<h3>Many thanks to our sponsors for making this organization possible.</h3></center>
    <?php
    
    // Each sponsor is an element of the $sponsors array:
    
    $sponsors = array(
    	array('TheAnvil','A coworking space at Purdue University that serves the unique needs of students.','http://www.theanvil.us'),
    	array('SOGA','Responsible allocation of funds to student organizations serving students of Purdue.','http://www.purduesg.com/soga/'),
    	array('PESC','Purdue Engineering Student Council','https://careerfair.purdueesc.org/'),
        array('Atmel','Atmel Corporation is an American-based designer and manufacturer of semiconductors.','http://www.atmel.com'),
        array('Fulton Family','Thank you Fulton Family!',' '),
		array('rockdustlocal','Rock Dust Local','http://rockdustlocal.com/index.html'),
		array('HotBoxPizza','HotBox Pizza','http://www.hotboxpizza.com/'),
		array('StackedPickle','Stacked Pickle','http://stackedpickle.com/'),
        array('ME','Purdue Mechanical Engineering','https://engineering.purdue.edu/ME'),
        array('PU','Purdue University Residences','https://www.housing.purdue.edu/'),
        array('PurdueUniversity','Purdue University Mechnical Engineering Machine Shop',' '),
		array('OffProvost','Purdue University Office of the Provost','http://www.purdue.edu/provost/'),
		array('sponsorhere','This could be you! Click the link below to donate.','http://www.purdue.edu/lunabotics/Donate.html'),
    );
    
    
    // Randomizing the order of sponsors:
    
    shuffle($sponsors);
    
    ?>
    
    
    
    <div id="main">
    
    	<div class="sponsorListHolder">
    
    		
            <?php
    			
    			// Looping through the array:
    			
    			foreach($sponsors as $company)
    			{
    				echo'
    				<div class="sponsor" title="Click to flip">
    					<div class="sponsorFlip">
    						<img src="images/sponsorsimg/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
    					</div>
    					
    					<div class="sponsorData">
    						<div class="sponsorDescription">
    							'.$company[1].'
    						</div>
    						<div class="sponsorURL">
    							<a href="'.$company[2].'">'.$company[2].'</a>
    						</div>
    					</div>
    				</div>
    				
    				';
    			}
    		
    		?>
    
            
            
        	<div class="clear"></div>
        </div>
		<div class="PartnerLink">
				<center><a href="Donate.html">
				<h4>Interested in Partnering with Lunabotics?</h4></a></center>
				</div>
				<div style="height: 300px;"></div>
    </div>

	
		 <div style="position: relative; bottom: 0px;>"
	 <nav class="navbar navbar-default navbar-fixed-bottom">
	  <div class="container-fluid">

	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="ContactUs.html">Contact Us</a></li>
			<li><a href="https://www.facebook.com/purduelunabotics">Facebook</a></li>
			<li><a href="https://twitter.com/PurdueLunabotic">Twitter</a></li>
			</ul>
			
			<div class="nav navbar-nav navbar-right">
	        <a href="#"><img src="images/Lunaboticslogo.jpg" style="width: auto; height: 50px; margin-right: 10px; padding:0px;"></a>
			</div>
	      
	    </div>
	  </div>
	</nav>
	</div>
	
	</div>
	
</body>

<script>
//$(document).ready(function(){
$(window).load(function(){
    $('#main-content').fadeIn(400);
}); 
</script>


</html>