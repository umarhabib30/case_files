@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Add Entry</h5>
            <div class="card-body">
                <form method="post" action="#">
                    @csrf
                    <div class="row">
                        <!-- Project LAC No -->
                        <div class="form-group col-md-6">
                            <label for="project_lac_no" class="col-form-label">Project LAC No</label>
                            <input id="project_lac_no" type="text" class="form-control" name="project_lac_no" value="{{ old('project_lac_no') }}" required>
                        </div>

                        <!-- Project Description -->
                        <div class="form-group col-md-6">
                            <label for="project_description" class="col-form-label">Project Description</label>
                            <textarea id="project_description" class="form-control" name="project_description" required>{{ old('project_description') }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Region -->
                        <div class="form-group col-md-6">
                            <label for="region" class="col-form-label">Region</label>
                            <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required>
                        </div>

                        <!-- Project Phase -->
                        <div class="form-group col-md-6">
                            <label for="project_phase" class="col-form-label">Project Phase</label>
                            <input id="project_phase" type="text" class="form-control" name="project_phase" value="{{ old('project_phase') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Proceed -->
                        <div class="form-group col-md-6">
                            <label for="proceed" class="col-form-label">Proceed</label>
                            <input id="proceed" type="text" class="form-control" name="proceed" value="{{ old('proceed') }}" required>
                        </div>

                        <!-- Case File No -->
                        <div class="form-group col-md-6">
                            <label for="case_file_no" class="col-form-label">Case File No</label>
                            <input id="case_file_no" type="text" class="form-control" name="case_file_no" value="{{ old('case_file_no') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Diagram No -->
                        <div class="form-group col-md-6">
                            <label for="diagram_no" class="col-form-label">Diagram No</label>
                            <input id="diagram_no" type="text" class="form-control" name="diagram_no" value="{{ old('diagram_no') }}" required>
                        </div>

                        <!-- Diagram Status -->
                        <div class="form-group col-md-6">
                            <label for="diagram_status" class="col-form-label">Diagram Status</label>
                            <input id="diagram_status" type="text" class="form-control" name="diagram_status" value="{{ old('diagram_status') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Acquisition Status -->
                        <div class="form-group col-md-6">
                            <label for="acquisition_status" class="col-form-label">Acquisition Status</label>
                            <input id="acquisition_status" type="text" class="form-control" name="acquisition_status" value="{{ old('acquisition_status') }}" required>
                        </div>

                        <!-- Spatial Atlas Status -->
                        <div class="form-group col-md-6">
                            <label for="spatial_atlas_status" class="col-form-label">Spatial Atlas Status</label>
                            <input id="spatial_atlas_status" type="text" class="form-control" name="spatial_atlas_status" value="{{ old('spatial_atlas_status') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Date of Approval -->
                        <div class="form-group col-md-6">
                            <label for="date_of_approval" class="col-form-label">Date of Approval</label>
                            <input id="date_of_approval" type="date" class="form-control" name="date_of_approval" value="{{ old('date_of_approval') }}">
                        </div>

                        <!-- Received Diagram Instruction via PIMS -->
                        <div class="form-group col-md-6">
                            <label for="received_diagram_instruction_via_pims" class="col-form-label">Received Diagram Instruction via PIMS</label>
                            <input id="received_diagram_instruction_via_pims" type="date" class="form-control" name="received_diagram_instruction_via_pims" value="{{ old('received_diagram_instruction_via_pims') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Cancellation Date -->
                        <div class="form-group col-md-6">
                            <label for="cancellation_date" class="col-form-label">Cancellation Date</label>
                            <input id="cancellation_date" type="date" class="form-control" name="cancellation_date" value="{{ old('cancellation_date') }}">
                        </div>

                        <!-- Cancellation Reason -->
                        <div class="form-group col-md-6">
                            <label for="cancellation_reason" class="col-form-label">Cancellation Reason</label>
                            <input id="cancellation_reason" type="text" class="form-control" name="cancellation_reason" value="{{ old('cancellation_reason') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- On Hold Date -->
                        <div class="form-group col-md-6">
                            <label for="on_hold_date" class="col-form-label">On Hold Date</label>
                            <input id="on_hold_date" type="date" class="form-control" name="on_hold_date" value="{{ old('on_hold_date') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- On Hold Reason -->
                        <div class="form-group col-md-6">
                            <label for="on_hold_reason" class="col-form-label">On Hold Reason</label>
                            <input id="on_hold_reason" type="text" class="form-control" name="on_hold_reason" value="{{ old('on_hold_reason') }}">
                        </div>

                        <!-- Relocation -->
                        <div class="form-group col-md-6">
                            <label for="relocation" class="col-form-label">Relocation</label>
                            <input id="relocation" type="text" class="form-control" name="relocation" value="{{ old('relocation') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Linked to Diagram -->
                        <div class="form-group col-md-6">
                            <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                            <input id="linked_to_diagram" type="text" class="form-control" name="linked_to_diagram" value="{{ old('linked_to_diagram') }}">
                        </div>

                        <!-- Owner Type 1 -->
                        <div class="form-group col-md-6">
                            <label for="owner_type_1" class="col-form-label">Owner Type 1</label>
                            <input id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ old('owner_type_1') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Owner 1 -->
                        <div class="form-group col-md-6">
                            <label for="owner_1" class="col-form-label">Owner 1</label>
                            <input id="owner_1" type="text" class="form-control" name="owner_1" value="{{ old('owner_1') }}" required>
                        </div>

                        <!-- Owner Type 2 -->
                        <div class="form-group col-md-6">
                            <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                            <input id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ old('owner_type_2') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Owner 2 -->
                        <div class="form-group col-md-6">
                            <label for="owner_2" class="col-form-label">Owner 2</label>
                            <input id="owner_2" type="text" class="form-control" name="owner_2" value="{{ old('owner_2') }}">
                        </div>

                        <!-- Owner Type 3 -->
                        <div class="form-group col-md-6">
                            <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                            <input id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ old('owner_type_3') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Owner 3 -->
                        <div class="form-group col-md-6">
                            <label for="owner_3" class="col-form-label">Owner 3</label>
                            <input id="owner_3" type="text" class="form-control" name="owner_3" value="{{ old('owner_3') }}">
                        </div>

                        <!-- Valuer -->
                        <div class="form-group col-md-6">
                            <label for="valuer" class="col-form-label">Valuer</label>
                            <input id="valuer" type="text" class="form-control" name="valuer" value="{{ old('valuer') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Negotiator -->
                        <div class="form-group col-md-6">
                            <label for="negotiator" class="col-form-label">Negotiator</label>
                            <input id="negotiator" type="text" class="form-control" name="negotiator" value="{{ old('negotiator') }}">
                        </div>

                        <!-- Contacted the Owner -->
                        <div class="form-group col-md-6">
                            <label for="contacted_the_owner" class="col-form-label">Contacted the Owner</label>
                            <input id="contacted_the_owner" type="text" class="form-control" name="contacted_the_owner" value="{{ old('contacted_the_owner') }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Site Inspected -->
                        <div class="form-group col-md-6">
                            <label for="site_inspected" class="col-form-label">Site Inspected</label>
                            <select id="site_inspected" class="form-control" name="site_inspected">
                                <option value="1" {{ old('site_inspected') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('site_inspected') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <!-- Staking Requested -->
                        <div class="form-group col-md-6">
                            <label for="staking_requested" class="col-form-label">Staking Requested</label>
                            <select id="staking_requested" class="form-control" name="staking_requested">
                                <option value="1" {{ old('staking_requested') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('staking_requested') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Issues -->
                        <div class="form-group col-md-6">
                            <label for="issues" class="col-form-label">Issues</label>
                            <select id="issues" class="form-control" name="issues">
                                <option value="1" {{ old('issues') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('issues') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <!-- PTO -->
                        <div class="form-group col-md-6">
                            <label for="pto" class="col-form-label">PTO</label>
                            <select id="pto" class="form-control" name="pto">
                                <option value="1" {{ old('pto') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('pto') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Type of Acquisition -->
                        <div class="form-group col-md-6">
                            <label for="type_of_acquisition" class="col-form-label">Type of Acquisition</label>
                            <input id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ old('type_of_acquisition') }}">
                        </div>

                        <!-- Signed Agreement -->
                        <div class="form-group col-md-6">
                            <label for="signed_agreement" class="col-form-label">Signed Agreement</label>
                            <select id="signed_agreement" class="form-control" name="signed_agreement">
                                <option value="1" {{ old('signed_agreement') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('signed_agreement') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Date Owner Signed -->
                        <div class="form-group col-md-6">
                            <label for="date_owner_signed" class="col-form-label">Date Owner Signed</label>
                            <input id="date_owner_signed" type="date" class="form-control" name="date_owner_signed" value="{{ old('date_owner_signed') }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Add Entry</button>
                </form>
            </div>
        </div>
    </div>
</div>













@endsection
