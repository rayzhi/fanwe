<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['dpagecss'][] = $this->_var['TMPL_REAL']."/css/index.css";
$this->_var['dpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/countUp.min.js";
$this->_var['dcpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/countUp.min.js";
$this->_var['dpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/jquery.SuperSlide.2.1.js";
$this->_var['dcpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/jquery.SuperSlide.2.1.js";
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['dpagecss'],
);
echo $k['name']($k['v']);
?>" />
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['dpagejs'],
  'c' => $this->_var['dcpagejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<style type="text/css">
	.nav_item1 .ui-progress,.nav_item1 .ui-success{height:12px;}
	.nav_item1 .ui-progress span,.ui-success span{height:12px;line-height:12px;font-size:12px;color:#fff;text-align:right;}
	#pin_box{margin-top:0}
	.nav_item .nav_item1 .nav_item2{cursor:pointer;}
</style>
<!--  海报区域开始  -->
<div class="banner slideBox" id="banner">
	<div class="banner_cont effect_bd">
		<ul>
			<?php $_from = $this->_var['image_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'image_item');if (count($_from)):
    foreach ($_from AS $this->_var['image_item']):
?>
			<li><a href="<?php echo $this->_var['image_item']['url']; ?>" target=_blank style="display:block;background: url(<?php echo $this->_var['image_item']['image']; ?>) 50% 50% no-repeat;"></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
	<div class="btn_tit effect_hd">
		<?php $_from = $this->_var['image_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'image_item');if (count($_from)):
    foreach ($_from AS $this->_var['image_item']):
?>
		<span></span>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="fy_box" style="">
		<!--左右翻页按钮，可以不用-->
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
	</div>
</div>
<script type="text/javascript"> 
	if(!$(".banner_cont ul").has('li').length){ 
		$("#banner").css("display","none");
	} 
	
	if($(".banner_cont ul").find('li').length==1){ 
		$(".btn_tit").css("display","none");
	}
	else if($(".banner_cont ul").find('li').length>1){
		$(".btn_tit").css("display","block");
	}
	if($(".banner_cont ul").find('li').length>1){
		jQuery("#banner").slide({mainCell:".banner_cont ul",titCell:".effect_hd span",effect:"leftLoop",easing:"easeInOutQuint",delayTime:500,autoPlay:true});
		$("#banner").mousemove(function(){
			$(this).find(".prev").show();
			$(this).find(".next").show();
		}).mouseout(function(){
			$(this).find(".prev").hide();
			$(this).find(".next").hide();
		});
	}
</script>
<!--  海报区域结束  -->
<div class="adv_index">
	<adv adv_id="index_top" />
</div>
<!-- 统计模块 开始 -->
<div class="index_sum">
	<ul class="sum_wrap">
		<li class="cont_pr sum_money">
			<i></i>
			<span id="sum_money"><?php echo $this->_var['virtual_money']; ?></span>认筹金额
			<input type="hidden" name="sum_money" value="<?php echo $this->_var['virtual_money']; ?>" />
		</li>
		<li class="cont_pr sum_success">
			<i></i>
			<span id="sum_success"><?php echo $this->_var['success_sum']; ?></span>成功项目
			<input type="hidden" name="success_sum" value="<?php echo $this->_var['success_sum']; ?>" />
		</li>
		<li class="cont_pr sum_online">
			<i></i>
			<span id="sum_online"><?php echo $this->_var['virtual_effect']; ?></span>在线项目
			<input type="hidden" name="sum_online" value="<?php echo $this->_var['virtual_effect']; ?>" />
		</li>
		<li class="cont_pr sum_user">
			<i></i>
			<span id="sum_user"><?php echo $this->_var['register_sum']; ?></span>注册会员
			<input type="hidden" name="sum_user" value="<?php echo $this->_var['register_sum']; ?>" />
		</li>
	</ul>
</div>
<!-- 统计模块 结束 -->
<!-- 专题推荐 开始 -->
<div class="index_m index_recommend">
	<div class="wrap">
		<div class="recommend1 hide">
			<a href="" target="_blank"><img src="<?php echo $this->_var['TMPL']; ?>/images/index_re1.jpg" /></a>
			<a href="" target="_blank"><img src="<?php echo $this->_var['TMPL']; ?>/images/index_re1.jpg" /></a>
			<a href="" target="_blank"><img src="<?php echo $this->_var['TMPL']; ?>/images/index_re1.jpg" /></a>
			<a href="" target="_blank" class="last"><img src="<?php echo $this->_var['TMPL']; ?>/images/index_re1.jpg" /></a>
		</div>
		<div class="recommend2">
			<div class="recommend_left recommend_m f_l" id="special_effect">
				<h3 class="index_title">专题项目</h3>
				<div class="special_hd effect_hd">
					<a class="next"><</a>
					<a class="prev">></a>
				</div>
				<div class="special_list effect_bd">
					<ul>
						<?php $_from = $this->_var['deal_special_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'deal_special_item');$this->_foreach['deal_special'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_special']['total'] > 0):
    foreach ($_from AS $this->_var['deal_special_item']):
        $this->_foreach['deal_special']['iteration']++;
?>
						<?php if ($this->_foreach['deal_special']['iteration'] <= 5): ?>
						<li class="item_img">
							<a href="<?php
echo parse_url_tag("u:deal#show|"."id=".$this->_var['deal_special_item']['id']."".""); 
?>" target="_blank">
								<img src="<?php if ($this->_var['deal_special_item']['image'] == ''): ?><?php echo $this->_var['TMPL']; ?>/images/empty_thumb.gif<?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal_special_item']['image'],
  'w' => '590',
  'h' => '413',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" alt="<?php echo $this->_var['deal_special_item']['name']; ?>" lazy="true" />
								<div class="item_info">
									<div class="mask_text">
						                <div class="item_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_special_item']['name'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
						                <div class="other_info">
						                    <span class="every_info info_deal">
						                        <em class="info_num"><?php echo $this->_var['deal_special_item']['percent']; ?>%</em>
						                        <em class="info_name">达成率</em>
						                    </span>
						                    <span class="every_info info_dollar">
						                        <em class="info_num"><?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['deal_special_item']['support_amount'],
  'e' => '2',
);
echo $k['name']($k['v'],$k['e']);
?>/<?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['deal_special_item']['digital_right_amount'],
  'e' => '2',
);
echo $k['name']($k['v'],$k['e']);
?></em>
						                        <em class="info_name">已筹金额/权益份额</em>
						                    </span>
						                    <span class="every_info info_support">
						                        <em class="info_num"><?php echo $this->_var['deal_special_item']['support_count']; ?></em>
						                        <em class="info_name">支持人数</em>
						                    </span>
						                </div>
					                </div>
					                <div class="mask_bg"></div>
					            </div>
							</a>
						</li>
						<?php endif; ?>
			            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		            </ul>
		        </div>
			</div>
			<script type="text/javascript">
				jQuery("#special_effect").slide({titCell:".special_hd ul",mainCell:".special_list ul",autoPage:true,effect:"left",autoPlay:false,vis:1,trigger:"click",easing:"easeOutBack",delayTime:500});
			</script>
			<div class="recommend_right recommend_m f_l">
				<h3 class="index_title">推荐项目</h3>
				<ul>
					<?php $_from = $this->_var['deal_recommend_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'deal_recommend_item');$this->_foreach['deal_recommend'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_recommend']['total'] > 0):
    foreach ($_from AS $this->_var['deal_recommend_item']):
        $this->_foreach['deal_recommend']['iteration']++;
?>
					<?php if ($this->_foreach['deal_recommend']['iteration'] <= 4): ?>
					<li class="<?php if ($this->_foreach['deal_recommend']['iteration'] % 2 == 0): ?>last <?php endif; ?><?php if ($this->_foreach['deal_recommend']['iteration'] % 3 == 0 || $this->_foreach['deal_recommend']['iteration'] % 4 == 0): ?>mb0<?php endif; ?>">
						<a href="<?php
echo parse_url_tag("u:deal#show|"."id=".$this->_var['deal_recommend_item']['id']."".""); 
?>" target="_blank">
							<img src="<?php if ($this->_var['deal_recommend_item']['image'] == ''): ?><?php echo $this->_var['TMPL']; ?>/images/empty_thumb.gif<?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal_recommend_item']['image'],
  'w' => '285',
  'h' => '200',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" alt="<?php echo $this->_var['deal_recommend_item']['name']; ?>" lazy="true" />
							<div class="item_info">
								<div class="mask_text">
					                <div class="item_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_recommend_item']['name'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
					                <div class="other_info">
					                    <span class="every_info info_deal">
					                        <em class="info_num"><?php echo $this->_var['deal_recommend_item']['percent']; ?>%</em>
					                        <em class="info_name">达成率</em>
					                    </span>
					                    <span class="every_info info_dollar">
					                        <em class="info_num"><?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['deal_recommend_item']['support_amount'],
  'e' => '2',
);
echo $k['name']($k['v'],$k['e']);
?>/<?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['deal_recommend_item']['digital_right_amount'],
  'e' => '2',
);
echo $k['name']($k['v'],$k['e']);
?></em>
					                        <em class="info_name">已筹金额/权益份额</em>
					                    </span>
					                    <span class="every_info info_support">
					                        <em class="info_num"><?php echo $this->_var['deal_recommend_item']['support_count']; ?></em>
					                        <em class="info_name">支持人数</em>
					                    </span>
					                </div>
				                </div>
				                <div class="mask_bg"></div>
				            </div>
						</a>
					</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 专题推荐 结束 -->
<div class="index_pro_box">
	<!-- 最新创意 开始 -->
	<div class="index_m index_new">
		<div class="wrap">
			<h3 class="index_title">
			 	<span>|&nbsp;有你，有我，有梦想</span>
			 	<?php if (app_conf ( 'INVEST_STATUS' ) == 0 || app_conf ( 'INVEST_STATUS' ) == 1): ?>
		 			<a href="<?php
echo parse_url_tag("u:deals|"."time=1".""); 
?>" target="_blank" class="more_browse f_r">查看更多</a>
			 	<?php else: ?>
					<a href="<?php
echo parse_url_tag("u:deals|"."type=1&time=1".""); 
?>" target="_blank" class="more_browse f_r">查看更多</a>
			 	<?php endif; ?>
			 	<div class="blank0"></div>
			</h3>
			<div id="pin_box">
			 	<?php if (app_conf ( 'INVEST_STATUS' ) == 0 || app_conf ( 'INVEST_STATUS' ) == 1): ?>
			 		<?php echo $this->fetch('inc/deal_list_index_new_pro.html'); ?> 
			 	<?php else: ?>
				 	<?php echo $this->fetch('inc/deal_list_index_new_invest.html'); ?> 
			 	<?php endif; ?>
			</div>
		</div>
	 </div>
	<!-- 最新创意 结束 -->
	 
	<div class="blank10"></div>
	<!-- 热门投资 开始 -->
	<div class="index_m index_hot">
		<div class="wrap">
			<h3 class="index_title">
			 	<span>|&nbsp;有你，有我，有梦想</span>
			 	<?php if (app_conf ( 'INVEST_STATUS' ) == 1): ?>
	 			 	<a href="<?php
echo parse_url_tag("u:deals|"."focus=1".""); 
?>" target="_blank" class="more_browse f_r">查看更多</a>
				 <?php else: ?>
					<a href="<?php
echo parse_url_tag("u:deals|"."type=1&focus=1".""); 
?>" target="_blank" class="more_browse f_r">查看更多</a>
				 <?php endif; ?>
				<div class="blank0"></div>
			</h3>
			<div id="pin_box">
			 	<?php if (app_conf ( 'INVEST_STATUS' ) == 0 || app_conf ( 'INVEST_STATUS' ) == 2): ?>
				 	<?php echo $this->fetch('inc/deal_list_invest_hot_invest.html'); ?>
		 		<?php else: ?>
		 			<?php echo $this->fetch('inc/deal_list_index_hot_pro.html'); ?>
			 	<?php endif; ?>
			</div>
		</div>
	 </div>
	<!-- 热门投资 结束 -->
 </div>
<!-- 成功项目 开始 -->
<div class="index_m index_success index_pro_box">
	<div class="wrap">
		<h3 class="index_title">他们都成功了</h3>
		<div class="nav_list">
			<?php $_from = $this->_var['deal_success_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'deal_success_item');$this->_foreach['deal_success_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_success_items']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['deal_success_item']):
        $this->_foreach['deal_success_items']['iteration']++;
?>
			<?php if ($this->_foreach['deal_success_items']['iteration'] <= 4): ?>
			<div class="nav_item<?php if ($this->_foreach['deal_success_items']['iteration'] % 4 == 1): ?> first<?php endif; ?>">
				<a href="<?php
echo parse_url_tag("u:deal#show|"."id=".$this->_var['deal_success_item']['id']."".""); 
?>" target="_blank">
					<div class="project_image">
						<img src="<?php if ($this->_var['deal_success_item']['image'] == ''): ?><?php echo $this->_var['TMPL']; ?>/images/empty_thumb.gif<?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal_success_item']['image'],
  'w' => '300',
  'h' => '210',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" alt="<?php echo $this->_var['deal_success_item']['name']; ?>" lazy="true" />
						<?php if ($this->_var['deal_success_item']['type'] == 1): ?>
							<?php if ($this->_var['deal_success_item']['business_descripe']): ?>
							<div class="item_info">
								<div class="mask_text">
					                <div class="item_brief"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_success_item']['business_descripe'],
  'b' => '0',
  'e' => '40',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
					                <div class="blank10"></div>
					                <div class="f_red tc">查看项目</div>
				                </div>
				                <div class="mask_bg"></div>
				            </div>
				            <?php endif; ?>
			            <?php else: ?>
 							<div class="item_info">
								<div class="mask_text">
					                <div class="item_brief"><?php if ($this->_var['deal_success_item']['brief']): ?><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_success_item']['brief'],
  'b' => '0',
  'e' => '40',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?><?php else: ?><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_success_item']['name'],
  'b' => '0',
  'e' => '40',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?><?php endif; ?></div>
					                <div class="blank10"></div>
					                <div class="f_red tc">查看项目</div>
				                </div>
				                <div class="mask_bg"></div>
				            </div>
 			            <?php endif; ?>
			           
						<div class="blank0"></div>
					</div>
					<div class="project_text">
						<span class="project_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['deal_success_item']['name'],
  'b' => '0',
  'e' => '18',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></span>
						<div class="project_num">
							<div class="project_num_l tl">
								<label class="mr5">共筹资</label><span class="f_red"><i class="yen">¥</i><?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['deal_success_item']['support_amount'],
  'e' => '2',
);
echo $k['name']($k['v'],$k['e']);
?></span>
							</div>
							<div class="project_num_r tr">
								<label class="mr5">发起人</label><span><?php echo $this->_var['deal_success_item']['user_name']; ?></span>
							</div>
							<div class="blank0"></div>
						</div>
					</div>
				</a>
			</div>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="blank0"></div>
	</div>
</div>
<!-- 成功项目 结束 -->
<!-- 看看谁加入了 开始 -->
<!-- <div class="index_m reg_user">
	<div class="wrap">
		<h3 class="index_title">看看谁加入了<a href="<?php if ($this->_var['user_info']['id'] > 0): ?><?php
echo parse_url_tag("u:referral#index|"."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:user#register|"."".""); 
?><?php endif; ?>" target="_blank" class="more_browse f_r">加入小伙伴</a></h3>
		<ul class="reg_user_list">
			<?php $_from = $this->_var['invester_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'invester_item');$this->_foreach['invester_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['invester_items']['total'] > 0):
    foreach ($_from AS $this->_var['invester_item']):
        $this->_foreach['invester_items']['iteration']++;
?>
			<?php if ($this->_foreach['invester_items']['iteration'] <= 22): ?>
			<li class="left_o<?php if ($this->_foreach['invester_items']['iteration'] % 11 == 0): ?> last<?php endif; ?>">
				<div class="reg_user_item">
					<div class="user_img f_l">
						<a href="<?php
echo parse_url_tag("u:home|"."id=".$this->_var['invester_item']['id']."".""); 
?>" target="_blank">
		            		<img src="<?php echo $this->_var['invester_item']['image']; ?>" lazy="true" />
		            	</a>
					</div>
					<div class="user_text f_l">
						<div class="user_text_1">
							<a href="<?php
echo parse_url_tag("u:home|"."id=".$this->_var['invester_item']['id']."".""); 
?>" target="_blank" class="inline_user_name user_name">
								<span class="theme_fcolor b"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['invester_item']['user_name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></span>
							</a>
							<?php if ($this->_var['invester_item']['user_level']): ?>
			                	<img src="<?php 
$k = array (
  'name' => 'get_user_lever_icon',
  'v1' => $this->_var['invester_item']['user_level'],
);
echo $k['name']($k['v1']);
?>" alt="会员等级" class="inline_level_icon level_icon" />
							<?php endif; ?>
							<i class="investor_type <?php if ($this->_var['invester_item']['is_investor'] == 0 || $this->_var['invester_item']['is_investor'] == 1): ?>personal_icon<?php else: ?>agency_icon<?php endif; ?>" title="<?php if ($this->_var['invester_item']['is_investor'] == 0 || $this->_var['invester_item']['is_investor'] == 1): ?>个人投资者<?php else: ?>机构投资者<?php endif; ?>"></i>
							<a href="javascript:void(0)" onclick="send_message(<?php echo $this->_var['invester_item']['id']; ?>)" class="inline_btn_send_message btn_send_message theme_fcolor" style="margin-right:0">+发私信</a>
							<div class="blank0"></div>
						</div>
						<div class="user_text_2 brief">
							<?php if ($this->_var['invester_item']['cate_name']): ?>
							<?php $_from = $this->_var['invester_item']['cate_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
								<span><?php echo $this->_var['cate_item']; ?></span>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							<?php else: ?>
							<span>暂无投资领域</span>
							<?php endif; ?>
						</div>
						<div class="user_text_3 seat f_l" style="width:110px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
							<?php if ($this->_var['invester_item']['province']): ?><i class="icon iconfont">&#xe619;</i><?php echo $this->_var['invester_item']['province']; ?>&nbsp;<?php echo $this->_var['invester_item']['city']; ?><?php else: ?>暂无所在地区<?php endif; ?>
						</div>
						<a href="javascript:void(0)" rel="<?php echo $this->_var['invester_item']['id']; ?>" name="recommend_project" class="btn_recommend_project b_radius">自荐项目</a>
					</div>
				</div>
			</li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div> -->
<!-- 看看谁加入了 结束 -->

<!-- 看看谁加入了2 开始 -->
<div class="blank20"></div>
<div class="index_m reg_users">
	<div class="wrap">
		<h3 class="index_title tc">人人都是梦想家，开启圆梦之旅！</h3>
		<div class="index_register_btn tc">
			<a href="<?php if ($this->_var['user_info']['id'] > 0): ?><?php
echo parse_url_tag("u:referral#index|"."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:user#register|"."".""); 
?><?php endif; ?>" target="_blank" class="ui_button ui-center-button theme_bgcolor b f20">加入天使团</a>
		</div>
		<div class="blank20"></div>
		<ul class="reg_users_list">
			<?php $_from = $this->_var['invester_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'invester_item');$this->_foreach['invester_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['invester_items']['total'] > 0):
    foreach ($_from AS $this->_var['invester_item']):
        $this->_foreach['invester_items']['iteration']++;
?>
			<?php if ($this->_foreach['invester_items']['iteration'] <= 7): ?>
			<li class="<?php if ($this->_foreach['invester_items']['iteration'] % 7 == 0): ?>last<?php endif; ?>">
				<a href="<?php
echo parse_url_tag("u:home|"."id=".$this->_var['invester_item']['id']."".""); 
?>" target="_blank" class="reg_user_items">
				<div class="reg_user_item">
					<div class="user_img">
	            		<img src="<?php echo $this->_var['invester_item']['image']; ?>" lazy="true" />
					</div>
					<div class="blank15"></div>
					<div class="user_text">
						<div class="user_text_1">
							<span class="inline_user_name user_name theme_fcolor b"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['invester_item']['user_name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></span>
							<?php if ($this->_var['invester_item']['user_level']): ?>
		                	<img src="<?php 
$k = array (
  'name' => 'get_user_lever_icon',
  'v1' => $this->_var['invester_item']['user_level'],
);
echo $k['name']($k['v1']);
?>" title="会员等级" class="inline_level_icon level_icon" />
							<?php endif; ?>
							<span class="<?php if ($this->_var['invester_item']['is_investor'] > 0): ?>inline_investor_type investor_type <?php endif; ?><?php if ($this->_var['invester_item']['is_investor'] == 1): ?>personal_icon<?php endif; ?><?php if ($this->_var['invester_item']['is_investor'] == 2): ?>agency_icon<?php endif; ?>" title="<?php if ($this->_var['invester_item']['is_investor'] == 1): ?>个人投资者<?php endif; ?><?php if ($this->_var['invester_item']['is_investor'] == 2): ?>机构投资者<?php endif; ?>" style="margin-right:0"></span>
						</div>
						<div class="blank5"></div>
						<div class="user_text_2 brief">
							<?php if ($this->_var['invester_item']['cate_name']): ?>
							<?php $_from = $this->_var['invester_item']['cate_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
								<span><?php echo $this->_var['cate_item']; ?></span>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							<?php else: ?>
							<span>暂无投资领域</span>
							<?php endif; ?>
						</div>
						<div class="user_text_3 seat" style="width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
							<?php if ($this->_var['invester_item']['province']): ?><i class="icon iconfont">&#xe619;</i><?php echo $this->_var['invester_item']['province']; ?>&nbsp;<?php echo $this->_var['invester_item']['city']; ?><?php else: ?>暂无所在地区<?php endif; ?>
						</div>
						<!-- <a href="javascript:void(0)" onclick="send_message(<?php echo $this->_var['invester_item']['id']; ?>)" class="inline_btn_send_message btn_send_message theme_fcolor" style="margin-left:10px">+发私信</a> -->
					</div>
				</div>
				</a>
				<a href="javascript:void(0)" rel="<?php echo $this->_var['invester_item']['id']; ?>" name="recommend_project" class="btn_recommend_project theme_bgcolor">自荐项目</a>
			</li>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>
<!-- 看看谁加入了2 结束 -->
<script type="text/javascript">
(function(){
	// 统计数值滚动
	var options = {
	    useEasing : true, 
	    useGrouping : true, 
	    separator : ',', 
	    decimal : '.', 
	    prefix : '', 
	    suffix : '' 
	};
	var sum_money = new countUp("sum_money", 0, <?php echo $this->_var['virtual_money']; ?>, 2, 2.5, options);
	var sum_success = new countUp("sum_success", 0, <?php echo $this->_var['success_sum']; ?>, 0, 2.5, options);
	var sum_online = new countUp("sum_online", 0, <?php echo $this->_var['virtual_effect']; ?>, 0, 2.5, options);
	var sum_user = new countUp("sum_user", 0, <?php echo $this->_var['register_sum']; ?>, 0, 2.5, options);
	sum_money.start();
	sum_success.start();
	sum_online.start();
	sum_user.start();
})();

// 会员头像列表
(function(){
	$(".reg_users_list li").hover(function(){
 		$(this).stop().animate({height:'209px'},300);
 		$(this).find(".btn_recommend_project").show();
	},function(){
		$(this).stop().animate({height:'185px'},300);
 		$(this).find(".btn_recommend_project").hide();
	});

/*  $(".user_text").hide();
    var $reg_user_list=$(".reg_user_list");
    var $reg_user_list_li=$(".reg_user_list").find("li");
    if($reg_user_list_li.length>=10){
    	$reg_user_list_li.eq(9).removeClass("left_o").addClass("right_o");
    	$reg_user_list_li.eq(10).removeClass("left_o").addClass("right_o");
    	if($reg_user_list_li.length>=21){
    		$reg_user_list_li.eq(20).removeClass("left_o").addClass("right_o");
    		$reg_user_list_li.eq(21).removeClass("left_o").addClass("right_o");
    	}
    }
    $reg_user_list_li.css("zIndex","1");
 	$reg_user_list_li.hover(function(){
		$obj=$(this);
		$obj.css({zIndex:"2"});
		
		$obj.find(".user_img").css("zIndex","101");
 		if($obj.hasClass("left_o")){
 			$obj.prevAll().css("zIndex","3");
		 	$obj.find(".user_text").stop().animate({left:'106'}, {duration:500}).show().css("zIndex","100");
 		}
 		else{
 			$obj.nextAll().css("zIndex","3");
 			$obj.find(".user_text").stop().animate({right:'106'}, {duration:500}).show().css("zIndex","100");
 		}
    },function(){
    	$reg_user_list_li.css("zIndex","1");
    	$obj.css("zIndex","1");
    	if($obj.hasClass("left_o")){
	 		$obj.find(".user_text").stop().animate({left:'106'}, {duration: "fast"}).hide();
   	 		$obj.find(".user_text").animate({left:'-96'}, {duration: 0}).hide();
    	}
    	else{
    		$obj.find(".user_text").stop().animate({right:'106'}, {duration: "fast"}).hide();
   	 		$obj.find(".user_text").animate({right:'-93'}, {duration: 0}).hide();
    	}
    }); */
})();

ajax_get_recommend_project();
//获取会员所有项目列表
function ajax_get_recommend_project(){
	$("a[name='recommend_project']").bind("click",function(){
		if($(this).attr("rel")=='<?php echo $this->_var['user_info']['id']; ?>'){
			$.showErr("不能给自己推荐！");
			return false;
		}
		var ajaxurl ='<?php
echo parse_url_tag("u:ajax#ajax_get_recommend_project|"."".""); 
?>';
		var query=new Object();
		//推荐人id
		query.id='<?php echo $this->_var['user_info']['id']; ?>';
		//被推荐人id
		query.user_id=$(this).attr("rel");
		$.ajax({
			url: ajaxurl,
			dataType: "json",
			data:query,
			type: "POST",
			success:function(ajaxobj){
				if(ajaxobj.status==0){
					show_pop_login();
					return false;
				}
				if(ajaxobj.status==1){
					$.showErr(ajaxobj.info);
					return false;
				}
				if(ajaxobj.status==2){
					$.weeboxs.open(ajaxobj.html, {boxid:'project_recommend_page',contentType:'text',showButton:false, showCancel:false, showOk:false,title:'我的项目',width:480,type:'wee'});
					return false;
				}
			}
		});
	});
}
</script>
<script type="text/javascript">
	if($(".left_time").length){
		leftTimeAct(".left_time");
	}
	if($(".left_times").length){
		leftTimeAct(".left_times");
	}
	// 未开始项目倒计时
    function leftTimeAct(left_time){
    	var leftTimeActInv = null;
		clearTimeout(leftTimeActInv);
		$(left_time).each(function(){
			var leftTime = parseInt($(this).attr("data"));
			if(leftTime > 0)
			{
				var day  =  parseInt(leftTime / 24 /3600);
				var hour = parseInt((leftTime % (24 *3600)) / 3600);
				var min = parseInt((leftTime % 3600) / 60);
				var sec = parseInt((leftTime % 3600) % 60);
				$(this).find(".day").html((day<10?"0"+day:day));
				$(this).find(".hour").html((hour<10?"0"+hour:hour));
				$(this).find(".min").html((min<10?"0"+min:min));
				$(this).find(".sec").html((sec<10?"0"+sec:sec));
				leftTime = leftTime-1;
				$(this).attr("data",leftTime);
			}
			else{
				$(this).parent(".div3").hide();
				$(this).parent(".div3").next().show();
				$(this).parent().parent().parent().find(".left_time_follow").hide();
				return false;
			}
		});
		leftTimeActInv = setTimeout(function(){
			leftTimeAct(left_time);
		},1000);
	}
</script>
<?php echo $this->fetch('inc/footer.html'); ?> 