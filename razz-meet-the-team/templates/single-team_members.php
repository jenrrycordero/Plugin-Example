<?php include_once(dirname(__FILE__) . '/header.php'); ?>

    <div class="meet-the-team">
        <div class="meet-the-team__go-back">
            <a href="/meet-the-team">&lt; BACK TO THE TEAM</a>
        </div>

        <div class="meet-the-team__top meet-the-team__top--less">
            <div class="meet-the-team__top__left">
                <div class="meet-the-team__image-wrapper">
                    <div class="meet-the-team__image"
                         style="background-image: url(<?= esc_attr(get_field('image')['url']) ?>)"></div>
                    <div class="meet-the-team__image-shadow"></div>
                </div>
            </div>
            <div class="meet-the-team__top__right">
                <div class="meet-the-team__top__right__content">
                    <div class="meet-the-team__info">
                        <h3><?= esc_html(get_field('first_name')) ?> <?= esc_html(get_field('last_name')) ?></h3>

                        <?php if (get_field('position')): ?>
                            <p class="meet-the-team__position"><?= esc_html(get_field('position')) ?></p>
                        <?php endif; ?>

                        <div class="meet-the-team__hr"></div>

                        <?php if (get_field('phone')): ?>
                            <div>P. <?= esc_html(get_field('phone')) ?></div>
                        <?php endif; ?>

                        <?php if (get_field('email')): ?>
                            <div class="meet-the-team__email">
                                E. <a href="mailto:<?= esc_attr(get_field('email')) ?>">
                                    <?= esc_html(get_field('email')) ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="meet-the-team__social-icons">
                            <?php if (get_field('social_facebook')): ?>
                                <a href="<?= esc_attr(get_field('social_facebook')) ?>" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            <?php endif; ?>


                            <?php if (get_field('social_linkedin')): ?>
                                <a href="<?= esc_attr(get_field('social_linkedin')) ?>" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            <?php endif; ?>


                            <?php if (get_field('social_twitter')): ?>
                                <a href="<?= esc_attr(get_field('social_twitter')) ?>" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            <?php endif; ?>


                            <?php if (get_field('social_instagram')): ?>
                                <a href="<?= esc_attr(get_field('social_instagram')) ?>" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="meet-the-team__bio">
                        <?= (get_field('bio')) ?>
                    </div>
                </div>

                <a href="#" class="meet-the-team__show-more hidden">READ MORE &gt;</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="meet-the-team__bottom">
            <?php
            $facts = get_field('facts');

            if ($facts):

                $factCount = count($facts);

                $factHalf = ceil($factCount / 2);

                $factsLeft = array_slice($facts, 0, $factHalf);
                $factsRight = array_slice($facts, $factHalf);

                ?>
                <h3 class="meet-the-team__facts_title">Interesting Facts</h3>
                <div class="meet-the-team__facts clearfix">
                    <div class="meet-the-team__facts__left">
                        <?php foreach ($factsLeft as $fact): ?>
                            <div class="meet-the-team__fact">
                                <h3><?= esc_html($fact['question']) ?></h3>
                                <div><?= ($fact['answer']) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="meet-the-team__facts__right">
                        <?php foreach ($factsRight as $fact): ?>
                            <div class="meet-the-team__fact">
                                <h3><?= esc_html($fact['question']) ?></h3>
                                <div><?= ($fact['answer']) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="meet-the-team__vr"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>