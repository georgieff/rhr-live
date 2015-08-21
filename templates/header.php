<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/build/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/build/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/build/css/style.min.css">
  <title>Residence House Ruse</title>
</head>
<body id="mod">
  <div class="TopNavigation">
    <div class="container">

      <nav>
        <a href="index.php" <?php if ($page == 'home'): ?>class="selected"<?php endif; ?> >Main</a>
        <a href="about.php" <?php if ($page == 'about'): ?>class="selected"<?php endif; ?> >About us</a>
        <a href="rooms.php" <?php if ($page == 'rooms'): ?>class="selected"<?php endif; ?> >Rooms</a>
        <a href="#" <?php if ($page == 'news'): ?>class="selected"<?php endif; ?> >Latest News</a>
        <a href="#" <?php if ($page == 'contacts'): ?>class="selected"<?php endif; ?> >Contacts</a>
      </nav>

      <div class="Social">
        <a href="#" class="fa fa-facebook fb"></a>
        <a href="#" class="fa fa-google-plus gp"></a>
      </div>

    </div>
  </div>
