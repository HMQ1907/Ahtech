<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the partners.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $query = Partner::select('id', 'name', 'logo', 'is_active', 'created_at', 'updated_at');

            if ($request->filled('name')) {
                $query->where('name', 'like', '%' . $request->input('name') . '%');
            }

            if ($request->filled('status') && in_array($request->input('status'), ['0', '1'])) {
                $query->where('is_active', $request->input('status'));
            }

            if ($request->filled('date_from')) {
                $query->whereDate('created_at', '>=', $request->input('date_from'));
            }

            if ($request->filled('date_to')) {
                $query->whereDate('created_at', '<=', $request->input('date_to'));
            }

            $partners = $query->latest()->paginate(10);

            if ($request->ajax()) {
                if ($partners->isEmpty()) {
                    return response()->json(['error' => 'Không tìm thấy đối tác phù hợp.']);
                }
                $view = view('partners.table', ['partners' => $partners])->render();
                return response()->json(['html' => $view]);
            }

            return view('partners.index', ['partners' => $partners]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.add_edit', [
            'title' => 'Thêm đối tác mới'
        ]);
    }

    /**
     * Store a newly created partner in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'required|boolean',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $partner = new Partner();
            $partner->name = $request->input('name');
            $partner->is_active = $request->input('is_active');

            if ($request->hasFile('logo')) {
                if ($partner->logo && file_exists(public_path($partner->logo))) {
                    unlink(public_path($partner->logo));
                }
            
                $file = $request->file('logo');
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('partner_logos'), $filename);
            
                $partner->logo = 'partner_logos/' . $filename;
            }
            

            $partner->save();

            return response()->json([
                'success' => 'Đối tác đã được tạo thành công.',
                'redirect' => route('partner.index')
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        
        return view('partners.add_edit', [
            'title' => 'Chỉnh sửa đối tác',
            'partner' => $partner
        ]);
    }

    /**
     * Update the specified partner in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'required|boolean',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $partner = Partner::findOrFail($id);
            $partner->name = $request->input('name');
            $partner->is_active = $request->input('is_active');

            if ($request->hasFile('logo')) {
                // Delete old logo if exists
                if ($partner->logo && file_exists(public_path($partner->logo))) {
                    unlink(public_path($partner->logo));
                }

                $logoPath = $request->file('logo')->store('partner_logos', 'public');
                $partner->logo = 'storage/' . $logoPath;
            }

            $partner->save();

            return response()->json([
                'success' => 'Đối tác đã được cập nhật thành công.',
                'redirect' => route('partner.index')
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified partner from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $partner = Partner::findOrFail($id);

            // Delete logo if exists
            if ($partner->logo && file_exists(public_path($partner->logo))) {
                unlink(public_path($partner->logo));
            }

            $partner->delete();

            return response()->json(['success' => 'Đối tác đã được xóa thành công.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Toggle the active status of the specified partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($id)
    {
        try {
            $partner = Partner::findOrFail($id);
            $partner->is_active = !$partner->is_active;
            $partner->save();

            return response()->json([
                'success' => 'Trạng thái đối tác đã được cập nhật thành công.',
                'is_active' => $partner->is_active
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
