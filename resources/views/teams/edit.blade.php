@extends('layouts.dashboard.home')

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


                <form method="post" action="{{ route('team.update' ,$teams->id) }}"   enctype="multipart/form-data" >

                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $teams->id }}">
                    </div>
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="name"   value="{{ old('name', $teams->name) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Job</label>
                        <input type="text" name="job"   value="{{ old('job', $teams->job) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"   value="{{ old('email', $teams->email) }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"   value="{{ old('image', $teams->image) }}" class="form-control">
                        <img src="{{ asset('images/'.$teams->image) }}" style=" margin-top: 10px; width: 250px; height: 260px;" alt="">

                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description"   value="{{ old('description', $teams->description) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter"   value="{{ old('twitter', $teams->twitter) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook"   value="{{ old('facebook', $teams->facebook) }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Instagram</label>
                        <textarea name="instagram" class="form-control">{{ old('instagram', $teams->instagram) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <textarea name="linkedin" class="form-control">{{ old('linkedin', $teams->linkedin) }}</textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save Changes  </button>
                    </div>







                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->














@endsection
