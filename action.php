<html>
  <head></head>
  <body>
    <!-- Converts special characters into HTML entities
      Prevents addition of HTML tags on page
    -->
    
    Hi <?php echo htmlspecialchars($_POST['name']); ?>.
    <!-- (int) strips stray characters at the END of the string
      http://php.net/manual/en/language.types.string.php#language.types.string.conversion

      But what about at the beginning?
    -->
    You are <?php echo (int)$_POST['age']; ?> years old.
  </body>
</html>
