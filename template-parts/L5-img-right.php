<?php
// text left, image right!
 ?>

 <?php $textOneL5 = get_sub_field('L5_text_one'); ?>
 <?php $textTwoL5 = get_sub_field('L5_text_two'); ?>
 <?php $textThreeL5 = get_sub_field('L5_text_three'); ?>
 <?php $buttonTextL5 = get_sub_field('L5_read_more_button'); ?>
 <?php $readMoreTxtL5 = get_sub_field('L5_read_more'); ?>
 <?php $sectionIDL5 = get_sub_field('L5_section_anchor'); ?>

<section id="<?php echo $sectionIDL5; ?>" class="layout l-r">
    <div class="main-container">
        <div class="main-grid">

            <section class="grid-x grid-padding-x main-grid right-img-container relative">
                <div class="cell medium-6 flex-container z-up">
                    <div class="grid-x br-top-primary content-holder">
                        <div class="cell medium-6 copy">

                            <?php echo $textOneL5; ?>
                            <?php echo $textTwoL5; ?>
                            <?php echo $textThreeL5; ?>

                            <!-- READ BUTTON -->
                            <p class="read-buttons <?php echo $sectionIDL5; ?>-scroll"><a data-toggle="readMoreL5" class="<?php echo $sectionIDL5; ?>"><?php echo $buttonTextL5; ?></a></p>
                            <!-- READ BUTTON -->

                        </div>
                        <div class="cell medium-6"></div>
                    </div>
                </div>
                    <div class="cell medium-6 not-visual">

                    </div>

                    <!-- L5 IMAGE -->
                    <?php $L5_image = get_sub_field('L5_image');
                        $L5_image_url = $L5_image['url'];
                        $L5_image_alt = $L5_image['alt'];
                    if( !empty($L5_image) ):  ?>


                    <div class="cell medium-6 right-image z-down desktop-only">
                        <img src="<?php echo $L5_image_url; ?>" alt='<?php echo $L5_image_alt; ?>'/>
                    </div>
                    <?php endif; ?>
                    <!-- end L5 IMAGE -->

            </section>

            <!-- READ MORE TEXT -->
            <section class="<?php echo $sectionIDL5; ?>-container read-more-container" id="readMoreL5" data-toggler=".is-shown" data-closable data-animate="fade-in fade-out">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <?php echo $readMoreTxtL5; ?>
                        <a data-close class="<?php echo $sectionIDL5; ?>-read-less">read less</a>
                    </div>
                </div>
            </section>
            <!-- READ MORE TEXT -->

            <!-- L5 IMAGE -->
            <?php $L5_image = get_sub_field('L5_image');
                $L5_image_url = $L5_image['url'];
                $L5_image_alt = $L5_image['alt'];
                if( !empty($L5_image) ):  ?>

            <div class="cell medium-6 left-image z-down mobile-only" style="background-image: url('<?php echo $L5_image_url; ?>'); height: 85vh;" alt='<?php echo $L5_image_alt; ?>'></div>

            <?php endif; ?>
            <!-- end L5 IMAGE -->

        </div>
    </div>
</section>

<script>

// https://howchoo.com/g/yjfjmty1zjb/how-to-animate-scroll-in-jquery
$(function() {
    $(".<?php echo $sectionIDL5; ?>").on('click', function() {

        var position = $(".<?php echo $sectionIDL5; ?>-scroll").offset().top;
        var readMoreContent = $(".<?php echo $sectionIDL5; ?>-container");
        var container = $("#<?php echo $sectionIDL5; ?>").offset().top;

        if( $(readMoreContent).is(":visible")) {
            $("HTML, BODY").animate({
                scrollTop: container },
                1000);
        } else {
            $("HTML, BODY").animate({
                scrollTop: position },
                1000);
        }

        var seeLess = $('#<?php echo $sectionIDL5; ?>-read-less');
        $(this).css('visibility', 'hidden');

    })

    $(".<?php echo $sectionIDL5; ?>-read-less").on('click', function() {

        var container = $("#<?php echo $sectionIDL5; ?>").offset().top;

            $("HTML, BODY").animate({
                scrollTop: container },
                1000);

            var readMoreLink = $(".<?php echo $sectionIDL5; ?>");
            $(readMoreLink).css('visibility', 'visible');
    })
});

</script>
