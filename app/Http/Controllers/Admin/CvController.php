<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CvUpload;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function index()
    {
        $cvs = CvUpload::latest()->get();

        return view('admin.cvs.index', compact('cvs'));
    }

    public function download(CvUpload $cv)
    {
        if (!$cv->path || !Storage::disk('public')->exists($cv->path)) {
            abort(404, 'El archivo del CV no existe.');
        }

        return Storage::disk('public')->download($cv->path, $cv->original_name ?? basename($cv->path));
    }
}