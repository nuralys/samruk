<div class="g_line"></div>
		<div class="cr content">
			<div class="main">
				<div class="news_part">
					<img src="/img/news/thumbs/<?=$post['News']['img'] ?>"/>
					<h3><?php echo $post['News']['title'] ?></h3>
					<?php echo $post['News']['body'] ?>
					<div id="hypercomments_widget"></div>
<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 66967});
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/66967/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
				</div>
			</div>
			<?php echo $this->element('links') ?>
		</div>