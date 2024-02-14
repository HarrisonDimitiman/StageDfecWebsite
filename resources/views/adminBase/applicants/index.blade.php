@extends('layouts.app')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Applicants Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Applicants Management</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                {{-- <button type="button" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 25px;" data-toggle="modal" data-target=".bs-example-modal-lg">Create New Blog</button> --}}

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicants)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $applicants->name }}</td>
                            <td>{{ $applicants->email }}</td>
                            <td>{{ $applicants->subject }}</td>
                            <td>
                                @php
                                    $maxLength = 40;
                                    $truncatedText = strlen($applicants->message) > $maxLength ? substr($applicants->message, 0, $maxLength - 3) . '...' : $applicants->message;
                                @endphp
                                {{ $truncatedText }}
                            </td>
                            <td>
                                <div class="dropdown mo-mb-2">
                                    <a class="btn btn-success dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item view-applicant" data-url="{{ route('application.show', $applicants->id) }}" style="color: white;">
                                            <i class="fas fa-pen mr-2"></i>
                                            View
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
<div class="append-view-applicant"></div>

@endsection

@section('scripts')
<script type="text/javascript">

    $('.view-applicant').click(function(e) {
        var div = $('.append-view-applicant');
        div.empty();

        var url = $(this).data('url');
        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#view_applicant').modal('show');
            }
        });
    });
</script>
@endsection