<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        //dd(request()->user());
        if(request()->user()->hasRole('supervisor')){
            return redirect('/supervisor-dashboard');
        }elseif(request()->user()->hasRole('factory_operator')){
            return redirect('/factory-operator-dashboard');
        }elseif(request()->user()->hasRole('truck_operator')){
            return redirect('/truck-operator-dashboard');
        }
        elseif(request()->user()->hasRole('labour')){
            return redirect('/labour-dashboard');
        }
        elseif(request()->user()->hasRole('superadministrator')){
            return redirect('/superadministrator-dashboard');
        }
        elseif(request()->user()->hasRole('administrator')){
            return redirect('/administrator-dashboard');
        }
        // elseif(request()->user()->hasRole('truck_operator')){
        //     return redirect('/gym-member-dashboard');
        // }
        // return redirect('/admin-dashboard');
    }

    public function supervisorDash(){
        return Inertia::render('supervisor/supervisorDashboard');
    }
    
    public function factoryoperatorDasg(){
        return Inertia::render('factory_operator/factoryoperatorDashboard');
    }
    
    public function truckoperatorDash(){
        return Inertia::render('truck_operator/truckoperatorDashboard');
    }

    public function labourDash(){
        return Inertia::render('labour/labourDashboard');
    }

    public function superadministratorDash(){
        return Inertia::render('superadministrator/superadministratorDashboard');
    }

    public function administratorDash(){
        return Inertia::render('administrator/administratorDashboard');
    }

    // public function truckoperatorDash(){
    //     return Inertia::render('GymMember/GymmemberDashboard');
    // }

    // public function truckoperatorDash(){
    //     return Inertia::render('GymMember/GymmemberDashboard');
    // }
    //
}
