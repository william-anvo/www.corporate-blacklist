@extends('layouts.header')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
   
<div class="panel-heading">银行卡黑名单
@if (Auth::user()->is_admin == '1')
<!--                        <tr>
                            <td rowspan="auto">-->
                                <b><a href="{{ route('cust.blacklist.add.show') }}" onclick="event.preventDefault(); document.getElementById('cust.blacklist.add.show').submit();">
                                        <button class="text" style="float: right">
                                           添加【用户卡】黑名单
                                        </button> 
                                </a></b>
                                <form id="cust.blacklist.add.show" action="{{ route('cust.blacklist.add.show') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>                                  
<!--                            </td>
                        </tr>-->
@endif   
</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td><b><label data-toggle="tooltip" data-placement="left" title="最后4位数字">银行卡号</b> </label>&nbsp;&nbsp;<input type="text" placeholder="  --最后4位数字--"  maxlength="4"/></td>
                             <td><b><label>银行卡持有人姓名 </label>&nbsp;&nbsp;<input type="text" placeholder="" maxlength="10"/></b></td>
                            <td>
                                <b><label>被黑原因 </label>
                                    <select style="width: 150px">
                                        <option selected=""> --- </option>
                                        <option>黑客/恶意 </option>
                                        <option>投诉盗刷</option>
                                        <option>其它..</option>
                                    </select>
                                </b>                            
                            </td>     
                  
                        </tr>    
                        <tr>
                            <td><b><label>银行名</label>&nbsp;&nbsp;
                                    <select class="input">
                                        <option selected=""> --- </option>
                                        <option value="1">中国工商银行</option>
                                        <option value="2">中国建设银行</option>
                                        <option value="3">中国农业银行</option>
                                        <option value="4">中国银行</option>
                                        <option value="5">招商银行</option>
                                        <option value="6">交通银行</option>
                                        <option value="7">中国民生银行</option>
                                        <option value="8">中信银行</option>
                                        <option value="9">浦发银行</option>
                                        <option value="10">广发银行</option>
                                        <option value="11">平安银行</option>
                                        <option value="12">兴业银行</option>
                                        <option value="13">华夏银行</option>
                                        <option value="14">中国光大银行</option>
                                        <option value="15">中国邮政储蓄银行</option>
                                    </select>
                                </b>
                            </td>
                            <td><b><label>省市区  </label>
                                    <select>
                                        <option selected=""> --- </option>
                                        <option>北京</option>
                                        <option>天津</option>
                                        <option>河北</option>
                                        <option>山西</option>
                                        <option>内蒙古</option>
                                        <option>辽宁</option>
                                        <option>吉林</option>
                                        <option>黑龙江</option>
                                        <option>上海</option>
                                        <option>江苏</option>
                                        <option>浙江省</option>
                                        <option>安徽</option>
                                        <option>福建</option>
                                        <option>江西</option>
                                        <option>山东</option>
                                        <option>河南</option>
                                        <option>湖北</option>
                                        <option>湖南</option>
                                        <option>广东</option>
                                        <option>广西</option>
                                        <option>海南</option>
                                        <option>重庆</option>
                                        <option>四川</option>
                                        <option>贵州</option>
                                        <option>云南</option>
                                        <option>西藏</option>
                                        <option>陕西</option>
                                        <option>甘肃省</option>
                                        <option>青海</option>
                                        <option>宁夏</option>
                                        <option>新疆</option>
                                        <option>台湾</option>
                                        <option>香港特别行政区</option>
                                        <option>澳门</option>
                                    </select></b>
                            </td>
                            <td>
                                <b><label>银行卡类</label>
                                    <select style="width: 150px">
                                        <option selected=""> --- </option>
                                        <option>借记卡</option>
                                        <option>其它</option>
                                    </select>
                                </b>                            
                            </td>     
                        </tr>                        
                        <tr>

                            <td colspan="3"><b><button class="text">搜索 / <font style="font-size: 8px">Search</font></button></b></td>   
                        </tr>
                  
                    </table>
<!--                    <table class="table">
                        <tr>
                            <td><b>银行卡号 |      <font style="font-size: 10px"> Card No           </font></b></td>
                            <td><b>银行卡开户区 |   <font style="font-size: 10px"> Card Issued Place    </font></b></td>
                            <td><b>银行卡持有人 |   <font style="font-size: 10px"> Name_(ID)        </font></td>                            
                            <td><b>备注 |         <font style="font-size: 10px"> Remark         </font></b></td>                            
                        </tr>
                    </table>    -->
{{--  ----------------------------------------------------- --}}           
<div class="divTable" style="width: 100%; border: 0px solid #fff;">
    <div class="divTableBody">
        <div class="divTableRow">
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="No" style="text-decoration:none">No</a></b>
            </div>            
            <div class="divTableHead" style="background-color:  #E5E4E2">      
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Division" style="text-decoration:none">中心</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Card No" style="text-decoration:none">卡号</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Banker" style="text-decoration:none">银行</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Card Area" style="text-decoration:none">省市区</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Card Type" style="text-decoration:none">银行卡类</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Holder Name_(ID)" style="text-decoration:none">持卡人</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Remark" style="text-decoration:none">备注</a></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b><a href="#" data-toggle="tooltip" data-placement="left" title="Updated At" style="text-decoration:none">更新时间</a></b>
            </div>
        </div>
        
<!-- DivTable.com START -->
<!--        <div class="divTableRow">
            <div class="divTableCell" style="width: 15%;text-align: center">
               LGV
            </div>
            <div class="divTableCell" style="width: 20%">
               463 XXXX XXXX XXXX 5838
            </div>
            <div class="divTableCell" style="width: 13%">
              中国邮政储蓄银行
            </div>
            <div class="divTableCell" style="width: 22%">
               黄晓明
            </div>
            <div class="divTableCell" style="width: 18%">
              
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" role="button" style="padding-top: 1px !important;padding-bottom: 1px !important;" aria-expanded="false" class="dropdown-toggle">
                            备注详情<span class="caret"></span></a> 
                        <ul role="menu" class="dropdown-menu remark"> 
                            <li>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
                            <li>XXXXXXXXXXXXXXXXXXX館</li>
                            <li>黑名单XX</li>
                            <li>黑名单2</li>
                            <li>黑名单1</li>
                        </ul>
                    </li>
                </ul>
            
            </div>            

        </div>-->
<!-- DivTable.com -->

@foreach ($blacklistings as $blacklisting)
<!-- DivTable.com -->
<!-- DivTable.com START -->
        <div class="divTableRow" >
            <div class="divTableHead" style="width: 1%;background-color:  #E5E4E2">
                {{$loop->iteration + $skipped}}    
            </div>             
            <div class="divTableCell" style="width: 6%;text-align: center">
               {{$blacklisting->division}}
            </div>
            <div class="divTableCell" style="width: 20%">
               {{$blacklisting->bankcard_no}}
            </div>
            <div class="divTableCell" style="width: 15%">
              {{$blacklisting->bank_name}}
            </div>
            <div class="divTableCell" style="width: 9%">
              {{$blacklisting->card_area}}
            </div>
            <div class="divTableCell" style="width: 10%">
              {{$blacklisting->card_type}}
            </div>
            <div class="divTableCell" style="width: 9%">
               {{$blacklisting->holder_name}}
            </div>
            
            
            <div class="divTableCell" style="width: 13%">
              
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" role="button" style="padding-top: 1px !important;padding-bottom: 1px !important;" aria-expanded="false" class="dropdown-toggle">
                            备注详情<span class="caret"></span></a> 
                        <ul role="menu" class="dropdown-menu remark"> 

                            <li>{{$blacklisting->remark}}</li>

                        </ul>
                    </li>
                </ul>
            
            </div>            
            <div class="divTableCell" style="width: 20%">
               {{date('Y-m-d | H:i',strtotime($blacklisting->updated_at))}}
            </div>
            
        </div>
<!-- DivTable.com -->
@endforeach
    </div>
</div>


<div><span style="float: left">{!!$blacklistings->render()!!}</span> <span class="pagination" style="float: right"><b>{!!$sumCountRecord!!}</b> x记录</span></div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
$('.date').datepicker({  
       format: 'mm-dd-yyyy'
     }); 
     
</script>
@endsection
