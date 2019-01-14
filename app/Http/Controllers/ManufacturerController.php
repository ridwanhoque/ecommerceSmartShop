<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;

use smart_shop\Manufacturer;

class ManufacturerController extends Controller
{
    //
    
    public function createManufacturer(){
        return view("admin.manufacturer.manufacturerContent");
    }
    
    public function storeManufacturer(Request $request){
        
        $this->validate($request, [
            'manufacturer_name'=>'required',
            'manufacturer_description'=>'required'
        ]);
            
        $manufacturer = new Manufacturer;
        $manufacturer->manufacturer_name = $request->manufacturer_name;
        $manufacturer->manufacturer_description = $request->manufacturer_description;
        $manufacturer->publication_status = $request->publication_status;
        
        $manufacturer->save();
        
        return redirect("/manufacturer/add")->with("message","Manufacturer Saved Success!");
    }
    
    public function manageManufacturer(){
        
        $manufacturers = Manufacturer::all();
        
        
        return view("admin.manufacturer.manageManufacturerContent",['manufacturers'=>$manufacturers]);
    }
    
    public function editManufacturer($id){
        $manufacturerById = Manufacturer::where('id',$id)->first();
        return view("admin.manufacturer.editManufacturer",['manufacturerById'=>$manufacturerById]);
    }
    
    public function updateManufacturer(Request $request){
        //return $request->all();
        
        $manufacturer = Manufacturer::find($request->id);
        $manufacturer->manufacturer_name = $request->manufacturer_name;
        $manufacturer->manufacturer_description = $request->manufacturer_description;
        $manufacturer->publication_status = $request->publication_status;
        $manufacturer->save();
        return redirect("/manufacturer/manage/")->with("message","Manufacturer Update Success!");
    }
}
