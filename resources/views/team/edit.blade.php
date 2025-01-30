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
                            <li class="breadcrumb-item active">Edit Team Member</li>
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
                            <form action="{{ route('admin.team.update', $team->id) }}"
                                class="row g-3 needs-validation custom-input" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 position-relative">
                                    <label class="form-label">Name<span class="text-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" value="{{ $team->name }}"
                                        required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 position-relative">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" value="{{ $team->email }}"
                                        required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 position-relative">
                                    <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                                    <input class="form-control" name="mobile" type="number" value="{{ $team->mobile }}"
                                        required>
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update Team Member</button>
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
