<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postal_code', 
        'locality'
    ];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'localities';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the locations for the locality.
     */
    public function location()
    {
        return $this->hasMany('App\Models\Location');
    }
}
