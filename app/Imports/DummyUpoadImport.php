<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;

class DummyUpoadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upload([
            //
        ]);
    }
}
