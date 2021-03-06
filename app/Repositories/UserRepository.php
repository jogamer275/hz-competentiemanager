<?php
/**
 * Created Roel van Endhoven
 * User: Roel van Endhoven
 * Date: 8-12-16
 * Time: 11:52.
 */

namespace App\Repositories;

use App\Models\Student;
use App\Models\User;
use App\Util\RepositoryInterface;

class UserRepository implements RepositoryInterface
{
    //TODO: add update functionality.

    /**
     * Returns User with given id from database.
     *
     * @param  $id
     *
     * @return User
     */
    public function getById($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Returns all instances of User in the database.
     *
     * @return Collection|User[]
     */
    public function getAll()
    {
        return User::orderBy('name', 'asc')->get();
    }

    /**
     * Returns instance of coupled student if possible.
     *
     * @return Collection|Student[]
     */
    public function getStudent($id)
    {
        return User::find($id)->student;
    }

    /**
     * Creates a new competency and stores it in the database.
     *
     * @param array $attributes
     *
     * @return Competency
     */
    public function create(array $attributes)
    {
        return User::create($attributes);
    }

    /**
     * Removes users with given ids from the database.
     *
     * @param array|int $ids
     *
     * @return mixed
     */
    public function delete($id)
    {
        return User::destroy($id);
    }
}
