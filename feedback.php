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
  accent-color: green;
}
</style>
<h1>Feedback Form</h1>
<form method="post" action="thankyou.php">
Name: <input type="text" name="complete_name" /><br />
Email Address: <input type="email" name="email" /><br />
Type:
<select name="type">
<option value="feedback">Feedback</option>
<option value="inquiry">Inquiry</option>
<option value="other">Other</option>
</select>
<br />
Satisfaction Level: <input type="range" name="satisfaction_level" min="0" max="10" step="1" /><br />
Message <br>
<textarea name="message" style="width:100%;height:100px; margin-bottom:10px;"></textarea><br />
<button>Submit</button>
</form>
