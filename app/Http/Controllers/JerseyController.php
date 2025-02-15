<?php

namespace App\Http\Controllers;

use App\Models\Jersey;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Mail\JerseyFormMail;
use Illuminate\Support\Facades\Mail;
use Orchid\Support\Facades\Alert;

class JerseyController extends Controller
{
    public function index()
    {
        return view('jersey', ['jerseys' => Jersey::all()]);
    }

    public function create()
    {
        return view('jerseys.create');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'first_name' => 'required|string|max:15',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'mobile_number' => 'required|string|max:15',
    //         'jersey_size' => 'required|string|max:10',
    //         'left_chest_logo' => 'nullable|string|max:255',
    //         'right_chest_logo' => 'nullable|string|max:255',
    //         'team_name' => 'nullable|string|max:255',
    //         'material_choice' => 'required|string|max:255',
    //         'patterns' => 'nullable|string|max:255',
    //         'special_instructions' => 'nullable|string|max:500',
    //     ]);

    //     try {
    //         // Store data in the database
    //         $jersey = Jersey::create($validatedData);

    //         // Generate PDF (without saving)
    //         $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $validatedData]);

    //         // Send email with PDF attachment
    //         Mail::to('24riyavaidya@gmail.com')->send(new JerseyFormMail($validatedData, $pdf));

    //         // return redirect()->back()->with('success', 'Your Jersey order has been submitted successfully!');
    //         return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');

    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error: ' . $e->getMessage());
    //     }
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:15',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|string|max:15',
            'jersey_size' => 'required|string|max:10',
            'left_chest_logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'right_chest_logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'left_logo' => 'nullable|string|max:255', // Text input or predefined logo
            'right_logo' => 'nullable|string|max:255', // Text input or predefined logo
            'team_name' => 'nullable|string|max:255',
            'material_choice' => 'required|string|max:255',
            'patterns' => 'nullable|string|max:255',
            'special_instructions' => 'nullable|string|max:500',
        ]);

        try {
            // Handle left chest logo upload
            if ($request->hasFile('left_chest_logo_image')) {
                $validatedData['left_chest_logo_image'] = $request->file('left_chest_logo_image')->store('logos', 'public');
            }

            // Handle right chest logo upload
            if ($request->hasFile('right_chest_logo_image')) {
                $validatedData['right_chest_logo_image'] = $request->file('right_chest_logo_image')->store('logos', 'public');
            }

            // Store data in the database
            $jersey = Jersey::create($validatedData);

            // Generate PDF using the model object
            $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $jersey]);

            // Send email with PDF attachment
            Mail::to('24riyavaidya@gmail.com')->send(new JerseyFormMail($jersey, $pdf));

            return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'first_name' => 'required|string|max:15',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'mobile_number' => 'required|string|max:15',
    //         'jersey_size' => 'required|string|max:10',
    //         'left_chest_logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'right_chest_logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'left_logo' => 'nullable|string|max:255',
    //         'right_logo' => 'nullable|string|max:255',
    //         'team_name' => 'nullable|string|max:255',
    //         'material_choice' => 'required|string|max:255',
    //         'patterns' => 'nullable|string|max:255',
    //         'special_instructions' => 'nullable|string|max:500',
    //     ]);

    //     try {
    //         // Handle left chest logo upload
    //         if ($request->hasFile('left_chest_logo_image')) {
    //             $validatedData['left_chest_logo_image'] = $request->file('left_chest_logo_image')->store('logos', 'public');
    //         }

    //         // Handle right chest logo upload
    //         if ($request->hasFile('right_chest_logo_image')) {
    //             $validatedData['right_chest_logo_image'] = $request->file('right_chest_logo_image')->store('logos', 'public');
    //         }

    //         // Store data in the database
    //         $jersey = Jersey::create($validatedData);

    //         // Debugging: Log the jersey data
    //         Log::info('Jersey Created:', $jersey->toArray());

    //         // Generate PDF
    //         $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $jersey]);

    //         // Debugging: Check PDF instance
    //         Log::info('PDF Generated, Class: ' . get_class($pdf));

    //         if (!method_exists($pdf, 'output')) {
    //             throw new \Exception("Error: PDF object does not have an output() method.");
    //         }

    //         // Check PDF content
    //         $pdfContent = $pdf->output();
    //         if (empty($pdfContent)) {
    //             throw new \Exception("Error: Generated PDF is empty.");
    //         }

    //         Log::info('PDF Generated Successfully. Size: ' . strlen($pdfContent));

    //         // Send email with PDF attachment
    //         Mail::to('24riyavaidya@gmail.com')->send(new JerseyFormMail($jersey, $pdf));

    //         return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');

    //     } catch (\Exception $e) {
    //         Log::error('Error in Jersey Form Submission: ' . $e->getMessage());
    //         return back()->with('error', 'Error: ' . $e->getMessage());
    //     }
    // }





    // public function downloadPDF($id)
    // {
    //     $order = Jersey::findOrFail($id);
    //     $pdf = PDF::loadView('pdf.jersey', compact('order'));

    //     return $pdf->download('order-details.pdf');
    // }
    public function downloadPdf($id)
    {
        $jersey = Jersey::findOrFail($id);

        if (!$jersey) {
            return redirect()->back()->with('error', 'Jersey order not found.');
        }

        // Load the PDF view
        $pdf = PDF::loadView('pdf.jersey', compact('jersey'));

        // Return PDF for download
        return $pdf->download("Jersey_Order_{$jersey->id}.pdf");
    }





}
