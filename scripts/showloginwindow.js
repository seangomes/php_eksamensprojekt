var windowIsOpen = false;

function showLoginWindow()
{
	jQuery(function()
	{
		$.get("templates/loginwindow.php", function(json)
		{
			if (!windowIsOpen)
			{
				$("#popup").html(json);
				windowIsOpen = true;
			}
				
			else if (windowIsOpen)
			{
				$("#popup").html("");
				windowIsOpen = false;
			}
		});
	});
}