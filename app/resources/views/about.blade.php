<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | Your First Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="container mt-5">
		<h1 class="text-center text-primary text-3xl font-bold underline">About Laravel Blog</h1>
		<p class="text-warning text-center">Styled with Bootstrap 5 and Tailwind 🎨</p>
	</div>
	<div class="container m5-5 messages">
		@if (session('success'))
			<div class="alert alert-success mt-4">
				{{ session('success') }}
			</div>
		@endif
		
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
</body>
</html>
