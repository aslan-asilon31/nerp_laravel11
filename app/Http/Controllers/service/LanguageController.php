<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use app\models\Workspace;

class LanguageController extends Controller
{
    public function index()
    {
        $agenda = News::where('category', 'agenda')
                ->with('masterCatPost')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('admin_agenda', compact('agenda'));
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
