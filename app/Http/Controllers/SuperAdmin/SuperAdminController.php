<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\AdminService;
use App\Services\SupperAdminService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SuperAdminController extends Controller
{
    protected $adminService;
    protected $supperAdminService;

    public function __construct(AdminService $adminService, SupperAdminService $supperAdminService)
    {
        $this->adminService = $adminService;
        $this->supperAdminService = $supperAdminService;
    }

    // public function getSuperAdminInfor($id)
    // {
    //     try {
    //         $sa = $this->adminService->getUserById($id);
    //         return view('sa.profile.detail', compact('sa'));
    //     } catch (Exception $e) {
    //         Log::error('Failed to fetch super admin info: ' . $e->getMessage());
    //         return ApiResponse::error('Failed to fetch super admin info', 500);
    //     }
    // }

    // public function updateSuperAdminInfo(Request $request, $id)
    // {
    //     try {
    //         $sa = $this->adminService->updateUser($id, $request->all());
    //         $authUser = session('authUser');
    //         $authUser->name = $sa->name;
    //         $authUser->email =  $sa->name;
    //         $authUser->user_info->img_url = $sa->user_info->img_url;
    //         session(['authUser' => $authUser]);
    //         Log::info('Successfully updated super admin profile');
    //         session()->flash('success', 'Thay đổi thông tin thành công');
    //         return redirect()->back();
    //     } catch (Exception $e) {
    //         Log::error('Failed to update admin info: ' . $e->getMessage());
    //         return ApiResponse::error('Failed to update admin info', 500);
    //     }
    // }


    public function loginForm()
    {
        return view('SupperAdmin.formlogin.index');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);
            $result = $this->supperAdminService->authenticateSupper($credentials);
            session()->put('authSuper', $result['supper']);
            return redirect()->route('super.store.index');
        } catch (Exception $e) {
            return $this->handleLoginError($request, $e);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('super.dang.nhap');
    }
    protected function handleLoginError($request, \Exception $e)
    {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
