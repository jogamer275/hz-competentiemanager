<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                           'competency_name',
                           'user_name'
                          ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * Many to many eloquent relation with competencies. (or collection if called without parentheses).
     *
     * @return Elequent Relation
     */
    public function competencies()
    {
        return $this->hasMany('App\Competency');
    }

//end competencies()

    /**
     * If assigned to a competency as user, will return that relation.
     *
     * @return Elequent Relation
     */
    public function userOfCompetency()
    {
        return $this->belongsTo('App\Models\Competencypick', 'user_id');
    }

//end contactOfProject()

/**
 * Will some day return which users have chosen which competency
 * @return Eloquent Relation
 */
public function competencyOfUser()
{
    return $this->belongsTo('App\Models\User', 'competency_id');
}

//end competencyOfStudent()

    /**
     * Optional link between a User and a Student.
     *
     * @return Elequent Relation
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

//end student()
}//end class
