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
                <?php foreach( $tournaments as $tournament) :?>
                <p>
                    <?php 
                        if (!empty($tournament['TournamentsDefaultDetail'])):
                        $nameTour = str_replace('-', '_', $tournament['Tournament']['alias']);
                    ?>
                    <strong><?php echo $tournament['Tournament']['name'];?></strong>&nbsp;&nbsp;&nbsp;SportBook:&nbsp;
                    <select name="data[wager_type][<?php echo $tournament['Tournament']['id']?>][sport_book]" onchange="selectSportBook(this);" id="sportbook_1">
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
                        <td class="header" nowrap>Select All&nbsp;<input value="1" name="" type="checkbox" onclick="CheckAll(this, '1', 0)" /></td>

                        <?php 
                            echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail'][0]); 
                        ?>
                    </tr>

                     <?php 
                     foreach ( $tournament['TournamentsDefaultDetail'] as $key1 => $wagerType) :?>
                        <tr>
                            <?php 
                                $wager_type_id = $wagerType['wager_type_id'];
                                $getWagerTypeAlias = str_replace('-', '_', $this->WagerType->getWagerTypeAlias( $wagerType['wager_type_id'] ));

                            ?>
                            <td class="header">
                                <?php echo $this->WagerType->getWagerTypeName( $wagerType['wager_type_id'] );?>
                            </td>
                            <?php 
                                foreach ( $wagerType as $key2 => $value) :
                                    if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id') 
                                    {
                                        if ( $value == 1 )
                                        {
                            ?>
                                            <td align="center">
                                                <input value="1" type="checkbox" name="data[wager_type][<?php echo $tournament['Tournament']['id'];?>][<?php echo $wager_type_id;?>][<?php echo $key2;?>]" />
                                            </td> 
                            <?php

                                        }
                                        elseif ( $value == 0 )
                                        {
                            ?>
                                            <td align="center" style="color:red;">X</td>
                            <?php
                                        }
                                    }
                            ?>
                           
                            <?php endforeach;?>
                        </tr>
                    <?php endforeach;?>
                </table>
                <?php endif; endforeach;?>
                <p><strong>Horses</strong></p>
                <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                    <tr>
                        <td class="header">Select All&nbsp;<input value="1" type="checkbox" onclick="CheckAll(this, '1000000')" /></td>
                        <td class="header">Win, Show, Place</td>
                        <td class="header">Exacta</td>
                        <td class="header">Trifecta</td>
                        <td class="header">Superfecta</td>
                    </tr>
                    <?php 
                        foreach ($horsesparks as $key => $park) :
                    ?>
                    <tr>
                        <td class="header"><?php echo $park['HorsesPark']['name']?></td>
                        <td align="center">
                            <input value="1" type="checkbox" name="data[wager_type][horses][<?php echo $park['HorsesPark']['id'];?>][wps]" id="c_1000000_1_wps">
                        </td>
                        <td align="center">
                            <input value="1" type="checkbox" name="data[wager_type][horses][<?php echo $park['HorsesPark']['id'];?>][exa]" id="c_1000000_1_exa">
                        </td>
                        <td align="center">
                            <input value="1" type="checkbox" name="data[wager_type][horses][<?php echo $park['HorsesPark']['id'];?>][tri]" id="c_1000000_1_tri">
                        </td>
                        <td align="center">
                            <input value="1" type="checkbox" name="data[wager_type][horses][<?php echo $park['HorsesPark']['id'];?>][sup]" id="c_1000000_1_sup">
                        </td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
        </div>