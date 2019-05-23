<?php
// text left, image right!
 ?>

 <?php $textOneL4 = get_sub_field('L4_text_one'); ?>
 <?php $textTwoL4 = get_sub_field('L4_text_two'); ?>
 <?php $textThreeL4 = get_sub_field('L4_text_three'); ?>
 <?php $buttonTextL4 = get_sub_field('L4_read_more_button'); ?>
 <?php $readMoreTxtL4 = get_sub_field('L4_read_more'); ?>
 <?php $sectionIDL4 = get_sub_field('L4_section_anchor'); ?>

<section id="<?php echo $sectionIDL4; ?>" class="layout l-r">
    <div class="main-container">
        <div class="main-grid">

            <section class="grid-x grid-padding-x main-grid left-img-container relative">

                    <!-- L4 IMAGE -->
                    <?php $L4_image = get_sub_field('L4_image');
                        $L4_image_url = $L4_image['url'];
                        $L4_image_alt = $L4_image['alt'];
                    if( !empty($L4_image) ):  ?>

                    <!-- <div class="cell medium-6 left-image z-down desktop-only" style="background-image: url('<?php // echo $L4_image_url; ?>')" alt='<?php //echo $L4_image_alt; ?>'></div> -->
                    <div class="cell medium-6 left-image z-down desktop-only">
                        <img src="<?php echo $L4_image_url; ?>" alt='<?php echo $L4_image_alt; ?>'/>
                    </div>
                    <?php endif; ?>
                    <!-- end L4 IMAGE -->

                    <div class="cell medium-6 flex-container z-up">
                        <div class="grid-x br-top-primary content-holder">
                            <div class="cell medium-6"></div>
                            <div class="cell medium-6 copy">

                                <?php echo $textOneL4; ?>
                                <?php echo $textTwoL4; ?>
                                <?php echo $textThreeL4; ?>

                                <!-- READ BUTTON -->
                                <p class="read-buttons <?php echo $sectionIDL4; ?>-scroll"><a data-toggle="readMoreL4" class="<?php echo $sectionIDL4; ?>"><?php echo $buttonTextL4; ?></a></p>
                                <!-- READ BUTTON -->

                            </div>
                        </div>
                    </div>

            </section>

            <!-- READ MORE TEXT -->
            <section class="<?php echo $sectionIDL4; ?>-container read-more-container" id="readMoreL4" data-toggler=".is-shown" data-closable data-animate="fade-in fade-out">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <?php echo $readMoreTxtL4; ?>
                        <a data-close class="<?php echo $sectionIDL4; ?>-read-less">read less</a>
                    </div>
                </div>
            </section>
            <!-- READ MORE TEXT -->

            <!-- L4 IMAGE -->
            <?php $L4_image = get_sub_field('L4_image');
                $L4_image_url = $L4_image['url'];
                $L4_image_alt = $L4_image['alt'];
                if( !empty($L4_image) ):  ?>

            <div class="cell medium-6 left-image z-down mobile-only" style="background-image: url('<?php echo $L4_image_url; ?>'); height: 85vh;" alt='<?php echo $L4_image_alt; ?>'></div>

            <?php endif; ?>
            <!-- end L4 IMAGE -->

        </div>
    </div>
</section>

<script>

    // https://howchoo.com/g/yjfjmty1zjb/how-to-animate-scroll-in-jquery
    $(function() {
        $(".<?php echo $sectionIDL4; ?>").on('click', function() {

            var position = $(".<?php echo $sectionIDL4; ?>-scroll").offset().top;
            var readMoreContent = $(".<?php echo $sectionIDL4; ?>-container");
            var container = $("#<?php echo $sectionIDL4; ?>").offset().top;

            if( $(readMoreContent).is(":visible")) {
                $("HTML, BODY").animate({
                    scrollTop: container },
                    1000);
            } else {
                $("HTML, BODY").animate({
                    scrollTop: position },
                    1000);
            }

            var seeLess = $('#<?php echo $sectionIDL4; ?>-read-less');
            $(this).css('visibility', 'hidden');

        })

        $(".<?php echo $sectionIDL4; ?>-read-less").on('click', function() {

            var container = $("#<?php echo $sectionIDL4; ?>").offset().top;

                $("HTML, BODY").animate({
                    scrollTop: container },
                    1000);

                var readMoreLink = $(".<?php echo $sectionIDL4; ?>");
                $(readMoreLink).css('visibility', 'visible');
        })
    });

</script>
