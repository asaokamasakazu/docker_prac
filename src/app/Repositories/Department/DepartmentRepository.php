<?php

namespace App\Repositories\Department;

use App\Models\Department;

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
    public function getAll(): object
    {
        return $this->department->all();
    }
}
