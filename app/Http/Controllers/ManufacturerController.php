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
            
        $manufacturer = new Manufacturer;
        $manufacturer->manufacturer_name = $request->manufacturer_name;
        $manufacturer->manufacturer_description = $request->manufacturer_description;
        $manufacturer->publication_status = $request->publication_status;
        
        $manufacturer->save();
        
        return redirect("/manufacturer/add")->with("message","Manufacturer Saved Success!");
    }
}
