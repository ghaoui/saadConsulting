<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.digitallink
 *
 * @copyright   Copyright (C) 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add Stylesheets
//$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
$doc->addScript('templates/' . $this->template . '/js/jquery-2.1.3.min.js');
$doc->addScript('templates/' . $this->template . '/js/ui.js');
$doc->addScript('templates/' . $this->template . '/js/template.js');
$doc->addScript('templates/' . $this->template . '/js/jQuery-jcImgScroll.js');
$doc->addScript('templates/' . $this->template . '/js/main.js');






// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<a href="'.JUri::root().'"><img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" class="img-responsive" /></a>';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Add Stylesheets -->
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/template.css">
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/animate.css">
	<jdoc:include type="head" />

	<!-- Add JavaScript 

	<script type="text/javascript" src="templates/<?php echo $this->template; ?>/js/bootstrap.min.css"></script>
-->
	<?php // Template color ?>
	<?php if ($this->params->get('templateColor')) : ?>
	<?php // mettre ici le style de background if change ?>
	<?php endif; ?>
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl; ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">

<section id="menu">
    <div class="container-fluid">
        <div class="row dichetnav position0">
            <div class="col-lg-2 col-md-1 col-sm-1 xs-hidden"></div>
            <div class="col-lg-2  col-md-2 col-sm-3 col-xs-12 navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
               <a href="#" class="navbar-brand"> <?php echo $logo;?></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 xs-hidden"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 collapse navbar-collapse" id="navbar-collapse">
                <jdoc:include type="modules" name="position-0" style="none" />
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 xs-hidden"></div>
        </div>
    </div>
</section>
<section id="carousel ">
    <div class="container-fluid">
        <div class="row carousel position1">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        		<?php if ($this->countModules('position-1')) : ?>
					<jdoc:include type="modules" name="carousel" style="none" />
				<?php endif; ?>
	            <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	              <div class="carousel-inner" role="listbox">
	                <div class="item active">
	                  <img src="images/carousolimg.jpg" alt="..." class="img-responsive">
	                  <div class="carousel-caption">
	                    <h3>Votre slogan </h3>
	                    <h2>sera place ici</h2>
	                    <a href="">contactez nous</a>
	                  </div>
	                </div>
	              </div>
	            </div> -->
        	</div>
        </div>
    </div>
</section> 
<section id="presentation">
    <div class="container-fluid">
        <div class="row presentation position2">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
	        	<?php if ($this->countModules('position-2')) : ?>
					<jdoc:include type="modules" name="presentation" style="none" />
				<?php endif; ?>
                <!-- <div class="row">
		             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
		                <h5>Postremo ad id</h5>
		                <h3>indignitatis est ventum</h3>
		                <p>  ut cum peregrini ob formidatam haut ita dudum alimentorum inopiam pellerentur ab urbe praecipites, sectatoribus disciplinarum </p>
		                <p>liberalium inpendio paucis sine respiratione ulla extrusis, tenerentur minimarum adseclae veri.</p>
		            </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<section id="sectionwork">
    <div class="container-fluid">
    	<div class="row petitboul position3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            	<?php if ($this->countModules('position-3')) : ?>
						<jdoc:include type="modules" name="sectionwork" style="none" />
					<?php endif; ?>
<!--             	<div class="row">
            		<div class="col-lg-2  hidden-md hidden-sm hidden-xs"></div>
		            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center">
		                <img src="images/mod4pic4.png" alt="" class="img-responsive center-block boderraduis">
		                <h3>Web design</h3>
		                <div class="borderbottom center-block"></div>
		                <p>
		                    Tempus, et tria milia saltatricum ne interpellata quidem cum ch
		                </p>
		            </div>
		            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center">
		                <img src="images/mod4pic3.png" alt="" class="img-responsive center-block boderraduis">
		                <h3>Webmarketing</h3>
		                <p> 
		                    Saltatricum ne interpellata quidem cum choris totidemque remane remane magistris
		                </p>
		            </div>
		            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center">
		                <img src="images/mod4pic2.png" alt="" class="img-responsive center-block boderraduis">
		                <h3>Développement</h3>
		                <p> Alimentorum inopiam pellerentur ab urbe praecipites</p>
		            </div>
		             <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center">
		                <img src="images/mod4pic1.png" alt="" class="img-responsive center-block boderraduis">
		                <h3>Sous-traitance</h3>
		                <p>
		                    Dudum alimentorum inopiam pellerentur ab urbe praecipites, sectatoribus
		                </p>
		            </div>
		            <div class="col-lg-2 hidden-md col-sm-12 col-xs-12 "></div>
            	</div> -->
            </div>
    	</div>
    </div>
</section>

<section id="portfolio">
    <div class="container-fluid">
        <div class="row bgportfolio position4">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        		<?php if ($this->countModules('position-4')) : ?>
					<jdoc:include type="modules" name="portfolio" style="none" />
				<?php endif; ?>
        		<!-- <div class="row">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
		                <h3>Portfolio</h3>
		                <p>  ut cum peregrini ob formidatam haut ita dudum alimentorum inopiam pellerentur ab urbe praecipites, sectatoribus disciplinarum </p>
		                <p>liberalium inpendio paucis sine respiratione ulla extrusis, tenerentur minimarum adseclae veri.</p>
		                <div id="demo" class="jcImgScroll">
		                  <ul>
		                    <li>
		                        <a href="#" >
		                           <img src="images/portfolimg1.png" alt="" class="img-responsive">
		                        </a>
		                        <h5 class="text-left">Logo </h5>
		                        <p class="text-left">ILLUSION STUDIO</p>
		                    </li>
		                    <li>
		                        <a href="#" >
		                           <img src="images/portfolimg2.png" alt="" class="img-responsive">
		                        </a>
		                        <h5 class="text-left">Site web</h5>
		                        <p class="text-left"> CZYM JET</p>
		                    </li>
		                   
		                    <li>
		                        <a href="#" >
		                           <img src="images/portfolimg1.png" alt="" class="img-responsive">
		                        </a>
		                    </li>
		                    <li>
		                        <a href="#" >
		                           <img src="images/portfolimg3.png" alt="" class="img-responsive">
		                        </a>
		                        <h5 class="text-left">Logo </h5>
		                        <p class="text-left">SOYAL</p>
		                    </li>
		                    <li>
		                        <a href="#" >
		                           <img src="images/portfolimg4.png" alt="" class="img-responsive">
		                        </a>
		                        <h5 class="text-left">Site web </h5>
		                        <p class="text-left">RALENTLESS</p>
		                    </li>
		                  </ul>
		                </div>
		            </div>
        		</div> -->
        	</div>
        </div>
     </div>
</section> 

<section id="Blog">
    <div class="container-fluid">
        <div class="row bggray position5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php if ($this->countModules('position-5')) : ?>
					<jdoc:include type="modules" name="Blog" style="none" />
				<?php endif; ?>
               <!--  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <h3>BLOG</h3>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 center-block">
                            <img src="images/img_blog1.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">Alimentorum inopiam pellerentur formidatam haut</p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 center-block">
                            <img src="images/img_blog2.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">
                                formidatam haut ita dudum alimentorum inopiam pelleren inopiam pellerentur formidatam haut
                            </p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 center-block">
                            <img src="images/img_blog3.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">Alimentorum inopiam pellerentur formidatam haut </p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 center-block">
                            <img src="images/img_blog4.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">Alimentorum inopiam pellerentur formidatam haut</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
                </div>   -->  
                <!-- <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 deplacementblock5 center-block">
                            <img src="images/img_blog5.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">Alimentorum inopiam pellerentur formidatam haut</p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 deplacementblock6 center-block">
                            <img src="images/img_blog6.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">
                                 formidatam haut ita dudum alimentorum inopiam pelleren inopiam pellerentur formidatam haut
                            </p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-3 col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 deplacementblock7 center-block">
                            <img src="images/img_blog7.png" class="img-responsive" alt="">
                            <span class="styledate">14.05.15 </span>
                            <p class="styletext">
                                formidatam haut ita dudum alimentorum inopiam pelleren inopiam pellerentur formidatam haut
                             </p>
                        </div>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-5 col-xs-2"></div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-4"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="blogimg1 deplacementblock8 center-block">
                            <img src="images/img_blog8.jpg" class="img-responsive" alt="">
                            <span class="styledate"> 14.05.15 </span>
                            <p class="styletext" >Alimentorum inopiam pellerentur formidatam haut</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
                </div>  
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center marglink">
                        <a href="">VOIR PLUS</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid">
        <div class="row boulfooter position6">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php if ($this->countModules('position-6')) : ?>
					<jdoc:include type="modules" name="footer" style="none" />
				<?php endif; ?>
                <!-- <div class="row bgblack">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="row ">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4>SAAD</h4>
                                <p>Tempus, et tria milia saltatricum ne interpellata quidem cum choris  formidatam haut ita dudum alimentorum inopiam pellerentur ab urbe praecipites.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4>Rejoignez-nous</h4>
                                <ul class=" list-inline ">
                                    <li class="circle"><a href=""><i class="fa fa-facebook "></i></a></li>
                                    <li class="circle"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li class="circle"><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li class="circle"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4>Coordonnées</h4>
                                  <div class="adress"><i class="fa fa-map-marker"> </i> <span>Tempus, et tria milia saltatricum </span> <span class="adresspading">quidem cum choris.</span> </div>
                                <div class="tel"> <i class="fa fa-phone"></i> <span>Tél : (+216) 00 00 00</span> </div>
                                <div class="email"> <i class="fa fa-envelope-o"></i> <span>Email : info@saad.com.tn</span> </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div> -->
                <!-- <div class="row bgtransparanblack">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="row ">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <h5>© Copyright 2015</h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-1 xs-hidden"></div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                 <ul class="list-inline footernav  navbar-right">
                                    <li><a href="">A propos</a></li>
                                    <li><a href="">Activités</a></li>
                                    <li><a href="">Portfolio</a></li>
                                    <li><a href=""> Blog</a></li>
                                    <li><a href=""> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div> -->
            </div>
        </div>
     </div>    
</footer>

<footer>
</body> 
</html>