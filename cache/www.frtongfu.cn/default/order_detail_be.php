<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="http://www.frtongfu.cn/themes/default/__RESOURCE__/plus/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="http://www.frtongfu.cn/themes/default/__RESOURCE__/plus/css/style_normal.css">
         
	<script type="text/javascript" src="http://www.frtongfu.cn/themes/default/__RESOURCE__/js/jquery-1.11.3.min.js"></script>   
	
	<script src="http://www.frtongfu.cn/themes/default/__RESOURCE__/alert/jquery-confirm.min.js" type="text/javascript"></script>
	<link href="http://www.frtongfu.cn/themes/default/__RESOURCE__/alert/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
<title>订单详情</title>

<style type="text/css">
    body {margin:0px; background:#efefef; -moz-appearance:none;}


    .detail_topbar {height:75px; background:#5f6e8b; padding:15px;}
    .detail_topbar .ico {height:70px; width:30px; line-height:34px; float:left; font-size:26px; text-align:center; color:#fff;}
    .detail_topbar .tips {height:70px;  margin-left:10px; font-size:13px; color:#fff; line-height:17px;}
    
    
    .detail_user {height:90px;  background:#fff; padding:5px; border-bottom:1px solid #eaeaea;}
    .detail_user .info .ico { float:left;  height:50px; width:30px; line-height:50px; font-size:26px; text-align:center; color:#666}
    .detail_user .info .info1 {height:54px; width:100%; float:left;margin-left:-30px;margin-right:-30px;}
    .detail_user .info .info1 .inner { margin-left:30px;margin-right:30px;overflow:hidden;}
    .detail_user .info .info1 .inner .user {height:30px; width:100%; font-size:16px; color:#333; line-height:30px;overflow:hidden;}
    .detail_user .info .info1 .inner .address {height:20px; width:100%; font-size:14px; color:#999; line-height:20px;overflow:hidden;}
    .detail_user .info .ico2 {height:50px; width:30px;padding-top:15px; float:right; font-size:16px; text-align:right; color:#999;}

    .detail_exp {height:42px; width:94%; background:#fff; padding:0px 3%; border-bottom:1px solid #eaeaea; line-height:42px; font-size:16px; color:#333;}
    .detail_exp .t1 {height:42px; width:auto; float:left;}
    .detail_exp .t2 {height:42px; width:auto; float:right;}
    .detail_exp .ico {height:42px; width:10%; float:right;text-align:right;color:#999; font-size:16px;margin-top:5px; }
    
    .detail_good {height:auto;padding:10px;background:#fff;  margin-top:16px; border-top:1px solid #eaeaea;}
    .detail_good .ico {height:6px; width:10%; line-height:36px; float:left; text-align:center;}
    .detail_good .shop {height:36px; width:90%; padding-left:10%; border-bottom:1px solid #eaeaea; line-height:36px; font-size:18px; color:#333;}
    .detail_good .good {height:50px; width:100%; padding:10px 0px; border-bottom:1px solid #eaeaea;}
    .detail_good .img {height:50px; width:50px; float:left;}
    .detail_good .img img {height:100%; width:100%;}
    .detail_good .info {width:100%;float:left; margin-left:-50px;margin-right:-60px;}
    .detail_good .info .inner { margin-left:60px;margin-right:60px; }
    .detail_good .info .inner .name {height:32px; width:100%; float:left; font-size:12px; color:#555;overflow:hidden;}
    .detail_good .info .inner .option {height:16px; width:100%; float:left; font-size:12px; color:#888;overflow:hidden;word-break: break-all}
    .detail_good span { color:#666;}
    .detail_good .price { float:right;width:60px;;height:54px;margin-left:-60px;;}
    .detail_good .price .pnum { height:20px;width:100%;text-align:right;font-size:14px; }
    .detail_good .price .num { height:20px;width:100%;text-align:right;}
    
    .detail_price {height:auto; padding:10px; padding-bottom:20px;  background:#fff;   }
    .detail_price .price {height:auto; width:100%; }
    .detail_price .price .line {height:26px; width:100%; font-size:13px; color:#666; line-height:26px;}
    .detail_price .price .line span {height:26px; width:auto; float:right;}
    
   
    .detail_pay {height:60px; width:94%; background:#fff; padding:0px 3%; margin-top:30px; border-top:1px solid #eaeaea;position:fixed;bottom:0px}
    .detail_pay span {height:60px; width:auto; margin-right:16px; float:right; line-height:60px; color:#ff771b; font-size:16px;}
    .detail_pay .paysub {height:38px; width:auto;margin-left:5px; background:#ff771b; padding:0px 10px; margin-top:10px; border-radius:5px; color:#fff; line-height:38px; float:right;}
    
    .detail_pay .paysub1 {height:38px; width:auto; margin-left:5px;background:#fff; padding:0px 10px; margin-top:10px; border-radius:5px; color:#5f6e8b; line-height:38px; float:right;border:1px solid #5f6e8b;}
       
       
    .chooser {height: 100%; width: 100%; background:#efefef; position: fixed; top: 0px; right: -100%; z-index: 1;}
    .chooser .address {height:50px; width:94%; background:#fff; padding:10px 3%; border-bottom:1px solid #eaeaea;}
    .chooser .address .ico {height:50px; width:10%; line-height:50px; float:left; font-size:20px; text-align:center; color:#999;}
    .chooser .address .info {height:50px; width:77%; margin-right:3%; float:left;}
    .chooser .address .info .name {height:28px; width:100%; font-size:16px; color:#666; line-height:28px;}
    .chooser .address .info .addr {height:22px; width:100%; font-size:14px; color:#999; line-height:22px;}
    .chooser .address .edit {height:50px; width:10%; float:left; }

    .chooser .add_address {height:44px; width:94%; background:#fff; padding:0px 3%; border-bottom:1px solid #eaeaea; line-height:44px; font-size:16px; color:#666;}
    
    .detail_nav { height:30px; width:94%;padding:10px;}
    .detail_nav .nav { padding:2px 5px 2px 5px;; border:1px solid #5f6e8b; color:#5f6e8b; background:#fff; float:left; margin-left:10px;}
    .detail_nav .selected { border:1px solid #ff6600; color:#ff6600; }
    
.address_main {height:100%; width:94%; background:#fff; padding:0px 3%;  position: fixed; top: 0px; right: -100%; z-index: 1;}
.address_main .line {height:44px; width:100%; border-bottom:1px solid #f0f0f0; line-height:44px;}

.address_main .line input {float:left; height:44px; width:100%; padding:0px; margin:0px; border:0px; outline:none; font-size:16px; color:#666;padding-left:5px;}
.address_main .line select  { border:none;height:25px;width:100%;color:#666;font-size:16px;}
.address_main .address_sub1 {height:44px; width:94%; margin:14px 3% 0px; background:#ff4f4f; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}
.address_main .address_sub2 {height:44px; width:94%; margin:14px 3% 0px; background:#ddd; border-radius:4px; text-align:center; font-size:18px; line-height:44px; color:#666; border:1px solid #d4d4d4;}
select { width:100px;height:40px;position:absolute;left:0; -webkit-appearance: none;background:#fff; -webkit-tap-highlight-color: transparent;filter:alpha(Opacity=0); opacity: 0;};
 
.stores {overflow:hidden;background:#fff;}
.store {height:65px;  background:#fff; padding:5px; border-bottom:1px solid #eaeaea;}
.store .info .ico { float:left;  height:50px; width:30px; line-height:30px; font-size:16px; text-align:center; color:#666}
.store .info .info1 {height:54px; width:100%; float:left;margin-left:-30px;margin-right:-60px;}
.store .info .info1 .inner { margin-left:30px;margin-right:60px;overflow:hidden;}
.store .info .info1 .inner .user {height:25px; width:100%; font-size:14px; color:#333; line-height:25px;overflow:hidden;}
.store .info .info1 .inner .tel {height:20px; width:100%; font-size:13px; color:#999; line-height:20px;overflow:hidden;}
.store .info .info1 .inner .address {height:20px; width:100%; font-size:13px; color:#999; line-height:20px;overflow:hidden;}
.store .info .ico2 {height:50px; width:30px;padding-top:15px; float:right; font-size:24px; text-align:center; color:#ccc;}
.store .info .ico3 {height:50px; width:30px;padding-top:15px; float:right; font-size:24px; text-align:center; color:#ccc;} 
.store_title {height:44px; width:94%; overflow: hidden; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #eaeaea; border-top:1px solid #eaeaea; line-height:44px; color:#666; font-size:14px;} 
.store_more {height:20px;  background:#fff; font-size:14px; color:#999; line-height:20px; padding:5px; border-bottom:1px solid #eaeaea; text-align: center;}
.page_topbar .nav { position:absolute;right:5px;;color:#333;}

.detail_good .text { padding:10px; color:#666;font-size:13px;}


 .goodbtn {
    height: 30px;
    width: auto;
    margin-left: 5px;
    background: #ff771b;
    padding: 0px 10px;
      margin-top: 3px;
    border-radius: 5px;
    color: #fff;
    line-height: 30px;
    float: right;
}
</style>
<div id='container'></div>
<div class="page_topbar" style="background: #008cd7;">
    <a href="<?php  echo mobile_url('myorder',array('status'=>1))?>" class="back"><i   style="color: #fff;"  class="fa fa-angle-left"></i></a>
    <div class="title"  style="color: #fff;" >订单详情</div>
</div>
<div class="detail_topbar">
    <div class="ico"><i class="fa fa-file-text-o"></i></div>
    <div class="tips">
    	订单编号：<?php  echo $shoporder['be_ordersn'];?><br/>支付单号：<?php  echo $shoporder['ordersn'].'-'.$shoporder['id'];?><br/>
    	订单状态：<?php  if($shoporder['be_hasrest']==1) { ?>部分退换货
        	  				<?php  }else{  ?><?php  echo getOrderStatusStr(2,$shoporder['be_status'],0);?><?php  }  ?>
    	<br/><span>订单金额(含运费): ￥<?php  echo $shoporder['be_goodsprice']+$shoporder['be_dispatchprice'];?><span><br/>
        <span>运费: ￥<?php  echo $shoporder['be_dispatchprice'];?><span>
    	
    	</div>
</div>
				<?php  if(!empty($shoporder['isverify'])){?>
    <div class="detail_user">
        <div class="info" >
            <div class="ico"><i class="fa fa-user"></i></div>
                <div class='info1' >
                     <div class='inner'>
                         <div class="user">联系人:  <?php  echo $shoporder['address_realname'];?></div>
                         <div class="address">联系电话: <span id='carrier_address'><?php  echo $shoporder['address_mobile'];?></span></div>
                     </div>
                 </div>
            </div>
          </div>
    </div>
	<?php  }else{ ?>

	<div class="detail_user">
	    <div class="info">
        <div class="ico"><i class="fa fa-map-marker"></i></div>
         <div class='info1'>
                 <div class='inner' >
                        <div class="user">收件人：<span id='address_realname'><?php  echo $shoporder['address_realname'];?></span></div>
                        <div class="user">联系电话：<span id='address_mobile'><?php  echo $shoporder['address_mobile'];?></span></div>
                        <div class="address"><span id='address_address'><?php  echo $shoporder['address_province'];?> <?php  echo $shoporder['address_city'];?> <?php  echo $shoporder['address_area'];?> <?php  echo $shoporder['address_address'];?></span></div>
                 </div>
             </div>
   
    </div>
</div>
	
	<?php  } ?>
	  <?php  if($shoporder['be_status'] >1&&(!empty($shoporder['be_expresscom'])||!empty($shoporder['be_expresssn']))) { ?>
	<div class="detail_good" style='margin-bottom:10px;'>
    <div class="ico"><i class="fa fa-cubes" style="color:#666; font-size:20px;"></i></div>
    <div class="shop">发货信息</div>
    <div class='text'>发货方式：<?php  echo $shoporder['be_expresscom'];?></div>
    <div class='text'>快递单号：<?php  echo $shoporder['be_expresssn'];?>
	<?php  if(!empty($shoporder['be_expresssn'])&&!empty($shoporder['be_express'])&&$shoporder['be_express']!='-1') { ?> 
	<a  href="http://m.kuaidi100.com/index_all.html?type=<?php  echo $shoporder['be_express']?>&postid=<?php  echo $shoporder['be_expresssn']?>#input"  >[查看物流信息]
</a><?php }?></div>
</div> 
	  <?php  }  ?>
	
	
	
	
			  <?php  if(!empty($shoporder['is_be'])) { ?>
	<div class="detail_good">
    <div class="ico"><i class="fa fa-gift" style="color:#666; font-size:20px;"></i></div>
    <div class="shop"><?php  $store=getStoreBeid($shoporder['beid']);echo $store['sname'];?></div>
  	<?php  $be_all_price=0;if(is_array($be_allgoods)) { foreach($be_allgoods as $item) { ?>
        				<?php $be_all_price=$be_all_price+$item['totalprice'];?>
     <div class="good">
            <div class="img"  onclick="location.href='<?php  echo mobile_url('detail',array('id'=>$item['goodsid']))?>'"><img src="<?php echo ATTACHMENT_WEBROOT;?><?php  echo $item['thumb']?>"/></div>
            <div class='info' onclick="location.href='<?php  echo mobile_url('detail',array('id'=>$item['goodsid']))?>'">
                <div class='inner'>
                       <div class="name"><?php  echo $item['title'];?>
                       	 	<?php  if($item['status']==1&&$item['restatus']==1) { ?>
                       	 		[<span style="color:green">已换货</span>]
   			<?php  } ?>
                       	           	<?php  if($item['status']==-3) { ?>
   			[<span style="color:red">换货中</span>]
   			<?php  } ?>
   			
   			 			<?php  if($item['status']==-7) { ?>
   			[<span style="color:red">换货中</span>]
   			<?php  } ?>
   			
   			 			<?php  if($item['status']==-4) { ?>
   			[<span style="color:red">退货中</span>]
   			<?php  } ?>
   			 			<?php  if($item['status']==-5) { ?>
   			[<span style="color:red">已退货</span>]<?php  if($item['status']==-5) { ?>	<?php  if($item['be_return_money'] ==2) { ?><?php  if(empty($item['returnmoneytype'])) { ?>退款到余额：<?php  echo $item['returnmoney']; ?>元<?php  }else{ ?>已退款：<?php  echo $item['returnmoney']; ?>元<?php  }?><?php  }else{ ?>[<span style="color:red">待退款</span>]<?php  } ?>	<?php  } ?>
						
   			<?php  } ?>
                       	</div>     
                       <div class='option'>	 <?php  if(!empty($item['optionname'])) { ?>规格:  <?php  echo $item['optionname'];?><?php  } ?></div>
                </div>
            </div>
            <div class="price">
                <div class='pnum'><span class='marketprice'>￥<?php  echo $item['price'];?></span></div>
                <div class='pnum'><span class='total'>×<?php  echo $item['total'];?></span></div>
            </div>
        </div> 	<?php  if($item['status']==1||(empty($item['iscomment'])&&$shoporder['status']!=0)) { ?>
        <div style="border-bottom: 1px solid #eaeaea;height:35px">
        		 	
        		 		<?php  if(empty($item['iscomment'])&&$item['status']>0) { ?> 
				
				 	 <div class="goodbtn" style="    background: green;"  onclick="location.href='<?php  echo mobile_url('myorder', array('orderid' =>  $shoporder['id'],'ogsid' =>$item['id'],'optionid'=>$item['optionid'], 'op' => 'returncomment', 'fromstatus' => intval($_GP['fromstatus'])))?>';">商品评论</div>
	<?php  } ?>
	
	
	
        		 	 		<?php  if($item['status']==1&&($item['updatetime'])>(time()-($rebacktime * 24 * 60 * 60))) { ?> 
        		 	 		 	 <div class="goodbtn" style="background: blue;" onclick="location.href='<?php  echo mobile_url('myorder', array('orderid' =>  $shoporder['id'],'ogsid' =>$item['id'],'optionid'=>$item['optionid'], 'op' => 'resendgood','is_system'=>1))?>';">商品换货</div>
   			
        		 	 		
        	 <div class="goodbtn"  onclick="location.href='<?php  echo mobile_url('myorder', array('orderid' =>  $shoporder['id'],'ogsid' =>$item['id'],'optionid'=>$item['optionid'], 'op' => 'returngood','is_system'=>1))?>';">申请退货</div>
   			<?php  } ?>
   			
   					<?php  if($item['status'] == -7) { ?>
   						 		 	 <div class="goodbtn" style="background: red;" onclick="location.href='<?php  echo mobile_url('myorder', array('orderid' =>  $shoporder['id'],'ogsid' =>$item['id'],'optionid'=>$item['optionid'], 'op' => 'returnnewgood'))?>';">确认收货</div>
   			<?php  } ?>
        	</div>	<?php  } ?>
				<?php  } } ?>
</div> 

<div class="detail_price" >
    <input type="hidden" id="weight" value="<%weight%>" />
    <div class="price">
        <div class="line">商品小计:<span>￥<span class='goodsprice'><?php echo $shoporder['be_goodsprice'];?></span></span></div>
        	
        <div class="line">运费:<span>￥<span class='dispatchprice'><?php echo $shoporder['be_dispatchprice'];?></span></span></div>
      
		
        <div class="line">合计(含运费):<span><span class='dispatchprice' style='color:#ff6600'>￥<?php echo $shoporder['be_goodsprice']+$shoporder['be_dispatchprice'];?></span></span></div>
      <?php  if($shoporder['be_status']==-6) { ?>

       <div class="line" style='color:#ff6600'>退款金额:<span><span class='dispatchprice' style='color:#ff6600'>￥<?php echo $shoporder['be_returnmoney'];?></span></span></div>
      			<?php  } ?>
      </div> 
</div>

  <?php  }  ?>
	
	
	
     <div style="height:80px;"></div>
     
<div class="detail_pay">
	 <div  style="float: left;height: 38px;margin-top: 20px;padding: 0px 10px;">订单金额：<span style="height: 30px;margin-right: 0px;line-height: 20px;"><?php echo $shoporder['be_goodsprice']+$shoporder['be_dispatchprice'];?>元</span></div>
	<?php  if($shoporder['be_status']==2) { ?>
        	      <div class="paysub"  onclick="$.confirm({title: '',content: '确认收货？',  confirm: function(){location.href='<?php  echo create_url('mobile',array('name' => 'shopwap','do' => 'myorder','op'=>'be_confirm','orderid' => $shoporder['id']))?>'; }})">确认收货</div>
            	

            			<?php  } ?>
            			
            		<?php  if($shoporder['be_status']==0&&$shoporder['status'] == 1) { ?>

	 <!--<div class="paysub"  onclick="$.confirm({title: '',content: '确认申请退款？',  confirm: function(){location.href='<?php  echo mobile_url('myorder', array('orderid' => $shoporder['id'], 'op' => 'be_returnpay'))?>'; }});	">申请退款</div>-->
            	
			<?php  } ?>
            			
</div>
	
</body>
</html>
