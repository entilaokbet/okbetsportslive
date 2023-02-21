<?php 
    /* Template Name: Home Template */ 
    get_header();
?>
    
    <main id="primary" class="site-main">

        <div class="container">
        
            <div class="col mt24">
                <div class="col-content-1">
                    <ul class="side-menu">
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/Group-1005.png" class="" title="" alt=""> All Sports <span class="counter-balloon">1923</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/ic_outline-sports-basketball.png" class="" title="" alt=""> Basketball <span class="counter-balloon">152</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/bx_football.png" class="" title="" alt=""> Football <span class="counter-balloon">123</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/bx_tennis-ball.png" class="" title="" alt=""> Tennis <span class="counter-balloon">123</span> 
                        </li>                                                
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/material-symbols_sports-volleyball-outline.png" class="" title="" alt=""> Volleyball <span class="counter-balloon">123</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/icon-park_rugby-one.png" class="" title="" alt=""> Rugby <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/bx_baseball.png" class="" title="" alt=""> Baseball <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/Icehockey.png" class="" title="" alt=""> Ice Hockey <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/icon-park-outline_badminton.png" class="" title="" alt=""> Badminton <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/MMA.png" class="" title="" alt=""> MMA <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/iconoir_boxing-glove.png" class="" title="" alt=""> Boxing <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/Cueball.png" class="" title="" alt=""> Cue ball <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/mdi_racing-helmet.png" class="" title="" alt=""> Moto Sport <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/game-icons_american-football-helmet.png" class="" title="" alt=""> NFL <span class="counter-balloon">40</span> 
                        </li>                                                
                    </ul>
                </div>

                <div class="col-content-9">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>

                <div class="col-content-2">
                    Test
                </div>

            </div>
        </div>

    </main><!-- #main -->


<?php get_footer(); ?>