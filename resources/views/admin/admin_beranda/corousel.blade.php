<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Contact | ADMIN </title>
    {{-- link alert dari sweetalert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/sidebar_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            {{-- <span class="list_page">{{ $title }}</span> --}}
        </div>

        <div class="profile d-flex align-items-center">
            {{-- <span class="nama_admin">{{ $admin->nama }}</span>
            @if (auth()->user()->gambar)
                <img class="object-fit-fill rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile"
                    loading="lazy" />
            @else
                <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile"
                    loading="lazy" />
            @endif --}}
        </div>
    </header>

    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between  mt-4">
                    <h3 class="w-60 warna-hijau">DASHBOARD COROUSEL</h3>
                    </div>
                </div>
                <div class="card border-0 shadow rounded p-2 mt-3 ">
                    <table class="table table-striped table-bordered-less table-hover">
                        <thead class="text-center">
                            <thead>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PESAN</th>
                                <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                        <tbody>
                            @forelse ($contact as $data)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $data->nama }}
                                    </td>
                                    <td>
                                        {{ $data->email }}
                                    </td>
                                    <td>
                                        {{ $data->pesan }}
                                    </td>
                                    <td class="text-center">
                                            <form action="{{ route('delete', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0">
                                                    <i class="bi bi-trash3-fill fs-5 text-decoration-none text-danger"></i>
                                                </button>
                                            </form>
                                        </form>
                                    </td>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data Tidak Ada</td>
                                    </tr>
                            @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
