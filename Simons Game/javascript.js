var btn_color = ["green", "yellow", "red", "blue"];
var game_pattern = [];
var pressed_pattern = [];
var level = 0;
var started = false;

$(document).keypress(function(e){
    var btn_key = event.key;
    if(!started){
        $("#level-title").text("Level " + level);
        started = true;
        next_step();
    }
    else{
        switch(btn_key){
            case 'w':
                pressed_pattern.push("green");
                playSound("green");
                animatePress("green");
                checkPress(pressed_pattern.length - 1);
                break;
            case 'a':
                pressed_pattern.push("yellow");
                playSound("yellow");
                animatePress("yellow");
                checkPress(pressed_pattern.length - 1);
                break;
            case 'd':
                pressed_pattern.push("red");
                playSound("red");
                animatePress("red");
                checkPress(pressed_pattern.length - 1);
                break;
            case 's':
                pressed_pattern.push("blue");
                playSound("blue");
                animatePress("blue");
                checkPress(pressed_pattern.length - 1);
                break;
            default:
                break;
        }
    }
    
})
$(".btn").click(function(){
    pressed_pattern.push($(this).attr("id"));
    checkPress(pressed_pattern.length - 1);
    playSound($(this).attr("id"));
    animatePress($(this).attr("id")); 
})
function next_step(){
    level ++;
    $("#level-title").text("Level " + level);

    var btn_number = Math.floor(Math.random()*4);
    var ele = btn_color[btn_number];

    animatePress(ele);
    playSound(ele);

    game_pattern.push(ele);
}
function checkPress(n){
    if(pressed_pattern[n] === game_pattern[n]){
        if(pressed_pattern.length == game_pattern.length){
            pressed_pattern = [];
            setTimeout(next_step, 500);
        }
    }

    else{
        $("#level-title").text("Score : " + level + " ...Press a Key to Restart");
        playSound("wrong");
        game_pattern=[];
        pressed_pattern=[];
        started = false;
        level = 0;
    }
}

function animatePress(currentColor) {
    $("#" + currentColor).addClass("pressed");
    setTimeout(function () {
      $("#" + currentColor).removeClass("pressed");
    }, 200);
}
  
function playSound(name) {
    var audio = new Audio("sounds/" + name + ".mp3");
    audio.play();
}