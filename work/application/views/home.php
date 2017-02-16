<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('public/header'); ?>
<div id = "middle">
				<div class = "mid_top">
					<p class="p1">欢迎来到击跆道的世界！</p>
					<p class="p2">擊跆道，源於生活，用於生活，是除了是一門身心兼修的新武學，更多地代表著一種理念：博眾取長、融匯中西、謙遜包容、精進恆行、自立自強。</p>
					<a class = "bigbut" href="">加入我们</a>
				</div>

				<div class = "mid_mid">
					<div class = "mid_mid_lists">
						<ul>
							<li><input class = "smallbut current" type = "button" value = "总会公告"/></li>
							<li><input class = "smallbut" type = "button" value = "活动花絮"/></li>
							<li><input class = "smallbut" type = "button" value = "新闻资讯"/></li>
						</ul>
						<input class = "searcher" type = "text"/>
					</div>
					<div class = "mid_mid_news">
						<?php foreach ($notice as $notice_item): if($notice_item['id']<=3){?>
							<div class = news_item1>
								<img src="<?=base_url().'images/'.$notice_item['imgsrc'].'.jpg'?>"/>
								<p class = "pp">文章标题：<?=$notice_item['title']?></p>
								<p class = "pp">发表于：<?=$notice_item['date']?></p>
							</div>

						<?php } if($notice_item['id']>=4 && $notice_item['id']<=6){ ?>
							<div class = news_item2>
								<img src="<?=base_url().'images/'.$notice_item['imgsrc'].'.jpg'?>"/>
								<p class = "ppa"><?=$notice_item['title']?></p>
								<p class = "ppb">&nbsp;&nbsp;&nbsp;&nbsp;<?=$notice_item['content']?></p>
								<p class = "ppc">发表于：<?=$notice_item['date']?></p>
							</div>

						<?php } if($notice_item['id']>=7 && $notice_item['id']<=9){ ?>
						<div class = news_item3>
							<p class = "pp"><?=$notice_item['title']?></p>
							<p class = "pp">发表于：<?=$notice_item['date']?></p>
							<p class = "pp"><?=$notice_item['content']?></p>
							<span>阅读全文</span>
						</div>
						<?php } endforeach; ?>
					</div>
				</div>	
				<div class = "mid_bot">
					<p class = "pd">击跆道创立以来，一直致力于完善、改进自身。因为任何事物都在发展。武学千年，常有争强斗狠之弊病，现代社会需求全面性、专业性人才，为此，击跆道提出了“文修武定、心康体健”为宗旨，立足公益，致力于培养文武兼修的现代社会人才。</p>
					<input class = "bigbut" type = "button" value = "联系我们"/>
				</div>
		</div>
<?php $this->load->view('public/footer'); ?>