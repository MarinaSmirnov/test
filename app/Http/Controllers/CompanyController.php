<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::find(1);

        if($company && isset($company->id)){

            $project = $company->project()->first();

            // on progress
        }

    }
}
