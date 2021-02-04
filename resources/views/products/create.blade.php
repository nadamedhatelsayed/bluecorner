@extends('layouts.dashboard.home')
@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class=" row tile " >
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" value="" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" value="" name="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" value="" id="name" name="description">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Image</label>
                        <input type="file" class="form-control" value="" name="image">

                    </div>

                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category</label>
                    <select name="cat_id" id="cat_id" class="form-control" required>
                        <option value="" selected disabled> -- select category  --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <a href="/products">
                        <button type="button" class="btn btn-secondary">Go Back</button>
                        </a>
                    </div>
                </form>
            </div>

</div>
@endsection
