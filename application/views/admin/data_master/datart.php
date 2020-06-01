<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("admin/_partials/navbar.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 389px;">

<section class="content-header">
    <!-- Content Header (Page header) -->
    <h1>
        DATA RT
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data RT</li>
      </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
        <a href="<?= site_url()?>admin/data_rt/add" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
        <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
                </div>
            </div>
        </div>
        
            <div class="box-body table-responsive">
            <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>NO</th>
                <th>RT/RW</th>
                <th>KELURAHAN/DESA</th>
                <th>KECAMATAN</th>
                <th>KOTA/KABUPATEN</th>
                <th>PROVINSI</th>
                <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rt as $rt): ?>
									<tr>
										<td>
											<?php echo $rt->id_rt ?>
										</td>
										<td>
											<?php echo $rt->no_rt ?> <?php echo "/" ?> <?php echo $rt->no_rw ?>
										</td>
                                        <td>
											<?php echo $rt->kelurahan ?>  
										</td>
                                        <td>
                                            <?php echo $rt->kecamatan ?>
										</td>
                                        <td>
                                            <?php echo $rt->kota ?>
										</td>
                                        <td>
                                            <?php echo $rt->provinsi ?>
										</td>
                <td>
                    <a href="<?= site_url('admin/data_rt/edit/'.$rt->id_rt)?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a onclick="deleteConfirm('<?= site_url('admin/data_rt/delete/'.$rt->id_rt) ?>')" href="#!" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
                </tr><?php endforeach; ?></tbody>
            </table>
        <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    
    
</div>
<?php $this->load->view("admin/_partials/footer.php")?>
<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view("admin/_partials/js.php")?>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>
</html>