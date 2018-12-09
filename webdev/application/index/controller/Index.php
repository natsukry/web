<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
      echo "您好：  " . cookie('user_name') . ', <a href="' . url('login/loginout') . '">退出</a>';
      
        //return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    	/*return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;">
<head>
<title>Login Successfully</title>
</head>
<h1>Login Successfully</h1></br>
<h1>Congratulations
おめでとう  onnittelu Συγχαρητήρια
Félicitations การแสดงความยินดี
 felicitatie  Felicitacions</h1></br>
 <h1>and we prepared a lovely poem for you</h1></br>
 <h2> Poems On Time <br/>The butterfly counts not months but moments,<br/>
and has time enough. <br/>

Time is a wealth of change,<br/>
but the clock in its parody makes it mere change and no wealth.<br/>

Let your life lightly dance on the edges of Time
like dew on the tip of a leaf. <br/></span></h2><div data-role = "footer"> 
<h1>powered by kryptoner</h1>
</div>';*/
    }
}
