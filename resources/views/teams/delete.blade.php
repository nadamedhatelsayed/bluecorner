<!-- Modal -->
<div class="modal fade" id="deleted{{$team->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('team.destroy', $team->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Are you sure to delete that? </label>
                        <input type="text" class="form-control" value="{{$team->name}}" name="name" readonly>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Deleted</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
