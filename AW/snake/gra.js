var plansza = [];
var pozycja = {
	x : 10,
	y : 10
}
var kierunek = 1; // 1 = lewo, 2 = dół, 3 = prawo, 4 = gora
var kierunekBiezacy = 1;
var interwal = null;
var waz = [];

$(document).ready(function(){
	// Generowanie planszy
	for(var i = 0; i < 20; i++){
		plansza[i] = [];
		for(var j = 0; j < 20; j++){
			plansza[i][j] = $('<div></div>');
			$("#plansza").append(plansza[i][j]);
		}
	}
	// Ustawienie pozycji początkowej
	plansza[pozycja.x][pozycja.y].addClass("glowa waz");
	waz.push(plansza[pozycja.x][pozycja.y]);
	losujJablko();
	
	function losujJablko(){
		var znalezione = false;
		do{
			var x = Math.floor(20*Math.random());
			var y = Math.floor(20*Math.random());
			if(!plansza[x][y].hasClass("waz")){
				znalezione = true;
				plansza[x][y].addClass("jablko");
			}
		}while(znalezione==false)
	}
	
	// Poruszanie się głowy
	function ruch(){
		kierunekBiezacy = kierunek;
		switch(kierunek){
			case 1:
				pozycja.y--;
				break;
			case 2:
				pozycja.x++;
				break;
			case 3:
				pozycja.y++;
				break;
			case 4:
				pozycja.x--;
				break;
		}
		if(pozycja.x < 0 || pozycja.x >= 20 || pozycja.y < 0 || pozycja.y >= 20){
			alert("Koniec gry. Twój wąż ma długość " + (waz.length));
			clearInterval(interwal);
			return false;
		}
		
		waz.unshift(plansza[pozycja.x][pozycja.y]);
		waz[0].addClass('glowa');
		waz[1].removeClass('glowa');
		
		if(plansza[pozycja.x][pozycja.y].hasClass('jablko')){
			plansza[pozycja.x][pozycja.y].removeClass('jablko');
			losujJablko();
		} else if(plansza[pozycja.x][pozycja.y].hasClass('waz')){
			alert("Koniec gry. Twój wąż ma długość " + (waz.length-1));
			clearInterval(interwal);
			return false;
		} else {
			var ogon = waz.pop();
			ogon.removeClass('waz');
		}
		
		plansza[pozycja.x][pozycja.y].addClass("glowa waz");
		return true;		
	}
	
	interwal = setInterval(ruch, 250);
	
	$('html').keypress(function(e){
		console.log(e.keyCode);
        switch(e.keyCode){
			case 37: // Strzałka w lewo
				if(kierunekBiezacy != 3) kierunek = 1;
				break;
			case 40: // Strzałka w dół
				if(kierunekBiezacy != 4) kierunek = 2;
				break;
			case 39: // Strzałka w prawo
				if(kierunekBiezacy != 1) kierunek = 3;
				break;
			case 38: // Strzałka w górę
				if(kierunekBiezacy != 2) kierunek = 4;
				break;
		}
    });
});