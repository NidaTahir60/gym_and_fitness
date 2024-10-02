@extends('gym_and_fitness.layouts.master')

@section('content')
    <section id="home" class="p-0 bg-dark-gray">
        <article class="content">
            <div id="gym-and-fitness-slider_wrapper" class="rev_slider_wrapper fullscreen-container">
                <!-- the ID here will be used in the JavaScript below to initialize the slider -->
                <div id="gym-and-fitness-slider" class="rev_slider fullscreenbanner" data-version="5.4.5">
                    <!-- Begin slides list -->
                    <ul>
                        <!-- Slide one -->
                        <li id="rs-gym-and-fitness-01" data-index="rs-gym-and-fitness-01" data-transition="fade"
                            data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                            data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="2"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10='{"revslider-weather-addon":{"type":"name","name":"Cologne","woeid":"667931","unit":"c"}}'
                            data-description="">
                            <!-- slide background image -->
                            <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-01.png') }}
                                alt="slider-image" data-bgposition="center center" data-duration="2500"
                                data-ease="Power3.easeInOut" class="rev-slidebg" data-no-retina>
                            <!-- start main row -->
                            <div id="rrzm_638" class="rev_row_zone rev_row_zone_middle">
                                <!-- start row -->
                                <div class="tp-caption row" id="slide-01-layer-01" data-x="['left','left','left','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['0','0','0','0']" data-width="none" data-height="100vh" data-type="row"
                                    data-columnbreak="2" data-responsive_offset="on" data-responsive="on"
                                    data-frames='[{"delay":"500","speed":"300","frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-basealign="slide"
                                    style="transform-style: inherit !important;">
                                    <!-- start colum -->
                                    <div class="tp-caption d-flex justify-content-center flex-column left-col"
                                        id="slide-01-layer-02" data-x="['left','left','left','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-verticalalign="middle" data-type="column"
                                        data-responsive_offset="on" data-responsive="on"
                                        data-frames='[{"delay":"+100","speed":"800","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                        data-columnwidth="42%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[150,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[255,0,0,0]"
                                        style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,247,247,1) 100%);">
                                        <!-- start subtitle text layer -->
                                        <div class="tp-caption tp-resizeme bg-very-light-gray text-uppercase border-radius-4px d-inline-block"
                                            id="slide-01-layer-03"
                                            data-frames='[{"delay":"+800","speed":"500","from":"opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['13','13','13','12']"
                                            data-lineheight="['10','10','10','10']"
                                            data-fontweight="['700','700','700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']" data-x="['left','left','left','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','auto','auto']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[40,40,30,25]" data-marginleft="[0,0,0,0]"
                                            data-paddingtop="[15,15,15,12]" data-paddingright="[15,15,15,12]"
                                            data-paddingbottom="[12,12,12,9]" data-paddingleft="[8,8,8,5]"
                                            data-responsive_offset="on" data-responsive="on"><span
                                                style="padding: 7px 8px 4px 8px; "
                                                class="bg-dark-gray alt-font d-inline me-10px border-radius-3px fs-12 text-white fw-500">WOW</span><span
                                                class="d-inline">Get more benefit by joining</span></div>
                                        <!-- end subtitle text layer -->
                                        <!-- start large text layer -->
                                        <div class="tp-caption tp-resizeme alt-font" id="slide-01-layer-04"
                                            data-frames='[{"delay":"+1000","speed":"2000","frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['100','80','78','50']"
                                            data-lineheight="['100','80','78','50']"
                                            data-fontweight="['600','700', '700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['-2.5','-2','-2','-1']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','100%','100%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal', 'normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[10, 0, 10, 10]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="on" data-responsive="on"
                                            style="z-index: 999 !important">Dream body with fitness<span
                                                class="text-base-color">.</span> </div>
                                        <!-- end large text layer -->
                                        <!-- start text layer -->
                                        <div class="tp-caption tp-resizeme d-inline-block" id="slide-01-layer-05"
                                            data-frames='[{"delay":"+2000","speed":"1000","from": "opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['17','17','22','16']"
                                            data-lineheight="['30','30','30','30']"
                                            data-fontweight="['400','400','400','400']"
                                            data-color="['#828282','#828282','#828282','#828282']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','80%','90%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[50, 50, 40, 30]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="on" data-responsive="on">Want your body to be healthy,
                                            join our program with directions according to your body's goals.</div>
                                        <!-- end text layer -->
                                        <!-- start button layer -->
                                        <div>
                                            <!--  start button layer -->
                                            <a class="tp-caption rev-btn alt-font bg-base-color text-dark-gray d-inline-block text-uppercase border-radius-4px"
                                                id="slide-01-layer-06" href="#contact"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['16','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.5','0.5','0','0']" data-height="none"
                                                data-fontweight="['600','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="on" data-responsive="on"
                                                data-frames='[{"delay":"+2500","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[15,15,15,15]"
                                                data-marginbottom="[10,10,10,10]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[19,18,17,15]" data-paddingright="[30,32,32,25]"
                                                data-paddingbottom="[16,15,15,11]" data-paddingleft="[30,32,32,25]">Start
                                                now</a>
                                            <!--  end button layer  -->
                                            <!--  start button layer  -->
                                            {{-- <a class="popup-youtube tp-caption btn btn-large btn-transparent-dark-gray border border-color-transparent-dark-very-light left-icon d-inline-block border-radius-6px"
                                                id="slide-01-layer-07" href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['20','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.7','0.7','0','0']" data-height="none"
                                                data-fontweight="['500','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="on" data-responsive="on"
                                                data-frames='[{"delay":"3000","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[14,14,14,11]" data-paddingright="[30,28,28,22]"
                                                data-paddingbottom="[12,12,12,9]" data-paddingleft="[30,28,28,22]"><i
                                                    class="bi bi-play-circle align-middle"
                                                    style="font-size:24px; line-height: 14px;"></i>Training demo</a>
                                            <!-- end button layer --> --}}
                                        </div>
                                    </div>
                                    <!-- start background large text layer -->
                                    <div class="tp-caption tp-resizeme alt-font text-uppercase background-text"
                                        id="slide-01-layer-08"
                                        data-frames='[{"delay":"+3500","speed": 3000,"frame":"0","from":"rZ:-90,y:50px;opacity:0;fb:10px;","to":"rZ:-90,o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-visibility="['on','off','off','off']"
                                        data-fontsize="['320','150','160','120']"
                                        data-lineheight="['100','160','160','120']"
                                        data-fontweight="['700','700', '700','700']"
                                        data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                        data-textAlign="['left','left','center','center']"
                                        data-letterspacing="['-3.5','-8','-8','-6']"
                                        data-x="['left','left','center','center']"
                                        data-y="['middle','middle','middle','bottom']" data-hoffset="['-460','0','0','0']"
                                        data-voffset="['0','0','0','0']" data-width="['auto','500','100%','100%']"
                                        data-height="['auto','auto','auto','auto']"
                                        data-whitespace="['nowrap', 'normal', 'normal', 'normal']"
                                        data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                        data-marginbottom="[10, 0, 0, 0]" data-marginleft="[0, 0, 0, 0]"
                                        data-responsive_offset="on" data-responsive="on"
                                        style="text-shadow: 0px 0px 35px rgba(0,0,0,0.05); z-index: 1 !important">Workout
                                    </div>
                                    <!-- end background large text layer -->
                                    <!-- end colum -->
                                    <div class="tp-caption right-col" id="slide-01-layer-09"
                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                        data-fontsize="['20','20','20','20']" data-lineheight="['22','22','22','22']"
                                        data-fontweight="['400','400','400','400']" data-letterspacing="['0','0','0','0']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="column"
                                        data-responsive_offset="on" data-responsive="on"
                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="58%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="width: 100%; height: 100% !important;"></div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end main row -->
                            <!-- start arrow text layer -->
                            <div class="tp-caption rev-btn d-flex justify-content-center align-items-center text-derk-gray btn btn-large bg-base-color btn-slide-right pb-5px text-uppercase"
                                id="slide-01-layer-10" data-x="['right','right','center','center']"
                                data-hoffset="['280','200','-40','-40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','00']" data-visibility="['on','on','off','off']"
                                data-width="['140','100','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','16','15']"
                                data-fontweight="['700','700','700','700']" data-letterspacing="['0','0','0','0']"
                                data-lineheight="['20','60','50','55']" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"delay":"+4500","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bc:rgba(255,255,255,0);"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none;">Prev<span class="bg-black"></span>
                            </div>
                            <!-- end arrow icon layer -->
                            <!-- start arrow icon layer -->
                            <div class="tp-caption rev-btn alt-font text-black d-flex justify-content-start align-items-center text-derk-gray text-uppercase pb-5px next-btn"
                                id="slide-01-layer-11" data-x="['right','right','center','center']"
                                data-hoffset="['0','0','40','40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','0']" data-visibility="['on','on','off','off']"
                                data-width="['285','200','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','22','15']"
                                data-lineheight="['20','60','50','55']" data-fontweight="['700','700','700','700']"
                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"delay":"+4000","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none; background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-thumb-02.png') }}');">
                                Next
                            </div>
                            <!-- end arrow icon layer -->
                        </li>
                        <!-- Slide tow -->
                        <li id="rs-gym-and-fitness-02" data-index="rs-gym-and-fitness-02" data-transition="fade"
                            data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                            data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="2"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10='{"revslider-weather-addon":{"type":"name","name":"Cologne","woeid":"667931","unit":"c"}}'
                            data-description="">
                            <!-- slide background image -->
                            <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-02.png') }}
                                alt="slider-image" data-bgposition="center center" data-duration="2500"
                                data-ease="Power3.easeInOut" class="rev-slidebg" data-no-retina>
                            <!-- start main row -->
                            <div id="rrzm_639" class="rev_row_zone rev_row_zone_middle">
                                <!-- start row -->
                                <div class="tp-caption row" id="slide-02-layer-01"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="100vh" data-type="row" data-columnbreak="2"
                                    data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":"500","speed":"300","frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-basealign="slide"
                                    style="transform-style: inherit !important;">
                                    <!-- start colum -->
                                    <div class="tp-caption d-flex justify-content-center flex-column left-col"
                                        id="slide-02-layer-02" data-x="['left','left','left','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-verticalalign="middle" data-type="column"
                                        data-responsive_offset="on" data-responsive="on"
                                        data-frames='[{"delay":"+100","speed":"800","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                        data-columnwidth="42%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[150,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[255,0,0,0]"
                                        style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,247,247,1) 100%);">
                                        <!-- start subtitle text layer -->
                                        <div class="tp-caption tp-resizeme bg-very-light-gray text-uppercase border-radius-4px d-inline-block"
                                            id="slide-02-layer-03"
                                            data-frames='[{"delay":"+800","speed":"500","from":"opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['13','13','13','12']"
                                            data-lineheight="['10','10','10','10']"
                                            data-fontweight="['700','700','700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']"
                                            data-x="['left','left','left','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','auto','auto']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[40,40,30,25]" data-marginleft="[0,0,0,0]"
                                            data-paddingtop="[15,15,15,12]" data-paddingright="[15,15,15,12]"
                                            data-paddingbottom="[12,12,12,9]" data-paddingleft="[8,8,8,5]"
                                            data-responsive_offset="off" data-responsive="off"><span
                                                style="padding: 7px 8px 4px 8px; "
                                                class="bg-dark-gray alt-font d-inline me-10px border-radius-3px fs-12 text-white fw-500">WOW</span><span
                                                class="d-inline">Get more benefit by joining</span></div>
                                        <!-- end subtitle text layer -->
                                        <!-- start large text layer -->
                                        <div class="tp-caption tp-resizeme alt-font" id="slide-02-layer-04"
                                            data-frames='[{"delay":"+1000","speed":"2000","frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['100','80','78','50']"
                                            data-lineheight="['100','80','78','50']"
                                            data-fontweight="['600','700', '700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['-2.5','-2','-2','-1']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','100%','100%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal', 'normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[10, 0, 10, 10]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="off" data-responsive="on"
                                            style="z-index: 999 !important">Happiness is good health<span
                                                class="text-base-color">.</span> </div>
                                        <!-- end large text layer -->
                                        <!-- start text layer -->
                                        <div class="tp-caption tp-resizeme d-inline-block" id="slide-02-layer-05"
                                            data-frames='[{"delay":"+2000","speed":"1000","from": "opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['17','17','22','16']"
                                            data-lineheight="['30','30','30','30']"
                                            data-fontweight="['400','400','400','400']"
                                            data-color="['#828282','#828282','#828282','#828282']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','80%','90%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[50, 50, 40, 30]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="off" data-responsive="on">Want your body to be
                                            healthy, join our program with directions accordingto your body's goals.</div>
                                        <!-- end text layer -->
                                        <!-- start button layer -->
                                        <div>
                                            <!--  start button layer -->
                                            <a class="tp-caption rev-btn alt-font bg-base-color text-dark-gray d-inline-block text-uppercase border-radius-6px"
                                                id="slide-02-layer-06" href="#contact"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['16','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.5','0.5','0','0']" data-height="none"
                                                data-fontweight="['600','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="off" data-responsive="off"
                                                data-frames='[{"delay":"+2500","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[15,15,15,15]"
                                                data-marginbottom="[10,10,10,10]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[19,18,17,15]" data-paddingright="[30,32,32,25]"
                                                data-paddingbottom="[16,15,15,11]" data-paddingleft="[30,32,32,25]">Start
                                                now</a>
                                            <!--  end button layer  -->
                                            <!--  start button layer  -->
                                            {{-- <a class="popup-youtube tp-caption btn btn-large btn-transparent-dark-gray border border-color-transparent-dark-very-light left-icon d-inline-block border-radius-6px"
                                                id="slide-02-layer-07" href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['20','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.7','0.7','0','0']" data-height="none"
                                                data-fontweight="['500','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="off" data-responsive="off"
                                                data-frames='[{"delay":"3000","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:0px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[14,14,14,11]" data-paddingright="[30,28,28,22]"
                                                data-paddingbottom="[12,12,12,9]" data-paddingleft="[30,28,28,22]"><i
                                                    class="bi bi-play-circle align-middle"
                                                    style="font-size:24px; line-height: 14px;"></i>Training demo</a> --}}
                                            <!-- end button layer -->
                                        </div>
                                    </div>
                                    <!-- start background large text layer -->
                                    <div class="tp-caption tp-resizeme alt-font text-uppercase background-text"
                                        id="slide-02-layer-08"
                                        data-frames='[{"delay":"+3500","speed": 3000,"frame":"0","from":"rZ:-90,y:50px;opacity:0;fb:10px;","to":"rZ:-90,o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-visibility="['on','off','off','off']"
                                        data-fontsize="['320','150','160','120']"
                                        data-lineheight="['100','160','160','120']"
                                        data-fontweight="['700','700', '700','700']"
                                        data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                        data-textAlign="['left','left','center','center']"
                                        data-letterspacing="['-3.5','-8','-8','-6']"
                                        data-x="['left','left','center','center']"
                                        data-y="['middle','middle','middle','bottom']" data-hoffset="['-460','0','0','0']"
                                        data-voffset="['0','0','0','0']" data-width="['auto','500','100%','100%']"
                                        data-height="['auto','auto','auto','auto']"
                                        data-whitespace="['nowrap', 'normal', 'normal', 'normal']"
                                        data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                        data-marginbottom="[10, 0, 0, 0]" data-marginleft="[0, 0, 0, 0]"
                                        data-responsive_offset="off" data-responsive="on"
                                        style="text-shadow: 0px 0px 35px rgba(0,0,0,0.05); z-index: 1 !important">Workout
                                    </div>
                                    <!-- end background large text layer -->
                                    <!-- end colum -->
                                    <div class="tp-caption right-col" id="slide-02-layer-09"
                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                        data-fontsize="['20','20','20','20']" data-lineheight="['22','22','22','22']"
                                        data-fontweight="['400','400','400','400']" data-letterspacing="['0','0','0','0']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="column"
                                        data-responsive_offset="on" data-responsive="off"
                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="58%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="width: 100%; height: 100% !important;"></div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end main row -->
                            <!-- start arrow text layer -->
                            <div class="tp-caption rev-btn d-flex justify-content-center align-items-center text-derk-gray btn btn-large bg-base-color btn-slide-right pb-5px text-uppercase"
                                id="slide-02-layer-10" data-x="['right','right','center','center']"
                                data-hoffset="['280','200','-40','-40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','00']" data-visibility="['on','on','off','off']"
                                data-width="['140','100','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','16','15']"
                                data-fontweight="['700','700','700','700']" data-letterspacing="['0','0','0','0']"
                                data-lineheight="['20','60','50','55']" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+4500","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bc:rgba(255,255,255,0);"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none;">Prev<span class="bg-black"></span>
                            </div>
                            <!-- end arrow icon layer -->
                            <!-- start arrow icon layer -->
                            <div class="tp-caption rev-btn alt-font text-black d-flex justify-content-start align-items-center text-derk-gray text-uppercase pb-5px next-btn"
                                id="slide-02-layer-11" data-x="['right','right','center','center']"
                                data-hoffset="['0','0','40','40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','0']" data-visibility="['on','on','off','off']"
                                data-width="['285','200','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','22','15']"
                                data-lineheight="['20','60','50','55']" data-fontweight="['700','700','700','700']"
                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+4000","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none; background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-thumb-03.png') }}');">
                                Next
                            </div>
                            <!-- end arrow icon layer -->
                        </li>
                        <!-- Slide tow -->
                        <li id="rs-gym-and-fitness-03" data-index="rs-gym-and-fitness-03" data-transition="fade"
                            data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0"
                            data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="2"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10='{"revslider-weather-addon":{"type":"name","name":"Cologne","woeid":"667931","unit":"c"}}'
                            data-description="">
                            <!-- slide background image -->
                            <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-03.png') }}
                                alt="slider-image" data-bgposition="center center" data-duration="2500"
                                data-ease="Power3.easeInOut" class="rev-slidebg" data-no-retina>
                            <!-- start main row -->
                            <div id="rrzm_640" class="rev_row_zone rev_row_zone_middle">
                                <!-- start row -->
                                <div class="tp-caption row" id="slide-03-layer-01"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="100vh" data-type="row" data-columnbreak="2"
                                    data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":"500","speed":"300","frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-basealign="slide"
                                    style="transform-style: inherit !important;">
                                    <!-- start colum -->
                                    <div class="tp-caption d-flex justify-content-center flex-column left-col"
                                        id="slide-03-layer-02" data-x="['left','left','left','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-verticalalign="middle" data-type="column"
                                        data-responsive_offset="on" data-responsive="on"
                                        data-frames='[{"delay":"+100","speed":"800","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                        data-columnwidth="42%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[150,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[255,0,0,0]"
                                        style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,247,247,1) 100%);">
                                        <!-- start subtitle text layer -->
                                        <div class="tp-caption tp-resizeme bg-very-light-gray text-uppercase border-radius-4px d-inline-block"
                                            id="slide-03-layer-03"
                                            data-frames='[{"delay":"+800","speed":"500","from":"opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['13','13','13','12']"
                                            data-lineheight="['10','10','10','10']"
                                            data-fontweight="['700','700','700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']"
                                            data-x="['left','left','left','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','auto','auto']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[40,40,30,25]" data-marginleft="[0,0,0,0]"
                                            data-paddingtop="[15,15,15,12]" data-paddingright="[15,15,15,12]"
                                            data-paddingbottom="[12,12,12,9]" data-paddingleft="[8,8,8,5]"
                                            data-responsive_offset="off" data-responsive="off"><span
                                                style="padding: 7px 8px 4px 8px; "
                                                class="bg-dark-gray alt-font d-inline me-10px border-radius-3px fs-12 text-white fw-500">WOW</span><span
                                                class="d-inline">Get more benefit by joining</span></div>
                                        <!-- end subtitle text layer -->
                                        <!-- start large text layer -->
                                        <div class="tp-caption tp-resizeme alt-font" id="slide-03-layer-04"
                                            data-frames='[{"delay":"+1000","speed":"2000","frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['100','80','78','50']"
                                            data-lineheight="['100','80','78','50']"
                                            data-fontweight="['600','700', '700','700']"
                                            data-color="['#232323','#232323','#232323','#232323']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['-2.5','-2','-2','-1']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','100%','100%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal', 'normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[10, 0, 10, 10]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="off" data-responsive="on"
                                            style="z-index: 999 !important">Take care of your body<span
                                                class="text-base-color">.</span> </div>
                                        <!-- end large text layer -->
                                        <!-- start text layer -->
                                        <div class="tp-caption tp-resizeme d-inline-block" id="slide-03-layer-05"
                                            data-frames='[{"delay":"+2000","speed":"1000","from": "opacity: 0","to": "opacity: 1"}, {"delay": "wait","speed": 300,"to": "opacity: 0"}]'
                                            data-visibility="['on','on','on','on']" data-fontsize="['17','17','22','16']"
                                            data-lineheight="['30','30','30','30']"
                                            data-fontweight="['400','400','400','400']"
                                            data-color="['#828282','#828282','#828282','#828282']"
                                            data-textAlign="['left','left','center','center']"
                                            data-letterspacing="['0','0','0','0']"
                                            data-x="['left','left','center','center']"
                                            data-y="['middle','middle','middle','bottom']"
                                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']"
                                            data-width="['auto','auto','80%','90%']"
                                            data-height="['auto','auto','auto','auto']"
                                            data-whitespace="['normal','normal','normal','normal']"
                                            data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                            data-marginbottom="[50, 50, 40, 30]" data-marginleft="[0, 0, 0, 0]"
                                            data-responsive_offset="off" data-responsive="on">Want your body to be
                                            healthy, join our program with directions accordingto your body's goals.</div>
                                        <!-- end text layer -->
                                        <!-- start button layer -->
                                        <div>
                                            <!--  start button layer -->
                                            <a class="tp-caption rev-btn alt-font bg-base-color text-dark-gray d-inline-block text-uppercase border-radius-6px"
                                                id="slide-03-layer-06" href="#contact"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['16','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.5','0.5','0','0']" data-height="none"
                                                data-fontweight="['600','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="off" data-responsive="off"
                                                data-frames='[{"delay":"+2500","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[15,15,15,15]"
                                                data-marginbottom="[10,10,10,10]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[19,18,17,15]" data-paddingright="[30,32,32,25]"
                                                data-paddingbottom="[16,15,15,11]" data-paddingleft="[30,32,32,25]">Start
                                                now</a>
                                            <!--  end button layer  -->
                                            <!--  start button layer  -->
                                            {{-- <a class="popup-youtube tp-caption btn btn-large btn-transparent-dark-gray border border-color-transparent-dark-very-light left-icon d-inline-block border-radius-6px"
                                                id="slide-03-layer-07" href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                                data-fontsize="['17','15','15','14']"
                                                data-lineheight="['20','20','20','20']"
                                                data-width="['auto','auto','auto','auto']"
                                                data-letterspacing="['0.7','0.7','0','0']" data-height="none"
                                                data-fontweight="['500','700', '700','700']" data-whitespace="normal"
                                                data-type="button" data-responsive_offset="off" data-responsive="off"
                                                data-frames='[{"delay":"3000","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:0px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:#ffffff;bg:#232323;"}]'
                                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                data-textAlign="['center','center','center','center']"
                                                data-paddingtop="[14,14,14,11]" data-paddingright="[30,28,28,22]"
                                                data-paddingbottom="[12,12,12,9]" data-paddingleft="[30,28,28,22]"><i
                                                    class="bi bi-play-circle align-middle"
                                                    style="font-size:24px; line-height: 14px;"></i>Training demo</a> --}}
                                            <!-- end button layer -->
                                        </div>
                                    </div>
                                    <!-- start background large text layer -->
                                    <div class="tp-caption tp-resizeme alt-font text-uppercase background-text"
                                        id="slide-03-layer-08"
                                        data-frames='[{"delay":"+3500","speed": 3000,"frame":"0","from":"rZ:-90,y:50px;opacity:0;fb:10px;","to":"rZ:-90,o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-visibility="['on','off','off','off']"
                                        data-fontsize="['320','150','160','120']"
                                        data-lineheight="['100','160','160','120']"
                                        data-fontweight="['700','700', '700','700']"
                                        data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                        data-textAlign="['left','left','center','center']"
                                        data-letterspacing="['-3.5','-8','-8','-6']"
                                        data-x="['left','left','center','center']"
                                        data-y="['middle','middle','middle','bottom']" data-hoffset="['-460','0','0','0']"
                                        data-voffset="['0','0','0','0']" data-width="['auto','500','100%','100%']"
                                        data-height="['auto','auto','auto','auto']"
                                        data-whitespace="['nowrap', 'normal', 'normal', 'normal']"
                                        data-margintop="[0, 0, 0, 0]" data-marginright="[0, 0, 0, 0]"
                                        data-marginbottom="[10, 0, 0, 0]" data-marginleft="[0, 0, 0, 0]"
                                        data-responsive_offset="off" data-responsive="on"
                                        style="text-shadow: 0px 0px 35px rgba(0,0,0,0.05); z-index: 1 !important">Workout
                                    </div>
                                    <!-- end background large text layer -->
                                    <!-- end colum -->
                                    <div class="tp-caption right-col" id="slide-03-layer-09"
                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                        data-fontsize="['20','20','20','20']" data-lineheight="['22','22','22','22']"
                                        data-fontweight="['400','400','400','400']" data-letterspacing="['0','0','0','0']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="column"
                                        data-responsive_offset="on" data-responsive="off"
                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="58%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="width: 100%; height: 100% !important;"></div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end main row -->
                            <!-- start arrow text layer -->
                            <div class="tp-caption rev-btn d-flex justify-content-center align-items-center text-derk-gray btn btn-large bg-base-color btn-slide-right pb-5px text-uppercase"
                                id="slide-03-layer-10" data-x="['right','right','center','center']"
                                data-hoffset="['280','200','-40','-40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','00']" data-visibility="['on','on','off','off']"
                                data-width="['140','100','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','16','15']"
                                data-fontweight="['700','700','700','700']" data-letterspacing="['0','0','0','0']"
                                data-lineheight="['20','60','50','55']" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+4500","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bc:rgba(255,255,255,0);"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none;">Prev<span class="bg-black"></span>
                            </div>
                            <!-- end arrow icon layer -->
                            <!-- start arrow icon layer -->
                            <div class="tp-caption rev-btn alt-font text-black d-flex justify-content-start align-items-center text-derk-gray text-uppercase pb-5px next-btn"
                                id="slide-03-layer-11" data-x="['right','right','center','center']"
                                data-hoffset="['0','0','40','40']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['0','0','0','0']" data-visibility="['on','on','off','off']"
                                data-width="['285','200','80','80']" data-height="['140','100','80','80']"
                                data-whitespace="nowrap" data-fontsize="['18','18','22','15']"
                                data-lineheight="['20','60','50','55']" data-fontweight="['700','700','700','700']"
                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+4000","speed":1000,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-basealign="slide"
                                style="border: none; background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-slider-thumb-01.png') }}');">
                                Next
                            </div>
                            <!-- end arrow icon layer -->
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>

    <section id="about" class="position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-lg-6 position-relative order-2 order-lg-1">
                    <div class="position-absolute left-20px top-0px d-none d-md-inline-block"
                        data-bottom-top="transform: rotate(-10deg) translateY(50px)"
                        data-top-bottom="transform:rotate(10deg) translateY(-50px)">
                        <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-02.png') }}
                            alt="">
                    </div>
                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-01.png') }} alt="">
                    <div class="position-absolute right-minus-100px bottom-0px md-right-minus-30px d-none d-md-inline-block"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-03.png') }}
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 mb-50px mt-40px md-mt-0 order-1 order-lg-2 xs-mb-35px"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Grow
                        your fitness strength</span>
                    <h2 class="h1 alt-font fw-700 ls-minus-1px text-dark-gray mb-15px">Workout program made for you<span
                            class="text-base-color">.</span></h2>
                    <p class="w-85 mb-30px lg-w-100">At Workout, we believe in empowering individuals to reach their
                        fitness goals through dedication, community, and expert guidance. Our state-of-the-art facilities,
                        experienced trainers, and diverse workout programs are designed to help everyone—regardless of
                        fitness level—achieve their personal best. Whether you're here to build strength, improve endurance,
                        or simply maintain a healthy lifestyle, we’re committed to supporting you every step of the way.
                        Join us and become part of a community that strives for health and wellness!</p>
                    <a href="#contact" class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right me-15px">Contact
                        Us<span class="bg-white"></span></a>
                    {{-- <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                        class="btn btn-link hover-text-light btn-extra-large text-dark-gray popup-youtube pb-0"><i
                            class="bi bi-play-circle lh-normal align-middle icon-extra-medium me-5px"></i>How it works</a> --}}
                </div>
            </div>
        </div>
        <div class="fs-275 lg-fs-180 md-fs-160 fw-700 alt-font text-uppercase ls-minus-5px text-gradient-light-gray-white position-absolute bottom-minus-40px right-0px d-none d-md-inline-block"
            data-bottom-top="transform: translate3d(50px, 0px, 0px);"
            data-top-bottom="transform: translate3d(150px, 0px, 0px);">Workout</div>
    </section>

    <section id="services" class="bg-cultured position-relative overflow-hidden p-0">
        <div class="container">
            <div class="row">
                <div class="col-12 tab-style-08">
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_eight1">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6 pt-8 pb-8 xs-pt-12 xs-pb-12">
                                    <span
                                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Upstanding
                                        strength</span>
                                    <h2 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-10px">Strength training
                                        benefits for you<span class="text-base-color">.</span></h2>
                                    <p class="w-90 md-w-100">Our primary goal is to create awareness and easy access to
                                        keep your body, mind and spirit at peak performance.</p>
                                    <div
                                        class="flex-row d-flex align-items-center border border-color-transparent-dark-very-light border-radius-6px w-90 sm-w-100 p-25px mb-15px xs-p-15px">
                                        <div class="col-auto align-items-center d-flex mx-auto">
                                            <span class="fs-22 alt-font text-dark-gray mb-0 me-5px">Yearly</span>
                                        </div>
                                        <div class="col">
                                            <h5 class="alt-font fw-700 text-dark-gray mb-0 lh-inherit">$499.00</h5>
                                        </div>
                                        <div
                                            class="fs-12 lh-30 fw-700 ls-0px text-dark-gray text-uppercase bg-base-color-transparent box-shadow-medium border-radius-26px ps-20px pe-20px">
                                            Save 20%</div>
                                    </div>
                                    {{-- <p class="fs-15 mb-30px">Get your <span
                                            class="fw-600 text-dark-gray text-decoration-line-bottom">first payment
                                            today</span> and start today.</p> --}}
                                    <a href="#contact"
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right">Join
                                        today!<span class="bg-cultured"></span></a>
                                </div>
                                <div class="col-lg-7 col-md-6 offset-xl-1 sm-pb-8">
                                    <div class="h-100 outside-box-right-20 cover-background sm-h-350px sm-me-0"
                                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-06.png') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_eight2">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6 pt-8 pb-8">
                                    <span
                                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Competitive
                                        preparation</span>
                                    <h2 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-10px">Increase breathing and
                                        heart rates<span class="text-base-color">.</span></h2>
                                    <p class="w-90 md-w-100">Our primary goal is to create awareness and easy access to
                                        keep your body, mind and spirit at peak performance.</p>
                                    <div
                                        class="flex-row d-flex align-items-center border border-color-transparent-dark-very-light border-radius-6px w-90 sm-w-100 p-25px mb-15px xs-p-15px">
                                        <div class="col-auto align-items-center d-flex mx-auto">
                                            <span class="fs-22 alt-font text-dark-gray mb-0 me-5px">Yearly</span>
                                        </div>
                                        <div class="col">
                                            <h5 class="alt-font fw-700 text-dark-gray mb-0 lh-inherit">$699.00</h5>
                                        </div>
                                        <div
                                            class="fs-12 lh-30 fw-700 ls-0px text-dark-gray text-uppercase bg-base-color-transparent box-shadow-medium border-radius-26px ps-20px pe-20px">
                                            Save 20%</div>
                                    </div>
                                    {{-- <p class="fs-15 mb-30px">Get your <span
                                            class="fw-600 text-dark-gray text-decoration-line-bottom">first payment
                                            today</span> and start today.</p> --}}
                                    <a href="#contact"
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right">Join
                                        today!<span class="bg-cultured"></span></a>
                                </div>
                                <div class="col-lg-7 col-md-6 offset-xl-1 sm-pb-8">
                                    <div class="h-100 outside-box-right-20 cover-background sm-h-350px sm-me-0"
                                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-07.png') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_eight3">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6 pt-8 pb-8">
                                    <span
                                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Increasing
                                        imagination</span>
                                    <h2 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-10px">Improves your health
                                        awareness<span class="text-base-color">.</span></h2>
                                    <p class="w-90 md-w-100">Our primary goal is to create awareness and easy access to
                                        keep your body, mind and spirit at peak performance.</p>
                                    <div
                                        class="flex-row d-flex align-items-center border border-color-transparent-dark-very-light border-radius-6px w-90 sm-w-100 p-25px mb-15px xs-p-15px">
                                        <div class="col-auto align-items-center d-flex mx-auto">
                                            <span class="fs-22 alt-font text-dark-gray mb-0 me-5px">Yearly</span>
                                        </div>
                                        <div class="col">
                                            <h5 class="alt-font fw-700 text-dark-gray mb-0 lh-inherit">$449.00</h5>
                                        </div>
                                        <div
                                            class="fs-12 lh-30 fw-700 ls-0px text-dark-gray text-uppercase bg-base-color-transparent box-shadow-medium border-radius-26px ps-20px pe-20px">
                                            Save 20%</div>
                                    </div>
                                    {{-- <p class="fs-15 mb-30px">Get your <span
                                            class="fw-600 text-dark-gray text-decoration-line-bottom">first payment
                                            today</span> and start today.</p> --}}
                                    <a href="#contact"
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right">Join
                                        today!<span class="bg-cultured"></span></a>
                                </div>
                                <div class="col-lg-7 col-md-6 offset-xl-1 sm-pb-8">
                                    <div class="h-100 outside-box-right-20 cover-background sm-h-350px sm-me-0"
                                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-08.png') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_eight4">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6 pt-8 pb-8">
                                    <span
                                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Increasing
                                        self-awareness</span>
                                    <h2 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-10px">Increases blood flow
                                        to muscles<span class="text-base-color">.</span></h2>
                                    <p class="w-90 md-w-100">Our primary goal is to create awareness and easy access to
                                        keep your body, mind and spirit at peak performance.</p>
                                    <div
                                        class="flex-row d-flex align-items-center border border-color-transparent-dark-very-light border-radius-6px w-90 sm-w-100 p-25px mb-15px xs-p-15px">
                                        <div class="col-auto align-items-center d-flex mx-auto">
                                            <span class="fs-22 alt-font text-dark-gray mb-0 me-5px">Yearly</span>
                                        </div>
                                        <div class="col">
                                            <h5 class="alt-font fw-700 text-dark-gray mb-0 lh-inherit">$749.00</h5>
                                        </div>
                                        <div
                                            class="fs-12 lh-30 fw-700 ls-0px text-dark-gray text-uppercase bg-base-color-transparent box-shadow-medium border-radius-26px ps-20px pe-20px">
                                            Save 20%</div>
                                    </div>
                                    {{-- <p class="fs-15 mb-30px">Get your <span
                                            class="fw-600 text-dark-gray text-decoration-line-bottom">first payment
                                            today</span> and start today.</p> --}}
                                    <a href="#contact"
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right">Join
                                        today!<span class="bg-cultured"></span></a>
                                </div>
                                <div class="col-lg-7 col-md-6 offset-xl-1 sm-pb-8">
                                    <div class="h-100 outside-box-right-20 cover-background sm-h-350px sm-me-0"
                                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-09.png') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_eight5">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6 pt-8 pb-8">
                                    <span
                                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Reducing
                                        negative</span>
                                    <h2 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-10px">Building skills to
                                        manage your stress<span class="text-base-color">.</span></h2>
                                    <p class="w-90 md-w-100">Our primary goal is to create awareness and easy access to
                                        keep your body, mind and spirit at peak performance.</p>
                                    <div
                                        class="flex-row d-flex align-items-center border border-color-transparent-dark-very-light border-radius-6px w-90 sm-w-100 p-25px mb-15px xs-p-15px">
                                        <div class="col-auto align-items-center d-flex mx-auto">
                                            <span class="fs-22 alt-font text-dark-gray mb-0 me-5px">Yearly</span>
                                        </div>
                                        <div class="col">
                                            <h5 class="alt-font fw-700 text-dark-gray mb-0 lh-inherit">$349.00</h5>
                                        </div>
                                        <div
                                            class="fs-12 lh-30 fw-700 ls-0px text-dark-gray text-uppercase bg-base-color-transparent box-shadow-medium border-radius-26px ps-20px pe-20px">
                                            Save 20%</div>
                                    </div>
                                    {{-- <p class="fs-15 mb-30px">Get your <span
                                            class="fw-600 text-dark-gray text-decoration-line-bottom">first payment
                                            today</span> and start today.</p> --}}
                                    <a href="#contact"
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right">Join
                                        today!<span class="bg-cultured"></span></a>
                                </div>
                                <div class="col-lg-7 col-md-6 offset-xl-1 sm-pb-8">
                                    <div class="h-100 outside-box-right-20 cover-background sm-h-350px sm-me-0"
                                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-10.png') }}')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom border-1 border-color-extra-medium-gray bg-white">
            <div class="container tab-style-08">
                <ul class="nav nav-tabs fs-24 fw-500 alt-font border-0 text-center">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_eight1"
                            class="nav-link active">Strength<span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight2">Crossfit<span
                                class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight3">Balance<span
                                class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight4">Cardio<span
                                class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight5">Meditation<span
                                class="tab-border bg-dark-gray"></span></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="gallery" class="ps-5 pe-5 lg-ps-2 lg-pe-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="image-gallery-style-02 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large"
                        style="position: relative; height: 536px;">
                        <li class="grid-sizer"></li>
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-01.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-01.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-02.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-02.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-03.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-03.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-04.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-04.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-05.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-05.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 268px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-06.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-06.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-07.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-07.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-08.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/gym_and_fitness/images/demo-gym-gallery-08.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row"
                data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div class="col-xl-3 text-center text-xl-start lg-mb-40px sm-mb-20px">
                    <h3 class="alt-font fw-700 ls-minus-1px sm-ls-0px text-dark-gray mb-15px">Learning how to love your
                        body<span class="text-base-color">.</span></h3>
                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start">
                        <i class="bi bi-telephone-outbound icon-extra-medium text-base-color me-10px"></i><a
                            href="tel:0319 5199686"
                            class="fs-15 lh-16 fw-700 text-uppercase text-dark-gray text-decoration-line-bottom">0319
                            5199686</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col-xl-3 col-md-4 col-sm-6 process-step-style-10 last-paragraph-no-margin ps-5 pt-40px pt-40px md-pt-30px position-relative sm-mb-30px">
                    <div class="process-step-icon-box position-absolute left-30px top-0px md-left-15px">
                        <div
                            class="number d-inline-block alt-font fs-80 fw-700 text-outline text-outline-color-base-color opacity-5">
                            01</div>
                    </div>
                    <span class="alt-font fs-24 fw-500 text-dark-gray position-relative">Treat yourself</span>
                    <p>Our subconscious mind hears the self-talk and responds.</p>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col-xl-3 col-md-4 col-sm-6 process-step-style-10 last-paragraph-no-margin ps-5 pt-40px md-pt-30px position-relative sm-mb-30px">
                    <div class="process-step-icon-box position-absolute left-30px top-0px md-left-15px">
                        <div
                            class="number d-inline-block alt-font fs-80 fw-700 text-outline text-outline-color-base-color opacity-5">
                            02</div>
                    </div>
                    <span class="alt-font fs-24 fw-500 text-dark-gray position-relative">Stay positive</span>
                    <p>Learn to release negative thoughts about your body.</p>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col-xl-3 col-md-4 col-sm-6 process-step-style-10 last-paragraph-no-margin ps-5 pt-40px md-pt-30px position-relative">
                    <div class="process-step-icon-box position-absolute left-30px top-0px md-left-15px">
                        <div
                            class="number d-inline-block alt-font fs-80 fw-700 text-outline text-outline-color-base-color opacity-5">
                            03</div>
                    </div>
                    <span class="alt-font fs-24 fw-500 text-dark-gray position-relative">Love yourself</span>
                    <p>Focusing on body loving and caring for yourself first.</p>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-very-light-gray z-index-0 position-relative overflow-hidden pb-0 md-pb-5">
        <img src={{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-17.png') }}
            class="h-190px z-index-minus-1 position-absolute left-0px top-0px lg-h-120px d-none d-md-inline-block"
            data-bottom-top="transform: translate3d(80px, 0px, 0px);"
            data-top-bottom="transform: translate3d(-150px, 0px, 0px);" alt="">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-7 md-mb-35px">
                    <div class="tab-content bg-white box-shadow-extra-large">
                        <!-- start tab content -->
                        <div class="tab-pane active fade in show" id="tab_nine1">
                            <div class="row g-0 row-cols-1 row-cols-md-2">
                                <div class="col p-55px xl-p-40px lg-p-30px">
                                    <h4 class="alt-font fw-600 text-dark-gray mb-0">Matthew taylor</h4>
                                    <span class="fs-18 fw-500 text-base-color">Strength training</span>
                                    <div
                                        class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mt-15px mb-15px">
                                    </div>
                                    <p>Empowering individuals to reach their fitness goals through personalized training,
                                        motivation, and expert guidance for a healthier, stronger lifestyle.</p>
                                    <div class="d-flex align-items-center mb-30px">
                                        <div class="col-auto text-center">
                                            <h3 class="fw-700 ls-minus-3px text-dark-gray mb-0 xs-ls-minus-2px">5.0</h3>
                                        </div>
                                        <div class="col border-start border-color-extra-medium-gray ms-20px ps-20px">
                                            <div class="review-star-icon fs-18">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="fs-15 lh-22 fw-600 d-block text-dark-gray">2070 Reviews</span>
                                        </div>
                                    </div>
                                    {{-- <div class="elements-social social-icon-style-09">
                                        <ul class="medium-icon dark">
                                            <li><a class="facebook" href="https://www.facebook.com/"
                                                    target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                            <li><a class="instagram" href="http://www.instagram.com"
                                                    target="_blank"><i
                                                        class="fa-brands fa-instagram"></i><span></span></a></li>
                                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i><span></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="col position-relative cover-background sm-h-300px"
                                    style="background-image:url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-15.png') }}');">
                                    <span
                                        class="fs-190 fw-700 alt-font text-white position-absolute left-minus-30px bottom-minus-50px">01.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_nine2">
                            <div class="row g-0 row-cols-1 row-cols-md-2">
                                <div class="col p-55px xl-p-40px lg-p-30px">
                                    <h4 class="alt-font fw-600 text-dark-gray mb-0">Jeremy dupont</h4>
                                    <span class="fs-18 fw-500 text-base-color">Crossfit coach</span>
                                    <div
                                        class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mt-15px mb-15px">
                                    </div>
                                    <p>Guiding athletes to push their limits with high-intensity, functional workouts,
                                        fostering strength, endurance, and community through CrossFit training.</p>
                                    <div class="d-flex align-items-center mb-30px">
                                        <div class="col-auto text-center">
                                            <h3 class="fw-700 ls-minus-3px text-dark-gray mb-0 xs-ls-minus-2px">4.9</h3>
                                        </div>
                                        <div class="col border-start border-color-extra-medium-gray ms-20px ps-20px">
                                            <div class="review-star-icon fs-18">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="fs-15 lh-22 fw-600 d-block text-dark-gray">2116 Reviews</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col position-relative cover-background sm-h-300px"
                                    style="background-image:url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-14.png') }}');">
                                    <span
                                        class="fs-190 fw-700 alt-font text-white position-absolute left-minus-30px bottom-minus-50px">02.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_nine3">
                            <div class="row g-0 row-cols-1 row-cols-md-2">
                                <div class="col p-55px xl-p-40px lg-p-30px">
                                    <h4 class="alt-font fw-600 text-dark-gray mb-0">Daniel james</h4>
                                    <span class="fs-18 fw-500 text-base-color">Personal training</span>
                                    <div
                                        class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mt-15px mb-15px">
                                    </div>
                                    <p>Providing tailored fitness plans, motivation, and one-on-one support to help clients
                                        achieve their health and wellness goals efficiently and effectively.</p>
                                    <div class="d-flex align-items-center mb-30px">
                                        <div class="col-auto text-center">
                                            <h3 class="fw-700 ls-minus-3px text-dark-gray mb-0 xs-ls-minus-2px">5.0</h3>
                                        </div>
                                        <div class="col border-start border-color-extra-medium-gray ms-20px ps-20px">
                                            <div class="review-star-icon fs-18">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="fs-15 lh-22 fw-600 d-block text-dark-gray">1250 Reviews</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col position-relative cover-background sm-h-300px"
                                    style="background-image:url('{{ asset('assets/gym_and_fitness/images/demo-gym-and-fitness-home-16.png') }}');">
                                    <span
                                        class="fs-190 fw-700 alt-font text-white position-absolute left-minus-30px bottom-minus-50px">03.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 team-style-09"
                    data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">World
                        class trainer</span>
                    <h2 class="h1 alt-font fw-700 ls-minus-1px text-dark-gray mb-15px">Most popular expert trainers<span
                            class="text-base-color">.</span></h2>
                    <ul class="nav nav-tabs alt-font flex-column border-0 justify-content-center"
                        data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_nine1" class="nav-link active">
                                <span class="number fs-22 me-5px">01.</span><span
                                    class="name fs-22 text-dark-gray">Matthew taylor</span><span
                                    class="text-medium-gray ms-auto">Strength training</span></a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_nine2" class="nav-link">
                                <span class="number fs-22 me-5px">02.</span><span
                                    class="name fs-22 text-dark-gray">Jeremy dupont</span><span
                                    class="text-medium-gray ms-auto">Crossfit coach</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_nine3">
                                <span class="number fs-22 me-5px">03.</span><span
                                    class="name fs-22 text-dark-gray">Daniel james</span><span
                                    class="text-medium-gray ms-auto">Personal training</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto text-center"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":80, "centeredSlides": true, "speed": 20000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Become more productive with our classes.</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Fitness you enjoy with our workout.</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Most popular expert trainers.</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Become more productive with our classes.</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Fitness you enjoy with our workout.</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lh-160 fw-700 alt-font ls-minus-2px text-outline text-outline-color-extra-medium-gray">
                                Most popular expert trainers.</div>
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0 pb-5 md-pb-8 overlap-height overflow-hidden">
        <div class="container overlap-gap-section">
            <div class="row align-items-center justify-content-center"
                data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xl-5 col-lg-7 col-md-10 position-relative pe-xl-0 text-center text-xl-start lg-mb-10px">
                    <span
                        class="fs-19 lh-20 ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">Member
                        reviews</span>
                    <h2 class="h1 alt-font fw-700 ls-minus-1px text-dark-gray mb-10px w-80 lg-w-100">Members say about
                        facilities<span class="text-base-color">.</span></h2>
                    <div class="d-block mb-25px">
                        See our 437 reviews on <a href="https://www.reviews.io/" target="_blank"><img
                                src="images/reviewsio.svg" class="h-20px align-middle ms-5px" alt=""></a>
                    </div>
                    <div class="d-flex justify-content-center justify-content-xl-start">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                            tabindex="0" role="button" aria-label="Previous slide"><i
                                class="bi bi-arrow-left-short icon-very-medium"></i></div>
                        <div class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                            tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-arrow-right-short icon-very-medium"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-10 overflow-hidden">
                    <div class="outside-box-right-15 xl-outside-box-right-20 sm-outside-box-right-0">
                        <div class="swiper slider-one-slide slider-shadow-right sm-slider-shadow-none magic-cursor overflow-visible ps-25px sm-p-0"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 6000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper pt-30px pb-30px">
                                <!-- start review item -->
                                <div class="swiper-slide review-style-06">
                                    <div
                                        class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                        <div class="mb-20px d-flex align-items-center">
                                            <img class="rounded-circle w-90px h-90px me-20px"
                                                src={{ asset('assets/gym_and_fitness/images/avtar-27.png') }}
                                                alt="">
                                            <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                <div class="fs-22 alt-font fw-500 text-dark-gray">Herman Miller</div>
                                                <p class="lh-22 d-block">Digital marketer</p>
                                            </div>
                                            <div
                                                class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px">
                                                <i class="fa-solid fa-star me-5px"></i>5.0
                                            </div>
                                        </div>
                                        <p>We help our clients succeed by creating brand identities, digital experiences,
                                            and print materials that communicate.</p>
                                    </div>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide review-style-06">
                                    <div
                                        class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                        <div class="mb-20px d-flex align-items-center">
                                            <img class="rounded-circle w-90px h-90px me-20px"
                                                src={{ asset('assets/gym_and_fitness/images/avtar-28.png') }}
                                                alt="">
                                            <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                <div class="fs-22 alt-font fw-500 text-dark-gray">Alexander Harad</div>
                                                <p class="lh-22 d-block">Digital marketer</p>
                                            </div>
                                            <div
                                                class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px">
                                                <i class="fa-solid fa-star me-5px"></i>5.0
                                            </div>
                                        </div>
                                        <p>They have provided superior quality of content marketing services. Very satisfied
                                            by choosing them. Thank you!</p>
                                    </div>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide review-style-06">
                                    <div
                                        class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                        <div class="mb-20px d-flex align-items-center">
                                            <img class="rounded-circle w-90px h-90px me-20px"
                                                src={{ asset('assets/gym_and_fitness/images/avtar-29.png') }}
                                                alt="">
                                            <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                <div class="fs-22 alt-font fw-500 text-dark-gray">Shoko Mugikura</div>
                                                <p class="lh-22 d-block">Digital marketer</p>
                                            </div>
                                            <div
                                                class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px">
                                                <i class="fa-solid fa-star me-5px"></i>5.0
                                            </div>
                                        </div>
                                        <p>We help our clients succeed by creating brand identities, digital experiences,
                                            and print materials that communicate.</p>
                                    </div>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide review-style-06">
                                    <div
                                        class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                        <div class="mb-20px d-flex align-items-center">
                                            <img class="rounded-circle w-90px h-90px me-20px"
                                                src={{ asset('assets/gym_and_fitness/images/avtar-30.png') }}
                                                alt="">
                                            <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                <div class="fs-22 alt-font fw-500 text-dark-gray">Jacob Kalling</div>
                                                <p class="lh-22 d-block">Digital marketer</p>
                                            </div>
                                            <div
                                                class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px">
                                                <i class="fa-solid fa-star me-5px"></i>5.0
                                            </div>
                                        </div>
                                        <p>We help our clients succeed by creating brand identities, digital experiences,
                                            and print materials that communicate.</p>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="big-section bg-gradient-very-light-gray mb-5">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-3 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="h-100 sm-h-500px xs-h-400px cover-background"
                        style="background-image: url('{{ asset('assets/gym_and_fitness/images/demo-business-contact-01.png') }}')">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class=" p-18 lg-p-15 h-100" style="background:#91D800 ">
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Keep in touch?</span>
                        <p class="text-white">T4 Fazal Apartments, Faiz Rd, Muslim Town, Lahore, Punjab 54000</p>
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Toll free customer
                            care?</span>
                        <p><a href="tel:0319 5199686" class="text-white">0319 5199686</a>
                            <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Need live
                                support?</span>
                            <a href="mailto:info@yourdomain.com" class="text-white d-block">info@yourdomain.com</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="pt-5 md-pt-45px contact-form-style-01 appear anime-complete"
                        data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="">
                        <h4 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-30px">How we can help?</h4>
                        <!-- start contact form -->
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control required"
                                    placeholder="Your name*">
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control required"
                                    placeholder="Your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>
                                
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-small btn-round-edge btn-dark-gray btn-box-shadow mt-20px m-auto submit"
                                    type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
