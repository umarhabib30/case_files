<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('project_lac_no');
            $table->longText('project_description');
            $table->string('region');
            $table->string('project_phase')->nullable();
            $table->string('proceed');
            $table->string('case_file_no');
            $table->string('diagram_status');
            $table->date('anticipated_date')->nullable();
            $table->string('acquisition_status');
            $table->string('acquisition_plan')->nullable();
            $table->string('acquisition_plan_number')->nullable();
            $table->string('spatial_atlas_status');
            $table->date('date_of_approval')->nullable();
            $table->date('received_diagram_instruction_via_pims')->nullable();
            $table->date('cancellation_date')->nullable();
            $table->string('cancellation_reason')->nullable();
            $table->date('on_hold_date')->nullable();
            $table->string('on_hold_reason')->nullable();
            $table->string('relocation')->nullable();
            $table->string('linked_to_diagram')->nullable();
            $table->string('valuer')->nullable();
            $table->string('negotiator')->nullable();
            $table->string('contacted_the_owner')->nullable();
            $table->boolean('site_inspected')->nullable();
            $table->boolean('staking_requested')->nullable();
            $table->boolean('issues')->nullable();
            $table->boolean('pto')->nullable();
            $table->string('type_of_acquisition')->nullable();
            $table->boolean('signed_agreement')->nullable();
            $table->date('date_owner_signed')->nullable();
            $table->date('date_of_occupation')->nullable();
            $table->string('further_conditions_sent')->nullable();
            $table->string('further_conditions_approved')->nullable();
            $table->boolean('final_offer_made')->nullable();
            $table->string('date_final_offer_expiring')->nullable();
            $table->boolean('failed_neg_report_submitted')->nullable();
            $table->boolean('negotiation_report_submitted')->nullable();
            $table->date('qa_passed')->nullable();
            $table->date('qa_referred_back_to_valuer')->nullable();
            $table->date('date_sent_memo_request')->nullable();
            $table->date('date_memo_uploaded')->nullable();
            $table->date('date_memo_submitted_to_sanral')->nullable();
            $table->string('property_type')->nullable();
            $table->string('portion_number')->nullable();
            $table->string('erf_number')->nullable();
            $table->boolean('remainder')->nullable();
            $table->string('township')->nullable();
            $table->string('extension')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('scheme_name')->nullable();
            $table->string('scheme_number')->nullable();
            $table->string('portion_of_portion')->nullable();
            $table->string('farm_name')->nullable();
            $table->string('farm_number')->nullable();
            $table->string('portion_number_agricultural')->nullable();
            $table->string('agricultural_holding_name')->nullable();
            $table->string('agricultural_holding_number')->nullable();
            $table->string('remainder_agricultural')->nullable();
            $table->string('site_number')->nullable();
            $table->string('community')->nullable();
            $table->string('chief')->nullable();
            $table->string('erf_number_community')->nullable();
            $table->string('registration_division')->nullable();
            $table->string( 'acquisition_area_extend')->nullable();
            $table->string( 'parent_property_area')->nullable();
            $table->string('spatial_atlas')->nullable();
            $table->string('owner_type')->nullable();
            $table->string('owner')->nullable();
            $table->string('pgpw')->nullable();
            $table->string('dpw')->nullable();
            $table->string('dalrrd')->nullable();
            $table->string('transnet')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
