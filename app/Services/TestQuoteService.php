<?php

namespace App\Services;

use App\Repositories\Interfaces\TestQuoteRepoRepositoryInterface;

class TestQuoteService
{
    protected $repo;
    public function __construct(TestQuoteRepoRepositoryInterface $repo)
    {
     $this->repo=$repo;   
    }
    public function saveTestQuote(array $data)
    {
        $this->repo->create($data);
    }
}
