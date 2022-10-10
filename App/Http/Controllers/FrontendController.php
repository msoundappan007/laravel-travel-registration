<?php

    namespace App\Http\Controllers;
use App\models\login;
 

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use config\Session as s;
use Session;




use Illuminate\contracts\Encryption\DecryptException;



class FrontendController extends Controller
{
     
    public function index()
    {
       $students= Student::all();
        return view('layouts.index',compact('students'));
    }
   public function add()
   {
       return view('layouts.add');
  }
    public function insert(Request $request)
    {
       $students = new Student();
        $students -> TravelId=$request->input('TravelId');
        $students -> RequestRaiseddate=$request->input('RequestRaiseddate');
        $students -> Source=$request->input('Source');
        $students -> Destination=$request->input('Destination');
        $students -> ModeOfTravel=$request->input('ModeOfTravel');
        $students -> TravelDate=$request->input('TravelDate');
        $students -> Roundtrip=$request->input('Roundtrip');
       $students->save();
        return redirect('/ ')->with('status',"inserted successfully");
    }
   
   public function edit($id)
   {
       $students= Student::find($id);
       return view('layouts.edit',compact('students'));
   }
   public function update(Request $request,$id)
   {
       $students=Student::find($id);
       $students -> TravelId=$request->input('TravelId');
       $students -> RequestRaiseddate=$request->input('RequestRaiseddate');
       $students -> Source=$request->input('Source');
       $students -> Destination=$request->input('Destination');
       $students -> ModeOfTravel=$request->input('ModeOfTravel');
       $students -> TravelDate=$request->input('TravelDate');
       $students -> Roundtrip=$request->input('Roundtrip');
       $students->update();
       return redirect('/ ')->with('status',"updated successfully");

   }
   public function remove($id)
   {
       $students=Student::find($id);
       $students->delete();
       return redirect('/ ')->with('status',"delete successfully");

   }
   public function register(Request $request)
   {
       return view('layouts.register');
   
   

     
      
   } 
   public function detail(Request $request)
   {

      $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:logins',
          'password'=>'required|min:5|max:12',
          'Address'=>'required',
          'phonenumber'=>'required',
          'gender'=>'required',

      ]);



    $logins = new login();
    $logins  -> name=$request->input('name');
    $logins  -> email=$request->input('email');
    $logins  -> password=Hash::make ($request->input('password'));
    $logins  -> Address=$request->input('Address');
    $logins  -> phonenumber=$request->input('phonenumber');
    $logins  -> gender=$request->input('gender');
    
    $logins ->save();
    if($logins)
    {
          return back()->with('success','you have registered succesfully');
    }
    else{
        return back()->with('fail','Something wrong');
    }
    
   }
   public function admin(Request $request)
   {
    return view('layouts.admin');
   }
   public function logindata(Request $request)
   {

    $request->validate([
        
        'email'=>'required|email',
        'password'=>'required|min:5|max:12', 

    ]);


       $logins= login::where('email','=', $request->email)->first();
       if($logins)
       {
         if(Hash::check($request->password,$logins->password)){
           $request->session()->put('loginId',$logins->id);
           return redirect('dashboard');
         }else{
            return back()->with('fail','Password is not matched');
         }
      }
       else{
        return back()->with('fail','email is not registered ');
       }
    
   } 
   public function dashboard()
    {
        $data=array();
        if (Session::has('loginId')){
           $data= login::where('id','=',Session::get('loginId'))->first();
        }

        return view('layouts.dashboard',compact('data'));
    }
   public function logout(){
        if (Session::has('loginId')){
           Session::pull('loginId');
           return redirect('admin');
       }
    }
}
