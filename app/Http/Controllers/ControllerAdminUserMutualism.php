<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
//import model product
use App\Models\produkmutu; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

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
        

        //render view with products
        return view('admin.admin_produk.index', compact('products'));
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
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:2 | max:10',
            'description'   => 'required|min:10',
            'namatok'       => 'required|min:4|max:15',
            'link'          => 'required',
            'price'         => 'required|numeric',
        ]);

        //upload image
        $image = $request->file('image');
        $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') .
            $request->input('title') . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/gambarproduk/', $nameImage); 

        //create product
        produkmutu::create([
            'image'         => $nameImage,
            'title'         => $request->title,
            'description'   => $request->description,
            'namatok'       => $request->namatok,
            'link'          => $request->link,
            'price'         => $request->price,
        ]);

        //redirect to index
        return redirect()->route('adminproduk.index')->with(['success' => 'Data Berhasil Disimpan!']);
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