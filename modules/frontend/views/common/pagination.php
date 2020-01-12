<?php

?>
<?php use app\components\GlobalUrlService;

if ($pages): ?>
    <?php if ($pages['previous']): ?>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                array_merge($search_conditions,['p' => 1])) : GlobalUrlService::buildNullUrl(); ?>">首页</a></li>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                array_merge($search_conditions,['p' => $pages['current'] - 1])) : GlobalUrlService::buildNullUrl(); ?>">上一页</a></li>
    <?php else:?>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">首页</a></li>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">上一页</a></li>
    <?php endif; ?>
    <?php for ($page = $pages['from']; $page <= $pages['end']; $page++): ?>
        <?php if ($page == $pages['current']): ?>
            <li class="on"><a href="<?= GlobalUrlService::buildNullUrl(); ?>"><?= $page; ?></a></li>
        <?php else: ?>
            <li><a href="<?= GlobalUrlService::buildAppUrl($url,
                    array_merge($search_conditions,['p' => $page])); ?>"><?= $page; ?></a></li>
        <?php endif; ?>
    <?php endfor; ?>

    <!--            <li><a href="#">2</a></li>-->
    <!--            <li><a href="#">3</a></li>-->
    <?php if ($pages['next']): ?>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                array_merge($search_conditions,['p' => $pages['current'] + 1])) : GlobalUrlService::buildNullUrl(); ?>">下一页</a></li>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                array_merge($search_conditions,['p' => $pages['total_page']])): GlobalUrlService::buildNullUrl(); ?>">末页</a></li>
    <?php else: ?>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">下一页</a></li>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">末页</a></li>
    <?php endif; ?>
<?php endif; ?>