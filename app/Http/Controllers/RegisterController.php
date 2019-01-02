<?php

namespace App\Http\Controllers;
use App\Registerstudent;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

                                // form to add new student
    public function addNew(){
        return view('back.pages.registerstudent');
    }


  public function Admin(){
        return view('back.pages.index');
  }

                             // store new student and redirect
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'  => 'required|string|min:4',
                'email' => 'required|string|email|unique:users',
                'roll' => 'required|max:2',
                'grade' => 'required'

            ]);

        $data['name'] = $request->name;
        $data['grade'] = $request->grade;
        $data['roll'] = $request->roll;
        $data['gender'] = $request->gender;
        $data['dob'] = $request->dob;
        $data['email'] = $request->email;
        $data['shift'] = $request->shift;
        $check = Registerstudent::where('grade', $data['grade'])
                                  ->where('roll', $data['roll'])
                                  ->where('shift', $data['shift'])
                                    ->get();
        if (count($check) == 1) {
          return "already exist";
        }else{
          Registerstudent::create($data);
          return redirect()->route('viewregister');

        }
        


    }

     public function manageStudent(){
        $students = Registerstudent::get();

        return view('back.pages.viewstudent',compact('students'));
     } //manage new student
     
      public function deleteStudent($id){
        $deletestudent = Registerstudent::find($id);
        $deletestudent->delete();
         return redirect()->route('viewregister');
        }//delete students

       // public function editStudent(Request $request,$id){
  
       //      $data['name'] = $request->name;
       //      $data['grade'] = $request->grade;
       //      $data['roll'] = $request->roll;
       //      $data['gender'] = $request->gender;
       //      $data['dob'] = $request->dob;
       //      $data['email'] = $request->email;
       //      $data['shift'] = $request->shift;
       //    Registerstudent::create($data);
       //    return redirect()->route('viewregister');
       // } //edit students

      public function test($id)
      {
        $newstudent = Registerstudent::find($id);
       // print_r($newstudent); die;
        return view('back.pages.updatestudent',['student'=>$newstudent]);
      
      } /// For edit the Studentt form





   


          ///// for Result

     public function addresult()
     {
         return view('back.pages.addresult');
     } // form to add the result



  public function  newresult(Request $request)
  {
      $this->validate($request,[
          'shift'=>'required',
          'grade'=>'required',
          'roll'=>'required',

      ]);
      $shift = $request->shift;
      $grade = $request->grade;
      $roll = $request->roll;
      $result = Registerstudent::where(['shift'=>$shift,'grade'=>$grade,'roll'=>$roll])->get()->first();
      if($result){
          $id = $result->id;
          return view('back.pages.addnewresult',compact('id'));
      }
      else{
          Session::flash('message','No result found.');
          return back();
      }
  } // store new student


  public function update(Request $request,$id)
  {
      $this->validate($request,
          [

              'english' => 'required|max:2',
              'nepali' => 'required|max:2',
              'math' => 'required|max:2',
              'economics' => 'required|max:2',
              'account' => 'required|max:2'
          ]);

      $data['english'] = $request->english;
      $data['account'] = $request->account;
      $data['nepali'] = $request->nepali;
      $data['economics'] = $request->economics;
      $data['math'] = $request->math;
      $data['total']=$data['english'] +$data['math']+$data['account'] +$data['nepali'];
      $update = Registerstudent::where('id',$id)->update($data);
      if($update){
          $students = Registerstudent::get();

          return view('back.pages.viewresult',compact('students'));
      }
      else{
          return 'no';
      }
  } // update student with results




                              //view results


  public function topFive11()
  {
      //$toptens= Registerstudent::orderBy('total', 'DESC')->limit(5)->get();
      $toptens = Registerstudent::where('grade','class 11')->orderBy('total', 'DESC')->limit(5)->get();
      return view('back.pages.topfivefrom11',compact('toptens'));

  } // fetch top five students

  public function poorFrom11()
  {
      $poorfives = Registerstudent::where('grade','class 11')->orderBy('total', 'asc')->limit(3)->get();
      return view('back.pages.poor-five-from-grade-11',compact('poorfives'));
  }// fetch poor students


    public function topFive12()
    {
        $topfives = Registerstudent::where('grade','class 12')->orderBy('total', 'DESC')->limit(5)->get();
        return view('back.pages.top_five_from_twelve',compact('topfives'));
    }

    public function poorFrom12()
    {
        $poorfives = Registerstudent::where('grade','class 12')->orderBy('total', 'asc')->limit(3)->get();
        return view('back.pages.poor-five-from-grade-12',compact('poorfives'));
    }// fetch poor students



    public function totalstudents(){
       $students = Registerstudent::get();
       $totalcount = count($students);
       return view('back.pages.index',compact('totalcount'));
   }/// count total students

   public function Resultpublished(){
    $students=Registerstudent::get()->whereNotIn('total', '')->pluck('total');
    return count($students);
   } // count the published result







                       //students by class

    public function Day11(){
        $students=Registerstudent::where('grade','class 11')
                  ->where('shift','day')
                   ->get();
        return view('back.pages.day_1st_year',compact('students'));
    }


    public function Morning11(){
        $students=Registerstudent::where('grade','class 11')
            ->where('shift','morning')
            ->get();
        return view('back.pages.morning_1st_year',compact('students'));
    }

    public function Morning12(){
        $students=Registerstudent::where('grade','class 12')
            ->where('shift','morning')
            ->get();
        return view('back.pages.morning_2nd_year',compact('students'));
    }

    public function Day12(){
        $students=Registerstudent::where('grade','class 12')
            ->where('shift','day')
            ->get();
        return view('back.pages.day_2nd_year',compact('students'));
    }

    public function viewResults(){
        $students = Registerstudent::get();

        return view('back.pages.viewresult',compact('students'));
    }








                            //user views

    public function checkResults(Request $request){

        $shift = $request->shift;
        $grade = $request->grade;
        $roll = $request->roll;


        $results= Registerstudent::where('shift', $shift)
                            ->where('grade',$grade)
                            ->where('roll',$roll)
                           ->pluck('total');

             if(count($results)==''){

                 echo "nodata";
             }else{
                 $datas=Registerstudent::where('shift', $shift)
                     ->where('grade',$grade)
                     ->where('roll',$roll)
                     ->get();

                 return view('front.viewresult',compact('datas'));

             }
    }



    public function topFrom11()
    {
        //$toptens= Registerstudent::orderBy('total', 'DESC')->limit(5)->get();
        $topfives = Registerstudent::where('grade','class 11')->orderBy('total', 'DESC')->limit(5)->get();
        return view('front.Top_student_from_class11',compact('topfives'));

    }

    public function poorStudent11()
    {
        $poorfives = Registerstudent::where('grade','class 11')->orderBy('total', 'asc')->limit(3)->get();
        return view('front.poor-five-from-grade-11',compact('poorfives'));
    }// fetch poor students


    public function topFives12()
    {
        $topfives = Registerstudent::where('grade','class 12')->orderBy('total', 'DESC')->limit(5)->get();
        return view('front.top_five_from_twelve',compact('topfives'));
    }

    public function poorStudent12()
    {
        $poorfives = Registerstudent::where('grade','class 12')->orderBy('total', 'asc')->limit(3)->get();
        return view('front.poor-five-from-grade-12',compact('poorfives'));
    }// fetch poor students

      public function Home(){
          return view('front.userview');
      }

}



