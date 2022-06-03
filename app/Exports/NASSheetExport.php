<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\NASDataExport;


class NASSheetExport implements FromArray, WithMultipleSheets
{
    protected $sheets;

    public function __construct(array $sheets)
    {
        $this->sheets = $sheets;
    }

    public function array(): array
    {
        return $this->sheets;
    }
    public function title(): string
    {
        return 'grade';
    }

    public function sheets(): array
    {
        $grades=[3,5,8,10];
        // $sheets = [
        //     new ReportGeneralExport($this->sheets['general']),
        //     new ReportLeadsExport($this->sheets['leads']),
        //     new ReportVideoExport($this->sheets['video'])
        // ];

        foreach($this->sheets as $key=>$sheet){
            $sheets[]= new NASDataExport($sheet,'grade'.$grades[$key]);
        }
        return $sheets;
    }
}
