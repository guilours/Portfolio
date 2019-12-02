<?php

include('templates/header.php');

include('templates/main1_intro.php');

include('templates/main2_about.php');

//Accès bdd selon version locale ou online
if($_SERVER['SERVER_NAME'] != 'localhost'){
	include('templates/main3_testimonials.php');
}
else {
	include('templates/main3_testimonials_offline.php');
}

include('templates/main4_gallery.php');

include('templates/main5_contact.php');

include('templates/footer.php');
?>
