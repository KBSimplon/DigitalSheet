<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function user()
    {
    	return $this->belongsTo(User::class);
    }

     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'avatar', 'formation', 'place',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}


// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Student extends Model
// {
//      use Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'lastname', 'firstname', 'avatar', 'formation', 'place',
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
        
//     ];
// }