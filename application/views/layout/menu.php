<!-- food_menu start-->
<section class="food_menu gray_bg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <p>Popular Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="nav nav-tabs food_menu_nav" role="tablist">
                    <?php foreach ($menu as $row) { ?>
                        <a id="<?php echo $row['name'] ?>-tab" href="<?php echo base_url('menu/' . $row['_id']) ?>"><?php echo $row['name'] ?></a>
                    <?php } ?>
                </div>
            </div>