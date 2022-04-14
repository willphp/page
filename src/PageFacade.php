<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: NoMind <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\page;
use willphp\framework\build\Facade;
class PageFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'Page';
	}
}