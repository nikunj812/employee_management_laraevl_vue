<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name', 'middle_name', 'address', 'department_id','country_id','state_id','city_id','zip_code','birth_date','hired_date'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
