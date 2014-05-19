$(document).ready(function(){

		$(".item_tab").click(
		  function () {
			 var li=$(this).attr('rel'); 
			$(".item_tab").removeClass('atvi');	
			$(this).addClass('atvi');
			$(".khung_t").hide();
			$(".view_k_"+li).show();
			$(".setting_properties_desc").hide();
			$("#"+li+"_desc").show();	
			if(li=="1"){
				$("#todolist").show();
				$("#descs").hide();
			}else{
				$("#todolist").hide();
				$("#descs").show();
			}		
		  }
		 
		);
				
		$(".wager_type_item_tab").click(
		  function () {
			 var li=$(this).attr('rel'); 
			$(".wager_type_item_tab").removeClass('atvi');	
			$(this).addClass('atvi');
			$(".wager_type_tabs").hide();
			$("."+li).show();
			
		  }
		 
		);
		$(".player_limit_item_tab").click(
		  function () {
			 var li=$(this).attr('rel'); 
			$(".player_limit_item_tab").removeClass('atvi');	
			$(this).addClass('atvi');
			$(".player_limit_tabs").hide();
			$("."+li).show();
			
		  }
		 
		);
		$(".agent_properties_item_tab").click(
		  function () {
			 var li=$(this).attr('rel'); 
			$(".agent_properties_item_tab").removeClass('atvi');	
			$(this).addClass('atvi');
			$(".agent_properties_tabs").hide();
			$("."+li).show();
			
		  }
		 
		);
});	


var clocks = new Array();
	clocks[0] = "15 Min";
	clocks[1] = "30 Min";
	clocks[2] = "45 Min";
	clocks[3] = "1 hr";
	clocks[4] = "1:15";
	clocks[5] = "1:30";
	clocks[6] = "1:45";
	clocks[7] = "2 hr";
jQuery(document).ready(function($) {
	showBox();
	$('input[type=checkbox]').click(function(){
		showBox();
	});	
});
function CheckAll(Element, Name)
{
	el = Element.parentNode.parentNode.parentNode.getElementsByTagName('input');
	for (i=0; i<el.length; i++)
	{
	   	  el[i].checked = Element.checked;
	}
	showBox();
 }
 
function CheckAllSport(Element)
{
	el = Element.parentNode.parentNode.getElementsByTagName('input');
	for (i=0; i<el.length; i++)
	{
	   if(el[i].name.indexOf("data[c]") == 0)
		{
		  el[i].value = Element.value;
		  el[i].checked = Element.checked;
		}
	}
	showBox();
 }
 function showBox(){
	el = document.getElementsByTagName('input');
	for (i=0; i<el.length; i++)
	{
		var obj_id = el[i].id;
		if(obj_id.indexOf("c_") == 0)
		{
			var mr_id = obj_id.replace('c_','ir_');
			var mw_id = obj_id.replace('c_','iw_');
			if(el[i].checked){
				$("#"+mr_id).show();
				$("#"+mw_id).show();
				$("#"+mr_id+"_KJHKJHSD").show();
				$("#"+mw_id+"_KJHKJHSD").show();
				$("#"+mr_id+"_KJHKJHSD").show();
				$("#"+mw_id+"_KJHKJHSD").show();
								$("#"+mr_id+"_KJHKJHSD-A1").show();
				$("#"+mw_id+"_KJHKJHSD-A1").show();
							}else{
				$("#"+mr_id).hide();
				$("#"+mw_id).hide();
				$("#"+mr_id+"_KJHKJHSD").hide();
				$("#"+mw_id+"_KJHKJHSD").hide();
								$("#"+mr_id+"_KJHKJHSD-A1").hide();
				$("#"+mw_id+"_KJHKJHSD-A1").hide();
							}
		}
	}
 }
 function selectOpenLineType(league, option){
	$("#game_circle_type_"+league).html(option);
	if(option == "Normal"){
		el = document.getElementsByTagName('select');
		for (i=0; i<el.length; i++)
		{
			var obj_id = el[i].id;
			if(obj_id.indexOf("gc_rc_"+league+"_") == 0 && obj_id.substr(obj_id.length - 3)=="_rc")
			{
				$("#"+obj_id+' option').remove();
				$("#"+obj_id).show();
				$("#"+obj_id+"_lbl").hide();
				$("#"+obj_id+' option').remove();
				$('#'+obj_id).append($("<option></option>")
					    .text('off'));
				for (var j=clocks.length-1; j>=0; j--){
					$('#'+obj_id).append($("<option></option>")
					    .text(clocks[j]));
				}
			}
		}
	}
	if(option == "Open Line"){
		el = document.getElementsByTagName('select');
		for (i=0; i<el.length; i++)
		{
			var obj_id = el[i].id;
			if(obj_id.indexOf("gc_rc_"+league+"_") == 0 && obj_id.substr(obj_id.length - 3)=="_rc")
			{
				$("#"+obj_id+' option').remove();
				for (var j=0; j<clocks.length; j++){
					$('#'+obj_id).append($("<option></option>")
					    .text(clocks[j]));
				}
				$("#"+obj_id).show();
				$("#"+obj_id+"_lbl").hide();
			}
		}
	}
	if(option == "Release Line"){
		el = document.getElementsByTagName('select');
		for (i=0; i<el.length; i++)
		{
			var obj_id = el[i].id;
			if(obj_id.indexOf("gc_rc_"+league+"_") == 0 && obj_id.substr(obj_id.length - 3)=="_rc")
			{
				$("#"+obj_id+' option').remove();
				$("#"+obj_id).hide();
				$("#"+obj_id+"_lbl").show();
			}
		}
	}
	el = document.getElementsByTagName('span');
	for (i=0; i<el.length; i++)
	{
		var obj_id = el[i].id;
		if(obj_id.indexOf("gc_ol_" + league) == 0)
		{
			if(option == "Normal"){
				$("#"+obj_id+"_ol").hide();
				$("#"+obj_id+"_rl").hide();
				$("#"+obj_id).show();
				$("#"+obj_id+"_review").html("Normal");	
				var obj_id1 = obj_id.replace("gc_ol_","gc_rc_");
				$("#"+obj_id1+"_rc_review").html("off");	
			}
			if(option == "Open Line"){
				$("#"+obj_id+"_ol").show();
				$("#"+obj_id+"_rl").hide();
				$("#"+obj_id).hide();
				$("#"+obj_id+"_review").html("1:00 AM");
				var obj_id1 = obj_id.replace("gc_ol_","gc_rc_");
				$("#"+obj_id1+"_rc_review").html("15 Min");
			}
			if(option == "Release Line"){
				$("#"+obj_id+"_ol").hide();
				$("#"+obj_id+"_rl").show();
				$("#"+obj_id).hide();
				$("#"+obj_id+"_rl").prop('selectedIndex', 0);
				$("#"+obj_id+"_review").html("15 Min");
				var obj_id1 = obj_id.replace("gc_ol_","gc_rc_");
				$("#"+obj_id1+"_rc_review").html("off");
			}	
		}
	}
 }
 function selectReleaseLine(obj, obj_id, target_id){
	var idx = obj.selectedIndex;
	$('#'+obj_id+' option').remove();
	if(idx>0){
		for (var i=0; i<idx; i++){
			$('#'+obj_id).append($("<option></option>")
			    .text(clocks[i]));
		}
		$("#"+obj_id).show();
		$("#"+obj_id+"_lbl").hide();
		$("#"+obj_id+"_review").html("15 Min");
	}else{
		$("#"+obj_id).hide();
		$("#"+obj_id+"_lbl").show();
		$("#"+obj_id+"_review").html("off");
	}
	var obj_id = obj.id;
	var text = $("#"+obj_id+" option:selected").text();
	$("#" + target_id).html(text);
 }
 function selectDefaultSportbook(idx){
	el = document.getElementsByTagName('select');
	for (i=0; i<el.length; i++)
	{
		var obj_id = el[i].id;
		if(obj_id.indexOf("sportbook") == 0)
		{
			$("#"+obj_id).prop('selectedIndex', idx);
			var text = $("#sportbookDefault option:selected").text();
			$("#" + obj_id + "_review").html(text);
		}
	}
	
 }

 function checkAgentProperties(obj){
	var obj_id = obj.id;
	if(obj.checked)
		$("#" + obj_id + "_review").html("Active");
	else
		$("#" + obj_id + "_review").html("Inactive");
 }
 function selectAgentProperties(obj_id, value){
	$("#" + obj_id + "_review").html(value);
 }
 function inputPlayerLimit(obj, val){
	var obj_id = obj.id;
	var pre_str = "";
	
	if(obj_id.indexOf("ir_") == 0)
		pre_str = "MaxRisk:&nbsp;";
	if(obj_id.indexOf("iw_") == 0)
		pre_str = "MaxWin:&nbsp;";
	if(val!="")
		$("#" + obj_id + "_review").html(pre_str+val);
	else
		$("#" + obj_id + "_review").html("");
 }
 function inputPlayerLimitDefault(obj, val){
	el = obj.parentNode.parentNode.getElementsByTagName('input');
	for (i=0; i<el.length; i++)
	{
	   if(el[i].type == "text" && el[i] != obj)
		{
		  el[i].value = val;
		}
	}
 }
 function inputOvDefault(obj, val, sport){
	if(sport==0)
		el = obj.parentNode.getElementsByTagName('input');
	else
		el = obj.parentNode.parentNode.getElementsByTagName('input');
	for (i=0; i<el.length; i++)
	{
	   if(sport==0){	
		if(el[i].id.indexOf("gc_ov_") == 0 && el[i]!=obj)
		{
		  el[i].value = val;
		}
	   }else{
		if(el[i].id.indexOf("gc_ov_"+sport+"_") == 0 && el[i]!=obj)
		{
		  el[i].value = val;
		}
	   }
	}
 }
 function selectSportBook(obj){
	var obj_id = obj.id;
	var text = $("#"+obj_id+" option:selected").text();
	$("#" + obj_id + "_review").html(text);
 }
 function selectOpenLine(obj, target_id){
	var obj_id = obj.id;
	var text = $("#"+obj_id+" option:selected").text();
	$("#" + target_id).html(text);
 }
 function selectReleaseCircle(obj){
	var obj_id = obj.id;
	var text = $("#"+obj_id+" option:selected").text();
	$("#" + obj_id + "_review").html(text);
 }
 function selectWagerTypeOpt(idx){
	if(idx==0){
		$("#todo_all").show();
		$("#todo_pri").hide();
	}else{
		$("#todo_all").hide();
		$("#todo_pri").show();
	}
 }
 function selectPlayerLimitOpt(idx){
	if(idx==1){
		$("#player_limit_all").show();
		$("#player_limit_pri").hide();
	}else if(idx==2){
		$("#player_limit_all").hide();
		$("#player_limit_pri").show();
	}else
	{
		$("#player_limit_all").hide();
		$("#player_limit_pri").hide();
	}
 }
 function selectAgentPropertiesOpt(idx){
	if(idx==0){
		$("#agent_properties_all").show();
		$("#agent_properties_pri").hide();
	}else{
		$("#agent_properties_all").hide();
		$("#agent_properties_pri").show();
	}
 }
 jQuery(document).ready(function($) {
	$('input,textarea').focus(function(){
	   $(this).data('placeholder',$(this).attr('placeholder'))
	   $(this).attr('placeholder','');
	});
	$('input,textarea').blur(function(){
	   $(this).attr('placeholder',$(this).data('placeholder'));
	});	
});
