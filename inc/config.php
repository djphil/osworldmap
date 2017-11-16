<?php
$osworldmap = "OpenSim World Map";
$version = "0.1";

$apykey = "<GGOGLE MAP API KEY V3>";
$apyversion = 3;

$debug = FALSE;
$useTheme = TRUE;

$useRibbon = TRUE;
$urlRibbon = "https://github.com/djphil/osworldmap";

// OpenSim Database
$dbtype = "mysql";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "<DB PASS>";
$dbname = "<DB NAME>";
$tbname = "regions";

// Database (old), todo ...
define("C_DB_TYPE", $dbtype);
define("C_DB_HOST", $dbhost);
define("C_DB_USER", $dbuser);
define("C_DB_PASS", $dbpass);
define("C_DB_NAME", $dbname);
define("C_TB_REGIONS", $tbname);

// Settings, todo ...
// $allow_zoom = TRUE;
// $mapstartX = 5000;
// $mapstartY = 5000;
// Direction where Info Image has to stay 
// ex.: dr = down right ; dl =down left ; tr = top right ; tl = top left ; c = center 
// $display_marker = "dr";
// Others todo's
// infobulles settings
// images cache
?>
