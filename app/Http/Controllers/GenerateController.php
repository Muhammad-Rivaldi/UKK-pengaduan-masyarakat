<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use Barryvdh\DomPDF\Facade as PDF;

class GenerateController extends Controller
{
    public function generatePDF()
    {
        $data = Pengaduan::all();
        $pdf = PDF::loadView('pdf', ['data' => $data])->setPaper(
            'a4',
            'landscape'
        );
        $pdf
            ->getDomPdf()
            ->getOptions()
            ->set('enable_php', true);
        return $pdf->stream();
    }

    public function view()
    {
        $data = Pengaduan::all();

        return view('pdf', compact('data'));
    }
}
