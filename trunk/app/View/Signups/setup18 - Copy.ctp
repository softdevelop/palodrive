<form method="POST" action="">
    <input type="hidden" name="data[step]" id="step_num" value="setup_properties">
    <div class="phan_tab">
        <span class="item_tab atvi" rel="1">Wager Type</span>
        <span class="item_tab" rel="2">Wager Limit</span>
        <span class="item_tab" rel="3">Game Circle</span>
        <span class="item_tab" rel="4">Agents Properties</span>
        <span class="item_tab tab_cuoi" rel="5">Profile Review</span>
        <div style="clear:both"></div>
    </div>
    <div style="line-height:19px;" class="khung_view">
        <!---------------------------------------->
        <?php echo $this->element('step2/wager_type');?>
        <!---------------------------------------->   
        <?php echo $this->element('step2/wager_limit');?>
        <!---------------------------------------->   
        <?php echo $this->element('step2/game_circle');?>
        <!---------------------------------------->
        <?php echo $this->element('step2/agents_properties');?>
        <!---------------------------------------->   
        <?php echo $this->element('step2/profile_review');?>
        <!---------------------------------------->     
    </div>
    <div style="padding-top:10px;"><input type="button" name="send" class="back" onclick="javascript:history.go(-1)" value="Back">&nbsp;&nbsp;<input type="submit" name="send" class="next" value="Next"></div>
</form>