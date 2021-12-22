<?php defined("ABSPATH") or die;

add_theme_support("custom-logo");

add_action("init", function(){
  remove_action("modularity_template_header", "config_base_template_header");
});

function feature_responsive_header_register_menus(){
  register_nav_menus(array(
    "header_menu" => "Header Menu",
    "header_menu_secondary" => "Header Menu Secondary"
  ));
}
add_action('after_setup_theme', 'feature_responsive_header_register_menus');

function feature_responsive_header_register_sidebars() {
  register_sidebar(array(
    'name' => 'Header Widgets',
    'id' => 'header_widgets',
    'description' => '',
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<!-- ',
    'after_title'   => ' -->',
  ));
}
add_action('widgets_init', 'feature_responsive_header_register_sidebars');

function feature_responsive_header_template() {
  include_once "feature-responsive-header.template.php";
}
add_action("modularity_template_header", "feature_responsive_header_template");

function feature_responsive_header_menu() {
  if (has_nav_menu('header_menu')) {
    wp_nav_menu(array(
      'theme_location' => 'header_menu',
      'container' => 'nav',
      'container_class' => 'feature-responsive-header__menu',
      'container_id' => ''
    ));
  }
}
add_action("feature_responsive_header_end", "feature_responsive_header_menu", 20);

function feature_responsive_header_menu_trigger() {
  if (has_nav_menu('header_menu')) {
    ?>
      <div class="feature-responsive-header__menu-trigger">
        <a href="#menu" title="Menu"><span></span><span></span><span></span></a>
      </div>
    <?php
  }
}
add_action("feature_responsive_header_end", "feature_responsive_header_menu_trigger", 30);

function feature_responsive_header_widgets() {
  if (is_active_sidebar('header_widgets')) {
    ?>
      <div class="feature-responsive-header__widgets">
        <?php dynamic_sidebar('header_widgets'); ?>
      </div>
    <?php
  }
}
add_action("feature_responsive_header_end", "feature_responsive_header_widgets", 40);
