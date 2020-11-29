<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>N.Presentasi</th>
      <th>N.Penguasaan Materi</th>
      <th>N.Tanya Jawab</th>
      <th>N.Penampilan</th>
      <th>N.Sikap</th>
      <th>N.Motivasi</th>
      <th>N.Tes Teori</th>
      <th>N.Tes Praktik</th>
      <th>N.Matkul</th>
      <th>IPK</th>
      <th>Rekomendasi</th>
      <th>TFT</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $no = 1; ?>
      <?php foreach ($na as $n) : ?>
        <td><?= $no; ?></td>
        <td><?= $n['nim']; ?></td>
        <td><?= $n['n_pre']; ?></td>
        <td><?= $n['p_mtr']; ?></td>
        <td><?= $n['n_tj']; ?></td>
        <td><?= $n['n_pn']; ?></td>
        <td><?= $n['n_skp']; ?></td>
        <td><?= $n['n_mt']; ?></td>
        <td><?= $n['n_tt']; ?></td>
        <td><?= $n['n_tp']; ?></td>
        <td><?= $n['n_mk']; ?></td>
        <td><?= $n['ipk']; ?></td>
        <td><?= $n['rkmd']; ?></td>
        <td><?= $n['tft']; ?></td>
        <td>
          <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditNaModal<?= $n["kd_seleksi"]; ?>"> <i class="fa fa-pencil"></i> Edit</a>
          <a href="<?= base_url('na/hapusNa/') . $n['kd_seleksi']; ?>" class=" tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
        </td>
    </tr>
    <?php $no++; ?>
  <?php endforeach ?>
  </tbody>
</table>