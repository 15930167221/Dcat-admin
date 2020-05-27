<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'work_order';
    public $timestamps = false;

}
