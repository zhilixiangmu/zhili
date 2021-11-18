<?php
/* *
 * 功能：代付调试入口页面
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>代付申请</title>
	<link rel="stylesheet" type="text/css" href="df.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
   <div class="container">
	   <div class="header">
		   <h3>代付申请</h3>
	   </div>

	<div class="main">
		 <form target="_blank" method="post" action="dodf.php">
			<ul>

				<li>
					<label>金额</label>
					<input type="text" name="money" value="11" />
				</li>
				<li>
					<label>开户行</label>
					<input type="text" name="bankname" value="广发银行" />
				</li>
				<li>
					<label>代付回调地址</label>
					<input type="text" name="subbranch" value="https://www.wcg5188.com/dfphpdemo/server.php" />
				</li>
				<li>
					<label>PIX客户姓名</label>
					<input type="text" name="accountname" value="张姗" />
				</li>
				<li>
					<label>PIX账号</label>
					<input type="text" name="cardnumber" value="" />
				</li>
				<li>
					<label>CPF Code</label>
					<input type="text" name="province" value="863.692.535-53"  />
				</li>
				<li>
					<label>PIX账号类型</label>
					<input type="text" name="city" value="CPF"  />
				</li>
				<li>
					<label>收款人身份证号</label>
					<input type="text" name="extends[IdCardNo]" value="34222219910207284X"  />
				</li>
				<li>
					<label>收款人手机号码</label>
					<input type="text" name="extends[PhoneNo]" value=""  />
				</li>
				<li style="margin-top: 50px">
					<label></label>
					<button type="submit">提交</button>
				</li>
             </ul>
		</form>
	  </div>
    </div>
  </body>
</html>
