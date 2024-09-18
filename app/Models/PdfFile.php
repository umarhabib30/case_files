<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    use HasFactory;
    protected $fillable=[
        'entry_id',
        'acquisition_plan',
        'title_deed',
        'sg_diagram',
        'agreement',
        'contact_details',
        'cancellation_document',
        'beacon_certificate',
        'signed_agreement_pdf',
        'owners_particulars',
        'banking_details',
        'resolution',
        'letter_of_entitlement',
        'id_document',
        'vat_certificate',
        'final_offer',
        'failed_negotiation_report',
        'valuation_certificate',
        'valuation_report',
        'memo_pack',
    ];
}
