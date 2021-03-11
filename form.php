<?php
if($_POST["Message"]) {
mail("mselbekk11@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: mselbekk11@gmail.com");
}
?>