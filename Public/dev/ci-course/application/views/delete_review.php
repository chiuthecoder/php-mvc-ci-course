<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Course</title>
	<link rel="stylesheet" href="/asset/css/style.css">
</head>
<body>

<div id="container">
<h2>Delete course</h2>
<p>Are you sure? You want to delet course #<?= $course['id'] ?></p>

<p>course title: <?=  $course['title'] ?></p>
<p>course description: <?= $course['description'] ?></p>

<a href="/">No</a>
<form method="post" action="/courses/destroyCourse">
	<input type="hidden" name="id" value="<?= $course['id'] ?>">
	<input type="submit" value="Yes">
</form>

</body>
</html>