 <div class="khung_t view_k_4" style="display: none;">
            <p>
                <span>I.)</span>
                <input type="checkbox">
                <span>Are you backing this agent and his players ?</span>
            </p>
            <p>
                <span>II.)</span>
                <input type="checkbox">
                <span>Are you partners with this agent and his players ?</span>
            </p>
            <div style="overflow:scroll;height:600px;" id="agent_properties_all">
                <table width="100%" border="0" cellspacing="15" cellpadding="0">
                    <tr>
                        <td colspan=2>Agent's Commission Rate<br/><input style="height:30px;width:70px" class="input" type="text" name="data[agent][121]" /></td>
                    </tr>
                    <tr>
                        <td colspan=2></td>
                    </tr>
                    <tr>
                        <td colspan=2>Agent's responsibility for RED figures<br/><input style="height:30px;width:70px" class="input" type="text" name="data[agent][125]" /></td>
                    </tr>
                    <tr>
                        <td colspan=2></td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][89]" value="1" id="ag_89" onclick="checkAgentProperties(this);"/><span>Can set the Default Sportsbook</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>Setting the default sports book allows the Agent to pick the sports book of his choice for his players. This might potentially become a conflict with your other agent if they are using a different sports book for odds.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][104]" value="1" id="ag_104" onclick="checkAgentProperties(this);"/><span>Can change the credit limit</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>Your Agents will be setting up their clients to more specific setting once they log in. One of these is “credit limit”. Once the account is set up.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][127]" value="1" id="ag_127" onclick="checkAgentProperties(this);"/><span>Can Have RED</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>If you have an agent and he is getting a commission, the accounting feature will not calculate his makeup red figure if this box is not checked. This will throw off your House Balance feature with this agent by not giving him a makeup.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][129]" value="1" id="ag_129" onclick="checkAgentProperties(this);"/><span>Can give player discount</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>This is recommended because it will have “ZERO” effect on your balance with the Agent. The Agent can only discount the player up to the amount of commission you have given him. Or he can send you a request that asks for you to share a portion of the “Discount” for the player. When this request is sent, you can decide if you want to share any portion of this or make him solely responsible. Either way at the end of the week he will owe the loss back percentage to the player. The house balance repo</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][130]" value="1" id="ag_130" onclick="checkAgentProperties(this);"/><span>Can offer freeplay</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>This works the same way as the “Can Give a player Discount” IF your agent want to give a client a free play he would have to assume all responsibility for this. Unless of course you have been sent a request by the Agent to assume a portion of this. In this case you could choose to accept the percent requested by the Agent or change it or deny it all together. In all cases, this will not change your balance with Agent in the House Balance Report. If the player wins the wagers it will not be inclu</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][132]" value="1" id="ag_132" onclick="checkAgentProperties(this);"/><span>Roll over existing balance</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>This feature ties the client’s total unpaid balance into the available credit. This way when the current week is zeroed out it does not zero out his weekly available credit. This will keep the player from betting beyond his credit limit before settling the balance with the agent. So if the client has 1k a week and lost 900.00. He would only have 100.00 available to use on Monday.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][137]" value="1" id="ag_137" onclick="checkAgentProperties(this);"/><span>Can Shade Players</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>This might be something you decide at a later time. But if your agent wants to shade someone who always bets the over on every Sunday NFL game, it might not be a bad Idea. Otherwise he can simply request the change and send it to you for your approval.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][138]" value="1" id="ag_138" onclick="checkAgentProperties(this);"/><span>Can Circle Sharp Players</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>Could not possibly hurt to let your agent slow someone down who comes in early. These feature only tighten the reins on the player and do not have negative impact on the Master.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][141]" value="1" id="ag_141" onclick="checkAgentProperties(this);"/><span>Can Change Limits up to Masters Settings</span></td>
                    </tr>
                    <tr>
                        <td colspan=2>This simply lets the agent adjust a players limits but only up to your default settings. So if you choose to set his NFL Sides to 500.00 a game and he has clients at 300.00 and want to move them, they can only be moved up to 500.00 a game. Any more than 500.00 a game would have to go to you for your approval.</td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="checkbox" name="data[agent][142]" value="1" id="ag_142" onclick="checkAgentProperties(this);"/><span>Can Modify Max Win up to Masters limits</span></td>
                    </tr>
                    <tr>
                        <td colspan=2></td>
                    </tr>
                </table>
            </div>
        </div>