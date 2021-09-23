<?php
/*
 * Template Name: Safe Error
 *
 */

get_header();

?>

<div id="content" class="pt-16 relative site-content flex flex-col safe-bg justify-center flex-grow lg:min-h-screen">

            <div class="mx-auto container flex flex-col items-stretch z-10 relative lg:max-h-[600px] lg:flex-row">

                <div class="text-center w-full flex flex-col justify-center lg:text-left lg:pt-0 lg:w-1/2">
                            <h1 class="max-w-[230px] mx-auto mt-3 mb-12 uppercase text-5xl lg:mt-0 lg:mx-0 lg:max-w-max lg:text-9xl">Nice Try!</h1>
                            <div class="mx-auto max-w-[240px] lg:hidden"><img src="/wp-content/uploads/safe-error.png" alt="Safe Error" width="644" height="591"></div>
                            <span class="my-10 text-lg leading-5 lg:text-4xl lg:leading-7">But as you can see,<br/>
We’re playing it SAFE...</span>

                </div>

                <div class="hidden w-1/2 lg:block"><img src="/wp-content/uploads/safe-error.png" alt="Safe Error" width="644" height="591" ></div>

            </div>
</div>


<?php

get_footer();