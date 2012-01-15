function setOffersPref() { 

	if($('offers_loading')) {   $('offers_loading').style.display='';       }
	if($('m-content')) {          $('m-content').className='transparent_class'; } 

	new Ajax.Request('oDiggerOffers-setPrefs.php', {
	  
      parameters: $('offers_form').serialize(true),
      onSuccess: function() {
         
       	getOffers();
      }
    });
}


function setOffersLimitPref() { 

	if($('offers_loading')) {   $('offers_loading').style.display='';       }
	if($('m-content')) {          $('m-content').className='transparent_class'; } 

	new Ajax.Request('oDiggerOffers-setPrefs.php', {
	  
      parameters: $('offers_limit_form').serialize(true),
      onSuccess: function() {
         
       	getOffers();
      }
    });
}


function getOffers(page, order, by) { 
	
	if($('offers_loading')) {   $('offers_loading').style.display='';       }
	if($('m-content')) {          $('m-content').className='transparent_class'; } 

	new Ajax.Updater('m-content', 'oDiggerOffers-getOffers.php', {
	  
      parameters: { page: page, order:order, by:by },
      onSuccess: function() {
         if($('m-content')) {          $('m-content').className=''; }
         if($('offers_loading')) {   $('offers_loading').style.display='none';       } 
      }
    });
}