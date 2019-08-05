<?php


namespace App\Repositories;


class AbstractRepository
{
    protected $model;

    /**
     * @param array $fields
     * @return mixed
     */
    public function all(array $fields = ['*'])
    {
        return $this->model->all($fields);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
