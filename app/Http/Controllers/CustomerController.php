<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=Customer::where('deleted_at',null)->get();
        return view("listado")->with('cliente',$cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
         Customer::firstOrCreate([
             'name' =>  $request['name'],
             'last_name' => $request['lastName'],
             'personal_phone' => $request['personal_phone'],
             'contact_phone' => $request['contact_phone'],
             'email' => $request['email'],
             'gender' => $request['gender'],
             'address' => $request['address'],
             'state' => $request['state'],
             'city' => $request['city'],
             'suburb' => $request['suburb'],
             'birth_date' => $request['birthdate'],
             'zip_code'=>$request['zipcode'],
             'password'=>$request['password']
         ]);
         return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Customer::find($id);
        return view('editar')->with('cliente',$cliente);
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
            $cliente=Customer::find($id);

            $cliente->name =  $request['name'];
            $cliente->last_name = $request['lastName'];
            $cliente->personal_phone = $request['personal_phone'];
            $cliente->contact_phone = $request['contact_phone'];
            $cliente->email = $request['email'];
            $cliente->gender = $request['gender'];
            $cliente->address = $request['address'];
            $cliente->state = $request['state'];
            $cliente->city = $request['city'];
            $cliente->suburb = $request['suburb'];
            $cliente->birth_date = $request['birthdate'];
            $cliente->zip_code=$request['zipcode'];
            $cliente->password=$request['password'];
            $cliente->save();

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Customer::find($id);
        $cliente->deleted_at=date("Y-m-d");
        $cliente->save();
        return redirect('/customer');
    }
   
    public function restaurar(){
        $cliente=Customer::where('deleted_a'!=null)->get();
        //echo $cliente;
        return view("restaurar")->with('cliente',$cliente);
        
    }

    public function restore($id){

    }
}
