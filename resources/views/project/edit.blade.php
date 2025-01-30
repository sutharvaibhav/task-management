@extends('layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Edit Project</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.project.update', $project->id) }}"
                                class="row g-3 needs-validation custom-input" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 position-relative">
                                    <label class="form-label">Project Name<span class="text-danger">*</span></label>
                                    <input class="form-control" name="project_name" type="text"
                                        value="{{ $project->project_name }}" required>
                                    @error('project_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
