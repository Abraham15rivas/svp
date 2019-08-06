<?php

namespace App\Http\Controllers\Holiday;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Holiday;
use App\User;
use Carbon\Carbon;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'available_days' => 'required',
            'enjoyed_days'=>'required',
            'leftover_days'=>'required',
            'period' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'refund_date' => 'required',
            'state' => 'required',
        ]);
        $holiday = new Holiday();
        $holiday->employee_id = $request['employee_id'];
        $holiday->supervisor_id = $request['supervisor_id'];
        $holiday->directorl_id = $request['directorl_id'];
        $holiday->directorg_id = $request['directorg_id'];
        $holiday->available_days = $request['available_days'];
        $holiday->days_taken = $request['days_taken'];
        $holiday->enjoyed_days = $request['enjoyed_days'];
        $holiday->leftover_days = $request['leftover_days'];
        $holiday->period = $request['period'];
        $holiday->start_date = date("Y-m-d", strtotime($request['start_date']));
        $holiday->end_date = date("Y-m-d", strtotime($request['end_date']));
        $holiday->refund_date = date("Y-m-d", strtotime($request['refund_date']));
        $holiday->state = $request['state'];
        $holiday->save();
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
    public function menu(){
        $roleUser = User::roleUser();
        return view('holiday_menu', compact('roleUser'));
    }

    public function getPeriod(){
        $period = Holiday::where('employee_id',auth()->user()->id)->get(['period'])->last();
        $lastyear = Carbon::now()->subYear();
        $lastperiod = $lastyear->format('Y')."-".Carbon::now()->format('Y');
        if($period){
            if($period == $lastperiod){
                $yearact = date('Y');
                $year2 = Carbon::now()->format('Y')->addYear(); 
                $newPeriod = $yearact . '-' . $year2;
                return $newPeriod;
            }elseif($period != $lastperiod){
                $year = substr($period,16,4);
                $year2 = Carbon::now()->addYear(); 
                $newPeriod = $year.'-'.$year2->format('Y');
                return $newPeriod;
            }
        }else{
            $yearact = date('Y');
            $year2 = Carbon::now()->addYear(); 
            $newPeriod = $yearact . '-' . $year2->format('Y');
            return $newPeriod;
        }
    }

    public function getLeftoverDays(){

    }

    public function form_request(){
        return view('form_holiday');
    }
}
