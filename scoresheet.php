<?php 
//________________________________Match Scores_____
$t = 2; //Take Down
$r = 2; // Reversal
$e = 1; //Escape
$n2 = 2; //Near fall 1
$n3 = 3; //Near fall 2
$n4 = 4; //Near fall 3
$sw = 0; // Stall warning
$s = 1; // Stall -- Opponent point
$tv = 1; //  Technical Violation -- Opponent point
$p = 1; //Penalty -- Opponent Point
$c = 0; //
$c1 = 1;
$w = 0; // warning
$fs = 0; //false start 

//__________________________________Team Scores_____
$dc = 3; //Decision                      If match score is 1-7
$mdc = 4; // Major Decision              If match score is 8-14
$tf = 5; // Technical Fall               If Match score is 15+
$fall = 6; // Fall (pin)                 If player got pin, This would trigger the enable switch on a form to enter the time it took to pin the wrestler
$forfeit = 6; //Forfeit (no-show)        This is just if the team didn't have a wrestler for that particular weight class
//
//
//

$points = array(
	"t" => 2,
	"r" => 2,
	"e" => 1,
	"n2" => 2,
	"n3" => 3,
	"n4" => 4,
	"sw" => 0,
	"s" => 1,
	"tv" => 1,
	"p" => 1,
	"c" => 0,
	"c1" => 1,
	"w" => 0,
	"fs" => 0,
	
	"dc" => 3,
	"mdc" => 3,
	"tf" => 3,
	"fall" => 3,
	"forfeit" => 3
);


$db = new SQLiteDatabase('hidden-database');
function initializeDatabase() {
	global $db;
	$query = "CREATE TABLE matches (
		id int PRIMARY KEY,
		event_date date,
		w1 varchar(64),
		w2 varchar(64),
		w1_weight int,
		choice1 varchar(2),
		choice2 varchar(2),
		choice3 varchar(2),
		w2_weight int";
	for ($i = 1; $i <= 29; $i++) {
		$query .= ", w1_score" . $i . " varchar(2), w2_score" . $i . " varchar(2)";
	}
	$query .= ")";
	echo $query;
	$db->query($query);
}

function myEscape($s) {
	if ($s == "N/A") $s = "null";
	else $s = "'" . sqlite_escape_string($s) . "'";
	return $s;
}

function saveMatch() {
	global $db, $points;
	
	$query = "INSERT INTO matches (event_date, w1, w2, w1_weight, w2_weight, choice1, choice2, choice3";
	for ($i = 1; $i <= 29; $i++) $query .= ", w1_score" . $i . "";
	for ($i = 1; $i <= 29; $i++) $query .= ", w2_score" . $i . "";
	$query .= ") VALUES ('" . date('Y-m-d H:i:s')
		. "','" . sqlite_escape_string($_POST['W1Name'])
		. "','" . sqlite_escape_string($_POST['W2Name'])
		. "','" . sqlite_escape_string($_POST['W1Weight'])
		. "','" . sqlite_escape_string($_POST['W2Weight'])
		. "'," . myEscape($_POST['p1choice'])
		. "," . myEscape($_POST['p2choice'])
		. "," . myEscape($_POST['p3choice']);
	
	for ($i = 1; $i <= 29; $i++) $query .= "," . myEscape($_REQUEST['W1Score' . $i]);
	for ($i = 1; $i <= 29; $i++) $query .= "," . myEscape($_REQUEST['W2Score' . $i]);
	$query .= ")";
	$db->query($query);
	$row = $db->query("SELECT * FROM matches WHERE id=" . $db->lastInsertRowid())->fetch();

	$pin_winner = -1;
	$team_scores = array(0, 0);
	$w_scores = array(0, 0);
	for ($j = 1; $j <= 2; $j++) {
		for ($i = 1; $i <= 29; $i++) {
			$w_scores[$j-1] += $points[$row['w' . ($j) . '_score' . $i]];
			if ($row['w' . $j . '_score' . $i] == 'ff' || $row['w' . $j . '_score' . $i] == 'fl' && $team_score[$j] == 0) $team_score[$j] = 6;
		}
	}
	if ($pin_winner != -1) {
		$team_scores[$pin_winner] = 6;
		$team_scores[$pin_winner ^ 1] = 0;
	} elseif ($team_scores[0] == 0 && $team_scores[1] == 0) {
		if ($team_scores[0] > $team_scores[1]) $winningTeam = 0;
		else $winningTeam = 1;
		if ((0 < abs($team_scores[0] - $team_scores[1])) < 8) $team_winnings = 3;
		else if ((7 < abs($team_scores[0] - $team_scores[1])) < 15) $team_winnings = 4;
		else $team_winnings = 5;
		$team_scores[$winningTeam] = $team_winnings;
	}
	$db->query("UPDATE matches SET w1_score=" . $w_scores[0] . ", w1_team=" . $team_scores[0] . ", w2_score=" . $w_scores[1] . ", w2_team=" . $team_scores[1] . " WHERE id=" . $row['id']);
}

//initializeDatabase();
if (isset($_POST['W1Name'])) saveMatch();

?>