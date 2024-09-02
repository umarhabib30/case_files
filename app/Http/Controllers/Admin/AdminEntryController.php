<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EntryExport;
use App\Http\Controllers\Controller;
use App\Models\Entry;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\FileHelper;

class AdminEntryController extends Controller
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
            'diagram_no',
            'diagram_status'
        ])->paginate(10);

        $data = [
            'title' => 'Entries',
            'active' => 'Entries',
            'entries' => $entries,
            'breadcrumbs' => array("admin/entries/index" => "Entries"),
        ];
        return view('admin.entries.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Add Entry',
            'active' => 'Entries',
            'breadcrumbs' => array("admin/entries/index" => "Entries", "admin/entries/create" => "Add Entry",),
        ];
        return view('admin.entries.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        if ($request->pdf_file) {
            $file = FileHelper::save($request->pdf_file, '/acquisition_plans');
            $data['upload_acquisition_plan'] = $file;
        }
        if ($request->acquisition_area_extend_type == 'm2') {
            $data['acquisition_area_extend'] = $request->acquisition_area_extend / 10000;
        }
        if ($request->parent_area_extend_type == 'm2') {
            $data['parent_property_area']  = $request->parent_property_area / 10000;
        }
        try {
            Entry::create($data);
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
            'entry' => $entry,
            'title' => 'Entry Details',
            'active' => 'Entries',
            'breadcrumbs' => array("admin/entries/index" => "Entries", "admin/entry/details/" . $entry->id => "Entry Details",),
        ];
        return view('admin.entries.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entry = Entry::find($id);
        $data = [
            'entry' => $entry,
            'title' => 'Update Entry',
            'active' => 'Entries',
            'breadcrumbs' => array("admin/entries/index" => "Entries", "admin/entry/edit/" . $entry->id => "Edit Entry",),
        ];
        return view('admin.entries.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $entry = Entry::find($request->id);

         $entry->update($request->all());
            return redirect('admin/entries/index')->with('success', 'Entry updated successfully');
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
        return redirect()->back()->with('success', 'Entry deleted successfully');
    }

    public function pdfs($id)
    {
        $entry = Entry::find($id);
        $data = [
            'entry' => $entry,
            'title' => 'Entry PDFs',
            'active' => 'Entries',
            'breadcrumbs' => array("admin/entries/index" => "Entries",),
        ];
        return view('admin.entries.pdfs', $data);
    }

    public function updatePdf(Request $request)
    {
        $entry = Entry::find($request->id);
        $file = FileHelper::save($request->upload_acquisition_plan, '/acquisition_plans');
        $entry->update(['upload_acquisition_plan' => $file]);
        return redirect()->back()->with('success', 'Acquisition Plan updated!');
    }

    public function export()
    {
        return Excel::download(new EntryExport, 'entries.xlsx');
    }
}
