<?php $this->layout = 'cco'; ?>

<div class="login_placeholder">

<div id="login" align="right">
<br>
<span id="login_message">Logged in as RoGGa</span>
<form action="https://cbro.berotato.org:8443/#" id="login_form" style="display: none;">
<label for="username">User:</label>
<input class="text" type="text" name="username" id="username">
<label for="password">Pass:</label>
<input class="text" type="password" name="password" id="password">
<input class="button" type="submit" name="submit" id="submit" value="Login">
</form>
<span class="extra_links">|
<a id="reg_link" href="javascript:" style="display: none;">Register</a>

<a id="chem_link" href="javascript:" style="">Change Email</a>
<a id="chpw_link" href="javascript:" style="">Change Password</a>
<a id="logout_link" href="javascript:" style="">Logout</a></span>
</div></div>
<div id="register" class="floating_dialog" style="display: none;">
<span id="register_message"></span>
<form action="https://cbro.berotato.org:8443/#" id="register_form">
<label for="username">Username:</label>
<input class="text" type="text" name="username" id="reg_username">
<br>
<label for="reg_password">Password:</label>
<input class="text" type="password" name="reg_password" id="reg_password">
<br>
<label for="reg_repeat_password">Repeat password:</label>
<input class="text" type="password" name="reg_repeat_password" id="reg_repeat_password">
<br>
<label for="reg_email">Email address:</label>
<input class="text" type="text" name="reg_email" id="reg_email">
<br>
<p>If you do not enter an email, you can't recover your password.</p>
<input class="button" type="button" name="cancel" id="reg_cancel" value="Cancel">
<input class="button" type="submit" name="submit" id="reg_submit" value="Submit">
</form>
</div>
<div id="change_password" class="floating_dialog" style="display: none;">
<span id="chpw_message"></span>
<form action="https://cbro.berotato.org:8443/#" id="chpw_form">
<label for="change_cur_password">Current password:</label>
<input class="text" type="password" name="change_cur_password" id="change_cur_password">
<br>
<label for="change_password">New password:</label>
<input class="text" type="password" name="change_new_password" id="change_new_password">
<br>
<label for="change_repeat_password">Repeat password:</label>
<input class="text" type="password" name="change_repeat_password" id="change_repeat_password">
<br><br>
<input class="button" type="button" name="cancel" id="chpw_cancel" value="Cancel">
<input class="button" type="submit" name="submit" id="chpw_submit" value="Submit">
</form>
</div>
<div id="change_email" class="floating_dialog" style="display: none;">
<p>Your current email address is: <span id="chem_current"></span></p>
<span id="chem_message"></span>
<form action="https://cbro.berotato.org:8443/#" id="chem_form">
<label for="chem_email">Email:</label>
<input class="text" type="text" name="chem_email" id="chem_email">
<br>
<p>If you do not enter an email, you can't recover your password.</p>
<input class="button" type="button" name="cancel" id="chem_cancel" value="Cancel">
<input class="button" type="submit" name="submit" id="chem_submit" value="Submit">
</form>
</div>
<div id="floating_ok_message" class="floating_dialog" style="display: none;">
<span id="ok_message_content"></span>
<input class="button" type="submit" name="submit" value="OK">
</div>

<div id="rc_edit" class="floating_dialog" style="display: none;">
<form action="https://cbro.berotato.org:8443/#" id="rc_edit_form">
<textarea class="text" name="rc_file_contents" id="rc_file_contents" cols="80" rows="25"></textarea>
<br>
<input class="button" type="submit" name="submit" id="rc_submit" value="Save" style="float: right;">
</form>
</div>
<div id="exit_game" class="floating_dialog" style="display: none;">
<p id="exit_game_reason"></p>
<pre id="exit_game_message"></pre>
<p id="exit_game_dump"></p>
<a class="hide_dialog" href="javascript:">Close</a>
</div>

<h2>Welcome to the <b>cco.crawlcosplay.org (CCO)</b> WebTiles server!</h2>
<p>By playing here you agree to our code of conduct.</p>
<p>Users of CCO in violation of the Code of Conduct may have their accounts suspended temporarily or indefinitely (with little to no notice).</p>
<br>
<p>Admins may be contacted via the DCSS Crawl Cosplay 2.0 community discord server, or via email at: rogga @ crawlcosplay DOT org.</p>
<br>
<p>Crawl Blog</p>
<p>Latest Changelog</p>
<p>0.32 Tourney Page</p>
<br>
<p>The Crawl Cosplay Trunk Tournament (CCTT) is starting this Friday, Feb 21 @ 00:00 UTC.</p>
<p>Check out the website above for details on participating.</p>
<br>
<br>
<p>Hello, xxx!</p>
<p>Games on this server are recorded for in-progress viewing and playback. Chat messages might be logged, depending on the player's settings.</p>

<p>Play now:</p>
<p>DCSS trunk (Updates Daily) (edit rc) | Trunk custom seed | Sprint trunk | Tutorial trunk</p>
<p>DCSS 0.32 (Latest Version) (edit rc) | Custom seed 0.32 | Sprint 0.32 | Tutorial 0.32</p>
DCSS 0.31 (edit rc) | Custom seed 0.31 | Sprint 0.31 | Tutorial 0.31</p>
DCSS 0.30 (edit rc) | Custom seed 0.30 | Sprint 0.30 | Tutorial 0.30
DCSS 0.29 (edit rc) | Custom seed 0.29 | Sprint 0.29 | Tutorial 0.29
DCSS 0.28 (edit rc) | Custom seed 0.28 | Sprint 0.28 | Tutorial 0.28
DCSS 0.27 (edit rc) | Custom seed 0.27 | Sprint 0.27 | Tutorial 0.27
DCSS 0.26 (edit rc) | Custom seed 0.26 | Sprint 0.26 | Tutorial 0.26
DCSS 0.25 (edit rc) | Custom seed 0.25 | Sprint 0.25 | Tutorial 0.25
DCSS 0.24 (edit rc) | Custom seed 0.24 | Sprint 0.24 | Tutorial 0.24

Games currently running:
