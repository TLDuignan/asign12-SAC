<?php
  if(!isset($page_title)) { $page_title = 'Bird Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SAB Birds - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" /> -->
  </head>

  <body>
    <header>
      <h1>SAB Birds Member Area</h1>
      <ul>
        <?php if($session->is_logged_in()) { ?>
        <li>Member: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/users/index.php'); ?>">Users</a></li>
        <li><a href="<?php echo url_for('/birds/index.php'); ?>">Birds</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>

    </header>



    <?php echo display_session_message(); ?>
