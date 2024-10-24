<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\CategoryMaster;
use App\Models\Workspace;
use app\models\MasterData\BrandMaster;
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
use Illuminate\Support\Facades\Http; 

class KpiController extends Controller
{

    public function index()
    {
        // Ambil data dari endpoint Flask
        $response = Http::get('http://127.0.0.1:5000/get_results');

        if ($response->successful()) {
            $data = $response->json();
        } else {
            $data = [];
        }
        return view('python_process.kpi_result', ['kpis' => $data]);
    }

}
