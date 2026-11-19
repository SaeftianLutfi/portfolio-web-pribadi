<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'issuer',
        'certificate_number',
        'issue_date',
        'expiration_date',
        'certificate_file',
        'credential_url',
        'description',
        'sort_order',
        'is_active',
    ];

    protected function cast():array
    {
        return [
            'issue_date' => 'datetime',
            'expiration_date' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
