<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtesMateriais extends Model
{
    protected $table = 'artes_materiais';

    protected $primaryKey = 'idArteMaterial';

    public $timestamps = false;

    public function arte()
    {
        return $this->belongsTo(Arte::class, 'idArte');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'idMaterial');
    }
}
