<!-- start project -->
<div class="full-row p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-7 ms-5 mb-5 sm-ms-0">
                <span class="pb-2 d-table w-sm-100 text-primary h6">Latest Project</span>
                <h2 class="down-line w-sm-100">The Projects We have Complated Recently and On Going</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-carousel px-5 sm-p-0">
                    <div class="owl-carousel 4block-carousel owl-dot-disable owl-nav-text-none owl-nav-top-right-2 owl-nav-icon-square owl-nav-icon-2">
                        <?php 
                            $dir = 'C:\xampp\htdocs';
                            $files = scandir($dir);
                        ?>

                        <?php foreach($files as $file) : ?>
                            <?php 
                                $file_parts = pathinfo($file); 
                                if($file != "." && $file != ".." && !isset($file_parts['extension'])){ 
                            ?>
                                <div class="item">
                                    <div class="img-thumb-title-inside">
                                        <a class="portfolio-view xy-center position-absolute transation" href="assets/images/gallery/16.jpg" data-fancybox="gallery" data-caption="Caption for single image"><i class="flaticon-search flat-small text-white"></i></a>
                                        <img src="assets/images/gallery/16.jpg" alt="corporate template">
                                        <h6 class="p-3 title bg-white hover-bg-primary hover-text-white transation"><a href="../<?= $file;?>" target="_blank" class="ordenery-font transation"><?= $file; ?> <i class="fas fa-arrow-right ms-3"></i></a></h6>
                                    </div>
                                </div>
                        <?php } 
                            endforeach;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end project -->