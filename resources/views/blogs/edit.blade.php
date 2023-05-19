@extends('layouts.app')
@push('style')
	@vite('resources/css/add_blog.css');
@endpush
@section('content')

<div class="container add-blog">
	<div class="row pb-4">
        <h1 class="text-center">Edit blog</h1>
	</div>
    <form enctype="multipart/form-data" action="{{ route('blogs.editBlog', ['id' => $blog->id]) }}" method="POST">
        @csrf
        <div class="row flex-row mb-3">
            <div class="col-2">
                <label class="form-label fs-5 text-warning" for="blog-title">Title</label>
            </div>
            <div>
                <input type="text" id="blog-title" placeholder="Ex: title..." name="title" class="form-control p-1 col-10" value="{{$blog->title}}">
            </div>
        </div>
        <div class="row flex-row mb-3">
            <div class="col-2">
                <label class="form-label fs-5 text-warning" for="blog-image">Image</label>
            </div>
            <div>
                <input type="file" id="blog-image" name="image" class="form-control p-1 col-10">
                <img src="{{ asset($blog->image) }}" alt="">
            </div>
        </div>
        <div class="row flex-row mb-3">
            <div class="">
                <label for="blog-content" class="form-label fs-5 text-warning">Content</label>
            </div>
            <div>
                <textarea name="content" id="blog-content" cols="30" rows="10">{{$blog->content}}</textarea>
            </div>
        </div>
        <div class="row text-center">
            <div>
                <button type="submit" class="btn btn-warning" name="submit-btn">Edit</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
    ClassicEditor
    .create( document.querySelector( '#blog-content' ) )
    .catch( error => {
        console.error( error );
    } );
</script>

@endsection