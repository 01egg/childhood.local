<div class="question">
            <div class="question__text">
                Есть вопросы? Напишите нам!
            </div>
            <div id="reply" class="minibutton">Написать</div>
            <div class="question__close">&times</div>
        </div>
        
        <div class="reply">
            <div class="reply__body">
                <div class="reply__title">
                    Оставьте ваш вопрос здесь
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="203" title="Untitled"]' ) ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                        <?php the_custom_logo()?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="footer__social">
                            <div class="footer__social-item">
                            <?php the_field('social_block_ttl', 2); ?>
                            </div>
                            <a href="<?php the_field('social_block_inst_url'); ?>" class="footer__social-item">
                                <img src="<?php the_field('social_block_inst_icon', 2); ?>" alt="Instagram Icon">
                            </a>
                            <a href="<?php the_field('social_block_fb_url', 2); ?>" class="footer__social-item">
                            <img src="<?php the_field('social_block_fb_icon', 2); ?>" alt="Facebook Icon">
                            </a>
                            <a href="<?php the_field('social_block_yt_url', 2); ?>" class="footer__social-item">
                            <img src="<?php the_field('social_block_yt_icon', 2); ?>" alt="facebook Icon">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-0 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="footer__contacts">
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg" alt="телефон" class="footer__contacts-logo">
                                <div class="footer__contacts-tel">
                                    <a href="tel:<?php the_field('tel_top', 2); ?>"><?php the_field('tel_top', 2); ?></a>
                                    <a href="tel:<?php the_field('tel_buttom', 2); ?>"><?php the_field('tel_buttom', 2); ?></a>
                                </div>
                            </div>
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="footer__contacts-logo">
                                <address><?php the_field('adress', 2); ?></address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="footer__policy">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
        </footer>
        <?php

            wp_footer();

        ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp_lJJBRfJpfgaylfH5UUz48yHhZqvtVc"></script>
        <script type="text/javascript">
        (function( $ ) {
        
        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap( $el ) {
        
            // Find marker elements within map.
            var $markers = $el.find('.marker');
        
            // Create gerenic map.
            var mapArgs = {
                zoom        : $el.data('zoom') || 16,
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map( $el[0], mapArgs );
          
            // Add markers.
            map.markers = [];
            $markers.each(function(){
                initMarker( $(this), map );
            });
          
            // Center map based on markers.
            centerMap( map );
          
            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker( $marker, map ) {
        
            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat( lat ),
                lng: parseFloat( lng )
            };
          
            // Create marker instance.
            var marker = new google.maps.Marker({
                position : latLng,
                map: map
            });
          
            // Append to reference for later use.
            map.markers.push( marker );
          
            // If marker contains HTML, add it to an infoWindow.
            if( $marker.html() ){
            
                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });
              
                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap( map ) {
        
            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function( marker ){
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });
          
            // Case: Single marker.
            if( map.markers.length == 1 ){
                map.setCenter( bounds.getCenter() );
            
            // Case: Multiple markers.
            } else{
                map.fitBounds( bounds );
            }
        }

        // Render maps on page load.
        $(document).ready(function(){
            $('.acf-map').each(function(){
                var map = initMap( $(this) );
            });
        });

        })(jQuery);
        </script>
    </body>
</html>