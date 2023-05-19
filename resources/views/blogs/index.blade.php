@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row ">
		<div class="d-flex justify-content-end flex-column">
			<div>
				<div class="row row-offcanvas row-offcanvas-right">
					<div class="col-xs-12 col-sm-9">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="5%">Id</th>
										<th width="20%">Title</th>
										<th width="10%">Category</th>
										<th width="30%">Image</th>
										<th width="15%">Actions</th>
									</tr>
								</thead>
								<tbody>
									@if ($blogsData)  
										@foreach ($blogsData as $blog)
											<tr>
												<td width="5%">{{$blog->id}}</td>
												<td width="20%">{{$blog->title}}</td>
												<td width="10%">{{$blog->category}}</td>
												<td width="30%"><img src="{{ asset($blog->image) }}" alt="{{ $blog->id }}" class="img-thumbnail"></td>
												<td width="15%">
													<a class="btn btn-outline-info table-link" role="button" href="{{ route('blogs.viewBlog', ['id' => $blog->id]) }}">
														<i class="fa-solid fa-eye" aria-hidden="true"></i>
													</a>
													<a class="btn btn-outline-warning" role="button" href="{{ route('blogs.editBlogForm', ['id' => $blog->id]) }}">
														<i class="fas fa-edit"></i>
													</a>
													<a class="btn btn-outline-danger table-link danger delete" role="button" href="{{ route('blogs.deleteBlog', ['id' => $blog->id]) }}">
														<i class="fas fa-trash"></i>
													</a>
												</td>
											</tr>
										@endforeach
									@else 
										<tr>
											<td colspan="7" scope="row">There are no blog!</td>
										</tr>
									@endif
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
						@include('blogs.management')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection