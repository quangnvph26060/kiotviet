<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\StoreService;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    protected $storeService;
    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    public function index()
    {
        try {
            $stores = $this->storeService->getAllStore();
            return view('sa.store.index', compact('stores'));
        } catch (Exception $e) {
            Log::error('Failed to find any store' . $e->getMessage());
            return ApiResponse::error('Failed to find any store', 500);
        }
    }

    public function detail($id)
    {
        try {
            $stores = $this->storeService->findStoreByID($id);
            return view('sa.store.edit', compact('stores'));
        } catch (Exception $e) {
            Log::error('Cannot find store info: ' . $e->getMessage());
            return ApiResponse::error('Cannot find store info', 500);
        }
    }
}