<?php
declare(strict_types=1);

namespace App\Repositories\Department;

use App\Models\Department;

use Illuminate\Support\Collection;

interface DepartmentRepositoryInterface
{
    /**
     * 部署を全件取得します。
     * @return object 取得した部署
     */
    function getAll(): Collection;
}
