<?php

namespace App\Http\Controllers;

use App\User as UsrModel;
use App\Site as SiteModel;
use App\Premises as PremisesModel;
use App\Organisation as OrgModel;
use App\AsbestosPlan as PlanModel;

use Illuminate\Http\Request;

class DashboardCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'usr' => UsrModel::all()->toArray(),
        'orgs' => OrgModel::all()->toArray(),
        'site' => SiteModel::all()->toArray(),
        'premises' => PremisesModel::all()->toArray(),
        'plans' => PlanModel::all()->toArray()];
        return view('pages.dashboard', compact('data'));

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
