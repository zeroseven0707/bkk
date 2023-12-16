<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardHomeController extends Controller
{
    public function index(){
    
    $dashboards = Dashboard::latest();
   
        return view ('dashboard',[
            "dashboards" =>  $dashboards->paginate(4)
            // "dashboards" => Dashboard::all()
         ]); 
    }
    public function show(Dashboard $dashboard)
    {
        return view('dashboardshow',[
            'dashboard' => $dashboard
        ]);
    }
}
