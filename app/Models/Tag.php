<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ActionAttributeTrait;
class Tag extends Model
{
	use ActionAttributeTrait;
    protected $table = 'tags';

    protected $fillable = ['name','add_time'];

    private $action;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    	$this->action = config('admin.global.role.action');
    }

}
