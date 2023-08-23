<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<h1 class="mt-5">Blog Posts</h1>
		@foreach($posts as $post)
		<div class="card my-3">
			@if($post->image)
			<img style="width:400px" src="uploads/{{ $post->image }}" class="card-img-top" alt="Post Image">
			@endif
			<div class="card-body">
				<h2 class="card-title">{{ $post->title }}</h2>
				<p class="card-text">{{ $post->content }}</p>
				<p class="card-text"><strong>Author:</strong> {{ $post->author_name }}</p>
			</div>
		</div>
		@endforeach
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
