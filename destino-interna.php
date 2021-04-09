<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<h1 class="title">África e Ilhas</h1>
    		</div>
    		<div class="col-md-6 text-right">
    			<a class="" href="destinos.php">
    				<i class="fas fa-arrow-left"></i>
    				Voltar para destinos
    			</a>
    		</div>
    		<div class="col-md-12">
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla a augue mollis dapibus. Proin accumsan, tortor vitae commodo porta, nulla erat porttitor erat, vitae molestie purus est vel dui. Pellentesque in ornare mauris. Cras sed enim nec diam sodales iaculis. Nam ligula turpis, </p>
    		</div>

    		<hr class="space" />

    		<?php for ($i = 0; $i < 12; $i++) { ?>
    		<div class="col-md-3 col-6">
                <div class="card">
                    <!-- 270x370 -->
                    <a href="botswana.php">
                        <img src="img/onde_1.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h2 class="sm-title">Botswana</h2>
                        </div>
                    </a>
                </div>
            </div>
            <?php echo (($i+1)%4==0)?'<hr class="space" />':'';?>
            <?php } ?>

    	</div>
        
    </div>
</div>

<?php include 'footer.php'; ?>