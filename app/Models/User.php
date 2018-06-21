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
                           'name',
                           'email',
                           'password',
                          ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
                         'password',
                         'remember_token',
                        ];

    /**
     * Many to many elequent relation with competencies. (or collection if called without parentheces).
     *
     * @return Elequent Relation
     */
    public function competencies()
    {
        return $this->hasMany('App\Competency');
    }

//end competencies()

    /**
     * If assigned to a project as contact, will return that relation.
     *
     * @return Elequent Relation
     */
    public function contactOfProject()
    {
        return $this->belongsTo('App\Models\Project', 'project_contact_id');
    }

//end contactOfProject()

/**
 * Returns which students have chosen which competency
 * @return Eloquent Relation
 */

public function competencyOfUser()
    {
        return $this->belongsToMany('App\Models\User', 'user_competencies', 'user_id', 'competency_id');
    }

//end competencyOfUser()

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
