<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Filter $filter) {
    //
};

Hook::addMenuItem('user', 0, [
    'title' => 'Blessing\ExamplePlugin::general.menu',
    'link'  => '/my-page',
    'icon'  => 'fa-cog',
    'new-tab' => true, // 表示是否在浏览器新标签页中打开链接，默认为 false
]);


$form = Option::form('my_form', '表单示例', function ($form) {
    //
});

$form->handle();

{!! $form->render() !!}

$form->addMessage('写文档不容易啊');