// Set up some variables
const
	$wow_infobox = $('#info-blizzard .game-info');
	$wow_name = $('.wow-name'),
	$wow_level = $('.wow-level'),
	$wow_race = $('.wow-race'),
	$wow_class = $('.wow-class'),
	$wow_realm = $('.wow-realm'),
	$wow_HKills = $('.wow-HKills'),
	$wow_thumbnail = $('.wow-thumbnail'),
	characterURL = 'https://us.api.battle.net/wow/character/kiljaeden/dklikeme?fields=achievements&locale=en_US&apikey=23k7nt4x237fhxwd3xgfj39kvd2umfgk',
	thumbnailPrefix = 'http://render-api-us.worldofwarcraft.com/static-render/us/',
	classURL = 'http://personal-site.dev/wp-content/themes/dylanbaumann/assets/js/blizzard/json/classes.json';

// Globally scoped object
let wowVars = {};


function getClasses(classes) {
	console.log('Step 2: Class API + updating variables');
	// Parse the json into a usable object
	var classArray = JSON.parse(classes);

	wowVars.toon_classID = wowVars.toon_classID - 1;
	wowVars.toon_className = classArray.classes[wowVars.toon_classID].name;
	console.log('Step 3: Variables updated! Class name is now equal to: ' + wowVars.toon_className);

	// Update the HTML
	updateHTML();
}

function getRaces(races) {
	// TODO: do the same thing as getClasses(), but for Race info
}

// Update the HTML values
function updateHTML() {
	console.log('Step 4: Update the HTML');

	$wow_name.text(wowVars.toon_name);
	$wow_race.text(wowVars.toon_race);
	$wow_class.text(wowVars.toon_className);
	$wow_level.text(wowVars.toon_level);
	$wow_HKills.text(wowVars.toon_HKills);
	$wow_realm.text(wowVars.toon_realm);
	$wow_thumbnail.prepend('<img src="' + wowVars.toon_thumbnailURL + '" />');

	// Unhide the information box once done
	$wow_infobox.addClass('--show');
}


// Using the response, set some variables
function fetchResponse(response) {
	console.log('Step 1: Setting initial variables');
	console.log(response);

	// Return each of the values I want.
	wowVars.toon_classID = response.class,
	wowVars.toon_name = response.name,
	wowVars.toon_race = response.race,
	wowVars.toon_level = response.level,
	wowVars.toon_realm = response.realm,
	wowVars.toon_HKills = response.totalHonorableKills,
	wowVars.toon_thumbnail = response.thumbnail,
	wowVars.toon_thumbnailURL = thumbnailPrefix.concat(wowVars.toon_thumbnail);

	// Get the Classes JSON and update variables
	$.get(classURL, getClasses);
}


// Call agaisnt the BlizzAPI and retun character information
$.get(characterURL, fetchResponse);
