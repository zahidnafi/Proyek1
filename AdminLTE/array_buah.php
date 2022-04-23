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
                                    $ar_buah = ["pepaya", "mangga", "Pisang", "Jambu" ];
                                        //cetak buah ke index ke 2
                                    echo $ar_buah[2];
                                        //cetak jumlah buah
                                    echo '<br/>Jumlah Buah' . count($ar_buah);
                                        //cetak seluruh buah
                                    echo '<ol>';
                                    foreach($ar_buah  as $buah) {
                                        echo '<li>' . $buah . '</li>';
                                    }
                                    echo '<ol>';
                                        //tambahkan buah
                                    $ar_buah[] = "Durian";
                                        //Hapus buah
                                    unset($ar_buah[1]);
                                        //Ubah indeks ke 2 menjadi semangka
                                    $ar_buah[2] = "Manggis";
                                        //cetak seluruh buah dengan indeks nya
                                    echo '<ul>';
                                    foreach($ar_buah as $k => $v) {
                                        echo '<li> buah index =' . $k . 'adalah' . $v . '<li/>';
                                    }
                                    echo '<ul>';
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