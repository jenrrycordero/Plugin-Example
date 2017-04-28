<?php namespace RazzMeetTheTeam;

/**
 * @wordpress-plugin
 * Plugin Name:       Razz: Meet The Team
 * Plugin URI:        http://razzinteractive.com
 * Description:       Adds pages for meet the team.
 * Version:           1.0.0
 * Author:            Jenrry Cordero - Razz Interactive
 * Author URI:        http://razzinteractive.com
 * License:           proprietary
 */

require_once(dirname(__FILE__) . '/acf-assets/options-page.php');
require_once(dirname(__FILE__) . '/custom-post-types/TeamMembers.php');
require_once(dirname(__FILE__) . '/EnqueueScripts.php');

//Setup Options Page
new OptionsPage();

//Initialize custom post type and related pages
new TeamMembers();

//Enqueue Styles/Scripts
new EnqueueScripts();