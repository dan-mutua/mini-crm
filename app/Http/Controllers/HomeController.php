<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Company $companies) {

        $companies = Company::select('id', 'name', 'email', 'website')
            ->groupBy('id', 'name', 'email', 'website')
            ->get();

        $employees = Employee::whereIn('company_id', $companies->pluck('id'))->paginate(10);
    
        return view('home', compact('companies'));
    }

    public function addCompany() {
        return view('create');
    }


    // public function index(Employee $employees){
    //     $employees= Employee::select('first_name', 'last_name', 'company_id', 'email', 'phone')
    //         ->groupBy('id','first_name', 'last_name', 'phone', 'email')
    //         ->get();
    // return view('home', compact('employees'));
    // }
}
