<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EntryExport;
use App\Http\Controllers\Controller;
use App\Models\Entry;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
            'entries'=> $entries,
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
        try {
            Entry::create($request->all());
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
            'breadcrumbs' => array("admin/entries/index" => "Entries", "admin/entry/details/".$entry->id => "Entry Details",),
        ];
        return view('admin.entries.show',$data);
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
            'breadcrumbs' => array("admin/entries/index" => "Entries", "admin/entry/edit/".$entry->id => "Edit Entry",),
        ];
        return view('admin.entries.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $entry = Entry::find($request->id);
            $entry->update($request->all());
            return redirect('admin/entries/index')->with('success','Entry updated successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
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
        $data = [
            'title' => 'Entry PDFs',
            'active' => 'Entries',
            'breadcrumbs' => array("admin/entries/index" => "Entries",),
        ];
        return view('admin.entries.pdfs',$data);
    }

    public function export()
    {
        return Excel::download(new EntryExport, 'entries.xlsx');
    }
}
