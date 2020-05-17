<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = [ 
                            'title',
                            'image',
                            'description',
                        ];

}
