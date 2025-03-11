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

// normal
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
    //         'left_logo' => 'nullable|string|max:255', // Text input or predefined logo
    //         'right_logo' => 'nullable|string|max:255', // Text input or predefined logo
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

    //         // Generate PDF using the model object
    //         $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $jersey]);

    //         // Send email with PDF attachment
    //         Mail::to('24riyavaidya@gmail.com')->send(new JerseyFormMail($jersey, $pdf));

    //         return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');

    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error: ' . $e->getMessage());
    //     }
    // }

    // array n string wtot jersey fields
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         // Personal Information (Allow Multiple Entries)
    //         'first_name' => 'array',
    //         'first_name.*' => 'string|max:15|nullable',
    //         'last_name' => 'array',
    //         'last_name.*' => 'string|max:255|nullable',
    //         'email' => 'array',
    //         'email.*' => 'email|max:255|nullable',
    //         'mobile_number' => 'array',
    //         'mobile_number.*' => 'string|max:15|nullable',

    //         // Jersey Specifications (Allow Multiple Entries)
    //         'jersey_size' => 'array',
    //         'jersey_size.*' => 'string|max:10|nullable',
    //         'material_choice' => 'array',
    //         'material_choice.*' => 'string|max:255|nullable',

    //         // Additional Fields
    //         'left_chest_logo_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
    //         'right_chest_logo_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
    //         'left_logo' => 'string|max:255|nullable',
    //         'right_logo' => 'string|max:255|nullable',
    //         'team_name' => 'string|max:255|nullable',
    //         'patterns' => 'string|max:255|nullable',
    //         'special_instructions' => 'string|max:500|nullable',
    //     ]);

    //     try {
    //         // Handle file uploads
    //         $validatedData['left_chest_logo_image'] = $request->hasFile('left_chest_logo_image')
    //             ? $request->file('left_chest_logo_image')->store('logos', 'public')
    //             : null;

    //         $validatedData['right_chest_logo_image'] = $request->hasFile('right_chest_logo_image')
    //             ? $request->file('right_chest_logo_image')->store('logos', 'public')
    //             : null;

    //         // Check if only one record is entered
    //         if (count($validatedData['first_name']) == 1) {
    //             $jersey = Jersey::create([
    //                 'first_name' => $validatedData['first_name'][0] ?? null,
    //                 'last_name' => $validatedData['last_name'][0] ?? null,
    //                 'email' => $validatedData['email'][0] ?? null,
    //                 'mobile_number' => $validatedData['mobile_number'][0] ?? null,
    //                 'jersey_size' => $validatedData['jersey_size'][0] ?? null,
    //                 'material_choice' => $validatedData['material_choice'][0] ?? null,
    //                 'left_chest_logo_image' => $validatedData['left_chest_logo_image'],
    //                 'right_chest_logo_image' => $validatedData['right_chest_logo_image'],
    //                 'left_logo' => $validatedData['left_logo'],
    //                 'right_logo' => $validatedData['right_logo'],
    //                 'team_name' => $validatedData['team_name'],
    //                 'patterns' => $validatedData['patterns'],
    //                 'special_instructions' => $validatedData['special_instructions'],
    //                 'personal_info' => null, // Not needed for a single entry
    //                 'jersey_specifications' => null, // Not needed for a single entry
    //             ]);
    //         } else {
    //             // Convert multiple records to JSON
    //             $personalInfo = [];
    //             foreach ($validatedData['first_name'] ?? [] as $index => $firstName) {
    //                 $personalInfo[] = [
    //                     'first_name' => $firstName,
    //                     'last_name' => $validatedData['last_name'][$index] ?? null,
    //                     'email' => $validatedData['email'][$index] ?? null,
    //                     'mobile_number' => $validatedData['mobile_number'][$index] ?? null,
    //                 ];
    //             }
    //             $personalInfoJson = json_encode($personalInfo);

    //             $jerseySpecs = [];
    //             foreach ($validatedData['jersey_size'] ?? [] as $index => $size) {
    //                 $jerseySpecs[] = [
    //                     'jersey_size' => $size,
    //                     'material_choice' => $validatedData['material_choice'][$index] ?? null,
    //                 ];
    //             }
    //             $jerseySpecsJson = json_encode($jerseySpecs);

    //             $jersey = Jersey::create([
    //                 'first_name' => null, // Not needed for multiple entries
    //                 'last_name' => null,
    //                 'email' => null,
    //                 'mobile_number' => null,
    //                 'jersey_size' => null,
    //                 'material_choice' => null,
    //                 'left_chest_logo_image' => $validatedData['left_chest_logo_image'],
    //                 'right_chest_logo_image' => $validatedData['right_chest_logo_image'],
    //                 'left_logo' => $validatedData['left_logo'],
    //                 'right_logo' => $validatedData['right_logo'],
    //                 'team_name' => $validatedData['team_name'],
    //                 'patterns' => $validatedData['patterns'],
    //                 'special_instructions' => $validatedData['special_instructions'],
    //                 'personal_info' => $personalInfoJson,
    //                 'jersey_specifications' => $jerseySpecsJson,
    //             ]);
    //         }

    //         // Generate and attach PDF
    //         $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $jersey]);
    //         Mail::to('24riyavaidya@gmail.com')->send(new JerseyFormMail($jersey, $pdf));

    //         return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Something went wrong. Please try again.');
    //     }
    // }

    // In your JerseyController.php
public function store(Request $request)
{
    $validatedData = $request->validate([
        // Personal Information
        'first_name' => 'string|max:15|nullable',
        'last_name' => 'string|max:255|nullable',
        'email' => 'email|max:255|nullable',
        'mobile_number' => 'string|max:15|nullable',

        // Jersey Specifications
        'jersey_size' => 'array',
        'jersey_size.*' => 'string|max:10|nullable',
        'material_choice' => 'array',
        'material_choice.*' => 'string|max:255|nullable',
        'sleeves' => 'array',
        'sleeves.*' => 'string|max:10|nullable',
        'number' => 'array',
        'number.*' => 'integer|nullable',
        'name' => 'array', // Independent name field
        // 'name.*' => 'string|max:255|nullable',

        // Additional Fields
        'left_chest_logo_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        'right_chest_logo_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        'left_logo' => 'string|max:255|nullable',
        'right_logo' => 'string|max:255|nullable',
        'team_name' => 'string|max:255|nullable',
        'patterns' => 'string|max:255|nullable',
        'special_instructions' => 'string|max:500|nullable',
    ]);

    try {
        // Store original file objects for email attachments
        $leftLogoFile = $request->hasFile('left_chest_logo_image') ? $request->file('left_chest_logo_image') : null;
        $rightLogoFile = $request->hasFile('right_chest_logo_image') ? $request->file('right_chest_logo_image') : null;

        // Handle file uploads for database storage
        $validatedData['left_chest_logo_image'] = $leftLogoFile
            ? $leftLogoFile->store('logos', 'public')
            : null;

        $validatedData['right_chest_logo_image'] = $rightLogoFile
            ? $rightLogoFile->store('logos', 'public')
            : null;

        // Convert multiple jersey specifications to JSON
        $jerseySpecs = [];
        foreach ($validatedData['jersey_size'] ?? [] as $index => $size) {
            $jerseySpecs[] = [
                'name' => $validatedData['name'][$index] ?? null, // Independent name field
                'jersey_size' => $size,
                'material_choice' => $validatedData['material_choice'][$index] ?? null,
                'sleeves' => $validatedData['sleeves'][$index] ?? null,
                'number' => $validatedData['number'][$index] ?? null,
            ];
        }
        $jerseySpecsJson = json_encode($jerseySpecs);

        // Store the data
        $jersey = Jersey::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile_number'],
            'jersey_size' => null, // Stored in JSON
            'material_choice' => null, // Stored in JSON
            'sleeves' => null, // Stored in JSON
            'number' => null, // Stored in JSON
            'left_chest_logo_image' => $validatedData['left_chest_logo_image'],
            'right_chest_logo_image' => $validatedData['right_chest_logo_image'],
            'left_logo' => $validatedData['left_logo'],
            'right_logo' => $validatedData['right_logo'],
            'team_name' => $validatedData['team_name'],
            'patterns' => $validatedData['patterns'],
            'special_instructions' => $validatedData['special_instructions'],
            'jersey_specifications' => $jerseySpecsJson, // Store JSON with independent name field
        ]);

        // Generate PDF
        $pdf = Pdf::loadView('emails.jersey_form_mail', ['jersey' => $jersey]);

        // Send email with PDF and logo image attachments
        Mail::send('emails.jersey_form_mail', ['jersey' => $jersey], function ($message) use ($jersey, $pdf, $leftLogoFile, $rightLogoFile) {
            $message->to('24riyavaidya@gmail.com')
                    ->subject('New Jersey Order Form Submission');

            // Attach the PDF
            $message->attachData($pdf->output(), 'Jersey_Order_'.$jersey->id.'.pdf');

            // Attach the left chest logo if provided
            if ($leftLogoFile) {
                $message->attach($leftLogoFile->getRealPath(), [
                    'as' => 'left_chest_logo.' . $leftLogoFile->getClientOriginalExtension(),
                    'mime' => $leftLogoFile->getMimeType(),
                ]);
            }

            // Attach the right chest logo if provided
            if ($rightLogoFile) {
                $message->attach($rightLogoFile->getRealPath(), [
                    'as' => 'right_chest_logo.' . $rightLogoFile->getClientOriginalExtension(),
                    'mime' => $rightLogoFile->getMimeType(),
                ]);
            }
        });

        return redirect()->route('jersey')->with('success', 'Your Jersey order has been submitted successfully!');
    } catch (\Exception $e) {
        // Log the error for debugging
        Log::error('Jersey order error: ' . $e->getMessage());
        return back()->with('error', 'Something went wrong. Please try again.');
    }
}





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
