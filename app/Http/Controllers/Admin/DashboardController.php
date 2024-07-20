<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\DashboardService;
use App\Services\OrderService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    protected $dashboardService, $orderService;
    public function __construct(DashboardService $dashboardService, OrderService $orderService)
    {
        $this->dashboardService = $dashboardService;
        $this->orderService = $orderService;
    }
    public function index()
    {
        try {
            $title = "Dashboard";
            $getMonth = $this->orderService->getMonthlyRevenue();
            $getMonthlyRevenue = $getMonth['monthlyRevenue'];
            $totalAnnualRevenue = $getMonth['totalAnnualRevenue'];
            $clientnumber = $this->dashboardService->getClientNumber();
            $ordernumber = $this->dashboardService->getOrderNumber();
            $amount = $this->dashboardService->getAmountNumber();
            $daily = $this->dashboardService->getDailySale();
            $newClient = $this->dashboardService->getNewestClient();
            $newOrder = $this->dashboardService->getNewestOrder();
            // dd($newOrder->client->name);0
            $newStaff = $this->dashboardService->getNewestStaff();
            return view('welcome', compact('clientnumber', 'ordernumber', 'amount', 'daily', 'newClient', 'newOrder', 'newStaff', 'getMonthlyRevenue', 'totalAnnualRevenue', 'title'));
        } catch (Exception $e) {
            Log::error('Failed to get statistic this year: ' . $e->getMessage());
            return ApiResponse::error('Failed to get statistic this year', 500);
        }
    }

    public function StatisticsByDay(){
        $daily = $this->dashboardService->getDailySale();
        return response()->json([
            'daily' => $daily
        ]);
    }

    public function StatisticsByMonth(){
        $daily = $this->dashboardService->StatisticsByMonth();
        return response()->json([
            'daily' => $daily
        ]);
    }

    public function StatisticsByYear(){
        $daily = $this->dashboardService->StatisticsByYear();
        return response()->json([
            'daily' => $daily
        ]);
    }
}
