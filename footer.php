<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->
 <div class="tm-footer">
            <div class="uk-container uk-container-center uk-text-center">
                <ul class="uk-subnav uk-subnav-line uk-flex-center">
                    <li><a href="https://github.com/uikit/uikit">GitHub</a></li>
                    <li><a href="https://github.com/uikit/uikit/issues">Issues</a></li>
                    <li><a href="https://github.com/uikit/uikit/blob/master/CHANGELOG.md">Changelog</a></li>
                    <li><a href="https://twitter.com/getuikit">Twitter</a></li>
                </ul>
              <div class="uk-panel">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" width="90" height="30" title="UIkit" alt="UIkit"></a>
                    <p>Built by <a href="https://www.webmobapps.com">Webmobapps</a> with love and a lot of coffee.<br class="uk-hidden-small">Licensed under <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p> 
                </div>   

           <div class="uk-flex">
          <div class="uk-width-1-3 links margin">
         <?php (dynamic_sidebar('first-footer-widget')); ?>
          </div>
          <div class="uk-width-1-3 links">
          <?php (dynamic_sidebar('second-footer-widget')); ?>
          </div>
          <div class="uk-width-1-3 links">
         <?php (dynamic_sidebar('third-footer-widget')); ?>
          </div>
          <div class="uk-width-1-3 links">
         <?php (dynamic_sidebar('fourth-footer-widget')); ?>
          </div>
        </div>
       </div>  
    
      <div class="uk-container uk-container-center uk-text-center">
        <hr class="divider">
      </div>
      <div class="uk-container">
        <div class="uk-flex bottom">
          <div class="uk-width-1-2 copyright uk-width-9-10">
          <p><?php printf( __( 'Copyright %1$s', 'webmobapps' ), '<a href="'. esc_url( 'https://webmobapps.com' ) .'">Webmobapps</a> © 2018' ); ?></p>
          </div>
          <div class="uk-width-1-2 social uk-width-9-10">
            <?php (dynamic_sidebar('social-footer-widget-area')); ?>
            <div class="clear"></div>
          </div>
        </div>
		
	</div><!-- .site-info -->
	  </div>
<!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer 
?>
</body>
</html>

