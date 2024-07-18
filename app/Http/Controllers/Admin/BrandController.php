<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\BrandService;
use App\Services\SupplierService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;

class BrandController extends Controller
{
    //
    protected $brandService;
    protected $supplierService;
    public function __construct(BrandService $brandService, SupplierService $supplierService)
    {
        $this->brandService = $brandService;
        $this->supplierService = $supplierService;
    }
    public function index()
    {
        $title = 'Thương hiêu ';
        $brand = $this->brandService->getAllBrand();
        return view('admin.brand.index', compact('brand', 'title'));
    }
    public function findByName(Request $request)
    {
        try {
            $title = 'Thương hiêu ';
            $brands = $this->brandService->brandByName($request->input('name'));
            $brand = new LengthAwarePaginator(
                $brands ? [$brands] : [],
                $brands ? 1 : 0,
                10,
                1,
                ['path' => Paginator::resolveCurrentPath()]
            );
            return view('admin.brand.index', compact('brand', 'title'));
        } catch (Exception $e) {
            Log::error('Failed to find brand: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to find brand'], 500);
        }
    }
    public function addForm()
    {
        $supplier = $this->supplierService->GetAllSuppiler();
        $title = 'Thêm thương hiệu ';
        return view('admin.brand.add', compact('title', 'supplier'));
    }

    public function add(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'images' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'supplier_id' => 'required' // Adjust max size as needed
        ]);

        // Map validated data to the required array format
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'images' => $validatedData['images'],
            'supplier_id' => $validatedData['supplier_id']
        ];
        $brand = $this->brandService->createBrand($data);
        return redirect()->route('admin.brand.store')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $supplier = $this->supplierService->GetAllSuppiler();
        $title = 'Sửa thương hiệu';
        $brand = $this->brandService->getBrandById($id);
        return view('admin.brand.edit', compact('brand', 'title', 'supplier'));
    }

    public function update($id, Request $request)
    {
        $brand = $this->brandService->updateBrand($id, $request->all());
        return redirect()->route('admin.brand.store')->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        try{
            $this->brandService->deleteBrand($id);
            return redirect()->route('admin.brand.store')->with('success', 'Xóa thương hiệu thành công');
        }
        catch(Exception $e)
        {
            Log::error('Failed to delete brand: ' .$e->getMessage());
            return ApiResponse::error('Failed to delete brand', 500);
        }
    }
}
