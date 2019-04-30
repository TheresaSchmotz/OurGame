$( document ).ready(function() {

    let player1="X";
    let player2="O";


    let currentTurn =1;
    let movesMade =0;

    /*nimm jedes quadrat auf der seite und addiere es zu dieser variable*/
    let sqr = $(".square");

    /*new click event on every square we click*/
    sqr.on('click',function (c) {
        movesMade++;
        
        if (currentTurn ===1){
            event.target.innerHTML = player1;
            event.target.style.color = "#fea8b3";
            currentTurn++;
        }else{
            event.target.innerHTML = player2;
            event.target.style.color = "#5b5426";
            currentTurn--;

        }
    })


});

