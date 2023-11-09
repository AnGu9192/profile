<!-- Work area starts -->
<section id="work" class="works section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2><span>My</span> Works</h2>
                    <p>The new common language will be more simple and regular than.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Works filter -->
            <ul class="work filters">
                <li class="filter" data-filter="all">
                    <span class="icon-presentation"></span> All
                </li>
                <li class="filter" data-filter=".web">
                    <span class="icon-browser"></span> Web
                </li>
                <li class="filter" data-filter=".app">
                    <span class="icon-mobile"></span> App
                </li>
                <li class="filter" data-filter=".graphic">
                    <span class="icon-camera"></span> Graphic
                </li>
            </ul>
            <!-- / Works filter -->
        </div>

        <div class="portfolio">
            <div class="row work-items">

                <?php foreach($projects as $project ){ ?>
                <!-- work item -->
                <div class="col-md-4 col-sm-6 mix web">
                    <div class="item">
                        <a href="<?php App::asset("storage/$project->image"); ?>" class="work-popup">
                            <img src="<?php App::asset("storage/$project->image"); ?>" alt="" >
                            <div class="overlay">
                                <span class="icon-focus"></span>
                            </div>
                            <div class="title"><?php echo $project->title ?></div>
                        </a>
                    </div>
                </div>
            <?php }  ?>

            </div>

        </div>

    </div>
</section>
<!-- Work area ends -->

