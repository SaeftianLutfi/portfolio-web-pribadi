<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'thumbnail',
        'project_type',
        'role',
        'start_date',
        'end_date',
        'github_url',
        'demo_url',
        'documentation_url',
        'is_featured',
        'status',
        'sort_order'
    ];

    protected function cast():array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
}
