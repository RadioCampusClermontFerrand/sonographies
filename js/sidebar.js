    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	
    function changeMap($selected) {
        $("[data-collapse-group='maps']:not(#" + $selected + ")").each(function () {
                    $(this).removeClass("visible").addClass('hidden');
                    });
        $("#" + $selected).removeClass("hidden").addClass('visible');
    }
    
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.content').height()
  			htmlbodyHeightUpdate()
		});
                
                $("[data-collapse-group='sidemenu']").click(function () {
                    var $this = $(this);
                    $("[data-collapse-group='sidemenu']:not([data-target='" + $this.data   ("target") + "'])").each(function () {
                    $($(this).data("target")).removeClass("in").addClass('collapse');
                    });
                });
                
                $("#display-mainmap").click(function() {
                    changeMap("main-map");
                });
                $("#display-glyphs").click(function() {
                    changeMap("glyphs-map");
                });        
                $("#display-rocheblanche").click(function() {
                    changeMap("rocheblanche-map");
                });   
                $("#display-tiretaine").click(function() {
                    changeMap("tiretaine-map");
                });  
                $("#walktrip").click(function() {
                    changeMap("walktrip-map");
                });  
                
                $("#display-glyphs-map").click(function() {
                    changeMap("glyphs-map");
                });
                $("#display-rocheblanche-map").click(function() {
                    changeMap("rocheblanche-map");
                });
                $("#display-tiretaine-map").click(function() {
                    changeMap("tiretaine-map");
                });  
                
                $("#walktrip-map").click(function() {
                    changeMap("walktrip-map");
                });  
                
                
            
        });
