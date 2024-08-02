<?php

namespace App\Http\Controllers\inventory;

use App\Http\Controllers\Controller;
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
use Illuminate\Pipeline\Pipeline;
use App\Http\Pipelines\WorkspaceFilter;

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
        $pipeline = new Pipeline(app());

        $result = $pipeline->send(
            $inventories = Inventory::all()
        )
        ->through([
            WorkspaceFilter::class,
        ])
        ->thenReturn()
        ->toArray();

        $productIds = collect($result)->pluck('product_sales_id')->toArray();

        $products = Product::whereIn('id', $productIds)->get();
        
        $categories = CategoryMaster::all();
        $orders = Order::all();
        $outlets = CompanyMaster::all();


        return view('inventory.product_list', compact('products','categories','orders','outlets'));
    }


    public function getProductsByCategory(Request $request)
    {

        $categoryId = $request->input('category_id');

        // Query untuk mengambil produk berdasarkan kategori yang dipilih
        $products = DB::table('workspace')
                    ->select('workspace.*', 'inventories.id as inventory_id', 'inventories.amount as inventory_amount', 
                    'product_sales.id as product_id','product_sales.name as product_name', 'product_sales.cat_id as product_category','product_sales.image as product_image', 
                    'res_prices.price_average','res_prices.price_purchase','res_prices.price_selling','res_prices.price_selling_after','res_prices.price_res_discount','res_prices.discount',
                    'orders.prod_amount'
                    )
            ->leftJoin('inventories', 'workspace.res_company_id', '=', 'inventories.workspace_id')
            ->leftJoin('product_sales', 'inventories.product_sales_id', '=', 'product_sales.id')
            ->leftJoin('res_prices', 'product_sales.id', '=', 'res_prices.product_id')
            ->leftJoin('orders', 'orders.product_id', '=', 'product_sales.id')
            ->where('product_sales.cat_id', $categoryId) // Sesuaikan dengan kolom di database untuk kategori produk
            ->latest()->paginate(10);

            // dd($products);



        return response()->json($products);

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
