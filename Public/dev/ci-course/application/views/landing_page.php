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
	<h1>Welcome to Course</h1>
	<h2>Add New Course</h2>
	<div id="body">
		<form action="/courses/addCourse" method="POST">
			<label>Title</label>
			<input type="text" name="title">
			<label>Description</label>
			<textarea name="description"></textarea>
			<input type="submit" value="Add">
		</form>
	</div>

	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

<!--START LOOP-->
<?php
// var_dump($courses);
foreach ($courses as $course) {
	// var_dump($course);
?>
			<tr>
				<td><?= $course['title'] ?></td>
				<td><?= $course['description'] ?></td>
				<td><?= $course['created_at'] ?></td>
				<td>
					<form method="post" action="/courses/getOneCourse">
						<input type="hidden" name="id" value="<?= $course['id']; ?>">
						<input type="submit" value="remove">
					</form>
				</td>
			</tr>
<?php
}
?>
<!-- 			<tr>
				<td>course101</td>
				<td>desc</td>
				<td>01/01/2015</td>
				<td><a href="#">remove</a></td>
			</tr> -->

<!--END LOOP-->
		</tbody>
	</table>	
</div>

</body>
</html>