@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($pdfs as $key => $pdf)
                @if ($key == 'id' || $key == 'created_at' || $key == 'updated_at' || $key == 'entry_id')
                    @continue
                @endif
                <div class="col-md-4 col-sm-6 mb-4 text-center">
                    <div class="card" style="border: 1px solid grey; border-radius: 10px;">
                        <div class="card-body">
                            @if ($pdf)
                                <img src="{{ asset('assets/images/found.png') }}" alt="PDF found" class="img-fluid mb-3">
                            @else
                                <img src="{{ asset('assets/images/not_found.png') }}" alt="PDF not found"
                                    class="img-fluid mb-3">
                            @endif
                            <h5 class="card-title">{{Str::ucfirst(Str::replace('_',' ',$key))  }}</h5>
                            <form action="{{ url('admin/entry/pdf/update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="acquisition_plan" class="form-control mb-3" required>
                                </div>
                                <a href="{{ asset($pdf) }}" class="btn btn-danger @if(!$pdf) disabled-link  @endif" target="__blank">Read >></a>
                                <button type="submit" class="btn btn-primary ">Update</button>
                                <input type="hidden" name="id" value="{{ $pdfs['id'] }}">
                                <input type="hidden" name="attribute" value="{{$key}}" id="">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
