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


                <form method="POST" action="{{ route('team.store') }}"   enctype="multipart/form-data" >

                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"   value=" " class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"   value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"   value="" class="form-control">
{{--                        <img src="{{ asset('images/'.$aboutus->image) }}" style=" margin-top: 10px; width: 255px; height: 378px;" alt="">--}}

                    </div>
                    <div class="form-group">
                        <label>Job</label>
                        <input type="text" name="job"   value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description"   value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter"   value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook"   value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <input type="text" name="linkedin"   value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram"   value="" class="form-control">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Add  </button>
                    </div>







                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->














@endsection
