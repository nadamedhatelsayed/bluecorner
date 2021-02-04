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
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                           data-toggle="modal" href="#modaldemo8">Add Slider</a>
                        @include('slider.create')
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        @foreach ($sliders as  $slider)
                            <table id="example1" class="table key-buttons text-md-nowrap"
                                   style="background-color: #eff1f1">
                                <tr>
                                    <th class="border-bottom-0">title</th>
                                    <td>{{ $slider->title }}</td>

                                </tr>

                                <tr>
                                    <th class="border-bottom-0">description</th>

                                    <td>{{ $slider->description }}
                                    </td>

                                </tr>

                                <tr>
                                    <th class="border-bottom-0">image</th>
                                    <td>
                                        <img
                                            src="{{asset('images/'.$slider->image)}}"
                                            style="margin-top: 10px; width: 150px; height: 80px; border-radius: 2px "
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-bottom-0">options</th>
                                    <td>

                                        <button class="btn btn-outline-success btn-sm "
                                                data-toggle="modal"
                                                data-target="#edit{{$slider->id}}"
                                        >Edit
                                        </button>

                                        <button class="btn btn-outline-danger btn-sm" data-pro_id="{{ $slider->id }}"
                                                data-toggle="modal"
                                                data-target="#deleted{{$slider->id}}">Delete
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            @include('slider.edit')
                            @include('slider.deleted')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
