<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalsWorkflow extends Model
{
    /** @use HasFactory<\Database\Factories\ApprovalsWorkflowFactory> */
    use HasFactory;
     public $timestamps = false; 

    protected $fillable = [
        'doc_id',
        'approver_id',
        'status',
        'comments',
        'requested_at',
        'responded_at',
        'sequence_order',
    ];
}
