<?php

namespace App\Exports;

use App\Models\Ibu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IbuExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ibu::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Tempat Lahir',
            'Tanggal_lahir',
            'Agamar Ibu',
            'Pendidikan',
            'Pekerjaan Ibu',
            'Nama Suami',
            'Agama Suami',
            'Pekerjaan Suami',
            'Alamat',
            'Created_at',
            'Update-at'
        ];
    }
}
