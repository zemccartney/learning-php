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

<?php #echo strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'); ?>

<?php
// V2 OF USERAGENT FUNCTION ABOVE

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    // get position of string
    $position = strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome');
    // use position to pull out that word from word count associative array
    echo strtoupper(str_word_count($_SERVER['HTTP_USER_AGENT'], 2)[$position]) . '<br />';
    echo 'You are using Google Chrome.<br />';
  } else {
    echo 'GET postconed';
  }
?>
