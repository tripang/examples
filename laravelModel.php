<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepairActivity extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'repair_id',
        'department_id',
        'type_id',
        'created_by',
        'remarks'
    ];

    public function case()
    {
        return $this->belongsTo(Repair::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function type()
    {
        return $this->belongsTo(RepairActivityType::class);
    }

    public function createdBy()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
