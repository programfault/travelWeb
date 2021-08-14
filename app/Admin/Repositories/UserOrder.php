<?php

namespace App\Admin\Repositories;

use App\Models\UserOrder as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
