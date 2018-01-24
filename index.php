<?php
//
// Simple language switch for spin.sidnlabs.nl
// Publish script will put this in place of public/index.html
//
if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
 $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
} else {
 $lang = "en";
}
switch ($lang){
    case "nl":
        header("Location: /nl");
        break;
    default:
        header("Location: /en");
        break;
}
exit();
?>

