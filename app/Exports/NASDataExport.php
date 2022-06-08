<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
use Maatwebsite\Excel\Concerns\WithTitle;

class NASDataExport implements FromCollection, WithHeadings, WithTitle
{
    protected $data;
    protected $title;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data, $title)
    {
        $this->data = $data;
        $this->title = $title;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        $data = collect($this->data[1]);
        foreach ($data as $item) {
            unset($item->id);
        }
        return $data;
    }

    public function title(): string
    {
        return $this->title;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return array_diff($this->data[0], ['id']);
    }
}
