<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{
    use HasFactory;
    protected $table = 'visits';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'session_id',
        'ip_hash',
        'path',
        'referrer',
        'user_agent',
        'device_type',
        'browser',
        'visited_at',
    ];

    protected function cast(): array
    {
        return [
            'visited_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
