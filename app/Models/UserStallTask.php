<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserStallTask extends Pivot
{
    protected $guarded = [];
    
    protected $table = 'user_stall_task';

}
