<?php
function general_admin_notice(){
    global $pagenow;
    echo '<div class="notice notice-warning is-dismissible">
        <p>This notice appears everywhere.</p>
    </div>';

      if ( $pagenow == 'options-general.php' ) {
         echo '<div class="notice notice-warning is-dismissible">
             <p>This notice appears on the settings page.</p>
         </div>';
    }
}
add_action('admin_notices', 'general_admin_notice');
?>
