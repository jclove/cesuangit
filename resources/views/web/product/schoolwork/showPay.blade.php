@extends('web.layout.body')

@section('title', $product_info->name)

@section('css')
<style>
    .luckYear{
        background: #f1e8e1;
    }
    .result_list h3{
        color: #f6c02a;
    }
    .result_list .listMain ul{
        width: 5.5rem;
        left: 0.9rem;
        top: 0.5rem;
    }
    .result_list .listMain ul li span{
        background: #F6C02A;
    }
</style>
@endsection

@section('body')
    <img src="/images/schoolwork/showPayTop1.png?imageslim" onclick="return false;"/>
    <div class="showPayMain luckYear">
        <div class="info">
            <div class="fl bir_img">
                <img src="/images/startup/showPayTop2.png?imageslim" onclick="return false;">
                <p>{{$order_info['sex'] == 1 ? '男' : '女'}}主<br/>资料</p>
            </div>
            <div class="fr user-info">
                <ul>
                    <li>
                        <span class="color_fate">姓名：</span>
                        {{$order_info['realname'] }}&nbsp;&nbsp;({{$other_user_info['constellation']}}座)
                    </li>
                    <li>
                        <span class="color_fate">公历：</span>
                        {{$other_user_info['gregorian_year'] }}年{{$other_user_info['gregorian_month']}}
                        月{{$other_user_info['gregorian_day']}}日
                        ({{$other_user_info['week_name']}})
                    </li>
                    <li>
                        <span class="color_fate">农历：</span>
                        {{$other_user_info['lunar_year'] }}年{{$other_user_info['lunar_month']}}
                        月{{$other_user_info['lunar_day']}}日
                        ({{$other_user_info['lunar_month_chinese']}}{{$other_user_info['lunar_day_chinese']}})
                    </li>
                    <li>
                        <span class="color_fate">生辰：</span>
                        {{ $bir_time_config[$order_info['birthtime']] }}
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div id="payMain">
            <div class="payMain marginT20" id="showPayMain">
                <p>
                    已有<span class="color_lover">327120</span>人进行了测算，<span class="color_lover">96%</span>的用户认为测算结果对职场事业和财富生活产生了巨大帮助！
                </p>
                <img class="line" src="/images/luckYear/showPayTop4.png?imageslim"
                     onclick="return false;">
                <div class="priceArea">
                    <span class="price">原价：{{$order_info['price']}}元 </span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="total_fee">限时优惠：<span class="color_lover" style="color: #f27979;">{{ $order_info['total_fee'] }}元</span></span>
                </div>
                <div class="pay">
                    @if($is_weixin == 'yes')
                        <img class="payBut" src="/images/luckYear/wechatPay.png">
                    @else
                        <p>请选择支付方式</p>
                        <a href="{{ route('web.pay.wechat') }}" {{ $is_mobile == false ? 'target="_blank"' : ''}}>
                            <img class="" src="/images/luckYear/wechatPay.png" alt="">
                        </a>
                        <!--<a href="{{ route('web.pay.alipay') }}" {{ $is_mobile == false ? 'target="_blank"' : ''}}>
                            <img class="" src="/images/luckYear/alipay.png" alt="">
                        </a>-->
                    @endif
                </div>
            </div>
        </div>

        <img class="marginT30" src="/images/startup/showPayTop3.png?imageslim"
             onclick="return false;">


        <div class="result_list">
            <h3><img src="/images/startup/showPayTop4.png?imageslim" style="width: 0.7rem;vertical-align:top;" onclick="return false;">全面剖析你的学业状况
            </h3>
            <div class="listMain">
                <img src="/images/startup/showPayTop5.png?imageslim" onclick="return false;">
                <ul>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;如何获得同学、家长的帮助？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;成长对你学业的影响？</li>
                </ul>
                <div class="payBut"></div>
            </div>
        </div>

        <div class="result_list">
            <h3><img src="/images/startup/showPayTop4.png?imageslim" style="width: 0.7rem;vertical-align:top;" onclick="return false;">你学业上的问题与建议
            </h3>
            <div class="listMain">
                <img src="/images/startup/showPayTop5.png?imageslim" onclick="return false;">
                <ul>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;你的学习中会遇到哪些问题？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;如何扬长避短，发挥自身优势？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;如何运用正确的学习方法，提升成绩？</li>
                </ul>
                <div class="payBut"></div>
            </div>
        </div>

        <div class="result_list">
            <h3><img src="/images/startup/showPayTop4.png?imageslim" style="width: 0.7rem;vertical-align:top;" onclick="return false;">你的性格对学业工作的影响
            </h3>
            <div class="listMain">
                <img src="/images/startup/showPayTop5.png?imageslim" onclick="return false;">
                <ul>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;你的性格与学业的关系？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;在工作中，如何与别人交往？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;如何找到突破口，获得进步？</li>
                </ul>
                <div class="payBut"></div>
            </div>
        </div>

        <div class="result_list">
            <h3><img src="/images/startup/showPayTop4.png?imageslim" style="width: 0.7rem;vertical-align:top;" onclick="return false;">你未来的学业出路
            </h3>
            <div class="listMain">
                <img src="/images/startup/showPayTop5.png?≈≈" onclick="return false;">
                <ul>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;最适合你的专业是什么？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;哪个行业最能发挥你的所长？</li>
                    <li><span></span>&nbsp;&nbsp;&nbsp;&nbsp;任职哪个岗位，会助力事业发展！</li>
                </ul>
                <div class="payBut"></div>
            </div>
        </div>
        @include('web.layout.hot', ['hot_list' => $hot_list])
    </div>
    <div class="payButAlert hide">
        <div class="payMain" id="payMainShow"></div>
    </div>
    <div class="mask hide"></div>
@endsection