<?php

namespace App\Services;

use App\Repositories\Interfaces\InsuranceCompanyRepositoryInterface;

class InsuranceCompanyService
{
    protected $repo;

    public function __construct(InsuranceCompanyRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function storeData(array $data)
    {
        return $this->repo->create($data);
    }

    public function getAll()
    {
        return $this->repo->all();
    }

    public function with($relations)
    {
        return $this->repo->with($relations);
    }
}
