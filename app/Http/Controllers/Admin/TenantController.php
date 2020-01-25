<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tenant;
use App\User;
class TenantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication

    public function index()
    {
        $tenants=User::where('type_id',1)->get();
        return view('admin.tenant.index',compact('tenants'));
    }

    public function create()
    {
        return view ('admin.tenant.create');
    }

    public function store(Request $request)
    {
        $validateData= request()->validate([
            'firstname'=> 'required|min:3|max:255|',
            'middlename'=> 'required|min:2|max:255',
            'lastname'=> 'required|max:255',
            'email'=> 'required|email|max:255|unique:tenants',
            'address'=> 'required|max:255',
            'phone'=> 'required|min:11|unique:tenants',
        ]);


         $tenants=new Tenant();
         
         $tenants->firstname = $request->input('firstname');
         $tenants->middlename = $request->input('middlename');
         $tenants->lastname = $request->input('lastname');
         $tenants->email = $request->input('email');
         $tenants->address = $request->input('address');
         $tenants->phone = $request->input('phone');

         $tenants->save();
         return redirect('/tenant'); //booking
    }

    public function edit($id)
    {
            $tenants = Tenant::findOrFail($id);
            return view('admin.tenant.edit')->with('tenants',$tenants);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname'=> 'required|min:3|max:255',
            'middlename'=> 'required|min:2|max:255',
            'lastname'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'address'=> 'required|max:255',
            'phone'=> 'required|max:255',

        ]);

        $tenants = Tenant::find($id);
        $tenants->firstname = $request->input('firstname');
        $tenants->middlename = $request->input('middlename');
        $tenants->lastname = $request->input('lastname');
        $tenants->email = $request->input('email');
        $tenants->address = $request->input('address');
        $tenants->phone = $request->input('phone');

        $tenants->save();
        return redirect('/tenant')->with('sucess','Tenant Successfully Updated');
    }
    public function delete($id){
        $tenant=Tenant::findOrFail($id);

        $tenant->delete();
        return redirect('/tenant')->with('sucess','Tenant Successfully Deleted');
    }
    
} 