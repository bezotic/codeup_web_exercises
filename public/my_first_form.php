<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First Form</title>
</head>
<body>
	<header>
		SUUUUUUP
	</header>
<main>
	<section form method="POST" action="My-First-Form.php">
		<p>
			<label for="username">username</label>
			<input id="username" name="username" type="text"
			placeholder="Enter username">
		</p>
		
		<p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password"
        placeholder="enter password">
	    </p>
	    <p>
	        <button type="submit">login</button>
	    </p>
	</form>



















</main>
</body>
</html>
