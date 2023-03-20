<?php

namespace Modules\TaskModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title','desc','status'];

    protected static function newFactory()
    {
        return \Modules\CustomerModule\Database\factories\TaskFactory::new();
    }
}
