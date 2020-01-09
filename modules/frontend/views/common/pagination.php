<?php

?>
<?php use app\components\GlobalUrlService;

if ($pages): ?>
    <?php if ($pages['previous']): ?>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                ['p' => 1]) : GlobalUrlService::buildNullUrl(); ?>">首页</a></li>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                ['p' => $pages['current'] - 1]) : GlobalUrlService::buildNullUrl(); ?>">上一页</a></li>
    <?php else:?>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">首页</a></li>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">上一页</a></li>
    <?php endif; ?>
    <?php for ($page = $pages['from']; $page <= $pages['end']; $page++): ?>
        <?php if ($page == $pages['current']): ?>
            <li class="active"><a href="<?= GlobalUrlService::buildNullUrl(); ?>"><?= $page; ?></a></li>
        <?php else: ?>
            <li><a href="<?= GlobalUrlService::buildAppUrl($url,
                    ['p' => $page]); ?>"><?= $page; ?></a></li>
        <?php endif; ?>
    <?php endfor; ?>


    <?php if ($pages['next']): ?>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                ['p' => $pages['current'] + 1]) : GlobalUrlService::buildNullUrl(); ?>">下一页</a></li>
        <li><a href="<?= $url ? GlobalUrlService::buildAppUrl($url,
                ['p' => $pages['total_page']]) : GlobalUrlService::buildNullUrl(); ?>">末页</a></li>
    <?php else: ?>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">下一页</a></li>
        <li><a href="<?=GlobalUrlService::buildNullUrl();?>">末页</a></li>
    <?php endif; ?>
<?php endif; ?>