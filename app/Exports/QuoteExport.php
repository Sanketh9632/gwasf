<?php

namespace App\Exports;

use App\Models\GraduationRegister;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuoteExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($quote_details, $dataHeader)
    {
        $this->quote_details = $quote_details;
        $this->dataHeader = $dataHeader;
    }

    public function headings(): array
    {
        return $this->dataHeader;
    } 

    public function array(): array
    {
        return $this->quote_details;
    }
}
