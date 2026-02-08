<?php

namespace App\Http\Controllers;

use App\Models\CvUpload;
use Illuminate\Support\Facades\Storage;

class CvPublicController extends Controller
{
    public function downloadLatest()
    {
        $cv = CvUpload::latest()->firstOrFail();

        // Verificar que el archivo exista
        if (!Storage::disk('public')->exists($cv->path)) {
            abort(404, 'El archivo del CV no existe.');
        }

        return Storage::disk('public')->download(
            $cv->path,
            $cv->original_name
        );
    }
}