<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'books';
    
    protected $fillable = [
          'name',
          'categories_id',
          'authors_id',
          'price',
          'showhide',
          'small photo',
          'vip',
          'photo',
          'description'
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide", ];
    public static $vip = ["0" => "0", "1" => "1"];


    public static function boot()
    {
        parent::boot();

        Books::observe(new UserActionsObserver);
    }
    
    public function categories()
    {
        return $this->hasOne('App\Categories', 'id', 'categories_id');
    }


    public function authors()
    {
        return $this->hasOne('App\Authors', 'id', 'authors_id');
    }


    
    
    
}