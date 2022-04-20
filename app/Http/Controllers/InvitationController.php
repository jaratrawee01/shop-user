<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Invitation;


class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::table('invitations')->get();
        

        return view('invitation.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invitation.invitationCode');
    }

    public function getData(Request $request)
    {
        $id = $request->id;
        $data = Invitation::find($id);

        return response()->json($data);
        # code...
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'code' => 'required|max:255',
        ]);
        $id =  Auth::user()->id;
        $code = $request->code . "" .$id;
        $status = $request->status;
        if ($status !== null) {
            $status = $request->status;
        }else{
            $status = "off";
        }
       $data = new Invitation;
        $data->code = $code;
        $data->status= $status;
        $data->idUser= $id;
        $data->enrol= $request->enrol;
        $data->percent = $request->percent;


        $data->save();
        return redirect('/getInvitation');
    /*  return Redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว"); */
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

        $user = Invitation::find($id);
        return view('invitation.invitationCodeEdit',['user' => $user]);
        

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
        
        $request->validate([
            'code' => 'required|max:255',
        ]);
        $idUser =  Auth::user()->id;
        $idCode = $request->code . "" .$id;
        $status = $request->status;
        if ($status !== null) {
            $status = $request->status;
        }else{
            $status = "off";
        }
 
        $data = Invitation::find($id);
        $data->code = $idCode;
        $data->status = $status;
        $data->idUser= $idUser;
        $data->enrol= $request->enrol;
        $data->percent= $request->percent;
        $data->save();

     /*    DB::table('invitations')->insert($data); */
        return redirect('/getInvitation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Invitation::find($id);
        $flight->delete();
        return response()->json(['success'=>'Data is successfully added']);
    }
}
