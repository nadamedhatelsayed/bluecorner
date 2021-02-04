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
    <div class="tile-title-w-btn">
        <p><a class="btn btn-outline-primary icon-btn" href="team/create"><i class="fa fa-plus"></i>Add Employee </a>
        </p>
    </div>
    <div class="row">

        @foreach($teams as $team)
            <div class="card" style="width: 300px; margin-left: 10px">
                <div class="card-header">
                    <div>
                        <h4 class="float-left">{{$team->name}}</h4>
                        <div class="float-right"  >
                            <a  style="font-size: 20px" class="fa fa-edit text-primary  "  href="team/edit/{{$team->id}}"></a>

                            <a  style="font-size: 20px" class="fa fa-trash text-danger  " data-toggle="modal"
                                    data-target="#deleted{{$team->id}}">
                            </a>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-img justify-content-center">
                    <img src="{{ asset('images/'.$team->image) }}" class="img-fluid rounded" alt=" "
                         style="width:100%; height:300px">
                    <div class="social">
                    </div>
                </div>
                <div class="card-body">

                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="card-title">{{$team->job}}</td>
                        </tr>
                        <tr>
                            <td class="card-title">{{$team->email}}</td>
                            <td class="card-title">{{$team->twitter}}</td>
                            <td class="card-title">{{$team->facebook}}</td>
                            <td class="card-title">{{$team->instagram}}</td>
                            <td class="card-title">{{$team->linkedin}}</td>
                        </tr>


                        </tbody>
                    </table>


                </div>
            </div>
            @include('teams.delete')
        @endforeach


        {{--                      @foreach($teams as $team)--}}
        {{--                        <div class="col-md-4">--}}
        {{--                            <div class="tile">--}}
        {{--                                <h3 class="tile-title">{{$team->name}}</h3>--}}
        {{--                                <div class="tile-body"  >--}}
        {{--                                    <div class="float-left col-md-4">--}}

        {{--                                        <div>{{$team->job}}</div>--}}
        {{--                                        <div>{{$team->email}}</div>--}}
        {{--                                        <div>{{$team->twitter}}</div>--}}
        {{--                                        <div>{{$team->facebook}}</div>--}}
        {{--                                        <div>{{$team->instagram}}</div>--}}
        {{--                                        <div>{{$team->linkedin}}</div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="float-right col-md-4">--}}
        {{--                                        <img class="rounded-circle" src="{{ asset('images/'.$team->image) }}"--}}
        {{--                                             style=" margin-top: 10px; width: 100px; height: 120px; " alt="">--}}
        {{--                                    </div>--}}
        {{--                                    <div class="clearfix"></div>--}}

        {{--                                </div>--}}

        {{--                                    <div class="btn-group  " role="group" aria-label="Basic example"   >--}}
        {{--                                        <a class="btn btn-outline-success btn-sm" href="team/edit/{{$team->id}}">Edit</a>--}}
        {{--                                        <button  class="btn btn-outline-danger btn-sm ml-1" data-toggle="modal" data-target="#deleted{{$team->id}}">deleted</button>--}}
        {{--                                    </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                          @include('teams.delete')--}}
        {{--                    @endforeach--}}
    </div>
@endsection
