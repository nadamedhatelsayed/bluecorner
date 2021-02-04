<!-- Modal -->
<div class="modal fade" id="edit{{$slider->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" value="{{$slider->title}}" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">description</label>
                        <input type="text" class="form-control" value="{{$slider->description}}" name="description">

                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"   value="{{ old('image', $slider->image) }}" class="form-control">
                        <img src="{{ asset('images/'.$slider->image) }}" style=" margin-top: 10px; width: 290px; height: 200px;" alt="">

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

