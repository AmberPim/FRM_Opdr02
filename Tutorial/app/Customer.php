<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'active','company_id'];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
