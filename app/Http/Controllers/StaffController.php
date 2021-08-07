<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //

    public function index(Request $request)
    {
        $perPage = 10;
        $search = $request->get('search');
        if (!empty($search)) {
            //กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $staffs = Staff::where('Name', 'LIKE', "%$search%")
                ->orWhere('Age', 'LIKE', "%$search%")
                ->orWhere('salary', 'LIKE', "%$search%")
                ->orWhere('Phone', 'LIKE', "%$search%")
                ->orWhere('Action', 'LIKE', "%$search%")
                ->orderBy('Name', 'asc')->paginate($perPage);
        } else {
            //กรณีไม่มีข้อมูล search จะทำงานเหมือนเดิม
            $staffs = Staff::orderBy('Name', 'asc')->paginate($perPage);
        }
        return view('staff/index', compact('staffs'));
    }
    public function show($id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));
    }
    public function create()
    {
        //return view('staff.create');
        return view('staff.create');
    }
    public function edit($id)
    { {
        $staff = Staff::findOrFail($id);

        return view('staff.edit', compact('staff'));
        }
    }
    public function store(Request $request)
    {
        $requestData = $request->all();

        Staff::create($requestData);

        return redirect('staff');
    }
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $staff = Staff::findOrFail($id);
        $staff->update($requestData);
        return redirect('staff');
    }
}
