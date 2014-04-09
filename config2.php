<?php
$i=0;
$theme_config[$i]['name']="show_var";
$theme_config[$i]['text']=TF_SHOW_VAR;
$theme_config[$i]['desc']=TF_SHOW_VAR_DESC;
$theme_config[$i]['type']="yesno";
$theme_config[$i]['default']="0";

//外框是否套用陰影
$i++;
$theme_config[$i]['name']="use_shadow";
$theme_config[$i]['text']=TF_USE_SHADOW;
$theme_config[$i]['desc']=TF_USE_SHADOW_DESC;
$theme_config[$i]['type']="yesno";
$theme_config[$i]['default']="1";

//字型設定
$i++;
$theme_config[$i]['name']="font_family";
$theme_config[$i]['text']=TF_FONT_FAMILY;
$theme_config[$i]['desc']=TF_FONT_FAMILY_DESC;
$theme_config[$i]['type']="text";
$theme_config[$i]['default']=TF_FONT_FAMILY_DEFAULT;

//上方logo底色
$i++;
$theme_config[$i]['name']="logo_bgcolor";
$theme_config[$i]['text']=TF_LOGO_BGCOLOR;
$theme_config[$i]['desc']=TF_LOGO_BGCOLOR_DESC;
$theme_config[$i]['type']="color";
$theme_config[$i]['default']="#FFFFFF";

//頁尾底圖
$i++;
$theme_config[$i]['name']="footer_img";
$theme_config[$i]['text']=TF_FOOTER_IMG;
$theme_config[$i]['desc']=TF_FOOTER_IMG_DESC;
$theme_config[$i]['type']="file";
$theme_config[$i]['default']=XOOPS_URL."/themes/school2014/images/foot.jpg";


//頁尾高度
$i++;
$theme_config[$i]['name']="footer_height";
$theme_config[$i]['text']=TF_FOOTER_HEIGHT;
$theme_config[$i]['desc']=TF_FOOTER_HEIGHT_DESC;
$theme_config[$i]['type']="text";
$theme_config[$i]['default']="200px";

//頁尾底色
$i++;
$theme_config[$i]['name']="footer_bgcolor";
$theme_config[$i]['text']=TF_FOOTER_BGCOLOR;
$theme_config[$i]['desc']=TF_FOOTER_BGCOLOR_DESC;
$theme_config[$i]['type']="color";
$theme_config[$i]['default']="#717959";

//頁尾文字內距
$i++;
$theme_config[$i]['name']="footer_padding";
$theme_config[$i]['text']=TF_FOOTER_PADDING;
$theme_config[$i]['desc']=TF_FOOTER_PADDING_DESC;
$theme_config[$i]['type']="text";
$theme_config[$i]['default']="40px 50px";

//頁尾文字顏色
$i++;
$theme_config[$i]['name']="footer_color";
$theme_config[$i]['text']=TF_FOOTER_COLOR;
$theme_config[$i]['desc']=TF_FOOTER_COLOR_DESC;
$theme_config[$i]['type']="color";
$theme_config[$i]['default']="#FFFFFF";

//頁尾內容樣式設定
$i++;
$theme_config[$i]['name']="footer_style";
$theme_config[$i]['text']=TF_FOOTER_STYLE;
$theme_config[$i]['desc']=TF_FOOTER_STYLE_DESC;
$theme_config[$i]['type']="textarea";
$theme_config[$i]['default']="line-height:180%;text-align:center;";
?>
