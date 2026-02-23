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

   public function store(Request $request)
{
    $data = $request->validate([
        'first_name'   => 'required|string|max:100',
        'last_name'    => 'nullable|string|max:100',
        'phone_number' => 'required|string|max:20',
        'course'       => 'nullable',
        'city'         => 'nullable|string|max:150',
        'query'        => 'nullable',
    ]);

    // Convert array → string (safety fix)
    if (is_array($data['course'] ?? null)) {
        $data['course'] = implode(',', $data['course']);
    }

    if (is_array($data['query'] ?? null)) {
        $data['query'] = implode(',', $data['query']);
    }

    $data['status'] = 'new';

    AdmissionEnquiry::create($data);

    return back()->with('success', 'Enquiry submitted successfully');
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
