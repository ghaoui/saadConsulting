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
//$doc->addScript('templates/' . $this->template . '/js/jquery-2.1.3.min.js');
$doc->addScript('templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript('templates/' . $this->template . '/js/ui.js');
$doc->addScript('templates/' . $this->template . '/js/jQuery-jcImgScroll.js');
$doc->addScript('templates/' . $this->template . '/js/main.js');
$doc->addScript('templates/' . $this->template . '/js/template.js');
// $doc->addScript('templates/' . $this->template . '/js/script.js');




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
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/template.css">
	

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
    <jdoc:include type="head" />
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
        <div class="row  menu">
            <div class="col-lg-2 col-md-1 col-sm-1 xs-hidden"></div>
            <?php if ($this->countModules('menu')) : ?>
            <div class="col-lg-2  col-md-2 col-sm-3 col-xs-12 navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
               <a href="#" class="navbar-brand"><?php echo $logo;?></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 xs-hidden"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 collapse navbar-collapse" id="navbar-collapse">
                <jdoc:include type="modules" name="menu" style="none" />
            </div>
             <?php endif; ?>
            <div class="col-lg-1 col-md-1 col-sm-1 xs-hidden"></div>
        </div>
    </div>
</section>
<section id="carousel ">
    <div class="container-fluid">
        <div class="row carousel ">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        		<?php if ($this->countModules('carousel')) : ?>
					<jdoc:include type="modules" name="carousel" style="none" />
				<?php endif; ?>
        	</div>
        </div>
    </div>
</section> 
<section id="presentation">
    <div class="container-fluid">
        <div class="row presentation ">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
	        	<?php if ($this->countModules('presentation')) : ?>
					<jdoc:include type="modules" name="presentation" style="none" />
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="sectionwork">
    <div class="container-fluid">
    	<div class="row  sectionwork">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php if ($this->countModules('sectionwork')) : ?>
					<jdoc:include type="modules" name="sectionwork" style="none" />
				<?php endif; ?>
            </div>
    	</div>
    </div>
</section>
<section id="portfolio">
    <div class="container-fluid">
        <div class="row  portfolio">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        		<?php if ($this->countModules('portfolio')) : ?>
					<jdoc:include type="modules" name="portfolio" style="none" />
				<?php endif; ?>
        	</div>
        </div>
     </div>
</section> 
<section id="Blog">
    <div class="container-fluid">
        <div class="row bggray Blog">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php if ($this->countModules('Blog')) : ?>
					<jdoc:include type="modules" name="Blog" style="none" />
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container-fluid">
        <div class="row  footer">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php if ($this->countModules('footer')) : ?>
					<jdoc:include type="modules" name="footer" style="none" />
				<?php endif; ?>
            </div>
        </div>
     </div>    
</footer>
</body> 
</html>
