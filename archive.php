<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="row">
    <div class="col-mb-12 col-8">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
        <div class="post-item">
            <?php if(showThumbnail($this) != ""){
                $tmp=showThumbnail($this);
                echo <<<EOF
            <div class="post-item-top">
            <a style="background-image: url($tmp)" href="$this->permalink"></a>
            </div>
EOF;

            }
            ?>
            <div class="post-item-bottom">
                <a class="post-item-title" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                <p class="post-item-excerpt">
                    <a itemprop="url" href="<?php $this->permalink() ?>">
                        <?php $this->excerpt('100'); ?>
                    </a>
                </p>
            </div>
        </div>
	    <?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
    <div class="col-4 kit-hidden-tb">
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>


