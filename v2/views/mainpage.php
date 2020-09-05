<header class="intro-menu">
    <div id="main_top_menu" class="topMenu-notfixed">
        <a class="topMenu_btn page-scroll" href="#main_whatwedo_cont"><div id="whatwedobutton" class="nobutton">What we do</div></a>
        <a class="topMenu_btn page-scroll" href="#main_gallery_cont"><div id="gallerybutton" class=" nobutton">Gallery</div></a>
        <a class="topMenu_btn page-scroll" href="#main_impact_cont"><div id="impactbutton" class="nobutton">Create Impact</div></a>
        <a class="topMenu_btn page-scroll" href="#main_connect_cont"><div id="connectbutton" class="nobutton">Connect</div></a>
        <a class="topMenu_btn" href="./people.php"><div id="aboutusbutton" class="nobutton">Team</div></a>
        <a class="topMenu_btn" href="../index.php"><div id="aboutusbutton" class="nobutton">Concept</div></a>
    </div>
</header>
<img src="img/common/slide1_1.jpg" style="width: 100%">

<div id="mainContentContainer">
    <div id="main_whatwedo_cont" class="mainslide" >
        <h2>WHAT WE DO?</h2><br>
        <div style="position: relative; width: 100%">
            <div style="position:absolute;top: 2%; left: 0%;">VOLUNTEER<br> <span style="color:#02352b">CONVEYS INTEREST</span></div>
            <div style="position:absolute;top: 53%; left: 15%;">WE THE CHANGE<br> <span style="color:#046d58">PROVIDES LIST OF ORGANISATIONS</span></div>
            <div style="position:absolute;top: 15%; left: 33%;">VOLUNTEER<br> <span style="color:#048d72">SELECTS AN ORGANISATION</span></div>
            <div style="position:absolute;top: 60%; left: 53%;">VOLUNTEER<br> <span style="color:#0ec09d">FORMS A TEAM</span></div>
            <div style="position:absolute;top: 21%; left: 71%;">WE THE CHANGE<br> <span style="color:#10aebe">BOOKS A SLOT FOR THE TRIP</span></div>
            <div style="position:absolute;top: 41%; left: 85%;">WE THE CHANGE<br> <span style="color:#118abb">PROVIDES THEME AND CONTENT</span></div>
            <div style="position:absolute;top: 70%; left: 79%;">VOLUNTEER<br> <span style="color:#07688d">TEAM DISCUSSION AND COORDINATION</span></div>
            <div style="position:absolute;top: 85%; left: 37%;">TRIP EXECUTED<br> <span style="color:#024466">IMPACT CREATED</span></div>
            <img src="../v2/img/mainpage/slide2.png" style="padding-top:5%"  width="100%" />
        </div>
    </div>
    <div id="gallery_backdrop"></div>
    <div id="gallery_overlay" style="">
        <div class="centered" style="position: static">
            <img id="gallery_overlay_img" src="" alt=""/>
            <div id="gallery_big_close" style="">
                    <span style="line-height: 30px; line-height: 30px;font-size: 30px;"
                          class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
            </div>
        </div>
    </div>



    <div id="main_gallery_cont" class="mainslide" style="">
        <h2>IMPACT GALLERY</h2>
        <div class="container-fluid" align="center" style=""><!---testing new gallery-->
            <div class="row" style="padding-top:30px">
                <?php
                $data = file_get_contents('gallery.json');
                $jsonData = json_decode($data,true);
                $types = $jsonData['types'];
                $count = count($types);
                ?>
                <ul class="gallery_filter" style='list-style: none;padding:0; padding-bottom:30px;'>
                    <?php
                    for ($m=0; $m<$count; $m++) {
                        $temp='';
                        $temp .= '<li class="filter" data-filter=".'.$types[$m]['name'].'">'.$types[$m]['bigname'].'</li>';
                        echo $temp;
                    }
                    ?>
                </ul>

                <div class="col-lg-12" id="gallery_line"></div>

                <ul id="Grid" style="padding:0">
                    <?php
                    for ($m=0; $m<$count; $m++) {
                        $num = $types[$m]['num'];
                        for ($x=1; $x<=$num; $x++) {
                            $temp='';
                            $temp .= '<li class="mix '. $types[$m]['name'].'"  data-big="/'.$types[$m]['name'].'/d'.$x.'.jpg" >' ;
                            $temp .= '<div style="position:relative; margin:2px"><div class="projects_overlay">';
                            $temp .= '<div  align="center"><div  class="project_expandicon col-md-12" style="float:inherit"></div></div>';
    //                            $temp .= '<div class="project_name">'.$projects[$x]['projectName'].'</div>';
    //                            $temp .= '<div class="project_desc">'.$projects[$x]['role'].'</div>';
                            $temp .= '</div><img  class="media-object img-responsive" src="../v2/gallery/small/'.$types[$m]['name'].'/d'.$x.'.jpg"></div>';
                            $temp .= '</li>';
                            echo $temp;
                        }

                    }

                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="main_objectives_cont"  class="mainslide" style="padding-bottom:40px;">
        <div class="row"  style="padding-top:40px">
            <div class="col-sm-3 col-xs-6" align="center" ><!-- popovers over rounds-->
                <div  class="dpm_skills_round" id="pop1" style=" background-position:-110px 0px" data-trigger="hover" data-container="body" data-html="true" data-toggle="popover" data-placement="top" data-content=" <ul class='popoverUl' style='list-style: none;padding:0;'>
                              <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Orphans</li>
                              <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Street children</li>
                       </ul> "></div>
                <div class="skills_names">SUPPORT</div>
            </div>
            <div class="col-sm-3 col-xs-6" align="center" ><!-- popovers over rounds-->
                <div  class="dpm_skills_round" id="pop2" style=" background-position:-330px 0px" data-trigger="hover" data-container="body" data-html="true" data-toggle="popover" data-placement="top" data-content=" <ul style='list-style: none;padding:0;'>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  School children</li>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Low income parents</li>
                                   </ul> "></div>
                <div class="skills_names">GUIDANCE</div>
            </div>
            <div class="col-sm-3 col-xs-6" align="center" ><!-- popovers over rounds-->
                <div  class="dpm_skills_round" id="pop3" style=" background-position:-220px 0px" data-trigger="hover" data-container="body" data-html="true" data-toggle="popover" data-placement="top" data-content=" <ul style='list-style: none;padding:0;'>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Cancer Infected</li>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  HIV Infected</li>
                                   </ul> "></div>
                <div class="skills_names">CARE</div>
            </div>
            <div class="col-sm-3 col-xs-6" align="center" ><!-- popovers over rounds-->
                <div  class="dpm_skills_round" id="pop4" style=" background-position:110px 0px" data-trigger="hover" data-container="body" data-html="true" data-toggle="popover" data-placement="top" data-content=" <ul style='list-style: none;padding:0;'>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Underprivileged</li>
                                          <li class='tooltip_li'><span class='glyphicon glyphicon-ok'></span>  Impaired</li>
                                   </ul> "></div>
                <div class="skills_names">MOTIVATION</div>
            </div>
        </div>
    </div>
    <div id="main_impact_cont" class="mainslide" >
        <h2>CREATE IMPACT</h2><br><br>
        <!--<img src="img/slide4.png"  width="100%" />-->
        <div class="row" id="form_contmain">
            <div class="col-lg-3" style="text-align: center;padding-bottom: 47px;">
                <img src="../v2/img/mainpage/mail.png" alt=""/>
            </div>
            <div class="flip-container col-lg-7" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front" style="background-color: #fff">
                        <!-- front content -->
                        <div class="row" id="v5_form_text" style="margin:0;padding: 10%; text-align: left;">
                            To,<br>
                            We the change mission<br>
                            <br><br><br>
                            From<br>
                            <div id="v5_form_tick1" class="v5_form_tick">
                                <span style="line-height: 30px;" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </div>
                            <form style="display: block" id="v5_form_1" action="http://localhost:8888/wtc/">
                                <input type="text" class="form-control" id="form1_name" placeholder="Fill in your name"
                                       style="border: 0px; border-bottom: 1px solid; border-radius: 0px;margin-bottom: 30px" oninput="form1_change(this.value)">
                            </form>
                            <!--<form id="sampleForm" action="http://localhost:8888/tc/" method="post">-->
                            <!--First name:<br>-->
                            <!--<input type="text" name="firstname" value="Mickey">-->
                            <!--<br>-->
                            <!--<input type="text" name="lastname" value="Mouse">-->
                            <!--<br><br>-->

                            <!--<input type="submit" value="Submit">-->
                            <!--</form>-->
                        </div>
                        <div class="row" style="margin:0;position: relative">

                        </div>
                    </div>
                    <div class="back" style="background-color: #fff">
                        <!-- back content -->
                        <div class="row" style="padding: 10%;margin:0; background-color: #fff">
                            Dear Friend,<br>
                            I am Interested to create change in the way i wanted. <br><br>
                            I want to Support
                            <select id="form2_interest" class="form-control" style="border-radius: 0">
                                <option>Schools</option>
                                <option>Orphanages</option>
                                <option>Disabled homes</option>
                                <option>Slums</option>
                            </select>
                            <br><br>
                            <form style="" id="v5_form_2">
                                <input type="text" class="form-control" id="form2_email" placeholder="Your email ID"
                                       style="border: 0px; border-bottom: 1px solid; border-radius: 0px; margin-bottom: 30px" oninput="form2_change()">
                                <input type="text" class="form-control" id="form2_number" placeholder="Your phone number"
                                       style="border: 0px; border-bottom: 1px solid; border-radius: 0px" oninput="form2_change()">
                            </form>
                            <div id="v5_form_tick2" class="v5_form_tick">
                                <span style="line-height: 30px; " class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="form_thanks" class="col-lg-10 col-lg-offset-1" style="padding-top:15%; padding-bottom: 15%; display: none; text-align: center">
            <h3 style="color: rgb(21, 111, 150); margin-bottom: 50px">Thank you for your support. We will get back to you soon. Meanwhile you can follow our story in any of the following platforms</h3>
            <a style="display: inline-block" href="https://www.facebook.com/wethechangemission"><div class="social2" style="background-position:0px 0px;"></div></a>
            <a style="display: inline-block" href="https://twitter.com/wethechangeteam"><div class="social2"style="background-position:100px 0px;"></div></a>
            <a style="display: inline-block" href="https://plus.google.com/u/2/115318162566265875603/posts"><div class="social2"style="background-position:200px 0px;"></div></a>
        </div>
    </div>

    <div id="main_connect_cont" class="mainslide" >
        <h2>CONNECT WITH OUR NETWORK</h2>
        <div style="position: relative; width: 100%">
            <div class="connect_cont_text" style="position:absolute;top: 47%; left: 4%;text-align: center;">VOLUNTEER<br> </div>
            <div class="connect_cont_text" style="position:absolute;top: 82%; left: 16%;text-align: center;"> REACH OUT INSTANTLY<br> </div>
            <div class="connect_cont_text" style="position:absolute;top: 15%; left: 33%;">SPREAD THE WORD<br> </div>
            <div class="connect_cont_text" style="position:absolute;bottom: 28%; left: 88%;">WIDER IMPACT<br> </div>
            <img src="../v2/img/mainpage/slide5.png" style="padding-top:5%" width="100%">
        </div>

    </div>
</div>