<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PremisesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($premid = null)
    {
        //
        $data = DB::table('premises')
                ->join('sites', 'sites.siteID', '=', 'premises.siteID')
                ->join('users', 'users.userID', '=', 'premises.userID')
                ->join('asbestos_plans', 'asbestos_plans.premisesID', '=', 'premises.premisesID')
                ->join('organisations', 'organisations.orgID', '=', 'premises.orgID')
                ->select('premises.premisesID', 'premises.premisesAdr', 'sites.addressL1', 'sites.addressL2', 
                'sites.town', 'sites.county', 'sites.postCode', 'sites.lAuth', 'organisations.orgName', 
                'asbestos_plans.planID', 'asbestos_plans.monitorDate', 'asbestos_plans.commPlan', 
                'asbestos_plans.userID', 'asbestos_plans.creationDate', 'users.foreName', 'users.surName')
                ->where('premises.premisesID', $premid)
                ->get();

        /**$usr = UsrModel::all();
        $orgs = OrgModel::all();
        $site = SiteModel::all();
        $premises = PremisesModel::all();
        $plans = PlanModel::all();**/

        return view('pages.details', compact('data', 'premid'));

        /**$usr = UserModel::all()->toArray();
        return view('pages.dashboard', compact('usr'));
        $org = OrgModel::all()->toArray();
        return view('pages.dashboard', compact('org'));
        $site = SiteModel::all()->toArray();
        return view('pages.dashboard', compact('site'));
        $premises = PremisesModel::all()->toArray();
        return view('pages.dashboard', compact('premises'));**/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
