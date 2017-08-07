<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8">
<title>一秒游／下载 - Yimiao Network／一秒网络</title>

<link rel="icon" href="https://sylpha.coding.me/20170127redpocket/favicon.ico">
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnres.arraycats.net/yimiao/js/jquery.particleground.min.js"></script>
<script src="https://cdnres.arraycats.net/yimiao/js/particleground-run.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

</head>
<body>
          
          <div id="container">
          
                              
      <div id="page-header" style="text-align:center;">
     <div id="page-header-lizibg" style="height: 150px;z-index: -1;overflow: hidden;">                 
	                    </div>

<div id="title" style="z-index: 0;position: absolute; top: 50px;right: 100px;">
	<p><h3><span class="glyphicon glyphicon-cloud" ></span><strong>&nbsp;Yimiao Network／一秒网络</strong></h3></p>	
</div>   

</div>
<hr />

    <div id="main-area">
	     


	     <div class="col-md-2" id="nav-area">


	         <div id="nav-left" align="center">
	             <ul class="nav nav-pills nav-stacked">
	    	          <li><a href="#" data-toggle="collapse" data-target="#welcome-nav">Welcome／欢迎</a></li>
	    	                          <div class="collapse" id="welcome-nav" style="margin-left: -30px;">
	    		                      <ul style="list-style: none;line-height: 30px;">
	    		                      <li><a href="../index.html" style="color: #aaaaaa;">Intro／介绍</a></li>
	    		                      <li><a href="../notice.html" style="color: #aaaaaa;">Notice／公告</a></li>
	    		                      </ul>
	    		                      </div>
	    	          <li class="active"><a href="#" data-toggle="collapse" data-target="#yimiaoacc-nav">Yimiao Acc／一秒游</a></li>
	    	                          <div class="collapse in" id="yimiaoacc-nav" style="margin-left: -30px;">
	    		                      <ul style="list-style: none;line-height: 30px;">
	    		                      <li><strong>Download／下载</strong></li>
	    		                      </ul>
	    		                      </div>
	    	          <li><a href="#" data-toggle="collapse" data-target="#168acc-nav">168 Acc／168游戏加速</a></li>
	    	                          <div class="collapse" id="168acc-nav" style="margin-left: -30px;">
	    		                      <ul style="list-style: none;line-height: 30px;">
	    		                      <li><a href="../168acc/price.html" style="color: #aaaaaa;">Price／价格</a></li>
	    		                      <li><a href="../168acc/register.html" style="color: #aaaaaa;">Register／注册</a></li>
	    		                      <li><a href="../168acc/download.php" style="color: #aaaaaa;">Download／下载</a></li>
	    		                      <li><a href="../168acc/pay.html" style="color: #aaaaaa;">Pay／充值</a></li>
	    		                      </ul>
	    		                      </div>
	    	          <li><a href="#" data-toggle="collapse" data-target="#168ss-nav">168 Ssr／168安全加速</a></li>
	    	                          <div class="collapse" id="168ss-nav" style="margin-left: -30px;">
	    		                      <ul style="list-style: none;line-height: 30px;">
	    		                      <li><a href="../168ss/price.html" style="color: #aaaaaa;">Price／价格</a></li>
	    		                      <li><a href="#" onclick="staffService()" style="color: #aaaaaa;">Register／注册</a></li>
	    		                      <li><a href="../168ss/download.php" style="color: #aaaaaa;">Download／下载</a></li>
	    		                      <li><a href="#" onclick="staffService()" style="color: #aaaaaa;">Pay／充值</a></li>
	    		                      <li><a href="../168ss/account.html" style="color: #aaaaaa;">Account＆Lines／账户＆线路</a></li>
	    		                      </ul>
	    		                      </div>
	    	          <li><a href="#" data-toggle="collapse" data-target="#service-nav">Service／客户服务</a></li>
	    	                          <div class="collapse" id="service-nav" style="margin-left: -30px;">
	    		                      <ul style="list-style: none;line-height: 30px;">
	    		                      <li><a href="../service/document.html" style="color: #aaaaaa;">Document／帮助文档</a></li>
	    		                      <li><a href="../service/self-service.html" style="color: #aaaaaa;">Self-Service／自助服务</a></li>
	    		                      <li><a href="../service/staff-service.html" style="color: #aaaaaa;">Staff Service／人工服务</a></li>
	    		                      </ul>
	    		                      </div>
	    	     </ul>
	         </div>

         </div> 

	                            <div class="col-md-10" id="content-area">
	                                       
                                           <div id="168acc-dl-client">
                                           <p><h4><strong>一秒游下载／Yimiao Acc Client Download</strong></h4></p>
                                               <table class="table table-striped table-hover" id="yimiaoacc-dl-table">
                                               <tr>
                                                   <th>当前版本</th>
                                                   <td><?php 
                                                     echo file_get_contents("https://cdnres.arraycats.net/yimiao/getInfo.php?product=yimiaoacc&action=ver");
                                                     ?></td>
                                                   <th>文件大小</th>
                                                   <td><?php 
                                                     echo file_get_contents("https://cdnres.arraycats.net/yimiao/getInfo.php?product=yimiaoacc&action=size");
                                                     ?></td>
                                                   
                                               </tr>
                                               <tr>
                                                   <td><strong>更新日期</strong></td>
                                                   <td><?php 
                                                     echo file_get_contents("https://cdnres.arraycats.net/yimiao/getInfo.php?product=yimiaoacc&action=date");
                                                     ?></td>
                                                   <td><strong>支持平台</strong></td>
                                                   <td>Windows XP／Vista／7／8／10</td>

                                               </tr>
                                               </table>
                                             
                                                 <div id="168acc-dl-btn" align="center">

                                             <div class="col-md-4">
                                            <a href="https://cdnres.arraycats.net/yimiao/getInfo.php?product=yimiaoacc&action=baidudl" target="_blank" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-save" ></span>&nbsp;百度网盘下载</a>
                                            </div>
                                                   <div class="col-md-4">
                                            <a href="https://cdnres.arraycats.net/yimiao/getInfo.php?product=yimiaoacc&action=feimaodl" target="_blank" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-save" ></span>&nbsp;飞猫网盘下载</a>
                                            </div>
                                             <div class="col-md-4">
                                            <a href="../service/self-service.html" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-save" ></span>&nbsp;补丁下载</a>
                                            </div>
                                            

                                            </div>

                                           </div>


	                            </div>
    </div>   
		


<div id="footer-area" class="col-md-12" align="center">
			   <hr />
			 <p><h5 style="color:#aaaaaa;">Copyright &copy; Sylpha Project Co., Ltd.／Yimiao Network. All Rights Reserved.</h5></p>
</div>
<script type="text/javascript">
/*staff-service interactive*/

function staffService()
	{
		alert("即将跳转到人工服务页面，点击继续。")
		window.location.href="../service/staff-service.html"
	}
</script>
</div>                
</body>
</html>