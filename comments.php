<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>

    <?php if($this->allow('comment')): ?>
    
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
        
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form class="" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
    		<div class="row">
    		    <div class="col-mb-12">
                    <textarea placeholder="写点什么吧～" rows="5" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                    <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
                </div>
            </div>
            <?php else: ?>
    		<div class="row">
                <div class="col-4 col-mb-12">
                    <input placeholder="昵称" type="text" name="author" id="author" class="m-t-10" value="<?php $this->remember('author'); ?>" required />
                </div>
                <div class="col-4 col-mb-12">
                    <input placeholder="邮箱" type="email" name="mail" id="mail" class="m-t-10" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                </div>
                <div class="col-4 col-mb-12">
                    <input placeholder="网站(非必填)" type="url" name="url" id="url" class="m-t-10" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                </div>
            
                <div class="col-mb-12">
                    <textarea placeholder="写点什么吧～" rows="5" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                    <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
                </div>
            </div>
            <?php endif; ?>
    	</form>
    </div>
    <?php endif; ?>
    
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php endif; ?>
</div>
