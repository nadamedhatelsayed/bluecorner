<div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add Blog</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                        type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">title</label>
                                <input type="text" class="form-control" id="name" name="title">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">description</label>
                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">body</label>
                                <textarea class="form-control" id="description" name="body" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">image</label>
                                <input type="file" class="form-control" id="image" name="image" >

                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Basic modal -->
</div>
