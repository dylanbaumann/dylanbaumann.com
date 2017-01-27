// Set up some variables
var $warcraftInfo = $('.warcraft-info');
var characterURL = "https://us.api.battle.net/wow/character/kiljaeden/dklikeme?fields=achievements&locale=en_US&apikey=23k7nt4x237fhxwd3xgfj39kvd2umfgk";

// Call against it
$.get(characterURL, function(response) {
	console.log(response);
});

/*
function getCharacterURL (response) {
	console.log(response);
};
*/
