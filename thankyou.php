
<style>

form {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  max-width: 500px;
  margin: 0 auto;
  font-family: Arial, Helvetica, sans-serif;
}



</style>
<form>
<h1>Thank You!</h1>    


<?php

$complete_name = $_POST['complete_name'];
$email = $_POST['email'];
$type = $_POST['type'];
$satisfaction_level = $_POST['satisfaction_level'];
$message = $_POST['message'];

echo '<p>Received ' . $type . ' message from ' . $complete_name . ' (' . $email . ')</p>';
echo "<p>Message: " . $message . "</p>";
echo "<p>Satisfaction Level: " . $satisfaction_level . "</p>";
?>
</form>

