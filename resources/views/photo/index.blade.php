<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2>Show Photo In Database</h2>
		<table class="table">
			<tr>
				<td>Id</td>
				<td>Name Photo</td>
				<td>Image</td>
			</tr>
			@foreach ($photos as $infomation)
			<tr class="table-light">
				<td>{{$infomation->id}}</td>
				<td>{{$infomation->name}}</td>
				<td>
					<img src="/storage/{{$infomation->image}}" alt="" height="100px" width="100px">
				</td>
			</tr>
			@endforeach
		</table>
	</div>

	<a href="/photos/create"><button>Add Photo</button></a>

</body>
</html>
