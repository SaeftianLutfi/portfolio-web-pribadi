<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CVProfileExperience extends Model
{
    use HasFactory;
    protected $table = 'cv_profile_experiences';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'cv_profile_id',
        'experience_id',
        'sort_order'
    ];

    protected function cast():array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
