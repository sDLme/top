


<li class="list-item col-md-4">
    <div class="inner-wrap">
            <div class="text-wrap">
                <div>
                    <?php
                    the_post_thumbnail()
                    ?>
                </div>
                <div class="data">
                    <span><?php the_time(' F j, Y'); ?></span>
                    <span><?php comments_number( 'no comments', 'one comments', '% comments' ); ?>.</span>
                </div>
                <h3 class="news-title">
                    <a class="list-title"
                       href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
            </div>
    </div>
</li>