<?php $this->need('header.php'); ?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 归档页面
 *
 * @package custom
 */
?>

<div class="row">
    <div class="col-mb-12 col-8">
        <div class="post-title">
            <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        </div>
        <div class="post-content">
            <?php 
            $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;   
    $output = '<div id="archives">';   
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('m',$archives->created);   
        $y=$year; $m=$mon;   
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            $output .= '<h3 class="al_year">'. $year .' 年</h3><ul class="al_mon_list">'; //输出年份   
        }   
        if ($mon != $mon_tmp) {   
            $mon = $mon_tmp;   
            $output .= '<li><span class="al_mon">'. $mon .' 月</span><ul class="al_post_list">'; //输出月份   
        }   
        $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题   
    endwhile;   
    $output .= '</ul></li></ul></div>';
    echo $output;
            ?>
        </div>
    </div>
    <div class="col-4 kit-hidden-tb">
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>


