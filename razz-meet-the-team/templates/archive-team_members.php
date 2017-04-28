<?php
$teamMembers = new WP_Query([
    'posts_per_page' => -1,
    'post_type' => 'team_members',
    'post_status' => 'publish',
    'order' => 'ASC',
]);

?>
<?php include_once(dirname(__FILE__) . '/header.php'); ?>
    <div class="meet-the-team">
        <div class="meet-the-team__top clearfix">
            <div class="meet-the-team__top__left">
                <div class="meet-the-team__image-wrapper">
                    <div class="meet-the-team__image"
                         style="background-image: url(<?= esc_attr(get_field('meet_team-list_page-image', 'option')['url']) ?>)"></div>
                    <div class="meet-the-team__image-shadow"></div>
                </div>
            </div>
            <div class="meet-the-team__top__right">
                <div class="meet-the-team__info">
                    <h3><?= esc_html(get_field('meet_team-list_page-header-text', 'option')) ?></h3>

                    <div class="meet-the-team__hr"></div>

                    <p style="margin-top: 20px;"><?= (get_field('meet_team-list_page-description-text', 'option')) ?></p>
                </div>
            </div>
        </div>

        <div class="meet-the-team__staff-list-wrapper clearfix">
            <div class="meet-the-team__staff-list-left">
                <h3><?= esc_html(get_field('meet_team-list_page-side_text', 'option')) ?></h3>
            </div>
            <div class="meet-the-team__staff-list-right">
                <?php while ($teamMembers->have_posts()): $teamMembers->the_post(); ?><!-- Don't remove this comment
                 --><a class="meet-the-team__staff-list-tile"
                       href="<?= esc_attr(get_post_permalink()) ?>"
                       style="background-image: url(<?= esc_attr(get_field('image')['sizes']['medium']) ?>);"
                    >
                        <div class="meet-the-team__staff-list-tile__content"
                            <?php if (get_field('image_alt')): ?>
                                style="background-image: url(<?= esc_attr(get_field('image_alt')['sizes']['medium']) ?>);"
                            <?php endif; ?>
                        >
                            <div class="meet-the-team__staff-list-tile__content__gradient"></div>
                            <h3><?= esc_html(get_field('first_name')) ?></h3>
                        </div>
                    </a><!-- Don't remove this comment
             --><?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="meet-the-team__vr"></div>
        </div>
    </div>

<?php get_footer(); ?>