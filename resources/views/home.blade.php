@extends('layouts.app')
@section('content')

<section class="container">
	<div class="content">
		<h1>Live a balanced life</h1><br />
	
		<hr>
		<h2>List blogs</h2>
	
		<div class="row">
			<div class="col-9">
				@if (count($blogsData))
					@foreach ($blogsData as $blog)
						<a class="text-decoration-none" href="{{ route('blogs.viewBlog', ['id' => $blog->id]) }}">
							<div class="blog-card">
								<h2>{{ $blog->title }}</h2>
								<h5>{{$blog->created_at}}</h5>
								<div class="fakeimg"><img src="{{ asset($blog->image) }}" alt="{{ $blog->id }}" class="img-thumbnail"></div>
							</div>
						</a>
					@endforeach
				@endif
			</div>
			<div class="col-3">
				<div class="blog-card">
					<h2>About Me</h2>
					<div class="fakeimg">
						Image
					</div>
					<p>Some text about me in culpa qui officia deserunt mollit anim..</p>
				</div>
				<div class="blog-card">
					<h3>Popular Post</h3>
					<div class="fakeimg">Image</div><br>
					<div class="fakeimg">Image</div><br>
					<div class="fakeimg">Image</div>
				</div>
				<div class="blog-card">
					<h3>Follow Me</h3>
					<p>Some text..</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection