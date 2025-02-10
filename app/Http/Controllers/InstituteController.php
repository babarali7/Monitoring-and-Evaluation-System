<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institute = Institute::all();

        $districts = DB::table('districts')->get();
       
        return view('institute.index', [
            'institute' => $institute,
            'districts' => $districts
        ]);

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

        $this->validate($request, [
            'district' => 'required',
            'ins_name' => 'required',
        ]);
       

        if($request->input('ins_id') != "") {

           // echo "updated";

           $ins = Institute::where("inst_id", $request->input('ins_id'))->update(
                    ['inst_name' => $request->input('ins_name'),
                    'districts_id' => $request->input('district'),
                    'ddo_code' => $request->input('ddo_code'),
                    'type' => $request->input('type'),
                    'date_of_establishment' => date("Y-m-d",strtotime($request->input('date_of_establishment'))),
                    'building_status' => $request->input('building_status'),
                    'tot_building_area' => $request->input('tot_building_area'),
                    'covered_area' => $request->input('covered_area'),
                    'trades_offered' => $request->input('trades_offered'),
                    'ins_gender' => $request->input('ins_gender'),
                    'technology_offered' => $request->input('technology_offered'),
                    'tot_teaching_staff' => $request->input('tot_teaching_staff'),
                    'tot_managerial_staff' => $request->input('tot_managerial_staff'),
                    'no_of_classrooms' => $request->input('no_of_classrooms'),
                    'no_of_labs' => $request->input('no_of_labs'),
                    'latitude' => $request->input('latitude'),
                    'longitude' => $request->input('longitude')
                    ]     
                );

                return redirect()->route('institute.index')
                ->with('success','Institute Updated successfully');    

        } else {
         
            //echo "inserted";
           // exit();
        
            $ins = Institute::create(
                    ['inst_name' => $request->input('ins_name'),
                    'districts_id' => $request->input('district'),
                    'ddo_code' => $request->input('ddo_code'),
                    'type' => $request->input('type'),
                    'date_of_establishment' => date("Y-m-d",strtotime($request->input('date_of_establishment'))),
                    'building_status' => $request->input('building_status'),
                    'tot_building_area' => $request->input('tot_building_area'),
                    'covered_area' => $request->input('covered_area'),
                    'trades_offered' => $request->input('trades_offered'),
                    'ins_gender' => $request->input('ins_gender'),
                    'technology_offered' => $request->input('technology_offered'),
                    'tot_teaching_staff' => $request->input('tot_teaching_staff'),
                    'tot_managerial_staff' => $request->input('tot_managerial_staff'),
                    'no_of_classrooms' => $request->input('no_of_classrooms'),
                    'no_of_labs' => $request->input('no_of_labs'),
                    'latitude' => $request->input('latitude'),
                    'longitude' => $request->input('longitude')
                    ]     
                );


            return redirect()->route('institute.index')
                            ->with('success','Institute created successfully');
        }                    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        // 
       // print_r($_POST);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        $institute->delete();

        return redirect()->route('institute.index')
            ->withSuccess(__('Institute deleted successfully.'));
    }


    public function approve($id)
    {
        // 
        $institute = Institute::find($id);

        return json_encode($institute);
    
    }


}

