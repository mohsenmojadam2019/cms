<?php
//حلقه تعریف تا ادرس را درون متغیر بزاریم و وقتی کاربر روی عکس اقلام رفت در آدرس ,آیدی و عنوان آن اقلام مشخص شود
foreach($check_forms as $search_record){
    echo'<p><a href="./?m=product&id='.$search_record['id'].'">'.$search_record['title'].'</a><br/>
    '.$pageData->chop_str($search_record['body']).'</p>;










?>