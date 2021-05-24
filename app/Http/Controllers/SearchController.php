<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function searchCompanies(Request $request) {
        use HasFactory;
        protected $table = 'companies';
        $per_page = $request->get('per_page');					
        $name = $request->get('name')	
        $obj = new Companies();					
        $companies = $obj->where('company_name', 'like', "%name%")->paginate($per_page);					
    }
}
