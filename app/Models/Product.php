<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'neme',
        'qty',
        'price',
        'description',
    ];
}

