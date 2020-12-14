<div class="phonesList" @mouseover="isSalonsListActive = true" @mouseleave="isSalonsListActive = false">
    <div class="phonesList__icon">
        <svg width="24" height="24" fill="none">
            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 12l-4-4h8l-4 4z" fill="#000"/>
        </svg>
    </div>
    <div class="phonesList__placeholder">
        <a href="tel:+380979715151">
            <address class="phonesList__address">ул. Богдана Хмельницкого 19/21</address>
            <div class="phonesList__phone">+380 (97) 971 51 51</div>
        </a>
    </div>
    <div class="phonesList__dropdown">
        <div class="phonesList__dropdownInner" :class="{ active: isSalonsListActive }">
            <?php
            $cat_args = array(
                'taxonomy'      => 'city',
                'child_of'      => 0,
                'hide_empty'    => 1
            );

            foreach( get_categories( $cat_args ) as $tax ){ ?>
                <div class="phonesList__dropdownGroup">
                    <div class="phonesList__dropdownLabel"><?=$tax->name; ?></div>
                    <?php
                    $posts_args = array(
                        'post_type'         => 'salon',
                        'post_status'       => 'publish',
                        'posts_per_page'    => -1,
                        'tax_query'         => array(
                            array(
                                'taxonomy'  => 'city',
                                'field'     => 'slug',
                                'terms'     => $tax->slug
                            )
                        )
                    );

                    foreach( get_posts( $posts_args ) as $salon ){ ?>
                        <div class="phonesList__dropdownItem">
                            <div class="phonesList__dropdownItemAddress"><?=$salon->post_title; ?></div>
                            <a href="tel:<?=str_replace( array( '(', ')', ' ' ), '', carbon_get_post_meta( $salon->ID, 'phone' ) ); ?>" class="phonesList__dropdownItemPhone"><?=carbon_get_post_meta( $salon->ID, 'phone' ); ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>