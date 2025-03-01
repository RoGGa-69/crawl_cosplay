<div class="page information">
    <?php echo $this->part('neck_dropdown_menus'); ?>

    <div class="toplinks"><br></div>
    <div class="page_content">
         <div class="heading">
              <h1><img src="/img/cc_stone_soup_icon-128x128.png" width="48" height="48" /> Crawl Cosplay /admin/ <img src="/img/cc_stone_soup_icon-128x128.png" width="48" height="48" /></h1>
         </div>
	 <div class="fineprint" align="right">
   		To be Moderated: <?php echo app\models\Submission::getNumberOfUnscoredSubmissions() ?>
		<?php if ($this->request->session('admin')) : ?>
        		| Subs <a href="/admin/submissions/list">Official</a> <a href="/admin/submissions/moderate">Moderate</a> <a href="/admin/submissions/add">New</a>
	        	| Players <a href="/admin/players/list">List</a> <a href="/admin/players/add">New</a>
    			| Challenges <a href="/admin/challenges/list">List</a> <a href="/admin/challenges/add">New</a>
	        	| <a href="/admin/logout">Logout</a>
		<?php else : ?>
          		| <a href="/backoffice">Admin</a>
		<?php endif; ?>
	 </div>
         <img src="/img/HR-right.png"><br />
         <div class="content" onclick="window.location = '/dismiss';">
         <?php if ($msg = $this->request->session()->get('message')) : ?>
               <div class="message"><?=$msg?> <br /><br /><a href="/dismiss">--more--</a></div>
         <?php endif; ?>
         </div>
