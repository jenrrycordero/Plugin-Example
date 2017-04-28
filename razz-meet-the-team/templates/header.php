<?php
$primaryColor = get_field('meet_team-primary_color', 'option');
?>

<?php get_header(); ?>

<style>
    .meet-the-team {
        color: <?= get_field('meet_team-text-color', 'option') ?>;
    }

    .meet-the-team__header h1 {
        color: <?= get_field('meet_team-header-text-color', 'option') ?>;
    }

    .meet-the-team,
    .meet-the-team .meet-the-team__staff-list-left h3,
    .meet-the-team .meet-the-team__show-more {
        background: <?= get_field('meet_team-background-color', 'option') ?>;
    }

    .meet-the-team__header,
    .meet-the-team .meet-the-team__hr,
    .meet-the-team .meet-the-team__vr,
    .meet-the-team .meet-the-team__image-shadow {
        background: <?= $primaryColor ?>;
    }

    .meet-the-team a {
        color: <?= $primaryColor ?>;
    }

    <?php if(!get_field('meet_team-show_shadow', 'option')): ?>
    .meet-the-team .meet-the-team__image-shadow {
        background: transparent;
    }
    <?php endif ?>

    <?php if(!get_field('meet_team-show_hr', 'option')): ?>
    .meet-the-team .meet-the-team__hr {
        background: transparent;
    }
    <?php endif ?>

    <?= (get_field('meet_team-custom_css', 'option')) ?>
</style>

<div class="meet-the-team__header">
    <h1><?= esc_html(get_field('meet_team-header-text', 'option')) ?></h1>
</div>