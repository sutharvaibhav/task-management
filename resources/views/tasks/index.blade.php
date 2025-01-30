@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <style>
        div.dataTables_wrapper div.dataTables_length select {
            width: 70px !important;
        }
    </style>
@endpush
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
                            <li class="breadcrumb-item active">Tasks</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.task.create') }}">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Add Task</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table" id="task-table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Member Name</th>
                                        <th scope="col">Task Heading</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#task-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.getTask') }}',
                columns: [{
                        data: null,
                        name: "",
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart +
                                1;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'priority',
                        name: 'priority'
                    },
                    {
                        data: 'project_name',
                        name: 'project.project_name'
                    },
                    {
                        data: 'member_name',
                        name: 'member.name'
                    },
                    {
                        data: 'task_heading',
                        name: 'task_heading'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                rowCallback: function(row, data) {
                    $(row).attr('data-id', data
                    .id); 
                }
            });
            $("#task-table tbody").sortable({
                update: function(event, ui) {
                    const items = $(this).children().map(function() {
                        return $(this).data('id');
                    }).get();

                    $.post('{{ route('admin.updateTaskOrder') }}', {
                        _token: '{{ csrf_token() }}',
                        items: items
                    }, function(response) {
                        // if (response.status === 'success') {
                        //     alert('Reorder saved!');
                        // }
                    });
                }
            }).disableSelection();
        });
    </script>
@endpush
