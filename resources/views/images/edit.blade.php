
<!-- Modal -->
<div class="modal fade" id="edit{{$image->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('img.update',$image->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" value="{{$image->image}}" name="image">
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
