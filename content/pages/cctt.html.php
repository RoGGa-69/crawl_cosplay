<?php
use app\models\{Challenge, Submission, Player};

$this->layout = 'cctt';

$active = Challenge::tournamentActive();
if ($active) :
 	$set = $active->setnr;
	$scores = Player::scoreboardForSet($set);
	$challenges_in_set = Challenge::findAsArray(['setnr' => $set, 'draft' => 0], ['order' => '`week` ASC']);
	$weeks = sizeof($challenges_in_set);
	$this->setData("meta", ['filename' => $active->icon]);
?>
<h2>Crawl Cosplay Trunk Tournament (CCTT) for DCSS trunk v0.<?=$e($active->setnr)?></h2>
<h3>
	Week <?=$e($active->week)?>: <a href="/cctt/tchallengedetails?id=<?=$e($active->id)?>"><?=$e($active->name)?></a>
	<?php if ($active->icon): ?><img src="<?=$e($active->icon)?>" class="head-icon" height="30px" /> <?php endif; ?>
</h3>
<p style="font-style: italic; color: #777;"><?=$e($active->description)?></p>
<!-- shortform field is used for Monster Speak -->
<p style="text-align:right;"><span style="font-size: smaller"><?=$e($active->shortform)?></span></p>

<p><a href="/cctt/tchallengedetails?id=<?=$e($active->id)?>">Challenge details</a>  
 | <a href="/cctt/submit_cctt?id=<?=$e($active->id)?>">Submit a CCTT run</a>
 | <a href="https://discord.gg/pW7nqC8Wu3" target="_blank">Discuss in our Discord</a> 
 | <a href="<?=$e($active->reddit)?>" target="_blank">Reddit post</a>
 | Next challenge starts on Friday at 0:00 UTC.</p>
<table class="table_for_layout">
	<tr><th>Species</th><th>Background<th>Gods</th></tr>
	<tr><td><?=$e($active->species)?></td><td><?=$e($active->background)?><td><?=$e($active->gods)?></td></tr>
</table>
<?php if ($active->special_rule) : ?>
<div class="special_rule"><p><?=$em($active->special_rule)?></p></div>
<?php endif; ?>

<img src="/img/HR-right.png"><br />

<!-- disable video news bar for now -->
<!-- ?php echo $this->part('latest_twitch'); ?> -->

<h2>Tournament Scoreboard for Trunk v0.<?=$e($active->setnr)?></h2>
<table class="set-list">
<?php
	$made_seperator = false;
	foreach ($challenges_in_set as $cha) :
		if ($cha->bonus && !$made_seperator) {
			echo '<tr><td colspan="3">&nbsp;</td></tr>';
			$made_seperator = true; // only make one seperator if multiple bonuses
		}
?>
	<tr>
		<td>Week <?=$e($cha->week)?>.</td>
		<td><?php if ($cha->icon):?><img src="<?=$e($cha->icon)?>" style="height: 1em" /><?php endif; ?> <b><a href="/cctt/tchallengedetails?id=<?=$e($cha->id)?>"><?=$e($cha->name)?></a></b></td>
		<td><span style="font-size: smaller"><?=$e($cha->species), ", ", $e($cha->background), ", ", $e($cha->gods)?></span></td>
	</tr>
<?php endforeach; ?>
</table>

<table class="bordered">
	<tr>
		<th>count</th>
		<th>Player</th>
		<th>Total <span class="star">&#9733;</span></th>
		<?php
		$made_seperator = false;
		foreach ($challenges_in_set as $c) {

			if ($c->bonus && !$made_seperator) {
				echo '<th rowspan="' . (sizeof($scores) + 1) . '">&nbsp;</th>';
				$made_seperator = true; // only make one seperator if multiple bonuses
			}
			echo '<th>' . $e($c->week) . '. ';
			if ($cha->icon) echo '<a href="/cctt/tchallengedetails?id='.$c->id.'"><img src="'.$e($c->icon).'" style="height: 1.5em" /></a>';
			echo "</th>";
		}
		?>
		<th>Rank</th>
	</tr>
	<?php
	foreach ($scores as $i => $row) : ?>
		<tr class="<?=$i%2==0?'odd':'even'?>">
			<td><?=$i+1?></td>
			<td><a href="/player?id=<?=$e($row['pid'])?>"><?=$e($row['player'])?></a></td>
			<td><?=$e($row['total'])?> <?=$e($row['stars'])?><span class="star">&#9733;</span></td>
			<?php

			foreach ($challenges_in_set as $c) {
				$week = $row['week'][$c->id];
				if ($week == null) {
					echo "<td>&nbsp;</td>";
					continue;
				}
				$out = '<td>';
				if (!empty($week['morgue'])) $out .= '<a href="'. $e($week['morgue']) .'" target="_blank">';
				$out .= $week['score'];
				for ($i=0; $i < (int) $week['stars'] ; $i++) {
					$out .= '<span class="star">&#9733;</span>';
				}
				if (!empty($week['morgue'])) $out .= '</a>';
				echo $out . "</td>";
			}
			for ($i=0; $i < $weeks - sizeof($row['week']); $i++) {
				echo "<td>&nbsp;</td>";
			}
			?>
		</tr>
	<?php endforeach; ?>
</table>


<?php else : // no active challenge
	// echo $this->part('pause');
	echo "<h3>There is currently no active Crawl Cosplay Trunk Tournament (CCTT)</h3>";
	echo "<br>";
	echo 'For the previous tournament results, see:<br>';
 	echo '<ul><li><a href="/cctt/tresults.html?set=32">CCTT#1 for trunk v0.32</a></li>';
 	echo     '<li><a href="/cctt/tresults.html?set=33">CCTT#2 for trunk v0.32</a></li></ul>';
	echo "<br>";
endif;
?>
