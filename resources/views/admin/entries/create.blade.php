@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add Entry</h5>
                <div class="card-body">
                    <form method="post" action="{{url('admin/entries/store')}}">
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
                                <label for="project_phase" class="col-form-label">Project Phase *</label>
                                {{-- <input id="project_phase" type="text" class="form-control" name="project_phase" value="{{ old('project_phase') }}" required> --}}
                                <select id="project_phase" class="form-control" name="project_phase" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Phase 1">Phase 1</option>
                                    <option value="Phase 2">Phase 2</option>
                                    <option value="Phase 3">Phase 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="proceed" class="col-form-label">Proceed *</label>
                                {{-- <input id="proceed" type="text" class="form-control" name="proceed" value="{{ old('proceed') }}" required> --}}
                                <select id="proceed" class="form-control" name="proceed" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Green">Green</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Red">Red</option>
                                </select>
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
                                {{-- <input id="diagram_status" type="text" class="form-control" name="diagram_status" value="{{ old('diagram_status') }}" required> --}}
                                <select id="diagram_status" class="form-control" name="diagram_status" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="On Hold">On Hold</option>
                                    <option value="To Be Cancelled">To Be Cancelled</option>
                                </select>
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
                                <select id="spatial_atlas_status" class="form-control" name="spatial_atlas_status" required>
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
                                {{-- <input id="relocation" type="text" class="form-control" name="relocation" value="{{ old('relocation') }}"> --}}
                                <select id="relocation" class="form-control" name="relocation" >
                                    <option value="" selected>Select an option</option>
                                    <option value="Beneficiary Owned">Beneficiary Owned</option>
                                    <option value="Offsite">Offsite</option>
                                    <option value="Same Site">Same Site</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="linked_to_diagram" class="col-form-label">Linked to Diagram</label>
                                <input id="linked_to_diagram" type="text" class="form-control" name="linked_to_diagram" value="{{ old('linked_to_diagram') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_1" class="col-form-label">Owner Type 1 *</label>
                                {{-- <input id="owner_type_1" type="text" class="form-control" name="owner_type_1" value="{{ old('owner_type_1') }}" required> --}}
                                <select id="owner_type_1" class="form-control" name="owner_type_1" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="Municipal">Municipal</option>
                                    <option value="Private">Private</option>
                                    <option value="Provincial Government Public Works (PGPW)">Provincial Government Public Works (PGPW)</option>
                                    <option value="RSA">RSA</option>
                                    <option value="RSA - Department Public Works (DPW)">RSA - Department Public Works (DPW)</option>
                                    <option value="RSA - Department Rural Development and Land Reform (DRDLR)">RSA - Department Rural Development and Land Reform (DRDLR)</option>
                                    <option value="State Owned Company">State Owned Company</option>
                                    <option value="Transnet">Transnet</option>
                                    <option value="Tribal">Tribal</option>
                                    <option value="Trust">Trust</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_1" class="col-form-label">Owner 1 *</label>
                                <input id="owner_1" type="text" class="form-control" name="owner_1" value="{{ old('owner_1') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_2" class="col-form-label">Owner Type 2</label>
                                {{-- <input id="owner_type_2" type="text" class="form-control" name="owner_type_2" value="{{ old('owner_type_2') }}"> --}}
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
                                <input id="owner_2" type="text" class="form-control" name="owner_2" value="{{ old('owner_2') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner_type_3" class="col-form-label">Owner Type 3</label>
                                {{-- <input id="owner_type_3" type="text" class="form-control" name="owner_type_3" value="{{ old('owner_type_3') }}"> --}}
                                <select id="owner_type_3" class="form-control" name="owner_type_3">
                                    <option value="" selected>Select an option</option>
                                    <option value="Private">Private</option>
                                    <option value="Tribal">Tribal</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="owner_3" class="col-form-label">Owner 3</label>
                                {{-- <input id="owner_3" type="text" class="form-control" name="owner_3" value="{{ old('owner_3') }}"> --}}
                                <select id="owner_3" class="form-control" name="owner_3">
                                    <option value="" selected>Select an option</option>
                                    <option value="Barbara Magdalena Louw van der Merwe">Barbara Magdalena Louw van der Merwe</option>
                                    <option value="Gamase Eliza Matoti">Gamase Eliza Matoti</option>
                                    <option value="Prescilla Malema">Prescilla Malema</option>
                                    <option value="Stanley Dabulamanzi Mnyataza">Stanley Dabulamanzi Mnyataza</option>
                                    <option value="Zoleka Nkewu">Zoleka Nkewu</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="valuer" class="col-form-label">Valuer</label>
                                {{-- <input id="valuer" type="text" class="form-control" name="valuer" value="{{ old('valuer') }}"> --}}
                                <select id="valuer" class="form-control" name="valuer" >
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
                                <select id="contacted_the_owner" class="form-control" name="contacted_the_owner" required>
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
                                {{-- <input id="type_of_acquisition" type="text" class="form-control" name="type_of_acquisition" value="{{ old('type_of_acquisition') }}"> --}}
                                <select id="type_of_acquisition" class="form-control" name="type_of_acquisition" >
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
                                {{-- <input id="registration_division" type="text" class="form-control" name="registration_division" value="{{ old('registration_division') }}"> --}}
                                <select id="registration_division" class="form-control" name="registration_division" >
                                    <option value="" selected>Select an option</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="Abany">Abany</option>
                                    <option value="Albany">Albany</option>
                                    <option value="Alexandria">Alexandria</option>
                                    <option value="Alexandria RD">Alexandria RD</option>
                                    <option value="Alfred Nzo">Alfred Nzo</option>
                                    <option value="Baberton">Baberton</option>
                                    <option value="Barberton">Barberton</option>
                                    <option value="Barberton JT">Barberton JT</option>
                                    <option value="Barberton JU">Barberton JU</option>
                                    <option value="Bathurst">Bathurst</option>
                                    <option value="Bathurst RD">Bathurst RD</option>
                                    <option value="Bedford">Bedford</option>
                                    <option value="Bellville">Bellville</option>
                                    <option value="Bizana">Bizana</option>
                                    <option value="Bloemfontein">Bloemfontein</option>
                                    <option value="Bloemfontein RD">Bloemfontein RD</option>
                                    <option value="Brandfort">Brandfort</option>
                                    <option value="Brandfort RD">Brandfort RD</option>
                                    <option value="Caledon">Caledon</option>
                                    <option value="Caledon DC">Caledon DC</option>
                                    <option value="Caledon RD">Caledon RD</option>
                                    <option value="Calvinia">Calvinia</option>
                                    <option value="Cape">Cape</option>
                                    <option value="Cape RD">Cape RD</option>
                                    <option value="Clanwilliam RD">Clanwilliam RD</option>
                                    <option value="Cradock">Cradock</option>
                                    <option value="Durban">Durban</option>
                                    <option value="East London">East London</option>
                                    <option value="East London RD">East London RD</option>
                                    <option value="Ekurhuleni">Ekurhuleni</option>
                                    <option value="Elliot">Elliot</option>
                                    <option value="Engcobo">Engcobo</option>
                                    <option value="Engxobo">Engxobo</option>
                                    <option value="ER">ER</option>
                                    <option value="Ermelo">Ermelo</option>
                                    <option value="ES">ES</option>
                                    <option value="ET">ET</option>
                                    <option value="Fort Beaufort">Fort Beaufort</option>
                                    <option value="FS">FS</option>
                                    <option value="FT">FT</option>
                                    <option value="FU">FU</option>
                                    <option value="Garden Route">Garden Route</option>
                                    <option value="George">George</option>
                                    <option value="George RD">George RD</option>
                                    <option value="Graaff Reinett">Graaff Reinett</option>
                                    <option value="Graaff Reinett RD">Graaff Reinett RD</option>
                                    <option value="Graaf-Reinet">Graaf-Reinet</option>
                                    <option value="GS">GS</option>
                                    <option value="GU">GU</option>
                                    <option value="GV">GV</option>
                                    <option value="HO">HO</option>
                                    <option value="HP">HP</option>
                                    <option value="HS">HS</option>
                                    <option value="HT">HT</option>
                                    <option value="HU">HU</option>
                                    <option value="Humansdorp">Humansdorp</option>
                                    <option value="HV">HV</option>
                                    <option value="Idutywa">Idutywa</option>
                                    <option value="Idutywa RD">Idutywa RD</option>
                                    <option value="Indwe">Indwe</option>
                                    <option value="10">10</option>
                                    <option value="IQ">IQ</option>
                                    <option value="IS">IS</option>
                                    <option value="Jansenville">Jansenville</option>
                                    <option value="JO">JO</option>
                                    <option value="JP">JP</option>
                                    <option value="JQ">JQ</option>
                                    <option value="JR">JR</option>
                                    <option value="JS">JS</option>
                                    <option value="JT">JT</option>
                                    <option value="JU">JU</option>
                                    <option value="Kamhlushwa JU">Kamhlushwa JU</option>
                                    <option value="Kamlushwa JU">Kamlushwa JU</option>
                                    <option value="Kenhardt RD">Kenhardt RD</option>
                                    <option value="Kimberley RD">Kimberley RD</option>
                                    <option value="King Williams Town">King Williams Town</option>
                                    <option value="King Williams Town RD">King Williams Town RD</option>
                                    <option value="King William's Town RD">King William's Town RD</option>
                                    <option value="Kirkwood">Kirkwood</option>
                                    <option value="Knysna">Knysna</option>
                                    <option value="Knysna RD">Knysna RD</option>
                                    <option value="Komga">Komga</option>
                                    <option value="Komga RD">Komga RD</option>
                                    <option value="KQ">KQ</option>
                                    <option value="KR">KR</option>
                                    <option value="Krikwood">Krikwood</option>
                                    <option value="KS">KS</option>
                                    <option value="KT">KT</option>
                                    <option value="KU">KU</option>
                                    <option value="Kuilsrivier">Kuilsrivier</option>
                                    <option value="Kuruman RD">Kuruman RD</option>
                                    <option value="Kwabacha">Kwabacha</option>
                                    <option value="Ladybrand RD">Ladybrand RD</option>
                                    <option value="Laingsburg RD">Laingsburg RD</option>
                                    <option value="Langeberg DC">Langeberg DC</option>
                                    <option value="Libode">Libode</option>
                                    <option value="Limpopo">Limpopo</option>
                                    <option value="Lower Umfolozi">Lower Umfolozi</option>
                                    <option value="Lower Umfolozi - GV">Lower Umfolozi - GV</option>
                                    <option value="LQ">LQ</option>
                                    <option value="LR">LR</option>
                                    <option value="LS">LS</option>
                                    <option value="LT">LT</option>
                                    <option value="Lusikisiki">Lusikisiki</option>
                                    <option value="Malmesbury">Malmesbury</option>
                                    <option value="Malmesbury RD">Malmesbury RD</option>
                                    <option value="Marico JP">Marico JP</option>
                                    <option value="Middelburg">Middelburg</option>
                                    <option value="Mount Ayliff">Mount Ayliff</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="Musina MS">Musina MS</option>
                                    <option value="Musina MT">Musina MT</option>
                                    <option value="Musna MT">Musna MT</option>
                                    <option value="Nelspruit LS">Nelspruit LS</option>
                                    <option value="Ngoeleni">Ngoeleni</option>
                                    <option value="O.R. Tambo">O.R. Tambo</option>
                                    <option value="Paarl">Paarl</option>
                                    <option value="Peddie">Peddie</option>
                                    <option value="Peddie RD">Peddie RD</option>
                                    <option value="Phalaborwa">Phalaborwa</option>
                                    <option value="Phalaborwa KT">Phalaborwa KT</option>
                                    <option value="Pieterburg LS">Pieterburg LS</option>
                                    <option value="Pietersburg">Pietersburg</option>
                                    <option value="Pietersburg LS">Pietersburg LS</option>
                                    <option value="Pietersurg LS">Pietersurg LS</option>
                                    <option value="Piketberg">Piketberg</option>
                                    <option value="Polokwane">Polokwane</option>
                                    <option value="Port Elizabeth">Port Elizabeth</option>
                                    <option value="Port Shepstone">Port Shepstone</option>
                                    <option value="Port St Johns">Port St Johns</option>
                                    <option value="Pretoria">Pretoria</option>
                                    <option value="Pretoria JR">Pretoria JR</option>
                                    <option value="Queenstown">Queenstown</option>
                                    <option value="Queenstown RD">Queenstown RD</option>
                                    <option value="Qumanco">Qumanco</option>
                                    <option value="Qumbu">Qumbu</option>
                                    <option value="RD">RD</option>
                                    <option value="Republic of South Africa">Republic of South Africa</option>
                                    <option value="Riversdale">Riversdale</option>
                                    <option value="Riversdale RD">Riversdale RD</option>
                                    <option value="Rusteburg JQ">Rusteburg JQ</option>
                                    <option value="Rustenburg">Rustenburg</option>
                                    <option value="Rustenburg JO">Rustenburg JO</option>
                                    <option value="Rustenburg JQ">Rustenburg JQ</option>
                                    <option value="Rustenurg JQ">Rustenurg JQ</option>
                                    <option value="Senekal RD">Senekal RD</option>
                                    <option value="Stellenbosch RD">Stellenbosch RD</option>
                                    <option value="Swellendam">Swellendam</option>
                                    <option value="Tabankulu">Tabankulu</option>
                                    <option value="Tarka">Tarka</option>
                                    <option value="Tarka RD">Tarka RD</option>
                                    <option value="Tarkastad">Tarkastad</option>
                                    <option value="Thabanchu RD">Thabanchu RD</option>
                                    <option value="The Unissen">The Unissen</option>
                                    <option value="Tsolo">Tsolo</option>
                                    <option value="Tsomo">Tsomo</option>
                                    <option value="Udutywa">Udutywa</option>
                                    <option value="Uitenhage">Uitenhage</option>
                                    <option value="Uitenhage RD">Uitenhage RD</option>
                                    <option value="Umtata">Umtata</option>
                                    <option value="Umtata RD">Umtata RD</option>
                                    <option value="Umzimvubu RD">Umzimvubu RD</option>
                                    <option value="Unregistered">Unregistered</option>
                                    <option value="Ventersburg RD">Ventersburg RD</option>
                                    <option value="Victoria East">Victoria East</option>
                                    <option value="Victoria East RD">Victoria East RD</option>
                                    <option value="Winburg RD">Winburg RD</option>
                                    <option value="Wodehouse">Wodehouse</option>
                                </select>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Add Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
