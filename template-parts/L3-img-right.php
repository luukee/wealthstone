<?php
// text left, image right!
 ?>

 <?php $textOneL3 = get_sub_field('L3_text_one'); ?>
 <?php $textTwoL3 = get_sub_field('L3_text_two'); ?>
 <?php $textThreeL3 = get_sub_field('L3_text_three'); ?>
 <?php $buttonTextL3 = get_sub_field('L3_read_more_button'); ?>
 <?php $readMoreTxtL3 = get_sub_field('L3_read_more'); ?>
 <?php $sectionIDL3 = get_sub_field('L3_section_anchor'); ?>

<section id="<?php echo $sectionIDL3; ?>" class="layout l-r">
    <div class="main-container">
        <div class="main-grid">

            <section class="grid-x grid-padding-x main-grid right-img-container relative">
                <div class="cell medium-6 flex-container z-up">
                    <div class="grid-x br-top-primary content-holder">
                        <div class="cell medium-6 copy">

                            <?php echo $textOneL3; ?>
                            <?php echo $textTwoL3; ?>
                            <?php echo $textThreeL3; ?>

                            <!-- READ BUTTON -->
                            <p class="read-buttons <?php echo $sectionIDL3; ?>-scroll"><a data-toggle="readMoreL3" class="<?php echo $sectionIDL3; ?>"><?php echo $buttonTextL3; ?></a></p>
                            <!-- READ BUTTON -->

                        </div>
                        <div class="cell medium-6"></div>
                    </div>
                </div>
                <div class="cell medium-6 not-visual"></div>

                <!-- L3 IMAGE -->
                <?php $L3_image = get_sub_field('L3_image');
                    $L3_image_url = $L3_image['url'];
                    $L3_image_alt = $L3_image['alt'];
                if( !empty($L3_image) ):  ?>

                <!-- <div class="cell medium-6 right-image z-down desktop-only" style="background-image: url('<?php //echo $L3_image_url; ?>')" alt='<?php //echo $L3_image_alt; ?>'></div> -->
                <div class="cell medium-6 right-image z-down desktop-only">
                    <img class="" src="<?php echo $L3_image_url; ?>" alt='<?php echo $L3_image_alt; ?>'/>
                </div>
                <?php endif; ?>
                <!-- end L3 IMAGE -->

            </section>

            <!-- READ MORE TEXT -->
            <section class="<?php echo $sectionIDL3; ?>-container read-more-container" id="readMoreL3" data-toggler=".is-shown" data-closable data-animate="fade-in fade-out">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                      <?php echo $readMoreTxtL3; ?>
                      <a data-close class="<?php echo $sectionIDL3; ?>-read-less">read less</a>
                  </div>
                </div>
            </section>
            <!-- READ MORE TEXT -->

            <!-- L3 IMAGE -->
            <?php $L3_image = get_sub_field('L3_image');
                $L3_image_url = $L3_image['url'];
                $L3_image_alt = $L3_image['alt'];
                if( !empty($L3_image) ):  ?>

            <div class="cell medium-6 left-image z-down mobile-only" style="background-image: url('<?php echo $L3_image_url; ?>'); height: 85vh;" alt='<?php echo $L3_image_alt; ?>'></div>

            <?php endif; ?>
            <!-- end L3 IMAGE -->

        </div>
    </div>
</section>


<script>

// https://howchoo.com/g/yjfjmty1zjb/how-to-animate-scroll-in-jquery
$(function() {
    $(".<?php echo $sectionIDL3; ?>").on('click', function() {

        var position = $(".<?php echo $sectionIDL3; ?>-scroll").offset().top;
        var readMoreContent = $(".<?php echo $sectionIDL3; ?>-container");
        var container = $("#<?php echo $sectionIDL3; ?>").offset().top;

        if( $(readMoreContent).is(":visible")) {
            $("HTML, BODY").animate({
                scrollTop: container },
                1000);
        } else {
            $("HTML, BODY").animate({
                scrollTop: position },
                1000);
        }

        var seeLess = $('#<?php echo $sectionIDL3; ?>-read-less');
        $(this).css('visibility', 'hidden');

    })

    $(".<?php echo $sectionIDL3; ?>-read-less").on('click', function() {

        var container = $("#<?php echo $sectionIDL3; ?>").offset().top;

            $("HTML, BODY").animate({
                scrollTop: container },
                1000);

            var readMoreLink = $(".<?php echo $sectionIDL3; ?>");
            $(readMoreLink).css('visibility', 'visible');
    })
});

</script>
