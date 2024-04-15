<?php
// Create a SimpleXMLElement object
$xml = new SimpleXMLElement('<CricketTeam></CricketTeam>');

// Function to add a player entry to a team
function addPlayer($team, $playerName, $runs, $wickets) {
    $player = $team->addChild('player', $playerName);
    $player->addChild('runs', $runs);
    $player->addChild('wicket', $wickets);
}

// Add Team entries to the XML object
$australiaTeam = $xml->addChild('Team');
$australiaTeam->addAttribute('country', 'Australia');
addPlayer($australiaTeam, 'Player1', 100, 2);
addPlayer($australiaTeam, 'Player2', 80, 1);

$indiaTeam = $xml->addChild('Team');
$indiaTeam->addAttribute('country', 'India');
addPlayer($indiaTeam, 'Player3', 120, 3);
addPlayer($indiaTeam, 'Player4', 90, 2);

// Save the XML data to a file
$xml->asXML('cricket.xml');
echo "cricket.xml file created successfully.<br>";

// Load the cricket.xml file
$cricketXml = simplexml_load_file('cricket.xml');

// Add multiple elements for the country="India"
$indiaTeam = $cricketXml->xpath("//Team[@country='India']")[0];
addPlayer($indiaTeam, 'Player5', 110, 4);
addPlayer($indiaTeam, 'Player6', 85, 1);

// Save the modified XML data back to the file
$cricketXml->asXML('cricket.xml');
echo "Additional entries added for India in cricket.xml file.<br>";
?>
