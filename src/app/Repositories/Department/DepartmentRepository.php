<?php
declare(strict_types=1);

namespace App\Repositories\Department;

use App\Models\Department;

use Illuminate\Support\Collection;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    protected $department;

    /**
    * @param object $department
    */

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): Collection
    {
        return $this->department->all();
    }
}
