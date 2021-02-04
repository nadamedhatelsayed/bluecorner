<!-- Modal -->
<div class="modal fade" id="edit{{$request->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('requests.update',$request->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" value="{{$request->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="text" class="form-control" value="{{$request->email}}" id="name" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">subject</label>
                        <input type="text" class="form-control" value="{{$request->subject}}" name="subject">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">message</label>
                        <input type="text" class="form-control" value="{{$request->message}}" name="message">

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Edit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
