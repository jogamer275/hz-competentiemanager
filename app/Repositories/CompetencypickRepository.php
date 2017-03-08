<?php

namespace App\Repositories;

use App\Models\Competencypick;
use App\Util\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CompetencypickRepository implements RepositoryInterface
{
    /**
     * Returns competencypick with given id from database.
     *
     * @param  $id
     *
     * @return mixed
     */
    public function getById($id)
    {
        return Competencypick::findOrFail($id);
    }

//end getById()

    /**
     * Returns all competencypicks in the database.
     *
     * @return Collection|Competency[]
     */
    public function getAll()
    {
        return Competencypick::get();
    }

//end getAll()

    /**
     * Creates a new competency and stores it in the database.
     *
     * @param array $attributes
     *
     * @return Competency
     */
    public function create(array $attributes)
    {
        return Competencypick::create($attributes);
    }

//end create()

    /**
     * Removes competencies with given ids from the database.
     *
     * @param int $ids
     *
     * @return mixed
     */
    public function delete($ids)
    {
        return Competencypick::destroy($ids);
    }

//end delete()

    /**
     * Updates given fields of the repository with the given id.
     *
     * @param  array
     * @param int $id
     *
     * @return Competency
     */
    public function update($data, $id)
    {
        $result = Competencypick::findOrFail($id)->update($data);
        Competencypick::findOrFail($id)->save();

        return $result;
    }

//end update()
}//end class
