<? include_once('oDiggerOffers-config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>oDigger Offers</title>
	<script type="text/javascript" src="static/prototype.js" ></script>
	<script type="text/javascript" src="static/oDiggerOffers.js" ></script>
	<link href="static/oDiggerOffers.css" rel="stylesheet" type="text/css"/>
</head>
<body>

	<h2 class="offers_welcome"><span>Welcome To oDigger Offers</span></h2>
	<p class="offers_headline">Search for affiliate offers across affiliate networks</p>
	
	
	<form id="offers_form" class="offers_form" onsubmit="return false;">
		<table class="offers_form_table" cellspacing='0' cellpadding='5'>
			<tr>
				<td class="offers_search_box"><input class="query" type="text" name="query" value="<? echo htmlentities($_SESSION['oDiggerOffers_query']); ?>"></td>
	            
				<td><? include_once('oDiggerOffers-selectNetworks.php'); ?></td>
			
	           	 	<td><input class="search" type="submit" onclick="setOffersPref();" value="Search Offers"/></td>
		            <td>
		            	<span class="s-help"><a href="#" onclick="document.getElementById('s-pop1').style.display='';">Need Help?</a></span>
		                	<span class="s-help"><a href="#" onclick="document.getElementById('s-pop2').style.display='';">Extra Search Features</a></span>
		                
		                <div id="s-pop1" style="display:none;">
		                    <div class="s-pop-close"><a href="#" onclick="document.getElementById('s-pop1').style.display='none';">Close</a></div>
		                    
		                    <div class="s-pop-content">
		                        <p style="margin-bottom: 20px;"><strong>What Is oDigger Offers?</strong><br/>
							oDigger Offers allows you to find offers across various different affiliate networks.  To use it simple type in a search term or leave it blank and hit "Search Offers."  Our service will then grab all of the offers related to your search.  You can sort the columns by clicking on the column header names.  You can also search for offers by each particular affiliate network, simply select the network from the drop-down list to do this. </p>
							
						<p style="margin-bottom: 20px;"><strong>oDigger Offers API</strong><br/>
						This oDigger Offers service is using the oDigger Offers API to pull the information. To become an oDigger developer, please contact us at <a href="mailto:support@odigger.com">support@oDigger.com</a> </p>
						
						<p><strong>oDigger Offers Support</strong><br/>
							 If you need any help with oDigger Offers, please contact us at <a href='mailto:support@odigger.com'>support@odigger.com</a>.</p>
							
		                	</div>
		                </div>
		                
		                <div id="s-pop2" style="display:none;">
		                    <div class="s-pop-close"><a href="#" onclick="document.getElementById('s-pop2').style.display='none';">Close</a></div>
		                    
		                    <div class="s-pop-content">
		                    		<p style="margin-bottom: 20px;"><strong>Phrase search ("")</strong><br>
							By putting double quotes around a set of words, you are telling oDigger Offers to consider the exact words in that exact order without any change. oDigger Offers already uses the order and the fact that the words are together as a very strong signal and will stray from it only for a good reason, so quotes are usually unnecessary. By insisting on phrase search you might be missing good results accidentally. For example, a search for <nobr>[ <span class="code">"Alexander Bell"</span> ]</nobr> (with quotes) will miss the pages that refer to Alexander <em>G.</em> Bell.</p>
							
							<p><strong>The | operator</strong><br>
							oDigger Offers's default behavior is to consider all the words in a search. If you want to specifically allow <em>either</em> one of several words, you can use the | (pipe) operator. For example, <nobr>[ <span class="code">San Francisco Giants 2004 | 2005</span> ]</nobr> will give you results about either one of these years, whereas <nobr>[ <span class="code">San Francisco Giants 2004 2005</span> ]</nobr> (without the |) will show pages that include both years on the same page. The symbol <strong>|</strong> can be substituted for |. (The AND operator, by the way, is the default, so it is not needed.)</p>
						</ul>
		                	</div>
		                </div>
		            </td>
				<th><img id="offers_loading" src="static/loader.gif" style="display: none;"/></th>
			</tr>
		</table>    
	</form>
	
	
	<div id="m-content-wrapper">
		<div id="m-content"></div>
		
		<div class="attribution">Powered by <a href="http://oDigger.com">oDigger.com</a></div>
	</div>
	<script type="text/javascript">getOffers();</script>
	
	
</body>