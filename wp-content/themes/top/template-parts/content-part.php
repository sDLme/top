


<li class=" col-md-4">
            <div class="inner-wrap">
                <div class="img-wrapp">
                    <?php
                    the_post_thumbnail()
                    ?>
                </div>
                <div class="data text-dark">
                    <span><?php the_time(' F j, Y'); ?></span>
                    <span><?php comments_number( 'no comments', 'one comments', '% comments' ); ?>.</span>
                </div>
                <h3 class="artic-title text-dark text-medium">
                        <?php the_title(); ?>
                </h3>
            </div>
</li>