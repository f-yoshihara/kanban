<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 * @property int    task_id
 * @property int    order
 * @property string title
 * @property string note
 * @property Carbon started_at
 * @property Carbon done_at
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Step extends Model
{
    protected $fillable = [
        'title',
        'note'
    ];

    protected $dates = [
        'started_at',
        'done_at',
        'created_at',
        'updated_at'
    ];
}
