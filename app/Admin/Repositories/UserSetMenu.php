<?php

namespace App\Admin\Repositories;

use App\Models\UserSetMenu as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserSetMenu extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
