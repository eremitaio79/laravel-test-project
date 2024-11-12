<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // e79: Nome da tabela.
    protected $table = 'courses';

    // e79: Colunas que serão cadastradas.
    protected $fillable = ['name', 'price'];
}
