<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $total_employees = User::where('role', 'user')->count();
        $total_company = User::where('role', 'company')->count();
        $total_jobs = Job::count();
        $total_jobs_applied = JobApplication::count();
        return view('admin.dashboard', compact('total_employees', 'total_company', 'total_jobs_applied', 'total_jobs'));
    }
}
