@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--产品溯源-->
<div class="block" >
	<div class="search">
		<div class="searchFr">
			<span>溯源码查找：</span>
			<input type="text" placeholder="" class="searInp" />
			<input type="submit" value="查询" class="searBtn" />
		</div>
	</div>
	<div class="cont cpsy">
		<div class="table">
			<h2 class="til">生产商信息</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="25%" height="39" bgcolor="#f8f8f8">生产企业</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">负责人</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">联系电话</td>
                <td width="19%" height="39" bgcolor="#f8f8f8">地址</td>
                <td width="11%" height="39" bgcolor="#f8f8f8">采购商</td>
              </tr>
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="19%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="11%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>
	  </div>
      <div class="table">
		<h2 class="til">种子信息</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="25%" height="39" bgcolor="#f8f8f8">种子品种</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">种植日期</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">种子批次</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">种植面积</td>
                <td width="10%" bgcolor="#f8f8f8">采购日期</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">采购量</td>
              </tr>
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>
	  </div>
      <div class="table">
		<h2 class="til">施肥记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">肥料名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用法</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用量</td>
                <td width="45%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>
	  </div>
      <div class="table">
		<h2 class="til">用药记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">药品名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">防治目的</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用法</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用量</td>
                <td width="30%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>
	  </div>
      <div class="table">
		<h2 class="til">检测记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">检测项目</td>
                <td width="9%" bgcolor="#f8f8f8">检测值</td>
                <td width="8%" bgcolor="#f8f8f8">结论</td>
                <td width="14%" height="39" bgcolor="#f8f8f8">检测方式</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">样品数</td>
                <td width="14%" height="39" bgcolor="#f8f8f8">取样地点</td>
                <td width="20%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="9%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="8%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>
	  </div>
      <div class="table">
		<h2 class="til">采集记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">地块</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">批次</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">数量</td>
                <td width="45%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
        </table>
	  </div>
      <div class="table">
		<h2 class="til">销售记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">批次</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">销售商</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">数量</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">规格</td>
                <td width="35%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
        </table>
	  </div>
	</div>
</div>
<!--/end 产品溯源-->
</div>
@stop