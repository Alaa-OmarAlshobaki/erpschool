<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateInstit;
use App\Http\Requests\Admin\StoreAcademic;
use App\Http\Requests\Admin\UpdateAcademic;
use App\Http\Requests\Admin\UpdateImportStudent;
use Illuminate\Http\Request;
use Auth;
use Response;
use App\Models\Institution;
use App\Models\Admin;
use App\Models\Academic;
use App\Models\Student;
use App\Traits\helper;
use App\Models\Guardian;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use DateTime;

use DateTimeZone;
class loginAdminController extends Controller
{
    use helper;
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(){
        // $this->middleware('guest:admin')->except('logout');
    
    }
      //login for admin
      public function showAdminLoginForm(){
        return view('auth.login',['url'=>'admin']);
    }
    public function adminLogin(Request $request){
        $this->validate($request,['email'=>'required|email',
                                  'password'=>'required|min:6']);
                           
                   
    if(Auth::guard('admin')->attempt(['email'=>$request->email,
                                     'password'=>$request->password,
                                     ])){
                                      
                                         return redirect()->intended('/admin');
                                     }
                                     return back()->withInput($request->only('email','remeber'));
    }
    # function for institution **************************************************************************************************************
    // function for view institu
	public function index(){
		return view('admin.institution.institutionDetails');

	}
  // function for  return data from database for institution
    public function InstitutionDetails($id){
		$institutiondata=Institution::find($id);//return data According to id
        $info = Institution::all()->toArray();// return all data from model institution
        $data=Institution::find(1)->Admin()->get();//retern data from other table relashinship
		$timezone=Institution::first()->TimeZoneList();//return timezone from function in model institution
        return view('admin.institution.institutionDetails', compact('info','data','timezone','institutiondata'));
 
	}

	// function for update institution
	public function update(UpdateInstit $request ,$id){

	 $institution= Institution::find($id);
	 $institution->Institution_Name = $request->Institution_Name;
	 $institution->Institution_Address = $request->Institution_Address;
	 $institution->Institution_Email = $request->Institution_Email;
	 $institution->Institution_Mobile = $request->Institution_Mobile;
   $institution->Institution_Fax = $request->Institution_Fax;
	 $institution->Country =$request->Country;
	 $institution->Currency_Type =$request->Currency_Type;
	 $institution->Language=$request->Language;
	 $institution->codechek-$request->codechek;
	 $institution->Institution_Code=$request->Institution_Code;
	 $institution->timezone=$request->timezone;
	 $institution->save();
	 return back();
    
	}

  //***************************************************************************************************************************************************** */


  // acadimic 
  //function for view acadimic ******************************************************************
  public function indexAcademic(){
    // $acadimic= Acadimic::get();
 return view('admin.Academic.AcademicDetails');
  }
//function for return view edit for model academic
  public function EditAcademic($id){
    $Academic= Academic::find($id);
    return view('admin.Academic.update', compact('Academic'));

}
//function for update data for model academic
public function updateAcademic(UpdateAcademic $request, $id ){
    $Academic= Academic::find($id);
    $Academic->Start_Year=$request->Start_Year;
    $Academic->Start_Month=$request->Start_Month;
    $Academic->End_Year=$request->End_Year;
    $Academic->End_Month=$request->End_Month;
    $Academic->status=$request->status;
    $Academic->save();
    // return back();
    return redirect()->route('Academic.Details');

}
#function for return view create
public function CreateAcademic(){
  
    return view('admin.Academic.create');

}

#function for insert data in database for model academic
public function StoreAcademic( StoreAcademic $request){
 
    # first methode
    ##############################################
    $acadimic= new Academic;
   
    $acadimic->Start_Year = $request->Start_Year;
    $acadimic->Start_Month = $request->Start_Month;
    $acadimic->End_Year = $request->End_Year;
    $acadimic->End_Month = $request->End_Month;
    $acadimic->status = $request->status;
    $acadimic->institution_id = 1;
    $acadimic->save();
    return redirect()->route('Academic.Details');
 ##################################################
 #second method
    //  $acadimic = Academic::create(array_merge($request->only(
 
    //       'Start_Year','Start_Month','End_Year','End_Month','status',['institution_id'=>'1'],

    //                                                        )));
    //  $acadimic->save();
    //  return redirect()->route('Academic.Details');

}
// function for retern all data academic by datatable
  public function datatable()
  {
      $Academic = Academic::latest()->get();

        return Datatables::of($Academic)
          ->editColumn('id', function ($Academic) {
              static $id = 1;
              return $id++;
          })
       
      
          ->editColumn('Start_Year', function ($Academic) {
              return  $Academic->Start_Year;
          })

          ->editColumn('Start_Month', function ($Academic) {
              return  $Academic->Start_Month;
          })

          ->editColumn('End_Year', function ($Academic) {
              return  $Academic->End_Year;
          })
          ->editColumn('End_Month', function ($Academic) {
              return  $Academic->End_Month;
          })

          ->editColumn('status', function ($Academic) {
              return  $Academic->status;
          })

          ->addColumn('actions', function ($Academic) {
              $UpdateRoute = route('editAcademic', $Academic->id);

              return view('admin.Action.update', compact('UpdateRoute'));
          })
          ->make(true);
  }

#function for edit import student
public function EditImportStudent($id){
$guardian= Guardian::get();
$importStudent= Student::find($id);
return view('admin.importStudent.update',compact('importStudent','guardian'));
}

#function for apdate importStudent
public function UpdateImportStudent($id ,UpdateImportStudent $request){
    // مادام معلماتك نفس المعلومة لماذا کتبت هکذا؟ ابدیت
    // قصدي

    // بامکانك ان تکتب  هكذا اسهل من ذلك

    // الفرق بين هذا و هذا 
    // $guardian= Guardian::whereId($request->guardians_id)->update($request->all());
    // //  وهذا فتط للسكيوريتی عندما ترید ان تحدد فیل
    // $guardian= Guardian::whereId($request->guardians_id)->update($request->only('student_admission_no','student_admission_date','student_firstname','student_middlename','student_lastname','email','password','phone','gender','city','state','street','placeOfBirth','ID_number','statuse'));
    
    // $guardian= Guardian::create($request->all());

    $guardian= Guardian::find($request->guardians_id);
    $updateImportStu= Student::find($id);
    $updateImportStu->student_admission_no=$request->input('student_admission_no');
    $updateImportStu->student_admission_date=$request->input('student_admission_date');
    $updateImportStu->student_firstname=$request->student_firstname;
    $updateImportStu->student_middlename=$request->student_middlename;
    $updateImportStu->student_lastname=$request->student_lastname;
    $updateImportStu->email=$request->input('email');
    $updateImportStu->password= Hash::make($request->password);
    $updateImportStu->phone=$request->input('phone');
    $updateImportStu->gender=$request->input('gender');
    $updateImportStu->city=$request->input('city');
    $updateImportStu->state=$request->input('state');
    $updateImportStu->street=$request->input('street');
    $updateImportStu->placeOfBirth=$request->input('placeOfBirth');
    $updateImportStu->ID_number=$request->input('ID_number');
    $updateImportStu->statuse=$request->statuse;
    if($request->avatar !=null){
        $updateImportStu->avatar = $this->UpImage($request->avatar, "avatar");
    }
    $updateImportStu->guardians_id=$request->guardians_id;
    $updateImportStu->save();
    $updateImportStu->guardians()->associate($guardian);

    return redirect()->route('Student.Import');
    
}
//function for create student
public function CreateStu(){
    $guardian= Guardian::get();
return view('admin.importStudent.create' ,compact('guardian'));
}

//function for store data student
public function storeStudent( Request $request){
    $guardian= Guardian::find($request->guardians_id);
    $guardian= new Guardian;
    $guardian->fnameForFather=$request->fnameForFather;
    $guardian->lnameForFather=$request->lnameForFather;
    $guardian->fnameForMother=$request->fnameForMother;
    $guardian->lnameForMother=$request->lnameForMother;
    $guardian->email=$request->email;
    $guardian->password= Hash::make($request->password);
    $guardian->city=$request->city;
    $guardian->state=$request->state;
    $guardian->street=$request->street;
    $guardian->ID_number_Father=$request->ID_number_Father;
    $guardian->ID_number_Mather=$request->ID_number_Mather;
    $guardian->placeOfBirthMather=$request->placeOfBirthMather;
    $guardian->placeOfBirthFather=$request->placeOfBirthFather;
    $guardian->birthdateForMa=$request->birthdateForMa;
    $guardian->birthdateForFa=$request->birthdateForFa;
    $guardian->fatherJob=$request->fatherJob;
    $guardian->motherJob=$request->motherJob;
    $guardian->qualificationFather=$request->qualificationFather;
    $guardian->qualificationMather=$request->qualificationMather;
    $guardian->Average_year_income=$request->Average_year_income;
    $guardian->phone=$request->phone;
    $guardian->mobile=$request->mobile;
    $guardian->save();
    $storeStu= new Student;
    $storeStu->student_admission_no=$request->student_admission_no;
    $storeStu->student_admission_date=$request->student_admission_date;
    $storeStu->student_firstname=$request->student_firstname;
    $storeStu->student_middlename=$request->student_middlename;
    $storeStu->student_lastname=$request->student_lastname;
    $storeStu->email=$request->email;
    $storeStu->password= Hash::make($request->password);
    $storeStu->phone=$request->phone;
    $storeStu->placeOfBirth=$request->placeOfBirth;
    $storeStu->gender=$request->gender;
    $storeStu->statuse=$request->statuse;
    if($request->avatar !=null){
        $storeStu->avatar = $this->UpImage($request->avatar, "avatar");
    }
    // $storeStu->avatar=$request->avatar;
    $storeStu->city=$request->city;
    $storeStu->state=$request->state;
    $storeStu->street=$request->street;
    $storeStu->ID_number=$request->ID_number;
    $storeStu->guardians_id=$guardian->id;
    $storeStu->save();
   
    $storeStu->guardians()->associate($guardian);
    // $storeStu->guardians()->save($guardian);
    return redirect()->route('Student.Import');


}


  //function for model import student

  public function IndexImportStu(){
    return view('admin.importStudent.StudentImport');

  }
  public function DatableImportStu(){

    $Students = Student::latest()->get();
  

    return Datatables::of($Students)
      ->editColumn('id', function ($Students) {
          static $id = 1;
          return $id++;
      })
      ->editColumn('student_admission_no', function ($Students) {
        return  $Students->student_admission_no;
    })

    ->editColumn('student_admission_date', function ($Students) {
        return  $Students->student_admission_date;
    })

    ->editColumn('student_firstname', function ($Students) {
        return  $Students->student_firstname;
    })
      ->editColumn('student_middlename', function ($Students) {
          return  $Students->student_middlename;
      })

      ->editColumn('student_lastname', function ($Students) {
          return  $Students->student_lastname;
      })

      ->editColumn('email', function ($Students) {
          return  $Students->email;
      })
      ->editColumn('password', function ($Students) {
          return  $Students->password;
      })

      ->editColumn('phone', function ($Students) {
          return  $Students->phone;
      })
      ->editColumn('gender', function ($Students) {
        return  $Students->gender;
    })

    ->editColumn('city', function ($Students) {
        return  $Students->city;
    })

    ->editColumn('state', function ($Students) {
        return  $Students->state;
    })
    ->editColumn('street', function ($Students) {
        return  $Students->street;
    })

    ->editColumn('placeOfBirth', function ($Students) {
        return  $Students->placeOfBirth;
    })
    ->editColumn('ID_number', function ($Students) {
        return  $Students->ID_number;
    })

    ->editColumn('statuse', function ($Students) {
        return  $Students->statuse;
    })
    ->editColumn('avatar', function ($Students) {
        return  $Students->avatar;
    })

    ->editColumn('guardians_id', function ($Students) {
        
        return  $Students->guardians->fnameForFather ."  ".  $Students->guardians->lnameForFather ;

  
    })

      ->addColumn('actions', function ($Students) {
          $UpdateRoute = route('editImportStudent', $Students->id);

          return view('admin.Action.update', compact('UpdateRoute'));
      })
      ->make(true);

  }





}
