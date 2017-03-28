<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderAction
 */
class OrderAction extends Model
{
    protected $table = 'order_action';

    protected $primaryKey = 'action_id';

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'action_user',
        'order_status',
        'shipping_status',
        'pay_status',
        'action_place',
        'action_note',
        'log_time'
    ];

    protected $guarded = [];

        
}