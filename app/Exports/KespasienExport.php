<?php

namespace App\Exports;

use App\Models\personal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KespasienExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return personal::all();
    }
    public function map($data): array
    {
        return [
            $data->id,
            $data->pasien->name,
            $data->tgl_datang,
            $data->berat_badan,
            $data->tinggi_darah,
            $data->tgl_kembali,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Tanggal Datang',
            'Berat Badan',
            'Tekanan Darah',
            'Tanggal Kembali',
        ];
    }
}
