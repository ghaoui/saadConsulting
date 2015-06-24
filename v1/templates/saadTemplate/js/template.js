/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function($)
{
	$(document).ready(function()
	{
		$("#closerappelform").on("click", function (e) {
	e.preventDefault();
    var div = $(".rappelform");
    
    var height = div.height();
    
    div.css({

        marginTop: 0,
        height: height
    }).animate({
        marginTop: height,
        height: 0
    }, 500, function () {
        $(this).css({
            display: "none",

            height: "",
            marginTop: ""
        });
    });
});

$("#showrappel").on("click", function () {
    var div = $(".rappelform:not(:visible)");
    
    var height = div.css({
        display: "block"
    }).height();
    
    div.css({

        marginTop: height,
        height: 0
    }).animate({
        marginTop: 0,
        height: height
    }, 500, function () {
        $(this).css({
            display: "block",
            height: "",
            marginTop: ""
        });
    });
});
	})
})(jQuery);