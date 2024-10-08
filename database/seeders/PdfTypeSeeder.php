<?php

namespace Database\Seeders;

use App\Models\PdfType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PdfTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileTypes = [
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

        foreach ($fileTypes as $type) {
            PdfType::create([
                'short' => $type ,
                'name' => ucwords(str_replace('_', ' ', $type)),
            ]);
        }
    }
}
