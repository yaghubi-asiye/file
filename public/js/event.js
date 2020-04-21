(function ($) {
  "use strict";

  $("#latest_category .tab_content").addClass("deactive");
  $("#latest_category .tab_content:first").show();
	//Default Action
    $("#latest_category ul#sub-cat li:first").addClass("active").show(); //Activate first tab
    //On Click Event
    $("#latest_category ul#sub-cat li").on("click", function() {
        $("#latest_category ul#sub-cat li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
		$("#latest_category .tab_content").hide();
        var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active content
        return false;
    });
  }
)
