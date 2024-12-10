<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[ 
    'country_id',
    'state_id',
    'city_id',
    'department_id',
    'first_name',
    'last_name',
    'middle_name',
    'address',
    'zip_code',
    'date_of_birth',
    'date_hired'
    ];
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
