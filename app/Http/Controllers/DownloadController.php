<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Jersey; // Ensure you have a Jersey model

class DownloadController extends Controller
{
    // public function downloadJerseyPdf($id)
    // {
    //     // Fetch the jersey details based on ID
    //     $jersey = Jersey::findOrFail($id);

    //     // Prepare data for the PDF
    //     $data = [
    //         'first_name' => $jersey->first_name,
    //         'last_name' => $jersey->last_name,
    //         'email' => $jersey->email,
    //         'mobile_number' => $jersey->mobile_number,
    //         'jersey_size' => $jersey->jersey_size,
    //         'left_chest_logo' => $jersey->left_chest_logo ?? 'N/A',
    //         'right_chest_logo' => $jersey->right_chest_logo ?? 'N/A',
    //         'team_name' => $jersey->team_name ?? 'N/A',
    //         'material_choice' => $jersey->material_choice,
    //         'patterns' => $jersey->patterns ?? 'N/A',
    //         'special_instructions' => $jersey->special_instructions ?? 'None',
    //     ];

    //     // Load the view and generate the PDF
    //     $pdf = Pdf::loadView('pdf.jersey', ['formData' => $data]);

    //     // Return the PDF for download
    //     return $pdf->download('Jersey_Details_' . $id . '.pdf');
    // }
}
