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
        
        $title = 'Produk Pupuk';
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
        return view('admin.admin_produk.create');
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
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' => 'required|string|max:255',
        'jenis' => 'required|in:npk,phonska,urea,za',
        'description' => 'required',
        'price' => 'required|numeric',
        'store_names.*' => 'required|string|max:255',
        'store_links.*' => 'required|url|max:255',
        'marketplaces.*' => 'required|in:Tokopedia,BliBli,Shopee,Lazada',
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
        'price' => $request->price,
        'user_id' => Auth::id(), // Set the user_id field
        'author' => Auth::user()->username,
    ]);

    foreach ($request->store_names as $index => $storeName) {
        ProductStore::create([
            'produkmutu_id' => $produkmutu->id,
            'store_name' => $storeName,
            'store_link' => $request->store_links[$index],
            'marketplace' => $request->marketplaces[$index],
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
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:2 |max:10 ',
            'description'   => 'required|min:10',
            'namatok'       => 'required|min:4|max:15',
            'link'          => 'required',
            'price'         => 'required|numeric',
        ]);

        //get product by ID
        $product = produkmutu::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') .
                $request->input('title') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/gambarproduk/', $nameImage); 

            //delete old image
            Storage::delete('public/gambarproduk/'.$product->image);

            //update product with new image
            $product->update([
                'image'         => $nameImage,
                'title'         => $request->title,
                'description'   => $request->description,
                'namatok'       => $request->namatok,
                'link'          => $request->link,
                'price'         => $request->price,
            ]);

        } else {

            //update product without image
            $product->update([
                'title'         => $request->title,
                'description'   => $request->description,
                'namatok'       => $request->namatok,
                'link'          => $request->link,
                'price'         => $request->price,
            ]);
        }

        //redirect to index
        return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil Diubah!']);
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
}

/* 
git add .
git commit -m "im wide awke"
git push -u mutualisme_admin_user

buat pull pake git pull origin main
/*