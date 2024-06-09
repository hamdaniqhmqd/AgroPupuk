<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\produkmutu;
use App\Models\ProductStore;


//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ControllerAdminUserMutualism extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $products = produkmutu::latest()->paginate(10);
        $title = 'Produk';
        $data['admin'] = User::find(Auth::User()->id);
        //render view with products
        return view('admin.admin_produk.index', compact('products', 'title'), $data);
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $data['admin'] = User::find(Auth::User()->id);
        return view('admin.admin_produk.create', $data);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg',
        'title' => 'required|string|max:10|min:2',
        'jenis' => 'required|in:npk,phonska,urea,za',
        'description' => 'required',
        'store_names.*' => 'required|string|max:15',
        'store_links.*' => 'required|url|max:255',
        'marketplaces.*' => 'required|in:Tokopedia,BliBli,Shopee,Lazada',
        'prices.*' => 'required|numeric',
    ],[
        'image.required'=>'Kolom ini harus di isi yaa',
        'image.mimes'=>'Harus berbentuk jpeg, png dan jpg',
        'title.max' => 'Maksimal karakter 10',
        'title.min' =>'Minimal karakter 2',
        'title.required'=>'Judul harus di isi',
        'description'=> 'Deskripsi harus ada',
        'store_names.*.required'=>'Pastikan semua nama toko terisi',
        'store_names.*.max'=>'Karakter dari nama toko tidak boleh lebih dari 15',
        'store_links.*.required'=>"Kolom link harus diisi",
        'store_links.*'=>'Kolom link harus berbentuk link/url',
        'prices.*.required'=>'Pastikan semua kolom harga telah terisi',
        'marketplaces.*.required'=>'Pastikan semua marketplace sudah di isi'
    ]);

    //upload image
    $image = $request->file('image');
    $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') . $request->input('title') . '.' . $image->getClientOriginalExtension();
    $image->storeAs('public/gambarproduk/', $nameImage);

    $produkmutu = Produkmutu::create([
        'image' => $nameImage,
        'title' => $request->title,
        'jenis' => $request->jenis,
        'description' => $request->description,
        'user_id' => Auth::id(), // Set the user_id field
        'author' => Auth::user()->username,
    ]);

    foreach ($request->store_names as $index => $storeName) {
        ProductStore::create([
            'produkmutu_id' => $produkmutu->id,
            'store_name' => $storeName,
            'store_link' => $request->store_links[$index],
            'marketplace' => $request->marketplaces[$index],
            'price' => $request->prices[$index],
        ]);
    }

    return redirect()->route('adminproduk.index')->with('success', 'Produk berhasil ditambahkan.');
}




    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $product = produkmutu::findOrFail($id);

        //render view with product
        return view('admin.admin_produk.show', compact('product'));
    }

 //   public function showuser(string $id): View
  //  {
        //get product by ID
   //     $product = produkmutu::findOrFail($id);

        //render view with product
     //   return view('layouts.laman_detail_produk', compact('product'));
    //}

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $product = produkmutu::findOrFail($id);

        //render view with product
        return view('admin.admin_produk.edit', compact('product'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg',
        'title' => 'required|string|max:255|min:3',
        'jenis' => 'required|string',
        'description' => 'required|string',
        'store_names.*' => 'nullable|string|max:15',
        'store_links.*' => 'nullable|url|max:255',
        'prices.*' => 'nullable|numeric',
        'marketplaces.*' => 'required|in:Tokopedia,BliBli,Shopee,Lazada',
    ],[
        'image.mimes'=>'Harus berbentuk jpeg, png dan jpg',
        'title.max' => 'Maksimal karakter 10',
        'title.min' =>'Minimal karakter 2',
        'title.required'=>'Judul harus di isi',
        'store_names.*.required'=>'Pastikan semua nama toko terisi',
        'store_names.*.max'=>'Karakter dari nama toko tidak boleh lebih dari 15',
        'store_links.*.required'=>"Kolom link harus diisi",
        'store_links.*'=>'Kolom link harus berbentuk link/url',
        'prices.*.required'=>'Pastikan semua kolom harga telah terisi',
        'marketplaces.*.required'=>'Pastikan semua kolom sudah di isi'
        ]);

    $product = produkmutu::findOrFail($id);

    if ($request->hasFile('image')) {
        if ($product->image) {
            Storage::disk('public')->delete('gambarproduk/' . $product->image);
        }
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('gambarproduk', $imageName, 'public');
        $product->image = $imageName;
    }

    $product->title = $request->input('title');
    $product->jenis = $request->input('jenis');
    $product->description = $request->input('description');
    $product->save();

    // Hapus semua store yang terkait
    $product->productStores()->delete();

    // Masukkan store baru jika ada
    $storeNames = $request->input('store_names', []);
    $storeLinks = $request->input('store_links', []);
    $prices = $request->input('prices', []);
    $marketplaces = $request->input('marketplaces', []);

    foreach ($storeNames as $key => $storeName) {
        if (!empty($storeName) && !empty($storeLinks[$key]) && !empty($prices[$key]) && !empty($marketplaces[$key])) {
            $product->productStores()->create([
                'store_name' => $storeName,
                'store_link' => $storeLinks[$key],
                'price' => $prices[$key],
                'marketplace' => $marketplaces[$key],
            ]);
        }
    }

    return redirect()->route('adminproduk.index')->with('success', 'Product updated successfully');
}


    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $product = produkmutu::findOrFail($id);

        //delete image
        Storage::delete('public/gambarproduk/'. $product->image);

        //delete product
        $product->delete();

        //redirect to index
        return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function userlist() //menampilkan form
    {
        $data = produkmutu::all(); //buat manggil $data di class store
        return view("layouts.laman_produk",compact('data'));
    }

    public function detailproduk(string $id): View
{
    $product = produkmutu::findOrFail($id);
    return view('layouts.laman_detail_produk', compact('product'));
}

}
