<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irigasi extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'nama_daerah',
        'luas_area',
        'panjang',
        'lebar',
        'desa',
        'keterangan',
    ];

    public function getPanjangLabelAttribute(){
        return $this->panjang_label = $this->panjang.' m';
    }
    public  function getLebarLabelAttribute(){
        return $this->lebar_label = $this->lebar.' m';
    }

    public function getLuasAreaLabelAttribute(){
        return $this->luas_area_label = $this->luas_area.' ha';
    }
}
