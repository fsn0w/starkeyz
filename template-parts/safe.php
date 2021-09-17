<?php
/*
 * Template Name: Safe
 *
 */

get_header();

$err = 0;
$key = 0; 

if (isset($_GET['key'])) {
    $err = '';
    $key_get = $_GET['key'];
    if (strlen($key_get)==18) {
        $key_id = $wpdb->get_var( "SELECT key_id FROM `wp_starkeyz` WHERE key_number = '$key_get'" );

        if ($key_id>=1 && $key_id<=10000) {
            $key = $key_get;
        }
        else {
            $err = 'Invalid KEY';
        }

    }
    else {
        $err = 'Invalid KEY';
    }
}

?>

<div id="content" class="relative site-content flex flex-col flex-grow safe-bg justify-center lg:min-h-screen">

            <div class="mx-auto container flex flex-col flex-grow items-stretch z-10 relative lg:max-h-[600px] lg:flex-row">
                
                <div class="hidden w-2/6 lg:block"><img src="/wp-content/uploads/safe-box.png" alt="Safe" width="475" height="607" class="absolute left-[-200px]"></div>

                <div class="w-full flex flex-col justify-between pb-8 pt-6 lg:pt-16 lg:w-4/6">
                    <div class="text-center mb-6 lg:mb-0 lg:text-left">
                            <div class="inline-block mx-auto mb-4 lg:mb-0 lg:mx-0"><?php the_custom_logo(); ?></div>
                            <div class="w-2/3 mx-auto max-w-[240px] lg:hidden"><img src="/wp-content/uploads/safe-box.png" alt="Safe" width="475" height="607"></div>
<?php 

    if ($key!==0 && isset($key_id)) { 
        $a = 'Welcome to safe #'.$key_id;
        $b = 'This safe can only be opened by the <strong>'.$key.'</strong><br/>Starkey holder (once we go live)';
    } elseif ($err!==0) { 
        $a = 'Error !';
        $b = $err;
    } else { 
        $a = 'Where is the key?';
        $b = '';
    } 
 
 ?>
                            <h1 class="max-w-[230px] mx-auto mt-10 mb-4 lg:mx-0 lg:max-w-max lg:text-7xl"><?=$a?></h1>
                            <span class="text-[11px] lg:text-[22px] lg:leading-6"><?=$b?></span>

                    </div>
                    <div>
                        <div class="w-full text-center lg:float-right lg:w-96">
                            <div class="wp-block-button font-zrnic star-btn btn-outline is-style-outline mb-4">
                                <a class="wp-block-button__link max-w-max lg:max-w-full lg:w-full lg:block" href="https://discord.gg/dk2DycFC" style="border-radius:12px" target="_blank" rel="noreferrer noopener">Join Our Discord Channel</a>
                            </div>
                            <span class="font-zrnic text-[11px] lg:text-sm">for more information, discussions and notifications</span>
                        </div>
                    </div>
                </div> 

            </div>

</div>

<?php

get_footer();
