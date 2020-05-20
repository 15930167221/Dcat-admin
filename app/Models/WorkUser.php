<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class WorkUser extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'work_user';
    public $timestamps = false;

}
