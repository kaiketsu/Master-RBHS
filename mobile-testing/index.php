<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <!-- title -->
    <title>Rutgers | Rutgers Biomedical and Health Sciences</title>
    
    <!-- Included CSS Files -->
    <link type="text/css" rel="stylesheet" href="includes/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/templates.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/class.css" />
	<link type="text/css" rel="stylesheet" href="includes/css/override.css" /> 	
    <!--[if IE]><link type="text/css" rel="stylesheet" href="includes/css/ie8.css" /><![endif]-->
    
	<!-- Custom Mobile -->
    <link type="text/css" rel="stylesheet" media="only screen and (max-width: 240px)" href="includes/css/mobile.css" />
    <!-- Custom Tablet -->
    <link type="text/css" rel="stylesheet" media="only screen and (max-width: 767px)" href="includes/css/tablet.css" />
    
    <!-- Included JavaScript Files -->
    <script type="text/javascript" src="includes/js/modernizr.js"></script>
    <script type="text/javascript" src="includes/js/jquery.js"></script>
    <script type="text/javascript" src="includes/js/jquery-json.js"></script>
    <script type="text/javascript" src="includes/js/templates.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap.js"></script>
    <!--[if !IE]><!--><script type="text/javascript" src="includes/js/NOTie8.js"></script><!--<![endif]-->
    <!--[if IE]><script type="text/javascript" src="includes/js/WHYie8.js"></script><![endif]-->
    <script type="text/javascript" src="includes/js/home.js"></script>
</head>
<body>
	<div class="row">
	<div class="twelve columns" >
        <!-- Includes Header -->	
        <?php include("includes/header.php") ?>
        <!-- Includes Navigation -->
        <?php include("includes/nav.php") ?>
    </div>
    </div>
    
    <!-- Slideshow
    ====================== -->
    <div class="row">
    <div class="twelve columns">
        <div id="slideshow_area" class="shiftup hide-for-medium-down">
            <!-- Image Slider -->
            <div id="carousel_img" class="carousel slide span9">
                <div id="image" class="carousel-inner"></div>
            </div>
            <!-- Content Slider -->
            <div id="content_area" class="span3"><br/>
                <div id="content_inner" class="carousel slide span3">
                    <div id="content" class="carousel-inner"></div>
                </div>
                <div id="carouselnav" class="carousel-nav span3"></div>
            </div>
        </div>
        <!-- Mobile Slider -->
        <div class="row">
            <div id="shifting" class="show-for-medium-down mobile-four columns">
            
            </div>
        </div>
        <br/>
    </div>
    </div><!-- #end-of-slideshow -->
    
    <div class="row">
    <div class="twelve columns shiftup_ex bg-white">
        
        <!-- Main Content
        ====================== -->
        <div id="main" class="six push-three columns"><br/>
            <h1 class="title">Leading the Way in Academic Health Care:<br/>Rutgers Biomedical and Health Sciences</h1>
            <p>With the establishment of Rutgers Biomedical Health Sciences, Rutgers&mdash;already a leading national research university&mdash;now stands as one of America&rsquo;s largest, most comprehensive university-based centers for studying and improving human health and health care.</p>

            <p>As we advance medical innovation, provide direct patient care informed by the latest research findings, and educate a full complement of health care professionals, Rutgers is equipped as never before to transform lives.</p>

            <p>For Rutgers and the region, the advantages of having a highly regarded health care division attached to The State University of New Jersey are considerable as we</p>
			
			<ul>
				<li>draw more top-flight faculty and students;</li>
				<li>deepen our research collaborations;</li>
				<li>optimize the coordination of health care for residents;</li>
				<li>accelerate economic growth; and</li>
				<li>attract even greater public and private funding.</li>
			</ul>
			
            <p>It&rsquo;s a brilliant new era for medical education, research, and practice in New Jersey.</p>

        </div><!-- #end-of-main-content-area -->
        
        <!-- Right Sidebar
        ====================== -->
        <div class="three push-three columns">
        <div id="home-rite_sidebar" class="row"><br/>
            <!-- Panel One -->
            <div class="panel padding">
            <div class="row">
            <div class="twelve columns">
                <h2 class="title">Meet the Chancellor</h2>
                <img src="images/sm_image_FPO.jpg" />
                <a>Eu nibh aliquam nam, esta quidam utroque vertus</a>
                <p>Est inani numquam ceteros eu. Est quem dicat minimum cu, at vim paulo partiendo. Modus reformidans sed id. Id etiam virtute veritus nec, ea has justo utamur dissentiet. Eum no facilisi consti tuam omittantur.</p>
            </div>
            </div>
            </div>
            <!-- Panel Two -->
            <div class="panel padding">
                <h2 class="title">Per primis Causae</h2>
                <a>Mundi habemus facilisi vix at, at quo eligendi.</a>
                <p>Pri in everti minimum pertina cia, ad eos convenire mnesar chum in inani veniam salutatus.</p>
                <!--<p class="more"><a href="#">More &gt;</a></p>-->
            </div>
        </div>
        </div><!-- #end-of-right-sidebar -->
        
        <!-- Includes Left Sidebar -->
        <?php include("includes/side_nav-home.php") ?>
    
    </div>
    </div><!-- #end-of-all-content -->
    
    <!-- Includes Footer -->
    <?php include("includes/footer.php") ?>
    
</body>
</html>