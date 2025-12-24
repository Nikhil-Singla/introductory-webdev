function check()
{
	let pass = document.getElementById('passwordid').value;
	let card1 = document.getElementById('item1').value;
	let card2 = document.getElementById('item2').value;
	let card3 = document.getElementById('item3').value;


	if ( !(pass) ){
		alert('Enter a password');
		return false;
	}
	if( !(card1) ){
		alert('Please enter a valid amount of card 1');
		return false;
	}
	if( !(card2) ){
		alert('Please enter a valid amount of card 2');
		return false;
	}
	if( !(card3) ){
		alert('Please enter a valid amount of card 3');
		return false;
	}
	if ((card1 + card2 + card3) == 0){
		alert('Please add atleast 1 item to cart');
		return false;
	} 
}