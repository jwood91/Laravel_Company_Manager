<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{

  protected $table = "companies";

  use Sortable;
  use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employee()
  {
    return $this->hasMany(Employee::class);
  }


    /**
     * Search function for employees
     * @param $query
     * @param array $filters
     * @return void
     */
    public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, fn ($query, $search) =>
    $query
      ->where('company_name', 'like', '%' . $search . '%')
      ->orWhere('id', 'like', '%' . $search . '%')
      ->orWhere('email', 'like', '%' . $search . '%')
      ->orWhere('website', 'like', '%' . $search . '%'));
  }

  /**
   * Returns companyEmployees
   * @param $id
   *
   */
  public static function companyEmployees($id)
  {
    $company = Company::find($id);

    return $company->employee()->where('company_id', $id)->paginate(5);
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
