<?php
    session_start();
    include_once 'INCLUDES/dbh-inc.php';

    if (!isset($_SESSION['u_id'])) {
    echo '<script>
            window.location.href="login.php";
        </script>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>CS:GO Farm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="CSS/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/animation.js"></script>
    </head>
    <body>
        <a href="chat.php" class="chatOpenBtn">Chat</a>
        <img class="randomPopBoost" src="CSS/IMGS/csgo/Other/1.6.ico" alt="c4-1.6" draggable="false">
        <div class="achievBanner achievement-banner">
            <div class="achievIconBanner achievement-icon">
                <span class="icon"><span class="icon-trophy"></span></span>
            </div>
            <div class="achievTextBanner achievement-text">
                <p class="achievement-notification">Achievement unlocked</p>
                <p class="achievement-name">25G &ndash; CSS Achievement Banner</p>
            </div>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="titleModals">
                <div id="myModalCase" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">About CS:GO Farm's Case Clicker</h2>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
                <div id="myModalUpgrades" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">About Upgrades</h2>
                      </div>
                      <div class="modal-body">
                        <p><strong><u>About them:</u></strong></p>
                        <p>- Upgrades will help get more <span style="font-weight: bold;">€</span> per seconds et clicks.</p>
                        <p>- The limit for each upgrades is <span style="color: red;">15</span>.</p>
                        <p><strong><u>All Upgrades:</u></strong></p>
                        <p class="modalLeft"><u>Pistols:</u></p>
                        <p class="modalLeft">- Glock (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+1</span>/click)</p>
                        <p class="modalLeft">- Usp-S (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+2</span>/click)</p>
                        <p class="modalLeft">- P250 (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+3</span>/click)</p>
                        <p class="modalLeft">- Desert-Eagle (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+4</span>/click)</p>
                        <p class="modalLeft">- Tec-9 (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+5</span>/click)</p>
                        <p class="modalLeft">- Five-Seven (<span style="color: #32CD32;">+1</span>/s and <span style="color: #32CD32;">+6</span>/click)</p>
                        <p><u>Assaults:</u><p>
                        <p>- Famas (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+12</span>/click)</p>
                        <p>- Galil (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+14</span>/click)</p>
                        <p>- M4A1-S (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+16</span>/click)</p>
                        <p>- Scout (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+18</span>/click)</p>
                        <p>- Ak-47 (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+20</span>/click)</p>
                        <p>- AWP (<span style="color: #32CD32;">+3</span>/s and <span style="color: #32CD32;">+22</span>/click)</p>
                     </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
                <div id="myModalAchievements" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">About Achievements</h2>
                      </div>
                      <div class="modal-body">
                        <p style="color: #ccc;"><strong><em>How does the exp system works ?</em></strong></p>
                        <p>- When you unlock an achievement you gain some exp.</p>
                        <p>- Each time you get an achievement the next one will be harder to get.</p>
                        <p>- Once you pass a level your exp is reset to 0xp.</p>
                        <p>- For each level you need 600xp it doesn't change since achievements are harder to get.</p>
                        <p>- When you levelup you gain points on CS:GO Farm with what you can go withdraw skins.</p>
                        <p>- Reaching level 20 will make you pass a rank on CS:GO Farm</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
                <div id="myModalAntiAfk" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
                  <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Are you still here ?</h2>
                      </div>
                      <div class="modal-body">
                        <p style="color: #ccc"><strong><em>Why is this here ?</em></strong></p>
                        <p>This is for avoiding scripts more commonly named as cheats.</p>
                        <p>Not 100% efficient but still is quite efficient.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
            <div id="myModalLoginIfNotLogged" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span style="color: red;">x</span></button>
                    <h2 class="modal-title">L'achievement gagné</h2>
                  </div>
                  <div class="modal-body">
                    <p>Some text in the modal.</p>
                  </div>
                  <div class="modal-footer">
                    <p style="font-size: 14px;">"Petite Phrase sympas"<p>
                  </div>
                </div>

              </div>
            </div>
        <div class="container-fluid noSelect noCursor iCenter">
            <div class="row">

                <div id="caseSpot" class="col-sm-12 col-md-6 col-lg-4">

                    <h1>Case Clicker <button type="button" class="btn btn-info infoBtnUpg" data-toggle="modal" data-target="#myModalCase"><span class="glyphicon glyphicon-question-sign infoIcon"></span></buttons></h1>
                        <div class="caseNumberSpot">
                            <h4 class="yourBalance">Your balance</h4>
                            <input class="caseNumber" type="text" disabled value="0">
                        </div>
                        <div class="casePerSecSpot">
                            <h4 class="yourBalanceSec">Euros per second</h4>
                            <input class="casePerSec" type="text" disabled value="0">
                        </div>
                        <!-- <div class="casePerClickSpot">
                            <h4 class="yourBalanceClick">Euros per click</h4>
                            <input class="casePerClick" type="text" disabled value="1">
                        </div>-->
                        <div id='org_div1'>
                            <img id="caseCsgoImgId" class="caseCsgoImg" src="CSS/IMGS/caseCsgo3.png" draggable="false">
                        </div>
                        <h4 class="fadingEuroOne fadingEuro"></h4>
                        <h4 class="fadingEuroTwo fadingEuro"></h4>
                        <h4 class="fadingEuroThree fadingEuro"></h4>
                        <h4 class="fadingEuroFour fadingEuro"></h4>
                        <h4 class="fadingEuroFive fadingEuro"></h4>
                        <h4 class="fadingEuroSix fadingEuro"></h4>
                        <h4 class="fadingEuroSeven fadingEuro"></h4>
                        <h4 class="fadingEuroEight fadingEuro"></h4>
                        <h4 class="fadingEuroNine fadingEuro"></h4>
                        <h4 class="fadingEuroTen fadingEuro"></h4>
                        <h4 class="fadingEuroOneOne fadingEuro"></h4>
                        <h4 class="fadingEuroOneTwo fadingEuro"></h4>
                        <h4 class="fadingEuroOneThree fadingEuro"></h4>
                        <h4 class="fadingEuroOneFour fadingEuro"></h4>

                        <!-- <p style="margin-top: 10px; color: #ccc; font-size: 14px">Sponsored links<p>
                        <div class="adSpot">
                            <p>Ads Box<p>
                        </div> -->

                    <!-- <img class="glowingCircle" src="CSS/IMGS/caseCsgo3.png" draggable="false"> -->
                </div>

                <div id="upgradeSpot" class="col-md-6 col-lg-4">

                    <h1><span class="glyphicon glyphicon-tasks"></span> Upgrades <button type="button" class="btn btn-info infoBtnUpg" data-toggle="modal" data-target="#myModalUpgrades"><span class="glyphicon glyphicon-question-sign infoIcon"></span></buttons></h1>
                        <!--<div class="moreUpgBtn">
                            <div class="glockMoreUpg">
                                <button type="button" class="damageBtn btn btn-basic" data-toggle="popover" title="COST" data-content="500000€" data-trigger="focus">Damage+</button>
                                <button type="button" class="recoilBtn btn btn-basic" data-toggle="popover" title="COST" data-content="1000000€" data-trigger="focus">Recoil+</button>
                                <button type="button" class="accuracyBtn btn btn-basic">Accuracy+</button>
                                <button type="button" class="statstrakBtn btn btn-basic">Statstrak</button>
                            </div>
                        </div>-->
                        <div class="btnUpgs">
                    <div class="groupBtn">

                        <div class="btn-group btnGroup" role="group">
                    <button type="button" class="btn btn-default glockBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/G-18/Glock-18.ico"> Glock</span>
                        <input class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="20"><span class="glyphicon glyphicon-euro" style="font-weight: bold;"></span></div></button>
                        <button type="button" class="btn btn-danger sell sellGlock">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button type="button" class="btn btn-default uspBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Usp/USP-S.ico"> Usp-s</span>
                        <input class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="30"><span class="glyphicon glyphicon-euro" style="font-weight: bold;"></span></div></button>
                        <button type="button" class="btn btn-danger sell sellUsp">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button type="button" class="btn btn-default p250Btn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/P250/p250.ico"> P250</span>
                        <input class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="45"><span class="glyphicon glyphicon-euro" style="font-weight: bold;"></span></div></button>
                        <button type="button" class="btn btn-danger sell sellP250">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button type="button" class="btn btn-default deagBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Desert_Eagle/Desert_Eagle.ico"> Deagle</span>
                        <input class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="68"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button type="button" class="btn btn-danger sell sellDeag">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default tec9Btn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Tec-9/Tec-9.ico"> Tec-9</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="102"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellTec9">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default fiveBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Five-Seven/Five-SeveN.ico"> Five</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="15"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="153"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellFive">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default famasBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/TheRest/s555fn.ico"> Famas</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="306"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellFamas">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default galilBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/TheRest/s650fn.ico"> Galil</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="459"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellGalil">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default m4Btn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/M4A1-S/M4A1-S.ico"> M4A1-S</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="689"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellM4">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default scoutBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/TheRest/s200.ico"> Scout</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="1034"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellScout">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default akBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Ak/Ak_Cartel.ico"> Ak-47</span>
                        <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="1551"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                        <button class="btn btn-danger sell sellAk">Sell</button>
                    </div>

                        <div class="btn-group btnGroup" role="group">
                    <button class="btn btn-default awpBtn btnUpg"><span><img class="upgIcon" src="CSS/IMGS/csgo/Weapons/Awp/Awp.ico"> AWP</span>
                            <input type="button" class="clickerUpgInpt1" type="text" disabled value="0" max="10"><div class="floatRight"><input class="clickerUpgInpt2" type="text" disabled value="2327"><span class="glyphicon glyphicon-euro" style="font-weight: bold"></span></div></button>
                            <button class="btn btn-danger sell sellAwp">Sell</button>
                        </div>
                    </div>
                </div>
            </div>

                <div id="achievementSpot" class="col-md-12 col-lg-4">

                    <h1><span class="glyphicon glyphicon-cog"></span> Achievements <button type="button" class="btn btn-info infoBtnUpg" data-toggle="modal" data-target="#myModalAchievements"><span class="glyphicon glyphicon-question-sign infoIcon"></span></buttons></h1>
                        <h4 class="yourTotal">Total of <span style="font-weight: bold;">€</span> Collected</h4>
                            <input class="euroTotal" type="text" disabled value="0">
                        <div class="divider"></div>
                            <h4 class="yourClicks">Total of clicks</h4>
                                <input class="clickTotal" type="text" disabled value="0">
                        <div class="divider"></div>
                            <h4 class="yourLevel">Level 0</h4>
                        <div class="progress">
                            <div class="progress-bar progressBar" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                <span class="progressBarText" style="color: #1E90FF;">0 Exp</span>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <h4 class="yourAchievements">Your achievements</h4>
                            <div class="iconAchievNo noBash mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bash.ico" draggable="false"></a></div>
                            <div class="iconAchiev bash mod-tooltip"><a data-toggle="tooltip" title="Gained 1 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bash.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noBish mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bish.ico" draggable="false"></a></div>
                            <div class="iconAchiev bish mod-tooltip"><a data-toggle="tooltip" title="Gained 10 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bish.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noBosh mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bosh.ico" draggable="false"></a></div>
                            <div class="iconAchiev bosh mod-tooltip"><a data-toggle="tooltip" title="Gained 100 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Bosh.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noDrug mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Drug.ico" draggable="false"></a></div>
                            <div class="iconAchiev drug mod-tooltip"><a data-toggle="tooltip" title="Gained 250 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Drug.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noRekt mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Rekt.ico" draggable="false"></a></div>
                            <div class="iconAchiev rekt mod-tooltip"><a data-toggle="tooltip" title="Gained 500 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Rekt.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noSkull mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Skull.ico" draggable="false"></a></div>
                            <div class="iconAchiev skull mod-tooltip"><a data-toggle="tooltip" title="Gained 1 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Skull.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noHeadshot mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Headshot.ico" draggable="false"></a></div>
                            <div class="iconAchiev headshot mod-tooltip"><a data-toggle="tooltip" title="2 500 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Headshot.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noHowl mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Howl.ico" draggable="false"></a></div>
                            <div class="iconAchiev howl mod-tooltip"><a data-toggle="tooltip" title="5 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Howl.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noTreize mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/13.ico" draggable="false"></a></div>
                            <div class="iconAchiev treize mod-tooltip"><a data-toggle="tooltip" title="10 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/13.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noStealth mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Stealth.ico" draggable="false"></a></div>
                            <div class="iconAchiev stealth mod-tooltip"><a data-toggle="tooltip" title="25 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Stealth.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noChi mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Chi.ico" draggable="false"></a></div>
                            <div class="iconAchiev chi mod-tooltip"><a data-toggle="tooltip" title="50 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Chi.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noItsafox mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/ItsaFox.ico" draggable="false"></a></div>
                            <div class="iconAchiev itsafox mod-tooltip"><a data-toggle="tooltip" title="100 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/ItsaFox.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noPear mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Pear.ico" draggable="false"></a></div>
                            <div class="iconAchiev pear mod-tooltip"><a data-toggle="tooltip" title="250 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Pear.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noWarowl mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/WarOwl.ico" draggable="false"></a></div>
                            <div class="iconAchiev warowl mod-tooltip"><a data-toggle="tooltip" title="500 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/WarOwl.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noSwag mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Swag.ico" draggable="false"></a></div>
                            <div class="iconAchiev swag mod-tooltip"><a data-toggle="tooltip" title="1 000 000 000€"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Swag.ico" draggable="false"></a></div>

                            <div class="iconAchievNo noNulu mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Nulu.ico" draggable="false"></a></div>
                            <div class="iconAchiev nulu mod-tooltip"><a data-toggle="tooltip" title="10 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Nulu.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noCsgo mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_.ico" draggable="false"></a></div>
                            <div class="iconAchiev csgo mod-tooltip"><a data-toggle="tooltip" title="500 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noCsgoBlue mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_Blue.ico" draggable="false"></a></div>
                            <div class="iconAchiev csgoBlue mod-tooltip"><a data-toggle="tooltip" title="1000 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_Blue.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noCsgoGreen mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_Green.ico" draggable="false"></a></div>
                            <div class="iconAchiev csgoGreen mod-tooltip"><a data-toggle="tooltip" title="2500 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_Green.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noCsgoRed mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_RED.ico" draggable="false"></a></div>
                            <div class="iconAchiev csgoRed mod-tooltip"><a data-toggle="tooltip" title="5000 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Other/CSGO_RED.ico" draggable="false"></a></div>
                            <div class="iconAchievNo noFlick mod-tooltip"><a data-toggle="tooltip" title="Locked"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Flick.ico" draggable="false"></a></div>
                            <div class="iconAchiev flick mod-tooltip"><a data-toggle="tooltip" title="10 000 clicks"><img class="achievIcon" src="CSS/IMGS/csgo/Stickers/Flick.ico" draggable="false"></a></div>

                        </div>
                    </div>
                </div>

        <footer class="text-center">
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="clicker.php">Clicker</a></li>
                            <li><a href="coinflip.php">Coinflip</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>

            </nav>

            <!-- <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <h5>© 2017 Udemy.com</h5> -->
        </footer>

    </body>
</html>
