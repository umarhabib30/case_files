@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Entry Details</h5>
                <div class="card-body">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="project_lac_no" class="col-form-label">Project LAC No *</label>
                                <input readonly id="project_lac_no" type="text" class="form-control" name="project_lac_no" value="{{ $entry->project_lac_no ? $entry->project_lac_no : 'N/A'}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_description" class="col-form-label">Project Description *</label>
                                <textarea readonly id="project_description" class="form-control" name="project_description" rows="4" required>{{ $entry->project_description ? $entry->project_description : 'N/A' }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="region" class="col-form-label">Region *</label>
                                <input readonly id="region" type="text" class="form-control" name="region" value="{{ $entry->region ? $entry->region : 'N/A' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_phase" class="col-form-label">Project Phase *</label>
                                <input readonly id="project_phase" type="text" class="form-control" name="project_phase" value="{{ $entry->project_phase ? $entry->project_phase : 'N/A' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="proceed" class="col-form-label">Proceed *</label>
                                <input readonly id="proceed" type="text" class="form-control" name="proceed" value="{{ $entry->proceed ? $entry->proceed : 'N/A' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="case_file_no" class="col-form-label">Case File No *</label>
                                <input readonly id="case_file_no" type="text" class="form-control" name="case_file_no" value="{{ $entry->case_file_no ? $entry->case_file_no : 'N/A' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="diagram_no" class="col-form-label">Diagram No *</label>
                                <input readonly id="diagram_no" type="text" class="form-control" name="diagram_no" value="{{ $entry->diagram_no ? $entry->diagram_no : 'N/A' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="diagram_status" class="col-form-label">Diagram Status *</label>
                                <input readonly id="diagram_status" type="text" class="form-control" name="diagram_status" value="{{ $entry->diagram_status ? $entry->diagram_status : 'N/A' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquisition_status" class="col-form-label">Acquisition Status *</label>
                                <input readonly id="acquisition_status" type="text" class="form-control" name="acquisition_status" value="{{ $entry->acquisition_status ? $entry->acquisition_status : 'N/A' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spatial_atlas_status" class="col-form-label">Spatial Atlas Status *</label>
                                <input readonly id="spatial_atlas_status" type="text" class="form-control" name="spatial_atlas_status" value="{{ $entry->spatial_atlas_status ? $entry->spatial_atlas_status : 'N/A' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_approval" class="col-form-label">Date of Approval</label>
                                <input readonly id="date_of_approval" type="date" class="form-control" name="date_of_approval" value="{{ $entry->date_of_approval ? $entry->date_of_approval : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="received_diagram_instruction_via_pims" class="col-form-label">Received Diagram Instruction via PIMS</label>
                                <input readonly id="received_diagram_instruction_via_pims" type="date" class="form-control" name="received_diagram_instruction_via_pims" value="{{ $entry->received_diagram_instruction_via_pims ? $entry->received_diagram_instruction_via_pims : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="cancellation_date" class="col-form-label">Cancellation Date</label>
                                <input readonly id="cancellation_date" type="date" class="form-control" name="cancellation_date" value="{{ $entry->cancellation_date ? $entry->cancellation_date : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cancellation_reason" class="col-form-label">Cancellation Reason</label>
                                <input readonly id="cancellation_reason" type="text" class="form-control" name="cancellation_reason" value="{{ $entry->cancellation_reason ? $entry->cancellation_reason : 'N/A' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="on_hold_date" class="col-form-label">On Hold Date</label>
                                <input readonly id="on_hold_date" type="date" class="form-control" name="on_hold_date" value="{{ $entry->on_hold_date ? $entry->on_hold_date : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="on_hold_reason" class="col-form-label">On Hold Reason</label>
                                <input readonly id="on_hold_reason" type="text" class="form-control" name="on_hold_reason" value="{{ $entry->on_hold_reason ? $entry->on_hold_reason : 'N/A' }}">
                            </div>
                        </div>
                        {{-- -------------------------------------- --}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="relocation" class="col-form-label">Relocation</label>
                                <input readonly id="relocation" type="text" class="form-control" name="relocation" value="{{ $entry->relocation ? $entry->relocation : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                                <input readonly id="linked_to_diagram" type="text" class="form-control" name="linked_to_diagram" value="{{ $entry->linked_to_diagram ? $entry->linked_to_diagram : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_1" class="col-form-label">Owner Type 1 *</label>
                                <input readonly id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ $entry->owner_type_1 ? $entry->owner_type_1 : '' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_1" class="col-form-label">Owner 1 *</label>
                                <input readonly id="owner_1" type="text" class="form-control" name="owner_1" value="{{ $entry->owner_1 ? $entry->owner_1 : '' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                                <input readonly id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ $entry->owner_type_2 ? $entry->owner_type_2 : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_2" class="col-form-label">Owner 2</label>
                                <input readonly id="owner_2" type="text" class="form-control" name="owner_2" value="{{ $entry->owner_2 ? $entry->owner_2 : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                                <input readonly id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ $entry->owner_type_3 ? $entry->owner_type_3 : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_3" class="col-form-label">Owner 3</label>
                                <input readonly id="owner_3" type="text" class="form-control" name="owner_3" value="{{ $entry->owner_3 ? $entry->owner_3 : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="valuer" class="col-form-label">Valuer</label>
                                <input readonly id="valuer" type="text" class="form-control" name="valuer" value="{{ $entry->valuer ? $entry->valuer : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="negotiator" class="col-form-label">Negotiator</label>
                                <input readonly id="negotiator" type="text" class="form-control" name="negotiator" value="{{ $entry->negotiator ? $entry->negotiator : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contacted_the_owner" class="col-form-label">Contacted the Owner</label>
                                <input readonly id="contacted_the_owner" type="text" class="form-control" name="contacted_the_owner" value="{{ $entry->contacted_the_owner ? $entry->contacted_the_owner : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_inspected" class="col-form-label">Site Inspected</label>
                                <select disabled id="site_inspected" class="form-control" name="site_inspected">
                                    <option value="" {{ !$entry->site_inspected ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->site_inspected == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->site_inspected == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="staking_requested" class="col-form-label">Staking Requested</label>
                                <select disabled id="staking_requested" class="form-control" name="staking_requested">
                                    <option value="" {{ !$entry->staking_requested ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->staking_requested == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->staking_requested == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="issues" class="col-form-label">Issues</label>
                                <select disabled id="issues" class="form-control" name="issues">
                                    <option value="" {{ !$entry->issues ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->issues == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->issues == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pto" class="col-form-label">PTO</label>
                                <select disabled id="pto" class="form-control" name="pto">
                                    <option value="" {{ !$entry->pto ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->pto == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->pto == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_of_acquisition" class="col-form-label">Type of Acquisition</label>
                                <input readonly id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ $entry->type_of_acquisition ? $entry->type_of_acquisition : '' }}">
                            </div>
                        </div>

                        {{-- -------------------------------------}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="signed_agreement" class="col-form-label">Signed Agreement</label>
                                <select disabled id="signed_agreement" class="form-control" name="signed_agreement">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->signed_agreement == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->signed_agreement == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_owner_signed" class="col-form-label">Date Owner Signed</label>
                                <input readonly id="date_owner_signed" type="date" class="form-control" name="date_owner_signed" value="{{ $entry->date_owner_signed }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_occupation" class="col-form-label">Date of Occupation</label>
                                <input readonly id="date_of_occupation" type="date" class="form-control" name="date_of_occupation" value="{{ $entry->date_of_occupation }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="further_conditions_sent" class="col-form-label">Further Conditions Sent</label>
                                <input readonly id="further_conditions_sent" type="text" class="form-control" name="further_conditions_sent" value="{{ $entry->further_conditions_sent }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="further_conditions_approved" class="col-form-label">Further Conditions Approved</label>
                                <input readonly id="further_conditions_approved" type="text" class="form-control" name="further_conditions_approved" value="{{ $entry->further_conditions_approved }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="final_offer_made" class="col-form-label">Final Offer Made</label>
                                <select disabled id="final_offer_made" class="form-control" name="final_offer_made">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->final_offer_made == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->final_offer_made == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_final_offer_expiring" class="col-form-label">Date Final Offer Expiring</label>
                                <input readonly id="date_final_offer_expiring" type="text" class="form-control" name="date_final_offer_expiring" value="{{ $entry->date_final_offer_expiring }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="failed_neg_report_submitted" class="col-form-label">Failed Negotiation Report Submitted</label>
                                <select disabled id="failed_neg_report_submitted" class="form-control" name="failed_neg_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->failed_neg_report_submitted == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->failed_neg_report_submitted == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="negotiation_report_submitted" class="col-form-label">Negotiation Report Submitted</label>
                                <select disabled id="negotiation_report_submitted" class="form-control" name="negotiation_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->negotiation_report_submitted == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->negotiation_report_submitted == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="qa_passed" class="col-form-label">QA Passed</label>
                                <input readonly id="qa_passed" type="date" class="form-control" name="qa_passed" value="{{ $entry->qa_passed }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="qa_referred_back_to_valuer" class="col-form-label">QA Referred Back to Valuer</label>
                                <input readonly id="qa_referred_back_to_valuer" type="date" class="form-control" name="qa_referred_back_to_valuer" value="{{ $entry->qa_referred_back_to_valuer }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_sent_memo_request" class="col-form-label">Date Sent Memo Request</label>
                                <input readonly id="date_sent_memo_request" type="date" class="form-control" name="date_sent_memo_request" value="{{ $entry->date_sent_memo_request }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_memo_uploaded" class="col-form-label">Date Memo Uploaded</label>
                                <input readonly id="date_memo_uploaded" type="date" class="form-control" name="date_memo_uploaded" value="{{ $entry->date_memo_uploaded }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_memo_submitted_to_sanral" class="col-form-label">Date Memo Submitted to SANRAL</label>
                                <input readonly id="date_memo_submitted_to_sanral" type="date" class="form-control" name="date_memo_submitted_to_sanral" value="{{ $entry->date_memo_submitted_to_sanral }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number</label>
                                <input readonly id="portion_number" type="text" class="form-control" name="portion_number" value="{{ $entry->portion_number }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="erf_number" class="col-form-label">ERF Number</label>
                                <input readonly id="erf_number" type="text" class="form-control" name="erf_number" value="{{ $entry->erf_number }}">
                            </div>
                        </div>

                    {{-- -------------------------------------------- --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="remainder" class="col-form-label">Remainder</label>
                            <select disabled id="remainder" class="form-control" name="remainder">
                                <option value="" selected>Select an option</option>
                                <option value="1" {{ $entry->remainder == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $entry->remainder == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="township" class="col-form-label">Township</label>
                            <input readonly id="township" type="text" class="form-control" name="township" value="{{ $entry->township }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="extension" class="col-form-label">Extension</label>
                            <input readonly id="extension" type="text" class="form-control" name="extension" value="{{ $entry->extension }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="unit_number" class="col-form-label">Unit Number</label>
                            <input readonly id="unit_number" type="text" class="form-control" name="unit_number" value="{{ $entry->unit_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="scheme_name" class="col-form-label">Scheme Name</label>
                            <input readonly id="scheme_name" type="text" class="form-control" name="scheme_name" value="{{ $entry->scheme_name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="scheme_number" class="col-form-label">Scheme Number</label>
                            <input readonly id="scheme_number" type="text" class="form-control" name="scheme_number" value="{{ $entry->scheme_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="portion_of_portion" class="col-form-label">Portion of Portion</label>
                            <input readonly id="portion_of_portion" type="text" class="form-control" name="portion_of_portion" value="{{ $entry->portion_of_portion }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="farm_name" class="col-form-label">Farm Name</label>
                            <input readonly id="farm_name" type="text" class="form-control" name="farm_name" value="{{ $entry->farm_name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="farm_number" class="col-form-label">Farm Number</label>
                            <input readonly id="farm_number" type="text" class="form-control" name="farm_number" value="{{ $entry->farm_number }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="agricultural_holding_name" class="col-form-label">Agricultural Holding Name</label>
                            <input readonly id="agricultural_holding_name" type="text" class="form-control" name="agricultural_holding_name" value="{{ $entry->agricultural_holding_name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="agricultural_holding_number" class="col-form-label">Agricultural Holding Number</label>
                            <input readonly id="agricultural_holding_number" type="text" class="form-control" name="agricultural_holding_number" value="{{ $entry->agricultural_holding_number }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_number" class="col-form-label">Site Number</label>
                            <input readonly id="site_number" type="text" class="form-control" name="site_number" value="{{ $entry->site_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="community" class="col-form-label">Community</label>
                            <input readonly id="community" type="text" class="form-control" name="community" value="{{ $entry->community }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chief" class="col-form-label">Chief</label>
                            <input readonly id="chief" type="text" class="form-control" name="chief" value="{{ $entry->chief }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="registration_division" class="col-form-label">Registration Division</label>
                            <input readonly id="registration_division" type="text" class="form-control" name="registration_division" value="{{ $entry->registration_division }}">
                        </div>
                    </div>

                <a href="{{url('admin/entry/edit',$entry->id)}}">
                <button type="button" class="btn btn-primary mt-3">Edit Entry</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
