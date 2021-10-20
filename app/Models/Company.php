<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\str;
use Kyslik\ColumnSortable\Sortable;


class Company extends Model
{

  protected $table = "companies";
    use Sortable;
    use HasFactory;

    public function employee()
    {
        return $this->hasMany(Employee::class);

    }

    public $sortable = [
        'id',
        'company_name',
        'email',
        'website',
      ];
    protected $fillable = [
        'company_name',
        'email',
        'website',
        'logo',

    ];
}
