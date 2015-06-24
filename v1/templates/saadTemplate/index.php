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



</body> 
</html>