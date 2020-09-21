<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <div class="widget">
        <div class-"pro">
            <img class=pro-img src="<?php $this->options->logoUrl() ?>" />
            <div class="pro-right">
            <p class="pro-name"><?php $this->author(); ?></p>
            <p class="pro-desc"><?php $this->options->profiledesc(); ?></p>
            </div>
        </div>
        <div class="flex-container">
            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <p><?php $stat->publishedPostsNum() ?></p>
            <p><?php $stat->publishedCommentsNum() ?></p>
            <p id="days"></p>
            <script>
var s1 = '<?php $this->options->profiledays(); ?>';
s1 = new Date(s1.replace(/-/g, "/"));
s2 = new Date();
var days = s2.getTime() - s1.getTime();
var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
document.getElementById('days').innerHTML = number_of_days;
            </script>
        </div>
        <div class="flex-container">
            <p>文章数</p>
            <p>评论数</p>
            <p>运行天数</p>
        </div>
    </div>
    
    <div class="widget">
        <h3 class="widget-title">
            文章分类
        </h3>
        <div class="categories container">
            <div class="row">
                <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<a class="col-mb-6 text-center" href="{permalink}">{name} ({count})</a>'); ?>
            </div>
        </div>
    </div>

    <div class="widget">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="sider-comment-item">
                <?php $comments->gravatar('40', ''); ?>
                <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>
                <p><?php $comments->excerpt(35, '...'); ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>


    <div class="widget">
        <h3 class="widget-title">
            标签云
        </h3>
        <div class="tag-cloud">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>
            <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>" rel="tag" class="tag" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
            <?php else: ?>
                <?php _e('没有任何标签'); ?>
            <?php endif; ?>
        </div>
    </div>



