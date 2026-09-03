$(document).ready(function()
{
 $('#order_tbl').tableHover();
 $("a.btn-sbmt").click(
	        function() {
	            $(this).parents().filter("form").submit();

	            return false;
	        }
	    );
}); 