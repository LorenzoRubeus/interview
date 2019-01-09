$(document).ready(async function(){
	var countEvents = document.getElementsByClassName("div_singleEvent");
	for(let i = 1; i <= countEvents.length; i++) {
		document.getElementById("event_" + i).animate([
			{ right: '-1200px' },
			{ right: '0px' }
		], {
			duration: 1000,
			fill:'forwards'
		});
		await sleep(300);
	}
});

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}