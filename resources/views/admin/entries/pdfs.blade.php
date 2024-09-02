@extends('layouts.app')
@section('content')
    <div class="row">
        @if ($entry->upload_acquisition_plan)
        <div class="col-md-6">
            <img src="{{ asset('assets/images/pdf.png') }}" alt="">
            <a href="{{asset($entry->upload_acquisition_plan)}}" class="btn btn-danger ml-3 mt-3" style="width: 177px;" target="__blank">Read >></a>
        </div>
        @endif
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    @if ($entry->upload_acquisition_plan)
                    <h3>Change Acquisition Plan</h3>
                    @else
                    <h3>Upload Acquisition Plan</h3>
                    @endif
                </div>
                <div class="card-body pt-5 pb-4">
                    <form action="{{url('admin/entry/pdf/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$entry->id}}">
                        <input type="file" name="upload_acquisition_plan" id="" class="form-control" required>
                        <button type="submit" value="submit" class="btn btn-primary mt-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
