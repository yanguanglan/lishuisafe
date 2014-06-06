@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--肥饲料统计-->
<div class="block">
	<div class="search">
		<div class="searchFl">
			<select>
				<option value="2014年度">2014年度</option>
				<option value="2013年度">2013年度</option>
				<option value="2012年度">2012年度</option>
				<option value="2011年度">2011年度</option>
			</select>
			<select>
				<option value="1月">1月</option>
				<option value="1月">1月</option>
				<option value="1月">1月</option>
				<option value="1月">1月</option>
			</select>
		</div>
		<div class="searchFr">
			<span>肥饲料关键字：</span>
			<input type="text" placeholder="" class="searInp" />
			<input type="submit" value="查询" class="searBtn" />
		</div>
	</div>
	<div class="cont jdtj">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td width="91" height="65" align="center" bgcolor="#f7f7f7" class="thHead">
                <span  class="hy">行业</span>
                <span class="xq">县区</span>
            </td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">蔬菜</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">水果</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">茶叶</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">食用菌</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">水产</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">畜禽</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">粮油</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">林特</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">中药材</a></td>
            <td height="65" align="center" bgcolor="#f7f7f7"><a href="fcltjInfo.html" target="_blank">合计</a></td>
          </tr>
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
          <tr>
            <td height="39" align="center" class="td01"><a href="fcltjInfo.html" target="_blank">莲都区</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
            <td height="39" align="center"><a href="fcltjInfo.html" target="_blank">12</a></td>
          </tr>
        </table>

	</div>
</div>
<!--/end 肥饲料统计-->
</div>
@stop