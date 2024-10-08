@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach ($types as $type)
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">{{ $type->name }}</h5>
                    <div class="card-body">
                        <div class="table-responsive" style="min-height: 130px; overflow-y: auto;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Read</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $key = 0;
                                    @endphp
                                    @foreach ($pdfs as $pdf)
                                        @if ($type->id == $pdf->pdf_type_id)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    @php
                                                        $filename = basename($pdf->pdf); // Get the base name
                                                        $nameParts = explode('.', $filename); // Split by dot
                                                    @endphp
                                                    {{ $nameParts[1] }}
                                                </td>
                                                <td>{{ Carbon\Carbon::parse($pdf->created_at)->format('y-m-d') }}</td>
                                                <td><a href="{{ asset($pdf->pdf) }}" target="__blank">Read >></a></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Custom CSS -->
                        <style>
                            .table-responsive {
                                max-height: calc(2 * 38px + 1px);
                                /* Adjust row height if needed */
                            }
                        </style>

                        <form action="{{ url('user/entry/pdf/update') }}" method="post" enctype="multipart/form-data"
                            class="mt-3">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" class="form-control mb-3" required>
                            </div>
                            <button type="submit" class="btn btn-primary ">Upload</button>
                            <input type="hidden" name="pdf_type_id" value="{{ $type->id }}">
                            <input type="hidden" name="type_name" value="{{ $type->short }}" id="">
                            <input type="hidden" name="entry_id" value="{{ $entry->id }}">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('style')
    <style>
        .disabled-link {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.6;
        }
    </style>
@endsection
