
        <div class="tab_box">                               
               
                <div>
                    <div id="wrapper" style="width: 100%;height: 460px;margin: 0 auto;">
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                              @foreach($arr as $v)
                                <img src="{{$v->lpic}}"/>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <script type="text/javascript">
                        $(window).load(function() {
                            $('#slider').nivoSlider();
                        });
                    </script>