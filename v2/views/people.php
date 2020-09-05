<header class="intro-menu">
    <div id="main_top_menu" class="topMenu-notfixed">
        <a class="topMenu_btn" href="./index.php"><div id="aboutusbutton" class="nobutton">Home</div></a>
        <a class="topMenu_btn" href="../index.php"><div id="aboutusbutton" class="nobutton">Concept</div></a>
    </div>
</header>

<?php
$data = file_get_contents('../v2/data/people.json');
$jsonData = json_decode($data,true);
$types = $jsonData['types'];
$count = count($types);
?>

<div id="mainContentContainer">
    <div style="width: 100%; background-color: #fff; border-top: #26527d solid 10px">
        <div class="container" style="margin-top: 50px;">
            <?php
            for ($m=0; $m<$count; $m++) {
                $temp='';
                $temp .= '<div class="container container-fluid" style="padding-left: 5%; padding-right: 5%; margin-top: 40px">
                    <div class="row section-header"><h2>'.$types[$m]['name'].'</h2></div>
                    <div class="row"><div class="col-sm-2 col-sm-offset-5 header-line" ></div></div>
                    <div class="row" style="display:flex">';

                $temp2='';
                $count2 =  count($types[$m]['people']);
                //adding fake col to align center
//                if($count2==1) $temp2 .=' <div class="col-md-4"></div>';
                if($count2==2) $temp2 .=' <div class="col-md-2"></div>';
                for ($n=0; $n<$count2; $n++) {
                    $temp2 .= '
                            <div class="col-lg-4 col-sm-12 center-block col-centered" style="padding: 0px; ">
                                <div class="person-desc row"  style="margin: 1px; padding: 0">
                                    <div class="col-md-6" style="padding-left: 0px; padding-right: 0px">
                                        <img src="../v2/img/people/' .$types[$m]['people'][$n]['imgUrl'].'" alt="" class="person-img"/>
                                    </div>
                                    <div class="col-md-6 person-right">
                                        <h3>'.$types[$m]['people'][$n]['name'].'</h3>
                                        <h6>'.$types[$m]['people'][$n]['role'].'</h6>
                                    </div>
                                </div>
                            </div>';
                    if($n%3==2) $temp2 .= '</div><div class="row" style="display:flex">';

                }
                $temp .=   $temp2;


                $temp .= '</div></div>';

                echo $temp;
            }
            ?>

        </div>
    </div>
</div>


