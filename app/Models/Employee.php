<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Employee extends Model
{
    use Sortable;
    protected $table = "employees";

    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public static function employeeCompany($id)
    {
        $employee = Employee::find($id);
        return $employee->company()->paginate(5);
//
    }

    /**
     * Search function for employees
     * @param $query
     * @param array $filters
     * @return void
     */
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query
                ->whereHas('company', function ($query) use ($search) {
                    $query->where('company_name', 'like', '%' . $search . '%');
                })
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orWhere('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
        );
    }

    public $sortable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_id',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_id',
    ];
}
