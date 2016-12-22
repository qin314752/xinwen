
     
        {!!App\Http\Controllers\HomeController::head()!!}
        {!!App\Http\Controllers\HomelunboController::headlunbo()!!}
      
                    <div class="content">
                        <!--新闻中心-->
                         <div class="floor_one">
                        <div class="news_left fl claerfix">

                                <h3>新闻中心</h3>
                                <img class="Img" src="{{$arr['xinwen'][4]->pic}}">
                                <span>{{$arr['xinwen'][4]->name}}</span>
                                <p>{{$arr['xinwen'][4]->content}}</p>
                        </div>
                        
                        <div class="news_middle fl claerfix" style="margin-top:-20px" >

                                @if(!empty($arr['xinwen'][0]->name))
                                <div class="news_top">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][0]->id}}"><h3>{{$arr['xinwen'][0]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][0]->time}}</span>
                                        <p>{{$arr['xinwen'][0]->content}}</p>
                                </div>
                                @endif
                                @if(!empty($arr['xinwen'][2]->name))
                                <div class="news_bottom" >
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][2]->id}}"><h3>{{$arr['xinwen'][2]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][2]->time}}</span>
                                        <p>{{$arr['xinwen'][2]->content}}</p>
                                </div>
                                @endif
                        </div>
                        
                        <div class="news_right fl claerfix" style="margin-top:-20px">
                                @if(!empty($arr['xinwen'][1]->name))
                                <div class="news_top">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][1]->id}}"><h3>{{$arr['xinwen'][1]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][1]->time}}</span>
                                        <p>{{$arr['xinwen'][1]->content}}</p>
                                </div>
                                @endif
                                 @if(!empty($arr['xinwen'][3]->name))
                                <div class="news_bottom" style="margin-top: 0px;">
                                        <a href="/home/page/xinwen?id={{$arr['xinwen'][3]->id}}"><h3>{{$arr['xinwen'][3]->name}}</h3></a>
                                        <span>{{$arr['xinwen'][3]->time}}</span>
                                        <p>{{$arr['xinwen'][3]->content}}</p>
                                </div>
                                @endif
                        </div>
                </div>
                        
                        <!--二楼-->
                        <div class="floor_two">
                            <div class="two_top">
                                <div class="two_left fl claerfix">
                                    <img src="/home/img/AD0I4oLBBRACGAAg2LKSwAUooLq4pQEw4AM4gwI.jpg">
                                </div>
                                
                                <div class="two_right claerfix fr">
                                    <h3>塑造生态价值品牌</h3>
                                    <font>以“做一家负责任的投资公司”为使命</font>
                                    <p>以“诚信天下，稳健一生，追求卓越”为企业核心价值观，以“推</p>
                                    <p>动和实现可持续的价值增长”为经营理念，不断为客户、股东、员</p>
                                    <p>工、社会和利益相关者创造价值，为社会和谐做出贡献！</p>
                                </div>
                            </div>
                            <div class="two_bottom">
                                <div class="two_bottom_box fl claerfix">
                                    <div class="introduct fl claerfix">
                                        <ul>
                                            <li style="margin: 20px 0 18px 90px;"><img src="/home/img/plane.png"></li>
                                            <li>灵活自由，投资安全</li>
                                        </ul>
                                    </div>
                                    <div class="introduct fr claerfix">
                                        <ul>
                                            <li style="margin: 10px 0 15px 90px;"><img src="/home/img/moneybag.png"></li>
                                            <li>平台实力雄厚，收益更高</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="two_bottom_box fr claerfix">
                                    <ul>
                                        <li style="margin: 20px 0 17px 190px;"><img src="/home/img/hand.png"></li>
                                        <li>AAA级信用企业，拥有优质团队，智能资金分散，资金全透明</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--三楼-->
                        <div class="floor_three">
                             <div class="three_left fl claerfix">
                                <h5>{{$arr['shichang'][6]->name}}</h5>
                                <a href="/home/page/shichang?id={{$arr['shichang'][0]->id}}"><p>{{$arr['shichang'][0]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][1]->id}}"><p>{{$arr['shichang'][1]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][2]->id}}"><p>{{$arr['shichang'][2]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][3]->id}}"><p>{{$arr['shichang'][3]->name}}</p></a>
                                <a href="/home/page/shichang?id={{$arr['shichang'][4]->id}}"><p>{{$arr['shichang'][4]->name}}</p></a>
                                
                            </div>
                            
                            <div class="three_right fr claerfix">
                                    <img class="Imga" src="{{$arr['shichang'][6]->pic}}">
                                    <div class="neirong fl claerfix news_bottom " style="margin-left: 20px">
                                            <h4>{{$arr['shichang'][5]->name}}</h4>
                                          <p>{{$arr['shichang'][5]->content}}</p>
                                            
                                    </div>
                                    
                                    <div class="more">
                                            <a href="/home/page/shichang?id={{$arr['shichang'][5]->id}}">查看详情</a>
                                    </div>
                                            
                            </div>
                        </div>
                        
                        <!--四楼-->
                        <div class="floor_four">
                            <div class="four_left fl claerfix">
                                <h3>{{$arr['licai'][4]->name}}</h3>
                                <a href="/home/page/licai?id={{$arr['licai'][0]->id}}">{{$arr['licai'][0]->name}}</a><span>{{$arr['licai'][0]->time}}</span>
                                <a href="/home/page/licai?id={{$arr['licai'][1]->id}}">{{$arr['licai'][1]->name}}</a><span>{{$arr['licai'][1]->time}}</span>
                                <a href="/home/page/licai?id={{$arr['licai'][2]->id}}">{{$arr['licai'][2]->name}}</a><span>{{$arr['licai'][2]->time}}</span>
                            </div>
                            <div class="four_middle fl claerfix">
                                    <img src="{{$arr['licai'][4]->pic}}">
                            </div>
                            <div class="four_right fl claerfix">
                                    <img src="/home/img/AD0I4oLBBRACGAAg8ZqWwAUo-rLHrAMw5gE49QE.jpg">
                            </div>
                        </div>
                        
                        <!--合作伙伴-->
                        <div class="friend_title">
                            合作伙伴
                        </div>
                        <div class="indexmaindiv" id="indexmaindiv">
                        <div class="indexmaindiv1 clearfix">
                            <div class="stylesgoleft" id="goleft"></div>
                            <div class="maindiv1 " id="maindiv1">
                                <ul id="count1">
                                    @foreach($arr['flink'] as $v)
                                                <li>
                                                        <div class="playerdetail">
                                                                <div class="detailimg"><a href="{{$v->url}}"><img src="{{$v->pic}}" /></a></div>
                                                        </div>
                                                </li>
                                        @endforeach
                                    
                                </ul>
                            </div>
                            <div class="stylesgoright" id="goright"></div>
                        </div>
                        <script type="text/javascript">
                        window.onload = function() {
                                var oBtnLeft = document.getElementById("goleft");
                                var oBtnRight = document.getElementById("goright");
                                var oDiv = document.getElementById("indexmaindiv");
                                var oDiv1 = document.getElementById("maindiv1");
                                var oUl = oDiv.getElementsByTagName("ul")[0];
                                var aLi = oUl.getElementsByTagName("li");
                                var now = -5 * (aLi[0].offsetWidth + 13);
                                oUl.style.width = aLi.length * (aLi[0].offsetWidth + 13) + 'px';
                                oBtnRight.onclick = function() {
                                        var n = Math.floor((aLi.length * (aLi[0].offsetWidth + 13) + oUl.offsetLeft) / aLi[0].offsetWidth);

                                        if(n <= 5) {
                                                move(oUl, 'left', 0);
                                        } else {
                                                move(oUl, 'left', oUl.offsetLeft + now);
                                        }
                                }
                                oBtnLeft.onclick = function() {
                                        var now1 = -Math.floor((aLi.length / 5)) * 5 * (aLi[0].offsetWidth + 13);

                                        if(oUl.offsetLeft >= 0) {
                                                move(oUl, 'left', now1);
                                        } else {
                                                move(oUl, 'left', oUl.offsetLeft - now);
                                        }
                                }
                                var timer = setInterval(oBtnRight.onclick, 5000);
                                oDiv.onmouseover = function() {
                                        clearInterval(timer);
                                }
                                oDiv.onmouseout = function() {
                                        timer = setInterval(oBtnRight.onclick, 5000);
                                }

                        };

                        function getStyle(obj, name) {
                                if(obj.currentStyle) {
                                        return obj.currentStyle[name];
                                } else {
                                        return getComputedStyle(obj, false)[name];
                                }
                        }

                        function move(obj, attr, iTarget) {
                                clearInterval(obj.timer)
                                obj.timer = setInterval(function() {
                                        var cur = 0;
                                        if(attr == 'opacity') {
                                                cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
                                        } else {
                                                cur = parseInt(getStyle(obj, attr));
                                        }
                                        var speed = (iTarget - cur) / 6;
                                        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
                                        if(iTarget == cur) {
                                                clearInterval(obj.timer);
                                        } else if(attr == 'opacity') {
                                                obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
                                                obj.style.opacity = (cur + speed) / 100;
                                        } else {
                                                obj.style[attr] = cur + speed + 'px';
                                        }
                                }, 30);
                        }
                </script>
                    </div>
                
                </div>          
            </div>
            
        {!!App\Http\Controllers\BottomController::bottom()!!}
        
        
    