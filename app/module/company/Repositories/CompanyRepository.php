<?php

namespace App\module\company\Repositories;

use Jsdecena\Baserepo\BaseRepository;
use App\module\company\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{
    //
    public function __construct(Company $company){
    	parent::__construct($company);
    	$this->model = $company;
    }

    public function infocompany():Collection
    {
    	return $this->model->get()->all();
    }

    public function addcompany(array $params):Company
    {
    	try
    	{
    		$collection = collect($params);
    		$COM_NAME 	= $params['comname'];
    		$SHORT_NAME = $params['shortname'];
    		$EMAIL		= $params['email'];
            $STATUS     = 'Active';
            $TEL        = '0123456789';
            $FAX        = '0123456789';
    		$merge = $collection->merge(compact('COM_NAME','SHORT_NAME','EMAIL','STATUS','TEL','FAX'));
    		$company = new Company($merge->all());
    		$company->save();
    		return $company;
    	}
    	catch(QueryException $e){
    		//throw new CategoryInvalidArgumentException($e->getMessage());
    		return 'Lỗi';
    	}
    }
}
