<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Manufacturer;
class ManufacturerController extends Controller
{
    public function create_manufacturer() {
        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.manufacturer.add_manufacturer_form');
        return view('admin.dashboard.master')->with($data);
    }
    public function save_manufacturer(Request $request) {
        $this->validate($request, [
            'manufacturer_name' => 'required'
        ]);
        $manufacturer_info =new Manufacturer;
        $manufacturer_info->manufacturer_name = $request->input('manufacturer_name');
        $manufacturer_info->manufacturer_description = $request->input('manufacturer_description');
        $manufacturer_info->publication_status = $request->input('publication_status');
        
        $manufacturer_info->save();
         return redirect('/add-manufacturer')->with('message', 'Manufacturer info create successfully');
    }
    public function manage_manufacturer() {
        $data = array();
        $manufacturer_info = Manufacturer::all();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.manufacturer.manage_manufacturer_content', ['all_manufacturer' =>$manufacturer_info]);
        return view('admin.dashboard.master')->with($data);
        
    }
     public function unpublished_manufacturer($id) {
        $manufacturer_info =Manufacturer::find($id);
        $manufacturer_info->publication_status = 0;
        $manufacturer_info->save();
        
        return redirect('/manage-manufacturer')->with('message', 'Manufacturer info unpublished successfully');
    }
    public function published_manufacturer($id) {
        $manufacturer_info =Manufacturer::find($id);
        $manufacturer_info->publication_status = 1;
        $manufacturer_info->save();
        
        return redirect('/manage-manufacturer')->with('message', 'Manufacturer info published successfully');
    }
    public function edit_manufacturer($id) {
        $manufacturer_info =Manufacturer::find($id);
        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.manufacturer.edit_manufacturer_content', ['manufacturer_info' =>$manufacturer_info] );
        return view('admin.dashboard.master')->with($data);
    }
    public function update_manufacturer(Request $request) {
        $manufacturer_id = $request->input('manufacturer_id');
        $manufacturer_info = Manufacturer::find($manufacturer_id);
        $manufacturer_info->manufacturer_name = $request->input('manufacturer_name');
        $manufacturer_info->manufacturer_description = $request->input('manufacturer_description');
        $manufacturer_info->publication_status = $request->input('publication_status');
        
        $manufacturer_info->save();
        return redirect('/manage-manufacturer')->with('message', 'Manufacturer info update successfully');
    }
    public function delete_manufacturer($id) {
        $manufacturer_info = Manufacturer::find($id);
        $manufacturer_info->delete();
        return redirect('/manage-manufacturer')->with('message', 'Manufacturer info delete successfully');
    }
}
