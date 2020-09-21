<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a target="_black" href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    <a target="_black" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a> <a target="_black" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
</footer><!-- end #footer -->

</div>

<?php $this->footer(); ?>
</body>
</html>
