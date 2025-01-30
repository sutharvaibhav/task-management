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
                            <li class="breadcrumb-item active">Add Task</li>
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
                            <form action="{{ route('admin.task.store') }}" class="row g-3 needs-validation custom-input"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-3 position-relative">
                                    <label class="form-label" for="validationTooltip04">Status</label>
                                    <select class="form-select" id="validationTooltip04" name="status" required>
                                        <option value="completed">Completed</option>
                                        <option value="pending" selected>Pending</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label class="form-label" for="validationTooltip04">Priority</label>
                                    <select class="form-select" id="validationTooltip04" name="priority" required>
                                        <option value="low">Low</option>
                                        <option value="medium" selected>Medium</option>
                                        <option value="high">High</option>
                                    </select>
                                    @error('priority')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label class="form-label" for="validationTooltip04">Project<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="validationTooltip04" name="project_id" required>
                                        <option disabled selected>Select Project</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('project_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label class="form-label" for="validationTooltip04">Team Member<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="validationTooltip04" name="member_id" required>
                                        <option disabled selected>Select Team Member</option>
                                        @foreach ($members as $member)
                                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('member_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label class="form-label">Task Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationTextarea"
                                        placeholder="Enter task title" name="task_heading" value="{{ old('task_heading') }}"
                                        required />
                                    @error('task_heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label class="form-label">Task Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="validationTextarea" placeholder="Enter task description" name="task_description"
                                        required rows="5"></textarea>
                                    @error('task_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Add Task</button>
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
