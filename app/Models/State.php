<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;
use App\Models\Employee;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['country_id','name'];
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->hasMany(City::class);
    }
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
