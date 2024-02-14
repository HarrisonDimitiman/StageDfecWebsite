@extends('layouts.app')

@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Roles Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Roles Management</li>
            </ol>
        </div>
    </div>
</div>

@include('messages')

{{-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif --}}

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <a href="{{ route('roles.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 25px;" >Create New Roles</button></a>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <div class="dropdown mo-mb-2">
                                    <a class="btn btn-success dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item edit-category" href="{{ route('roles.edit',$role->id) }}" style="color: white;">
                                            <i class="fas fa-pen mr-2"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" data-url="" style="color: white;">
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <i class="fas fa-trash mr-2"></i>
                                                <button type="submit" class="btn-delete" style="border: 0; background-color: transparent; font-weight: 400; padding: 0; color: white;">
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

                {!! $roles->render() !!}
            </div>
        </div>
    </div> 
</div>

@endsection