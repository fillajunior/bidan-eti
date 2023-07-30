<?php

namespace App\Exports;

use App\Models\Kes_ibu_nifas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KesibunifasExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kes_ibu_nifas::all();
    }

    public function map($Kes_ibu_nifas): array
    {
        return [
            $Kes_ibu_nifas->id,
            $Kes_ibu_nifas->ibu->name,
            $Kes_ibu_nifas->tanggal_persalinan,
            $Kes_ibu_nifas->umur_kehamilan,
            $Kes_ibu_nifas->penolong_persalinan,
            $Kes_ibu_nifas->cara_persalinan,
            $Kes_ibu_nifas->keadaan_ibu,
            $Kes_ibu_nifas->keterangan_tambahan,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Tanggal Persalinan',
            'Umur Kehamilan',
            'Penolong Persalinan',
            'Cara Persalinan',
            'Kondisi Ibu',
            'Keterangan',
        ];
    }
}
