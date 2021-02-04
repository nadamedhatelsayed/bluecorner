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
                           data-toggle="modal" href="#modaldemo8">Add Blog</a>
                        @include('blog.create')
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{--                        <table id="example1" class="table key-buttons text-md-nowrap">--}}
                        {{--                            <thead>--}}
                        {{--                            <tr>--}}
                        {{--                                <th class="border-bottom-0">#</th>--}}
                        {{--                                <th class="border-bottom-0">title</th>--}}
                        {{--                                 <th class="border-bottom-0">description</th>--}}
                        {{--                                <th class="border-bottom-0">body</th>--}}
                        {{--                                <th class="border-bottom-0">image</th>--}}
                        {{--                                <th class="border-bottom-0">options</th>--}}
                        {{--                            </tr>--}}
                        {{--                            </thead>--}}
                        {{--                            <tbody>--}}
                        {{--                            <?php $i = 0; ?>--}}
                        {{--                            @foreach ($blogs as  $blog)--}}
                        {{--                                <?php $i++; ?>--}}
                        {{--                                <tr>--}}
                        {{--                                    <td>{{ $i }}</td>--}}
                        {{--                                    <td>{{ $blog->title }}</td>--}}
                        {{--                                    <td>{{ $blog->description }}</td>--}}
                        {{--                                    <td>{{ $blog->body }}</td>--}}
                        {{--                                    <td>--}}
                        {{--                                        <img src="{{asset('images/'.$blog->image)}}"--}}
                        {{--                                             style="margin-top: 10px; width: 150px; height: 100px; border-radius: 2px " alt="">--}}
                        {{--                                    </td>--}}
                        {{--                                    <td>--}}
                        {{--                                        <div class="btn-group mt-5" role="group" aria-label="Basic example"  >--}}
                        {{--                                             <a class="btn btn-outline-success btn-sm" href="blogs/edit/{{$blog->id}}">Edit</a>--}}

                        {{--                                            <button  class="btn btn-outline-danger btn-sm ml-1" data-toggle="modal" data-target="#deleted{{$blog->id}}">Delate</button>--}}
                        {{--                                        </div>--}}
                        {{--                                    </td>--}}
                        {{--                                </tr>--}}
                        {{--                                 @include('blog.deleted')--}}
                        {{--                            @endforeach--}}
                        {{--                            </tbody>--}}
                        {{--                        </table>--}}
                        @foreach ($blogs as  $blog)
                            <table id="example1" class="table key-buttons text-md-nowrap"
                                   style="background-color: #fafcff">
                                <tr>
                                    <th class="border-bottom-0">title</th>
                                    <td>{{ $blog->title }}</td>

                                </tr>

                                <tr>
                                    <th class="border-bottom-0">description</th>

                                    <td>{{ $blog->description }}
                                    </td>

                                </tr>
                                <tr>
                                    <th class="border-bottom-0">body</th>

                                    <td>{{ $blog->body }}
                                    </td>

                                </tr>

                                <tr>
                                    <th class="border-bottom-0">image</th>
                                    <td>
                                        <img
                                            src="{{asset('images/'.$blog->image)}}"
                                            style="margin-top: 10px; width: 150px; height: 80px; border-radius: 2px "
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-bottom-0">options</th>
                                    <td>

                                        <div class="btn-group mt-5" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-success btn-sm" href="blogs/edit/{{$blog->id}}">Edit</a>

                                            <button class="btn btn-outline-danger btn-sm ml-1" data-toggle="modal"
                                                    data-target="#deleted{{$blog->id}}">Delate
                                            </button>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            @include('blog.deleted')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
