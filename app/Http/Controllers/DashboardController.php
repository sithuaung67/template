<?php

namespace App\Http\Controllers;

use App\City;
use App\HIVAIDSPersonal;
use App\organization;
use App\User;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function chart(){
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            ->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title("Monthly new Register Users")
            ->elementLabel("Total Users")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupByMonth(date('Y'), true);
        return view('chart')->with(['chart'=>$chart]);

    }
    public function donuts(){
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            ->get();
        $donut=Charts::create('donut', 'highcharts')
            ->title('My nice donut')
            ->labels(['First', 'Second', 'Third'])
            ->values([26,40,35])
            ->dimensions(1000,500)
            ->responsive(false);
        return view('donuts')->with(['donut'=>$donut]);

    }
    public function getCity()
    {
        $cit = City::OrderBy('id', 'desc')->get();
        return view('addCity')->with(['cit' => $cit]);
    }

    public function postAddCity(Request $request){

            $cit = new City();
            $cit->name= $request['cit_name'];
            $cit->save();
            return redirect()->back();

    }
    public function postDeleteCity(Request $request){
        $id=$request['id'];
        $cit=City::where('id', $id)->first();
        $cit->delete();
        return redirect()->back()->with('info', "The selected data have been deleted.");
    }

    public function updateCity(Request $request)
    {
        $id = $request['id'];
        $cit = City::whereId($id)->first();
        $cit->name = $request['cit_name'];
        $cit->update();
        return redirect()->route('city');
    }

    public function versionone()
    {
        return view('dashboard.v1');
    }
    public function versiontwo()
    {
        return view('dashboard.v2');
    }
    public function versionthree()
    {
        return view('dashboard.v3');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function getOrganization()
    {
        $cit = Organization::OrderBy('id', 'desc')->get();
        return view('addCity')->with(['cit' => $cit]);
    }






}
