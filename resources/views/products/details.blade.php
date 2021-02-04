@extends('layouts.dashboard.home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <h3> Product Details</h3>
                <div class="row">
                    <div class=" col-md-6" style="overflow: hidden;">
                        <img src="{{ asset('images/'.$products->image) }}" style="height: 320px; width:400px; "
                             class="rounded">
                    </div>
                    <div class="float-right col-md-6">
                        <ul class="  list-group-flush">
                            <li class="list-group-item"><i class="fa fa-diamond" aria-hidden="true"></i>
                                {{ $products->title }}</li>
                            <li class="list-group-item"><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                {{ $products->price }}</li>
                            <li class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i>
                                {{ $products->description }}</li>

                            <li class="list-group-item"><i class="fa fa-bars" aria-hidden="true"></i>
                                {{   $products->category->title }}</li>

                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
