@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Black List Details</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('cust.blacklist.add.act')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('bankcard_no') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">** 银行卡号 </label>

                            <div class="col-md-6">
                                <input id="bankcard_no" type="text" class="form-control" name="bankcard_no" value="{{ old('bankcard_no') }}" required autofocus/>

                                @if ($errors->has('bankcard_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bankcard_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                            <label for="bank_name" class="col-md-4 control-label">** 银行名称 </label>

                            <div class="col-md-6">
<!--<input id="bank_name" type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}" required autofocus>-->
                        <?php /**					
<option value="icbc">中国工商银行</option>
<option value="ccb">中国建设银行</option>
<option value="abc">中国农业银行</option>
<option value="boc">中国银行</option>
<option value="cmb">招商银行</option>
<option value="bocom">交通银行</option>
<option value="cmbc">中国民生银行</option>
<option value="citic">中信银行</option>
<option value="spdb">上海浦东发展银行</option>
<option value="gdb">广东发展银行</option>
<option value="pab">平安银行</option>
<option value="cib">兴业银行</option>
<option value="hxb">华夏银行</option>
<option value="ceb">中国光大银行</option>
<option value="psbc">中国邮政储蓄银行</option>
                         * 
                         */
                        ?>
                                <div class="bank-more-content">
                                    <div class="bank-list" id="J-bank-list">
                                        <label class="img-bank" for="J-bank-name-ICBC">
                                            <input data-id="25" name="bank_name" value="中国工商银行" id="J-bank-name-ICBC" type="radio"> 
                                            <span class="ico-bank ICBC"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CCB">
                                            <input data-id="26" name="bank_name" value="中国建设银行" id="J-bank-name-CCB" type="radio">
                                            <span class="ico-bank CCB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-ABC">
                                            <input data-id="27" name="bank_name" value="中国农业银行" id="J-bank-name-ABC" type="radio">
                                            <span class="ico-bank ABC"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-BOC" alt="BOC" >
                                            <input data-id="28" name="bank_name" value="中国银行" id="J-bank-name-BOC" type="radio">
                                            <span class="ico-bank BOC"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CMB">
                                            <input data-id="29" name="bank_name" value="招商银行" id="J-bank-name-CMB" type="radio">
                                            <span class="ico-bank CMB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-BOCOM">
                                            <input data-id="30" name="bank_name" value="交通银行" id="J-bank-name-BOCOM" type="radio">
                                            <span class="ico-bank BOCOM"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CMBC">
                                            <input data-id="31" name="bank_name" value="中国民生银行" id="J-bank-name-CMBC" type="radio">
                                            <span class="ico-bank CMBC"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CITIC">
                                            <input data-id="32" name="bank_name" value="中信银行" id="J-bank-name-CITIC" type="radio">
                                            <span class="ico-bank CITIC"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-SPDB">
                                            <input data-id="33" name="bank_name" value="上海浦东发展银行" id="J-bank-name-SPDB" type="radio">
                                            <span class="ico-bank SPDB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-GDB">
                                            <input data-id="34" name="bank_name" value="广东发展银行" id="J-bank-name-GDB" type="radio">
                                            <span class="ico-bank GDB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-PAB">
                                            <input data-id="35" name="bank_name" value="平安银行" id="J-bank-name-PAB" type="radio">
                                            <span class="ico-bank PAB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CIB">
                                            <input data-id="37" name="bank_name" value="兴业银行" id="J-bank-name-CIB" type="radio">
                                            <span class="ico-bank CIB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-HXB">
                                            <input data-id="38" name="bank_name" value="华夏银行" id="J-bank-name-HXB" type="radio">
                                            <span class="ico-bank HXB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-CEB">
                                            <input data-id="39" name="bank_name" value="中国光大银行" id="J-bank-name-CEB" type="radio">
                                            <span class="ico-bank CEB"></span>
                                        </label>
                                        <label class="img-bank" for="J-bank-name-PSBC">
                                            <input data-id="40" name="bank_name" value="中国邮政储蓄银行" id="J-bank-name-PSBC" type="radio">
                                            <span class="ico-bank PSBC"></span>
                                        </label>
                                    </div>
                                </div>                                

                                @if ($errors->has('bank_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('card_area') ? ' has-error' : '' }}">
                            <label for="card_area" class="col-md-4 control-label">归属地</label>

                            <div class="col-md-6">
                                <input id="card_area" type="textarea" class="form-control" name="card_area" value="{{ old('card_area') }}">

                                @if ($errors->has('card_area'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('card_area') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('holder_name') ? ' has-error' : '' }}">
                            <label for="holder_name" class="col-md-4 control-label">银行卡持有人名称</label>

                            <div class="col-md-6">
                                <input id="holder_name" type="text" class="form-control" name="holder_name" value="{{ old('holder_name') }}" />

                                @if ($errors->has('holder_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('holder_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('card_type') ? ' has-error' : '' }}">
                            <label for="card_type" class="col-md-4 control-label">银行卡种类</label>

                            <div class="col-md-6">
                                <input id="card_type" type="textarea" class="form-control" name="card_type" value="{{ old('card_type') }}">

                                @if ($errors->has('card_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('card_type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
                            <label for="remark" class="col-md-4 control-label">备注</label>

                            <div class="col-md-6">
                                <input id="remark" type="textarea" class="form-control" name="remark" value="{{ old('remark') }}">

                                @if ($errors->has('remark'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('remark') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
