<?php

namespace Halimtuhu\ArrayFiles;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(Request $request)
    {
        return "array files by halimtuhu";
    }

    public function upload(Request $request)
    {
        $disk = $request->disk ? $request->disk : 'public';
        $path = $request->path ? $request->path : '/';

        $file = Storage::disk($disk)->putFile($path, $request->file('file'));

        $data = [
            'originalName' => $request->file('file')->getClientOriginalName(),
            'name' => $file,
            'url' => Storage::url($file),
        ];

        return $data;
    }

    public function delete($file)
    {
        Storage::delete($file);

        return "success";
    }
}
