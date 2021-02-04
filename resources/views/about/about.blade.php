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
    <div class="row"  >


        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                           data-toggle="modal" href="#modaldemo8">Add</a>
                        @include('about.create')
                    </div>

                </div>
                <div class="card-body"  >
                    <div class="table-responsive" >
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            @foreach($aboutus as $about)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" >
                                        <i class="fa fa-phone"></i>
                                        Phone:{{ $about->phone }} </li>

                                    <li class="list-group-item"><i class="fa fa-address-book"></i>
                                        Address : {{ $about->address }}</li>
                                    <li class="list-group-item"><i class="fa fa-address-book"></i>
                                        Email : {{ $about->email }}</li>


                                </ul>
                                <div class=" last-sec">
                                    <div class="row row-cols-1 row-cols-md-2 g-4">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <i class="fa fa-bullseye"></i>
                                                        Mission </h5>
                                                    <p class="card-text"> {{ $about->mission }} </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">

                                                <div class="card-body">
                                                    <h5 class="card-title"><i class="fa fa-low-vision"></i>Vision</h5>
                                                    <p class="card-text"> {{ $about->vision }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"><i class="fa fa-list-ol"></i> Description </h5>
                                                    <p class="card-text"> {{ $about->description }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <a href="about/edit/{{$about->id}}">
                                        <button type="button" class="btn btn-outline-success btns m-3"> Edit</button>
                                    </a>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
