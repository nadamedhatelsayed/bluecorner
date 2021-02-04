@extends('layouts.dashboard.home')
@section('content')
    <div class="">
        <div class="card col-md-8">
            <div class="card-header mt-2">
                <h3 class="card-title">Images</h3>
            </div>
            <div class="card-body p-0 mt-2" style="overflow: hidden">

                @foreach($images as $image)
                    <img src="{{asset('images/'.$image->image )}}" alt="image" style="width: 300px; height: 250px"  >
                    <div class="card-body">

                        <button class="btn btn-outline-success " data-toggle="modal"
                                data-target="#edit{{$image->id}}"
                                style="margin-right:5px">edit
                        </button>
                        <button class="btn btn-outline-danger " data-toggle="modal"
                                data-target="#deleted{{$image->id}}">
                            delete
                        </button>
                    </div>
                    @include('images.edit')
                    @include('images.deleted')
                @endforeach

            </div>
        </div>
    </div>
    </div>
@endsection
