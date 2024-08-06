<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\Product;
use App\Models\Workspace;
use App\Models\Inventory;
use App\Models\MasterData\CategoryMaster;
use App\Models\MasterData\CompanyMaster;
use App\Traits\Outlet;
use Illuminate\Support\Facades\DB;
use app\models\MasterData\BrandMaster;
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
use app\models\SocialAccount;
use app\models\Transaction;
use app\models\User;

class ProductController extends Controller
{
    use Outlet; 

    public function __construct()
    {
        // $outlets = CompanyMaster::all();
        // View::share('layouts.master_inventory', compact('outlets'));
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        $categories = CategoryMaster::all();
        $outlets = CompanyMaster::all();
        $orders = Order::all();
        $invs = Inventory::first();
        $workspaces = DB::table('workspace')
            ->select('workspace.*', 'inventories.id as inventory_id', 'inventories.amount as inventory_amount', 
                    'product_sales.id as product_id','product_sales.name as product_name', 'product_sales.image as product_image', 
                    'res_prices.price_average','res_prices.price_purchase','res_prices.price_selling','res_prices.price_selling_after','res_prices.price_res_discount','res_prices.discount',
                    'orders.prod_amount'
                    )
            ->leftJoin('inventories', 'workspace.res_company_id', '=', 'inventories.workspace_id')
            ->leftJoin('product_sales', 'inventories.product_sales_id', '=', 'product_sales.id')
            ->leftJoin('res_prices', 'product_sales.id', '=', 'res_prices.product_id')
            ->leftJoin('orders', 'orders.product_id', '=', 'product_sales.id')
        ->latest()->paginate(10);

        /*
        companies :
        1. baker
        2. lumina
        3. suktura v2
        4. nebraska v2
        5. dermstore
        6. glowing
        7. aresto
        8. volti
        */
        


        return view('inventory.product_list', compact('workspaces','products','categories','outlets','orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.product_form');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
