<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $is_delayed
 * @property bool $is_cancelled
 */

class Train extends Model
{
    public function isDelayed(): string
    {
        return $this->is_delayed ? 'Delayed' : 'On time';
    }

    public function isCancelled(): string
    {
        return $this->is_cancelled ? 'Cancelled' : "/";
    }
}
