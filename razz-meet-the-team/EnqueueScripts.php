<?php namespace RazzMeetTheTeam;

class EnqueueScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('meet-the-team', plugin_dir_url(__FILE__) . '/assets/css/meet-the-team.css');
        wp_enqueue_script('meet-the-team', plugin_dir_url(__FILE__) . '/assets/js/meet-the-team.js', ['jquery'], '1.0.0', true);
    }
}