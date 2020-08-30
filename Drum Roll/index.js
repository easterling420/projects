document.addEventListener("keypress", function(e){
    var keyPressed = e.key;
    instPressed(keyPressed);
})

document.addEventListener("click", function(e){
    instPressed(e.target.className[0]);
})

function playSound(sound_name){
    var audio = new Audio("sounds/"+sound_name+".mp3");
    audio.play();
}

function instPressed(keyPressed){
    switch(keyPressed){
        case 'w':
            playSound("tom-1");
            break;
        case 'a':
            playSound("tom-2");
            break;
        case 's':
            playSound("tom-3");
            break;
        case 'd':
            playSound("tom-4");
            break;
        case 'h':
            playSound("hi-hat");
            break;
        case 'j':
            playSound("crash");
            break;
        case 'k':
            playSound("kick-bass");
            break;
        case 'l':
            playSound("snare");
            break;
    }
}