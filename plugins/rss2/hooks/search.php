<?php

function HookRss2SearchResultsbottomtoolbar()
{
 	global $baseurl, $search, $restypes, $archive;
 	global $userpassword,$username,$api_scramble_key;
    $apikey=make_api_key($username,$userpassword);
	$skey = md5($api_scramble_key.$apikey.$search.$archive); 

?>
<div class="InpageNavLeftBlock"><a target="_top" href="<?php echo $baseurl?>/plugins/rss2/pages/rssfilter.php?key=<?php echo $apikey;?>&search=<?php echo urlencode($search)?>&restypes=<?php echo urlencode($restypes)?>&archive=<?php echo $archive?>&skey=<?php echo urlencode($skey); ?>">&gt;&nbsp;RSS feed for this search filter</a></div>
<?php
}
