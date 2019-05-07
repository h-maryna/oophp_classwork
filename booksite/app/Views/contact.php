<?php

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title></title>
</head>
<body>

<h1><?=$title?></h1>

<form action='\contact' method='post'>
   <input type="email" name="email" placeholder="Please type your email" /><br />
   <textarea name="message" placeholder="Enter your message"></textarea><br />
   <button>Send</button>
   </form>



</body>
</html>