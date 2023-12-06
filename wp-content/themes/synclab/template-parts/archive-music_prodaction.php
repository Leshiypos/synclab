                    <a href="<?php the_permalink(); ?>" class="adv__block">
                        <div class="adv__hover-block">
                            <img src="<?php echo the_post_thumbnail_url('other-thumb'); ?>" alt="photo">
                            <svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>
                                </svg>
                                
                        </div>
                        <h3 class="adv__subtitle"><?php the_title(); ?></h3>
                        <span class="adv__year"><?php the_field('yer'); ?></span>
                    </a>