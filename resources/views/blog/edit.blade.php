@extends('home')

@section('content')
    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="tile shadow mb-4">


                <form method="POST" action="{{route('blogs.update',$blogs->id)}}"   enctype="multipart/form-data" >

                    @csrf
                   {{method_field('PATCH')}}

                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $blogs->id }}">
                    </div>
                    <div class="form-group">
                        <label>title </label>
                            <input type="text" name="title"   value="{{ old('title', $blogs->title) }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description"   value="{{ old('description', $blogs->description) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>body</label>
                        <input type="text" name="body"   value="{{ old('body', $blogs->body) }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"   value="{{ old('image', $blogs->image) }}" class="form-control">
                        <img src="{{ asset('images/'.$blogs->image) }}" style=" margin-top: 10px; width: 255px; height: 300px;" alt="">

                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save Changes  </button>
                    </div>







                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->














@endsection
