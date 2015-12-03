<footer>
	<?php 
	echo $this->Html->script(
            array(
                'jquery-2.1.4.js',
                'Chart.min.js',
                'dashboard-demo.js',
                'jquery.dataTables',
                'dataTables.bootstrap',
                'excanvas.min',
                'flot-demo',
                'morris',
                'morris-demo',
                'jquery.flot',
                'jquery.flot.pie',
                'jquery.flot.resize',
                'jquery.flot.tooltip.min',
                'jquery.metisMenu',
                'pace',
                'raphael-2.1.0.min',
                'siminta',                
                'bootstrap'
            )
    );
    echo $this->fetch('script');
    echo $this->fetch('script'); ?>
</footer>




