<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\BrandMaster;
use App\Models\MasterData\CategoryMaster;
use App\Models\MasterData\CompanyMaster;
use App\Models\MasterData\ImageMaster;
use App\Models\MasterData\BankMaster;
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
use App\Models\Transaction;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    public function index()
    {
           
        $categories = CategoryMaster::all();
        $orders = Order::all();
        $outlets = CompanyMaster::all();
        $companies = WebsiteMaster::all();
        $workspace = Workspace::find(1); // Mengambil workspace dengan ID 1
        $company_now = $workspace->website; 
        $roles = RoleMaster::where('website_id', $company_now->id)
                ->orWhereNull('website_id')  // Menggunakan orWhereNull untuk memeriksa null
                ->get();

        return view('service.roles', compact('roles','categories','orders','company_now','outlets','companies'));
    }

    public function create(){
        $kategori = MasterCatPost::whereIn('id',['1','2','8','9']);
        return view('admin_agenda_form', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'agenda_name' => 'nullable',
            'agenda_status' => 'nullable',
            'reservationtime' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/informasi_agenda', $image->hashName());

        // Ambil nilai reservationtime
        $reservationTime = $request->input('reservationtime');
        
        // Pisahkan string berdasarkan tanda "-"
        list($startTime, $endTime) = explode(' - ', $reservationTime);
        
        // Format tanggal dan waktu
        // Ubah format tanggal dan waktu sesuai dengan format yang dibutuhkan
        $startDateTime = \DateTime::createFromFormat('m/d/Y h:i A', trim($startTime))->format('Y-m-d H:i:s');
        $endDateTime = \DateTime::createFromFormat('m/d/Y h:i A', trim($endTime))->format('Y-m-d H:i:s');
        
        $news = News::create([
            'image'     => $image->hashName(),
            'name'     => $request->agenda_name,
            'status'   => $request->agenda_status,
            'start_date'   => $request->startDateTime,
            'end_date'   => $request->endDateTime,
            'category'   => 'agenda'
        ]);

        if($news){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil Disimpan!');
            return redirect()->route('admin-agenda.index');
        }else{
            //redirect dengan pesan error
            Alert::warning('Error', 'Data Gagal Disimpan!');
            return redirect()->route('admin-agenda.index');
        }

    }

    public function edit($id)
    {
        $news = News::find($id);
        if (!$news) {
            abort(404, 'News not found.');
        }
        return view('admin_agenda_form_edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {   
        //get data  by ID
        $news = News::findOrFail($request->id);

            $agenda_names = $request->agenda_name; // Ambil nilai dari request
            $cleaned_agenda_name = preg_replace('/<\/?p>|<br\s*\/?>/', '', $agenda_names);

        if($request->file('image') == "") {

            $news->update([
                'name'     => $cleaned_agenda_name,
                'status'   => $request->agenda_status,
                'start_date'   => $request->startDateTime,
                'end_date'   => $request->endDateTime,
                'category'   => 'agenda'
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/informasi_agenda/'.$news->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/informasi_agenda', $image->hashName());

            $news->update([
                'image'     => $image->hashName(),
                'name'     => $request->agenda_name,
                'status'   => $request->agenda_status,
                'start_date'   => $request->startDateTime,
                'end_date'   => $request->endDateTime,
                'category'   => 'agenda'
            ]);

        }

        
        if($news){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil Disimpan!');
            return redirect()->route('admin-agenda.index');
        }else{
            //redirect dengan pesan error
            Alert::warning('Error', 'Data Gagal Disimpan!');
            return redirect()->route('admin-agenda.index');
        }

        
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::disk('local')->delete('public/blogs/'.$news->image);
        $news->delete();

        if($news){
            Alert::success('Sukses', 'Data Berhasil Disimpan!');
            return redirect()->route('admin-agenda.index');
        }else{
            //redirect dengan pesan error
            Alert::warning('Error', 'Data Gagal Disimpan!');
            return redirect()->route('admin-agenda.index');
        }
    }
}
