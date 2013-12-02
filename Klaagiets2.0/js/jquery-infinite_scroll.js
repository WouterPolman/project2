<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/demos/js/scroll.jquery.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
 
			$( '#infinite_scroll' ).scrollLoad({
				//your ajax file to be loaded when scroll breaks ScrollAfterHeight
 				url : 'my_scroll_ajax_file.php',
 					getData : function() {
 						//you can post some data along with ajax request	
					},

 				start : function() {
					$('<div class="loading"><img src="ajax-loader.gif"/></div>').appendTo(this);
						// you can add your effect before loading data
				},
 
				ScrollAfterHeight : 95,//this is the height in percentage after which ajax stars
 
				onload : function( data ) {
					$(this).append( data );
					$('.loading').remove();
				}, // this event fires on ajax success
 
				continueWhile : function( resp ) {
					if( $(this).children('li').length >= 100 ) { // stops when number of 'li' reaches 100
						return false;
					}
					return true; 
				}
			});
		});
 
</script>