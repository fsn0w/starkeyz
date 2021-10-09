<?php
/*
 * Template Name: Mint
 *
 */

get_header();

?>

<div id="content" class="relative site-content flex flex-grow flex-col mint-bg lg:min-h-screen overflow-y-hidden">
    
<!-- header -->
        <div class="w-full relative">
            <div class="absolute w-full h-full mint-bg-mob lg:hidden"><img src="/wp-content/uploads/moon-mob.png" alt="Starkeyz Moon" class="absolute top-2"></div>
            <div class="mx-auto container flex flex-col z-10 relative mt-32 mb-0 lg:mb-0 lg:mt-32 lg:gap-8 lg:max-h-[600px] lg:flex-row">
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

                        <form action="#" method="post" class="flex gap-2 max-w-sm relative mx-auto mb-10 lg:mb-6 lg:block lg:w-96" id="invitecode">
                            <input type="text" name="icode" id="icode" placeholder="Enter Your Invitation Code" class="font-zrnic bg-transparent text-center border-4 border-[#7E7AB1] rounded-xl text-white placeholder-white input-outline flex-grow text-sm lg:w-full lg:p-3 lg:text-base">
                            <input type="submit" id="icode_subm" value="Submit" class="font-zrnic -right-28 bg-gradient-to-t from-[#5B587C] to-[#7E7AB1] py-3 px-4 lg:py-4 lg:px-6 rounded-xl cursor-pointer text-sm btn-fill lg:text-base lg:absolute">
                        </form>

    <a href="#mint" id="mintlink" class="font-zrnic text-sm inline-block bg-gradient-to-tr from-[#FFC46B] via-[#FF82C3] to-[#9650C9] py-4 px-8 rounded-xl opacity-50 cursor-not-allowed pointer-events-none lg:text-base lg:px-16">Mint My Starkey</a>
    <div id="status"></div>
    <div id="getValue"></div>
                    </div>
                </div> 

            </div>
        </div>

<!-- minting --> 
        <div class="flex flex-col items-center relative overflow-hidden bg-[#171423] lg:bg-transparent lg:mb-48" id="minting_section">
            <img src="/wp-content/uploads/mint-moon.png" width="1075" height="1076" alt="Starkeyz Moon" class="absolute z-10 ml-[400px] w-[400px] -bottom-10 lg:bottom-0 lg:w-auto lg:ml-[1650px] lg:top-10">
            <div class="mx-auto px-12 mt-20 mb-6 relative z-10 text-center lg:container lg:mb-14 lg:mt-60">
                    <h2 class="h2-lines uppercase text-[3.2rem] pt-10 pb-3 lg:pt-0 lg:text-[6.25rem] mb-1">Minting</h2>
                    <p class="font-zrnic text-[0.9rem] lg:text-4xl">comming soon...</p>
            </div>
            <div class="relative z-10 px-4 lg:container">
                <div class="flex flex-col items-center justify-center">
                    <h3 class="font-zrnic text-[0.9rem] text-center uppercase h3-em-logo mb-2 lg:mb-0 lg:text-3xl ">Choose the <em>Starkey</em> you would like to mint</h3>
                    <p class="text-center mb-4 w-64 mx-auto lg:w-auto">Minting price tiers are determined by the rarity level of the Starkey</p>
                    <p class="text-center uppercase mb-6">mint limit: X</p>
                    <form action="" method="get" class="flex gap-2 mb-16 lg:gap-6">
                        <div class="flex flex-col justify-between">
                            <span class="uppercase text-center text-xs lg:text-2xl">Rarest</span>
                            <div class="flex flex-col flex-grow items-center justify-between gap-0"><span class="rotate-90 -mb-3 font-zrnic text-lg lg:text-3xl"><</span><div class="flex-grow border-dashed ml-[1px] border-r lg:border-r-2"></div><span class="rotate-90 -mt-3 font-zrnic text-lg lg:text-3xl">></span></div>
                            <span class="uppercase text-center text-xs lg:text-2xl">Common</span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-10" value="0" id="level10" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level10" class="ml-0 lg:ml-4">LEVEL 10 [1 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-9" value="0" id="level9" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level9" class="ml-0 lg:ml-4">LEVEL 9 [0.9 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-8" value="0" id="level8" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level8" class="ml-0 lg:ml-4">LEVEL 8 [0.8 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-7" value="0" id="level7" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level7" class="ml-0 lg:ml-4">LEVEL 7 [0.7 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-6" value="0" id="level6" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level6" class="ml-0 lg:ml-4">LEVEL 6 [0.6 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-5" value="0" id="level5" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level5" class="ml-0 lg:ml-4">LEVEL 5 [0.5 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-4" value="0" id="level4" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level4" class="ml-0 lg:ml-4">LEVEL 4 [0.4 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-3" value="0" id="level3" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level3" class="ml-0 lg:ml-4">LEVEL 3 [0.3 ETH] - 0 left [I was too popular..]</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-2" value="0" id="level2" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level2" class="ml-0 lg:ml-4">LEVEL 2 [0.2 ETH] - Only XX left</label>
                            </div>
                            <div class="flex gap-2 lg:block">
                                <span class="whitespace-nowrap"><button class="minus">&#8211;</button><input type="text" name="level-1" value="0" id="level1" class="input-number"><button class="plus">&#43;</button></span>
                                <label for="level1" class="ml-0 lg:ml-4">LEVEL 1 [FREE!] - Only XX left</label>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="#mint" id="mintaction" class="font-zrnic inline-block bg-gradient-to-tr from-[#7E7AB1] to-[#5B587C] py-4 px-8 rounded-xl opacity-50 cursor-not-allowed pointer-events-none text-sm lg:text-base lg:px-16">Mint My Starkeyz</a>
                    </div>
                </div>
                <img src="/wp-content/uploads/rocket.svg" alt="Starkeyz Rocket" class="w-36 mb-5 mt-16 lg:absolute lg:m-0 lg:w-auto lg:top-1/3 lg:-left-16 lg:inline-block"> 
            </div>
        </div>
</div>

<script>

function callback(data) {
  jQuery("#mint_script").html(data);
}

jQuery(document).ready(function($) {

$('#invitecode').submit(function (evt) {
    evt.preventDefault();
    var code = $("#icode").val();
    $("#icode").val('VERIFYING');
        $.ajax({
            url: '/wp-admin/admin-ajax.php?code='+code,
            data: {
            action: "check_invite_code_ajax", 
                },
            success: function(data) {
                if (data!=='error') {
                    callback(data);
                    $("#icode").val('WELCOME! YOU CAN NOW MINT');
                    $('#invitecode').addClass("opacity-50 pointer-events-none");
                    $('#mintlink').removeClass("opacity-50 cursor-not-allowed pointer-events-none");
                    $('#mintaction').removeClass("opacity-50 cursor-not-allowed pointer-events-none");
                    //$('#mintlink').attr("href", data);
                    //$('#mintaction').attr("href", data);
                    $('#minting_section').removeClass('hidden').addClass("flex");
                }
                else {
                    $("#icode").val('');
                    $("#icode").attr("placeholder", "CODE WASN'T RECOGNIZED");
                }
            },
            error: function(data) {
                console.log(data);
            }
    });
});

});

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