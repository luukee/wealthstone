<?php
// image left text right!
 ?>

 <?php $textOneL2 = get_sub_field('L2_text_one'); ?>
 <?php $textTwoL2 = get_sub_field('L2_text_two'); ?>
 <?php $textThreeL2 = get_sub_field('L2_text_three'); ?>
 <?php $buttonTextL2 = get_sub_field('L2_read_more_button'); ?>
 <?php $readMoreTxtL2 = get_sub_field('L2_read_more'); ?>
 <?php $sectionIDL2 = get_sub_field('L2_section_anchor'); ?>


<section id="<?php echo $sectionIDL2; ?>" class="layout l-r">
    <div class="main-container">
        <div class="block-container">
            <div class="main-grid">
                <section class="grid-x grid-padding-x main-grid left-img-container relative">

                    <!-- L2 IMAGE -->
                    <?php $L2_image = get_sub_field('L2_image');
                        $L2_image_url = $L2_image['url'];
                        $L2_image_alt = $L2_image['alt'];
                        if( !empty($L2_image) ):  ?>

                    <div class="cell medium-6 left-image z-down desktop-only">
                        <img src="<?php echo $L2_image_url; ?>" alt='<?php echo $L2_image_alt; ?>'/>
                    </div>

                    <?php endif; ?>
                    <!-- end L2 IMAGE -->

                    <div class="cell medium-6 flex-container z-up">
                        <div class="grid-x br-top-primary content-holder">
                            <div class="cell medium-6"></div>
                            <div class="cell medium-6 copy z-up">

                                <?php echo $textOneL2; ?>
                                <?php echo $textTwoL2; ?>
                                <?php echo $textThreeL2; ?>

                                <!-- READ BUTTON -->
                                <p class="read-buttons <?php echo $sectionIDL2; ?>-scroll"><a data-toggle="readMoreL2" class="<?php echo $sectionIDL2; ?>"><?php echo $buttonTextL2; ?></a></p>
                                <!-- READ BUTTON -->

                            </div>

                        </div>
                    </div>

                </section>

                <!-- READ MORE TEXT -->
                <section class="<?php echo $sectionIDL2; ?>-container read-more-container" id="readMoreL2" data-toggler=".is-shown" data-closable data-animate="fade-in fade-out">
                      <div class="grid-x grid-padding-x">
                          <div class="cell">
                              <?php echo $readMoreTxtL2; ?>
                              <a data-close class="<?php echo $sectionIDL2; ?>-read-less">read less</a>
                          </div>
                      </div>
                </section>
                <!-- READ MORE TEXT -->

                <!-- L2 IMAGE -->
                <?php $L2_image = get_sub_field('L2_image');
                    $L2_image_url = $L2_image['url'];
                    $L2_image_alt = $L2_image['alt'];
                    if( !empty($L2_image) ):  ?>

                <div class="cell medium-6 left-image z-down mobile-only" style="background-image: url('<?php echo $L2_image_url; ?>'); height: 85vh;" alt='<?php echo $L2_image_alt; ?>'></div>

                <?php endif; ?>
                <!-- end L2 IMAGE -->

            </div>
        </div>
    </div>
</section>

<script>

// https://howchoo.com/g/yjfjmty1zjb/how-to-animate-scroll-in-jquery
$(function() {
    $(".<?php echo $sectionIDL2; ?>").on('click', function() {

        var position = $(".<?php echo $sectionIDL2; ?>-scroll").offset().top;
        var readMoreContent = $(".<?php echo $sectionIDL2; ?>-container");
        var container = $("#<?php echo $sectionIDL2; ?>").offset().top;

        if( $(readMoreContent).is(":visible")) {
            $("HTML, BODY").animate({
                scrollTop: container },
                1000);
        } else {
            $("HTML, BODY").animate({
                scrollTop: position },
                1000);
        }

        var seeLess = $('#<?php echo $sectionIDL2; ?>-read-less');
        $(this).css('visibility', 'hidden');

    })

    $(".<?php echo $sectionIDL2; ?>-read-less").on('click', function() {

        var container = $("#<?php echo $sectionIDL2; ?>").offset().top;

            $("HTML, BODY").animate({
                scrollTop: container },
                1000);

        var readMoreLink = $(".<?php echo $sectionIDL2; ?>");
        $(readMoreLink).css('visibility', 'visible');

    })
});

</script>
