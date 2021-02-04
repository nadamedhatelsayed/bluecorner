<div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add  </h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                        type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" class="form-control" id="address" name="email">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">description</label>
                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">mission</label>
                                <textarea class="form-control" id="mission" name="mission" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">vision</label>
                                <textarea class="form-control" id="mission" name="vision" rows="2"></textarea>
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
