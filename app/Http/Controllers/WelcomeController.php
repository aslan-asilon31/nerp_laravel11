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

class WelcomeController extends Controller
{

    public function index()
    {
        $categories = CategoryMaster::all();

        $workspace = Workspace::first();

        switch ($workspace->website_id) {
            case 1:
                return view('welcome_baker', compact('categories'));
            case 2:
                return view('welcome_lumina', compact('categories'));
            case 3:
                return view('welcome_suktura_v2', compact('categories'));
            case 4:
                return view('welcome_nebraska_v2', compact('categories'));
            case 5:
                return view('welcome_dermstore', compact('categories'));
            case 6:
                return view('welcome_glowing', compact('categories'));
            case 7:
                return view('welcome_aresto', compact('categories'));
            case 8:
                return view('welcome_volti', compact('categories'));
            case 9:
                return view('welcome_woodex', compact('categories'));
            default:
                return view('welcome', compact('categories'));
        }

    }
    
    public function product_filter(){
        return view('welcome_volti', compact('categories'));
    }
}
