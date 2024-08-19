<?php

namespace App\Exports;

use App\Models\Entry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EntryExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entry::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Project LAC No',
            'Project Description',
            'Region',
            'Project Phase',
            'Proceed',
            'Case File No',
            'Diagram No',
            'Diagram Status',
            'Acquisition Status',
            'Spatial Atlas Status',
            'Date of Approval',
            'Received Diagram Instruction via PIMS',
            'Cancellation Date',
            'Cancellation Reason',
            'On Hold Date',
            'On Hold Reason',
            'Relocation',
            'Linked to Diagram',
            'Owner Type 1',
            'Owner 1',
            'Owner Type 2',
            'Owner 2',
            'Owner Type 3',
            'Owner 3',
            'Valuer',
            'Negotiator',
            'Contacted the Owner',
            'Site Inspected',
            'Staking Requested',
            'Issues',
            'PTO',
            'Type of Acquisition',
            'Signed Agreement',
            'Date Owner Signed',
            'Date of Occupation',
            'Further Conditions Sent',
            'Further Conditions Approved',
            'Final Offer Made',
            'Date Final Offer Expiring',
            'Failed Negotiation Report Submitted',
            'Negotiation Report Submitted',
            'QA Passed',
            'QA Referred Back to Valuer',
            'Date Sent Memo Request',
            'Date Memo Uploaded',
            'Date Memo Submitted to SANRAL',
            'Portion Number',
            'Erf Number',
            'Remainder',
            'Township',
            'Extension',
            'Unit Number',
            'Scheme Name',
            'Scheme Number',
            'Portion of Portion',
            'Farm Name',
            'Farm Number',
            'Agricultural Holding Name',
            'Agricultural Holding Number',
            'Site Number',
            'Community',
            'Chief',
            'Registration Division',
            'Created At',
            'Updated At',
        ];
    }
}
