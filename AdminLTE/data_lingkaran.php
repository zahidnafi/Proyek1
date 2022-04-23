
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
							include_once 'footer.php';
							?>
							<?php
							require_once "class_lingkaran.php";
							echo "NILAI PHI " . lingkaran::PHI;
							$lingkar1 = new lingkaran( 5 );
							$lingkar2 = new lingkaran( 2 );

							echo"<br/>Luas Lingkaran I ".$lingkar1->getLuas();
							echo"<br/>Luas Lingkaran II ".$lingkar2->getLuas();
							echo "<br/>Keliling Lingkaran I ".$lingkar1->getKeliling();
							echo "<br/>Keliling Lingkaran II ".$lingkar2->getKeliling();
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