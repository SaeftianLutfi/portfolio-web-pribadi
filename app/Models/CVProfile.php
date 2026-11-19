<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CVProfile extends Model
{
    use HasFactory;
    protected $table = 'cv_profiles';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'slug',
        'target_position',
        'profesional_summary',
        'template',
        'show_photo',
        'show_summary',
        'show_projects',
        'show_experiences',
        'show_educations',
        'show_certificates',
        'show_skills',
        'is_active',
        'is_default'
    ];

    protected function cast():array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
