@extends('layouts.app')
@section('content')

@include('components.loading')
    <div class="mb-3">
        <a class="btn btn-warning float-end" href="{{ url('admin/entries/export') }}" id="export_button">Export Entires Data</a>

    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Entries Table</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>LAC No</th>
                                    <th>Description</th>
                                    <th>Region</th>
                                    <th>Phase</th>
                                    <th>Proceed</th>
                                    <th>Case File No</th>
                                    <th>Diagram No</th>
                                    <th>Diagram Status</th>
                                    <th>Details</th>
                                    <th>Manage PDFs</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $key => $entry)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $entry->project_lac_no }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($entry->project_description, 40, '...') }}</td>

                                        <td>{{ $entry->region }}</td>
                                        <td>{{ $entry->project_phase }}</td>
                                        <td>{{ $entry->proceed }}</td>
                                        <td>{{ $entry->case_file_no }}</td>
                                        <td>{{ $entry->diagram_no }}</td>
                                        <td>{{ $entry->diagram_status }}</td>
                                        <td><a href="{{ url('admin/entry/details', $entry->id) }}"><button
                                                    class="btn btn-primary">Details</button></a>
                                        <td><a href="{{ url('admin/entry/pdfs', $entry->id) }}"><button
                                                    class="btn btn-primary">Manage</button></a>
                                        <td><a href="{{ url('admin/entry/edit', $entry->id) }}"><button
                                                    class="btn btn-primary">Edit</button></a>
                                        </td>
                                        <td>
                                            <a class="delete-entry" entry-id={{ $entry->id }}><button
                                                    class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Render pagination links -->
                <div class="d-flex justify-content-end mr-3">
                    {{ $entries->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {


            $('body').on('click', '.delete-entry', function(e) {
                e.preventDefault();
                var id = $(this).attr('entry-id');
                var title = "Are you sure?";
                Swal.fire({
                    icon: "warning",
                    title: title,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                }).then((result) => {
                    if (result.isConfirmed) {
                        localStorage.clear();
                        window.location.href = "{{ url('admin/entry/delete') }}/" + id;
                    }
                });
            });
        });
    </script>
@endsection
