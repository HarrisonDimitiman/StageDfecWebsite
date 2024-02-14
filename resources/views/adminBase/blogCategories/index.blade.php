@extends('layouts.app')

@section('content')
@include('adminBase.blogCategories._createCategory')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Blog Categories</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Blog Categories</li>
            </ol>
        </div>
    </div>
</div>
@include('messages')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <button type="button" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 25px;" data-toggle="modal" data-target=".bs-example-modal-lg">Create New Category</button>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Blog Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogCategories as $blogCategories)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blogCategories->category_name }}</td>
                            <td>
                                <div class="dropdown mo-mb-2">
                                    <a class="btn btn-success dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item edit-category" data-url="{{ URL::to('/blogCategories/edit/'.$blogCategories->id) }}" style="color: white;">
                                            <i class="fas fa-pen mr-2"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" data-url="" style="color: white;">
                                            <form action="{{ URL::to('/blogCategories/destroy/'.$blogCategories->id) }}" method="post">
                                                @csrf
                                                <i class="fas fa-trash mr-2"></i>
                                                <button type="button" class="btn-delete" style="border: 0; background-color: transparent; font-weight: 400; padding: 0; color: white;">
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
<div class="append-edit-category"></div>

@endsection

@section('scripts')
<script type="text/javascript">
    $('.edit-category').click(function(e) {
        var div = $('.append-edit-category');
        div.empty();

        var url = $(this).data('url');
        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#edit_category').modal('show');
            }
        });
    });
    $('.btn-delete').click(function(e){
        swal ({
            title: "Are you sure?",
                text: "Are you sure you want to delete this blog category?",
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