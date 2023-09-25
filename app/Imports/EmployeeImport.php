<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'Kegiatan' => $row[1],
            'Uraian' => $row[2],
            'Rkap' => $row[3],
            'Januari' => $row[4],
            'Febuari' => $row[5],
            'Maret' => $row[6],
            'April' => $row[7],
            'Mei' => $row[8],
            'Juni' => $row[9],
            'Juli' => $row[10],
            'Agustus' => $row[11],
            'September' => $row[12],
            'Oktober' => $row[13],
            'November' => $row[14],
            'Desember' => $row[15]
        ]);
    }
}
