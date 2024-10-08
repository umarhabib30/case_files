<?php

namespace App\Http\Controllers\User;

use App\Exports\EntryExport;
use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\Entry;
use App\Models\Pdf;
use App\Models\PdfFile;
use App\Models\PdfType;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Entry::select([
            'id',
            'project_lac_no',
            'project_description',
            'region',
            'project_phase',
            'proceed',
            'case_file_no',
            'diagram_status'
        ])->paginate(10);

        $data = [
            'title' => 'Entries',
            'active' => 'Entries',
            'entries'=> $entries,
            'breadcrumbs' => array("user/entries/index" => "Entries"),
        ];
        return view('user.entries.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Add Entry',
            'active' => 'Entries',
            'breadcrumbs' => array("user/entries/index" => "Entries", "user/entries/create" => "Add Entry",),
        ];
        return view('user.entries.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->parent_property_area < $request->acquisition_area_extend) {
            return redirect()->back()->with('error', 'Acquisition area extend must smaller than Parent Property area');
        }
        try {
            $data = $request->all();
            $entry = [];
            $entry = Entry::create($data);

            if ($request->acquision_pdf) {
                $file = FileHelper::save($request->acquision_pdf, '/acquisition_plans');
                $pdfs['acquisition_plan'] = $file;
            }

            if ($request->title_pdf) {
                $file = FileHelper::save($request->title_pdf, '/title_deeds');
                $pdfs['title_deed'] = $file;
            }

            if ($request->sg_pdf) {
                $file = FileHelper::save($request->sg_pdf, '/sg_diagram');
                $pdfs['sg_diagram'] = $file;
            }

            if ($request->agreement_pdf) {
                $file = FileHelper::save($request->agreement_pdf, '/agreement');
                $pdfs['agreement'] = $file;
            }

            if ($request->contact_pdf) {
                $file = FileHelper::save($request->contact_pdf, '/contact_details');
                $pdfs['contact_details'] = $file;
            }

            if ($request->cancellation_pdf) {
                $file = FileHelper::save($request->cancellation_pdf, '/cancellation_document');
                $pdfs['cancellation_document'] = $file;
            }

            if ($request->beacon_pdf) {
                $file = FileHelper::save($request->beacon_pdf, '/beacon_certificate');
                $pdfs['beacon_certificate'] = $file;
            }

            if ($request->signed_agreement_pdf) {
                $file = FileHelper::save($request->signed_agreement_pdf, '/signed_agreement_pdf');
                $pdfs['signed_agreement_pdf'] = $file;
            }

            if ($request->owner_pdf) {
                $file = FileHelper::save($request->owner_pdf, '/owners_particulars');
                $pdfs['owners_particulars'] = $file;
            }

            if ($request->banking_pdf) {
                $file = FileHelper::save($request->banking_pdf, '/banking_details');
                $pdfs['banking_details'] = $file;
            }

            if ($request->resolution_pdf) {
                $file = FileHelper::save($request->resolution_pdf, '/resolution');
                $pdfs['resolution'] = $file;
            }

            if ($request->letter_pdf) {
                $file = FileHelper::save($request->letter_pdf, '/letter_of_entitlement');
                $pdfs['letter_of_entitlement'] = $file;
            }

            if ($request->id_pdf) {
                $file = FileHelper::save($request->id_pdf, '/id_document');
                $pdfs['id_document'] = $file;
            }

            if ($request->vat_pdf) {
                $file = FileHelper::save($request->vat_pdf, '/vat_certificate');
                $pdfs['vat_certificate'] = $file;
            }

            if ($request->final_offer_pdf) {
                $file = FileHelper::save($request->final_offer_pdf, '/final_offer');
                $pdfs['final_offer'] = $file;
            }

            if ($request->failed_pdf) {
                $file = FileHelper::save($request->failed_pdf, '/failed_negotiation_report');
                $pdfs['failed_negotiation_report'] = $file;
            }

            if ($request->valuation_certificate_pdf) {
                $file = FileHelper::save($request->valuation_certificate_pdf, '/valuation_certificate');
                $pdfs['valuation_certificate'] = $file;
            }

            if ($request->valuation_report_pdf) {
                $file = FileHelper::save($request->valuation_report_pdf, '/valuation_report');
                $pdfs['valuation_report'] = $file;
            }

            if ($request->memo_pdf) {
                $file = FileHelper::save($request->memo_pdf, '/memo_pack');
                $pdfs['memo_pack'] = $file;
            }

            $types = PdfType::all();

            foreach ($pdfs as $key =>  $pdf) {
                foreach ($types as $type) {
                    if ($key == $type->short) {
                        $type_id = $type->id;
                        break;
                    }
                }
                Pdf::create([
                    'entry_id' => $entry->id,
                    'pdf_type_id' => $type_id,
                    'pdf' => $pdf
                ]);
            }

            return redirect()->back()->with('success', 'Entry Added Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entry = Entry::find($id);
        $data = [
            'entry'=> $entry,
            'title' => 'Entry Details',
            'active' => 'Entries',
            'breadcrumbs' => array("user/entries/index" => "Entries", "user/entry/details/".$entry->id => "Entry Details",),
        ];
        return view('user.entries.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entry = Entry::find($id);
        $data = [
            'entry'=> $entry,
            'title' => 'Update Entry',
            'active' => 'Entries',
            'breadcrumbs' => array("user/entries/index" => "Entries", "user/entry/edit/".$entry->id => "Edit Entry",),
        ];
        return view('user.entries.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $entry = Entry::find($request->id);

            $entry->update($request->all());
            return redirect('user/entries/index')->with('success', 'Entry updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $entry = Entry::find($id);
        $entry->delete();
        return redirect()->back()->with('success','Entry deleted successfully');
    }

    public function pdfs($id){
        $entry = Entry::find($id);
        $pdfs = Pdf::where('entry_id',$entry->id)->get();
        $types = PdfType::all();
        $data = [
            'pdfs' => $pdfs,
            'types'=> $types,
            'entry' => $entry,
            'title' => 'Entry PDFs',
            'active' => 'Entries',
            'breadcrumbs' => array("user/entries/index" => "Entries",),
        ];
        return view('user.entries.pdfs',$data);
    }

    public function updatePdf(Request $request)
    {
        $file = FileHelper::save($request->file, '/'.$request->type_name);
        Pdf::create([
            'entry_id'=> $request->entry_id,
            'pdf_type_id' => $request->pdf_type_id,
            'pdf'=> $file
        ]);
        return redirect()->back()->with('success', $request->type_name.' uploaded!');
    }


    public function export()
    {
        return Excel::download(new EntryExport, 'entries.xlsx');
    }

}
