@extends('layouts.app')

@section('content')
@include('adminBase.customization.slider._create')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Slider Image Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Slider Image Management</li>
            </ol>
        </div>
    </div>
</div>
@include('messages')


<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <button type="button" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 25px;" data-toggle="modal" data-target=".bs-example-modal-lg">Create New Blog</button>

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Image URL</th>
                            <th>Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliderImage as $sliderImage)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/'.$sliderImage->image) }}" alt="" width="100px" height="60px;"></td>
                            <td>{{ $sliderImage->image }}</td>
                            <td>{{ $sliderImage->text }}</td>
                            <td>
                                <div class="dropdown mo-mb-2">
                                    <a class="btn btn-success dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item edit-slider" data-url="{{ URL::to('/slider/edit', $sliderImage->id) }}" style="color: white;">
                                            <i class="fas fa-pen mr-2"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" data-url="" style="color: white;">
                                            <form action="{{ URL::to('/slider/destroy', $sliderImage->id) }}" method="post">
                                                @csrf
                                                <i class="fas fa-trash mr-2"></i>
                                                <button type="button" class="slider-delete" style="border: 0; background-color: transparent; font-weight: 400; padding: 0; color: white;">
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
<div class="append-edit-slider"></div>

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

    $('.edit-slider').click(function(e) {
        var div = $('.append-edit-slider');
        div.empty();

        var url = $(this).data('url');
        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#edit_slider').modal('show');
            }
        });
    });
    $('.slider-delete').click(function(e){
        swal ({
            title: "Are you sure?",
                text: "Are you sure you want to delete this slider?",
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
