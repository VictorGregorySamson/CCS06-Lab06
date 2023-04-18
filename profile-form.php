<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>
<style>
form {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  max-width: 500px;
  margin: 0 auto;
  font-family: Arial, Helvetica, sans-serif;
}

input[type="text"], input[type="date"], input[type="email"], select, input[type="color"], input[type="range"] {
  padding: 10px;
  width: 100%;
  border-radius: 3px;
  border: none;
  margin-bottom: 10px;
}

button {
  background-color: darkblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #45a049;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

input[type="color"] {
  height: 40px;
  margin-bottom: 20px;
}

input[type="range"] {
  width: 80%;
  margin-bottom: 20px;
  accent-color: #F55050;
}
</style>
<h1>Enter Data</h1>
<form method="POST" action="profile-form.php">
Name: <input type="text" name="complete_name" /><br />
Birthdate: <input type="date" name="birthdate" /><br />
Email Address: <input type="email" name="email" /><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" /><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
<button>Submit</button>
</form>

<?php
endif;
?>