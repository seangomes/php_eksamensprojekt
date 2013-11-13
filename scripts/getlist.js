function getList(user)
{
	jQuery(function()
	{		
		$.get("templates/list.php", {username : user}, function(pagecontent)
		{
			$("#list").html(pagecontent);
		});
	});
}