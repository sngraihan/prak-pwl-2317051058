<table class="table table-striped table-bordered align-middle">
  <thead class="table-light">
    <tr>
      <th style="width:72px">ID</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Kelas</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->nim }}</td>
        <td>{{ $user->nama_kelas }}</td>
      </tr>
    @empty
      <tr>
        <td colspan="4" class="text-center text-muted">Belum ada data</td>
      </tr>
    @endforelse
  </tbody>
</table>
