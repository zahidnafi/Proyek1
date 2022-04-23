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
<?php
require_once "class_mahasiswa.php";
$mh1 = new mahasiswa("02011", "Faiz Fikri","TI", 2012,  3.8);
$mh2 = new mahasiswa("02012", "Jamaludin","TI", 2012,  3.9);
$mh3 = new mahasiswa("01011", "Supriyadi", "SI", 2010,  3.46);
$mh4 = new mahasiswa("01012", "Juminten", "SI", 2010,  3.2);

echo"<br/>NIM : ".$mh1->nim;
echo"<br/>Nama : ".$mh1->nama;
echo "<br/> Prodi : ".$mh1->prod;
echo "<br/> Tahun Angkatan : ".$mh1->ta;
echo "<br/> IPK : ".$mh1->ipk;
echo "<br/> Predikat : ".$mh1->predikat_ipk (); 

?>
						
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
?>