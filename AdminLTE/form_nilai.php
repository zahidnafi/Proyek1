<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Program Studi Teknik Informatika</h1>
				</div>
			
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"></h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
              ?>
              <!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Form Nilai</title>
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              </head>
              <body>
                  <h2 style="text-align: center;" >Form Nilai</h2>
              <form method="POST" action="nilai_siswa.php" >
                  <div class="container">
                <div class="form-group row">
                  <label for="name" class="col-4 col-form-label">Nama</label> 
                  <div class="col-8">
                    <input id="name" name="name" placeholder="Masukkan nama anda" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                  <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                      <option value="DDP">Dasar-Dasar Pemrograman</option>
                      <option value="web">Pemrograman web</option>
                      <option value="basdat">Basis data</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                  <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                  <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                  <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
                  </div>
                  </div>
                </div>
              </form>
              </body>
              </html>

						
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';