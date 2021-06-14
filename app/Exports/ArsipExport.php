<?php

namespace App\Exports;

use App\Arsip;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ArsipExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Arsip::all();
    }

    public function map($arsip):array
    {
        return [
            $arsip->nama,
            $arsip->jenis,
            $arsip->ns,
            $arsip->keperluan,
            $arsip->alamat,
            $arsip->tanggal,
            $arsip->nohp,
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA',
            'JENIS',
            'Nomor Special',
            'Keperluan',
            'Alamat',
            'Tanggal',
            'No HP',
        ];
    }
}
