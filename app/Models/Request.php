<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemRequest extends Model
{
    protected $table = 'requests';

    protected $fillable = [
        'item_id',
        'requester_id',
        'owner_id',
        'status',
        'request_date',
        'approved_date',
        'due_date',
        'actual_return_date',
        'return_condition_description',
        'return_condition_image',
        'penalty_amount',
        'penalty_status',
        'dispute_status',
        'dispute_note'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}