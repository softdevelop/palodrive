<div style="display: none;" class="khung_t view_k_3">
            <div style="overflow:scroll;height:600px;">
                <div style="float:left;clear:both;width:100px;">&nbsp;</div>
                <div style="float:left;margin-left:400px;">
                    <input class="default" type="text" onchange="javascript:inputOvDefault(this, this.value, 0)" onkeyup="javascript:inputOvDefault(this, this.value, 0)">&nbsp;Overnight Max Default For All Sports</div>
                <br/>
                <br/>
                <?php
                    $i = 0; 
                    foreach ($gamescircle as $key => $circle) :
                        $i++;
                ?>
                <div style="float:left;clear:both;width:100px;"><strong><?php echo $this->GamesCircle->getTourName($circle['DefaultGamesCircle']['tournament_id'])?></strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, <?php echo $circle['DefaultGamesCircle']['tournament_id'] ?>)" onkeyup="javascript:inputOvDefault(this, this.value, <?php echo $circle['DefaultGamesCircle']['tournament_id'] ?>)">&nbsp;Overnight Max Default By Sport</div>
                

                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <?php echo $this->GamesCircle->getHeader($circle['DefaultGamesCircle']);?>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <?php 
                            foreach ($circle['DefaultGamesCircle'] as $key1 => $value) 
                            {
                                if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1) 
                                {

                        ?>
                                    <td>
                                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="ov_max_<?php echo $circle['DefaultGamesCircle']['tournament_id'] ?>" type="text" style="width:50px;" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][1][<?php echo $key1 ?>]">
                                    </td>
                        <?php
                                 }
                            }

                        ?>
                        
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(<?php echo $i;?>, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <?php 
                            foreach ($circle['DefaultGamesCircle'] as $key1 => $value) 
                            {
                                if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1) 
                                {

                        ?>
                                    <td>
                                        <span id="gc_ol_<?php echo $i;?>_PS_Game" class="gc_nm_<?php echo $i?>">Normal
                                            <input class="gc_nm_<?php echo $i?>" type="hidden" value="0" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][4][<?php echo $key1 ?>]" />
                                        </span>
                                        <select onchange="" id="gc_ol_<?php echo $i;?>_PS_Game_ol" style="display:none;" class="gc_ol_<?php echo $i;?>" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][5][<?php echo $key1 ?>]">
                                            <option value="1">1:00 AM</option>
                                            <option value="2">2:00 AM</option>
                                            <option value="3">3:00 AM</option>
                                            <option value="4">4:00 AM</option>
                                            <option value="5">5:00 AM</option>
                                            <option value="6">6:00 AM</option>
                                            <option value="7">7:00 AM</option>
                                            <option value="8">8:00 AM</option>
                                            <option value="9">9:00 AM</option>
                                            <option value="10">10:00 AM</option>
                                            <option value="11">11:00 AM</option>
                                            <option value="12">12:00 AM</option>
                                            <option value="13">1:00 PM</option>
                                            <option value="14">2:00 PM</option>
                                            <option value="15">3:00 PM</option>
                                            <option value="16">4:00 PM</option>
                                            <option value="17">5:00 PM</option>
                                            <option value="18">6:00 PM</option>
                                            <option value="19">7:00 PM</option>
                                            <option value="20">8:00 PM</option>
                                            <option value="21">9:00 PM</option>
                                            <option value="22">10:00 PM</option>
                                            <option value="23">11:00 PM</option>
                                            <option value="24">12:00 PM</option>
                                        </select>
                                        <select onchange="selectReleaseLine(this,'gc_rc_<?php echo $i;?>_PS_Game_rc','gc_ol_<?php echo $i;?>_PS_Game_review')" id="gc_ol_<?php echo $i;?>_PS_Game_rl" style="display:none;" class="gc_rl_<?php echo $i;?>" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][6][<?php echo $key1 ?>]">
                                            <option value="15">15 Min</option>
                                            <option value="30">30 Min</option>
                                            <option value="45">45 Min</option>
                                            <option value="60">1 hr</option>
                                            <option value="75">1:15</option>
                                            <option value="90">1:30</option>
                                            <option value="105">1:45</option>
                                            <option value="120">2 hr</option>
                                        </select>
                                        
                                    </td>
                        <?php
                                }
                            }

                        ?>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <?php 
                            foreach ($circle['DefaultGamesCircle'] as $key1 => $value) 
                            {
                                if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1) 
                                {

                        ?>
                                    <td>
                                        <span id="gc_cmw_1_PS_Game" style="display:none">NA</span>
                                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_PS_Game_cmw" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][2][<?php echo $key1 ?>]">
                                    </td>
                        <?php
                                }
                            }

                        ?>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <?php 
                            foreach ($circle['DefaultGamesCircle'] as $key1 => $value) 
                            {
                                if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1) 
                                {

                        ?>
                                    <td>
                                        <span id="gc_rc_1_PS_Game_rc_lbl" style="display:none" class="gc_rc_rl_<?php echo $i;?>">
                                            off
                                            <input class="gc_rc_rl_<?php echo $i;?>" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][3][<?php echo $key1 ?>]">
                                        </span>
                                        <select onchange="selectReleaseCircle(this)" id="gc_rc_1_PS_Game_rc" class="gc_rc_nm_<?php echo $i;?>" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][3][<?php echo $key1 ?>]">
                                            <option value="0">off</option>
                                            <option value="120">2 hr</option>
                                            <option value="105">1:45</option>
                                            <option value="90">1:30</option>
                                            <option value="75">1:15</option>
                                            <option value="60">1 hr</option>
                                            <option value="45">45 min</option>
                                            <option value="30">30 min</option>
                                            <option value="15">15 min</option>
                                        </select>
                                        <select onchange="selectReleaseCircle(this)" id="gc_rc_2_PS_Game_rc" style="display: none;" class="gc_rc_ol_<?php echo $i;?>" name="data[game_circle][<?php echo $circle['DefaultGamesCircle']['tournament_id']?>][3][<?php echo $key1 ?>]">
                                            <option value="15">15 Min</option>
                                            <option value="30">30 Min</option>
                                            <option value="45">45 Min</option>
                                            <option value="60">1 hr</option>
                                            <option value="75">1:15</option>
                                            <option value="90">1:30</option>
                                            <option value="105">1:45</option>
                                            <option value="210">2 hr</option>
                                        </select>
                                    </td>
                        <?php
                                }
                            }

                        ?>
                    </tr>
                </table>

            <?php endforeach;?>
            </div>
        </div>