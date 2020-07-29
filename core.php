<?php 
error_reporting(-1);
define("__VERSION__", "1.0");
set_error_handler('_customError',E_ALL);
// 注册错误处理方法来处理所有错误
set_exception_handler('_customError');
// 注册异常处理方法来捕获异常
function _customError($errno, $errmsg, $file,$line) {
    //错误代码：{$errno}，错误信息：{$errmsg} //行号：$line //运行文件：$_SERVER[ 'PHP_SELF'] //php版本：PHP_VERSION，os：PHP_OS header( "Content-Type: text/html; charset=utf-8");
    define('DEBUG',true);
    define('EMAIL','');
    header('Content-Type:text/html;charset=utf-8');
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>System Error</title>
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <style>
            /* Base */
            body {
                color: #333;
                font: 14px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
                margin: 0;
                padding: 0 20px 20px;
                word-break: break-word;
            }
            h1 {
                margin: 10px 0 0;
                font-size: 28px;
                font-weight: 500;
                line-height: 32px;
            }
            h2 {
                color: #4288ce;
                font-weight: 400;
                padding: 6px 0;
                margin: 6px 0 0;
                font-size: 18px;
                border-bottom: 1px solid #eee;
            }
            h3.subheading {
                color: #4288ce;
                margin: 6px 0 0;
                font-weight: 400;
            }
            h3 {
                margin: 12px;
                font-size: 16px;
                font-weight: bold;
            }
            abbr {
                cursor: help;
                text-decoration: underline;
                text-decoration-style: dotted;
            }
            a {
                color: #868686;
                cursor: pointer;
            }
            a:hover {
                text-decoration: underline;
            }
            .line-error {
                background: #f8cbcb;
            }
            .echo table {
                width: 100%;
            }
            .echo pre {
                padding: 16px;
                overflow: auto;
                font-size: 85%;
                line-height: 1.45;
                background-color: #f7f7f7;
                border: 0;
                border-radius: 3px;
                font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
            }
            .echo pre > pre {
                padding: 0;
                margin: 0;
            }
            /* Layout */
            .col-md-3 {
                width: 25%;
            }
            .col-md-9 {
                width: 75%;
            }
            [class^="col-md-"] {
                float: left;
            }
            .clearfix {
                clear:both;
            }
@media only screen and (min-device-width : 375px) and (max-device-width : 667px) {
                .col-md-3, .col-md-9 {
                    width: 100%;
                }
            }
            /* Copyright Info */
            .copyright {
                margin-top: 24px;
                padding: 12px 0;
                border-top: 1px solid #eee;
            }
            /* SPAN elements with the classes below are added by prettyprint. */
            pre.prettyprint .pln {
                color: #000
            }
            /* plain text */
            pre.prettyprint .str {
                color: #080
            }
            /* string content */
            pre.prettyprint .kwd {
                color: #008
            }
            /* a keyword */
            pre.prettyprint .com {
                color: #800
            }
            /* a comment */
            pre.prettyprint .typ {
                color: #606
            }
            /* a type name */
            pre.prettyprint .lit {
                color: #066
            }
            /* a literal value */
            /* punctuation, lisp open bracket, lisp close bracket */
            pre.prettyprint .pun, pre.prettyprint .opn, pre.prettyprint .clo {
                color: #660
            }
            pre.prettyprint .tag {
                color: #008
            }
            /* a markup tag name */
            pre.prettyprint .atn {
                color: #606
            }
            /* a markup attribute name */
            pre.prettyprint .atv {
                color: #080
            }
            /* a markup attribute value */
            pre.prettyprint .dec, pre.prettyprint .var {
                color: #606
            }
            /* a declaration; a variable name */
            pre.prettyprint .fun {
                color: red
            }
            /* a function name */
        </style>

        <body>
            <h1>很抱歉 出现错误 :(</h1>

            <h2>异常:<?php echo "{$_SERVER['PHP_SELF']} [$line]";
                ?></h2>

            <div class="exception-var">
                <h3>Request Details</h3>

                <div>
                    <h3 class="subheading">Data</h3>

                </div>
                <div>
                    <div class="clearfix">
                        <div class="col-md-3">
                            <strong>GET Data</strong>

                        </div>
                        <div class="col-md-9">
                            <small><?php echo $_SERVER['QUERY_STRING'] ?></small>

                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>POST Data</strong>

                    </div>
                    <div class="col-md-9">
                        <small><?php echo file_get_contents("php://input") ?></small>

                    </div>
                </div>
            </div>
            <div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>TARGET</strong>

                    </div>
                    <div class="col-md-9">
                        <small><?php echo basename($_SERVER['PHP_SELF']) ?></small>

                    </div>
                </div>
            </div>
            <div>
                <h3 class="subheading">Server/Request Data</h3>

                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>PROGRAM_NAME</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo basename($_SERVER['PHP_SELF']) ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REQUEST_URI</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['REQUEST_URI'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>QUERY_STRING</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['QUERY_STRING'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REQUEST_METHOD</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['REQUEST_METHOD'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>SERVER_PROTOCOL</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['SERVER_PROTOCOL'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>SCRIPT_FILENAME</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['PHP_SELF'] ?>                 </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REQUEST_SCHEME</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['REQUEST_SCHEME'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REMOTE_ADDR</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php
                            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                //为了兼容百度的CDN，所以转成数组
                                $arr = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
                                $userip = $arr[0];
                            } else {
                                $userip = $_SERVER['REMOTE_ADDR'];
                            }
                            echo $userip;
                            ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>SERVER_ADDR</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['SERVER_ADDR'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>SERVER_NAME</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['SERVER_NAME'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>HTTP_ACCEPT_LANGUAGE</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>HTTP_USER_AGENT</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['HTTP_USER_AGENT'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>HTTP_ACCEPT</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['HTTP_ACCEPT'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>HTTP_HOST</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['HTTP_HOST'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>HTTPS</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['HTTPS'] ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REQUEST_TIME</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo $_SERVER['REQUEST_TIME'] ?>                    </small>

                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <div>
            <h3 class="subheading">Others</h3>

            <div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>OPERATION_INFOMATION</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php
                            require_once 'Mcrypt.class.php';
                            $arr = array('userip' => $userip,'request' => $_SERVER['REQUEST_URI'],'time' => time());
                            $json = json_encode($arr);
                            if (DEBUG == false) {
                                $password = rand(0,1000);
                                echo Mcrypt::encode($json,$password) . "[$password]";
                            } else {
                                echo $json;
                            }
                            ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>ERR_MSG</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php
                            $arr = array('filename' => $_SERVER['SCRIPT_FILENAME'],'line' => $line,'err_num' => $errno,'errmsg' => $errmsg,'GetData' => $_SERVER['QUERY_STRING'],'PostData' => file_get_contents("php://input"));
                            $json = json_encode($arr);
                            if (DEBUG == false) {
                                $password = rand(0,1000);
                                echo Mcrypt::encode($json,$password) . "[$password]";
                            } else {
                                echo $json;
                            }
                            ?>                    </small>

                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-3">
                        <strong>REPORTER_VERSION</strong>

                    </div>
                    <div class="col-md-9">
                        <small>
                            <?php echo __VERSION__ ?>                    </small>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <span>ErrReporter Verson<?php echo __VERSION__ ?></span>

    </div>
</body>

</html>
<?php
exit("你可以将此页面截图或者复制OPERATION_INFOMATION及ERR_MSG，发送到邮箱." . EMAIL . "，以帮助我更好的修复错误。");
}
?>
