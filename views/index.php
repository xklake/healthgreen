<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:32 PM
 */

    $banners = Yii::$app->getImageByGroup('banner');
    $index = 0;

    $products = \common\models\Product::find()->where(['status'=> \funson86\blog\models\Status::STATUS_ACTIVE])->andWhere(['=', 'catalog_id', 51])->all();
    $storeimg = Yii::$app->getImages('storepic');
?>

<section id="main-slider">
    <div class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <?php foreach($banners as $item) {
            if($index == 0){
            ?>
            <li data-target="#main-slider" data-slide-to="<?=$index?>" class="active"></li>
            <?} else { ?>
            <li data-target="#main-slider" data-slide-to="<?=$index?>"></li>
            <? }
            $index ++ ; }?>
        </ol>

        <div class="carousel-inner"  role="listbox">
            <?php
            $index = 0;
            foreach($banners as $item) {
                if($index == 0){
                ?>
                    <div class="item active" style="background-image: url(<?=$item->image?>)">
                <?php } else { ?>
                    <div class="item" style="background-image: url(<?=$item->image?>)">
                <?php } ?>
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1"><?=$item->keywords?></h1>
                                        <h2 class="animation animated-item-2"><?=$item->description?></h2>
                                    </div>
                                </div>

                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <!--img src="/images/modern/slider/img1.png" class="img-responsive"-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php $index ++; } ?>
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev" role="button">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next" role="button">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<?php
$k = 1;
foreach($products as $item){
?>
    <section id="service<?=$k?>" style="padding-bottom: 50px;">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6">
                    <?=$item->content?>
                </div>

                <div class="col-md-6">
                    <div class="image-md-aside position-right">
                        <div class="image-wrap">
                            <img src="<?=$item->thumb?>" alt="<?=$item->name?>" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
<?php
    $k = $k + 1;
} ?>

<!-- price section -->
<section id="price">
    <div class="container">
        <?php
            $price = Yii::$app->getHtmlBlock('price');
            if($price){
                echo ($price->content);
            }
        ?>
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="gallery">
    <div class="row">
        <div class="portfolio-items">
            <?php $banners = Yii::$app->getImageByGroup(2);
            foreach($banners as $item){?>
                <div class="portfolio-item <?=$item->keywords?> col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?='/'.$item->image?>" alt="<?=$item->name?>">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="<?=$item->url?>"><?=$item->name?></a></h3>
                                <p><?=$item->description?></p>
                                <a class='preview' href="<?=$item->url?>" target="_blank" ref="nofollow">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container-fluid">
        <div class="text-center">
            <span style="font-size: 2rem; ">Contact us</span>
        </div>

        <div class="row" style="margin: 30px 0px 30px 0px">
            <div class="col-sm-6">
                <img style="width: 100%;" src="<?=$storeimg->image?>">
            </div>

            <div class="col-sm-6" style="margin-top:30px;">
                <div>
                    <i class="fa fa-phone" style="font-size: 2rem;"></i>

                    <a href='tel:<?=Yii::$app->setting->get('mobile')?>'>
                        <?=Yii::$app->setting->get('mobile')?>
                    </a>
                </div>
                <br/>

                <div>
                    <i class="fa fa-map-marker" style="font-size: 2rem;"></i>
                    <span>
                        <?=Yii::$app->setting->get('address')?>
                    </span>
                </div>
                <br/>

                <div>
                    <i class="fa fa-clock-o " style="font-size: 2rem;"></i>
                    <span>
                        <?=Yii::$app->setting->get('worktime')?>
                    </span>
                </div>
                <br/>

                <div>
                    <i class="fa fa-calendar" style="font-size: 2rem;"></i>

                    <span>
                        <?=Yii::$app->getTextBlock("apoointment")->content?>
                    </span>

                </div>

                <br/>

                <div>
                    <i class="fa fa-credit-card "></i>
                    <span><?=Yii::$app->getTextBlock("payment")->content?></span>
                </div>

                <br/>

                <div>
                    <i class="fa fa-history"></i>
                    <span><?=Yii::$app->getTextBlock('history')->content?></span>
                </div>
            </div>
        </div>

        <iframe src="<?=Yii::$app->setting->get('googlemap')?>" style="width:100%;height: 350px;border: none;margin:0px;padding:0px;"></iframe>
    </div>
</section><!--/#services-->
