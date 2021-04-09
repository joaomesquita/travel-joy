	
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title">Dicas e mais Dicas</h2>
					<p class="description font-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla a augue mollis dapibus. Proin </p>
				</div>

				<hr class="space" />
				<?php for ($i = 1; $i < 7; $i++) { ?>
				<div class="col-md-4 col-6 mb-4">
					<div class="row d-flex align-items-center">
						<div class="col-md-4">
							<img class="img-fluid" src="img/blog/blog_<?php echo $i;?>.png" alt="">
						</div>
						<div class="col-md-8">
							<span class="d-block font-13 font-600 color-2">Dica de viagem</span>
							<p class="color-3 font-14 font-600">Os melhores points de kitesurfe do Brasil</p>
						</div>
					</div>
				</div>
				<?php //echo (($i+1)%4==0)?'<hr class="space" />':'';?>
				<?php } ?>

				<hr class="space" />

				<div class="col-md-12">
					<a class="btn btn-lg btn-primary" href="blog.php">Acesse o Blog</a>
				</div>

				<hr class="space" />

			</div>
		</div>

		<hr class="space" />
		<hr />

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="mb-0 creditos">
					<a href="#">
						<span class="fa-stack fa-1x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					<a href="#">
						<span class="fa-stack fa-1x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					<a href="#">
						<span class="fa-stack fa-1x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					Travel Joy &copy 2021. Todos os Direitos Reservados</p>
				</div>
				
				<div class="col-md-6 text-right">
					<p class="mb-0 creditos">Design por <a class="dev" href="#">Smile Studio</a></p>	
				</div>
			</div>
		</div>
	</div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>