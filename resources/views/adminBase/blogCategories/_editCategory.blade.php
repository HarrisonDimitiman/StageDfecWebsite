<div class="modal fade bs-example-modal-lg" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Categorys</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ URL::to('/blogCategories/update/'. $getCategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Category Name: {{ $getCategory->id }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="category_name" required id="category_name" value="{{ $getCategory->category_name }}">
                        </div>
                    </div>  

                    <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>