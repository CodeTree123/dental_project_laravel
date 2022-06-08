<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\treatment_plan;
use App\Models\treatment_info;
use Illuminate\Http\Request;
use Session;

class MainController extends Controller
{
    public function patient_info(Request $request)
    {

        $filename='';
        if($request->hasFile('image'))
        {

            $file= $request->file('image');
            if ($file->isValid()) {
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('patient',$filename);
            }
        }

    patient_infos::create([

        'name'=>$request->name,
        'age'=>$request->age,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
        'Blood_group'=>$request->Blood_group,
        'date'=>$request->date,
        'occupation'=>$request->occupation,
        'address'=>$request->address,
        'email'=>$request->email,
        'image'=>$filename,


    ]);

    return redirect()->back();

    }


    public function search(Request  $request,$id)
    {
        $doctor_info=doctor::where('id','=',$id)->first();

        $request->validate([
            'search'=> 'required'
        ]);
        $patient=patient_infos::where('mobile','like','%'.$request->search.'%')->get();
        // dd($patient->all());

        // return redirect()->back();
        return view('Find_patient',compact('doctor_info','patient'));
    }

    public function update_patient(Request $request,$id)
    {
        patient_infos::find($id)->update([


            'bp_high'=>$request->bp_high,
            'bp_low'=>$request->bp_low,
            'Bleeding_disorder'=>$request->Bleeding_disorder,
            'Heart_Disease'=>$request->Heart_Disease,
            'Allergy'=>$request->Allergy,
            'Diabetic'=>$request->Diabetic,
            'Pregnant'=>$request->Pregnant,
            'Helpatics'=>$request->Helpatics,
            'other'=>$request->other
        ]);

        return redirect()->route('view_patient',$id);
    }

    public function view_patient($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $c_c = chife_complaint::all();
        $c_f = clinical_finding::all();
        $t_p = treatment_plan::all();
        $treatment_infos = treatment_info::where('p_id','like',$p_id)->get();
        return view('view_patient',compact('doctor_info','patient','c_c','c_f','t_p','treatment_infos'));
    }

    public function treatment_info(Request $request,$p_id){
        // dd($request->all());
        $pc_c = $request->pc_c;
        $pc_c = implode(',',$pc_c);
        $pc_f = $request->pc_f;
        $pc_f = implode(',',$pc_f);
        $pt_p = $request->pt_p;
        $pt_p = implode(',',$pt_p);

        $treatment_info = new treatment_info();
        $treatment_info->p_id = $p_id;
        $treatment_info->tooth_type = $request->tooth_type;
        $treatment_info->tooth_no = $request->tooth_no;
        $treatment_info->tooth_side = $request->tooth_side;
        $treatment_info->chife_complaints = $pc_c;
        $treatment_info->clinical_findings = $pc_f;
        $treatment_info->treatment_plans = $pt_p;
        $res = $treatment_info->save();

        return redirect()->back();
//         json_encode($request->pc_c)
// json_encode($request->pc_f)
// json_encode($request->pt_p)
    }
    public function treatments($p_id,$t_id,$t_plans){
        $patient=patient_infos::findOrFail($p_id);
        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();

            if($t_plans == 'Restoration'){
                return view('treatmentplans',compact('patient','treatment_info'));
            }else{
                return "Hello";
            }
        // return view('treatmentplans');

    }
    public function prescription($p_id,$t_id,$t_plans){
        // $patient=patient_infos::findOrFail($id);
        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();
        $pc_c=$treatment_info->chife_complaints;
        $pc_c = explode(',',$pc_c);
        // dd($pc_c);

                return view('prescription', compact('pc_c'));

        // return view('treatmentplans');

    }


}
