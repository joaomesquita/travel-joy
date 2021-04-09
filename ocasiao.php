<?php include 'header.php'; ?>

<div class="session">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="title">Ocasião</h1>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla a augue mollis dapibus. Proin accumsan, tortor vitae commodo porta, nulla erat porttitor erat, vitae molestie purus est vel dui. Pellentesque in ornare mauris. Cras sed enim nec diam sodales iaculis. Nam ligula turpis, fermentum et rhoncus at, egestas vel mauris. Sed id consequat magna. Nam id neque elementum eros pharetra tincidunt nec id odio.</p>
    		</div>

    		<hr class="space" />

    		<?php for ($i = 0; $i < 6; $i++) { ?>
    		<div class="col-md-6">
                <div class="card">
                    <!-- 570x370 -->
                    <a href="interna-ocasiao.php">
                        <img src="img/ocasiao.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h2 class="sm-title">Casamento</h2>
                        </div>
                    </a>
                </div>
            </div>
            <?php echo (($i+1)%2==0)?'<hr class="space" />':'';?>
            <?php } ?>

    	</div>
        
    </div>
</div>

<?php include 'footer.php'; ?>