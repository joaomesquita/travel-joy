<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="title">Blog</h1>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla a augue mollis dapibus. Proin accumsan, tortor </p>
    		</div>
    		
    		<hr class="space" />

    		<div class="row blog_list d-flex align-items-center">
    			<?php for ($i = 1; $i < 5; $i++) { ?>
    			<div class="col-md-3">
    				<!-- 230x230 -->
    				<a href="#">
    					<img class="img-fluid" src="img/blog/blog_<?php echo $i; ?>.png" alt="">
    				</a>
    			</div>
    			<div class="col-md-9">
    				<a href="post-interna.php">
    					<h2 class="color-1 text-uppercase font-22 font-600">RETOMADA DO TURISMO NO BRASIL: 7 DESTINOS DE PRAIA E MONTANHA</h2>
    					<span class="d-block">BRASIL  BÚZIOS  NORDESTE  PARATY  PRAIA DA PIPA  RIO GRANDE DO NORTE  SUDESTE</span>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla a augue mollis dapibus. Proin accumsan, tortor vitae commodo porta, nulla erat porttitor erat, </p>
    				</a>
    			</div>

    			<hr class="space" />
    			<hr class="space" />
    			<hr />
    			<hr class="space" />

    			<?php } ?>

    			<div class="col-md-12 mt-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center">
							<li class="page-item">
								<a class="page-link" href="#">Anterior</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">5</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">6</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">...</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">10</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">11</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Próximo</a>
							</li>
						</ul>
					</nav>
				</div>

    		</div>
    	</div>
    </div>
</div>

<?php include 'footer.php'; ?>