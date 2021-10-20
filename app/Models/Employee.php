<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Employee extends Model
{
    use Sortable;
    protected $table = "employee";

    use HasFactory;

    public function company()
   {
       return $this->belongsTo(Company::class);
   }
   public $sortable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
      ];

   protected $fillable = [
       'first_name',
       'last_name',
       'email',
       'phone',
       'company_id',


   ];
}
