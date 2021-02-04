<!-- Modal -->
<div class="modal fade" id="edit{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.update',$category->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input type="text" class="form-control" value="{{$category->title}}" name="title">
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
