<?php

namespace App\Http\Controllers\accounting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\BrandMaster;
use App\Models\MasterData\CategoryMaster;
use App\Models\MasterData\CompanyMaster;
use App\Models\MasterData\ImageMaster;
use App\Models\MasterData\MasterBank;
use App\Models\MasterData\MasterLogHistory;
use App\Models\MasterData\MasterLogin;
use App\Models\MasterData\PriceMaster;
use App\Models\MasterData\RegionMaster;
use App\Models\MasterData\ReviewMaster;
use App\Models\MasterData\RoleMaster;
use App\Models\MasterData\StatusMaster;
use App\Models\MasterData\StockMaster;
use App\Models\MasterData\WebsiteMaster;
use App\Models\Blog;
use App\Models\GeneralJournal;
use App\Models\Donation;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\Product;
use App\Models\SocialAccount;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Workspace;

class GeneralJournalController extends Controller
{
    public function index()
    {
        $categories = CategoryMaster::all();
        $orders = Order::all();
        $outlets = CompanyMaster::all();
        $companies = WebsiteMaster::all();
        $workspace = Workspace::find(1);
        $company_now = $workspace->website; 
        $general_journal_counts = GeneralJournal::orderBy('id', 'asc');
        $general_journals = GeneralJournal::orderBy('date', 'asc')
                ->paginate(20);

        return view('accounting.general_journal', compact('general_journal_counts','general_journals','categories','companies','outlets','orders','company_now','workspace'));

    }
}