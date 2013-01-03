<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">


    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>


<body>

<div id="art-main">
    <header class="art-header clearfix"><?php echo $view->position('position-30', 'art-nostyle'); ?>


    <div class="art-shapes">
<h1 class="art-headline" data-left="20.28%">
    <a href="<?php /*echo $document->baseurl; */?>/"><?php /*echo $this->params->get('siteTitle'); */?></a>
</h1>
<h2 class="art-slogan" data-left="18.38%"><?php /*echo $this->params->get('siteSlogan'); */?></h2>

<div class="art-logo" data-left="0%"></div>

            </div>


                    
    </header>




<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
    <nav class="art-nav clearfix">
    
        <?php if ($view->containsModules('position-28')) : ?>
        <div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
        <?php endif; ?>
        <?php if ($view->containsModules('position-29')) : ?>
        <div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
        <?php endif; ?>
        <?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>

<div class="art-sheet clearfix">
            <?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>

    <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');*/
  echo $view->position('position-12', 'art-nostyle');*/
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="art-layout-cell art-sidebar1 clearfix">
<?php echo $view->position('position-7', 'art-block'); ?>
<?php echo $view->position('position-4', 'art-block'); ?>
<?php echo $view->position('position-5', 'art-block'); ?>



                        </div>
<?php endif; ?>

                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>


    </div>






    <footer class="art-footer clearfix"><?php echo $view->position('position-27', 'art-nostyle'); ?></footer>

</div>



<?php echo $view->position('debug'); ?>
</body>
</html>