<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_lac_no',
        'project_description',
        'region',
        'project_phase',
        'proceed',
        'case_file_no',
        'diagram_status',
        'anticipated_date',
        'acquisition_status',
        'acquisition_plan',
        'acquisition_plan_number',
        'spatial_atlas_status',
        'date_of_approval',
        'received_diagram_instruction_via_pims',
        'cancellation_date',
        'cancellation_reason',
        'on_hold_date',
        'on_hold_reason',
        'relocation',
        'linked_to_diagram',
        'valuer',
        'negotiator',
        'contacted_the_owner',
        'site_inspected',
        'staking_requested',
        'issues',
        'pto',
        'type_of_acquisition',
        'signed_agreement',
        'date_owner_signed',
        'date_of_occupation',
        'further_conditions_sent',
        'further_conditions_approved',
        'final_offer_made',
        'date_final_offer_expiring',
        'failed_neg_report_submitted',
        'negotiation_report_submitted',
        'qa_passed',
        'qa_referred_back_to_valuer',
        'date_sent_memo_request',
        'date_memo_uploaded',
        'date_memo_submitted_to_sanral',
        'property_type',
        'portion_number',
        'erf_number',
        'remainder',
        'township',
        'extension',
        'unit_number',
        'scheme_name',
        'scheme_number',
        'portion_of_portion',
        'farm_name',
        'farm_number',
        'portion_number_agricultural',
        'agricultural_holding_name',
        'agricultural_holding_number',
        'remainder_agricultural',
        'site_number',
        'community',
        'chief',
        'erf_number_community',
        'registration_division',
        'acquisition_area_extend',
        'parent_property_area',
        'spatial_atlas',
        'owner_type',
        'owner',
        'pgpw',
        'dpw',
        'dalrrd',
        'transnet',
    ];

    public function pdfs(){
        return $this->hasOne(PdfFile::class,'entry_id');
    }
}
