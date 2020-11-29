 <!-- page content -->
 <div class="right_col" role="main">
   <div class="row top_tiles">
     <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
           <h2>Tabel Matrik Perhitungan SAW<small>Users</small></h2>
           <a href="" class="btn btn-dark btn-xs pull-right" data-toggle="modal" data-target="#ModalTambahUser"> <i
               class="fa fa-plus-square"></i> Tampil Rangking</a>
           <ul class="nav navbar-right panel_toolbox">
           </ul>
           <div class="clearfix"></div>
           <?= $this->session->flashdata('message'); ?>
         </div>
         <div class="clearfix"></div>

         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
               <h2>Matrik Keputusan</h2>
               <div class="x_content">
                 <div class="clearfix" style="padding-bottom: 10px;"></div>
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                   cellspacing="0" width="100%" style="text-align:center">
                   <thead>
                     <tr>
                       <th rowspan='2' style="text-align:center">No</th>
                       <th rowspan='2' style="text-align:center">Alternatif</th>
                       <th colspan='7' style="text-align:center">Kriteria</th>
                       <th rowspan='2' style="text-align:center">Aksi</th>
                     </tr>
                     <tr>
                       <th style="text-align:center">C1</th>
                       <th style="text-align:center">C2</th>
                       <th style="text-align:center">C3</th>
                       <th style="text-align:center">C4</th>
                       <th style="text-align:center">C5</th>
                       <th style="text-align:center">C6</th>
                       <th style="text-align:center">C7</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <?php $no = 1; ?>
                       <?php foreach ($ma as $m) : ?>
                       <td><?= $no; ?></td>
                       <td><?= $m["nim"]; ?></td>
                       <td><?= $m['k1']; ?></td>
                       <td><?= $m['k2']; ?></td>
                       <td><?= $m['k3']; ?></td>
                       <td><?= $m['k4']; ?></td>
                       <td><?= $m['k5']; ?></td>
                       <td><?= $m['k6']; ?></td>
                       <td><?= $m['k7']; ?></td>
                       <td>
                         <a href="<?= base_url('na/hapusMa/') . $m['kd_ma']; ?>"
                           class="tombol-hapus btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Hapus</a>
                       </td>
                     </tr>
                     <?php $no++; ?>
                     <?php endforeach ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>
         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
               <h2>Perhitugan Normalisasi</h2>
               <div class="x_content">
                 <div class="clearfix" style="padding-bottom: 10px;"></div>
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                   cellspacing="0" width="100%" style="text-align:center">
                   <thead>
                     <tr>
                       <th rowspan='2' style="text-align:center">No</th>
                       <th rowspan='2' style="text-align:center">Alternatif</th>
                       <th colspan='7' style="text-align:center">Kriteria</th>
                     </tr>
                     <tr>
                       <th style="text-align:center">C1</th>
                       <th style="text-align:center">C2</th>
                       <th style="text-align:center">C3</th>
                       <th style="text-align:center">C4</th>
                       <th style="text-align:center">C5</th>
                       <th style="text-align:center">C6</th>
                       <th style="text-align:center">C7</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <?php $no = 1; ?>
                       <?php foreach ($ma as $m) : ?>
                       <td><?= $no; ?></td>
                       <td><?= $m["nim"]; ?></td>
                       <td><?= round($m['k1'] / intval($max['C1']), 2); ?></td>
                       <td><?= round($m['k2'] / intval($max2['C2']), 2); ?></td>
                       <td><?= round($m['k3'] / intval($max3['C3']), 2); ?></td>
                       <td><?= round($m['k4'] / intval($max4['C4']), 2); ?></td>
                       <td><?= round($m['k5'] / intval($max5['C5']), 2); ?></td>
                       <td><?= round($m['k6'] / intval($max6['C6']), 2); ?></td>
                       <td><?= round($m['k7'] / intval($max7['C7']), 2); ?></td>
                     </tr>
                     <?php $no++; ?>
                     <?php endforeach ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>

         <div class="clearfix"></div>
         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
               <h2>Perhitungan Nilai Preferensi</h2>
               <div class="x_content">
                 <div class="clearfix" style="padding-bottom: 10px;"></div>
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                   cellspacing="0" width="100%" style="text-align:center">
                   <thead>
                     <tr>
                       <th rowspan='2' style="text-align:center">No</th>
                       <th rowspan='2' style="text-align:center">Alternatif</th>
                       <th colspan='7' style="text-align:center">Kriteria</th>
                       <th rowspan='2' style="text-align:center">Hasil</th>
                     </tr>
                     <tr>
                       <th style="text-align:center">C1</th>
                       <th style="text-align:center">C2</th>
                       <th style="text-align:center">C3</th>
                       <th style="text-align:center">C4</th>
                       <th style="text-align:center">C5</th>
                       <th style="text-align:center">C6</th>
                       <th style="text-align:center">C7</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <?php $no = 1; ?>
                       <?php foreach ($ma as $m) : ?>
                       <td><?= $no; ?></td>
                       <td><?= $m["nim"]; ?></td>
                       <?php $jml1 = ($m['k1'] / intval($max['C1'])) * intval($b1['bobot_pref']); ?>
                       <td>
                         <?= $jml1; ?>
                       </td>
                       <?php $jml2 = ($m['k2'] / intval($max2['C2'])) * intval($b2['bobot_pref']); ?>
                       <td>
                         <?= $jml2; ?>
                       </td>
                       <?php $jml3 = ($m['k3'] / intval($max3['C3'])) * intval($b3['bobot_pref']); ?>
                       <td>
                         <?= $jml3; ?>
                       </td>
                       <?php $jml4 = ($m['k4'] / intval($max4['C4'])) * intval($b4['bobot_pref']); ?>
                       <td>
                         <?= $jml4; ?>
                       </td>
                       <?php $jml5 = ($m['k5'] / intval($max5['C5'])) * intval($b5['bobot_pref']); ?>
                       <td>
                         <?= $jml5; ?>
                       </td>
                       <?php $jml6 = ($m['k6'] / intval($max6['C6'])) * intval($b6['bobot_pref']); ?>
                       <td>
                         <?= $jml6; ?>
                       </td>
                       <?php $jml7 = ($m['k7'] / intval($max7['C7'])) * intval($b7['bobot_pref']); ?>
                       <td>
                         <?= $jml7; ?>
                       </td>
                       <?php
                          $data = [$jml1, $jml2, $jml3, $jml4, $jml5, $jml6, $jml7];
                          $total = array_sum($data); ?>
                       <td>
                         <?= $total; ?>
                       </td>
                     </tr>
                     <?php $no++; ?>
                     <?php endforeach ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>

       </div>
     </div>
   </div>
 </div>
 <!-- /page content -->
 <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>