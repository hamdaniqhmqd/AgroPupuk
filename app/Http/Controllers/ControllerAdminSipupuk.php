<?php

namespace App\Http\Controllers;

use App\Models\Sipupuk;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
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
        // Memeriksa apakah pengguna terautentikasi
        if(Auth::check()) {
            // Mengambil data admin terautentikasi
            $admin = User::find(Auth::id());
            $title = 'Data Si Pupuk';

            // Mengambil semua produk
            $sipupuks = Sipupuk::latest()->paginate(10);

            // Menampilkan view dengan produk dan data admin
            return view('admin.admin_sipupuk.index', compact('sipupuks', 'admin', 'title'));
        } else {
            // Jika tidak terautentikasi, redirect ke halaman login
            return view('admin.auth.login');
        }
    }

    public function create(): View
    {
        $data['admin'] = User::find(Auth::User()->id);
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

        $data = new Sipupuk();
        //validasi form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'content'       => 'required|min:1000'
        ]);


        //upload image
        $image = $request->file('image');
        $nameImage =     Carbon::now()->format('Y-m-d_H-i-s_') .
                $request->input('title') . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/gambar_sipupuk', $nameImage); // Pastikan direktori penyimpanan yang benar
        $data['image'] = $nameImage;
        
        // Dapatkan nama user yang sedang login
        $nama = Auth::user()->nama;

        //buat produk
        $data->create([
            'image'         => $nameImage,
            'title'         => $request->title,
            'content'       => $request->content,
            'author'        => $nama // Sesuaikan dengan author yang sesuai
        ]);

        //redirect ke index
        return redirect()->route('adminsipupuk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //mengambil produk berdasarkan ID
        $sipupuks = Sipupuk::findOrFail($id);
        $data['admin'] = User::find(Auth::User()->id);

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
                'image'   => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'title'   => 'required|min:5',
                'content' => 'required|min:1000'
            ]);
        
            //get product by ID
            $sipupuk = Sipupuk::findOrFail($id);
        
            //get authenticated user's name
            $nama = Auth::user()->nama;
        
            //check if image is uploaded
             //check if image is uploaded
            if ($request->hasFile('image')) {
                //upload new image
                $image = $request->file('image');
                $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') .$request->input('title') . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/gambar_sipupuk', $nameImage);
        
                //delete old image
                Storage::delete('public/gambar_sipupuk/' . $sipupuk->image);

            } else {
                //keep old image
                $nameImage = $sipupuk->image;
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
            Storage::delete('oublic/gambar_sipupuk/' . $sipupuks->image);
        }

        //delete product
        $sipupuks->delete();

        //redirect to index
        return redirect()->route('adminsipupuk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function cari(Request $request) : View
    {
        $query = $request->get('cari');

        // Ambil nilai pencarian dari input
        $query = $request->input('cari');

        if ($query) {
            // Jika terdapat query pencarian
            $sipupuks = Sipupuk::where('title', 'like', '%' . $query . '%')->latest()->paginate(10);
        } else {
            // Jika tidak ada query pencarian
            $sipupuks = Sipupuk::latest()->paginate(10);
        }

        return view('admin.admin_sipupuk.index',['kunci' => $query], compact('sipupuks' ,'query'));
    }

};
