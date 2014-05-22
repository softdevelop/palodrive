<div style="display: none;" class="khung_t view_k_2">
	<p>
		<select id="player_limit_opt" onchange="selectPlayerLimitOpt(this.selectedIndex);">
			<option>Select</option>
			<option>All Players</option>
			<option>By Agent</option>
		</select>
	</p>
	<div style="overflow:hidden;height:600px; display:none" id="player_limit_pri">
		<div class="player_limit_tab">
			<span class="player_limit_item_tab atvi" rel="player_limit_<?php echo $this->Session->read('users.master.handle_name');?>"><?php echo $this->Session->read('users.master.handle_name'). " Players";?></span>
			<?php
			$agents=  $this->Session->read('users.agent');
			foreach ($agents as $key => $value) { ?>
				  <span class="player_limit_item_tab tab_cuoi" rel="player_limit_<?php echo $value['handle_name'];?>"><?php echo $value['handle_name'];?>  Players</span>
			<?php
				}
			?>
			<div style="clear:both"></div>
		</div>
		
		<div style="overflow:scroll;height:500px;" class="player_limit_tabs player_limit_<?php echo $this->Session->read('users.master.handle_name');?>">
			<?php foreach( $tournaments as $tournament) :?>
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tr>
                    <td class="header"><strong><?php echo $tournament['Tournament']['name']?></strong></td>
                    <td class="header" width="70px;">Default</td>
                    <?php 
                        echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail']['0']); 
                    ?>
                </tr>
                <?php foreach ( $tournament['TournamentsDefaultDetail'] as $key1 => $wagerLimit) :?>
                    <tr>
                        <td class="header" rowspan="2">
                            <?php echo $this->WagerType->getWagerTypeName( $wagerLimit['wager_type_id'] );?>
                        </td>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="limit" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id') {
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" id="ir_1_<?php echo $key1.'_'.$key2;?>"  style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else{
                                        if ( $value == 0 ){
                                ?>
                                            <td align="center" rowspan="2">&nbsp;</td>
                                <?php 
                                        }

                                     }
                                }
                            
                            endforeach;
                        ?>
                    </tr>
                    <tr>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Max Win" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id'){
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" id="iw_1_<?php echo $key1.'_'.$key2;?>" style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else  {
                                        if ( $value == 0 ){

                                        }
                                    }
                                }
                            endforeach;
                        ?>
                    </tr>

                <?php endforeach;?>
            </table>
        <?php endforeach;?>       
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tbody>

                    <tr>
                        <td class="header"><strong>Horses</strong></td>
                        <td class="header" width="70px;">Default</td>
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
                        <td>
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;">
                        </td>
                        <td>    
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][wps]" id="ir_1000000_1_wps">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][exa]" id="ir_1000000_1_exa">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][tri]" id="ir_1000000_1_tri">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][sup]" id="ir_1000000_1_sup">
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>   
		</div>
        
        <?php
        foreach ($agents as $key => $value) { ?>
        <div style="overflow:scroll;height:500px;" class="player_limit_tabs player_limit_<?php echo $value['handle_name'];?>">
            <?php foreach( $tournaments as $tournament) :?>
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tr>
                    <td class="header"><strong><?php echo $tournament['Tournament']['name']?></strong></td>
                    <td class="header" width="70px;">Default</td>
                    <?php 
                        echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail']['0']); 
                    ?>
                </tr>
                <?php foreach ( $tournament['TournamentsDefaultDetail'] as $key1 => $wagerLimit) :?>
                    <tr>
                        <td class="header" rowspan="2">
                            <?php echo $this->WagerType->getWagerTypeName( $wagerLimit['wager_type_id'] );?>
                        </td>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="limit" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id') {
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else{
                                        if ( $value == 0 ){
                                ?>
                                            <td align="center" rowspan="2">&nbsp;</td>
                                <?php 
                                        }

                                     }
                                }
                            
                            endforeach;
                        ?>
                    </tr>
                    <tr>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Max Win" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id'){
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else  {
                                        if ( $value == 0 ){

                                        }
                                    }
                                }
                            endforeach;
                        ?>
                </tr>

            <?php endforeach;?>
            </table>
            <?php endforeach;?>       
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tbody>
                    <tr>
                        <td class="header"><strong>Horses</strong></td>
                        <td class="header" width="70px;">Default</td>
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
                        <td>
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;">
                        </td>
                        <td>    
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][wps]" id="ir_1_1_<?php echo $key; ?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][exa]" id="ir_2_1_<?php echo $key; ?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][tri]" id="ir_3_1_<?php echo $key; ?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][sup]" id="ir_4_1_<?php echo $key; ?>">
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>   
        </div>

        <?php
            }
        ?>
	</div>
	<div style="overflow:scroll;height:500px;display:none;" id="player_limit_all" class="player_limit_tabs player_limit_all">
		<?php foreach( $tournaments as $tournament) :?>
			<table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
				<tr>
					<td class="header"><strong><?php echo $tournament['Tournament']['name']?></strong></td>
					<td class="header" width="70px;">Default</td>
					<?php 
						echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail']['0']); 
					?>
				</tr>
				<?php foreach ( $tournament['TournamentsDefaultDetail'] as $key1 => $wagerLimit) :?>
					<tr>
						<td class="header" rowspan="2">
                            <?php echo $this->WagerType->getWagerTypeName( $wagerLimit['wager_type_id'] );?>
                        </td>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="limit" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id') {
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else{
                                        if ( $value == 0 ){
                                ?>
                                            <td align="center" rowspan="2">&nbsp;</td>
                                <?php 
                                        }

                                     }
                                }
                            
							endforeach;
                        ?>
					</tr>
					<tr>
                        <td align="center">
                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Max Win" class="input" type="text" style="width:50px;">
                        </td>
                        <?php
                            foreach ( $wagerLimit as $key2 => $value) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id'){
                                    if ( $value == 1 ){
                        ?>
                                        <td align="center">
                                            <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Max Win" class="input" type="text" style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else  {
                                        if ( $value == 0 ){

                                        }
                                    }
                                }
                            endforeach;
                        ?>
                    </tr>

				<?php endforeach;?>
			</table>
		<?php endforeach;?>       
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
            <tbody>
                <tr>
                    <td class="header"><strong>Horses</strong></td>
                    <td class="header" width="70px;">Default</td>
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
                    <td>
                        <input onchange="javascript:inputPlayerLimitDefault(this, this.value)" onkeyup="javascript:inputPlayerLimitDefault(this, this.value)" placeholder="Limit" class="input" type="text" style="width:50px;">
                    </td>
                    <td>    
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][wps]" id="ir_1000000_1_wps">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][exa]" id="ir_1000000_1_exa">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][tri]" id="ir_1000000_1_tri">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[ir][1000000][1][sup]" id="ir_1000000_1_sup">
                    </td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
	</div>
</div>