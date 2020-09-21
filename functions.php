<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('个人信息头像URL'), _t('在这里填入一个图片 URL 地址, 显示在右侧个人信息栏'));
    $form->addInput($logoUrl);
    
    $profiledesc = new Typecho_Widget_Helper_Form_Element_Text('profiledesc', NULL, NULL, _t('个性签名'), _t('显示在右侧个人信息中'));
    $form->addInput($profiledesc);
    
    $profiledays = new Typecho_Widget_Helper_Form_Element_Text('profiledays', NULL, NULL, _t('网站搭建时间，格式：2020-09-20'), _t('显示在右侧个人信息中'));
    $form->addInput($profiledays);
    
}

/** 输出文章缩略图 */ 
function showThumbnail($widget)
{ 
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
    
    if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
        
        return $thumbUrl[1][0];
    }
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

