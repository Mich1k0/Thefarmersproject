<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['Region_name', 'Region_conditions', 'Crop_ID'];

    public function crop()
    {
        
       
return $this->belongsTo(Crop::class);
    }
}
