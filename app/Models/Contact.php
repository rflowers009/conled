<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    public $timestamps = true;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'honorific', 'suffix',
        'address', 'address2', 'city', 'state', 'zip', 
        'phone_main', 'phone_mobile', 'phone_alt', 
        'email', 'website', 'description', 'tags'
        
    ];
}
