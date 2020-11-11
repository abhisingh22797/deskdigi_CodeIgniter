<div class="container">
    <div class="recent-case-slider medium-padding120">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h4 style="color:black;" class="h1 heading-title">Our Case Studies</h4>
                    <a href="#" class="read-more">See All Projects
                        <i class="seoicon-right-arrow"></i>
                    </a>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper-container top-pagination">
                <div class="swiper-wrapper">
                    <div class="case-slider-item swiper-slide">

                        <?php foreach ($allBarnds as $brand) : ?>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                <div class="case-item align-center">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="<?php echo  base_url(); ?>uploads/brands/<?= $brand->image ?>" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><?= $brand->title ?></h6>
                                    <div class="case-item__cat">
                                        <a href="#"><?= $brand->tech ?></a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>






                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>

        </div>


    </div>
</div>