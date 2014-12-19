<?php get_header(); ?>
    <div class="container-fluid">
        <div id="menu" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

            <?php include 'nav.php'; ?>
            
        </div>
        <div id="principal" class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <div class="contenido box fleft fwidth">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Contacto"]'); ?>
                
            </div>
        </div>  
    </div>
  
<?php get_footer(); ?>
