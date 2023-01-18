<?php

namespace App\Repositories\Department;

use App\Models\Department;

interface DepartmentRepositoryInterface
{
    /**
     * 部署を全件取得します。
     * @return object 取得した部署
     */
    function getAll(): object;
}
