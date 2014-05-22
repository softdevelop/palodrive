<div style="display: none;" class="khung_t view_k_3">
            <div style="overflow:scroll;height:600px;">
                <div style="float:left;clear:both;width:100px;">&nbsp;</div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 0)" onkeyup="javascript:inputOvDefault(this, this.value, 0)">&nbsp;Overnight Max Default For All Sports</div>
                <br/>
                <br/>
                <div style="float:left;clear:both;width:100px;"><strong>NFL</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 1)" onkeyup="javascript:inputOvDefault(this, this.value, 1)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                        <td class="header" width="90px;">1st Half Spread</td>
                        <td class="header" width="90px;">1st Half ML</td>
                        <td class="header" width="90px;">1st Half Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_TL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_PS_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_1_TL_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(1, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_1_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_PS_Game_review')" id="gc_ol_1_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_PS_Game_rc','gc_ol_1_PS_Game_review')" id="gc_ol_1_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_1_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_ML_Game_review')" id="gc_ol_1_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_ML_Game_rc','gc_ol_1_ML_Game_review')" id="gc_ol_1_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_1_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_TL_Game_review')" id="gc_ol_1_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_TL_Game_rc','gc_ol_1_TL_Game_review')" id="gc_ol_1_TL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_1_PS_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_PS_1st_Half_review')" id="gc_ol_1_PS_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_PS_1st_Half_rc','gc_ol_1_PS_1st_Half_review')" id="gc_ol_1_PS_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_1_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_ML_1st_Half_review')" id="gc_ol_1_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_ML_1st_Half_rc','gc_ol_1_ML_1st_Half_review')" id="gc_ol_1_ML_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_1_TL_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_1_TL_1st_Half_review')" id="gc_ol_1_TL_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_1_TL_1st_Half_rc','gc_ol_1_TL_1st_Half_review')" id="gc_ol_1_TL_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_1_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_1_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_1_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_TL_Game_cmw"></td>
                        <td><span id="gc_cmw_1_PS_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_PS_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_1_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_ML_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_1_TL_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_1_TL_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_1_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_1_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_1_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_TL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_1_PS_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_PS_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_1_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_ML_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_1_TL_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_1_TL_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>NCAAFB</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 2)" onkeyup="javascript:inputOvDefault(this, this.value, 2)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                        <td class="header" width="90px;">1st Half Spread</td>
                        <td class="header" width="90px;">1st Half ML</td>
                        <td class="header" width="90px;">1st Half Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_TL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_PS_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_2_TL_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(2, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_2_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_PS_Game_review')" id="gc_ol_2_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_PS_Game_rc','gc_ol_2_PS_Game_review')" id="gc_ol_2_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_2_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_ML_Game_review')" id="gc_ol_2_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_ML_Game_rc','gc_ol_2_ML_Game_review')" id="gc_ol_2_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_2_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_TL_Game_review')" id="gc_ol_2_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_TL_Game_rc','gc_ol_2_TL_Game_review')" id="gc_ol_2_TL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_2_PS_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_PS_1st_Half_review')" id="gc_ol_2_PS_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_PS_1st_Half_rc','gc_ol_2_PS_1st_Half_review')" id="gc_ol_2_PS_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_2_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_ML_1st_Half_review')" id="gc_ol_2_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_ML_1st_Half_rc','gc_ol_2_ML_1st_Half_review')" id="gc_ol_2_ML_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_2_TL_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_2_TL_1st_Half_review')" id="gc_ol_2_TL_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_2_TL_1st_Half_rc','gc_ol_2_TL_1st_Half_review')" id="gc_ol_2_TL_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_2_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_2_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_2_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_TL_Game_cmw"></td>
                        <td><span id="gc_cmw_2_PS_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_PS_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_2_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_ML_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_2_TL_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_2_TL_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_2_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_2_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_2_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_TL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_2_PS_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_PS_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_2_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_ML_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_2_TL_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_2_TL_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>NBA</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 3)" onkeyup="javascript:inputOvDefault(this, this.value, 3)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                        <td class="header" width="90px;">1st Half Spread</td>
                        <td class="header" width="90px;">1st Half ML</td>
                        <td class="header" width="90px;">1st Half Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_TL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_PS_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_3_TL_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(3, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_3_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_PS_Game_review')" id="gc_ol_3_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_PS_Game_rc','gc_ol_3_PS_Game_review')" id="gc_ol_3_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_3_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_ML_Game_review')" id="gc_ol_3_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_ML_Game_rc','gc_ol_3_ML_Game_review')" id="gc_ol_3_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_3_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_TL_Game_review')" id="gc_ol_3_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_TL_Game_rc','gc_ol_3_TL_Game_review')" id="gc_ol_3_TL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_3_PS_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_PS_1st_Half_review')" id="gc_ol_3_PS_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_PS_1st_Half_rc','gc_ol_3_PS_1st_Half_review')" id="gc_ol_3_PS_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_3_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_ML_1st_Half_review')" id="gc_ol_3_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_ML_1st_Half_rc','gc_ol_3_ML_1st_Half_review')" id="gc_ol_3_ML_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_3_TL_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_3_TL_1st_Half_review')" id="gc_ol_3_TL_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_3_TL_1st_Half_rc','gc_ol_3_TL_1st_Half_review')" id="gc_ol_3_TL_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_3_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_3_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_3_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_TL_Game_cmw"></td>
                        <td><span id="gc_cmw_3_PS_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_PS_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_3_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_ML_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_3_TL_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_3_TL_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_3_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_3_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_3_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_TL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_3_PS_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_PS_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_3_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_ML_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_3_TL_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_3_TL_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>NCAAM</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 4)" onkeyup="javascript:inputOvDefault(this, this.value, 4)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                        <td class="header" width="90px;">1st Half Spread</td>
                        <td class="header" width="90px;">1st Half ML</td>
                        <td class="header" width="90px;">1st Half Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_TL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_PS_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_4_TL_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(4, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_4_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_PS_Game_review')" id="gc_ol_4_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_PS_Game_rc','gc_ol_4_PS_Game_review')" id="gc_ol_4_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_4_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_ML_Game_review')" id="gc_ol_4_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_ML_Game_rc','gc_ol_4_ML_Game_review')" id="gc_ol_4_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_4_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_TL_Game_review')" id="gc_ol_4_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_TL_Game_rc','gc_ol_4_TL_Game_review')" id="gc_ol_4_TL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_4_PS_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_PS_1st_Half_review')" id="gc_ol_4_PS_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_PS_1st_Half_rc','gc_ol_4_PS_1st_Half_review')" id="gc_ol_4_PS_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_4_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_ML_1st_Half_review')" id="gc_ol_4_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_ML_1st_Half_rc','gc_ol_4_ML_1st_Half_review')" id="gc_ol_4_ML_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_4_TL_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_4_TL_1st_Half_review')" id="gc_ol_4_TL_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_4_TL_1st_Half_rc','gc_ol_4_TL_1st_Half_review')" id="gc_ol_4_TL_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_4_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_4_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_4_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_TL_Game_cmw"></td>
                        <td><span id="gc_cmw_4_PS_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_PS_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_4_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_ML_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_4_TL_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_4_TL_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_4_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_4_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_4_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_TL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_4_PS_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_PS_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_4_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_ML_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_4_TL_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_4_TL_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>WNBA</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 8)" onkeyup="javascript:inputOvDefault(this, this.value, 8)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                        <td class="header" width="90px;">1st Half Spread</td>
                        <td class="header" width="90px;">1st Half ML</td>
                        <td class="header" width="90px;">1st Half Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_TL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_PS_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_8_TL_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(8, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_8_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_PS_Game_review')" id="gc_ol_8_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_PS_Game_rc','gc_ol_8_PS_Game_review')" id="gc_ol_8_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_8_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_ML_Game_review')" id="gc_ol_8_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_ML_Game_rc','gc_ol_8_ML_Game_review')" id="gc_ol_8_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_8_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_TL_Game_review')" id="gc_ol_8_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_TL_Game_rc','gc_ol_8_TL_Game_review')" id="gc_ol_8_TL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_8_PS_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_PS_1st_Half_review')" id="gc_ol_8_PS_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_PS_1st_Half_rc','gc_ol_8_PS_1st_Half_review')" id="gc_ol_8_PS_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_8_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_ML_1st_Half_review')" id="gc_ol_8_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_ML_1st_Half_rc','gc_ol_8_ML_1st_Half_review')" id="gc_ol_8_ML_1st_Half_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_8_TL_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_8_TL_1st_Half_review')" id="gc_ol_8_TL_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_8_TL_1st_Half_rc','gc_ol_8_TL_1st_Half_review')" id="gc_ol_8_TL_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_8_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_8_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_8_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_TL_Game_cmw"></td>
                        <td><span id="gc_cmw_8_PS_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_PS_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_8_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_ML_1st_Half_cmw"></td>
                        <td><span id="gc_cmw_8_TL_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_8_TL_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_8_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_8_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_8_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_TL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_8_PS_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_PS_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_8_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_ML_1st_Half_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_8_TL_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_8_TL_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>MLB</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 5)" onkeyup="javascript:inputOvDefault(this, this.value, 5)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Run Line</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_5_RL_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_5_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_5_TL_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(5, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_5_RL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_5_RL_Game_review')" id="gc_ol_5_RL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_5_RL_Game_rc','gc_ol_5_RL_Game_review')" id="gc_ol_5_RL_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_5_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_5_ML_Game_review')" id="gc_ol_5_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_5_ML_Game_rc','gc_ol_5_ML_Game_review')" id="gc_ol_5_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_5_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_5_TL_Game_review')" id="gc_ol_5_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_5_TL_Game_rc','gc_ol_5_TL_Game_review')" id="gc_ol_5_TL_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_5_RL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_5_RL_Game_cmw"></td>
                        <td><span id="gc_cmw_5_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_5_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_5_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_5_TL_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_5_RL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_5_RL_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_5_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_5_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_5_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_5_TL_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>NHL</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 7)" onkeyup="javascript:inputOvDefault(this, this.value, 7)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_7_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_7_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_7_TL_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(7, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_7_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_7_PS_Game_review')" id="gc_ol_7_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_7_PS_Game_rc','gc_ol_7_PS_Game_review')" id="gc_ol_7_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_7_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_7_ML_Game_review')" id="gc_ol_7_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_7_ML_Game_rc','gc_ol_7_ML_Game_review')" id="gc_ol_7_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_7_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_7_TL_Game_review')" id="gc_ol_7_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_7_TL_Game_rc','gc_ol_7_TL_Game_review')" id="gc_ol_7_TL_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_7_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_7_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_7_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_7_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_7_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_7_TL_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_7_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_7_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_7_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_7_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_7_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_7_TL_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>All Soccer</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 9)" onkeyup="javascript:inputOvDefault(this, this.value, 9)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">1st Half ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_9_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_9_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(9, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_9_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_9_ML_Game_review')" id="gc_ol_9_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_9_ML_Game_rc','gc_ol_9_ML_Game_review')" id="gc_ol_9_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_9_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_9_ML_1st_Half_review')" id="gc_ol_9_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_9_ML_1st_Half_rc','gc_ol_9_ML_1st_Half_review')" id="gc_ol_9_ML_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_9_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_9_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_9_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_9_ML_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_9_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_9_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_9_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_9_ML_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>NCAABB</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 6)" onkeyup="javascript:inputOvDefault(this, this.value, 6)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">Spread</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">Total</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_6_PS_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_6_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_6_TL_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(6, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_6_PS_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_6_PS_Game_review')" id="gc_ol_6_PS_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_6_PS_Game_rc','gc_ol_6_PS_Game_review')" id="gc_ol_6_PS_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_6_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_6_ML_Game_review')" id="gc_ol_6_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_6_ML_Game_rc','gc_ol_6_ML_Game_review')" id="gc_ol_6_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_6_TL_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_6_TL_Game_review')" id="gc_ol_6_TL_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_6_TL_Game_rc','gc_ol_6_TL_Game_review')" id="gc_ol_6_TL_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_6_PS_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_6_PS_Game_cmw"></td>
                        <td><span id="gc_cmw_6_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_6_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_6_TL_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_6_TL_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_6_PS_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_6_PS_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_6_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_6_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_6_TL_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_6_TL_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>MMA / Boxing</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 10)" onkeyup="javascript:inputOvDefault(this, this.value, 10)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_10_ML_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(10, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_10_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_10_ML_Game_review')" id="gc_ol_10_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_10_ML_Game_rc','gc_ol_10_ML_Game_review')" id="gc_ol_10_ML_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_10_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_10_ML_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_10_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_10_ML_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>All Golf</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 11)" onkeyup="javascript:inputOvDefault(this, this.value, 11)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_11_ML_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(11, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_11_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_11_ML_Game_review')" id="gc_ol_11_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_11_ML_Game_rc','gc_ol_11_ML_Game_review')" id="gc_ol_11_ML_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_11_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_11_ML_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_11_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_11_ML_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>Tennis</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 12)" onkeyup="javascript:inputOvDefault(this, this.value, 12)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_12_ML_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(12, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_12_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_12_ML_Game_review')" id="gc_ol_12_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_12_ML_Game_rc','gc_ol_12_ML_Game_review')" id="gc_ol_12_ML_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_12_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_12_ML_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_12_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_12_ML_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>Auto Racing</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 14)" onkeyup="javascript:inputOvDefault(this, this.value, 14)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_14_ML_Game" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(14, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_14_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_14_ML_Game_review')" id="gc_ol_14_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_14_ML_Game_rc','gc_ol_14_ML_Game_review')" id="gc_ol_14_ML_Game_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_14_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_14_ML_Game_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_14_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_14_ML_Game_rc">
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
                        </td>
                    </tr>
                </table>
                <div style="float:left;clear:both;width:100px;"><strong>Arena Football</strong></div>
                <div style="float:left;margin-left:400px;"><input class="default" type="text" name="ov_all_sports" onchange="javascript:inputOvDefault(this, this.value, 13)" onkeyup="javascript:inputOvDefault(this, this.value, 13)">&nbsp;Overnight Max Default By Sport</div>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" width="120px;">Limitations</td>
                        <td class="header" width="90px;">ML</td>
                        <td class="header" width="90px;">1st Half ML</td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Overnight Max</td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_13_ML_Game" class="input" type="text" style="width:50px;"></td>
                        <td><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" id="gc_ov_13_ML_1st_Half" class="input" type="text" style="width:50px;"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">
                            <select onchange="selectOpenLineType(13, this.value);">
                                <option>Normal</option>
                                <option>Open Line</option>
                                <option>Release Line</option>
                            </select>
                        </td>
                        <td>
                            <span id="gc_ol_13_ML_Game">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_13_ML_Game_review')" id="gc_ol_13_ML_Game_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_13_ML_Game_rc','gc_ol_13_ML_Game_review')" id="gc_ol_13_ML_Game_rl" style="display:none;">
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
                        <td>
                            <span id="gc_ol_13_ML_1st_Half">Normal</span>
                            <select onchange="selectOpenLine(this,'gc_ol_13_ML_1st_Half_review')" id="gc_ol_13_ML_1st_Half_ol" style="display:none;">
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
                            <select onchange="selectReleaseLine(this,'gc_rc_13_ML_1st_Half_rc','gc_ol_13_ML_1st_Half_review')" id="gc_ol_13_ML_1st_Half_rl" style="display:none;">
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
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Circle Max</td>
                        <td><span id="gc_cmw_13_ML_Game" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_13_ML_Game_cmw"></td>
                        <td><span id="gc_cmw_13_ML_1st_Half" style="display:none">NA</span><input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" class="input" type="text" style="width:50px;" id="gc_cmw_13_ML_1st_Half_cmw"></td>
                    </tr>
                    <tr>
                        <td class="header" width="120px;">Release Circle</td>
                        <td>
                            <span id="gc_rc_13_ML_Game_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_13_ML_Game_rc">
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
                        </td>
                        <td>
                            <span id="gc_rc_13_ML_1st_Half_rc_lbl" style="display:none">off</span>
                            <select onchange="selectReleaseCircle(this)" id="gc_rc_13_ML_1st_Half_rc">
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
                        </td>
                    </tr>
                </table>
            </div>
        </div>