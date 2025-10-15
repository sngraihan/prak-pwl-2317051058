<table class="table table-striped table-bordered align-middle">
  <thead class="table-light">
    <tr>
      <th style="width:72px">No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $index => $user)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->nim }}</td>
        <td>{{ $user->nama_kelas }}</td>
        <td style="display:flex; gap:10px; align-items:center;">
          <a href="{{ route('user.edit', $user->id) }}"
             style="background:linear-gradient(135deg,#93c5fd,#3b82f6);
                    color:white;
                    border:none;
                    padding:6px 14px;
                    border-radius:8px;
                    font-weight:600;
                    text-decoration:none;
                    transition:0.2s;">
             Edit
          </a>

          <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                style="display:inline;"
                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="background:linear-gradient(135deg,#fca5a5,#ef4444);
                           color:white;
                           border:none;
                           padding:6px 14px;
                           border-radius:8px;
                           font-weight:600;
                           cursor:pointer;
                           transition:0.2s;">
                 Hapus
            </button>
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="5" class="text-center text-muted">Belum ada data</td>
      </tr>
    @endforelse
  </tbody>
</table>

<style>
  a[href*="edit"]:hover, button[type="submit"]:hover {
    filter: brightness(1.1);
    transform: scale(1.03);
  }
</style>
