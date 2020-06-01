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
        TAMBAH DATA RT
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data RT</li>
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
            <form  action="<?php echo site_url('admin/data_rt/add') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                <label for="no_rt">RT</label>
                <input class="form-control" <?php echo form_error('no_rt') ? 'is-invalid':'' ?>"
							type="text" name="no_rt" placeholder="RT" />
                            <div class="invalid-feedback">
									<?php echo form_error('no_rt') ?>
								</div>
                </div>
                <div class="form-group">
                <label for="no_rw">RW</label>
                <input class="form-control" <?php echo form_error('rw') ? 'is-invalid':'' ?>"
							type="text" name="no_rw" placeholder="RW" />
                            <div class="invalid-feedback">
									<?php echo form_error('no_rw') ?>
								</div>
                </div>
                <div class="form-group">
                <label>Kelurahan/Desa</label>
                <select class="form-control" name="kelurahan">
                    <option value="">- Pilih Kelurahan/Desa -</option>
                    <option value="sadang serang">sadang serang</option>
                    <option value="cibiru">Cibiru</option>
                    <option value="ujung berung">Ujung Berung</option>
                    <option value="cibeunying">Cibeunying</option>
                </select>
                </div>
                <div class="form-group">
                <label>Kecamatan</label>
                <select class="form-control" name="kecamatan">
                    <option value="">- Pilih Kecamatan -</option>
                    <option value="coblong">Coblong</option>
                    <option value="sragen">Sragen</option>
                    <option value="buahbatu">Buah Batu</option>
                    <option value="cileunyi">Cileunyi</option>
                    <option value="bojongkoneng">Bojong Koneng</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kota/Kabupaten</label>
                  <select class="form-control" name="kecamatan">
                    <option value="">- Pilih Kota/Kabupaten -</option>
                    <option value="bandung">Bandung</option>
                    <option value="malang">Malang</option>
                    <option value="kudus">Kudus</option>
                    <option value="solo">Solo</option>
                    <option value="bekasi">Bekasi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                  <select class="form-control" name="kecamatan">
                    <option value="">- Pilih Kota -</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Bali">Bali</option>
                    <option value="Papua">Papua</option>
                  </select>
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