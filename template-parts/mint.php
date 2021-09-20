<?php
/*
 * Template Name: Mint
 *
 */

get_header();

?>

<div id="content" class="relative site-content flex flex-grow flex-col mint-bg justify-center lg:min-h-screen overflow-y-hidden">
    <div class="absolute w-full h-full mint-bg-mob lg:hidden"><img src="/wp-content/uploads/moon-mob.png" alt="Starkeyz Moon" class="absolute top-2"></div>
<!-- header -->
            <div class="mx-auto container flex flex-col z-10 relative mt-20 mb-16 lg:mb-0 lg:mt-32 lg:gap-8 lg:max-h-[600px] lg:flex-row">
                <div class="lg:block">
                    <h2 class="h2-em-logo uppercase text-[3.2rem] mb-4 text-center relative z-10 lg:mb-0 lg:text-right lg:w-[573px] lg:text-[5rem] lg:leading-[5.5rem]"><em class="big-logo">Starkey</em> Pre-sale</h2>
                    <p class="text-center uppercase text-sm relative z-10 lg:text-right lg:text-2xl">by invitation only!</p>
                    <img src="/wp-content/uploads/mint-moon-key.png" alt="StarKeyz" width="1334" height="1146" class="absolute left-[-650px] -top-10 z-0">
                </div>

                <div class="w-full flex flex-col pt-12 text-center justify-center lg:pt-28">
                    <div> 
                        <h2 class="uppercase text-4xl mb-2 lg:text-[5rem] lg:mb-6">50% off</h2>
                        <p class="uppercase text-sm mb-4 lg:mb-12 lg:text-2xl">Of launch price for</br> Rarity-level #10 Starkeyz:</p>

                        <span class="uppercase font-zrnic text-base text-[#726780] relative pl-8 pr-5 inline-block lg:text-2xl"><em class="absolute w-full h-1 bg-[#726780] rotate-[-25deg] top-5 lg:top-10 left-0"></em><strong class="font-normal text-5xl lg:text-[5rem]">1.0</strong>eth</span> <span class="uppercase font-zrnic text-base lg:text-2xl inline-block"><strong class="font-normal text-5xl lg:text-[5rem]">0.5</strong>eth</span>

                        <p class="mt-3 mb-12 text-[0.7rem] lg:my-6 lg:text-base">limited to 5 starkeyz per invitation code</p>
                        <form action="/safe/" method="get" class="flex gap-2 max-w-sm relative mx-auto mb-10 lg:mb-6 lg:block lg:w-96">
                            <input type="text" name="key" placeholder="Enter Your Invitation Code" class="font-zrnic bg-transparent text-center border-4 border-[#7E7AB1] rounded-xl text-white placeholder-white input-outline flex-grow text-sm lg:w-full lg:p-3 lg:text-base">
                            <input type="submit" value="Submit" class="font-zrnic -right-28 bg-gradient-to-t from-[#5B587C] to-[#7E7AB1] py-3 px-4 lg:py-4 lg:px-6 rounded-xl cursor-pointer text-sm btn-fill lg:text-base lg:absolute">
                        </form>

    <a href="#" class="font-zrnic inline-block bg-gradient-to-tr from-[#FFC46B] via-[#FF82C3] to-[#9650C9] py-4 px-16 rounded-xl opacity-50 cursor-not-allowed">Mint My Starkey</a>

                    </div>
                </div> 

            </div>

<!-- minting --> 
        <div class="hidden flex-col items-center relative overflow-hidden lg:flex mb-48">
            <img src="/wp-content/uploads/mint-moon.png" width="1075" height="1076" alt="Starkeyz Moon" class="absolute ml-[1650px] top-10">
            <div class="mx-auto container mt-60 mb-14 relative z-10 text-center">
                    <h2 class="h2-lines uppercase text-[6.25rem] mb-1">Minting</h2>
                    <p class="font-zrnic text-4xl">comming soon...</p>
            </div>
            <div class="flex items-center mx-auto relative z-10">
                <img src="/wp-content/uploads/rocket.svg" alt="Starkeyz Rocket" class="absolute -left-96">
                <div>
                    <h3 class="font-zrnic text-center uppercase h3-em-logo">Choose the <em>Starkey</em> you would like to mint</h3>
                    <p class="text-center mb-4">Minting price tiers are determined by the rarity level of the Starkey</p>
                    <p class="text-center uppercase mb-6">mint limit: X</p>
                    <form action="" method="get" class="flex gap-6 mb-16">
                        <div class="flex flex-col justify-between">
                            <span class="uppercase text-2xl text-center">Rarest</span>
                            <div class="flex flex-col flex-grow items-center justify-between gap-0"><span class="rotate-90 -mb-3 font-zrnic text-3xl"><</span><div class="flex-grow border-dashed border-r-2 ml-[1px]"></div><span class="rotate-90 -mt-3 font-zrnic text-3xl">></span></div>
                            <span class="uppercase text-2xl text-center">Common</span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-10" value="0" id="level10" class="input-number"><button class="plus">&#43;</button>
                                <label for="level10" class="ml-4">LEVEL 10 [1 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-9" value="0" id="level9" class="input-number"><button class="plus">&#43;</button>
                                <label for="level9" class="ml-4">LEVEL 9 [0.9 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-8" value="0" id="level8" class="input-number"><button class="plus">&#43;</button>
                                <label for="level8" class="ml-4">LEVEL 8 [0.8 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-7" value="0" id="level7" class="input-number"><button class="plus">&#43;</button>
                                <label for="level7" class="ml-4">LEVEL 7 [0.7 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-6" value="0" id="level6" class="input-number"><button class="plus">&#43;</button>
                                <label for="level6" class="ml-4">LEVEL 6 [0.6 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-5" value="0" id="level5" class="input-number"><button class="plus">&#43;</button>
                                <label for="level5" class="ml-4">LEVEL 5 [0.5 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-4" value="0" id="level4" class="input-number"><button class="plus">&#43;</button>
                                <label for="level4" class="ml-4">LEVEL 4 [0.4 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-3" value="0" id="level3" class="input-number"><button class="plus">&#43;</button>
                                <label for="level3" class="ml-4">LEVEL 3 [0.3 ETH] - 0 left [I was too popular..]</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-2" value="0" id="level2" class="input-number"><button class="plus">&#43;</button>
                                <label for="level2" class="ml-4">LEVEL 2 [0.2 ETH] - Only XX left</label>
                            </div>
                            <div>
                                <button class="minus">&#8211;</button><input type="text" name="level-1" value="0" id="level1" class="input-number"><button class="plus">&#43;</button>
                                <label for="level1" class="ml-4">LEVEL 1 [FREE!] - Only XX left</label>
                            </div>
                        </div>
                    </form>
                    <div class="text-center"><a href="#" class="font-zrnic inline-block bg-gradient-to-tr from-[#7E7AB1] to-[#5B587C] py-4 px-16 rounded-xl cursor-not-allowed">Mint My Starkeyz</a></div>
                </div>
            </div>
        </div>
</div>

<script>
    	jQuery(document).ready(function($) {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 0 ? 0 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
</script>

<?php

get_footer();