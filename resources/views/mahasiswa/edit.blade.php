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

                <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $mahasiswa->id }}" readonly>

                    <div class="mb-3 form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" value="{{ $mahasiswa->nip }}" required
                            class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required
                            class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control">
                            <option value="">Pilih</option>
                            <option value="P" {{ $mahasiswa->kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            <option value="L" {{ $mahasiswa->kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10">{!! $mahasiswa->alamat !!}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Ubah</button>

                    <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
