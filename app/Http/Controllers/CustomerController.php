<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use App\Models\Customer;
use App\Models\EmployeeDesignation;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $px;
    function __construct()
    {
        $this->px=DB::getTablePrefix();
    }

    public function index()
    {
        $customers = DB::table('customers')->select('*')->paginate(10);
        
        return view("pages.erp.customer.manage",["customers"=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $designations=EmployeeDesignation::all();
        return view("pages.erp.customer.create",["designations"=> $designations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $name = $request->input('txtName'); 
        $mobile=$request->input('txtMobile');
        $email=$request->input('txtEmail');   
        $address=$request->input('txtAddress'); 
        $designation=$request->input('designation_id'); 
        
        
         DB::insert("insert into {$this->px}customers(name,mobile,email,address,designation_id)values('$name','$mobile','$email','$address','$designation')");       
        
         return redirect()->route("customers.create")->with('success','Create Successfully.');
        // echo $name;
 
        //return Redirect::route('users.index');
       // return redirect()->route('users.create', ['error' =>"invalid email"]);
       
      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::find($id);
        return view("pages.erp.customer.details",["customer"=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designations=EmployeeDesignation::all();
        $customer=Customer::find($id);
        return view("pages.erp.customer.edit",["id"=>$id,"customer"=>$customer,"designations"=>$designations]);
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
            $name=$request->txtName;
            $mobile=$request->txtMobile;
            $email=$request->txtEmail;
            $address=$request->txtAddress;
            $designation=$request->designation_id;
            

              DB::table('customers')
              ->where('id', $id)
              ->update(['name' => $name,'mobile'=>$mobile,'email'=>$email,'address'=>$address,'designation_id'=>$designation]);

             return redirect()->route("customers.index")->with('success','Deleted Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //    echo $id. "Success";
       DB::delete('delete from lr_customers where id = :id', ['id' => $id]);
    //    $customers = DB::table('customers')->select('*')->paginate(10);        
    //    return view("pages.erp.customer.manage",["customers"=>$customers]);
       return redirect()->route("customers.index")->with('success','Deleted Successfully.');
    }

    



}
