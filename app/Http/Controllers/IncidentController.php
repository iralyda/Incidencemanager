<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Incident;
class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incident::all();
        return view('Incidents.index',compact("incidents"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Incidents.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incident= new Incident();
        /*dd($request->all());*/
        $incident->Incident_Description=$request->get('Incident_Description');

        $incident->Root_cause = $request->get('Root_cause');
        $incident->Action_taken = $request->get('Action_taken');
        $date = date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $incident->date = strtotime($format);
        $incident->save();
        
        return redirect('index')->with('success', 'Information has been added');
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
        $incident = Incident::find($id);
        return view('Incidents.edit', compact('incident','id'));
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

        $incident = Incident::find($id);
        $incident->Incident_Description=$request->get('Incident_Description');
        $incident->Root_cause=$request->get('Root_cause');
        $incident->Action_taken=$request->get('Action_taken');
        $incident->save();
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $incident = Incident::find($id);
        $incident->delete();
        return redirect('index')->with('success','Information has been  deleted');
    }
}
