<?php include_once("inc/configcheck.php"); ?>
<?php include_once("inc/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title.' v'.$version ?> by djphil (CC-BY-NC-SA 4.0)</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="author" href="inc/humans.txt" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php if ($useTheme === TRUE): ?>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <?php endif ?>
    <?php if ($useRibbon === TRUE): ?>
    <link href="css/gh-fork-ribbon.min.css" rel="stylesheet" />
    <?php endif ?>
    <link rel="stylesheet" href="css/osworldmap.css" />   
    <script src="http://maps.google.com/maps/api/js?v=3&key=<?php echo $apykey; ?>"></script>
    <script src="js/maps.js"></script>
    <script src="js/copyright.js"></script>
</head>
<body onload="load()" onunload="GUnload()">
<?php if ($useRibbon === TRUE): ?>
<div class="github-fork-ribbon-wrapper left">
    <div class="github-fork-ribbon">
        <a href="<?php echo $urlRibbon; ?>" target="_blank"><?php echo $txtRibbon; ?></a>
    </div>
</div>
<?php endif ?>
<div id="content">
    <div id="map-canvas"></div>
</div>
</body>
</html>
