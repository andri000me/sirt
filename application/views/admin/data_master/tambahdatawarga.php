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
        TAMBAH DATA WARGA
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Warga</li>
      </ol>
    </section>
    <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="<?php echo site_url('admin/data_warga/add') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                <label for="NIK">NIK</label>
                <input class="form-control" <?php echo form_error('NIK') ? 'is-invalid':'' ?>"
							type="text" name="no_rt" placeholder="NIK" />
                            <div class="invalid-feedback">
									<?php echo form_error('NIK') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="NKK">NKK</label>
                <input class="form-control" <?php echo form_error('NKK') ? 'is-invalid':'' ?>"
							type="text" name="NKK" placeholder="NKK" />
                            <div class="invalid-feedback">
									<?php echo form_error('NKK') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input class="form-control" <?php echo form_error('nama') ? 'is-invalid':'' ?>"
							type="text" name="nama" placeholder="Nama Lengkap" />
                            <div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="tmpt_lahir">Tempat Lahir</label>
                <input class="form-control" <?php echo form_error('tmpt_lahir') ? 'is-invalid':'' ?>"
							type="text" name="tmpt_lahir" placeholder="Tempat Lahir" />
                            <div class="invalid-feedback">
									<?php echo form_error('tmpt_lahir') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
							type="text" name="tgl_lahir" placeholder="Tanggal Lahir" />
                            <div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control" <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
							type="text" name="alamat" placeholder="Alamat" />
                            <div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="rt">RT</label>
                <input class="form-control" <?php echo form_error('rt') ? 'is-invalid':'' ?>"
							type="text" name="rt" placeholder="RT" />
                            <div class="invalid-feedback">
									<?php echo form_error('rt') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="rw">RW</label>
                <input class="form-control" <?php echo form_error('RW') ? 'is-invalid':'' ?>"
							type="text" name="rw" placeholder="RW" />
                            <div class="invalid-feedback">
									<?php echo form_error('rw') ?>
								</div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
<?php $this->load->view("admin/_partials/footer.php")?>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view("admin/_partials/js.php")?>
</body>
</html>