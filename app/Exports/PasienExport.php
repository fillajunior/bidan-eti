<?php

namespace App\Exports;

use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PasienExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pasien::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Umur',
            'Nama Suami',
            'Tanggal Awal',
            'Metode',
            'Created_at',
            'Update-at'
        ];
    }
}
