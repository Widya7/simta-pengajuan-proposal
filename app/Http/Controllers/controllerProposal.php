<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelProposal;

class controllerProposal extends Controller
{
    public function index()
    {
        return view('mengajukanproposal');
    }

    public function simpan(Request $request){
            $file = $request->file;
            $filenameWithExt = $request->file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file->getClientOriginalExtension();
            $filenameSimpan = (int) $filename.'.'.$extension;
            $destinationPath = 'images';
            /* $path = $request->file->storeAs('images', $filenameSimpan); */
            $file->move($destinationPath,(int)$file->getClientOriginalName());

            $prop = modelProposal::create([
                'nrp' => $request->nrp,
                'nama' => $request->nama,
                'judul' => $request->judul,
                'lb' => $request->lb,
                'file' => $filenameSimpan,
            ]);
            return redirect()->route('mengajukanproposal');
    }
}
