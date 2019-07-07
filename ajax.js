$(document).ready(function(){
$("button).on('click',function(e))
{
	e.preventDefault();
	$.ajax({
		url:data.php.attr('action'),
		type:post,
		data:serialize,
		success: function(response)
		{
	$(div)
	.html(response);
		}
}});
