<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="row">
    <div class="col-mb-12 col-8">
        <div class="post-title">
            <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        </div>
        <div class="post-content">
            <?php $this->content(); ?>
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