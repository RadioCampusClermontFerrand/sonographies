
/* create the player */
$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        swfPath: "/js",
        supplied: "mp3",
        cssSelectorAncestor: "",
    });
      
                  jQuery('#jquery_jplayer_1').bind(jQuery.jPlayer.event.ended +'.jp-repeat', function() { 
                $('.pause').addClass('hide');
                $('.play').removeClass('hide');
                $('.main-pause').addClass('hide');
                $('.main-play').removeClass('hide');
            });

    });


/* build a list of tracks */

var tracks = { "b1p1": "balade1/1 pastille.mp3",
                "b1p2": "balade1/2 pastille.mp3", 
                "b1p3": "balade1/3 pastille.mp3",
                "b1p4": "balade1/4 pastille.mp3",
                "b1p5": "balade1/5 pastille.mp3",

                "b2p1": "balade2/1 Fontaine Napoléon III - la roche blanche.mp3",
                "b2p2": "balade2/2 Ancien bassin Mairie - la roche blanche.mp3",
                "b2p3": "balade2/3 Grottes et Tour Julia - la roche blanche.mp3",
                "b2p4": "balade2/4 Auzon et Géographie - la roche blanche.mp3",
                "b2p5": "balade2/5 Fontaines - la roche blanche.mp3",
								
                "b3p1": "balade3/1- pastille le moulin.mp3",
                "b3p2": "balade3/2- pastille collège.mp3",
                "b3p3": "balade3/3- pastille la fontaine.mp3",
                "b3p4": "balade3/4- pastille l'église.mp3",
                "b3p5": "balade3/5- pastille quartier calme.mp3",
                "b3p6": "balade3/6- pastille le port.mp3",
                
};
                       
var selected = "";
                       
for(var pastille in tracks) {
        $('.pause').click(function() {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').removeClass('hide');
                        $('.main-pause').addClass('hide');
                        $("#jquery_jplayer_1").jPlayer("pause");
                        $("#" + selected).css("color", "#DF3445");
        });
        $('.main-pause').click(function() {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').removeClass('hide');
                        $('.main-pause').addClass('hide');
                        $("#jquery_jplayer_1").jPlayer("pause");
                        $("#" + selected).css("color", "#DF3445");
        });
        $('#' + pastille).click(function(event) {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').addClass('hide');
                        $('.main-pause').removeClass('hide');
                        $('.entry-2buttons > span').css("display", "none");
                        if (selected == this.id) {
                                $("#jquery_jplayer_1").jPlayer("play");
                        }
                        else {
                            if (selected != "")
                                $("#" + selected).css("color", "#555555");

                            $("#jquery_jplayer_1").jPlayer("pause");
                            $("#jquery_jplayer_1").jPlayer("clearMedia");
                            $("#jquery_jplayer_1").jPlayer("setMedia", { mp3 : tracks[this.id] });
                            $("#jquery_jplayer_1").jPlayer("play");
                            $("#jquery_jplayer_1").jPlayer( "option", "cssSelector", {currentTime: "#currentTime-" + this.id} );
                            $("#jquery_jplayer_1").jPlayer( "option", "cssSelector", {duration: "#duration-" + this.id} );
                            selected = this.id;
                        }
                        $('#'+ this.id + '-pause').removeClass('hide');
                        $('#'+ this.id).addClass('hide');
                        $('#timer-' + this.id).css("display", "inline");
                        
        });
    
}
