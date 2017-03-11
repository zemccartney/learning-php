<?php
  echo $_SERVER['HTTP_USER_AGENT'] . '<br />';

?>

<?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    $position = strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome');
    echo strtoupper(substr($_SERVER['HTTP_USER_AGENT'], $position, (strlen('Chrome')))) . '<br />';
    echo 'You are using Internet Explorer.<br />';
  } else {
    echo 'GET postconed';
  }
?>

<?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'); ?>
