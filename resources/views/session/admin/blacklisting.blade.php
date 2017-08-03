@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">银行卡黑名单</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td><b><label>银行卡号</label>&nbsp;&nbsp;<input type="text" class="text" placeholder=""/></b></td>
                            <td><b><label>银行卡持有人姓名</label>&nbsp;&nbsp;<input type="text" class="text" placeholder=""/></b></td>
<!--                            <td><b><label>银行名</label>&nbsp;&nbsp;<input type="text" class="text" placeholder=""/></b></td>
                            <td><b><label>--</label>&nbsp;&nbsp;<input type="text" class="text" placeholder=""/></b></td>-->
<!--                            <td><b><label>省市区 : </label><br/><select>
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
                                    </select>-->
                                </b></td>
                                                         
                        </tr>                 
                        <tr>

                            <td rowspan="auto"><b><button class="text">搜索 / <font style="font-size: 8px">Search</font></button></b></td>   
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
                <b>银行卡号 |      <font style="font-size: 10px"> Card No           </font></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b>银行 |      <font style="font-size: 10px"> Banker          </font></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b>银行卡开户区 |   <font style="font-size: 10px"> Issued Place    </font></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b>银行卡持有人 |   <font style="font-size: 10px"> Name_(ID)         </font></b>
            </div>
            <div class="divTableHead" style="background-color:  #E5E4E2">
                <b>备注 |         <font style="font-size: 10px"> Remark         </font></b>    
            </div>
        </div>

        <div class="divTableRow" >
            <div class="divTableCell" style="width: 30%">
               46346578545685858
            </div>
            <div class="divTableCell" style="width: 20%">
              式認経記館
            </div>
            <div class="divTableCell" style="width: 20%">
               式認経記館
            </div>
            <div class="divTableCell" style="width: 30%">
              
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" role="button" style="padding-top: 1px !important;padding-bottom: 1px !important;" aria-expanded="false" class="dropdown-toggle">
                            备注详情<span class="caret"></span></a> 
                        <ul role="menu" class="dropdown-menu remark"> 
                            <li>式認経記館式認経記館式認経記館式認経記館式認経記館式認経記館式認経記館式</li>
                            <li>式認経記館</li>
                            <li>認経記館式認経記館式認経記館式認経記館式認経記館式認経記館式</li>
                            <li>式認経記館</li>
                            <li>式認経記館</li>
                        </ul>
                    </li>
                </ul>
            
            </div>            

        </div>
    </div>
</div>
<!-- DivTable.com -->

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection