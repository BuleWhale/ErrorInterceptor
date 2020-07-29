# 欢迎使用 ErrorInterceptor 错误拦截器
[![License](https://poser.pugx.org/hfo4/cloudreve/license)](https://packagist.org/packages/hfo4/cloudreve)

**如何使用**

```
//加载主程序
include 'core.php';
```
关于拦截器
----------
* 拦截器版本：1.0
* 最后更新时间：2020-07-28
* 特性：能够拦截所有 E_ALL 错误
* 错误页面模板来自thinkphp异常捕获页面

不足之处
----------
* 不足：不能拦截系统级错误，比如 Fatal Error
* Bug（目前已发现）：有时设置header时会报错；有时变量会未定义。

最后
----------
欢迎提出改进及不足的地方，邮箱：coldwater235@foxmail.com

许可证
------------
GPLV3
