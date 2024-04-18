<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\SalesModel;

class salesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return SalesModel::all();
    }
}
