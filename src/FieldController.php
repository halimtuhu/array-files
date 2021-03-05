<?php

namespace Halimtuhu\ArrayFiles;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
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
        $url = config('filesystems.disks.' . $disk . '.driver') == 's3' ?
            Storage::disk($disk)->temporaryUrl($file, now()->addMinutes(30)) :
            Storage::disk($disk)->url($file);

        $data = [
            'originalName' => $request->file('file')->getClientOriginalName(),
            'name' => $file,
            'url' => $url,
        ];

        return $data;
    }

    public function delete($file)
    {
        Storage::delete($file);

        return "success";
    }
}
