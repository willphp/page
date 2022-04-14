# 分页处理

page组件用于数据分页智能处理显示

#开始使用

####安装组件
使用 composer 命令进行安装或下载源代码使用(依赖willphp/config组件)。

    composer require willphp/page

> WillPHP 框架已经内置此组件，无需再安装。

####使用示例

    echo \willphp\page\Page::make(100); //显示总记录100的分页html

####分页配置

`config/page.php`配置文件可设置：
	
	'page_var' => 'p', //分页$_GET变量
	'page_size' => 10, //每页显示数量
	'page_num' => 5, //页面显示页码数量
	//'parse_url' => '\willphp\route\Route::pageUrl', //url处理函数或方法	

####分页设置

可使用Page::set(配置名, 值)来进行分页设置：

    Page::set('pageVar', 'page')->make(100); //设置分页$_GET变量
    Page::set('pageSize', 20)->make(100); //设置每页显示数量
    Page::set('pageNum', 10)->make(100); //设置页面显示页码数量

其他设置及默认值：

	'home'=>'首页', 
	'end'=>'尾页', 
	'up'=>'上一页', 
	'down'=>'下一页', 
	'pre'=>'上n页', 
	'next'=>'下n页', 
	'header'=>'条记录', 
	'unit'=>'页',
	'theme'=>1 //1.默认显示，2.使用ul li方式显示

显示设置：

	$html = '[%total% %header%] [%nowpage%/%totalpage% %unit%] %home% %up% %pre% %numlinks% %next% %down% %end%';

####获取limit

	$limit = Page::getLimit();

####获取html

	echo  Page::getHtml('pagination', 'active'); //第一个参数为总体样式，第二个参数为当前页码样式