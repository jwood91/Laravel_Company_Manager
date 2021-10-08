<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\str;


class Company extends Model
{

  protected $table = "companies";

    use HasFactory;

    public function employee()
    {
        return $this->hasMany(Employee::class);
        
    }
}
