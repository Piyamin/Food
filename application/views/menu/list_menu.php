<div class="col-lg-12">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel" aria-labelledby="Special-tab">

            <div class="row">
                <?php foreach ($list_menu as $key => $row) { ?>
                    <div class="col-sm- col-lg-6">
                        <div class="single_food_item media">
                            <img src="<?php echo base_url('public/img/food_menu/single_food_1.png') ?>" class="mr-3" alt="...">
                            <div class="media-body align-self-center">
                                <h3><?php echo $row['name'] ?></h3>
                                <h5><?php echo $row['price'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- food_menu part end-->