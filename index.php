<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css"/>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/header.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/secondmenu.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/about.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/video.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/impact.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/whatsnew.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/footer.css" type="text/css"/>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>



<body>
<?php require 'header.php' ?>
<?php require 'secondmenu.php' ?>


<div class="vd">
  <?php require 'about.php' ?>
  <?php require 'video.php' ?>
</div>

<?php require 'impact.php' ?>
<?php require 'whatsnew.php' ?>
<?php require 'footer.php' ?>

</body>


</html>
