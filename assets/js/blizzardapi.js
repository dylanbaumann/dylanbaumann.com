// Set up some variables
var $wow_infobox = $('#info-blizzard .game-info');
	$wow_name = $('.wow-name'),
	$wow_level = $('.wow-level'),
	$wow_race = $('.wow-race'),
	$wow_class = $('.wow-class'),
	$wow_realm = $('.wow-realm'),
	$wow_HKills = $('.wow-HKills'),
	$wow_thumbnail = $('.wow-thumbnail'),
	characterURL = "https://us.api.battle.net/wow/character/kiljaeden/dklikeme?fields=achievements&locale=en_US&apikey=23k7nt4x237fhxwd3xgfj39kvd2umfgk",
	thumbnailPrefix = "http://render-api-us.worldofwarcraft.com/static-render/us/"


// Call agaisnt the BlizzAPI and retun character information
$.get(characterURL, function(response) {
	console.log(response);

	$wow_infobox.addClass('--show');

	// Return each of the values I want.
	var toon_classID = response.class,
		toon_name = response.name,
		toon_race = response.race,
		toon_class = response.class,
		toon_level = response.level,
		toon_realm = response.realm,
		toon_HKills = response.totalHonorableKills,
		toon_thumbnail = response.thumbnail,
		toon_thumbnailURL = thumbnailPrefix.concat(toon_thumbnail);

	// Apply them to the html
	$wow_name.text(toon_name);
	$wow_race.text(toon_race);
	$wow_class.text(toon_class);
	$wow_level.text(toon_level);
	$wow_HKills.text(toon_HKills);
	$wow_realm.text(toon_realm);
	$wow_thumbnail.prepend('<img src="' + toon_thumbnailURL + '" />');
});


/* Failed attempt to include a local JSON file to use as a key/value comaprison
// Get the Classes JSON
$.get('http://personal-site.dev/wp-content/themes/dylanbaumann/assets/js/blizzard/json/classes.json', function(classes_full) {


});
*/
