<?php
require_once 'models/MenuItem.php';
require_once 'models/Menu.php';

$menu = new Menu();
$menu->AddMenuItem("Home", "#home");
$menu->AddMenuItem("About", "#about");
$menu->AddMenuItem("Photo", "#photo");
$menu->AddMenuItem("Contact Us", "#contact");
$menu->AddMenuItem("Login", "#login");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
<?php
$menu->PrintMenu(200, 70, "#33ACFF", "white");
?>
</body>
</html>
