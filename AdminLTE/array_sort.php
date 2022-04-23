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
							<h3 class="card-title">PHP Info</h3>

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
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>array sort</title>
                            </head>
                            <body>
                            
                            <?php
                            $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Manggis","j"=>"Jambu" ];
                            echo '<ol>';
                            foreach($ar_buah as $k => $v) {
                                echo '<li>' .$k. '-' . $v . '</li>';
                                }
                                echo'</ol>';
                                sort($ar_buah);
                                echo '<hr/>';
                                echo '<ol>';
                                foreach($ar_buah as $k => $v) {
                                    echo '<li>' . $k . '-' . $v . '</li>';
                            
                                }
                                echo '</ol>';
                            
                            ?>
                            
                                
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
?>