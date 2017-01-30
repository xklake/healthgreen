<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 7/28/16
 * Time: 2:49 PM
 */
?>

<div class="widget search">
    <form action="<?= Yii::$app->urlManager->createUrl(['/blog/default/catalog']) ?>" method="get" id="search_fm" name="search_fm" role="form">
        <input class="form-control search_box" autocomplete="off" type="text" name="keyword" id="searchText" placeholder="搜索博客......"/>
    </form>
</div><!--/.search-->


<div class="widget categories">
    <h3>博客分类</h3>
    <div class="row">
        <div class="col-sm-11">
            <ul class="blog_category">
                <?php
                    $allCatalog = \funson86\blog\models\BlogCatalog::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])->andwhere(
                        ['parent_id' => 17] )->orderby(['sort_order' => SORT_ASC])->all();

                    foreach($allCatalog as $item) {
                        if ($item->template == \funson86\blog\models\BlogCatalog::TEMPLATE_MULTIPLY) {
                            ?>
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->createUrl(['/blog/default/catalog/','id'=>$item->id])?>">
                                    <?=$item->surname?>
                                    <span class="badge"><?=$item->getPostsCount()?></span>
                                </a>
                            </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
</div><!--/.categories-->


<div class="widget categories">
    <h3>最新评论</h3>
    <div class="row">
        <div class="col-sm-12">
            <?php
                $comments = \funson86\blog\models\BlogComment::findRecentComments(10);
                foreach($comments as $item){ ?>
                    <div class="single_comments">
                        <img src="/images/avatar3.png" alt=""  />
                        <p><?=$item->content?></p>
                        <div class="entry-meta small muted">
                            <span><a href="#"><?=$item->author?></a></span <span>评论  <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->blogPost->id])?>"><?=$item->blogPost->title?></a></span>
                        </div>
                    </div>

                    <div style="clear:both"></div>
            <?php } ?>
        </div>
    </div>
</div><!--/.recent comments-->


<div class="widget archieve">
    <h3>博客归档</h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="blog_archieve">
                <?php
                    $archives = \funson86\blog\models\BlogCatalog::getArchive();
                    foreach($archives as $item) {
                ?>
                    <li><a href="<?=Yii::$app->getUrlManager()->createUrl(['/blog/default/catalog/','createdmonth'=>$item['time']])?>"><i class="fa fa-angle-double-right"></i> <?=$item['time']?> <span class="pull-right">(<?=$item['count']?>)</span></a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</div><!--/.archieve-->

<div class="widget tags">
    <h3>热门标签</h3>
    <ul class="tag-cloud">
        <?php $tags = array_reverse(\funson86\blog\models\BlogTag::findTagWeights(20));
            foreach($tags as $key => $val){
        ?>
            <li><a class="btn btn-xs btn-primary" href="<?=Yii::$app->getUrlManager()->createUrl(['/blog/default/catalog/','tag'=>$key])?>"><?=$key?> (<?=$val?>)</a></li>
        <?php } ?>
    </ul>
</div><!--/.tags-->
