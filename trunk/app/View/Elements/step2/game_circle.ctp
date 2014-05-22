<div style="display: none;" class="khung_t view_k_3">
            <div style="overflow:scroll;height:600px;">
                <div style="float:left;clear:both;width:100px;">&nbsp;</div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 0)" onkeyup="javascript:inputOvDefault(this, this.value, 0)">&nbsp;Overnight Max Default For All Sports</div>
                <br/>
                <br/>
                <?php
                    $i = 0; 
                    foreach ($gamescircle as $key => $circle) :
                        $i++;
                ?>
                <div style="float:left;clear:both;width:100px;"><strong><?php echo $this->GamesCircle->getTourName($circle['DefaultGamesCircle']['tournament_id'])?></strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 1)" onkeyup="javascript:inputOvDefault(this, this.value, 1)">&nbsp;Overnight Max Default By Sport</div>
                

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
                                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_PS_Game" class="input" type="text" style="width:50px;">
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
                                        <span id="gc_ol_<?php echo $i;?>_PS_Game" class="gc_nm_<?php echo $i?>">Normal</span>
                                        <select onchange="" id="gc_ol_<?php echo $i;?>_PS_Game_ol" style="display:none;" class="gc_ol_<?php echo $i;?>">
                                            <option>1:00 AM</option>
                                            <option>2:00 AM</option>
                                            <option>3:00 AM</option>
                                            <option>4:00 AM</option>
                                            <option>5:00 AM</option>
                                            <option>6:00 AM</option>
                                            <option>7:00 AM</option>
                                            <option>8:00 AM</option>
                                            <option>9:00 AM</option>
                                            <option>10:00 AM</option>
                                            <option>11:00 AM</option>
                                            <option>12:00 AM</option>
                                            <option>1:00 PM</option>
                                            <option>2:00 PM</option>
                                            <option>3:00 PM</option>
                                            <option>4:00 PM</option>
                                            <option>5:00 PM</option>
                                            <option>6:00 PM</option>
                                            <option>7:00 PM</option>
                                            <option>8:00 PM</option>
                                            <option>9:00 PM</option>
                                            <option>10:00 PM</option>
                                            <option>11:00 PM</option>
                                            <option>12:00 PM</option>
                                        </select>
                                        <select onchange="selectReleaseLine(this,'gc_rc_<?php echo $i;?>_PS_Game_rc','gc_ol_<?php echo $i;?>_PS_Game_review')" id="gc_ol_<?php echo $i;?>_PS_Game_rl" style="display:none;" class="gc_rl_<?php echo $i;?>">
                                            <option>15 Min</option>
                                            <option>30 Min</option>
                                            <option>45 Min</option>
                                            <option>1 hr</option>
                                            <option>1:15</option>
                                            <option>1:30</option>
                                            <option>1:45</option>
                                            <option>2 hr</option>
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
                                        <span id="gc_cmw_1_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_PS_Game_cmw">
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
                                        <span id="gc_rc_1_PS_Game_rc_lbl" style="display:none" class="gc_rc_rl_<?php echo $i;?>">off</span>
                                        <select onchange="selectReleaseCircle(this)" id="gc_rc_1_PS_Game_rc" class="gc_rc_nm_<?php echo $i;?>">
                                            <option>off</option>
                                            <option>2 hr</option>
                                            <option>1:45</option>
                                            <option>1:30</option>
                                            <option>1:15</option>
                                            <option>1 hr</option>
                                            <option>45 min</option>
                                            <option>30 min</option>
                                            <option>15 min</option>
                                        </select>
                                        <select onchange="selectReleaseCircle(this)" id="gc_rc_2_PS_Game_rc" style="display: none;" class="gc_rc_ol_<?php echo $i;?>">
                                            <option>15 Min</option>
                                            <option>30 Min</option>
                                            <option>45 Min</option>
                                            <option>1 hr</option>
                                            <option>1:15</option>
                                            <option>1:30</option>
                                            <option>1:45</option>
                                            <option>2 hr</option>
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