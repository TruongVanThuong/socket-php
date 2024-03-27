<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\roleRequest;
use App\Models\PhanquyenModel;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.Role.role');
    }

    public function HienThiRole()
    {
        $data_Role = PhanquyenModel::orderBy('id', 'desc')->get();


        $compact = compact('data_Role');

        if ($data_Role->isEmpty()) {
            return response()->json($compact);
        } else {
            return response()->json($compact);
        }
    }

    public function ThemRole(roleRequest $request)
    {
        $data = $request->all();
        PhanquyenModel::create($data);
        return response()->json([
            'status' => true,
            'message' => 'Thêm Role thành công'
        ]);
    }

    public function XoaRole(Request $request)
    {

        $xoa = PhanquyenModel::find($request->id);
        $xoa->delete();
        return response()->json([
            'status' => true,
            'message' => 'Đã xóa Role thành công !'
        ]);

    }

    public function CapNhatRole(Request $request)
    {
        $data = $request->all();

        $CapNhatRole = PhanquyenModel::where('id', $request->id)->first();
        $CapNhatRole->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Cap nhật Role thành công'
        ]);
    }
}