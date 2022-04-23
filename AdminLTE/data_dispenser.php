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
require_once "class_dispenser.php";
$pepsi = new Dispenser();
echo "Nama Minuman : ".$pepsi -> nama = 'Pepsi';
echo '</br>';
echo "Volume Botol Minuman : ".$pepsi -> isi(1000)." Ml";
echo '</br>';
echo "1 Gelas Seharga : ".$pepsi -> harga('Rp.1500');
echo '</br>';
echo "Jamal Membeli 1 Gelas air pepsi dengan Harga ".$pepsi -> harga('Rp.1500')." dengan volume gelas sebesar ".$pepsi -> volG(250)." Ml";
echo '</br>';
echo "Sisa Volume botol minuman Pepsi sebesar : ".$pepsi -> isi(1000) - $pepsi -> volG(250). " Ml";

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