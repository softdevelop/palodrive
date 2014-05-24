<div style="display: none;" class="khung_t view_k_2">
	<p>
		<select id="player_limit_opt" name="data[select_wager_limit]" onchange="selectPlayerLimitOpt(this.selectedIndex);">
			<option value="0">Select</option>
			<option value="1">All Players</option>
			<option value="2">By Agent</option>
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
                        if (isset($tournament['TournamentsDefaultDetail'][0])) {
                            echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail'][0]);
                        }
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
                                            <input  placeholder="Limit" class="input" type="text" id="ir_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$this->Session->read('users.master.handle_name');?>" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][limit][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]"  style="width:50px;display:none;">
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

                                        if ( $key2 == 'teaser' || $key2 == 'future' || $key2 == 'prop'){
                        ?>              
                                            <td align="center">
                                                <input  placeholder="Max Win" class="input" type="text" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$this->Session->read('users.master.handle_name');?>" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]" style="width:50px;display:none;">
                                            </td>
                                            

                        <?php           } else{  ?> 
                                            <td align="center">
                                                <input value="off"  placeholder="Max Win" class="input" type="button" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$this->Session->read('users.master.handle_name');?>" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]" style="width:50px;display:none;">
                                            </td>
                        <?php          }
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
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][wps]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_wps_<?php echo $this->Session->read('users.master.handle_name');?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][exa]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_exa_<?php echo $this->Session->read('users.master.handle_name');?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][tri]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_tri_<?php echo $this->Session->read('users.master.handle_name');?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $this->Session->read('users.master.handle_name');?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][sup]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_sup_<?php echo $this->Session->read('users.master.handle_name');?>">
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
        <div style="overflow:scroll;height:500px;display:none;" class="player_limit_tabs player_limit_<?php echo $value['handle_name'];?>">
            <?php foreach( $tournaments as $tournament) :?>
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="player_limit">
                <tr>
                    <td class="header"><strong><?php echo $tournament['Tournament']['name']?></strong></td>
                    <td class="header" width="70px;">Default</td>
                    <?php 
                        if (isset($tournament['TournamentsDefaultDetail'][0])) {
                            echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail'][0]);
                        }
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
                            foreach ( $wagerLimit as $key2 => $value2) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id') {
                                    if ( $value2 == 1 ){
                        ?>
                                        <td align="center">
                                            <input  placeholder="Limit" class="input" type="text" id="ir_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$value['handle_name'];?>" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][limit][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]"  style="width:50px;display:none;">
                                        </td>
                        <?php
                                    }
                                    else{
                                        if ( $value2 == 0 ){
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
                            foreach ( $wagerLimit as $key2 => $value2) :
                                if ( $key2 != 'id' && $key2 != 'tournament_id' && $key2 != 'wager_type_id'){
                                    if ( $value2 == 1 ){

                                        if ( $key2 == 'teaser' || $key2 == 'future' || $key2 == 'prop'){
                        ?>              
                                            <td align="center">
                                                <input  placeholder="Max Win" class="input" type="text" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$value['handle_name'];?>" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]"
                                                style="width:50px;display:none;">
                                            </td>
                                            

                        <?php           } else{  ?> 
                                            <td align="center">
                                                <input value="off"  placeholder="Max Win" class="input" type="button" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2.'_'.$value['handle_name'];?>" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]" style="width:50px;display:none;">
                                            </td>
                        <?php          }
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
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][wps]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_wps_<?php echo $value['handle_name'];?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][exa]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_exa_<?php echo $value['handle_name'];?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][tri]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_tri_<?php echo $value['handle_name'];?>">
                        </td>
                        <td>
                            <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][each_agent][<?php echo $value['handle_name'];?>][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][sup]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_sup_<?php echo $value['handle_name'];?>">
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
                        if (isset($tournament['TournamentsDefaultDetail'][0])) {
                            echo $this->WagerType->getHeader($tournament['TournamentsDefaultDetail'][0]);
                        }
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
                                            <input  placeholder="Limit" class="input" type="text" id="ir_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2;?>" name="data[wager_limit][all][limit][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]"  style="width:50px;display:none;">
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

                                        if ( $key2 == 'teaser' || $key2 == 'future' || $key2 == 'prop'){
                        ?>              
                                            <td align="center">
                                                <input  placeholder="Max Win" class="input" type="text" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2;?>" name="data[wager_limit][all][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]" style="width:50px;display:none;">
                                            </td>
                                            

                        <?php           } else{  ?> 
                                            <td align="center">
                                                <input value="off"  placeholder="Max Win" class="input" type="button" id="iw_1_<?php echo $tournament['Tournament']['id'].'_'.$key1.'_'.$key2;?>" name="data[wager_limit][all][max-win][<?php echo $tournament['Tournament']['id']?>][<?php echo $key1;?>][<?php echo $key2;?>]" style="width:50px;display:none;">
                                            </td>
                        <?php          }
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
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][all][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][wps]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_wps">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][all][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][exa]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_exa">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][all][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][tri]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_tri">
                    </td>
                    <td>
                        <input onchange="javascript:inputPlayerLimit(this, this.value)" onkeyup="javascript:inputPlayerLimit(this)" placeholder="Limit" class="input" type="text" style="width: 50px; display: none;" name="data[wager_limit][all][limit][hourse][<?php echo $park['HorsesPark']['id'] ;?>][sup]" id="ir_<?php echo $park['HorsesPark']['id'] ;?>_sup">
                    </td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
	</div>
</div>
<script>
    function showBox(){
        el = document.getElementsByTagName('input');
        for (i=0; i<el.length; i++){
            var obj_id = el[i].id;
            if(obj_id.indexOf("c_") == 0){
                var mr_id = obj_id.replace('c_','ir_');
                var mw_id = obj_id.replace('c_','iw_');
                if(el[i].checked){
                    $("#"+mr_id).show();
                    $("#"+mw_id).show();
                    $("#"+mr_id+"<?php echo '_'.$this->Session->read('users.master.handle_name');?>").show();
                    $("#"+mw_id+"<?php echo '_'.$this->Session->read('users.master.handle_name');?>").show();
                    <?php  foreach ($agents as $key => $value) { ?>
                        $("#"+mr_id+"<?php echo '_'.$value['handle_name'];?>").show();
                        $("#"+mw_id+"<?php echo '_'.$value['handle_name'];?>").show();
                    <?php  } ?>
                }else{
                    $("#"+mr_id).hide();
                    $("#"+mw_id).hide();
                    $("#"+mr_id+"<?php echo '_'.$this->Session->read('users.master.handle_name');?>").hide();
                    $("#"+mw_id+"<?php echo '_'.$this->Session->read('users.master.handle_name');?>").hide();
                    <?php  foreach ($agents as $key => $value) { ?>
                        $("#"+mr_id+"<?php echo '_'.$value['handle_name'];?>").hide();
                        $("#"+mw_id+"<?php echo '_'.$value['handle_name'];?>").hide();
                    <?php  } ?>
                }
            }
        }
    }
</script>