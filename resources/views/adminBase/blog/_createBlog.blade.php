<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Create New Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Category Name:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="category_id" id="category_id" required>
                                <option value="">-- Select Category --</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Title:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="title" required id="title">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Content:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Image:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" name="image" required id="image" style="color: #b8b8b8;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <img id="image-captured" style="width: 60%; max-width: 350px;">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Save Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>


