<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    public function deleteOldImages()
    {
        $oldImages = Gallery::where('created_at', '<', Carbon::now()->subDays(30))->get();

        foreach ($oldImages as $image) {
            // eliminar archivo de la carpeta
            Storage::delete('public/ingresos/' . $image->filename);
            // eliminar entrada de la base de datos
            $image->delete();
        }

        return response()->json(['message' => 'Imágenes antiguas eliminadas correctamente.']);
    }
}
