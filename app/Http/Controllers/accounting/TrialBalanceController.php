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
use App\Models\Donation;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\Product;
use App\Models\SocialAccount;
use App\Models\GeneralJournal;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Workspace;

class TrialBalanceController extends Controller
{
    public function index()
    {
        $categories = CategoryMaster::all();
        $orders = Order::all();
        $outlets = CompanyMaster::all();
        $companies = WebsiteMaster::all();
        $workspace = Workspace::find(1);
        $company_now = $workspace->website; 
        $trial_balance_counts = GeneralJournal::orderBy('id', 'asc');
        $trial_balance_members = GeneralJournal::selectRaw('
                    SUBSTRING_INDEX(account_code, ".", 1) AS group_code,  
                    account_name,
                    SUM(debit) AS total_debit,
                    SUM(credit) AS total_credit,
                    MAX(date) AS latest_date'
                )
                ->having('total_debit', '>', 0) // Menyaring hasil agar total_debit lebih besar dari 0
                ->orHaving('total_credit', '>', 0) 
                ->groupBy('group_code', 'account_name') 
                ->get(); 
        $trial_balances = GeneralJournal::selectRaw('
                SUBSTRING_INDEX(account_code, ".", 1) AS group_code,
                id,
                account_code,
                account_name,
                debit,
                credit,
                date'
            )
            ->having('debit', '>', 0) // Menyaring hasil agar total_debit lebih besar dari 0
            ->orHaving('credit', '>', 0) 
            ->OrderBy('date','asc')
            ->get();
            // dd($general_ledgers);
            // dd($general_ledger_members);

            $total_debit_all = $trial_balances->sum('debit');
            $total_credit_all = $trial_balances->sum('credit');
            
            // Debug output
            // dd($total_debit_all, $total_credit_all);


        return view('accounting.trial_balance', compact('total_debit_all','total_credit_all','trial_balance_members','trial_balance_counts','trial_balances','categories','companies','outlets','orders','company_now','workspace'));
    }
}