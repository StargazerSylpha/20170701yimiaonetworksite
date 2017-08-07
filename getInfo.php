
<?php
$urlqs = $_SERVER["QUERY_STRING"];
parse_str($urlqs);
  if($product=="168acc")
  {if($action=="ver")
      {echo "V3.5.3.4";}                         //这里填写168游戏加速客户端的版本号
       
    if($action=="date")
   {echo "2017/06/25";}                                   //这里填写168游戏加速客户端的更新日期
             
    if($action=="size")
      {echo "2.5 MB";}                                             //这里填写168游戏加速客户端的大小
    if($action=="baidudl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='https://pan.baidu.com/s/1i5IchYd'";               //这里填写168游戏加速客户端下载地址（百度网盘）链接，注意：引号千万不要改动！！！
echo "</script>";  }
   
  }


if($product=="yimiaoacc")
{
if($action=="ver")
      {echo "V8.8";}                         //这里填写一秒游客户端的版本号
       
    if($action=="date")
   {echo "2017/06/29";}                                   //这里填写一秒游客户端的更新日期
             
    if($action=="size")
      {echo "1.65 MB";}                                             //这里填写一秒游客户端的大小
    if($action=="baidudl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='https://pan.baidu.com/s/1c1E6Nw0'";               //这里填写一秒游客户端下载地址（百度网盘）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
    if($action=="feimaodl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='http://www.feemoo.com/file-1237709.html'";               //这里填写一秒游客户端下载地址（飞猫网盘）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
  
   
}


if($product=="168ss")
{
if($action=="ver")
      {echo "V1.0";}                         //这里填写168SS客户端的版本号
       
    if($action=="date")
   {echo "2017/07/01";}                                   //这里填写168SS客户端的更新日期
             
    if($action=="size")
      {echo "3.1 MB";}                                             //这里填写168SS客户端的大小
    if($action=="baidudl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='https://pan.baidu.com/s/1mhEWA8o'";               //这里填写168SS PC客户端下载地址（百度网盘）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
    if($action=="pcdl1")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='http://365ssr.com/Download/jsq.zip'";               //这里填写168SS PC客户端下载地址（365ssr）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
  if($action=="pcdl2")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='http://365ssr.com/Download/ssrWin.rar'";               //这里填写168SS PC客户端下载地址（365ssr）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
  if($action=="iosdl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='https://itunes.apple.com/cn/app/wingy-http-s-socks5-proxy-utility/id1178584911?l=en&mt=8'";               //这里填写168SS iOS客户端下载地址（365ssr）链接，注意：引号千万不要改动！！！
echo "</script>";  }
  
  if($action=="androiddl")
      {
echo "<script language='javascript' type='text/javascript'>";  
echo "window.location.href='http://365ssr.com/Download/ssr.apk'";               //这里填写168SS android客户端下载地址（365ssr）链接，注意：引号千万不要改动！！！
echo "</script>";  }


  }
?>

