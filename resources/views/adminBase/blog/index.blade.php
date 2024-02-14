@extends('layouts.app')

@section('content')
@include('adminBase.blog._createBlog')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Blog</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <button type="button" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 25px;" data-toggle="modal" data-target=".bs-example-modal-lg">Create New Blog</button>

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Author</th>
                            <th>Blog Category</th>
                            <th>Blog Title</th>
                            <th>Blog Content</th>
                            {{-- <th>Blog Image</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blogs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blogs->name }}</td>
                            <td>{{ $blogs->category_name }}</td>
                            <td>{{ $blogs->title }}</td>
                            <td>
                                @php
                                    $maxLength = 40;
                                    $truncatedText = strlen($blogs->content) > $maxLength ? substr($blogs->content, 0, $maxLength - 3) . '...' : $blogs->content;
                                @endphp
                                {{ $truncatedText }}
                            </td>
                            {{-- <td>
                                <img src="{{ asset('storage/'.$blogs->image) }}" alt="" id="imageShow" style="width: 100%; max-width: 500px;">
                            </td> --}}
                            <td>
                                <div class="dropdown mo-mb-2">
                                    <a class="btn btn-success dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item edit-blog" data-url="{{ route('blog.edit', $blogs->id) }}" style="color: white;">
                                            <i class="fas fa-pen mr-2"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" data-url="" style="color: white;">
                                            <form action="{{ route('blog.destroy', $blogs->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <i class="fas fa-trash mr-2"></i>
                                                <button type="button" class="blog-delete" style="border: 0; background-color: transparent; font-weight: 400; padding: 0; color: white;">
                                                    &nbsp;Delete
                                                </button>
                                            </form>	
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> 
</div>
<div class="append-edit-blog"></div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
      var $fileInput = $('#image');
      var $imgElement = $('#image-captured');
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

    $('.edit-blog').click(function(e) {
        var div = $('.append-edit-blog');
        div.empty();

        var url = $(this).data('url');
        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#edit_blog').modal('show');
            }
        });
    });
    $('.blog-delete').click(function(e){
        swal ({
            title: "Are you sure?",
                text: "Are you sure you want to delete this blog?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
        }).then((result) => {
            if (result) {
                $(this).closest('form').submit();
            }
        })
    });
</script>
@endsection