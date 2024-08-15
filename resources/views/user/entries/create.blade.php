@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add Entry</h5>
                <div class="card-body">
                    <form method="post" action="{{url('user/entries/store')}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="project_lac_no" class="col-form-label">Project LAC No *</label>
                                <input id="project_lac_no" type="text" class="form-control" name="project_lac_no" value="{{ old('project_lac_no') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_description" class="col-form-label">Project Description *</label>
                                <textarea id="project_description" class="form-control" name="project_description" rows="4" required>{{ old('project_description') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="region" class="col-form-label">Region *</label>
                                <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_phase" class="col-form-label">Project Phase *</label>
                                <input id="project_phase" type="text" class="form-control" name="project_phase" value="{{ old('project_phase') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="proceed" class="col-form-label">Proceed *</label>
                                <input id="proceed" type="text" class="form-control" name="proceed" value="{{ old('proceed') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="case_file_no" class="col-form-label">Case File No *</label>
                                <input id="case_file_no" type="text" class="form-control" name="case_file_no" value="{{ old('case_file_no') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="diagram_no" class="col-form-label">Diagram No *</label>
                                <input id="diagram_no" type="text" class="form-control" name="diagram_no" value="{{ old('diagram_no') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="diagram_status" class="col-form-label">Diagram Status *</label>
                                <input id="diagram_status" type="text" class="form-control" name="diagram_status" value="{{ old('diagram_status') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquisition_status" class="col-form-label">Acquisition Status *</label>
                                <input id="acquisition_status" type="text" class="form-control" name="acquisition_status" value="{{ old('acquisition_status') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spatial_atlas_status" class="col-form-label">Spatial Atlas Status *</label>
                                <input id="spatial_atlas_status" type="text" class="form-control" name="spatial_atlas_status" value="{{ old('spatial_atlas_status') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_approval" class="col-form-label">Date of Approval</label>
                                <input id="date_of_approval" type="date" class="form-control" name="date_of_approval" value="{{ old('date_of_approval') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="received_diagram_instruction_via_pims" class="col-form-label">Received Diagram Instruction via PIMS</label>
                                <input id="received_diagram_instruction_via_pims" type="date" class="form-control" name="received_diagram_instruction_via_pims" value="{{ old('received_diagram_instruction_via_pims') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="cancellation_date" class="col-form-label">Cancellation Date</label>
                                <input id="cancellation_date" type="date" class="form-control" name="cancellation_date" value="{{ old('cancellation_date') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cancellation_reason" class="col-form-label">Cancellation Reason</label>
                                <input id="cancellation_reason" type="text" class="form-control" name="cancellation_reason" value="{{ old('cancellation_reason') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="on_hold_date" class="col-form-label">On Hold Date</label>
                                <input id="on_hold_date" type="date" class="form-control" name="on_hold_date" value="{{ old('on_hold_date') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="on_hold_reason" class="col-form-label">On Hold Reason</label>
                                <input id="on_hold_reason" type="text" class="form-control" name="on_hold_reason" value="{{ old('on_hold_reason') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="relocation" class="col-form-label">Relocation</label>
                                <input id="relocation" type="text" class="form-control" name="relocation" value="{{ old('relocation') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                                <input id="linked_to_diagram" type="text" class="form-control" name="linked_to_diagram" value="{{ old('linked_to_diagram') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_1" class="col-form-label">Owner Type 1 *</label>
                                <input id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ old('owner_type_1') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_1" class="col-form-label">Owner 1 *</label>
                                <input id="owner_1" type="text" class="form-control" name="owner_1" value="{{ old('owner_1') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                                <input id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ old('owner_type_2') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_2" class="col-form-label">Owner 2</label>
                                <input id="owner_2" type="text" class="form-control" name="owner_2" value="{{ old('owner_2') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                                <input id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ old('owner_type_3') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_3" class="col-form-label">Owner 3</label>
                                <input id="owner_3" type="text" class="form-control" name="owner_3" value="{{ old('owner_3') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="valuer" class="col-form-label">Valuer</label>
                                <input id="valuer" type="text" class="form-control" name="valuer" value="{{ old('valuer') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="negotiator" class="col-form-label">Negotiator</label>
                                <input id="negotiator" type="text" class="form-control" name="negotiator" value="{{ old('negotiator') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contacted_the_owner" class="col-form-label">Contacted the Owner</label>
                                <input id="contacted_the_owner" type="text" class="form-control" name="contacted_the_owner" value="{{ old('contacted_the_owner') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_inspected" class="col-form-label">Site Inspected</label>
                                <select id="site_inspected" class="form-control" name="site_inspected">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('site_inspected') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('site_inspected') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="staking_requested" class="col-form-label">Staking Requested</label>
                                <select id="staking_requested" class="form-control" name="staking_requested">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('staking_requested') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('staking_requested') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="issues" class="col-form-label">Issues</label>
                                <select id="issues" class="form-control" name="issues">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('issues') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('issues') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pto" class="col-form-label">PTO</label>
                                <select id="pto" class="form-control" name="pto">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('pto') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('pto') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_of_acquisition" class="col-form-label">Type of Acquisition</label>
                                <input id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ old('type_of_acquisition') }}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="signed_agreement" class="col-form-label">Signed Agreement</label>
                                <select id="signed_agreement" class="form-control" name="signed_agreement">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('signed_agreement') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('signed_agreement') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_owner_signed" class="col-form-label">Date Owner Signed</label>
                                <input id="date_owner_signed" type="date" class="form-control" name="date_owner_signed" value="{{ old('date_owner_signed') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_occupation" class="col-form-label">Date of Occupation</label>
                                <input id="date_of_occupation" type="date" class="form-control" name="date_of_occupation" value="{{ old('date_of_occupation') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="further_conditions_sent" class="col-form-label">Further Conditions Sent</label>
                                <input id="further_conditions_sent" type="text" class="form-control" name="further_conditions_sent" value="{{ old('further_conditions_sent') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="further_conditions_approved" class="col-form-label">Further Conditions Approved</label>
                                <input id="further_conditions_approved" type="text" class="form-control" name="further_conditions_approved" value="{{ old('further_conditions_approved') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="final_offer_made" class="col-form-label">Final Offer Made</label>
                                <select id="final_offer_made" class="form-control" name="final_offer_made">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('final_offer_made') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('final_offer_made') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_final_offer_expiring" class="col-form-label">Date Final Offer Expiring</label>
                                <input id="date_final_offer_expiring" type="text" class="form-control" name="date_final_offer_expiring" value="{{ old('date_final_offer_expiring') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="failed_neg_report_submitted" class="col-form-label">Failed Negotiation Report Submitted</label>
                                <select id="failed_neg_report_submitted" class="form-control" name="failed_neg_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('failed_neg_report_submitted') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('failed_neg_report_submitted') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="negotiation_report_submitted" class="col-form-label">Negotiation Report Submitted</label>
                                <select id="negotiation_report_submitted" class="form-control" name="negotiation_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('negotiation_report_submitted') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('negotiation_report_submitted') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="qa_passed" class="col-form-label">QA Passed</label>
                                <input id="qa_passed" type="date" class="form-control" name="qa_passed" value="{{ old('qa_passed') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="qa_referred_back_to_valuer" class="col-form-label">QA Referred Back to Valuer</label>
                                <input id="qa_referred_back_to_valuer" type="date" class="form-control" name="qa_referred_back_to_valuer" value="{{ old('qa_referred_back_to_valuer') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_sent_memo_request" class="col-form-label">Date Sent Memo Request</label>
                                <input id="date_sent_memo_request" type="date" class="form-control" name="date_sent_memo_request" value="{{ old('date_sent_memo_request') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_memo_uploaded" class="col-form-label">Date Memo Uploaded</label>
                                <input id="date_memo_uploaded" type="date" class="form-control" name="date_memo_uploaded" value="{{ old('date_memo_uploaded') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_memo_submitted_to_sanral" class="col-form-label">Date Memo Submitted to SANRAL</label>
                                <input id="date_memo_submitted_to_sanral" type="date" class="form-control" name="date_memo_submitted_to_sanral" value="{{ old('date_memo_submitted_to_sanral') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number</label>
                                <input id="portion_number" type="text" class="form-control" name="portion_number" value="{{ old('portion_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="erf_number" class="col-form-label">ERF Number</label>
                                <input id="erf_number" type="text" class="form-control" name="erf_number" value="{{ old('erf_number') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="remainder" class="col-form-label">Remainder</label>
                                <select id="remainder" class="form-control" name="remainder">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('remainder') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('remainder') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="township" class="col-form-label">Township</label>
                                <input id="township" type="text" class="form-control" name="township" value="{{ old('township') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="extension" class="col-form-label">Extension</label>
                                <input id="extension" type="text" class="form-control" name="extension" value="{{ old('extension') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="unit_number" class="col-form-label">Unit Number</label>
                                <input id="unit_number" type="text" class="form-control" name="unit_number" value="{{ old('unit_number') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="scheme_name" class="col-form-label">Scheme Name</label>
                                <input id="scheme_name" type="text" class="form-control" name="scheme_name" value="{{ old('scheme_name') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="scheme_number" class="col-form-label">Scheme Number</label>
                                <input id="scheme_number" type="text" class="form-control" name="scheme_number" value="{{ old('scheme_number') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="portion_of_portion" class="col-form-label">Portion of Portion</label>
                                <input id="portion_of_portion" type="text" class="form-control" name="portion_of_portion" value="{{ old('portion_of_portion') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="farm_name" class="col-form-label">Farm Name</label>
                                <input id="farm_name" type="text" class="form-control" name="farm_name" value="{{ old('farm_name') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="farm_number" class="col-form-label">Farm Number</label>
                                <input id="farm_number" type="text" class="form-control" name="farm_number" value="{{ old('farm_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agricultural_holding_name" class="col-form-label">Agricultural Holding Name</label>
                                <input id="agricultural_holding_name" type="text" class="form-control" name="agricultural_holding_name" value="{{ old('agricultural_holding_name') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="agricultural_holding_number" class="col-form-label">Agricultural Holding Number</label>
                                <input id="agricultural_holding_number" type="text" class="form-control" name="agricultural_holding_number" value="{{ old('agricultural_holding_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_number" class="col-form-label">Site Number</label>
                                <input id="site_number" type="text" class="form-control" name="site_number" value="{{ old('site_number') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="community" class="col-form-label">Community</label>
                                <input id="community" type="text" class="form-control" name="community" value="{{ old('community') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="chief" class="col-form-label">Chief</label>
                                <input id="chief" type="text" class="form-control" name="chief" value="{{ old('chief') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division</label>
                                <input id="registration_division" type="text" class="form-control" name="registration_division" value="{{ old('registration_division') }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Add Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
