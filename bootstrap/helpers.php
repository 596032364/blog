<?php
/*
 * 公众使用函数
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
