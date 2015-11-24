<head>
    <?php echo $this->Html->charset(); ?>

    <title>
        <?php //echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(
            array(
                'bootstrap',
                'dataTables.bootstrap',
                'main-style',
                'morris-0.4.3.min',
                'pace-theme-big-counter',
                'social-buttons',
                'style',
                'timeline'
                
            )
    );

    echo $this->fetch('meta');
    echo $this->fetch('css');
    
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
    ?> 
</head>
