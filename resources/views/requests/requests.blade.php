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
                           data-toggle="modal" href="#modaldemo8">Add Request</a>
                        @include('requests.create')
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">name</th>
                                <th class="border-bottom-0">email</th>
                                <th class="border-bottom-0">subject</th>
                                <th class="border-bottom-0">message</th>
                                <th class="border-bottom-0">options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($requests as  $request)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->email }}</td>
                                    <td>{{ $request->subject }}</td>
                                    <td>{{ $request->message }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example" >
                                            <button  class="btn btn-outline-primary" data-toggle="modal" data-target="#edit{{$request->id}}" style="margin-right:5px">edit</button>
                                            <button  class="btn btn-outline-danger" data-toggle="modal" data-target="#deleted{{$request->id}}">delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @include('requests.edit')
                                @include('requests.deleted')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div></div>

@endsection
