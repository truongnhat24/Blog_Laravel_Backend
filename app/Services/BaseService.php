<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Foundation\Http\FormRequest;

abstract class BaseService
{

     /**
     * @var boolean
     */
    protected $collectsData = false;

    /**
     * @var App\Repositories\RepositoryInterface
     */
    public $repository;

    /**
     * Set the handler
     *
     * @param 
     * @return self
     */
    public function all()
    {
        $this->repository->all();
    }

     /**
     * @var mixed
     */
    protected $data;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $handler;

    /**
     * Set the data
     *
     * @param mixed $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = ($data instanceof Collection || ! $this->collectsData) ? $data : new Collection($data);

        return $this;
    }

    /**
     * Set the handler
     *
     * @param \Illuminate\Database\Eloquent\Model $handler
     * @return self
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;

        return $this;
    }

    /**
     * Set the request to service
     *
     * @param FormRequest $request
     * @return self
     */
    public function setRequest(FormRequest $request)
    {
        $this->setHandler($request->user());
        $this->setData($request->validated());
        return $this;
    }
}