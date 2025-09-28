<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('/mahasiswa/store') }}" method="post">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" required class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control">
                            <option value="">Pilih</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
