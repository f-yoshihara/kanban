<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 * @property int    user_id
 * @property string title
 * @property string note
 * @property int    order
 * @property Carbon done_at
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'note',
        'order'
    ];

    protected $dates = [
        'done_at',
        'created_at',
        'updated_at'
    ];
}
