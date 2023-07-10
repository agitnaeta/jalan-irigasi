<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalan extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable =[
        'nomor_ruas',
        'nama_ruas',
        'panjang',
    ];

    public function getPanjangLabelAttribute(){
        return $this->panjang_label = $this->panjang.' km';
    }
}
