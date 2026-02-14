<?php

namespace App\Http\Controllers;

use App\Models\AdmissionEnquiry;
use Illuminate\Http\Request;

class AdmissionEnquiryController extends Controller
{
    public function index()
    {
        $enquiries = AdmissionEnquiry::latest()->get();
        return view('admin.admission-enquiries.index', compact('enquiries'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,closed',
        ]);

        $enquiry = AdmissionEnquiry::findOrFail($id);

        $enquiry->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        AdmissionEnquiry::findOrFail($id)->delete();

        return back()->with('success', 'Enquiry deleted successfully');
    }
}
