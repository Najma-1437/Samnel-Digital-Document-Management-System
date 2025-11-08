<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentFactory> */
    use HasFactory;
    
    public $timestamps = true;
    protected $fillable = [
        'title', 'description', 'file_path', 'file_type', 'status',
        'created_by', 'updated_by', 'parent_doc_id'
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'created_by', 'id');
}


    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
