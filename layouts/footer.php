<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="text-center">
            <?=Yii::$app->setting->get('copyright') ?>
        </div>
    </div>
</footer><!--/#footer-->


<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>