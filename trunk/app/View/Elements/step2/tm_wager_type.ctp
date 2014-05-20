  <div style="display: block;" class="khung_t view_k_1">
            <p>
                <select id="wager_type_opt" onchange="selectWagerTypeOpt(this.selectedIndex);">
                    <option>All Agents</option>
                    <option>Each Agent</option>
                </select>
            </p>
            <div style="overflow:scroll;height:600px;" id="wager_type_all">
                <p>
                    SportBook Default:&nbsp;
                    <select name="data[sportbook][default]" onchange="selectDefaultSportbook(this.selectedIndex);" id="sportbookDefault">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                    &nbsp;&nbsp;Select All Sports and Wager Types&nbsp;<input type="checkbox" onclick="CheckAllSport(this);"/>
                </p>
                <p>
                    <strong>NFL</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][nfl][sportbook]" onchange="selectSportBook(this);" id="sportbook_1">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][nfl][all]" type="checkbox" onclick="CheckAll(this, '1', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][spread]" id="c_1_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][ml]" id="c_1_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][total]" id="c_1_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][parlay]" id="c_1_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][bet]" id="c_1_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][teaser]" id="c_1_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][future]" id="c_1_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][game][prop]" id="c_1_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][1st_half][spread]" id="c_1_p_1st_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][1st_half][ml]" id="c_1_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][1st_half][total]" id="c_1_p_1st_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][1st_half][parlay]" id="c_1_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][2st_half][spread]" id="c_1_p_2nd_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][2st_half][ml]" id="c_1_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][2st_half][total]" id="c_1_p_2nd_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][2st_half][parlay]" id="c_1_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][quarter][spread]" id="c_1_p_Quarter_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][quarter][ml]" id="c_1_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][quarter][total]" id="c_1_p_Quarter_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nfl][quarter][parlay]" id="c_1_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>NCAAFB</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][ncaafb][sportbook]" onchange="selectSportBook(this);" id="sportbook_2">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][ncaafb][all]" type="checkbox" onclick="CheckAll(this, '2', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][spread]" id="c_2_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][ml]" id="c_2_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][total]" id="c_2_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][parlay]" id="c_2_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][bet]" id="c_2_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][teaser]" id="c_2_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][future]" id="c_2_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][game][prop]" id="c_2_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][1st_half][spread]" id="c_2_p_1st_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][1st_half][ml]" id="c_2_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][1st_half][total]" id="c_2_p_1st_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][1st_half][parlay]" id="c_2_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][2st_half][spread]" id="c_2_p_2nd_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][2st_half][ml]" id="c_2_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][2st_half][total]" id="c_2_p_2nd_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaafb][2st_half][parlay]" id="c_2_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][2st_half][quarter][spread]" id="c_2_p_Quarter_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][2st_half][quarter][ml]" id="c_2_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][2st_half][quarter][total]" id="c_2_p_Quarter_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][2st_half][quarter][parlay]" id="c_2_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>NBA</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][nba][sportbook]" onchange="selectSportBook(this);" id="sportbook_3">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][nba][all]" type="checkbox" onclick="CheckAll(this, '3', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][spread]" id="c_3_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][ml]" id="c_3_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][total]" id="c_3_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][parlay]" id="c_3_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][bet]" id="c_3_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][teaser]" id="c_3_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][future]" id="c_3_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][game][prop]" id="c_3_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][1st_half][spread]" id="c_3_p_1st_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][1st_half][ml]" id="c_3_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][1st_half][total]" id="c_3_p_1st_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][1st_half][parlay]" id="c_3_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][2st_half][spread]" id="c_3_p_2nd_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][2st_half][ml]" id="c_3_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][2st_half][total]" id="c_3_p_2nd_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][2st_half][parlay]" id="c_3_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][quarter][spread]" id="c_3_p_Quarter_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][quarter][ml]" id="c_3_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][quarter][tl]" id="c_3_p_Quarter_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nba][quarter][parlay]" id="c_3_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>NCAAM</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][ncaam][sportbook]" onchange="selectSportBook(this);" id="sportbook_4">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][ncaam][all]" type="checkbox" onclick="CheckAll(this, '4', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][spread]" id="c_4_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][ml]" id="c_4_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][total]" id="c_4_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][parlay]" id="c_4_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][bet]" id="c_4_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][teaser]" id="c_4_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][future]" id="c_4_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][game][prop]" id="c_4_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][spread]" id="c_4_p_1st_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][ml]" id="c_4_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][total]" id="c_4_p_1st_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][parlay]" id="c_4_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][spread]" id="c_4_p_2nd_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][ml]" id="c_4_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][total]" id="c_4_p_2nd_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][1st_half][parlay]" id="c_4_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][quarter][spread]" id="c_4_p_Quarter_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][quarter][ml]" id="c_4_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][quarter][total]" id="c_4_p_Quarter_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaam][quarter][parlay]" id="c_4_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>WNBA</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][wnba][sportbook]" onchange="selectSportBook(this);" id="sportbook_8">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][wnba][all]" type="checkbox" onclick="CheckAll(this, '8', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][spread]" id="c_8_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][ml]" id="c_8_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][total]" id="c_8_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][parlay]" id="c_8_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][bet]" id="c_8_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][teaser]" id="c_8_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][future]" id="c_8_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][game][prop]" id="c_8_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][1st_half][spread]" id="c_8_p_1st_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][1st_half][ml]" id="c_8_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][1st_half][total]" id="c_8_p_1st_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][1st_half][parlay]" id="c_8_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][2st_half][spread]" id="c_8_p_2nd_Half_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][2st_half][ml]" id="c_8_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][2st_half][total]" id="c_8_p_2nd_Half_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][2st_half][parlay]" id="c_8_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][quarter][spread]" id="c_8_p_Quarter_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][quarter][ml]" id="c_8_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][quarter][total]" id="c_8_p_Quarter_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][wnba][quarter][parlay]" id="c_8_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>MLB</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][mlb][sportbook]" onchange="selectSportBook(this);" id="sportbook_5">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][mlb][sportbook][all]" type="checkbox" onclick="CheckAll(this, '5', 0)" /></td>
                        <td class="header" width="70px;">Run Line</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][rl]" id="c_5_p_Game_w_RL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][ml]" id="c_5_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][total]" id="c_5_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][parlay]" id="c_5_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][bet]" id="c_5_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][future]" id="c_5_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][game][prop]" id="c_5_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st 5 Innings</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][1st_5_innings][rl]" id="c_5_p_1st_5_Innings_w_RL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][1st_5_innings][ml]" id="c_5_p_1st_5_Innings_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][1st_5_innings][total]" id="c_5_p_1st_5_Innings_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][1st_5_innings][parlay]" id="c_5_p_1st_5_Innings_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Last 4 Innings</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][last_4_innings][rl]" id="c_5_p_Last_4_Innings_w_RL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][last_4_innings][ml]" id="c_5_p_Last_4_Innings_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][last_4_innings][total]" id="c_5_p_Last_4_Innings_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mlb][last_4_innings][parlay]" id="c_5_p_Last_4_Innings_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>NHL</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][nhl]" onchange="selectSportBook(this);" id="sportbook_7">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][nhl][all]" type="checkbox" onclick="CheckAll(this, '7', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][spread]" id="c_7_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][ml]" id="c_7_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="ddata[wager_type][nhl][game][tl]" id="c_7_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][parlay]" id="c_7_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][bet]" id="c_7_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][future]" id="c_7_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][game][prop]" id="c_7_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Period</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][1st_period][spread]" id="c_7_p_1st_Period_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][1st_period][ml]" id="c_7_p_1st_Period_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][1st_period][total]" id="c_7_p_1st_Period_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][1st_period][parlay]" id="c_7_p_1st_Period_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Period</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][2st_period][spread]" id="c_7_p_2nd_Period_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][2st_period][ml]" id="c_7_p_2nd_Period_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][2st_period][total]" id="c_7_p_2nd_Period_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][2st_period][parlay]" id="c_7_p_2nd_Period_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">3rd Period</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][3st_period][spread]" id="c_7_p_3rd_Period_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][3st_period][ml]" id="c_7_p_3rd_Period_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][3st_period][total]" id="c_7_p_3rd_Period_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][nhl][3st_period][parlay]" id="c_7_p_3rd_Period_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>All Soccer</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][all_soccer][sportbook]" onchange="selectSportBook(this);" id="sportbook_9">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][all_soccer][all]" type="checkbox" onclick="CheckAll(this, '9', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][game][ml]" id="c_9_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][game][parlay]" id="c_9_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][game][bet]" id="c_9_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][game][future]" id="c_9_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][game][prop]" id="c_9_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][1st_half][ml]" id="c_9_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][1st_half][parlay]" id="c_9_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][2st_half][ml]" id="c_9_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_soccer][2st_half][parlay]" id="c_9_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>NCAABB</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][ncaabb][sportbook]" onchange="selectSportBook(this);" id="sportbook_6">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][ncaabb][all]" type="checkbox" onclick="CheckAll(this, '6', 0)" /></td>
                        <td class="header" width="70px;">Spread</td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Total</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][spread]" id="c_6_p_Game_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][ml]" id="c_6_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][total]" id="c_6_p_Game_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][parlay]" id="c_6_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][bet]" id="c_6_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][future]" id="c_6_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][game][prop]" id="c_6_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st 5 Innings</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][1st_5_innings][spread]" id="c_6_p_1st_5_Innings_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][1st_5_innings][ml]" id="c_6_p_1st_5_Innings_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][1st_5_innings][total]" id="c_6_p_1st_5_Innings_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][1st_5_innings][parlay]" id="c_6_p_1st_5_Innings_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Last 4 Innings</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][last_4_innings][spread]" id="c_6_p_Last_4_Innings_w_PS"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][last_4_innings][ml]" id="c_6_p_Last_4_Innings_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][last_4_innings][tota]" id="c_6_p_Last_4_Innings_w_TL"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][ncaabb][last_4_innings][parlay]" id="c_6_p_Last_4_Innings_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p>
                    <strong>MMA / Boxing</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][mma_boxing][sportbook]" onchange="selectSportBook(this);" id="sportbook_10">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][mma_boxing][all]" type="checkbox" onclick="CheckAll(this, '10', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mma_boxing][game][ml]" id="c_10_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mma_boxing][game][parlay]" id="c_10_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mma_boxing][game][bet]" id="c_10_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mma_boxing][game][future]" id="c_10_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][mma_boxing][game][prop]" id="c_10_p_Game_w_prop"/></td>
                    </tr>
                </table>
                <p>
                    <strong>All Golf</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][all_golf][sportbook]" onchange="selectSportBook(this);" id="sportbook_11">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][all_golf][all]" type="checkbox" onclick="CheckAll(this, '11', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_golf][game][ml]" id="c_11_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_golf][game][future]" id="c_11_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][all_golf][game][prop]" id="c_11_p_Game_w_prop"/></td>
                    </tr>
                </table>
                <p>
                    <strong>Tennis</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][tennis][sportbook]" onchange="selectSportBook(this);" id="sportbook_12">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[wager_type][tennis][all]" type="checkbox" onclick="CheckAll(this, '12', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][tennis][game][ml]" id="c_12_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][tennis][game][future]" id="c_12_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[wager_type][tennis][game][prop]" id="c_12_p_Game_w_prop"/></td>
                    </tr>
                </table>
                <p>
                    <strong>Auto Racing</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[sportbook][14]" onchange="selectSportBook(this);" id="sportbook_14">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[c][14][all]" type="checkbox" onclick="CheckAll(this, '14', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][14][p_Game][w_ML]" id="c_14_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][14][p_Game][b_Parlay]" id="c_14_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][14][p_Game][b_If_Bet]" id="c_14_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][14][p_Game][b_Future]" id="c_14_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][14][p_Game][b_prop]" id="c_14_p_Game_w_prop"/></td>
                    </tr>
                </table>
                <p>
                    <strong>Arena Football</strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[sportbook][13]" onchange="selectSportBook(this);" id="sportbook_13">
                        <option value=""></option>
                        <option value="5Dimes">5Dimes</option>
                        <option value="Pinnacle">Pinnacle</option>
                        <option value="CRIS">CRIS</option>
                        <option value="Grande">Grande</option>
                        <option value="BetUS">BetUS</option>
                    </select>
                </p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="data[c][13][all]" type="checkbox" onclick="CheckAll(this, '13', 0)" /></td>
                        <td class="header" width="70px;">ML</td>
                        <td class="header" width="70px;">Parlay</td>
                        <td class="header" width="70px;">If Bet</td>
                        <td class="header" width="70px;">Teaser</td>
                        <td class="header" width="70px;">Future</td>
                        <td class="header" width="70px;" style="background-color:#dcdcdc;">Prop</td>
                    </tr>
                    <tr>
                        <td class="header">Game</td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][w_ML]" id="c_13_p_Game_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][b_Parlay]" id="c_13_p_Game_w_Parlay"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][b_If_Bet]" id="c_13_p_Game_w_If_Bet"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][b_Teaser]" id="c_13_p_Game_w_Teaser"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][b_Future]" id="c_13_p_Game_w_Future"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Game][b_prop]" id="c_13_p_Game_w_prop"/></td>
                    </tr>
                    <tr>
                        <td class="header">1st Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_1st_Half][w_ML]" id="c_13_p_1st_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_1st_Half][b_Parlay]" id="c_13_p_1st_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">2nd Half</td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_2nd_Half][w_ML]" id="c_13_p_2nd_Half_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_2nd_Half][b_Parlay]" id="c_13_p_2nd_Half_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                    <tr>
                        <td class="header">Quarter</td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Quarter][w_ML]" id="c_13_p_Quarter_w_ML"/></td>
                        <td align="center"><input value="1" type="checkbox" name="data[c][13][p_Quarter][b_Parlay]" id="c_13_p_Quarter_w_Parlay"/></td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                        <td align="center" style="color:red;">X</td>
                    </tr>
                </table>
                <p><strong>Horses</strong></p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header">Select All&nbsp;<input value="1" type="checkbox" onclick="CheckAll(this, '1000000')" /></td>
                        <td class="header">Win, Show, Place</td>
                        <td class="header">Exacta</td>
                        <td class="header">Trifecta</td>
                        <td class="header">Superfecta</td>
                    </tr>
                    <tr>
                        <td class="header">Arlington Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][1][wps]" id="c_1000000_1_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][1][exa]" id="c_1000000_1_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][1][tri]" id="c_1000000_1_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][1][sup]" id="c_1000000_1_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Belmont Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][2][wps]" id="c_1000000_2_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][2][exa]" id="c_1000000_2_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][2][tri]" id="c_1000000_2_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][2][sup]" id="c_1000000_2_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Calder Race Course</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][3][wps]" id="c_1000000_3_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][3][exa]" id="c_1000000_3_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][3][tri]" id="c_1000000_3_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][3][sup]" id="c_1000000_3_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Canterbury Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][4][wps]" id="c_1000000_4_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][4][exa]" id="c_1000000_4_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][4][tri]" id="c_1000000_4_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][4][sup]" id="c_1000000_4_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Charles Town Races &amp; Slots</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][5][wps]" id="c_1000000_5_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][5][exa]" id="c_1000000_5_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][5][tri]" id="c_1000000_5_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][5][sup]" id="c_1000000_5_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Churchill Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][6][wps]" id="c_1000000_6_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][6][exa]" id="c_1000000_6_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][6][tri]" id="c_1000000_6_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][6][sup]" id="c_1000000_6_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Delta Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][7][wps]" id="c_1000000_7_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][7][exa]" id="c_1000000_7_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][7][tri]" id="c_1000000_7_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][7][sup]" id="c_1000000_7_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Emerald Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][8][wps]" id="c_1000000_8_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][8][exa]" id="c_1000000_8_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][8][tri]" id="c_1000000_8_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][8][sup]" id="c_1000000_8_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Evangeline Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][9][wps]" id="c_1000000_9_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][9][exa]" id="c_1000000_9_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][9][tri]" id="c_1000000_9_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][9][sup]" id="c_1000000_9_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fair Meadows</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][10][wps]" id="c_1000000_10_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][10][exa]" id="c_1000000_10_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][10][tri]" id="c_1000000_10_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][10][sup]" id="c_1000000_10_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Finger Lakes</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][11][wps]" id="c_1000000_11_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][11][exa]" id="c_1000000_11_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][11][tri]" id="c_1000000_11_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][11][sup]" id="c_1000000_11_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hollywood Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][12][wps]" id="c_1000000_12_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][12][exa]" id="c_1000000_12_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][12][tri]" id="c_1000000_12_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][12][sup]" id="c_1000000_12_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lone Star Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][13][wps]" id="c_1000000_13_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][13][exa]" id="c_1000000_13_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][13][tri]" id="c_1000000_13_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][13][sup]" id="c_1000000_13_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Louisiana Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][14][wps]" id="c_1000000_14_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][14][exa]" id="c_1000000_14_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][14][tri]" id="c_1000000_14_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][14][sup]" id="c_1000000_14_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Penn National</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][15][wps]" id="c_1000000_15_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][15][exa]" id="c_1000000_15_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][15][tri]" id="c_1000000_15_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][15][sup]" id="c_1000000_15_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pleasanton</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][16][wps]" id="c_1000000_16_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][16][exa]" id="c_1000000_16_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][16][tri]" id="c_1000000_16_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][16][sup]" id="c_1000000_16_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Prairie Meadows</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][17][wps]" id="c_1000000_17_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][17][exa]" id="c_1000000_17_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][17][tri]" id="c_1000000_17_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][17][sup]" id="c_1000000_17_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Presque Isle Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][18][wps]" id="c_1000000_18_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][18][exa]" id="c_1000000_18_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][18][tri]" id="c_1000000_18_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][18][sup]" id="c_1000000_18_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ruidoso Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][19][wps]" id="c_1000000_19_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][19][exa]" id="c_1000000_19_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][19][tri]" id="c_1000000_19_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][19][sup]" id="c_1000000_19_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sam Houston Race Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][20][wps]" id="c_1000000_20_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][20][exa]" id="c_1000000_20_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][20][tri]" id="c_1000000_20_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][20][sup]" id="c_1000000_20_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sunray Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][21][wps]" id="c_1000000_21_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][21][exa]" id="c_1000000_21_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][21][tri]" id="c_1000000_21_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][21][sup]" id="c_1000000_21_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Woodbine</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][22][wps]" id="c_1000000_22_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][22][exa]" id="c_1000000_22_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][22][tri]" id="c_1000000_22_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][22][sup]" id="c_1000000_22_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Arapahoe Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][23][wps]" id="c_1000000_23_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][23][exa]" id="c_1000000_23_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][23][tri]" id="c_1000000_23_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][23][sup]" id="c_1000000_23_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Assiniboia Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][24][wps]" id="c_1000000_24_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][24][exa]" id="c_1000000_24_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][24][tri]" id="c_1000000_24_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][24][sup]" id="c_1000000_24_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Camarero Race Track</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][25][wps]" id="c_1000000_25_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][25][exa]" id="c_1000000_25_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][25][tri]" id="c_1000000_25_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][25][sup]" id="c_1000000_25_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fairmount Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][26][wps]" id="c_1000000_26_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][26][exa]" id="c_1000000_26_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][26][tri]" id="c_1000000_26_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][26][sup]" id="c_1000000_26_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hastings Racecourse</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][27][wps]" id="c_1000000_27_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][27][exa]" id="c_1000000_27_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][27][tri]" id="c_1000000_27_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][27][sup]" id="c_1000000_27_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Indiana Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][28][wps]" id="c_1000000_28_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][28][exa]" id="c_1000000_28_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][28][tri]" id="c_1000000_28_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][28][sup]" id="c_1000000_28_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lethbridge</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][29][wps]" id="c_1000000_29_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][29][exa]" id="c_1000000_29_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][29][tri]" id="c_1000000_29_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][29][sup]" id="c_1000000_29_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lincoln Race Course</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][30][wps]" id="c_1000000_30_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][30][exa]" id="c_1000000_30_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][30][tri]" id="c_1000000_30_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][30][sup]" id="c_1000000_30_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Los Alamitos</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][31][wps]" id="c_1000000_31_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][31][exa]" id="c_1000000_31_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][31][tri]" id="c_1000000_31_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][31][sup]" id="c_1000000_31_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Marquis Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][32][wps]" id="c_1000000_32_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][32][exa]" id="c_1000000_32_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][32][tri]" id="c_1000000_32_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][32][sup]" id="c_1000000_32_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Monmouth Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][33][wps]" id="c_1000000_33_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][33][exa]" id="c_1000000_33_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][33][tri]" id="c_1000000_33_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][33][sup]" id="c_1000000_33_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Mountaineer Casino Racetrack &amp; Resort</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][34][wps]" id="c_1000000_34_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][34][exa]" id="c_1000000_34_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][34][tri]" id="c_1000000_34_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][34][sup]" id="c_1000000_34_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Northlands Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][35][wps]" id="c_1000000_35_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][35][exa]" id="c_1000000_35_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][35][tri]" id="c_1000000_35_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][35][sup]" id="c_1000000_35_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Philadelphia Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][36][wps]" id="c_1000000_36_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][36][exa]" id="c_1000000_36_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][36][tri]" id="c_1000000_36_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][36][sup]" id="c_1000000_36_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">River Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][37][wps]" id="c_1000000_37_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][37][exa]" id="c_1000000_37_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][37][tri]" id="c_1000000_37_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][37][sup]" id="c_1000000_37_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sandy Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][38][wps]" id="c_1000000_38_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][38][exa]" id="c_1000000_38_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][38][tri]" id="c_1000000_38_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][38][sup]" id="c_1000000_38_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Thistledown</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][39][wps]" id="c_1000000_39_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][39][exa]" id="c_1000000_39_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][39][tri]" id="c_1000000_39_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][39][sup]" id="c_1000000_39_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Chippewa Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][40][wps]" id="c_1000000_40_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][40][exa]" id="c_1000000_40_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][40][tri]" id="c_1000000_40_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][40][sup]" id="c_1000000_40_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Colonial Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][41][wps]" id="c_1000000_41_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][41][exa]" id="c_1000000_41_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][41][tri]" id="c_1000000_41_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][41][sup]" id="c_1000000_41_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Delaware Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][42][wps]" id="c_1000000_42_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][42][exa]" id="c_1000000_42_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][42][tri]" id="c_1000000_42_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][42][sup]" id="c_1000000_42_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Grants Pass</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][43][wps]" id="c_1000000_43_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][43][exa]" id="c_1000000_43_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][43][tri]" id="c_1000000_43_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][43][sup]" id="c_1000000_43_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Kamloops</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][44][wps]" id="c_1000000_44_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][44][exa]" id="c_1000000_44_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][44][tri]" id="c_1000000_44_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][44][sup]" id="c_1000000_44_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pinnacle Race Course</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][45][wps]" id="c_1000000_45_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][45][exa]" id="c_1000000_45_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][45][tri]" id="c_1000000_45_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][45][sup]" id="c_1000000_45_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Suffolk Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][46][wps]" id="c_1000000_46_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][46][exa]" id="c_1000000_46_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][46][tri]" id="c_1000000_46_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][46][sup]" id="c_1000000_46_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Yavapai Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][47][wps]" id="c_1000000_47_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][47][exa]" id="c_1000000_47_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][47][tri]" id="c_1000000_47_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][47][sup]" id="c_1000000_47_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ajax Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][48][wps]" id="c_1000000_48_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][48][exa]" id="c_1000000_48_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][48][tri]" id="c_1000000_48_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][48][sup]" id="c_1000000_48_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fort Erie</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][49][wps]" id="c_1000000_49_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][49][exa]" id="c_1000000_49_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][49][tri]" id="c_1000000_49_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][49][sup]" id="c_1000000_49_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Mt. Pleasant Meadows</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][50][wps]" id="c_1000000_50_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][50][exa]" id="c_1000000_50_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][50][tri]" id="c_1000000_50_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][50][sup]" id="c_1000000_50_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Millarville</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][51][wps]" id="c_1000000_51_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][51][exa]" id="c_1000000_51_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][51][tri]" id="c_1000000_51_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][51][sup]" id="c_1000000_51_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Flagstaff</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][52][wps]" id="c_1000000_52_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][52][exa]" id="c_1000000_52_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][52][tri]" id="c_1000000_52_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][52][sup]" id="c_1000000_52_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Grande Prairie</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][53][wps]" id="c_1000000_53_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][53][exa]" id="c_1000000_53_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][53][tri]" id="c_1000000_53_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][53][sup]" id="c_1000000_53_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Gillespie County Fairground</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][54][wps]" id="c_1000000_54_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][54][exa]" id="c_1000000_54_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][54][tri]" id="c_1000000_54_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][54][sup]" id="c_1000000_54_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Minidoka County Fair @ Rupert</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][55][wps]" id="c_1000000_55_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][55][exa]" id="c_1000000_55_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][55][tri]" id="c_1000000_55_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][55][sup]" id="c_1000000_55_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sunflower</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][56][wps]" id="c_1000000_56_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][56][exa]" id="c_1000000_56_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][56][tri]" id="c_1000000_56_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][56][sup]" id="c_1000000_56_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hollywood Casino At Charles Town Races</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][57][wps]" id="c_1000000_57_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][57][exa]" id="c_1000000_57_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][57][tri]" id="c_1000000_57_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][57][sup]" id="c_1000000_57_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ellis Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][58][wps]" id="c_1000000_58_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][58][exa]" id="c_1000000_58_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][58][tri]" id="c_1000000_58_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][58][sup]" id="c_1000000_58_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Kin Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][59][wps]" id="c_1000000_59_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][59][exa]" id="c_1000000_59_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][59][tri]" id="c_1000000_59_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][59][sup]" id="c_1000000_59_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sacramento</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][60][wps]" id="c_1000000_60_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][60][exa]" id="c_1000000_60_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][60][tri]" id="c_1000000_60_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][60][sup]" id="c_1000000_60_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Crooked River Roundup</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][61][wps]" id="c_1000000_61_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][61][exa]" id="c_1000000_61_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][61][tri]" id="c_1000000_61_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][61][sup]" id="c_1000000_61_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Special</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][62][wps]" id="c_1000000_62_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][62][exa]" id="c_1000000_62_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][62][tri]" id="c_1000000_62_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][62][sup]" id="c_1000000_62_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Red Mile</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][63][wps]" id="c_1000000_63_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][63][exa]" id="c_1000000_63_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][63][tri]" id="c_1000000_63_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][63][sup]" id="c_1000000_63_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Saratoga</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][64][wps]" id="c_1000000_64_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][64][exa]" id="c_1000000_64_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][64][tri]" id="c_1000000_64_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][64][sup]" id="c_1000000_64_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Del Mar</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][65][wps]" id="c_1000000_65_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][65][exa]" id="c_1000000_65_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][65][tri]" id="c_1000000_65_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][65][sup]" id="c_1000000_65_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Horsemen&apos;s Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][66][wps]" id="c_1000000_66_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][66][exa]" id="c_1000000_66_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][66][tri]" id="c_1000000_66_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][66][sup]" id="c_1000000_66_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Great Falls</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][67][wps]" id="c_1000000_67_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][67][exa]" id="c_1000000_67_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][67][tri]" id="c_1000000_67_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][67][sup]" id="c_1000000_67_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Santa Rosa</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][68][wps]" id="c_1000000_68_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][68][exa]" id="c_1000000_68_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][68][tri]" id="c_1000000_68_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][68][sup]" id="c_1000000_68_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Columbus</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][69][wps]" id="c_1000000_69_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][69][exa]" id="c_1000000_69_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][69][tri]" id="c_1000000_69_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][69][sup]" id="c_1000000_69_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hoosier Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][70][wps]" id="c_1000000_70_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][70][exa]" id="c_1000000_70_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][70][tri]" id="c_1000000_70_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][70][sup]" id="c_1000000_70_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Laurel Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][71][wps]" id="c_1000000_71_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][71][exa]" id="c_1000000_71_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][71][tri]" id="c_1000000_71_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][71][sup]" id="c_1000000_71_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Oneida County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][72][wps]" id="c_1000000_72_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][72][exa]" id="c_1000000_72_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][72][tri]" id="c_1000000_72_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][72][sup]" id="c_1000000_72_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Tillamook County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][73][wps]" id="c_1000000_73_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][73][exa]" id="c_1000000_73_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][73][tri]" id="c_1000000_73_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][73][sup]" id="c_1000000_73_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ferndale</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][74][wps]" id="c_1000000_74_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][74][exa]" id="c_1000000_74_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][74][tri]" id="c_1000000_74_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][74][sup]" id="c_1000000_74_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Western Mt Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][75][wps]" id="c_1000000_75_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][75][exa]" id="c_1000000_75_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][75][tri]" id="c_1000000_75_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][75][sup]" id="c_1000000_75_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Albuquerque</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][76][wps]" id="c_1000000_76_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][76][exa]" id="c_1000000_76_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][76][tri]" id="c_1000000_76_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][76][sup]" id="c_1000000_76_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Remington Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][77][wps]" id="c_1000000_77_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][77][exa]" id="c_1000000_77_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][77][tri]" id="c_1000000_77_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][77][sup]" id="c_1000000_77_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Horsemen&apos;s Atokad Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][78][wps]" id="c_1000000_78_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][78][exa]" id="c_1000000_78_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][78][tri]" id="c_1000000_78_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][78][sup]" id="c_1000000_78_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Golden Gate Fields</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][79][wps]" id="c_1000000_79_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][79][exa]" id="c_1000000_79_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][79][tri]" id="c_1000000_79_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][79][sup]" id="c_1000000_79_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Elko County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][80][wps]" id="c_1000000_80_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][80][exa]" id="c_1000000_80_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][80][tri]" id="c_1000000_80_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][80][sup]" id="c_1000000_80_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Timonium</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][81][wps]" id="c_1000000_81_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][81][exa]" id="c_1000000_81_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][81][tri]" id="c_1000000_81_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][81][sup]" id="c_1000000_81_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Yellowstone Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][82][wps]" id="c_1000000_82_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][82][exa]" id="c_1000000_82_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][82][tri]" id="c_1000000_82_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][82][sup]" id="c_1000000_82_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Parx Racing At Philadelphia Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][83][wps]" id="c_1000000_83_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][83][exa]" id="c_1000000_83_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][83][tri]" id="c_1000000_83_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][83][sup]" id="c_1000000_83_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Retama Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][84][wps]" id="c_1000000_84_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][84][exa]" id="c_1000000_84_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][84][tri]" id="c_1000000_84_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][84][sup]" id="c_1000000_84_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Walla Walla</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][85][wps]" id="c_1000000_85_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][85][exa]" id="c_1000000_85_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][85][tri]" id="c_1000000_85_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][85][sup]" id="c_1000000_85_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Will Rogers Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][86][wps]" id="c_1000000_86_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][86][exa]" id="c_1000000_86_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][86][tri]" id="c_1000000_86_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][86][sup]" id="c_1000000_86_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Black Foot</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][87][wps]" id="c_1000000_87_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][87][exa]" id="c_1000000_87_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][87][tri]" id="c_1000000_87_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][87][sup]" id="c_1000000_87_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fairplex Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][88][wps]" id="c_1000000_88_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][88][exa]" id="c_1000000_88_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][88][tri]" id="c_1000000_88_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][88][sup]" id="c_1000000_88_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Turfway Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][89][wps]" id="c_1000000_89_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][89][exa]" id="c_1000000_89_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][89][tri]" id="c_1000000_89_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][89][sup]" id="c_1000000_89_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Harney County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][90][wps]" id="c_1000000_90_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][90][exa]" id="c_1000000_90_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][90][tri]" id="c_1000000_90_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][90][sup]" id="c_1000000_90_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Kentucky Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][91][wps]" id="c_1000000_91_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][91][exa]" id="c_1000000_91_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][91][tri]" id="c_1000000_91_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][91][sup]" id="c_1000000_91_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Zia Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][92][wps]" id="c_1000000_92_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][92][exa]" id="c_1000000_92_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][92][tri]" id="c_1000000_92_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][92][sup]" id="c_1000000_92_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fair Grounds</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][93][wps]" id="c_1000000_93_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][93][exa]" id="c_1000000_93_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][93][tri]" id="c_1000000_93_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][93][sup]" id="c_1000000_93_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fair Play Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][94][wps]" id="c_1000000_94_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][94][exa]" id="c_1000000_94_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][94][tri]" id="c_1000000_94_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][94][sup]" id="c_1000000_94_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Melville District Agripar</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][95][wps]" id="c_1000000_95_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][95][exa]" id="c_1000000_95_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][95][tri]" id="c_1000000_95_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][95][sup]" id="c_1000000_95_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Shawan Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][96][wps]" id="c_1000000_96_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][96][exa]" id="c_1000000_96_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][96][tri]" id="c_1000000_96_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][96][sup]" id="c_1000000_96_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Foxfield</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][97][wps]" id="c_1000000_97_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][97][exa]" id="c_1000000_97_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][97][tri]" id="c_1000000_97_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][97][sup]" id="c_1000000_97_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Oak Tree At Hollywood Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][98][wps]" id="c_1000000_98_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][98][exa]" id="c_1000000_98_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][98][tri]" id="c_1000000_98_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][98][sup]" id="c_1000000_98_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hawthorne</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][99][wps]" id="c_1000000_99_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][99][exa]" id="c_1000000_99_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][99][tri]" id="c_1000000_99_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][99][sup]" id="c_1000000_99_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Turf Paradise</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][100][wps]" id="c_1000000_100_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][100][exa]" id="c_1000000_100_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][100][tri]" id="c_1000000_100_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][100][sup]" id="c_1000000_100_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Middleburg</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][101][wps]" id="c_1000000_101_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][101][exa]" id="c_1000000_101_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][101][tri]" id="c_1000000_101_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][101][sup]" id="c_1000000_101_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Portland Meadows</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][102][wps]" id="c_1000000_102_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][102][exa]" id="c_1000000_102_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][102][tri]" id="c_1000000_102_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][102][sup]" id="c_1000000_102_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fresno</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][103][wps]" id="c_1000000_103_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][103][exa]" id="c_1000000_103_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][103][tri]" id="c_1000000_103_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][103][sup]" id="c_1000000_103_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Keeneland</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][104][wps]" id="c_1000000_104_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][104][exa]" id="c_1000000_104_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][104][tri]" id="c_1000000_104_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][104][sup]" id="c_1000000_104_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Genesee Valley</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][105][wps]" id="c_1000000_105_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][105][exa]" id="c_1000000_105_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][105][tri]" id="c_1000000_105_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][105][sup]" id="c_1000000_105_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Morven Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][106][wps]" id="c_1000000_106_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][106][exa]" id="c_1000000_106_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][106][tri]" id="c_1000000_106_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][106][sup]" id="c_1000000_106_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Beulah Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][107][wps]" id="c_1000000_107_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][107][exa]" id="c_1000000_107_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][107][tri]" id="c_1000000_107_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][107][sup]" id="c_1000000_107_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Great Meadow</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][108][wps]" id="c_1000000_108_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][108][exa]" id="c_1000000_108_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][108][tri]" id="c_1000000_108_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][108][sup]" id="c_1000000_108_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Far Hills</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][109][wps]" id="c_1000000_109_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][109][exa]" id="c_1000000_109_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][109][tri]" id="c_1000000_109_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][109][sup]" id="c_1000000_109_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Aiken</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][110][wps]" id="c_1000000_110_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][110][exa]" id="c_1000000_110_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][110][tri]" id="c_1000000_110_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][110][sup]" id="c_1000000_110_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Aqueduct</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][111][wps]" id="c_1000000_111_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][111][exa]" id="c_1000000_111_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][111][tri]" id="c_1000000_111_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][111][sup]" id="c_1000000_111_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Montpelier</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][112][wps]" id="c_1000000_112_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][112][exa]" id="c_1000000_112_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][112][tri]" id="c_1000000_112_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][112][sup]" id="c_1000000_112_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pine Mtn-callaway Garden</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][113][wps]" id="c_1000000_113_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][113][exa]" id="c_1000000_113_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][113][tri]" id="c_1000000_113_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][113][sup]" id="c_1000000_113_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pennsylvania Hunt Cup</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][114][wps]" id="c_1000000_114_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][114][exa]" id="c_1000000_114_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][114][tri]" id="c_1000000_114_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][114][sup]" id="c_1000000_114_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Camden</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][115][wps]" id="c_1000000_115_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][115][exa]" id="c_1000000_115_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][115][tri]" id="c_1000000_115_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][115][sup]" id="c_1000000_115_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hialeah Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][116][wps]" id="c_1000000_116_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][116][exa]" id="c_1000000_116_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][116][tri]" id="c_1000000_116_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][116][sup]" id="c_1000000_116_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sunland Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][117][wps]" id="c_1000000_117_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][117][exa]" id="c_1000000_117_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][117][tri]" id="c_1000000_117_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][117][sup]" id="c_1000000_117_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Tampa Bay Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][118][wps]" id="c_1000000_118_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][118][exa]" id="c_1000000_118_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][118][tri]" id="c_1000000_118_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][118][sup]" id="c_1000000_118_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Santa Anita Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][119][wps]" id="c_1000000_119_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][119][exa]" id="c_1000000_119_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][119][tri]" id="c_1000000_119_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][119][sup]" id="c_1000000_119_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Parx Racing</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][120][wps]" id="c_1000000_120_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][120][exa]" id="c_1000000_120_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][120][tri]" id="c_1000000_120_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][120][sup]" id="c_1000000_120_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Gulfstream Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][121][wps]" id="c_1000000_121_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][121][exa]" id="c_1000000_121_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][121][tri]" id="c_1000000_121_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][121][sup]" id="c_1000000_121_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Oaklawn Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][122][wps]" id="c_1000000_122_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][122][exa]" id="c_1000000_122_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][122][tri]" id="c_1000000_122_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][122][sup]" id="c_1000000_122_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Rillito</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][123][wps]" id="c_1000000_123_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][123][exa]" id="c_1000000_123_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][123][tri]" id="c_1000000_123_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][123][sup]" id="c_1000000_123_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fonner Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][124][wps]" id="c_1000000_124_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][124][exa]" id="c_1000000_124_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][124][tri]" id="c_1000000_124_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][124][sup]" id="c_1000000_124_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ocala Training Center</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][125][wps]" id="c_1000000_125_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][125][exa]" id="c_1000000_125_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][125][tri]" id="c_1000000_125_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][125][sup]" id="c_1000000_125_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pimlico</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][126][wps]" id="c_1000000_126_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][126][exa]" id="c_1000000_126_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][126][tri]" id="c_1000000_126_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][126][sup]" id="c_1000000_126_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Stoneybrook At Five Points</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][127][wps]" id="c_1000000_127_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][127][exa]" id="c_1000000_127_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][127][tri]" id="c_1000000_127_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][127][sup]" id="c_1000000_127_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Atlanta</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][128][wps]" id="c_1000000_128_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][128][exa]" id="c_1000000_128_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][128][tri]" id="c_1000000_128_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][128][sup]" id="c_1000000_128_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Emmett</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][129][wps]" id="c_1000000_129_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][129][exa]" id="c_1000000_129_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][129][tri]" id="c_1000000_129_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][129][sup]" id="c_1000000_129_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Monkton</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][130][wps]" id="c_1000000_130_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][130][exa]" id="c_1000000_130_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][130][tri]" id="c_1000000_130_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][130][sup]" id="c_1000000_130_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Atlantic City</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][131][wps]" id="c_1000000_131_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][131][exa]" id="c_1000000_131_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][131][tri]" id="c_1000000_131_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][131][sup]" id="c_1000000_131_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Mountaineer</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][132][wps]" id="c_1000000_132_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][132][exa]" id="c_1000000_132_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][132][tri]" id="c_1000000_132_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][132][sup]" id="c_1000000_132_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Will Rogers</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][133][wps]" id="c_1000000_133_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][133][exa]" id="c_1000000_133_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][133][tri]" id="c_1000000_133_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][133][sup]" id="c_1000000_133_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Camarero</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][134][wps]" id="c_1000000_134_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][134][exa]" id="c_1000000_134_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][134][tri]" id="c_1000000_134_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][134][sup]" id="c_1000000_134_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Charles Town</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][135][wps]" id="c_1000000_135_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][135][exa]" id="c_1000000_135_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][135][tri]" id="c_1000000_135_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][135][sup]" id="c_1000000_135_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Evangeline</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][136][wps]" id="c_1000000_136_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][136][exa]" id="c_1000000_136_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][136][tri]" id="c_1000000_136_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][136][sup]" id="c_1000000_136_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Calder</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][137][wps]" id="c_1000000_137_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][137][exa]" id="c_1000000_137_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][137][tri]" id="c_1000000_137_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][137][sup]" id="c_1000000_137_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Golden Gate</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][138][wps]" id="c_1000000_138_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][138][exa]" id="c_1000000_138_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][138][tri]" id="c_1000000_138_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][138][sup]" id="c_1000000_138_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lone Star</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][139][wps]" id="c_1000000_139_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][139][exa]" id="c_1000000_139_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][139][tri]" id="c_1000000_139_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][139][sup]" id="c_1000000_139_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Hastings</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][140][wps]" id="c_1000000_140_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][140][exa]" id="c_1000000_140_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][140][tri]" id="c_1000000_140_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][140][sup]" id="c_1000000_140_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sam Houston</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][141][wps]" id="c_1000000_141_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][141][exa]" id="c_1000000_141_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][141][tri]" id="c_1000000_141_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][141][sup]" id="c_1000000_141_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Tampa Bay</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][142][wps]" id="c_1000000_142_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][142][exa]" id="c_1000000_142_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][142][tri]" id="c_1000000_142_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][142][sup]" id="c_1000000_142_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fort Pierre</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][143][wps]" id="c_1000000_143_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][143][exa]" id="c_1000000_143_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][143][tri]" id="c_1000000_143_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][143][sup]" id="c_1000000_143_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pocatello Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][144][wps]" id="c_1000000_144_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][144][exa]" id="c_1000000_144_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][144][tri]" id="c_1000000_144_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][144][sup]" id="c_1000000_144_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Santa Cruz</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][145][wps]" id="c_1000000_145_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][145][exa]" id="c_1000000_145_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][145][tri]" id="c_1000000_145_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][145][sup]" id="c_1000000_145_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sun Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][146][wps]" id="c_1000000_146_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][146][exa]" id="c_1000000_146_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][146][tri]" id="c_1000000_146_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][146][sup]" id="c_1000000_146_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Miles City</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][147][wps]" id="c_1000000_147_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][147][exa]" id="c_1000000_147_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][147][tri]" id="c_1000000_147_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][147][sup]" id="c_1000000_147_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Winterthur</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][148][wps]" id="c_1000000_148_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][148][exa]" id="c_1000000_148_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][148][tri]" id="c_1000000_148_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][148][sup]" id="c_1000000_148_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Assiniboia</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][149][wps]" id="c_1000000_149_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][149][exa]" id="c_1000000_149_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][149][tri]" id="c_1000000_149_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][149][sup]" id="c_1000000_149_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lincoln Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][150][wps]" id="c_1000000_150_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][150][exa]" id="c_1000000_150_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][150][tri]" id="c_1000000_150_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][150][sup]" id="c_1000000_150_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Brown County</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][151][wps]" id="c_1000000_151_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][151][exa]" id="c_1000000_151_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][151][tri]" id="c_1000000_151_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][151][sup]" id="c_1000000_151_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Percy Warner</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][152][wps]" id="c_1000000_152_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][152][exa]" id="c_1000000_152_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][152][tri]" id="c_1000000_152_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][152][sup]" id="c_1000000_152_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Malvern</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][153][wps]" id="c_1000000_153_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][153][exa]" id="c_1000000_153_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][153][tri]" id="c_1000000_153_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][153][sup]" id="c_1000000_153_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Lexington</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][154][wps]" id="c_1000000_154_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][154][exa]" id="c_1000000_154_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][154][tri]" id="c_1000000_154_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][154][sup]" id="c_1000000_154_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Arapahoe</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][155][wps]" id="c_1000000_155_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][155][exa]" id="c_1000000_155_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][155][tri]" id="c_1000000_155_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][155][sup]" id="c_1000000_155_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Fair Hill</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][156][wps]" id="c_1000000_156_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][156][exa]" id="c_1000000_156_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][156][tri]" id="c_1000000_156_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][156][sup]" id="c_1000000_156_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Oregon Livestock</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][157][wps]" id="c_1000000_157_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][157][exa]" id="c_1000000_157_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][157][tri]" id="c_1000000_157_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][157][sup]" id="c_1000000_157_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Jerome Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][160][wps]" id="c_1000000_160_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][160][exa]" id="c_1000000_160_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][160][tri]" id="c_1000000_160_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][160][sup]" id="c_1000000_160_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Stockton</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][161][wps]" id="c_1000000_161_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][161][exa]" id="c_1000000_161_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][161][tri]" id="c_1000000_161_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][161][sup]" id="c_1000000_161_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Gillespie Fairground</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][162][wps]" id="c_1000000_162_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][162][exa]" id="c_1000000_162_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][162][tri]" id="c_1000000_162_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][162][sup]" id="c_1000000_162_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Les Bois Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][163][wps]" id="c_1000000_163_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][163][exa]" id="c_1000000_163_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][163][tri]" id="c_1000000_163_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][163][sup]" id="c_1000000_163_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Minidoka Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][164][wps]" id="c_1000000_164_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][164][exa]" id="c_1000000_164_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][164][tri]" id="c_1000000_164_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][164][sup]" id="c_1000000_164_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Crooked River</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][165][wps]" id="c_1000000_165_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][165][exa]" id="c_1000000_165_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][165][tri]" id="c_1000000_165_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][165][sup]" id="c_1000000_165_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Alberta Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][166][wps]" id="c_1000000_166_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][166][exa]" id="c_1000000_166_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][166][tri]" id="c_1000000_166_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][166][sup]" id="c_1000000_166_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Mt. Pleasant</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][167][wps]" id="c_1000000_167_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][167][exa]" id="c_1000000_167_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][167][tri]" id="c_1000000_167_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][167][sup]" id="c_1000000_167_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Oneida Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][168][wps]" id="c_1000000_168_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][168][exa]" id="c_1000000_168_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][168][tri]" id="c_1000000_168_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][168][sup]" id="c_1000000_168_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Tillamook Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][169][wps]" id="c_1000000_169_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][169][exa]" id="c_1000000_169_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][169][tri]" id="c_1000000_169_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][169][sup]" id="c_1000000_169_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Kalispell</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][170][wps]" id="c_1000000_170_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][170][exa]" id="c_1000000_170_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][170][tri]" id="c_1000000_170_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][170][sup]" id="c_1000000_170_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Cassia Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][171][wps]" id="c_1000000_171_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][171][exa]" id="c_1000000_171_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][171][tri]" id="c_1000000_171_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][171][sup]" id="c_1000000_171_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Sweetwater Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][172][wps]" id="c_1000000_172_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][172][exa]" id="c_1000000_172_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][172][tri]" id="c_1000000_172_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][172][sup]" id="c_1000000_172_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">White Pine Racing</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][173][wps]" id="c_1000000_173_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][173][exa]" id="c_1000000_173_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][173][tri]" id="c_1000000_173_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][173][sup]" id="c_1000000_173_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Elko Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][174][wps]" id="c_1000000_174_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][174][exa]" id="c_1000000_174_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][174][tri]" id="c_1000000_174_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][174][sup]" id="c_1000000_174_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Yellowstone</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][175][wps]" id="c_1000000_175_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][175][exa]" id="c_1000000_175_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][175][tri]" id="c_1000000_175_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][175][sup]" id="c_1000000_175_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Atokad</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][176][wps]" id="c_1000000_176_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][176][exa]" id="c_1000000_176_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][176][tri]" id="c_1000000_176_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][176][sup]" id="c_1000000_176_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Melville District</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][177][wps]" id="c_1000000_177_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][177][exa]" id="c_1000000_177_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][177][tri]" id="c_1000000_177_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][177][sup]" id="c_1000000_177_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Santa Anita</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][178][wps]" id="c_1000000_178_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][178][exa]" id="c_1000000_178_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][178][tri]" id="c_1000000_178_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][178][sup]" id="c_1000000_178_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Pine Mtn</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][179][wps]" id="c_1000000_179_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][179][exa]" id="c_1000000_179_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][179][tri]" id="c_1000000_179_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][179][sup]" id="c_1000000_179_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Charleston</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][180][wps]" id="c_1000000_180_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][180][exa]" id="c_1000000_180_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][180][tri]" id="c_1000000_180_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][180][sup]" id="c_1000000_180_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Ocala Training Ctr</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][181][wps]" id="c_1000000_181_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][181][exa]" id="c_1000000_181_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][181][tri]" id="c_1000000_181_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][181][sup]" id="c_1000000_181_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Stoneybrook</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][182][wps]" id="c_1000000_182_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][182][exa]" id="c_1000000_182_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][182][tri]" id="c_1000000_182_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][182][sup]" id="c_1000000_182_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Grand National</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][183][wps]" id="c_1000000_183_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][183][exa]" id="c_1000000_183_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][183][tri]" id="c_1000000_183_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][183][sup]" id="c_1000000_183_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Tryon</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][184][wps]" id="c_1000000_184_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][184][exa]" id="c_1000000_184_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][184][tri]" id="c_1000000_184_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][184][sup]" id="c_1000000_184_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Betfair Hollywood Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][185][wps]" id="c_1000000_185_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][185][exa]" id="c_1000000_185_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][185][tri]" id="c_1000000_185_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][185][sup]" id="c_1000000_185_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Charlotte</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][186][wps]" id="c_1000000_186_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][186][exa]" id="c_1000000_186_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][186][tri]" id="c_1000000_186_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][186][sup]" id="c_1000000_186_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Glyndon</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][187][wps]" id="c_1000000_187_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][187][exa]" id="c_1000000_187_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][187][tri]" id="c_1000000_187_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][187][sup]" id="c_1000000_187_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Meadowlands</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][188][wps]" id="c_1000000_188_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][188][exa]" id="c_1000000_188_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][188][tri]" id="c_1000000_188_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][188][sup]" id="c_1000000_188_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Mountaineer Casino Racetrack & Resort</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][189][wps]" id="c_1000000_189_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][189][exa]" id="c_1000000_189_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][189][tri]" id="c_1000000_189_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][189][sup]" id="c_1000000_189_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Desert Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][190][wps]" id="c_1000000_190_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][190][exa]" id="c_1000000_190_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][190][tri]" id="c_1000000_190_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][190][sup]" id="c_1000000_190_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Eastern Oregon Livestock Show</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][191][wps]" id="c_1000000_191_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][191][exa]" id="c_1000000_191_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][191][tri]" id="c_1000000_191_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][191][sup]" id="c_1000000_191_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Jerome County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][192][wps]" id="c_1000000_192_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][192][exa]" id="c_1000000_192_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][192][tri]" id="c_1000000_192_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][192][sup]" id="c_1000000_192_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">North Dakota Horse Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][193][wps]" id="c_1000000_193_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][193][exa]" id="c_1000000_193_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][193][tri]" id="c_1000000_193_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][193][sup]" id="c_1000000_193_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Cassia County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][194][wps]" id="c_1000000_194_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][194][exa]" id="c_1000000_194_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][194][tri]" id="c_1000000_194_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][194][sup]" id="c_1000000_194_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Barretts Race Meet At Fairplex</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][195][wps]" id="c_1000000_195_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][195][exa]" id="c_1000000_195_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][195][tri]" id="c_1000000_195_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][195][sup]" id="c_1000000_195_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Wyoming Downs</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][196][wps]" id="c_1000000_196_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][196][exa]" id="c_1000000_196_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][196][tri]" id="c_1000000_196_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][196][sup]" id="c_1000000_196_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Arlington</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][197][wps]" id="c_1000000_197_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][197][exa]" id="c_1000000_197_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][197][tri]" id="c_1000000_197_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][197][sup]" id="c_1000000_197_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Santa Cruz County Fair @ Sonoita</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][198][wps]" id="c_1000000_198_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][198][exa]" id="c_1000000_198_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][198][tri]" id="c_1000000_198_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][198][sup]" id="c_1000000_198_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Indiana Grand Race Course</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][199][wps]" id="c_1000000_199_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][199][exa]" id="c_1000000_199_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][199][tri]" id="c_1000000_199_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][199][sup]" id="c_1000000_199_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Belterra Park</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][200][wps]" id="c_1000000_200_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][200][exa]" id="c_1000000_200_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][200][tri]" id="c_1000000_200_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][200][sup]" id="c_1000000_200_sup"></td>
                    </tr>
                    <tr>
                        <td class="header">Brown County Fair</td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][201][wps]" id="c_1000000_201_wps"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][201][exa]" id="c_1000000_201_exa"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][201][tri]" id="c_1000000_201_tri"></td>
                        <td align="center"><input type="checkbox" name="data[c][1000000][201][sup]" id="c_1000000_201_sup"></td>
                    </tr>
                </table>
            </div>
        </div>