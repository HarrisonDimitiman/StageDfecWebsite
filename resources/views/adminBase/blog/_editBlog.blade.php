<div class="modal fade bs-example-modal-lg" id="edit_blog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Category Name:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="category_id" id="category_id" required>
                                <option value="">-- Select Category --</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}" @php if($category->id == $blog->blog_category_id) echo "selected" @endphp>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Title:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="title" value="{{ $blog->title }}" required id="title">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Content:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{ $blog->content }}</textarea>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Blog Image:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" name="image" value="{{ $blog->image }}" id="image_edit" style="color: #b8b8b8;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <img id="image_captured_edit" src="{{ asset('storage/'.$blog->image) }}" style="width: 60%; max-width: 350px;">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Update Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
      var $fileInput = $('#image_edit');
      var $imgElement = $('#image_captured_edit');
      $fileInput.on('change', function() {
        var file = $fileInput[0].files[0];
        if (file) {
          var reader = new FileReader();
          reader.onload = function(event) {
            var imageUrl = event.target.result;
            $imgElement.attr('src', imageUrl);
          };
          reader.readAsDataURL(file);
        } else {
          $imgElement.attr('src', '');
        }
      });
    });
</script>

