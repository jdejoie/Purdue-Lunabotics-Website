<html>



<head>

<!-- Set viewport width and  character scale -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
   <!--   Import all scripts and plugins -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Lunabotics - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/NavBarstyles.css">
  <link rel="stylesheet" href="css/indexstyles.css">

  <link rel="stylesheet" href="css/animate.css">

  

  <!-- Hide this line for IE (needed for Firefox and others)

<![if !IE]>

<link rel="icon" href="images/favicon.png" type="image/x-icon" />

<![endif]> -->

<!-- This is needed for IE -->

<link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

  

 <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-66607321-1', 'auto');

  ga('send', 'pageview');



</script> 

</head>



<body>



<nav class="navbar navbar-inverse menu">
  <div class="container-fluid">
    <div class="navbar-header">
	<a class="navbar-left" href="http://web.ics.purdue.edu/~lunabot/index.html">
	  	<img src="images/2018/Lunabotics Logo Full Color w No Background.png" style="width:  auto; height: 70px; padding:0px;">
	  </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
		<li><a href="http://web.ics.purdue.edu/~lunabot/index.html">Home</a></li>
				<li class="dropdown">
					<a class="dropdown-toogle" data-toggle="dropdown">Team
		      		<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://web.ics.purdue.edu/~lunabot/MeetTheTeam.html"> Meet the Team</a></li>
						<li><a href="http://web.ics.purdue.edu/~lunabot/Leadership.html">Leadership</a></li>
				<li class="dropdown">
					<a class="dropdown-toogle" data-toggle="dropdown">Mechanical
		      		<span class="caret"></span></a>
					<ul class="dropdown-menu">
		      			<li><a href="http://web.ics.purdue.edu/~lunabot/Drivetrain.html">Drivetrain</a></li>
		      			<li><a href="http://web.ics.purdue.edu/~lunabot/Excavation&Deposition.html">Excavation & Deposition</a></li>
						<li><a href="http://web.ics.purdue.edu/~lunabot/Manufacturing.html">Manufacturing</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toogle" data-toogle="dropdown">Electronics
		      		<span class="caret"></span></a>
					<ul class="dropdown-menu">
		      			<li><a href="http://web.ics.purdue.edu/~lunabot/Software.html">Software</a></li>
						<li><a href="http://web.ics.purdue.edu/~lunabot/Power&Hardware.html">Power & Hardware</a></li>
					</ul>
				</li>
						<li><a href="http://web.ics.purdue.edu/~lunabot/Systems.html">Systems</a></li>
						<li><a href="http://web.ics.purdue.edu/~lunabot/Business.html">Business</a></li>
					</ul>
				</li>
		<li><a href="http://web.ics.purdue.edu/~lunabot/Updates.html">Updates</a></li>
        <li><a href="http://web.ics.purdue.edu/~lunabot/Competition.html">Competition</a></li>
        <!-- <li><a href="Gallery.html">Gallery</a></li> -->
		<li><a href="Sponsor.php">Sponsors</a></li>
		<li><a href="http://web.ics.purdue.edu/~lunabot/JoinUs.html">Join Us</a></li>
		
      </ul>
	  	
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
		array('sponsorhere','This could be you! Click the link below to donate.','http://web.ics.purdue.edu/ContactUs.html'),
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