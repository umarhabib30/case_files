@extends('layouts.app')
@section('style')
    <style>
        .border-red {
            border: 1px solid red !important;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add Entry</h5>
                <div class="card-body">
                    <form method="post" action="{{ url('user/entries/store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="project_lac_no" class="col-form-label">Project LAC No *</label>
                                <input id="project_lac_no" type="text" class="form-control" name="project_lac_no"
                                    value="{{ old('project_lac_no') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project_description" class="col-form-label">Project Description *</label>
                                <textarea id="project_description" class="form-control" name="project_description" rows="4" required>{{ old('project_description') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="region" class="col-form-label">Region *</label>
                                {{-- <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required> --}}
                                <select id="region" class="form-control" name="region" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Eastern">Eastern</option>
                                    <option value="Northern">Northern</option>
                                    <option value="Southern">Southern</option>
                                    <option value="Tribal">Tribal</option>
                                    <option value="Wastern">Wastern</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="project_phase" class="col-form-label">Project Phase </label>
                                <input id="project_phase" type="text" class="form-control" name="project_phase"
                                    value="{{ old('project_phase') }}">
                                {{-- <select id="project_phase" class="form-control" name="project_phase" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Phase 1">Phase 1</option>
                                    <option value="Phase 2">Phase 2</option>
                                    <option value="Phase 3">Phase 3</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="proceed" class="col-form-label">Proceed *</label>
                                {{-- <input id="proceed" type="text" class="form-control" name="proceed" value="{{ old('proceed') }}" required> --}}
                                <select id="proceed" class="form-control" name="proceed" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Red">Red</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Orange">Orange</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="case_file_no" class="col-form-label">Case File No *</label>
                                {{-- <input id="case_file_no" type="text" class="form-control" name="case_file_no" value="{{ old('case_file_no') }}" required> --}}
                                <input id="case_file_no" type="text" class="form-control" name="case_file_no"
                                    value="{{ old('case_file_no') }}" required pattern="^N\d{2}/\d/\d/\d{3}/\d{4}$"
                                    title="Please enter in the format: N10/3/1/000/0000">

                            </div>
                        </div>



                        <div class="row">
                            {{-- <div class="form-group col-md-6">
                                <label for="diagram_no" class="col-form-label">Diagram No *</label>
                                <input id="diagram_no" type="text" class="form-control" name="diagram_no"
                                    value="{{ old('diagram_no') }}" required>
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label for="diagram_status" class="col-form-label">Diagram Status *</label>
                                {{-- <input id="" type="text" class="form-control" name="diagram_status" value="{{ old('diagram_status') }}" required> --}}
                                <select id="diagram_status" class="form-control" name="diagram_status" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Draft">Draft</option>
                                </select>
                            </div>
                        </div>

                        {{-- input fields for diagram status draft --}}
                        <div class="row" style="display: none;" id="status_draft">
                            <div class="form-group col-md-6">
                                <label for="anticipated_date" class="col-form-label">Anticipated Date</label>
                                <input id="anticipated_date" type="date" class="form-control" name="anticipated_date"
                                    value="{{ old('anticipated_date') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="approval_date" class="col-form-label">Approval Date</label>
                                <input id="approval_date" type="date" class="form-control" name="approval_date"
                                    value="{{ old('approval_date') }}">
                            </div>
                        </div>

                        {{-- input fields for diagram status approved --}}
                        {{-- <div class="row" style="display: none;" id="status_approved">
                            <div class="form-group col-md-6">
                                <label for="date_received_via_pims" class="col-form-label">Date Received via PIMS </label>
                                <input id="date_received_via_pims" type="date" class="form-control"
                                    name="date_received_via_pims" value="{{ old('date_received_via_pims') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="approval_date" class="col-form-label">Approval Date</label>
                                <input id="approval_date" type="date" class="form-control" name="approval_date"
                                    value="{{ old('approval_date') }}">
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquisition_plan" class="col-form-label">Acquisition Plan *</label>
                                {{-- <input id="acquisition_plan" type="text" class="form-control" name="acquisition_plan" value="{{ old('acquisition_plan') }}" required> --}}
                                <select id="acquisition_plan" class="form-control" name="acquisition_plan" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="P-Plan">P-Plan</option>
                                    <option value="O-Plan">O-Plan</option>
                                    <option value="DP-Plan">DP-Plan</option>
                                    <option value="G-Plan">G-Plan</option>
                                    <option value="S-Plan">S-Plan</option>
                                    <option value="C- Notional Site">C - Notional Site</option>
                                    <option value="C- Communal Compensation">C - Communal Compensation</option>
                                    <option value="QO- Quitrent">QO - Quitrent</option>
                                    <option value="DQP- Quitrent">DQP - Quitrent</option>
                                    <option value="QG- Quitrent">QG - Quitrent</option>
                                    <option value="Relocation Site- CRL">Relocation Site - CRL</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="acquisition_plan_number" class="col-form-label">Acquisition Plan Number
                                    *</label>
                                {{-- <input id="acquisition_plan_number" type="text" class="form-control" name="acquisition_plan_number" value="{{ old('acquisition_plan_number') }}" required> --}}
                                <input id="acquisition_plan_number" type="text" class="form-control"
                                    name="acquisition_plan_number" value="{{ old('acquisition_plan_number') }}" required>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquisition_status" class="col-form-label">Acquisition Status *</label>
                                {{-- <input id="acquisition_status" type="text" class="form-control" name="acquisition_status" value="{{ old('acquisition_status') }}" required> --}}
                                <select id="acquisition_status" class="form-control" name="acquisition_status" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Active">Active</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Completed">Completed</option>
                                    <option value="On Hold">On Hold</option>
                                    <option value="To Be Cancelled">To Be Cancelled</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spatial_atlas_status" class="col-form-label">Spatial Atlas Status *</label>
                                {{-- <input id="spatial_atlas_status" type="text" class="form-control" name="spatial_atlas_status" value="{{ old('spatial_atlas_status') }}" required> --}}
                                <select id="spatial_atlas_status" class="form-control" name="spatial_atlas_status"
                                    required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Active">Active</option>
                                    <option value="Cancelled"> Cancelled</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Expropriation">Expropriation</option>
                                    <option value="Expropriation by Agreement"> Expropriation by Agreement</option>
                                    <option value="Municipal">Municipal</option>
                                    <option value="On Hold"> On Hold</option>
                                    <option value="Other">Other</option>
                                    <option value="Permission to Occupy">Permission to Occupy</option>
                                    <option value="RSA">RSA</option>
                                    <option value="Signed">Signed</option>
                                    <option value="To be Cancelled"> To be Cancelled</option>
                                    <option value="Transnet">Transnet</option>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="cancellation_date" class="col-form-label">Cancellation Date</label>
                                <input id="cancellation_date" type="date" class="form-control"
                                    name="cancellation_date" value="{{ old('cancellation_date') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cancellation_reason" class="col-form-label">Cancellation Reason</label>
                                <input id="cancellation_reason" type="text" class="form-control"
                                    name="cancellation_reason" value="{{ old('cancellation_reason') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="on_hold_date" class="col-form-label">On Hold Date</label>
                                <input id="on_hold_date" type="date" class="form-control" name="on_hold_date"
                                    value="{{ old('on_hold_date') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="on_hold_reason" class="col-form-label">On Hold Reason</label>
                                <input id="on_hold_reason" type="text" class="form-control" name="on_hold_reason"
                                    value="{{ old('on_hold_reason') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="relocation" class="col-form-label">Relocation</label>
                                {{-- <input id="relocation" type="text" class="form-control" name="relocation" value="{{ old('relocation') }}"> --}}
                                <select id="relocation" class="form-control" name="relocation">
                                    <option value="" selected>Select an option</option>
                                    <option value="Beneficiary Owned">Beneficiary Owned</option>
                                    <option value="Offsite">Offsite</option>
                                    <option value="Same Site">Same Site</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                                <input id="linked_to_diagram" type="text" class="form-control"
                                    name="linked_to_diagram" value="{{ old('linked_to_diagram') }}">
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_1" class="col-form-label">Owner Type 1 *</label>
                                <input id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ old('owner_type_1') }}" required>
                                <select id="owner_type_1" class="form-control" name="owner_type_1" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="Municipal">Municipal</option>
                                    <option value="Private">Private</option>
                                    <option value="Provincial Government Public Works (PGPW)">Provincial Government Public
                                        Works (PGPW)</option>
                                    <option value="RSA">RSA</option>
                                    <option value="RSA - Department Public Works (DPW)">RSA - Department Public Works (DPW)
                                    </option>
                                    <option value="RSA - Department Rural Development and Land Reform (DRDLR)">RSA -
                                        Department Rural Development and Land Reform (DRDLR)</option>
                                    <option value="State Owned Company">State Owned Company</option>
                                    <option value="Transnet">Transnet</option>
                                    <option value="Tribal">Tribal</option>
                                    <option value="Trust">Trust</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_1" class="col-form-label">Owner 1 *</label>
                                <input id="owner_1" type="text" class="form-control" name="owner_1"
                                    value="{{ old('owner_1') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                                <input id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ old('owner_type_2') }}">
                                <select id="owner_type_2" class="form-control" name="owner_type_2">
                                    <option value="" selected>Select an option</option>
                                    <option value="Anna Hermiena Myburgh">Anna Hermiena Myburgh</option>
                                    <option value="Anna Josina Osborne">Anna Josina Osborne</option>
                                    <option value="Annalize Knell">Annalize Knell</option>
                                    <option value="Benni (Current Occupant) Botha">Benni (Current Occupant) Botha</option>
                                    <option value="Bethshiva Mosiya Kgatuke">Bethshiva Mosiya Kgatuke</option>
                                    <option value="Bongile Ndilele">Bongile Ndilele</option>
                                    <option value="Brian Moyo">Brian Moyo</option>
                                    <option value="CJ van der Vuyver Trust">CJ van der Vuyver Trust</option>
                                    <option value="Daniel Makhubela">Daniel Makhubela</option>
                                    <option value="Desana Batabo">Desana Batabo</option>
                                    <option value="Dion Fourie">Dion Fourie</option>
                                    <option value="Edward Motilene">Edward Motilene</option>
                                    <option value="Eleanor Ntombana Majali">Eleanor Ntombana Majali</option>
                                    <option value="Elsie Aletta Van Den Berg">Elsie Aletta Van Den Berg</option>
                                    <option value="Emofu Trading">Emofu Trading</option>
                                    <option value="Emwly Makhafola">Emwly Makhafola</option>
                                    <option value="Felicity Nortier">Felicity Nortier</option>
                                    <option value="Frans Khoza">Frans Khoza</option>
                                    <option value="Gamase Eliza Matoti">Gamase Eliza Matoti</option>
                                    <option value="Hendrik Abraham Van Vuuren">Hendrik Abraham Van Vuuren</option>
                                    <option value="Hillside Trust">Hillside Trust</option>
                                    <option value="Irene Nokulunga Mdebele">Irene Nokulunga Mdebele</option>
                                    <option value="Isaac Dinisa">Isaac Dinisa</option>
                                    <option value="Jacoba Johanna Vermaak">Jacoba Johanna Vermaak</option>
                                    <option value="Jan Resemat Lebisi">Jan Resemat Lebisi</option>
                                    <option value="Jan Willemse">Jan Willemse</option>
                                    <option value="Johan Lombaard">Johan Lombaard</option>
                                    <option value="John Khoza">John Khoza</option>
                                    <option value="Lunga Larrington Madolo">Lunga Larrington Madolo</option>
                                    <option value="Lynda Carol Fischer">Lynda Carol Fischer</option>
                                    <option value="Mark Dorning">Mark Dorning</option>
                                    <option value="Mealies Ngqula">Mealies Ngqula</option>
                                    <option value="Mercy Nomazwe Nomvume Socikwa">Mercy Nomazwe Nomvume Socikwa</option>
                                    <option value="Mziwenceba Makalima">Mziwenceba Makalima</option>
                                    <option value="Nandipha Bashe">Nandipha Bashe</option>
                                    <option value="Nkosikhona Enoch Dyantyi">Nkosikhona Enoch Dyantyi</option>
                                    <option value="Nokwanda Gloria Gomana">Nokwanda Gloria Gomana</option>
                                    <option value="Nolubabalo Nakani">Nolubabalo Nakani</option>
                                    <option value="Nolwando Sifile">Nolwando Sifile</option>
                                    <option value="Nomasomi Matanzima">Nomasomi Matanzima</option>
                                    <option value="Nonceba Ohelumbona">Nonceba Ohelumbona</option>
                                    <option value="Nonceba Patricia Jalile">Nonceba Patricia Jalile</option>
                                    <option value="Nontlupheko Maria Nyawalu">Nontlupheko Maria Nyawalu</option>
                                    <option value="Nontlupheko Maria Nyawula">Nontlupheko Maria Nyawula</option>
                                    <option value="Nthabiseng Khosa">Nthabiseng Khosa</option>
                                    <option value="Ntombodidi Cynthia Gomo">Ntombodidi Cynthia Gomo</option>
                                    <option value="Opal Patricia Desiree Welcome">Opal Patricia Desiree Welcome</option>
                                    <option value="Simisonke Matoti">Simisonke Matoti</option>
                                    <option value="Surprise Mkhubela">Surprise Mkhubela</option>
                                    <option value="Thabo Mokidikitla">Thabo Mokidikitla</option>
                                    <option value="Thandi Nkhona">Thandi Nkhona</option>
                                    <option value="Thapelo Matjebela">Thapelo Matjebela</option>
                                    <option value="Thelma Nontando Kunene">Thelma Nontando Kunene</option>
                                    <option value="Thenjiswa Ndlebe">Thenjiswa Ndlebe</option>
                                    <option value="Thomas Yingwane Baloyi">Thomas Yingwane Baloyi</option>
                                    <option value="Van Der Vyver CJ Trust">Van Der Vyver CJ Trust</option>
                                    <option value="Zanele Mhlongo">Zanele Mhlongo</option>
                                    <option value="Zingisile Nocholus Fambaza">Zingisile Nocholus Fambaza</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_2" class="col-form-label">Owner 2</label>
                                <input id="owner_2" type="text" class="form-control" name="owner_2"
                                    value="{{ old('owner_2') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                                <input id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ old('owner_type_3') }}">
                                <select id="owner_type_3" class="form-control" name="owner_type_3">
                                    <option value="" selected>Select an option</option>
                                    <option value="Private">Private</option>
                                    <option value="Tribal">Tribal</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_3" class="col-form-label">Owner 3</label>
                                <input id="owner_3" type="text" class="form-control" name="owner_3" value="{{ old('owner_3') }}">
                                <select id="owner_3" class="form-control" name="owner_3">
                                    <option value="" selected>Select an option</option>
                                    <option value="Barbara Magdalena Louw van der Merwe">Barbara Magdalena Louw van der
                                        Merwe</option>
                                    <option value="Gamase Eliza Matoti">Gamase Eliza Matoti</option>
                                    <option value="Prescilla Malema">Prescilla Malema</option>
                                    <option value="Stanley Dabulamanzi Mnyataza">Stanley Dabulamanzi Mnyataza</option>
                                    <option value="Zoleka Nkewu">Zoleka Nkewu</option>
                                </select>

                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="valuer" class="col-form-label">Valuer</label>
                                {{-- <input id="valuer" type="text" class="form-control" name="valuer" value="{{ old('valuer') }}"> --}}
                                <select id="valuer" class="form-control" name="valuer">
                                    <option value="" selected>Select an option</option>
                                    <option value="Amandla Dotwana">Amandla Dotwana</option>
                                    <option value="Anne-Marie Botha">Anne-Marie Botha</option>
                                    <option value="Bill Collatz">Bill Collatz</option>
                                    <option value="Brian Mncube">Brian Mncube</option>
                                    <option value="Byron van Niekerk">Byron van Niekerk</option>
                                    <option value="Chris Scholtz">Chris Scholtz</option>
                                    <option value="Christiaan Winckler">Christiaan Winckler</option>
                                    <option value="David Speier">David Speier</option>
                                    <option value="Dean Wilson">Dean Wilson</option>
                                    <option value="Dianne de Wet">Dianne de Wet</option>
                                    <option value="dm lukhozi">dm lukhozi</option>
                                    <option value="DW Lombard">DW Lombard</option>
                                    <option value="George Georgiades">George Georgiades</option>
                                    <option value="Haneef Sarkhot">Haneef Sarkhot</option>
                                    <option value="Hashim Variawa">Hashim Variawa</option>
                                    <option value="Heinrich Steenberg">Heinrich Steenberg</option>
                                    <option value="Hennie Wybenga">Hennie Wybenga</option>
                                    <option value="Henry Inocco">Henry Inocco</option>
                                    <option value="Ilali Admin">Ilali Admin</option>
                                    <option value="Johan Klopper">Johan Klopper</option>
                                    <option value="Kholofelo Monama">Kholofelo Monama</option>
                                    <option value="Kobus de Villiers">Kobus de Villiers</option>
                                    <option value="Lebogang Kgaditsi">Lebogang Kgaditsi</option>
                                    <option value="Lekhotla Nakanyane">Lekhotla Nakanyane</option>
                                    <option value="Leon Stander">Leon Stander</option>
                                    <option value="Llaai Ntsoane">Llaai Ntsoane</option>
                                    <option value="Luyanda Mehlomakhulu">Luyanda Mehlomakhulu</option>
                                    <option value="Macdonald Modibedi">Macdonald Modibedi</option>
                                    <option value="Mbekezeli Sibanda">Mbekezeli Sibanda</option>
                                    <option value="mbonisi masuku">mbonisi masuku</option>
                                    <option value="Michael Sibanda">Michael Sibanda</option>
                                    <option value="Nkanyiso Dhlamini">Nkanyiso Dhlamini</option>
                                    <option value="OOS OOS">OOS OOS</option>
                                    <option value="Property Management">Property Management</option>
                                    <option value="Ronnie Henderson">Ronnie Henderson</option>
                                    <option value="Settlement Solutions">Settlement Solutions</option>
                                    <option value="Siphe Mgcaleka">Siphe Mgcaleka</option>
                                    <option value="Susan Turner">Susan Turner</option>
                                    <option value="Tanya Herholdt">Tanya Herholdt</option>
                                    <option value="Thapelo Mhlanga">Thapelo Mhlanga</option>
                                    <option value="Theuns Myburgh">Theuns Myburgh</option>
                                    <option value="Tinus Geyser">Tinus Geyser</option>
                                    <option value="Valuer Test">Valuer Test</option>
                                    <option value="Vusi Mdwara">Vusi Mdwara</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="negotiator" class="col-form-label">Negotiator</label>
                                {{-- <input id="negotiator" type="text" class="form-control" name="negotiator" value="{{ old('negotiator') }}"> --}}
                                <select id="negotiator" class="form-control" name="negotiator">
                                    <option value="" selected>Select an option</option>
                                    <option value="Amandla Dotwana">Amandla Dotwana</option>
                                    <option value="Anne-Marie Botha">Anne-Marie Botha</option>
                                    <option value="Bill Collatz">Bill Collatz</option>
                                    <option value="Brian Mncube">Brian Mncube</option>
                                    <option value="Byron van Niekerk">Byron van Niekerk</option>
                                    <option value="Chris Scholtz">Chris Scholtz</option>
                                    <option value="Christiaan Winckler">Christiaan Winckler</option>
                                    <option value="David Speier">David Speier</option>
                                    <option value="Dean Wilson">Dean Wilson</option>
                                    <option value="Dianne de Wet">Dianne de Wet</option>
                                    <option value="dm lukhozi">dm lukhozi</option>
                                    <option value="DW Lombard">DW Lombard</option>
                                    <option value="George Georgiades">George Georgiades</option>
                                    <option value="Haneef Sarkhot">Haneef Sarkhot</option>
                                    <option value="Hashim Variawa">Hashim Variawa</option>
                                    <option value="Heinrich Steenberg">Heinrich Steenberg</option>
                                    <option value="Hennie Wybenga">Hennie Wybenga</option>
                                    <option value="Henry Inocco">Henry Inocco</option>
                                    <option value="Ilali Admin">Ilali Admin</option>
                                    <option value="Johan Klopper">Johan Klopper</option>
                                    <option value="Kholofelo Monama">Kholofelo Monama</option>
                                    <option value="Kobus de Villiers">Kobus de Villiers</option>
                                    <option value="Lebogang Kgaditsi">Lebogang Kgaditsi</option>
                                    <option value="Lekhotla Nakanyane">Lekhotla Nakanyane</option>
                                    <option value="Leon Stander">Leon Stander</option>
                                    <option value="Llaai Ntsoane">Llaai Ntsoane</option>
                                    <option value="Luyanda Mehlomakhulu">Luyanda Mehlomakhulu</option>
                                    <option value="Macdonald Modibedi">Macdonald Modibedi</option>
                                    <option value="Mbekezeli Sibanda">Mbekezeli Sibanda</option>
                                    <option value="mbonisi masuku">mbonisi masuku</option>
                                    <option value="Michael Sibanda">Michael Sibanda</option>
                                    <option value="Nkanyiso Dhlamini">Nkanyiso Dhlamini</option>
                                    <option value="OOS OOS">OOS OOS</option>
                                    <option value="Property Management">Property Management</option>
                                    <option value="Ronnie Henderson">Ronnie Henderson</option>
                                    <option value="Roshinee Naidoo">Roshinee Naidoo</option>
                                    <option value="Settlement Solutions">Settlement Solutions</option>
                                    <option value="Siphe Mgcaleka">Siphe Mgcaleka</option>
                                    <option value="Susan Turner">Susan Turner</option>
                                    <option value="Tamsyn Young">Tamsyn Young</option>
                                    <option value="Tanya Herholdt">Tanya Herholdt</option>
                                    <option value="Thapelo Mhlanga">Thapelo Mhlanga</option>
                                    <option value="Theuns Myburgh">Theuns Myburgh</option>
                                    <option value="Tinus Geyser">Tinus Geyser</option>
                                    <option value="Vusi Mdwara">Vusi Mdwara</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contacted_the_owner" class="col-form-label">Contacted the Owner</label>
                                {{-- <input id="contacted_the_owner" type="text" class="form-control" name="contacted_the_owner" value="{{ old('contacted_the_owner') }}"> --}}
                                <select id="contacted_the_owner" class="form-control" name="contacted_the_owner">
                                    <option value="" selected>Select an option</option>
                                    <option value="Appointment Scheduled for">Appointment Scheduled for</option>
                                    <option value="Meeting held">Meeting held</option>
                                    <option value="No">No</option>
                                    <option value="Telephonically">Telephonically</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_inspected" class="col-form-label">Site Inspected</label>
                                <select id="site_inspected" class="form-control" name="site_inspected">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('site_inspected') == '1' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="0" {{ old('site_inspected') == '0' ? 'selected' : '' }}>No
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="staking_requested" class="col-form-label">Staking Requested</label>
                                <select id="staking_requested" class="form-control" name="staking_requested">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('staking_requested') == '1' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="0" {{ old('staking_requested') == '0' ? 'selected' : '' }}>No
                                    </option>
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
                                {{-- <input id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ old('type_of_acquisition') }}"> --}}
                                <select id="type_of_acquisition" class="form-control" name="type_of_acquisition">
                                    <option value="" selected>Select an option</option>
                                    <option value="Expropriation">Expropriation</option>
                                    <option value="Expropriation by Agreement">Expropriation by Agreement</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Normal/Expropriation">Normal/Expropriation</option>
                                </select>

                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="signed_agreement" class="col-form-label">Signed Agreement</label>
                                <select id="signed_agreement" class="form-control" name="signed_agreement">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('signed_agreement') == '1' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="0" {{ old('signed_agreement') == '0' ? 'selected' : '' }}>No
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_owner_signed" class="col-form-label">Date Owner Signed</label>
                                <input id="date_owner_signed" type="date" class="form-control"
                                    name="date_owner_signed" value="{{ old('date_owner_signed') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_of_occupation" class="col-form-label">Date of Occupation</label>
                                <input id="date_of_occupation" type="date" class="form-control"
                                    name="date_of_occupation" value="{{ old('date_of_occupation') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="further_conditions_sent" class="col-form-label">Further Conditions
                                    Sent</label>
                                <input id="further_conditions_sent" type="text" class="form-control"
                                    name="further_conditions_sent" value="{{ old('further_conditions_sent') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="further_conditions_approved" class="col-form-label">Further Conditions
                                    Approved</label>
                                <input id="further_conditions_approved" type="text" class="form-control"
                                    name="further_conditions_approved" value="{{ old('further_conditions_approved') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="final_offer_made" class="col-form-label">Final Offer Made</label>
                                <select id="final_offer_made" class="form-control" name="final_offer_made">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('final_offer_made') == '1' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="0" {{ old('final_offer_made') == '0' ? 'selected' : '' }}>No
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_final_offer_expiring" class="col-form-label">Date Final Offer
                                    Expiring</label>
                                <input id="date_final_offer_expiring" type="text" class="form-control"
                                    name="date_final_offer_expiring" value="{{ old('date_final_offer_expiring') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="failed_neg_report_submitted" class="col-form-label">Failed Negotiation Report
                                    Submitted</label>
                                <select id="failed_neg_report_submitted" class="form-control"
                                    name="failed_neg_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1"
                                        {{ old('failed_neg_report_submitted') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0"
                                        {{ old('failed_neg_report_submitted') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="negotiation_report_submitted" class="col-form-label">Negotiation Report
                                    Submitted</label>
                                <select id="negotiation_report_submitted" class="form-control"
                                    name="negotiation_report_submitted">
                                    <option value="" selected>Select an option</option>
                                    <option value="1"
                                        {{ old('negotiation_report_submitted') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0"
                                        {{ old('negotiation_report_submitted') == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="qa_passed" class="col-form-label">QA Passed</label>
                                <input id="qa_passed" type="date" class="form-control" name="qa_passed"
                                    value="{{ old('qa_passed') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="qa_referred_back_to_valuer" class="col-form-label">QA Referred Back to
                                    Valuer</label>
                                <input id="qa_referred_back_to_valuer" type="date" class="form-control"
                                    name="qa_referred_back_to_valuer" value="{{ old('qa_referred_back_to_valuer') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_sent_memo_request" class="col-form-label">Date Sent Memo Request</label>
                                <input id="date_sent_memo_request" type="date" class="form-control"
                                    name="date_sent_memo_request" value="{{ old('date_sent_memo_request') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="date_memo_uploaded" class="col-form-label">Date Memo Uploaded</label>
                                <input id="date_memo_uploaded" type="date" class="form-control"
                                    name="date_memo_uploaded" value="{{ old('date_memo_uploaded') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_memo_submitted_to_sanral" class="col-form-label">Date Memo Submitted to
                                    SANRAL</label>
                                <input id="date_memo_submitted_to_sanral" type="date" class="form-control"
                                    name="date_memo_submitted_to_sanral"
                                    value="{{ old('date_memo_submitted_to_sanral') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="spatial_atlas" class="col-form-label">Spatial Atlas*</label>
                                <select id="spatial_atlas" class="form-control" name="spatial_atlas" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Active">Active</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Expropriation">Expropriation</option>
                                    <option value="Expropriation by Agreement">Expropriation by Agreement</option>
                                    <option value="Municipal">Municipal</option>
                                    <option value="On Hold">On Hold</option>
                                    <option value="Other">Other</option>
                                    <option value="Permission to Occupy">Permission to Occupy</option>
                                    <option value="RSA">RSA</option>
                                    <option value="Signed">Signed</option>
                                    <option value="To be Cancelled">To be Cancelled</option>
                                    <option value="Transnet">Transnet</option>
                                </select>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="property_type" class="col-form-label">Property Type*</label>
                                <select id="property_type" class="form-control" name="property_type" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="ERF">ERF</option>
                                    <option value="Sectional Title">Sectional Title</option>
                                    <option value="Farm">Farm</option>
                                    <option value="Agricultural Holding">Agricultural Holding</option>
                                    <option value="Notational Site">Notational Site</option>
                                    <option value="Quitrent">Quitrent</option>
                                    <option value="Communal Compensation">Communal Compensation</option>
                                </select>
                            </div>
                        </div>

                        {{-- for property type ERF --}}
                        <div class="row" id="dynamic_property_type_inputs"> </div>

                        <div class="row">
                            {{-- <div class="form-group col-md-6">
                                <label for="" class="col-form-label">Acquisition Area Extent Type*</label><br>

                                <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input"
                                        name="acquisition_area_extend_type" value="m2" checked><span
                                        class="custom-control-label">M2</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input"
                                        name="acquisition_area_extend_type" value="ha"><span
                                        class="custom-control-label">HA</span>
                                </label>
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label for="acquisition_area_extend" class="col-form-label">Acquisition Area
                                    Extent*</label>
                                <input id="acquisition_area_extend" type="number" class="form-control"
                                    name="acquisition_area_extend" value="{{ old('acquisition_area_extend') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="parent_property_area" class="col-form-label">Parent Property Area*</label>
                                <input id="parent_property_area" type="number" class="form-control"
                                    name="parent_property_area" value="{{ old('parent_property_area') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            {{-- <div class="form-group col-md-6">
                                <label for="" class="col-form-label">Parent Property Area Type*</label><br>

                                <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" name="parent_area_extend_type"
                                        value="m2" checked><span class="custom-control-label">M2</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" name="parent_area_extend_type"
                                        value="ha"><span class="custom-control-label">HA</span>
                                </label>
                            </div> --}}

                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="acquision_pdf" class="col-form-label">Acquisition Plan</label>
                                <input class="form-control" type="file" id="acquision_pdf" name="acquision_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title_pdf" class="col-form-label">Title Deed</label>
                                <input class="form-control" type="file" id="title_pdf" name="title_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sg_pdf" class="col-form-label">SG Diagram</label>
                                <input class="form-control" type="file" id="sg_pdf" name="sg_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agreement_pdf" class="col-form-label">Agreement</label>
                                <input class="form-control" type="file" id="agreement_pdf" name="agreement_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact_pdf" class="col-form-label">Contact Details</label>
                                <input class="form-control" type="file" id="contact_pdf" name="contact_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cancellation_pdf" class="col-form-label">Cancellation document</label>
                                <input class="form-control" type="file" id="cancellation_pdf"
                                    name="cancellation_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="beacon_pdf" class="col-form-label">Beacon Certificate</label>
                                <input class="form-control" type="file" id="beacon_pdf" name="beacon_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="signed_agreement_pdf" class="col-form-label">Signed Agreement</label>
                                <input class="form-control" type="file" id="signed_agreement_pdf"
                                    name="signed_agreement_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_pdf" class="col-form-label">Owners Particulars</label>
                                <input class="form-control" type="file" id="owner_pdf" name="owner_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="banking_pdf" class="col-form-label">Banking details</label>
                                <input class="form-control" type="file" id="banking_pdf" name="banking_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="resolution_pdf" class="col-form-label">Resolution</label>
                                <input class="form-control" type="file" id="resolution_pdf" name="resolution_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="letter_pdf" class="col-form-label">Letter of entitlement</label>
                                <input class="form-control" type="file" id="letter_pdf" name="letter_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_pdf" class="col-form-label">ID</label>
                                <input class="form-control" type="file" id="id_pdf" name="id_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="vat_pdf" class="col-form-label">VAT Certificate</label>
                                <input class="form-control" type="file" id="vat_pdf" name="vat_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="final_offer_pdf" class="col-form-label">Final Offer</label>
                                <input class="form-control" type="file" id="final_offer_pdf" name="final_offer_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="failed_pdf" class="col-form-label">Failed Negotiation Report</label>
                                <input class="form-control" type="file" id="failed_pdf" name="failed_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valuation_certificate_pdf" class="col-form-label">Valuation
                                    Certificate</label>
                                <input class="form-control" type="file" id="valuation_certificate_pdf"
                                    name="valuation_certificate_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valuation_report_pdf" class="col-form-label">Valuation Report</label>
                                <input class="form-control" type="file" id="valuation_report_pdf"
                                    name="valuation_report_pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="memo_pdf" class="col-form-label">Memo Pack</label>
                                <input class="form-control" type="file" id="memo_pdf" name="memo_pdf">
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-3" id="add_entry_btn">Add Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // ------------ Case File No input mask ------------
            IMask(
                document.getElementById('case_file_no'), {
                    mask: 'N00/0/0/000/0000',
                    lazy: false,
                    definitions: {
                        '0': {
                            mask: IMask.MaskedRange,
                            from: 0,
                            to: 9,
                            placeholderChar: '0',
                        }
                    }
                }
            );
            // -------- for diagram status load inputs --------------
            $('body').on('change', '#diagram_status', function(e) {
                e.preventDefault();
                var value = $(this).val();
                if (value == "Approved") {
                    $('#status_draft').css('display', 'none');
                    $('#status_approved').css('display', '');
                } else {
                    $('#status_draft').css('display', '');
                    $('#status_approved').css('display', 'none');
                }
            });

            $(document).ready(function() {
                $('input[name="acquisition_area_extend_type"]').on('change', function() {
                    if ($(this).is(':checked')) {
                        $('input[name="acquisition_area_extend_type"]').not(this).prop('checked',
                            false);
                    }
                });
            });

            $(document).ready(function() {
                $('input[name="parent_area_extend_type"]').on('change', function() {
                    if ($(this).is(':checked')) {
                        $('input[name="parent_area_extend_type"]').not(this).prop('checked',
                            false);
                    }
                });
            });


            // -------- for diagram status load inputs --------------
            $('body').on('change', '#property_type', function(e) {
                e.preventDefault();
                var value = $(this).val();
                if (value == "ERF") {
                    $('#dynamic_property_type_inputs').html('');
                    var inputfields = `<div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number*</label>
                                <input id="portion_number" type="number" class="form-control" name="portion_number"
                                    value="{{ old('portion_number') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="erf_number" class="col-form-label">Erf Number*</label>
                                <input id="erf_number" type="number" class="form-control" name="erf_number"
                                    value="{{ old('erf_number') }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="remainder" class="col-form-label">Remainder*</label>
                                <select id="remainder" class="form-control" name="remainder" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('remainder') == '1' ? 'selected' : '' }}>Yes </option>
                                    <option value="0" {{ old('remainder') == '0' ? 'selected' : '' }}>No </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="township" class="col-form-label">Township</label>
                                <input id="township" type="text" class="form-control" name="township"
                                    value="{{ old('township') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="extension" class="col-form-label">Extension</label>
                                <input id="extension" type="text" class="form-control" name="extension"
                                    value="{{ old('extension') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division</label>
                                <input id="registration_division" type="text" class="form-control"
                                    name="registration_division" value="{{ old('registration_division') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(inputfields);
                } else if (value == "Sectional Title") {
                    $('#dynamic_property_type_inputs').html('');
                    var section_title = `<div class="form-group col-md-6">
                                <label for="unit_number" class="col-form-label">Unit Number</label>
                                <input id="unit_number" type="number" class="form-control" name="unit_number"
                                    value="{{ old('unit_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="scheme_name" class="col-form-label">Scheme Name</label>
                                <input id="scheme_name" type="text" class="form-control" name="scheme_name"
                                    value="{{ old('scheme_name') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="scheme_number" class="col-form-label">Scheme Number</label>
                                <input id="scheme_number" type="number" class="form-control" name="scheme_number"
                                    value="{{ old('scheme_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division</label>
                                <input id="registration_division" type="text" class="form-control"
                                    name="registration_division" value="{{ old('registration_division') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(section_title);
                } else if (value == "Farm") {
                    $('#dynamic_property_type_inputs').html('');
                    var farm_inputs = ` <div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number*</label>
                                <input id="portion_number" type="number" class="form-control" name="portion_number"
                                    value="{{ old('portion_number') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="portion_of_portion" class="col-form-label">Portion of portion</label>
                                <input id="portion_of_portion" type="number" class="form-control"
                                    name="portion_of_portion" value="{{ old('portion_of_portion') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="remainder" class="col-form-label">Remainder*</label>
                                <select id="remainder" class="form-control" name="remainder" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('remainder') == '1' ? 'selected' : '' }}>Yes </option>
                                    <option value="0" {{ old('remainder') == '0' ? 'selected' : '' }}>No </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="farm_name" class="col-form-label">Farm Name*</label>
                                <input id="farm_name" type="text" class="form-control" name="farm_name"
                                    value="{{ old('farm_name') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="farm_number" class="col-form-label">Farm Number*</label>
                                <input id="farm_number" type="number" class="form-control" name="farm_number"
                                    value="{{ old('farm_number') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division*</label>
                                <input id="registration_division" type="text" class="form-control"
                                    name="registration_division" value="{{ old('registration_division') }}" required>
                            </div>`;
                    $('#dynamic_property_type_inputs').html(farm_inputs);
                } else if (value == "Agricultural Holding") {
                    $('#dynamic_property_type_inputs').html('');
                    var agriculture = ` <div class="form-group col-md-6">
                                <label for="portion_number" class="col-form-label">Portion Number</label>
                                <input id="portion_number" type="number" class="form-control" name="portion_number"
                                    value="{{ old('portion_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agricultural_holding_name" class="col-form-label">Agricultural Holding
                                    Name</label>
                                <input id="agricultural_holding_name" type="text" class="form-control"
                                    name="agricultural_holding_name" value="{{ old('agricultural_holding_name') }}"
                                    >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agricultural_holding_number" class="col-form-label">Agricultural Holding
                                    Number</label>
                                <input id="agricultural_holding_number" type="number" class="form-control"
                                    name="agricultural_holding_number" value="{{ old('agricultural_holding_number') }}"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="extension" class="col-form-label">Extension</label>
                                <input id="extension" type="text" class="form-control" name="extension"
                                    value="{{ old('extension') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="remainder" class="col-form-label">Remainder</label>
                                <select id="remainder" class="form-control" name="remainder">
                                    <option value="" selected>Select an option</option>
                                    <option value="1" {{ old('remainder') == '1' ? 'selected' : '' }}>Yes </option>
                                    <option value="0" {{ old('remainder') == '0' ? 'selected' : '' }}>No </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division</label>
                                <input id="registration_division" type="text" class="form-control"
                                    name="registration_division" value="{{ old('registration_division') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(agriculture);
                } else if (value == "Notational Site") {
                    $('#dynamic_property_type_inputs').html('');
                    var national = ` <div class="form-group col-md-6">
                                <label for="site_number" class="col-form-label">Site Number*</label>
                                <input id="site_number" type="text" class="form-control" name="site_number"
                                    value="{{ old('site_number') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="community" class="col-form-label">Community</label>
                                <input id="community" type="text" class="form-control" name="community"
                                    value="{{ old('community') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="chief" class="col-form-label">Chief</label>
                                <input id="chief" type="text" class="form-control" name="chief"
                                    value="{{ old('chief') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(national);
                } else if (value == "Quitrent") {
                    $('#dynamic_property_type_inputs').html('');
                    var quitrent = `<div class="form-group col-md-6">
                                <label for="erf_number" class="col-form-label">Erf Number</label>
                                <input id="erf_number" type="number" class="form-control" name="erf_number"
                                    value="{{ old('erf_number') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="township" class="col-form-label">Township</label>
                                <input id="township" type="text" class="form-control" name="township"
                                    value="{{ old('township') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registration_division" class="col-form-label">Registration Division</label>
                                <input id="registration_division" type="text" class="form-control"
                                    name="registration_division" value="{{ old('registration_division') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(quitrent);
                } else if (value == "Communal Compensation") {
                    $('#dynamic_property_type_inputs').html('');
                    var communal = ` <div class="form-group col-md-6">
                                <label for="community" class="col-form-label">Coomunity</label>
                                <input id="community" type="text" class="form-control" name="community"
                                    value="{{ old('community') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="chief" class="col-form-label">Chief</label>
                                <input id="chief" type="text" class="form-control" name="chief"
                                    value="{{ old('chief') }}">
                            </div>`;
                    $('#dynamic_property_type_inputs').html(communal);
                } else {
                    $('#dynamic_property_type_inputs').html('');
                }
            });




        });
    </script>
    <script>
        $(document).ready(function() {
            function validatePlanNumber() {
                var plan = $("#acquisition_plan").val();
                var planNumber = $("#acquisition_plan_number").val();

                var planPrefix = plan.split('-')[0] + '-';

                if (planPrefix && planNumber && !planNumber.startsWith(planPrefix)) {
                    toastr.error("The acquisition plan number must start with " + planPrefix);
                    $('#acquisition_plan_number').addClass('border-red');
                    $('#add_entry_btn').attr('disabled', true);
                }else{
                    $('#add_entry_btn').attr('disabled', false);
                    $('#acquisition_plan_number').removeClass('border-red');

                }


            }
            $("#acquisition_plan_number").blur(function() {
                validatePlanNumber();
            });
            $("#acquisition_plan").change(function() {
                $("#acquisition_plan_number").blur();
            });
        });
    </script>
@endsection
