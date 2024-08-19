@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Update Entry</h5>
                <div class="card-body">
                    <form method="post" action="{{url('admin/entry/update')}}">
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$entry->id}}">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="project_lac_no" class="col-form-label">Project LAC No *</label>
                                <input id="project_lac_no" type="text" class="form-control" name="project_lac_no" value="{{ $entry->project_lac_no ? $entry->project_lac_no : 'N/A'}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_description" class="col-form-label">Project Description *</label>
                                <textarea id="project_description" class="form-control" name="project_description" rows="4" required>{{ $entry->project_description ? $entry->project_description : 'N/A' }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="region" class="col-form-label">Region *</label>
                                {{-- <input id="region" type="text" class="form-control" name="region" value="{{ $entry->region ? $entry->region : 'N/A' }}" required> --}}
                                <select id="region" class="form-control" name="region" required>
                                    <option value="" {{ $entry->region == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Eastern" {{ $entry->region == 'Eastern' ? 'selected' : '' }}>Eastern</option>
                                    <option value="Northern" {{ $entry->region == 'Northern' ? 'selected' : '' }}>Northern</option>
                                    <option value="Southern" {{ $entry->region == 'Southern' ? 'selected' : '' }}>Southern</option>
                                    <option value="Tribal" {{ $entry->region == 'Tribal' ? 'selected' : '' }}>Tribal</option>
                                    <option value="Wastern" {{ $entry->region == 'Wastern' ? 'selected' : '' }}>Wastern</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_phase" class="col-form-label">Project Phase *</label>
                                {{-- <input id="project_phase" type="text" class="form-control" name="project_phase" value="{{ $entry->project_phase ? $entry->project_phase : 'N/A' }}" required> --}}
                                <select id="project_phase" class="form-control" name="project_phase" required>
                                    <option value="" {{ $entry->project_phase == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Phase 1" {{ $entry->project_phase == 'Phase 1' ? 'selected' : '' }}>Phase 1</option>
                                    <option value="Phase 2" {{ $entry->project_phase == 'Phase 2' ? 'selected' : '' }}>Phase 2</option>
                                    <option value="Phase 3" {{ $entry->project_phase == 'Phase 3' ? 'selected' : '' }}>Phase 3</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="proceed" class="col-form-label">Proceed *</label>
                                {{-- <input id="proceed" type="text" class="form-control" name="proceed" value="{{ $entry->proceed ? $entry->proceed : 'N/A' }}" required> --}}
                                <select id="proceed" class="form-control" name="proceed" required>
                                    <option value="" {{ $entry->proceed == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Blue" {{ $entry->proceed == 'Blue' ? 'selected' : '' }}>Blue</option>
                                    <option value="Green" {{ $entry->proceed == 'Green' ? 'selected' : '' }}>Green</option>
                                    <option value="Orange" {{ $entry->proceed == 'Orange' ? 'selected' : '' }}>Orange</option>
                                    <option value="Red" {{ $entry->proceed == 'Red' ? 'selected' : '' }}>Red</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="case_file_no" class="col-form-label">Case File No *</label>
                                <input id="case_file_no" type="text" class="form-control" name="case_file_no" value="{{ $entry->case_file_no ? $entry->case_file_no : 'N/A' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="diagram_no" class="col-form-label">Diagram No *</label>
                                <input id="diagram_no" type="text" class="form-control" name="diagram_no" value="{{ $entry->diagram_no ? $entry->diagram_no : 'N/A' }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="diagram_status" class="col-form-label">Diagram Status *</label>
                                {{-- <input id="diagram_status" type="text" class="form-control" name="diagram_status" value="{{ $entry->diagram_status ? $entry->diagram_status : 'N/A' }}" required> --}}
                                <select id="diagram_status" class="form-control" name="diagram_status" required>
                                    <option value="" {{ $entry->diagram_status == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Approved" {{ $entry->diagram_status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="Cancelled" {{ $entry->diagram_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="On Hold" {{ $entry->diagram_status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                    <option value="To Be Cancelled" {{ $entry->diagram_status == 'To Be Cancelled' ? 'selected' : '' }}>To Be Cancelled</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquisition_status" class="col-form-label">Acquisition Status *</label>
                                {{-- <input id="acquisition_status" type="text" class="form-control" name="acquisition_status" value="{{ $entry->acquisition_status ? $entry->acquisition_status : 'N/A' }}" required> --}}
                                <select id="acquisition_status" class="form-control" name="acquisition_status" required>
                                    <option value="" {{ $entry->acquisition_status == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Active" {{ $entry->acquisition_status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Cancelled" {{ $entry->acquisition_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="Completed" {{ $entry->acquisition_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="On Hold" {{ $entry->acquisition_status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                    <option value="To Be Cancelled" {{ $entry->acquisition_status == 'To Be Cancelled' ? 'selected' : '' }}>To Be Cancelled</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="spatial_atlas_status" class="col-form-label">Spatial Atlas Status *</label>
                                {{-- <input id="spatial_atlas_status" type="text" class="form-control" name="spatial_atlas_status" value="{{ $entry->spatial_atlas_status ? $entry->spatial_atlas_status : 'N/A' }}" required> --}}
                                <select id="spatial_atlas_status" class="form-control" name="spatial_atlas_status" required>
                                    <option value="" {{ $entry->spatial_atlas_status == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Active" {{ $entry->spatial_atlas_status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Cancelled" {{ $entry->spatial_atlas_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="Completed" {{ $entry->spatial_atlas_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="Expropriation" {{ $entry->spatial_atlas_status == 'Expropriation' ? 'selected' : '' }}>Expropriation</option>
                                    <option value="Expropriation by Agreement" {{ $entry->spatial_atlas_status == 'Expropriation by Agreement' ? 'selected' : '' }}>Expropriation by Agreement</option>
                                    <option value="Municipal" {{ $entry->spatial_atlas_status == 'Municipal' ? 'selected' : '' }}>Municipal</option>
                                    <option value="On Hold" {{ $entry->spatial_atlas_status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                    <option value="Other" {{ $entry->spatial_atlas_status == 'Other' ? 'selected' : '' }}>Other</option>
                                    <option value="Permission to Occupy" {{ $entry->spatial_atlas_status == 'Permission to Occupy' ? 'selected' : '' }}>Permission to Occupy</option>
                                    <option value="RSA" {{ $entry->spatial_atlas_status == 'RSA' ? 'selected' : '' }}>RSA</option>
                                    <option value="Signed" {{ $entry->spatial_atlas_status == 'Signed' ? 'selected' : '' }}>Signed</option>
                                    <option value="To be Cancelled" {{ $entry->spatial_atlas_status == 'To be Cancelled' ? 'selected' : '' }}>To be Cancelled</option>
                                    <option value="Transnet" {{ $entry->spatial_atlas_status == 'Transnet' ? 'selected' : '' }}>Transnet</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_approval" class="col-form-label">Date of Approval</label>
                                <input id="date_of_approval" type="date" class="form-control" name="date_of_approval" value="{{ $entry->date_of_approval ? $entry->date_of_approval : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="received_diagram_instruction_via_pims" class="col-form-label">Received Diagram Instruction via PIMS</label>
                                <input id="received_diagram_instruction_via_pims" type="date" class="form-control" name="received_diagram_instruction_via_pims" value="{{ $entry->received_diagram_instruction_via_pims ? $entry->received_diagram_instruction_via_pims : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="cancellation_date" class="col-form-label">Cancellation Date</label>
                                <input id="cancellation_date" type="date" class="form-control" name="cancellation_date" value="{{ $entry->cancellation_date ? $entry->cancellation_date : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cancellation_reason" class="col-form-label">Cancellation Reason</label>
                                <input id="cancellation_reason" type="text" class="form-control" name="cancellation_reason" value="{{ $entry->cancellation_reason ? $entry->cancellation_reason : 'N/A' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="on_hold_date" class="col-form-label">On Hold Date</label>
                                <input id="on_hold_date" type="date" class="form-control" name="on_hold_date" value="{{ $entry->on_hold_date ? $entry->on_hold_date : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="on_hold_reason" class="col-form-label">On Hold Reason</label>
                                <input id="on_hold_reason" type="text" class="form-control" name="on_hold_reason" value="{{ $entry->on_hold_reason ? $entry->on_hold_reason : 'N/A' }}">
                            </div>
                        </div>
                        {{-- -------------------------------------- --}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="relocation" class="col-form-label">Relocation</label>
                                {{-- <input id="relocation" type="text" class="form-control" name="relocation" value="{{ $entry->relocation ? $entry->relocation : '' }}"> --}}
                                <select id="relocation" class="form-control" name="relocation">
                                    <option value="" {{ $entry->relocation == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Beneficiary Owned" {{ $entry->relocation == 'Beneficiary Owned' ? 'selected' : '' }}>Beneficiary Owned</option>
                                    <option value="Offsite" {{ $entry->relocation == 'Offsite' ? 'selected' : '' }}>Offsite</option>
                                    <option value="Same Site" {{ $entry->relocation == 'Same Site' ? 'selected' : '' }}>Same Site</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                                <input id="linked_to_diagram" type="text" class="form-control" name="linked_to_diagram" value="{{ $entry->linked_to_diagram ? $entry->linked_to_diagram : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_1" class="col-form-label">Owner Type 1 *</label>
                                {{-- <input id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ $entry->owner_type_1 ? $entry->owner_type_1 : '' }}" required> --}}
                                <select id="owner_type_1" class="form-control" name="owner_type_1" required>
                                    <option value="" {{ $entry->owner_type_1 == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Corporate" {{ $entry->owner_type_1 == 'Corporate' ? 'selected' : '' }}>Corporate</option>
                                    <option value="Municipal" {{ $entry->owner_type_1 == 'Municipal' ? 'selected' : '' }}>Municipal</option>
                                    <option value="Private" {{ $entry->owner_type_1 == 'Private' ? 'selected' : '' }}>Private</option>
                                    <option value="Provincial Government Public Works (PGPW)" {{ $entry->owner_type_1 == 'Provincial Government Public Works (PGPW)' ? 'selected' : '' }}>Provincial Government Public Works (PGPW)</option>
                                    <option value="RSA" {{ $entry->owner_type_1 == 'RSA' ? 'selected' : '' }}>RSA</option>
                                    <option value="RSA - Department Public Works (DPW)" {{ $entry->owner_type_1 == 'RSA - Department Public Works (DPW)' ? 'selected' : '' }}>RSA - Department Public Works (DPW)</option>
                                    <option value="RSA - Department Rural Development and Land Reform (DRDLR)" {{ $entry->owner_type_1 == 'RSA - Department Rural Development and Land Reform (DRDLR)' ? 'selected' : '' }}>RSA - Department Rural Development and Land Reform (DRDLR)</option>
                                    <option value="State Owned Company" {{ $entry->owner_type_1 == 'State Owned Company' ? 'selected' : '' }}>State Owned Company</option>
                                    <option value="Transnet" {{ $entry->owner_type_1 == 'Transnet' ? 'selected' : '' }}>Transnet</option>
                                    <option value="Tribal" {{ $entry->owner_type_1 == 'Tribal' ? 'selected' : '' }}>Tribal</option>
                                    <option value="Trust" {{ $entry->owner_type_1 == 'Trust' ? 'selected' : '' }}>Trust</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_1" class="col-form-label">Owner 1 *</label>
                                <input id="owner_1" type="text" class="form-control" name="owner_1" value="{{ $entry->owner_1 ? $entry->owner_1 : '' }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                                {{-- <input id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ $entry->owner_type_2 ? $entry->owner_type_2 : '' }}"> --}}
                                <select id="owner_type_2" class="form-control" name="owner_type_2">
                                    <option value="" {{ $entry->owner_type_2 == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Anna Hermiena Myburgh" {{ $entry->owner_type_2 == 'Anna Hermiena Myburgh' ? 'selected' : '' }}>Anna Hermiena Myburgh</option>
                                    <option value="Anna Josina Osborne" {{ $entry->owner_type_2 == 'Anna Josina Osborne' ? 'selected' : '' }}>Anna Josina Osborne</option>
                                    <option value="Annalize Knell" {{ $entry->owner_type_2 == 'Annalize Knell' ? 'selected' : '' }}>Annalize Knell</option>
                                    <option value="Benni (Current Occupant) Botha" {{ $entry->owner_type_2 == 'Benni (Current Occupant) Botha' ? 'selected' : '' }}>Benni (Current Occupant) Botha</option>
                                    <option value="Bethshiva Mosiya Kgatuke" {{ $entry->owner_type_2 == 'Bethshiva Mosiya Kgatuke' ? 'selected' : '' }}>Bethshiva Mosiya Kgatuke</option>
                                    <option value="Bongile Ndilele" {{ $entry->owner_type_2 == 'Bongile Ndilele' ? 'selected' : '' }}>Bongile Ndilele</option>
                                    <option value="Brian Moyo" {{ $entry->owner_type_2 == 'Brian Moyo' ? 'selected' : '' }}>Brian Moyo</option>
                                    <option value="CJ van der Vuyver Trust" {{ $entry->owner_type_2 == 'CJ van der Vuyver Trust' ? 'selected' : '' }}>CJ van der Vuyver Trust</option>
                                    <option value="Daniel Makhubela" {{ $entry->owner_type_2 == 'Daniel Makhubela' ? 'selected' : '' }}>Daniel Makhubela</option>
                                    <option value="Desana Batabo" {{ $entry->owner_type_2 == 'Desana Batabo' ? 'selected' : '' }}>Desana Batabo</option>
                                    <option value="Dion Fourie" {{ $entry->owner_type_2 == 'Dion Fourie' ? 'selected' : '' }}>Dion Fourie</option>
                                    <option value="Edward Motilene" {{ $entry->owner_type_2 == 'Edward Motilene' ? 'selected' : '' }}>Edward Motilene</option>
                                    <option value="Eleanor Ntombana Majali" {{ $entry->owner_type_2 == 'Eleanor Ntombana Majali' ? 'selected' : '' }}>Eleanor Ntombana Majali</option>
                                    <option value="Elsie Aletta Van Den Berg" {{ $entry->owner_type_2 == 'Elsie Aletta Van Den Berg' ? 'selected' : '' }}>Elsie Aletta Van Den Berg</option>
                                    <option value="Emofu Trading" {{ $entry->owner_type_2 == 'Emofu Trading' ? 'selected' : '' }}>Emofu Trading</option>
                                    <option value="Emwly Makhafola" {{ $entry->owner_type_2 == 'Emwly Makhafola' ? 'selected' : '' }}>Emwly Makhafola</option>
                                    <option value="Felicity Nortier" {{ $entry->owner_type_2 == 'Felicity Nortier' ? 'selected' : '' }}>Felicity Nortier</option>
                                    <option value="Frans Khoza" {{ $entry->owner_type_2 == 'Frans Khoza' ? 'selected' : '' }}>Frans Khoza</option>
                                    <option value="Gamase Eliza Matoti" {{ $entry->owner_type_2 == 'Gamase Eliza Matoti' ? 'selected' : '' }}>Gamase Eliza Matoti</option>
                                    <option value="Hendrik Abraham Van Vuuren" {{ $entry->owner_type_2 == 'Hendrik Abraham Van Vuuren' ? 'selected' : '' }}>Hendrik Abraham Van Vuuren</option>
                                    <option value="Hillside Trust" {{ $entry->owner_type_2 == 'Hillside Trust' ? 'selected' : '' }}>Hillside Trust</option>
                                    <option value="Irene Nokulunga Mdebele" {{ $entry->owner_type_2 == 'Irene Nokulunga Mdebele' ? 'selected' : '' }}>Irene Nokulunga Mdebele</option>
                                    <option value="Isaac Dinisa" {{ $entry->owner_type_2 == 'Isaac Dinisa' ? 'selected' : '' }}>Isaac Dinisa</option>
                                    <option value="Jacoba Johanna Vermaak" {{ $entry->owner_type_2 == 'Jacoba Johanna Vermaak' ? 'selected' : '' }}>Jacoba Johanna Vermaak</option>
                                    <option value="Jan Resemat Lebisi" {{ $entry->owner_type_2 == 'Jan Resemat Lebisi' ? 'selected' : '' }}>Jan Resemat Lebisi</option>
                                    <option value="Jan Willemse" {{ $entry->owner_type_2 == 'Jan Willemse' ? 'selected' : '' }}>Jan Willemse</option>
                                    <option value="Johan Lombaard" {{ $entry->owner_type_2 == 'Johan Lombaard' ? 'selected' : '' }}>Johan Lombaard</option>
                                    <option value="John Khoza" {{ $entry->owner_type_2 == 'John Khoza' ? 'selected' : '' }}>John Khoza</option>
                                    <option value="Lunga Larrington Madolo" {{ $entry->owner_type_2 == 'Lunga Larrington Madolo' ? 'selected' : '' }}>Lunga Larrington Madolo</option>
                                    <option value="Lynda Carol Fischer" {{ $entry->owner_type_2 == 'Lynda Carol Fischer' ? 'selected' : '' }}>Lynda Carol Fischer</option>
                                    <option value="Mark Dorning" {{ $entry->owner_type_2 == 'Mark Dorning' ? 'selected' : '' }}>Mark Dorning</option>
                                    <option value="Mealies Ngqula" {{ $entry->owner_type_2 == 'Mealies Ngqula' ? 'selected' : '' }}>Mealies Ngqula</option>
                                    <option value="Mercy Nomazwe Nomvume Socikwa" {{ $entry->owner_type_2 == 'Mercy Nomazwe Nomvume Socikwa' ? 'selected' : '' }}>Mercy Nomazwe Nomvume Socikwa</option>
                                    <option value="Mziwenceba Makalima" {{ $entry->owner_type_2 == 'Mziwenceba Makalima' ? 'selected' : '' }}>Mziwenceba Makalima</option>
                                    <option value="Nandipha Bashe" {{ $entry->owner_type_2 == 'Nandipha Bashe' ? 'selected' : '' }}>Nandipha Bashe</option>
                                    <option value="Nkosikhona Enoch Dyantyi" {{ $entry->owner_type_2 == 'Nkosikhona Enoch Dyantyi' ? 'selected' : '' }}>Nkosikhona Enoch Dyantyi</option>
                                    <option value="Nokwanda Gloria Gomana" {{ $entry->owner_type_2 == 'Nokwanda Gloria Gomana' ? 'selected' : '' }}>Nokwanda Gloria Gomana</option>
                                    <option value="Nolubabalo Nakani" {{ $entry->owner_type_2 == 'Nolubabalo Nakani' ? 'selected' : '' }}>Nolubabalo Nakani</option>
                                    <option value="Nolwando Sifile" {{ $entry->owner_type_2 == 'Nolwando Sifile' ? 'selected' : '' }}>Nolwando Sifile</option>
                                    <option value="Nomasomi Matanzima" {{ $entry->owner_type_2 == 'Nomasomi Matanzima' ? 'selected' : '' }}>Nomasomi Matanzima</option>
                                    <option value="Nonceba Ohelumbona" {{ $entry->owner_type_2 == 'Nonceba Ohelumbona' ? 'selected' : '' }}>Nonceba Ohelumbona</option>
                                    <option value="Nonceba Patricia Jalile" {{ $entry->owner_type_2 == 'Nonceba Patricia Jalile' ? 'selected' : '' }}>Nonceba Patricia Jalile</option>
                                    <option value="Nontlupheko Maria Nyawalu" {{ $entry->owner_type_2 == 'Nontlupheko Maria Nyawalu' ? 'selected' : '' }}>Nontlupheko Maria Nyawalu</option>
                                    <option value="Nontlupheko Maria Nyawula" {{ $entry->owner_type_2 == 'Nontlupheko Maria Nyawula' ? 'selected' : '' }}>Nontlupheko Maria Nyawula</option>
                                    <option value="Nthabiseng Khosa" {{ $entry->owner_type_2 == 'Nthabiseng Khosa' ? 'selected' : '' }}>Nthabiseng Khosa</option>
                                    <option value="Ntombodidi Cynthia Gomo" {{ $entry->owner_type_2 == 'Ntombodidi Cynthia Gomo' ? 'selected' : '' }}>Ntombodidi Cynthia Gomo</option>
                                    <option value="Opal Patricia Desiree Welcome" {{ $entry->owner_type_2 == 'Opal Patricia Desiree Welcome' ? 'selected' : '' }}>Opal Patricia Desiree Welcome</option>
                                    <option value="Simisonke Matoti" {{ $entry->owner_type_2 == 'Simisonke Matoti' ? 'selected' : '' }}>Simisonke Matoti</option>
                                    <option value="Surprise Mkhubela" {{ $entry->owner_type_2 == 'Surprise Mkhubela' ? 'selected' : '' }}>Surprise Mkhubela</option>
                                    <option value="Thabo Mokidikitla" {{ $entry->owner_type_2 == 'Thabo Mokidikitla' ? 'selected' : '' }}>Thabo Mokidikitla</option>
                                    <option value="Thandi Nkhona" {{ $entry->owner_type_2 == 'Thandi Nkhona' ? 'selected' : '' }}>Thandi Nkhona</option>
                                    <option value="Thapelo Matjebela" {{ $entry->owner_type_2 == 'Thapelo Matjebela' ? 'selected' : '' }}>Thapelo Matjebela</option>
                                    <option value="Thelma Nontando Kunene" {{ $entry->owner_type_2 == 'Thelma Nontando Kunene' ? 'selected' : '' }}>Thelma Nontando Kunene</option>
                                    <option value="Thenjiswa Ndlebe" {{ $entry->owner_type_2 == 'Thenjiswa Ndlebe' ? 'selected' : '' }}>Thenjiswa Ndlebe</option>
                                    <option value="Thomas Yingwane Baloyi" {{ $entry->owner_type_2 == 'Thomas Yingwane Baloyi' ? 'selected' : '' }}>Thomas Yingwane Baloyi</option>
                                    <option value="Van Der Vyver CJ Trust" {{ $entry->owner_type_2 == 'Van Der Vyver CJ Trust' ? 'selected' : '' }}>Van Der Vyver CJ Trust</option>
                                    <option value="Zanele Mhlongo" {{ $entry->owner_type_2 == 'Zanele Mhlongo' ? 'selected' : '' }}>Zanele Mhlongo</option>
                                    <option value="Zingisile Nocholus Fambaza" {{ $entry->owner_type_2 == 'Zingisile Nocholus Fambaza' ? 'selected' : '' }}>Zingisile Nocholus Fambaza</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_2" class="col-form-label">Owner 2</label>
                                <input id="owner_2" type="text" class="form-control" name="owner_2" value="{{ $entry->owner_2 ? $entry->owner_2 : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                                {{-- <input id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ $entry->owner_type_3 ? $entry->owner_type_3 : '' }}"> --}}
                                <select id="owner_type_3" class="form-control" name="owner_type_3">
                                    <option value="" {{ $entry->owner_type_3 == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Private" {{ $entry->owner_type_3 == 'Private' ? 'selected' : '' }}>Private</option>
                                    <option value="Tribal" {{ $entry->owner_type_3 == 'Tribal' ? 'selected' : '' }}>Tribal</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_3" class="col-form-label">Owner 3</label>
                                {{-- <input id="owner_3" type="text" class="form-control" name="owner_3" value="{{ $entry->owner_3 ? $entry->owner_3 : '' }}"> --}}
                                <select id="owner_3" class="form-control" name="owner_3">
                                    <option value="" {{ $entry->owner_3 == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Barbara Magdalena Louw van der Merwe" {{ $entry->owner_3 == 'Barbara Magdalena Louw van der Merwe' ? 'selected' : '' }}>Barbara Magdalena Louw van der Merwe</option>
                                    <option value="Gamase Eliza Matoti" {{ $entry->owner_3 == 'Gamase Eliza Matoti' ? 'selected' : '' }}>Gamase Eliza Matoti</option>
                                    <option value="Prescilla Malema" {{ $entry->owner_3 == 'Prescilla Malema' ? 'selected' : '' }}>Prescilla Malema</option>
                                    <option value="Stanley Dabulamanzi Mnyataza" {{ $entry->owner_3 == 'Stanley Dabulamanzi Mnyataza' ? 'selected' : '' }}>Stanley Dabulamanzi Mnyataza</option>
                                    <option value="Zoleka Nkewu" {{ $entry->owner_3 == 'Zoleka Nkewu' ? 'selected' : '' }}>Zoleka Nkewu</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="valuer" class="col-form-label">Valuer</label>
                                {{-- <input id="valuer" type="text" class="form-control" name="valuer" value="{{ $entry->valuer ? $entry->valuer : '' }}"> --}}
                                <select id="valuer" class="form-control" name="valuer">
                                    <option value="" {{ $entry->valuer == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Amandla Dotwana" {{ $entry->valuer == 'Amandla Dotwana' ? 'selected' : '' }}>Amandla Dotwana</option>
                                    <option value="Anne-Marie Botha" {{ $entry->valuer == 'Anne-Marie Botha' ? 'selected' : '' }}>Anne-Marie Botha</option>
                                    <option value="Bill Collatz" {{ $entry->valuer == 'Bill Collatz' ? 'selected' : '' }}>Bill Collatz</option>
                                    <option value="Brian Mncube" {{ $entry->valuer == 'Brian Mncube' ? 'selected' : '' }}>Brian Mncube</option>
                                    <option value="Byron van Niekerk" {{ $entry->valuer == 'Byron van Niekerk' ? 'selected' : '' }}>Byron van Niekerk</option>
                                    <option value="Chris Scholtz" {{ $entry->valuer == 'Chris Scholtz' ? 'selected' : '' }}>Chris Scholtz</option>
                                    <option value="Christiaan Winckler" {{ $entry->valuer == 'Christiaan Winckler' ? 'selected' : '' }}>Christiaan Winckler</option>
                                    <option value="David Speier" {{ $entry->valuer == 'David Speier' ? 'selected' : '' }}>David Speier</option>
                                    <option value="Dean Wilson" {{ $entry->valuer == 'Dean Wilson' ? 'selected' : '' }}>Dean Wilson</option>
                                    <option value="Dianne de Wet" {{ $entry->valuer == 'Dianne de Wet' ? 'selected' : '' }}>Dianne de Wet</option>
                                    <option value="dm lukhozi" {{ $entry->valuer == 'dm lukhozi' ? 'selected' : '' }}>dm lukhozi</option>
                                    <option value="DW Lombard" {{ $entry->valuer == 'DW Lombard' ? 'selected' : '' }}>DW Lombard</option>
                                    <option value="George Georgiades" {{ $entry->valuer == 'George Georgiades' ? 'selected' : '' }}>George Georgiades</option>
                                    <option value="Haneef Sarkhot" {{ $entry->valuer == 'Haneef Sarkhot' ? 'selected' : '' }}>Haneef Sarkhot</option>
                                    <option value="Hashim Variawa" {{ $entry->valuer == 'Hashim Variawa' ? 'selected' : '' }}>Hashim Variawa</option>
                                    <option value="Heinrich Steenberg" {{ $entry->valuer == 'Heinrich Steenberg' ? 'selected' : '' }}>Heinrich Steenberg</option>
                                    <option value="Hennie Wybenga" {{ $entry->valuer == 'Hennie Wybenga' ? 'selected' : '' }}>Hennie Wybenga</option>
                                    <option value="Henry Inocco" {{ $entry->valuer == 'Henry Inocco' ? 'selected' : '' }}>Henry Inocco</option>
                                    <option value="Ilali Admin" {{ $entry->valuer == 'Ilali Admin' ? 'selected' : '' }}>Ilali Admin</option>
                                    <option value="Johan Klopper" {{ $entry->valuer == 'Johan Klopper' ? 'selected' : '' }}>Johan Klopper</option>
                                    <option value="Kholofelo Monama" {{ $entry->valuer == 'Kholofelo Monama' ? 'selected' : '' }}>Kholofelo Monama</option>
                                    <option value="Kobus de Villiers" {{ $entry->valuer == 'Kobus de Villiers' ? 'selected' : '' }}>Kobus de Villiers</option>
                                    <option value="Lebogang Kgaditsi" {{ $entry->valuer == 'Lebogang Kgaditsi' ? 'selected' : '' }}>Lebogang Kgaditsi</option>
                                    <option value="Lekhotla Nakanyane" {{ $entry->valuer == 'Lekhotla Nakanyane' ? 'selected' : '' }}>Lekhotla Nakanyane</option>
                                    <option value="Leon Stander" {{ $entry->valuer == 'Leon Stander' ? 'selected' : '' }}>Leon Stander</option>
                                    <option value="Llaai Ntsoane" {{ $entry->valuer == 'Llaai Ntsoane' ? 'selected' : '' }}>Llaai Ntsoane</option>
                                    <option value="Luyanda Mehlomakhulu" {{ $entry->valuer == 'Luyanda Mehlomakhulu' ? 'selected' : '' }}>Luyanda Mehlomakhulu</option>
                                    <option value="Macdonald Modibedi" {{ $entry->valuer == 'Macdonald Modibedi' ? 'selected' : '' }}>Macdonald Modibedi</option>
                                    <option value="Mbekezeli Sibanda" {{ $entry->valuer == 'Mbekezeli Sibanda' ? 'selected' : '' }}>Mbekezeli Sibanda</option>
                                    <option value="mbonisi masuku" {{ $entry->valuer == 'mbonisi masuku' ? 'selected' : '' }}>mbonisi masuku</option>
                                    <option value="Michael Sibanda" {{ $entry->valuer == 'Michael Sibanda' ? 'selected' : '' }}>Michael Sibanda</option>
                                    <option value="Nkanyiso Dhlamini" {{ $entry->valuer == 'Nkanyiso Dhlamini' ? 'selected' : '' }}>Nkanyiso Dhlamini</option>
                                    <option value="OOS OOS" {{ $entry->valuer == 'OOS OOS' ? 'selected' : '' }}>OOS OOS</option>
                                    <option value="Property Management" {{ $entry->valuer == 'Property Management' ? 'selected' : '' }}>Property Management</option>
                                    <option value="Ronnie Henderson" {{ $entry->valuer == 'Ronnie Henderson' ? 'selected' : '' }}>Ronnie Henderson</option>
                                    <option value="Settlement Solutions" {{ $entry->valuer == 'Settlement Solutions' ? 'selected' : '' }}>Settlement Solutions</option>
                                    <option value="Siphe Mgcaleka" {{ $entry->valuer == 'Siphe Mgcaleka' ? 'selected' : '' }}>Siphe Mgcaleka</option>
                                    <option value="Susan Turner" {{ $entry->valuer == 'Susan Turner' ? 'selected' : '' }}>Susan Turner</option>
                                    <option value="Tanya Herholdt" {{ $entry->valuer == 'Tanya Herholdt' ? 'selected' : '' }}>Tanya Herholdt</option>
                                    <option value="Thapelo Mhlanga" {{ $entry->valuer == 'Thapelo Mhlanga' ? 'selected' : '' }}>Thapelo Mhlanga</option>
                                    <option value="Theuns Myburgh" {{ $entry->valuer == 'Theuns Myburgh' ? 'selected' : '' }}>Theuns Myburgh</option>
                                    <option value="Tinus Geyser" {{ $entry->valuer == 'Tinus Geyser' ? 'selected' : '' }}>Tinus Geyser</option>
                                    <option value="Valuer Test" {{ $entry->valuer == 'Valuer Test' ? 'selected' : '' }}>Valuer Test</option>
                                    <option value="Vusi Mdwara" {{ $entry->valuer == 'Vusi Mdwara' ? 'selected' : '' }}>Vusi Mdwara</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="negotiator" class="col-form-label">Negotiator</label>
                                {{-- <input id="negotiator" type="text" class="form-control" name="negotiator" value="{{ $entry->negotiator ? $entry->negotiator : '' }}"> --}}
                                <select id="negotiator" class="form-control" name="negotiator">
                                    <option value="" {{ $entry->negotiator == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Amandla Dotwana" {{ $entry->negotiator == 'Amandla Dotwana' ? 'selected' : '' }}>Amandla Dotwana</option>
                                    <option value="Anne-Marie Botha" {{ $entry->negotiator == 'Anne-Marie Botha' ? 'selected' : '' }}>Anne-Marie Botha</option>
                                    <option value="Bill Collatz" {{ $entry->negotiator == 'Bill Collatz' ? 'selected' : '' }}>Bill Collatz</option>
                                    <option value="Brian Mncube" {{ $entry->negotiator == 'Brian Mncube' ? 'selected' : '' }}>Brian Mncube</option>
                                    <option value="Byron van Niekerk" {{ $entry->negotiator == 'Byron van Niekerk' ? 'selected' : '' }}>Byron van Niekerk</option>
                                    <option value="Chris Scholtz" {{ $entry->negotiator == 'Chris Scholtz' ? 'selected' : '' }}>Chris Scholtz</option>
                                    <option value="Christiaan Winckler" {{ $entry->negotiator == 'Christiaan Winckler' ? 'selected' : '' }}>Christiaan Winckler</option>
                                    <option value="David Speier" {{ $entry->negotiator == 'David Speier' ? 'selected' : '' }}>David Speier</option>
                                    <option value="Dean Wilson" {{ $entry->negotiator == 'Dean Wilson' ? 'selected' : '' }}>Dean Wilson</option>
                                    <option value="Dianne de Wet" {{ $entry->negotiator == 'Dianne de Wet' ? 'selected' : '' }}>Dianne de Wet</option>
                                    <option value="dm lukhozi" {{ $entry->negotiator == 'dm lukhozi' ? 'selected' : '' }}>dm lukhozi</option>
                                    <option value="DW Lombard" {{ $entry->negotiator == 'DW Lombard' ? 'selected' : '' }}>DW Lombard</option>
                                    <option value="George Georgiades" {{ $entry->negotiator == 'George Georgiades' ? 'selected' : '' }}>George Georgiades</option>
                                    <option value="Haneef Sarkhot" {{ $entry->negotiator == 'Haneef Sarkhot' ? 'selected' : '' }}>Haneef Sarkhot</option>
                                    <option value="Hashim Variawa" {{ $entry->negotiator == 'Hashim Variawa' ? 'selected' : '' }}>Hashim Variawa</option>
                                    <option value="Heinrich Steenberg" {{ $entry->negotiator == 'Heinrich Steenberg' ? 'selected' : '' }}>Heinrich Steenberg</option>
                                    <option value="Hennie Wybenga" {{ $entry->negotiator == 'Hennie Wybenga' ? 'selected' : '' }}>Hennie Wybenga</option>
                                    <option value="Henry Inocco" {{ $entry->negotiator == 'Henry Inocco' ? 'selected' : '' }}>Henry Inocco</option>
                                    <option value="Ilali Admin" {{ $entry->negotiator == 'Ilali Admin' ? 'selected' : '' }}>Ilali Admin</option>
                                    <option value="Johan Klopper" {{ $entry->negotiator == 'Johan Klopper' ? 'selected' : '' }}>Johan Klopper</option>
                                    <option value="Kholofelo Monama" {{ $entry->negotiator == 'Kholofelo Monama' ? 'selected' : '' }}>Kholofelo Monama</option>
                                    <option value="Kobus de Villiers" {{ $entry->negotiator == 'Kobus de Villiers' ? 'selected' : '' }}>Kobus de Villiers</option>
                                    <option value="Lebogang Kgaditsi" {{ $entry->negotiator == 'Lebogang Kgaditsi' ? 'selected' : '' }}>Lebogang Kgaditsi</option>
                                    <option value="Lekhotla Nakanyane" {{ $entry->negotiator == 'Lekhotla Nakanyane' ? 'selected' : '' }}>Lekhotla Nakanyane</option>
                                    <option value="Leon Stander" {{ $entry->negotiator == 'Leon Stander' ? 'selected' : '' }}>Leon Stander</option>
                                    <option value="Llaai Ntsoane" {{ $entry->negotiator == 'Llaai Ntsoane' ? 'selected' : '' }}>Llaai Ntsoane</option>
                                    <option value="Luyanda Mehlomakhulu" {{ $entry->negotiator == 'Luyanda Mehlomakhulu' ? 'selected' : '' }}>Luyanda Mehlomakhulu</option>
                                    <option value="Macdonald Modibedi" {{ $entry->negotiator == 'Macdonald Modibedi' ? 'selected' : '' }}>Macdonald Modibedi</option>
                                    <option value="Mbekezeli Sibanda" {{ $entry->negotiator == 'Mbekezeli Sibanda' ? 'selected' : '' }}>Mbekezeli Sibanda</option>
                                    <option value="mbonisi masuku" {{ $entry->negotiator == 'mbonisi masuku' ? 'selected' : '' }}>mbonisi masuku</option>
                                    <option value="Michael Sibanda" {{ $entry->negotiator == 'Michael Sibanda' ? 'selected' : '' }}>Michael Sibanda</option>
                                    <option value="Nkanyiso Dhlamini" {{ $entry->negotiator == 'Nkanyiso Dhlamini' ? 'selected' : '' }}>Nkanyiso Dhlamini</option>
                                    <option value="OOS OOS" {{ $entry->negotiator == 'OOS OOS' ? 'selected' : '' }}>OOS OOS</option>
                                    <option value="Property Management" {{ $entry->negotiator == 'Property Management' ? 'selected' : '' }}>Property Management</option>
                                    <option value="Ronnie Henderson" {{ $entry->negotiator == 'Ronnie Henderson' ? 'selected' : '' }}>Ronnie Henderson</option>
                                    <option value="Roshinee Naidoo" {{ $entry->negotiator == 'Roshinee Naidoo' ? 'selected' : '' }}>Roshinee Naidoo</option>
                                    <option value="Settlement Solutions" {{ $entry->negotiator == 'Settlement Solutions' ? 'selected' : '' }}>Settlement Solutions</option>
                                    <option value="Siphe Mgcaleka" {{ $entry->negotiator == 'Siphe Mgcaleka' ? 'selected' : '' }}>Siphe Mgcaleka</option>
                                    <option value="Susan Turner" {{ $entry->negotiator == 'Susan Turner' ? 'selected' : '' }}>Susan Turner</option>
                                    <option value="Tamsyn Young" {{ $entry->negotiator == 'Tamsyn Young' ? 'selected' : '' }}>Tamsyn Young</option>
                                    <option value="Tanya Herholdt" {{ $entry->negotiator == 'Tanya Herholdt' ? 'selected' : '' }}>Tanya Herholdt</option>
                                    <option value="Thapelo Mhlanga" {{ $entry->negotiator == 'Thapelo Mhlanga' ? 'selected' : '' }}>Thapelo Mhlanga</option>
                                    <option value="Theuns Myburgh" {{ $entry->negotiator == 'Theuns Myburgh' ? 'selected' : '' }}>Theuns Myburgh</option>
                                    <option value="Tinus Geyser" {{ $entry->negotiator == 'Tinus Geyser' ? 'selected' : '' }}>Tinus Geyser</option>
                                    <option value="Vusi Mdwara" {{ $entry->negotiator == 'Vusi Mdwara' ? 'selected' : '' }}>Vusi Mdwara</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contacted_the_owner" class="col-form-label">Contacted the Owner</label>
                                {{-- <input id="contacted_the_owner" type="text" class="form-control" name="contacted_the_owner" value="{{ $entry->contacted_the_owner ? $entry->contacted_the_owner : '' }}"> --}}
                                <select id="contacted_the_owner" class="form-control" name="contacted_the_owner" required>
                                    <option value="" {{ $entry->contacted_the_owner == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Appointment Scheduled for" {{ $entry->contacted_the_owner == 'Appointment Scheduled for' ? 'selected' : '' }}>Appointment Scheduled for</option>
                                    <option value="Meeting held" {{ $entry->contacted_the_owner == 'Meeting held' ? 'selected' : '' }}>Meeting held</option>
                                    <option value="No" {{ $entry->contacted_the_owner == 'No' ? 'selected' : '' }}>No</option>
                                    <option value="Telephonically" {{ $entry->contacted_the_owner == 'Telephonically' ? 'selected' : '' }}>Telephonically</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_inspected" class="col-form-label">Site Inspected</label>
                                <select id="site_inspected" class="form-control" name="site_inspected">
                                    <option value="" {{ !$entry->site_inspected ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->site_inspected == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->site_inspected == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="staking_requested" class="col-form-label">Staking Requested</label>
                                <select id="staking_requested" class="form-control" name="staking_requested">
                                    <option value="" {{ !$entry->staking_requested ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->staking_requested == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->staking_requested == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="issues" class="col-form-label">Issues</label>
                                <select id="issues" class="form-control" name="issues">
                                    <option value="" {{ !$entry->issues ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->issues == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->issues == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pto" class="col-form-label">PTO</label>
                                <select id="pto" class="form-control" name="pto">
                                    <option value="" {{ !$entry->pto ? 'selected' : '' }}>Select an option</option>
                                    <option value="1" {{ $entry->pto == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->pto == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_of_acquisition" class="col-form-label">Type of Acquisition</label>
                                {{-- <input id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ $entry->type_of_acquisition ? $entry->type_of_acquisition : '' }}"> --}}
                                <select id="type_of_acquisition" class="form-control" name="type_of_acquisition">
                                    <option value="" {{ $entry->type_of_acquisition == '' ? 'selected' : '' }}>Select an option</option>
                                    <option value="Expropriation" {{ $entry->type_of_acquisition == 'Expropriation' ? 'selected' : '' }}>Expropriation</option>
                                    <option value="Expropriation by Agreement" {{ $entry->type_of_acquisition == 'Expropriation by Agreement' ? 'selected' : '' }}>Expropriation by Agreement</option>
                                    <option value="Normal" {{ $entry->type_of_acquisition == 'Normal' ? 'selected' : '' }}>Normal</option>
                                    <option value="Normal/Expropriation" {{ $entry->type_of_acquisition == 'Normal/Expropriation' ? 'selected' : '' }}>Normal/Expropriation</option>
                                </select>

                            </div>
                        </div>

                        {{-- -------------------------------------}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="signed_agreement" class="col-form-label">Signed Agreement</label>
                                <select id="signed_agreement" class="form-control" name="signed_agreement">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->signed_agreement == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->signed_agreement == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_owner_signed" class="col-form-label">Date Owner Signed</label>
                                <input id="date_owner_signed" type="date" class="form-control" name="date_owner_signed" value="{{ $entry->date_owner_signed }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_occupation" class="col-form-label">Date of Occupation</label>
                                <input id="date_of_occupation" type="date" class="form-control" name="date_of_occupation" value="{{ $entry->date_of_occupation }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="further_conditions_sent" class="col-form-label">Further Conditions Sent</label>
                                <input id="further_conditions_sent" type="text" class="form-control" name="further_conditions_sent" value="{{ $entry->further_conditions_sent }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="further_conditions_approved" class="col-form-label">Further Conditions Approved</label>
                                <input id="further_conditions_approved" type="text" class="form-control" name="further_conditions_approved" value="{{ $entry->further_conditions_approved }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="final_offer_made" class="col-form-label">Final Offer Made</label>
                                <select id="final_offer_made" class="form-control" name="final_offer_made">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->final_offer_made == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->final_offer_made == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_final_offer_expiring" class="col-form-label">Date Final Offer Expiring</label>
                                <input id="date_final_offer_expiring" type="text" class="form-control" name="date_final_offer_expiring" value="{{ $entry->date_final_offer_expiring }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="failed_neg_report_submitted" class="col-form-label">Failed Negotiation Report Submitted</label>
                                <select id="failed_neg_report_submitted" class="form-control" name="failed_neg_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->failed_neg_report_submitted == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->failed_neg_report_submitted == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="negotiation_report_submitted" class="col-form-label">Negotiation Report Submitted</label>
                                <select id="negotiation_report_submitted" class="form-control" name="negotiation_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ $entry->negotiation_report_submitted == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $entry->negotiation_report_submitted == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="qa_passed" class="col-form-label">QA Passed</label>
                                <input id="qa_passed" type="date" class="form-control" name="qa_passed" value="{{ $entry->qa_passed }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="qa_referred_back_to_valuer" class="col-form-label">QA Referred Back to Valuer</label>
                                <input id="qa_referred_back_to_valuer" type="date" class="form-control" name="qa_referred_back_to_valuer" value="{{ $entry->qa_referred_back_to_valuer }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_sent_memo_request" class="col-form-label">Date Sent Memo Request</label>
                                <input id="date_sent_memo_request" type="date" class="form-control" name="date_sent_memo_request" value="{{ $entry->date_sent_memo_request }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_memo_uploaded" class="col-form-label">Date Memo Uploaded</label>
                                <input id="date_memo_uploaded" type="date" class="form-control" name="date_memo_uploaded" value="{{ $entry->date_memo_uploaded }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_memo_submitted_to_sanral" class="col-form-label">Date Memo Submitted to SANRAL</label>
                                <input id="date_memo_submitted_to_sanral" type="date" class="form-control" name="date_memo_submitted_to_sanral" value="{{ $entry->date_memo_submitted_to_sanral }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number</label>
                                <input id="portion_number" type="text" class="form-control" name="portion_number" value="{{ $entry->portion_number }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="erf_number" class="col-form-label">ERF Number</label>
                                <input id="erf_number" type="text" class="form-control" name="erf_number" value="{{ $entry->erf_number }}">
                            </div>
                        </div>

                    {{-- -------------------------------------------- --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="remainder" class="col-form-label">Remainder</label>
                            <select id="remainder" class="form-control" name="remainder">
                                <option value="" selected>Select an option</option>
                                <option value="1" {{ $entry->remainder == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $entry->remainder == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="township" class="col-form-label">Township</label>
                            <input id="township" type="text" class="form-control" name="township" value="{{ $entry->township }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="extension" class="col-form-label">Extension</label>
                            <input id="extension" type="text" class="form-control" name="extension" value="{{ $entry->extension }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="unit_number" class="col-form-label">Unit Number</label>
                            <input id="unit_number" type="text" class="form-control" name="unit_number" value="{{ $entry->unit_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="scheme_name" class="col-form-label">Scheme Name</label>
                            <input id="scheme_name" type="text" class="form-control" name="scheme_name" value="{{ $entry->scheme_name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="scheme_number" class="col-form-label">Scheme Number</label>
                            <input id="scheme_number" type="text" class="form-control" name="scheme_number" value="{{ $entry->scheme_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="portion_of_portion" class="col-form-label">Portion of Portion</label>
                            <input id="portion_of_portion" type="text" class="form-control" name="portion_of_portion" value="{{ $entry->portion_of_portion }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="farm_name" class="col-form-label">Farm Name</label>
                            <input id="farm_name" type="text" class="form-control" name="farm_name" value="{{ $entry->farm_name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="farm_number" class="col-form-label">Farm Number</label>
                            <input id="farm_number" type="text" class="form-control" name="farm_number" value="{{ $entry->farm_number }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="agricultural_holding_name" class="col-form-label">Agricultural Holding Name</label>
                            <input id="agricultural_holding_name" type="text" class="form-control" name="agricultural_holding_name" value="{{ $entry->agricultural_holding_name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="agricultural_holding_number" class="col-form-label">Agricultural Holding Number</label>
                            <input id="agricultural_holding_number" type="text" class="form-control" name="agricultural_holding_number" value="{{ $entry->agricultural_holding_number }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_number" class="col-form-label">Site Number</label>
                            <input id="site_number" type="text" class="form-control" name="site_number" value="{{ $entry->site_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="community" class="col-form-label">Community</label>
                            <input id="community" type="text" class="form-control" name="community" value="{{ $entry->community }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chief" class="col-form-label">Chief</label>
                            <input id="chief" type="text" class="form-control" name="chief" value="{{ $entry->chief }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="registration_division" class="col-form-label">Registration Division</label>
                            {{-- <input id="registration_division" type="text" class="form-control" name="registration_division" value="{{ $entry->registration_division }}"> --}}
                            <select id="registration_division" class="form-control" name="registration_division">
                                <option value="" {{ $entry->registration_division == '' ? 'selected' : '' }}>Select an option</option>
                                <option value="0" {{ $entry->registration_division == '0' ? 'selected' : '' }}>0</option>
                                <option value="1" {{ $entry->registration_division == '1' ? 'selected' : '' }}>1</option>
                                <option value="Abany" {{ $entry->registration_division == 'Abany' ? 'selected' : '' }}>Abany</option>
                                <option value="Albany" {{ $entry->registration_division == 'Albany' ? 'selected' : '' }}>Albany</option>
                                <option value="Alexandria" {{ $entry->registration_division == 'Alexandria' ? 'selected' : '' }}>Alexandria</option>
                                <option value="Alexandria RD" {{ $entry->registration_division == 'Alexandria RD' ? 'selected' : '' }}>Alexandria RD</option>
                                <option value="Alfred Nzo" {{ $entry->registration_division == 'Alfred Nzo' ? 'selected' : '' }}>Alfred Nzo</option>
                                <option value="Baberton" {{ $entry->registration_division == 'Baberton' ? 'selected' : '' }}>Baberton</option>
                                <option value="Barberton" {{ $entry->registration_division == 'Barberton' ? 'selected' : '' }}>Barberton</option>
                                <option value="Barberton JT" {{ $entry->registration_division == 'Barberton JT' ? 'selected' : '' }}>Barberton JT</option>
                                <option value="Barberton JU" {{ $entry->registration_division == 'Barberton JU' ? 'selected' : '' }}>Barberton JU</option>
                                <option value="Bathurst" {{ $entry->registration_division == 'Bathurst' ? 'selected' : '' }}>Bathurst</option>
                                <option value="Bathurst RD" {{ $entry->registration_division == 'Bathurst RD' ? 'selected' : '' }}>Bathurst RD</option>
                                <option value="Bedford" {{ $entry->registration_division == 'Bedford' ? 'selected' : '' }}>Bedford</option>
                                <option value="Bellville" {{ $entry->registration_division == 'Bellville' ? 'selected' : '' }}>Bellville</option>
                                <option value="Bizana" {{ $entry->registration_division == 'Bizana' ? 'selected' : '' }}>Bizana</option>
                                <option value="Bloemfontein" {{ $entry->registration_division == 'Bloemfontein' ? 'selected' : '' }}>Bloemfontein</option>
                                <option value="Bloemfontein RD" {{ $entry->registration_division == 'Bloemfontein RD' ? 'selected' : '' }}>Bloemfontein RD</option>
                                <option value="Brandfort" {{ $entry->registration_division == 'Brandfort' ? 'selected' : '' }}>Brandfort</option>
                                <option value="Brandfort RD" {{ $entry->registration_division == 'Brandfort RD' ? 'selected' : '' }}>Brandfort RD</option>
                                <option value="Caledon" {{ $entry->registration_division == 'Caledon' ? 'selected' : '' }}>Caledon</option>
                                <option value="Caledon DC" {{ $entry->registration_division == 'Caledon DC' ? 'selected' : '' }}>Caledon DC</option>
                                <option value="Caledon RD" {{ $entry->registration_division == 'Caledon RD' ? 'selected' : '' }}>Caledon RD</option>
                                <option value="Calvinia" {{ $entry->registration_division == 'Calvinia' ? 'selected' : '' }}>Calvinia</option>
                                <option value="Cape" {{ $entry->registration_division == 'Cape' ? 'selected' : '' }}>Cape</option>
                                <option value="Cape RD" {{ $entry->registration_division == 'Cape RD' ? 'selected' : '' }}>Cape RD</option>
                                <option value="Clanwilliam RD" {{ $entry->registration_division == 'Clanwilliam RD' ? 'selected' : '' }}>Clanwilliam RD</option>
                                <option value="Cradock" {{ $entry->registration_division == 'Cradock' ? 'selected' : '' }}>Cradock</option>
                                <option value="Durban" {{ $entry->registration_division == 'Durban' ? 'selected' : '' }}>Durban</option>
                                <option value="East London" {{ $entry->registration_division == 'East London' ? 'selected' : '' }}>East London</option>
                                <option value="East London RD" {{ $entry->registration_division == 'East London RD' ? 'selected' : '' }}>East London RD</option>
                                <option value="Ekurhuleni" {{ $entry->registration_division == 'Ekurhuleni' ? 'selected' : '' }}>Ekurhuleni</option>
                                <option value="Elliot" {{ $entry->registration_division == 'Elliot' ? 'selected' : '' }}>Elliot</option>
                                <option value="Engcobo" {{ $entry->registration_division == 'Engcobo' ? 'selected' : '' }}>Engcobo</option>
                                <option value="Engxobo" {{ $entry->registration_division == 'Engxobo' ? 'selected' : '' }}>Engxobo</option>
                                <option value="ER" {{ $entry->registration_division == 'ER' ? 'selected' : '' }}>ER</option>
                                <option value="Ermelo" {{ $entry->registration_division == 'Ermelo' ? 'selected' : '' }}>Ermelo</option>
                                <option value="ES" {{ $entry->registration_division == 'ES' ? 'selected' : '' }}>ES</option>
                                <option value="ET" {{ $entry->registration_division == 'ET' ? 'selected' : '' }}>ET</option>
                                <option value="Fort Beaufort" {{ $entry->registration_division == 'Fort Beaufort' ? 'selected' : '' }}>Fort Beaufort</option>
                                <option value="FS" {{ $entry->registration_division == 'FS' ? 'selected' : '' }}>FS</option>
                                <option value="FT" {{ $entry->registration_division == 'FT' ? 'selected' : '' }}>FT</option>
                                <option value="FU" {{ $entry->registration_division == 'FU' ? 'selected' : '' }}>FU</option>
                                <option value="Garden Route" {{ $entry->registration_division == 'Garden Route' ? 'selected' : '' }}>Garden Route</option>
                                <option value="George" {{ $entry->registration_division == 'George' ? 'selected' : '' }}>George</option>
                                <option value="George RD" {{ $entry->registration_division == 'George RD' ? 'selected' : '' }}>George RD</option>
                                <option value="Graaff Reinett" {{ $entry->registration_division == 'Graaff Reinett' ? 'selected' : '' }}>Graaff Reinett</option>
                                <option value="Graaff Reinett RD" {{ $entry->registration_division == 'Graaff Reinett RD' ? 'selected' : '' }}>Graaff Reinett RD</option>
                                <option value="Graaf-Reinet" {{ $entry->registration_division == 'Graaf-Reinet' ? 'selected' : '' }}>Graaf-Reinet</option>
                                <option value="GS" {{ $entry->registration_division == 'GS' ? 'selected' : '' }}>GS</option>
                                <option value="GU" {{ $entry->registration_division == 'GU' ? 'selected' : '' }}>GU</option>
                                <option value="GV" {{ $entry->registration_division == 'GV' ? 'selected' : '' }}>GV</option>
                                <option value="HO" {{ $entry->registration_division == 'HO' ? 'selected' : '' }}>HO</option>
                                <option value="HP" {{ $entry->registration_division == 'HP' ? 'selected' : '' }}>HP</option>
                                <option value="HS" {{ $entry->registration_division == 'HS' ? 'selected' : '' }}>HS</option>
                                <option value="HT" {{ $entry->registration_division == 'HT' ? 'selected' : '' }}>HT</option>
                                <option value="HU" {{ $entry->registration_division == 'HU' ? 'selected' : '' }}>HU</option>
                                <option value="Humansdorp" {{ $entry->registration_division == 'Humansdorp' ? 'selected' : '' }}>Humansdorp</option>
                                <option value="HV" {{ $entry->registration_division == 'HV' ? 'selected' : '' }}>HV</option>
                                <option value="Idutywa" {{ $entry->registration_division == 'Idutywa' ? 'selected' : '' }}>Idutywa</option>
                                <option value="Idutywa RD" {{ $entry->registration_division == 'Idutywa RD' ? 'selected' : '' }}>Idutywa RD</option>
                                <option value="Indwe" {{ $entry->registration_division == 'Indwe' ? 'selected' : '' }}>Indwe</option>
                                <option value="10" {{ $entry->registration_division == '10' ? 'selected' : '' }}>10</option>
                                <option value="IQ" {{ $entry->registration_division == 'IQ' ? 'selected' : '' }}>IQ</option>
                                <option value="IS" {{ $entry->registration_division == 'IS' ? 'selected' : '' }}>IS</option>
                                <option value="Jansenville" {{ $entry->registration_division == 'Jansenville' ? 'selected' : '' }}>Jansenville</option>
                                <option value="JO" {{ $entry->registration_division == 'JO' ? 'selected' : '' }}>JO</option>
                                <option value="JP" {{ $entry->registration_division == 'JP' ? 'selected' : '' }}>JP</option>
                                <option value="JQ" {{ $entry->registration_division == 'JQ' ? 'selected' : '' }}>JQ</option>
                                <option value="JR" {{ $entry->registration_division == 'JR' ? 'selected' : '' }}>JR</option>
                                <option value="JS" {{ $entry->registration_division == 'JS' ? 'selected' : '' }}>JS</option>
                                <option value="JT" {{ $entry->registration_division == 'JT' ? 'selected' : '' }}>JT</option>
                                <option value="JU" {{ $entry->registration_division == 'JU' ? 'selected' : '' }}>JU</option>
                                <option value="Kamhlushwa JU" {{ $entry->registration_division == 'Kamhlushwa JU' ? 'selected' : '' }}>Kamhlushwa JU</option>
                                <option value="Kamlushwa JU" {{ $entry->registration_division == 'Kamlushwa JU' ? 'selected' : '' }}>Kamlushwa JU</option>
                                <option value="Kenhardt RD" {{ $entry->registration_division == 'Kenhardt RD' ? 'selected' : '' }}>Kenhardt RD</option>
                                <option value="Kimberley RD" {{ $entry->registration_division == 'Kimberley RD' ? 'selected' : '' }}>Kimberley RD</option>
                                <option value="King Williams Town" {{ $entry->registration_division == 'King Williams Town' ? 'selected' : '' }}>King Williams Town</option>
                                <option value="King Williams Town RD" {{ $entry->registration_division == 'King Williams Town RD' ? 'selected' : '' }}>King Williams Town RD</option>
                                <option value="King William's Town RD" {{ $entry->registration_division == 'King William\'s Town RD' ? 'selected' : '' }}>King William's Town RD</option>
                                <option value="Kirkwood" {{ $entry->registration_division == 'Kirkwood' ? 'selected' : '' }}>Kirkwood</option>
                                <option value="Knysna" {{ $entry->registration_division == 'Knysna' ? 'selected' : '' }}>Knysna</option>
                                <option value="Knysna RD" {{ $entry->registration_division == 'Knysna RD' ? 'selected' : '' }}>Knysna RD</option>
                                <option value="Komga" {{ $entry->registration_division == 'Komga' ? 'selected' : '' }}>Komga</option>
                                <option value="Komga RD" {{ $entry->registration_division == 'Komga RD' ? 'selected' : '' }}>Komga RD</option>
                                <option value="KQ" {{ $entry->registration_division == 'KQ' ? 'selected' : '' }}>KQ</option>
                                <option value="KR" {{ $entry->registration_division == 'KR' ? 'selected' : '' }}>KR</option>
                                <option value="Krikwood" {{ $entry->registration_division == 'Krikwood' ? 'selected' : '' }}>Krikwood</option>
                                <option value="KS" {{ $entry->registration_division == 'KS' ? 'selected' : '' }}>KS</option>
                                <option value="KT" {{ $entry->registration_division == 'KT' ? 'selected' : '' }}>KT</option>
                                <option value="KU" {{ $entry->registration_division == 'KU' ? 'selected' : '' }}>KU</option>
                                <option value="Kuilsrivier" {{ $entry->registration_division == 'Kuilsrivier' ? 'selected' : '' }}>Kuilsrivier</option>
                                <option value="Kuruman RD" {{ $entry->registration_division == 'Kuruman RD' ? 'selected' : '' }}>Kuruman RD</option>
                                <option value="Kwabacha" {{ $entry->registration_division == 'Kwabacha' ? 'selected' : '' }}>Kwabacha</option>
                                <option value="Ladybrand RD" {{ $entry->registration_division == 'Ladybrand RD' ? 'selected' : '' }}>Ladybrand RD</option>
                                <option value="Laingsburg RD" {{ $entry->registration_division == 'Laingsburg RD' ? 'selected' : '' }}>Laingsburg RD</option>
                                <option value="Langeberg DC" {{ $entry->registration_division == 'Langeberg DC' ? 'selected' : '' }}>Langeberg DC</option>
                                <option value="Libode" {{ $entry->registration_division == 'Libode' ? 'selected' : '' }}>Libode</option>
                                <option value="Limpopo" {{ $entry->registration_division == 'Limpopo' ? 'selected' : '' }}>Limpopo</option>
                                <option value="Lower Umfolozi" {{ $entry->registration_division == 'Lower Umfolozi' ? 'selected' : '' }}>Lower Umfolozi</option>
                                <option value="Lower Umfolozi - GV" {{ $entry->registration_division == 'Lower Umfolozi - GV' ? 'selected' : '' }}>Lower Umfolozi - GV</option>
                                <option value="LQ" {{ $entry->registration_division == 'LQ' ? 'selected' : '' }}>LQ</option>
                                <option value="LR" {{ $entry->registration_division == 'LR' ? 'selected' : '' }}>LR</option>
                                <option value="LS" {{ $entry->registration_division == 'LS' ? 'selected' : '' }}>LS</option>
                                <option value="LT" {{ $entry->registration_division == 'LT' ? 'selected' : '' }}>LT</option>
                                <option value="Lusikisiki" {{ $entry->registration_division == 'Lusikisiki' ? 'selected' : '' }}>Lusikisiki</option>
                                <option value="Malmesbury" {{ $entry->registration_division == 'Malmesbury' ? 'selected' : '' }}>Malmesbury</option>
                                <option value="Malmesbury RD" {{ $entry->registration_division == 'Malmesbury RD' ? 'selected' : '' }}>Malmesbury RD</option>
                                <option value="Marico JP" {{ $entry->registration_division == 'Marico JP' ? 'selected' : '' }}>Marico JP</option>
                                <option value="Middelburg" {{ $entry->registration_division == 'Middelburg' ? 'selected' : '' }}>Middelburg</option>
                                <option value="Mount Ayliff" {{ $entry->registration_division == 'Mount Ayliff' ? 'selected' : '' }}>Mount Ayliff</option>
                                <option value="MS" {{ $entry->registration_division == 'MS' ? 'selected' : '' }}>MS</option>
                                <option value="MT" {{ $entry->registration_division == 'MT' ? 'selected' : '' }}>MT</option>
                                <option value="Musina MS" {{ $entry->registration_division == 'Musina MS' ? 'selected' : '' }}>Musina MS</option>
                                <option value="Musina MT" {{ $entry->registration_division == 'Musina MT' ? 'selected' : '' }}>Musina MT</option>
                                <option value="Musna MT" {{ $entry->registration_division == 'Musna MT' ? 'selected' : '' }}>Musna MT</option>
                                <option value="Nelspruit LS" {{ $entry->registration_division == 'Nelspruit LS' ? 'selected' : '' }}>Nelspruit LS</option>
                                <option value="Ngoeleni" {{ $entry->registration_division == 'Ngoeleni' ? 'selected' : '' }}>Ngoeleni</option>
                                <option value="O.R. Tambo" {{ $entry->registration_division == 'O.R. Tambo' ? 'selected' : '' }}>O.R. Tambo</option>
                                <option value="Paarl" {{ $entry->registration_division == 'Paarl' ? 'selected' : '' }}>Paarl</option>
                                <option value="Peddie" {{ $entry->registration_division == 'Peddie' ? 'selected' : '' }}>Peddie</option>
                                <option value="Peddie RD" {{ $entry->registration_division == 'Peddie RD' ? 'selected' : '' }}>Peddie RD</option>
                                <option value="Phalaborwa" {{ $entry->registration_division == 'Phalaborwa' ? 'selected' : '' }}>Phalaborwa</option>
                                <option value="Phalaborwa KT" {{ $entry->registration_division == 'Phalaborwa KT' ? 'selected' : '' }}>Phalaborwa KT</option>
                                <option value="Pieterburg LS" {{ $entry->registration_division == 'Pieterburg LS' ? 'selected' : '' }}>Pieterburg LS</option>
                                <option value="Pietersburg" {{ $entry->registration_division == 'Pietersburg' ? 'selected' : '' }}>Pietersburg</option>
                                <option value="Pietersburg LS" {{ $entry->registration_division == 'Pietersburg LS' ? 'selected' : '' }}>Pietersburg LS</option>
                                <option value="Pietersurg LS" {{ $entry->registration_division == 'Pietersurg LS' ? 'selected' : '' }}>Pietersurg LS</option>
                                <option value="Piketberg" {{ $entry->registration_division == 'Piketberg' ? 'selected' : '' }}>Piketberg</option>
                                <option value="Polokwane" {{ $entry->registration_division == 'Polokwane' ? 'selected' : '' }}>Polokwane</option>
                                <option value="Port Elizabeth" {{ $entry->registration_division == 'Port Elizabeth' ? 'selected' : '' }}>Port Elizabeth</option>
                                <option value="Port Shepstone" {{ $entry->registration_division == 'Port Shepstone' ? 'selected' : '' }}>Port Shepstone</option>
                                <option value="Port St Johns" {{ $entry->registration_division == 'Port St Johns' ? 'selected' : '' }}>Port St Johns</option>
                                <option value="Pretoria" {{ $entry->registration_division == 'Pretoria' ? 'selected' : '' }}>Pretoria</option>
                                <option value="Pretoria JR" {{ $entry->registration_division == 'Pretoria JR' ? 'selected' : '' }}>Pretoria JR</option>
                                <option value="Queenstown" {{ $entry->registration_division == 'Queenstown' ? 'selected' : '' }}>Queenstown</option>
                                <option value="Queenstown RD" {{ $entry->registration_division == 'Queenstown RD' ? 'selected' : '' }}>Queenstown RD</option>
                                <option value="Qumanco" {{ $entry->registration_division == 'Qumanco' ? 'selected' : '' }}>Qumanco</option>
                                <option value="Qumbu" {{ $entry->registration_division == 'Qumbu' ? 'selected' : '' }}>Qumbu</option>
                                <option value="RD" {{ $entry->registration_division == 'RD' ? 'selected' : '' }}>RD</option>
                                <option value="Republic of South Africa" {{ $entry->registration_division == 'Republic of South Africa' ? 'selected' : '' }}>Republic of South Africa</option>
                                <option value="Riversdale" {{ $entry->registration_division == 'Riversdale' ? 'selected' : '' }}>Riversdale</option>
                                <option value="Riversdale RD" {{ $entry->registration_division == 'Riversdale RD' ? 'selected' : '' }}>Riversdale RD</option>
                                <option value="Rusteburg JQ" {{ $entry->registration_division == 'Rusteburg JQ' ? 'selected' : '' }}>Rusteburg JQ</option>
                                <option value="Rustenburg" {{ $entry->registration_division == 'Rustenburg' ? 'selected' : '' }}>Rustenburg</option>
                                <option value="Rustenburg JO" {{ $entry->registration_division == 'Rustenburg JO' ? 'selected' : '' }}>Rustenburg JO</option>
                                <option value="Rustenburg JQ" {{ $entry->registration_division == 'Rustenburg JQ' ? 'selected' : '' }}>Rustenburg JQ</option>
                                <option value="Rustenurg JQ" {{ $entry->registration_division == 'Rustenurg JQ' ? 'selected' : '' }}>Rustenurg JQ</option>
                                <option value="Senekal RD" {{ $entry->registration_division == 'Senekal RD' ? 'selected' : '' }}>Senekal RD</option>
                                <option value="Stellenbosch RD" {{ $entry->registration_division == 'Stellenbosch RD' ? 'selected' : '' }}>Stellenbosch RD</option>
                                <option value="Swellendam" {{ $entry->registration_division == 'Swellendam' ? 'selected' : '' }}>Swellendam</option>
                                <option value="Tabankulu" {{ $entry->registration_division == 'Tabankulu' ? 'selected' : '' }}>Tabankulu</option>
                                <option value="Tarka" {{ $entry->registration_division == 'Tarka' ? 'selected' : '' }}>Tarka</option>
                                <option value="Tarka RD" {{ $entry->registration_division == 'Tarka RD' ? 'selected' : '' }}>Tarka RD</option>
                                <option value="Tarkastad" {{ $entry->registration_division == 'Tarkastad' ? 'selected' : '' }}>Tarkastad</option>
                                <option value="Thabanchu RD" {{ $entry->registration_division == 'Thabanchu RD' ? 'selected' : '' }}>Thabanchu RD</option>
                                <option value="The Unissen" {{ $entry->registration_division == 'The Unissen' ? 'selected' : '' }}>The Unissen</option>
                                <option value="Tsolo" {{ $entry->registration_division == 'Tsolo' ? 'selected' : '' }}>Tsolo</option>
                                <option value="Tsomo" {{ $entry->registration_division == 'Tsomo' ? 'selected' : '' }}>Tsomo</option>
                                <option value="Udutywa" {{ $entry->registration_division == 'Udutywa' ? 'selected' : '' }}>Udutywa</option>
                                <option value="Uitenhage" {{ $entry->registration_division == 'Uitenhage' ? 'selected' : '' }}>Uitenhage</option>
                                <option value="Uitenhage RD" {{ $entry->registration_division == 'Uitenhage RD' ? 'selected' : '' }}>Uitenhage RD</option>
                                <option value="Umtata" {{ $entry->registration_division == 'Umtata' ? 'selected' : '' }}>Umtata</option>
                                <option value="Umtata RD" {{ $entry->registration_division == 'Umtata RD' ? 'selected' : '' }}>Umtata RD</option>
                                <option value="Umzimvubu RD" {{ $entry->registration_division == 'Umzimvubu RD' ? 'selected' : '' }}>Umzimvubu RD</option>
                                <option value="Unregistered" {{ $entry->registration_division == 'Unregistered' ? 'selected' : '' }}>Unregistered</option>
                                <option value="Ventersburg RD" {{ $entry->registration_division == 'Ventersburg RD' ? 'selected' : '' }}>Ventersburg RD</option>
                                <option value="Victoria East" {{ $entry->registration_division == 'Victoria East' ? 'selected' : '' }}>Victoria East</option>
                                <option value="Victoria East RD" {{ $entry->registration_division == 'Victoria East RD' ? 'selected' : '' }}>Victoria East RD</option>
                                <option value="Winburg RD" {{ $entry->registration_division == 'Winburg RD' ? 'selected' : '' }}>Winburg RD</option>
                                <option value="Wodehouse" {{ $entry->registration_division == 'Wodehouse' ? 'selected' : '' }}>Wodehouse</option>
                            </select>

                        </div>
                    </div>

                        <button type="submit" class="btn btn-primary mt-3">Update Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
