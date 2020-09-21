<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="row">
    <div class="col-mb-12 col-8">
        <div class="post-title">
            <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        </div>
        <div class="post-meta">
            <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            <?php _e('分类: '); ?><?php $this->category(','); ?>
        </div>
        <div class="post-content">
            <?php $this->content(); ?>
            <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
            <ul class="post-near">
                <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
                <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
            </ul>
        </div>
        <div class="post-comments">
            <?php $this->need('comments.php'); ?>
        </div>
    </div>
    <div class="col-4 kit-hidden-tb">
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
