<?php

namespace App\Http\Controllers;

use App\Models\Sipupuk;

use Illuminate\Http\Request;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

use Illuminate\Contracts\View\View;

class ControllerAdminSipupuk extends Controller
{
    //
    public function index() : View
    {
        //mengambil semua produk
        $sipupuks = Sipupuk::latest()->paginate(10);

        //menampilkan view dengan produk
        return view('admin.admin_sipupuk.index', compact('sipupuks'));
    }

    public function create(): View
    {
        return view('admin.admin_sipupuk.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validasi form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'content'       => 'required|min:1000',
            'author'        => 'required|min:5'
        ]);


        //upload image
        $image = $request->file('image');
        // $image->storeAs('/sipupuks', $image->hashName());
        $image->storeAs('public/sipupuks', $image->hashName());

        //buat produk
        Sipupuk::create([
            // 'image'         => $image->hashName(),
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'content'       => $request->content,
            'author'        => $request->author// Sesuaikan dengan author yang sesuai
        ]);

        //redirect ke index
        return redirect()->route('adminsipupuk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //mengambil produk berdasarkan ID
        $sipupuks = Sipupuk::findOrFail($id);

        //menampilkan view dengan produk
        return view('admin.admin_sipupuk.show', compact('sipupuks'));
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
        $sipupuks = Sipupuk::findOrFail($id);

        //render view with product
        return view('admin.admin_sipupuk.edit', compact('sipupuks'));
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
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'content'       => 'required|min:1000',
            'author'        => 'required|min:5'
        ]);

        //get product by ID
        $sipupuks = Sipupuk::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/sipupuks', $image->hashName());

            //delete old image
            Storage::delete('public/sipupuks'.$sipupuks->image);

            //update product with new image
            $sipupuks->update([
                // 'image'         => $image->hashName(),
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'content'       => $request->content,
                'author'        => $request->author// Sesuaikan dengan author yang sesuai
            ]);

        } else {

            //update product without image
            $sipupuks->update([
                'title'         => $request->title,
                'content'       => $request->content,
                'author'        => $request->author// Sesuaikan dengan author yang sesuai
            ]);
        }

        //redirect to index
        return redirect()->route('adminsipupuk.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $sipupuks = Sipupuk::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($sipupuks->image) {
            // Hapus file dari penyimpanan
            Storage::delete('public/sipupuks' . $sipupuks->image);
        }

        //delete product
        $sipupuks->delete();

        //redirect to index
        return redirect()->route('adminsipupuk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

};
