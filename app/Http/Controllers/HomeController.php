<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Model\Assignment;
use App\Model\Lead;
//use Illuminate\Foundation\Auth\User;
use App\Model\LogActivity;
use App\Model\Product;
use App\Model\Role;
use App\Model\RoleType;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if(isset($user)){
            return redirect()->route('dashboard');
//            $roletype = User::getUserByID($user->id);
////            dd($roletype);
//            if($roletype->roletypeCode == 'tipster'){
////                dd('UI for tipster');
//                return redirect()->route('uitipsters.home');
//            }else{
//                return redirect()->route('dashboard');
//            }
        }else {
            return redirect()->route('login');
        }
        //return view('home');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $recentleads = Lead::getRecentLeads(5);
        foreach ($recentleads as $recentlead){
            $recentlead->created_date = Common::dateFormat($recentlead->created_at,'d-M-Y');
            $recentlead->status_text = Common::showNameStatus($recentlead->status);
            $recentlead->status_color = Common::colorStatus($recentlead->status);
            $recentlead->product = Product::getProductByID($recentlead->product_id)->name;
        }

        $recenttipsters = User::getRecentTipsters(5);
//        $mostactivetipsters = User::getMostActiveTipsters(10);

        /*get 10 Tipsters had lead introduces are heightest*/
        $mostactivetipsters = Lead::getTipsterHeighestLead(5);
//        dd($mostactivetipsters);

        $statusByRecentTipster = Lead::sumStatusByRecentLead(5);
//        dd($statusByRecentTipster);

        $highestPointTipsters = User::getHighestPointTipster();

        $new = 0;
        $call =0;
        $quote = 0;
        $win = 0;
        $lost = 0;
        foreach($statusByRecentTipster as $sumStatus){
            switch ($sumStatus->status) {
                case 0:
                    $new = $sumStatus->countStatus;
                    break;
                case 1:
                    $call = $sumStatus->countStatus;
                    break;
                case 2:
                    $quote = $sumStatus->countStatus;
                    break;
                case 3:
                    $win = $sumStatus->countStatus;
                    break;
                case 4:
                    $lost = $sumStatus->countStatus;
                    break;
            }
        }

        /*Get log activities by role*/
        $auth = Auth::user();
        $roleAuth = Role::getInfoRoleByID($auth->role_id);
        $logActivities = [];
        if($roleAuth->code == 'admin'){
            $logActivities = LogActivity::getAllLogs();
        }else{
            $logActivities = LogActivity::getLogActivityByUserID($auth->id);
        }

        foreach ($logActivities as $logActivity){
            $logActivity->user_name = User::getUserByID($logActivity->user_id)->username;
            $logActivity->fullname = User::getUserByID($logActivity->user_id)->fullname;
        }

        return view('admin.dashboard',compact('user',$user))->with([
            'recentleads' => $recentleads,
            'recenttipsters' => $recenttipsters,
            'highestPointTipsters' => $highestPointTipsters,
            'mostactivetipsters' => $mostactivetipsters,
            'statusByRecentTipster' => $statusByRecentTipster,
            'new' => $new,
            'call' => $call,
            'quote' => $quote,
            'win' => $win,
            'lost' => $lost,
            'logActivities' => $logActivities
        ]);
    }

}
