<?php
$this->_var['dpagejs'][] = $this->_var['TMPL_REAL']."/js/ajax_user_login.js";
$this->_var['dcpagejs'][] = $this->_var['TMPL_REAL']."/js/ajax_user_login.js";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['dpagejs'],
  'c' => $this->_var['dcpagejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<style>
	.dlmain{position:relative;z-index:1;}
	.control-group{float:left;overflow:visible;}
	.dlmain {width:1000px;position:relative;z-index:1;background:url(<?php echo $this->_var['TMPL']; ?>/images/images/reglog_bg.gif) #fcfcfc repeat-y; }
	.control-group label{width:30px}
	.holder_tip{left:0;top:0;}
</style>
<div class="blank"></div>
<!--中间开始-->
<div class="dlmain" style="overflow:hidden">
	<div class="f_l dlr"  style="height:350px;width:554px;">
		<div class="dlr1">
			<span class="f_l">用户登录</span>
			<span class="f_r" style="font-size:14px;color:#8c8c8c;line-height:14px; margin-top:16px;" >还没账号？  <a href="<?php
echo parse_url_tag("u:user#register|"."".""); 
?>" style="color:#0196db;"> 注册</a> </span>
		</div>
		<div class="blank0"></div>
		<form id="user_login_form" name="user_login_form" action="<?php
echo parse_url_tag("u:user#do_login|"."".""); 
?>">
			<div class="control-group">
				<label class="control-label">账户</label>
				<div class="control-text">
					<div class="pr f_l">
						<input type="text" name="email" id="email" value="" class="textbox" />
						<span class="holder_tip">手机号/会员名/邮箱</span>
					</div>
				</div>
				<div class="blank0"></div>
			</div>
			<div class="control-group">
				<label class="control-label">密码</label>
				<div class="control-text">
					<div class="pr f_l">
						<input type="password" name="user_pwd" id="user_pwd" value="" class="textbox" />
						<span class="holder_tip">请输入登录密码</span>
					</div>
					<a href="<?php
echo parse_url_tag("u:user#getpassword|"."".""); 
?>" style="color:#1184df;font-size:13px;">忘记密码？</a>
				</div>
				<div class="blank0"></div>
			</div>
			<?php if (app_conf ( "USER_VERIFY_STATUS" ) == 1): ?>	
				<div class="control-group">
 					<label class="control-label">验证码</label>
					<div class="control-text">
						<div class="pr f_l">
							<input type="text" id="image_code" name="image_code" class="textbox f_l" style="width:50px;margin-right:10px" />
							<img src="./verify.php" id="verify" align="absmiddle" height="41">
						</div>
						<div class="tip_box"></div>
					</div>
					<div class="blank0"></div>
				</div>
			<?php else: ?>
			 		<input type="hidden" id="image_code" name="image_code" class="textbox f_l" value="0" style="width:50px;margin-right:10px" />
					<img src="./verify.php" id="verify" align="absmiddle" height="41" style="display:none;">
			<?php endif; ?>
			<div class="blank0"></div>
	        <div class="control-group tl">
	        	<label class="control-label"></label>
	        	<label class="ui_checkbox" rel="carry_type">
					<input type="checkbox" value="1" name="auto_login" checked="checked" />记住我（下次自动登录）
				</label>
	        </div>     
	        <div class="blank0"></div>
			<div class="control-group"> 
				<label class="title control-label"></label>
				<input type="button" value="登录" name="submit_form" class="ui-button theme_bgcolor" id="btn_do_login" />
				<input type="hidden" value="1" name="ajax" />
			</div>
		</form>
	</div>
	<div class="f_r dl" style="overflow:hidden">
		<div class="dl1">使用其他账号直接登录:</div>
		<?php 
$k = array (
  'name' => 'api_login',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
	</div>
</div>
<!--中间结束-->
<script type="text/javascript">
	$(function(){
		show_tip();
		setTimeout(autofillHide, 100);
		$("#verify").bind("click",function(){
			timenow = new Date().getTime();
			$(this).attr("src",$(this).attr("src")+"?rand="+timenow);
		});
	});
	function autofillHide(){
	 	var obj = $("input[name='email']");
		var text = obj.val();
		if(text){
			$("#user_login_form").find(".holder_tip").hide();
		}
		else{
			$("#user_login_form").find(".holder_tip").show();
		}
	}		
</script>
<div class="blank"></div>