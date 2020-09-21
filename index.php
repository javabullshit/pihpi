<?php
/**
 * Pihpi主题 Github更新链接：https://github.com/javabullshit/pihpi
 * 有问题欢迎反馈 php.pylinux.cn/messages.html
 * 
 * @package Pihpi Theme
 * @author 枭遥
 * @version 1.0
 * @link php.pylinux.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="row">
    <div class="col-mb-12 col-8">
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
                <p class="post-item-excerpt"><?php $this->excerpt('100'); ?></p>
            </div>
        </div>
	    <?php endwhile; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
    <div class="col-4 kit-hidden-tb">
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
