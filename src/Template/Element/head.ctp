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
    
    
    ?> 
</head>
