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
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-8 mb-4">
            <a href="{{route('products.create')}}" class="btn btn-primary btn-lg btn-block">Add product</a>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-4 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">{{$product->title}}</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-text">{{$product->price}}</h5>
                        <h5 class="card-text">{{$product->description}}</h5>
                        <a href="products/edit/{{$product->id}}"  class="btn btn-outline-success  ">Edit</a>
                        {{--                        <a href="#" class="btn btn-danger">Deleted</a>--}}
                        <a  class="btn btn-outline-danger " style="color: red" data-toggle="modal"
                           data-target="#deleted{{$product->id}}">Delete</a>

                        <a href="products/details/{{$product->id}}"  class="btn btn-outline-info  ">Details</a>

                    </div>
                    @include('products.deleted')
                </div>
            </div>
        @endforeach

    </div>

@endsection
