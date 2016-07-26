<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['site_name', 'user_id'];

    /**
     * Every site has one admin who creates it
     *
     * @param null
     * @return null
     */
    public function users()
    {
    	return $this->belongsToMany('App\User', 'sites_users');
    }
}
