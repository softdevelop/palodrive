<div style="display: none;" class="khung_t view_k_5">
    <div style="overflow:scroll;height:600px;">
        <p><strong>Agents Profile</strong></p>
        <hr/>
        <table width="100%" border="0" cellspacing="1" cellpadding="0">
            <tr>
                <td>Agent's Commission Rate&nbsp;</td>
                <td id="ag_121_review">&nbsp;</td>
            </tr>
            <tr>
                <td>Agent's responsibility for RED figures&nbsp;</td>
                <td id="ag_125_review">&nbsp;</td>
            </tr>
            <tr>
                <td>Can set the Default Sportsbook&nbsp;</td>
                <td id="ag_89_review">Inactive</td>
            </tr>
            <tr>
                <td>Can change the credit limit&nbsp;</td>
                <td id="ag_104_review">Inactive</td>
            </tr>
            <tr>
                <td>Can Have RED&nbsp;</td>
                <td id="ag_127_review">Inactive</td>
            </tr>
            <tr>
                <td>Can give player discount&nbsp;</td>
                <td id="ag_129_review">Inactive</td>
            </tr>
            <tr>
                <td>Can offer freeplay&nbsp;</td>
                <td id="ag_130_review">Inactive</td>
            </tr>
            <tr>
                <td>Roll over existing balance&nbsp;</td>
                <td id="ag_132_review">Inactive</td>
            </tr>
            <tr>
                <td>Can Shade Players&nbsp;</td>
                <td id="ag_137_review">Inactive</td>
            </tr>
            <tr>
                <td>Can Circle Sharp Players&nbsp;</td>
                <td id="ag_138_review">Inactive</td>
            </tr>
            <tr>
                <td>Can Change Limits up to Masters Settings&nbsp;</td>
                <td id="ag_141_review">Inactive</td>
            </tr>
            <tr>
                <td>Can Modify Max Win up to Masters limits&nbsp;</td>
                <td id="ag_142_review">Inactive</td>
            </tr>
        </table>
        <?php
            $i = 0; 
            foreach ($gamescircle as $key => $circle) :
                $i++;
        ?>
            <p><strong>Players Profile</strong></p>
            <hr/>
            <p><strong><?php echo $this->GamesCircle->getTourName($circle['DefaultGamesCircle']['tournament_id'])?></strong></p>
            <p>SportBook:&nbsp;<span id="sportbook_1_review"></span></p>
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tr>
                    <td class="header" nowrap>Select All&nbsp;<input value="1" name="" type="checkbox" onclick="CheckAll(this, '1', 0)" /></td>

                    <?php 
                        echo $this->WagerType->getHeader($tournaments[$key]['TournamentsDefaultDetail'][0]); 
                    ?>
                </tr>

                 <?php 
                 foreach ( $tournaments[$key]['TournamentsDefaultDetail'] as $key1 => $wagerType) :?>
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
                                            <span id="ir_1_<?php echo $tournaments[$key]['Tournament']['id'].'_'.$key1.'_'.$key2;?>_review">&nbsp;</span>
                                            <br>
                                            <span id="iw_1_<?php echo $tournaments[$key]['Tournament']['id'].'_'.$key1.'_'.$key2;?>_review">&nbsp;</span>
                                        </td> 
                        <?php

                                    }
                                    elseif ( $value == 0 )
                                    {
                        ?>
                                        <td align="center" style="color:red;"></td>
                        <?php
                                    }
                                }
                        ?>
                        <?php endforeach;?>
                    </tr>
                <?php endforeach;?>
            </table>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tr>
                    <td class="header" width="120px;">Limitations</td>
                    <?php echo $this->GamesCircle->getHeader($circle['DefaultGamesCircle']);?>
                </tr>
                <tr>
                    <td class="header" width="120px;">Overnight Max</td>
                    <?php 
                        foreach ($circle['DefaultGamesCircle'] as $key1 => $value){
                            if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1){
                    ?>
                                <td id="gc_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>_1_<?php echo $key1 ?>_review"></td>
                    <?php
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <td class="header" width="120px;" id="game_circle_type_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>">Normal</td>
                    <?php 
                        foreach ($circle['DefaultGamesCircle'] as $key1 => $value){
                            if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1){
                    ?>
                                <td id="gc_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>_5_<?php echo $key1 ?>_review" class="type_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>"></td>
                    <?php
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <td class="header" width="120px;">Circle Max</td>
                    <?php 
                        foreach ($circle['DefaultGamesCircle'] as $key1 => $value){
                            if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1){
                    ?>
                                <td id="gc_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>_2_<?php echo $key1 ?>_review"></td>
                    <?php
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <td class="header" width="120px;">Release Circle</td>
                    <?php 
                        foreach ($circle['DefaultGamesCircle'] as $key1 => $value){
                            if($key1 != 'id' && $key1 != 'tournament_id' && $value != -1){
                    ?>
                                <td id="gc_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>_3_<?php echo $key1 ?>_review" class="release_<?php echo $circle['DefaultGamesCircle']['tournament_id']?>"></td>
                    <?php
                            }
                        }
                    ?>
                </tr>
            </table> 
        <?php
            endforeach;
        ?>
        <p><strong>Horses</strong></p>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
            <tbody>
                <tr>
                    <td class="header"><strong>Horses</strong></td>
                    <td class="header">WSP</td>
                    <td class="header">Exacta</td>
                    <td class="header">Trifecta</td>
                    <td class="header">Superfecta</td>
                </tr>
                <?php 
                    foreach ($horsesparks as $key => $park) :
                ?>
                <tr>
                    <td class="header" nowrap=""><?php echo $park['HorsesPark']['name']?></td>
                    <td id="ir_<?php echo $park['HorsesPark']['id'] ;?>_wps_review">    
                        
                    </td>
                    <td id="ir_<?php echo $park['HorsesPark']['id'] ;?>_exa_review">
                        
                    </td>
                    <td id="ir_<?php echo $park['HorsesPark']['id'] ;?>_tri_review">
                        
                    </td>
                    <td id="ir_<?php echo $park['HorsesPark']['id'] ;?>_sup_review">
                        
                    </td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>