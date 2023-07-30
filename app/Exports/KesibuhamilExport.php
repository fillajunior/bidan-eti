<?php

namespace App\Exports;

use App\Models\Kes_ibu_hamil;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KesibuhamilExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kes_ibu_hamil::all();
    }

    public function map($Kes_ibu_hamil): array
    {
        return [
            $Kes_ibu_hamil->id,
            $Kes_ibu_hamil->ibu->name,
            $Kes_ibu_hamil->tanggal,
            $Kes_ibu_hamil->keluhan_sekarang,
            $Kes_ibu_hamil->tekanan_darah,
            $Kes_ibu_hamil->berat_badan,
            $Kes_ibu_hamil->umur_kehamilan,
            $Kes_ibu_hamil->letak_janin,
            $Kes_ibu_hamil->denyut_jantung,
            $Kes_ibu_hamil->kaki_bengkak,
            $Kes_ibu_hamil->tindakan,
            $Kes_ibu_hamil->tambahan,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Tanggal',
            'Keluhan',
            'Tekanan Darah',
            'Berat Badan',
            'Umur Kehamilan',
            'Letak Janin',
            'Denyut Jantung',
            'Kaki Bengkak',
            'Tindakan',
            'Tambahan',
        ];
    }
}
