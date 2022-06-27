<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    public $timestamp = true;

    protected $fillable = array('titulo', 'descricao', 'timestamp');

    use HasFactory;
}
