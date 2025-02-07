<!DOCTYPE html>
<?php
	require_once "../common.php";
	require_staff();
?>
<html lang="en">
<head>
    <title>Staff - CourseCorrect</title>
    <meta charset="utf-8">
	<link rel="icon" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../libs/bootstrap.min.css">
	<script src="../libs/jquery.slim.min.js"></script>
	<script src="../libs/popper.min.js"></script>
	<script src="../libs/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../libs/fontawesome.min.css">
</head>
<body>
	<?php display_navbar(); ?>
    <div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1>
					Search Results - "EECS 101"
				</h1>
				<h2>2900000 - Drake Prebyl</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th><th>Major</th><th>Created</th><th>Modified</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>EECS 101 plan</td><td>Computer Science 2018</td><td>Oct 28<sup>th</sup>, 2018</td><td>Oct 31<sup>st</sup>, 2018</td></tr>
						</tr>
					</tbody>
				</table>
				<h2>2911111 - Rafael Alaras</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th><th>Major</th><th>Created</th><th>Modified</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>EECS 101 plan <span class="badge badge-danger">Incomplete</span></td><td>Computer Science 2018</td><td>Oct 28<sup>th</sup>, 2018</td><td>Oct 31<sup>st</sup>, 2018</td></tr>
						</tr>
					</tbody>
				</table>
				<h2>2911111 - James Krajicek</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th><th>Major</th><th>Created</th><th>Modified</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>EECS 101 plan <span class="badge badge-warning">Warning</span></td><td>Computer Science 2018</td><td>Oct 28<sup>th</sup>, 2018</td><td>Oct 31<sup>st</sup>, 2018</td></tr>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-4">
				<p>
					This is a place that some help text could be included about how to use this page.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultrices lorem mi, vel dapibus diam posuere eu. Aliquam facilisis iaculis ipsum venenatis venenatis. Phasellus vulputate, ipsum quis mattis viverra, lectus dui sodales libero, id consequat massa justo ut magna. Donec sed ullamcorper metus. Donec lorem mauris, gravida eu pharetra nec, rutrum a arcu. Cras cursus eget nisl id luctus. Pellentesque sit amet sagittis felis.
				</p>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="create-plan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create new plan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="create.php">
						<div class="form-group">
							<label for="name">Enter plan name:</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="My awesome graduation plan">
						</div>
						<div class="form-group">
							<label for="year">Select handbook year:</label>
							<select id="year" name="year" class="form-control" required>
								<option>2018</option>
							</select>
						</div>
						<div class="form-group">
							<label for="major">Select major:</label>
							<select id="major" name="major" class="form-control" required>
								<option>Computer Science</option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Create</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>