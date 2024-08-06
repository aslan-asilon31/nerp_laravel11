<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;
use app\models\MasterData\BrandMaster;
use app\models\MasterData\CategoryMaster;
use app\models\MasterData\CompanyMaster;
use app\models\MasterData\ImageMaster;
use app\models\MasterData\MasterBank;
use app\models\MasterData\MasterLogHistory;
use app\models\MasterData\MasterLogin;
use app\models\MasterData\PriceMaster;
use app\models\MasterData\RegionMaster;
use app\models\MasterData\ReviewMaster;
use app\models\MasterData\RoleMaster;
use app\models\MasterData\StatusMaster;
use app\models\MasterData\StockMaster;
use app\models\MasterData\WebsiteMaster;
use app\models\Blog;
use app\models\Donation;
use app\models\Inventory;
use app\models\Order;
use app\models\Product;
use app\models\SocialAccount;
use app\models\Transaction;
use app\models\User;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $workspaceId = $request->input('workspace_id');
        $companyId = $request->input('company_id');
    
        try {
            $workspace = Workspace::findOrFail(1);
            $workspace->res_company_id = $companyId;
            $workspace->save();
    
            return response()->json(['success' => true, 'message' => 'Workspace updated successfully']);
            // return response()->json(['success' => true, 'message' => 'Workspace updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
