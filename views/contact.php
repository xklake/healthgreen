<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:18 PM
 */
?>



<section id="contact-info">
    <div class="center">
        <?= Yii::$app->getHtmlBlock('modern-contact-lead')->content; ?>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe src="<?=Yii::$app->setting->get('googlemap')?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-12">
                            <address>
                                <p>
                                    <a href='tel:<?=Yii::$app->setting->get('mobile')?>' class="fa fa-mobile">
                                        <?=Yii::$app->setting->get('mobile')?>
                                    </a>
                                </p>

                                <p>
                                    <a href='tel:<?=Yii::$app->setting->get('phone')?>' class="fa fa-phone">
                                        <?=Yii::$app->setting->get('phone')?>
                                    </a>
                                </p>
                                <p>
                                    <a href="mailto:<?=Yii::$app->setting->get('email')?>"   class="fa fa-envelope-o">
                                        <?=Yii::$app->setting->get('email')?>
                                    </a>
                                </p>

                                <p>
                                    <a href='#'  class="fa fa-map-marker">
                                        <?=Yii::$app->setting->get('address')?>
                                    </a>
                                </p>
                                <p>
                                    <a href='tel:<?=Yii::$app->setting->get('wechat')?>' class="fa fa-weixin">
                                        <?=Yii::$app->setting->get('wechat')?>
                                    </a>
                                </p>
								
								<p>
									<img src="/images/wechat.png">
								</p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->
