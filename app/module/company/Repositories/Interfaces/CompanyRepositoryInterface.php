<?php

namespace App\module\company\Repositories\Interfaces;

use Jsdecena\Baserepo\BaseRepositoryInterface;
use Illuminate\Support\Collection;

interface CompanyRepositoryInterface extends BaseRepositoryInterface
{
	public function infocompany() : Collection;

	public function addcompany(array $params) : Company;

	public function updatecompany(array $params) :Company;
}
