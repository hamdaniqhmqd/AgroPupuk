@include('component.sidebar_new')
<style>
     body {
        font-family: Arial, sans-serif;
    }

    /* Add styles to the form itself */
form {
  display: flex;
  flex-direction: column;
  gap: 10px; /* Add spacing between labels and input fields */
  margin-left: 300px; /* Add margin to the form */
  margin-top: 170px;
  margin-right: 50px;
}

/* Style the labels */
label {
  font-weight: bold; /* Make labels bold */
}

/* Style the input fields */
input[type="text"],
input[type="email"],
input[type="file"] {
  padding: 5px; /* Add padding to the input fields */
  border: 1px solid #ccc; /* Add a border to the input fields */
  border-radius: 4px; /* Add rounded corners to the input fields */
}

/* Style the button */
button[type="submit"] {
  background-color: #4CAF50; /* Green color for the button */
  color: white; /* White text color for the button */
  padding: 10px 20px; /* Add padding to the button */
  border: none; /* Remove border from the button */
  border-radius: 4px; /* Add rounded corners to the button */
  cursor: pointer; /* Make the button look clickable */
}

form img {
    position: absolute; /* Posisikan secara absolut */
  top: 25px; /* Posisikan di atas gambar kucing */
  left: 850px; /* Posisikan di kiri atas gambar kucing */
}

</style>

<link rel="stylesheet" href="{{ asset('css/sidebar_new.css') }}">


@if (session('success'))
<p>{{ session('success') }}</p>
@endif

<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="{{ old('nama', auth()->user()->nama) }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required>

    <label for="email">Nomor HP:</label>
    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', auth()->user()->no_hp) }}" required>

    <label for="gambar">Gambar:</label>
    <input type="file" name="gambar" id="gambar">

    @if (auth()->user()->gambar)
    <img src="{{ Storage::url(auth()->user()->gambar) }}" alt="Gambar Profil" width="100" height="120">
    @endif

    <button type="submit">Simpan Perubahan</button>
</form>