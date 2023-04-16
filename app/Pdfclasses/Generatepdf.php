<?php

namespace App\Pdfclasses;

use mikehaertl\pdftk\Pdf;

class Generatepdf
{

    public function save($data, $path)
    {
        $filename = \Carbon\Carbon::now()->format('m-d-Y_His') . '.pdf';
        $zxc = public_path('test.pdf');
        $pdf = new Pdf($zxc, [
            'command' => '/snap/bin/pdftk',
            'useExec' => true,
        ]);
        $pdf->fillForm($data)
            ->flatten()
            ->saveAs($path . '/' . $filename);

        dd($pdf->getError());
    }

    public function view($data)
    {
        $headers = [
            'Cache-Control' => 'no-cache',
        ];
        $filename = \Carbon\Carbon::now()->format('m-d-Y_His');
        $pdf = new Pdf('./survey_form.pdf');
        $pdf->fillForm($data)
            ->flatten()
            ->send($filename, $headers);
        return $filename;
    }
}
