<?php
/**
 * 
 */

namespace App;
use Illuminate\Support\Arr;
class FortuneHelper 
{
	
	public static function get_short_message()
	{
		$array = ['Courage is resistance to fear, mastery of fear--not absence of fear.','Stay the curse.','How apt the poor are to be proud.
		-- William Shakespeare, "Twelfth-Night"','You will be traveling and coming into a fortune.','There\'s small choice in rotten apples.
		-- William Shakespeare, "The Taming of the Shrew"','You\'ll never see all the places, or read all the books, but fortunately,
they\'re not all recommended.','You will be surprised by a loud noise.','Caution: breathing may be hazardous to your health.
','Q:	How many Harvard MBA\'s does it take to screw in a light bulb?
A:	Just one.  He grasps it firmly and the universe revolves around him.
'];
		print Arr::random($array);
	}

	public static function get_long_message(){
		$array = ['His followers called him Mahasamatman and said he was a god.  He preferred
to drop the Maha- and the -atman, however, and called himself Sam.  He never
claimed to be a god.  But then, he never claimed not to be a god.  Circum-
stances being what they were, neither admission could be of any benefit.
Silence, though, could.  It was in the days of the rains that their prayers
went up, not from the fingering of knotted prayer cords or the spinning of
prayer wheels, but from the great pray-machine in the monastery of Ratri,
goddess of the Night.  The high-frequency prayers were directed upward through
the atmosphere and out beyond it, passing into that golden cloud called the
Bridge of the Gods, which circles the entire world, is seen as a bronze
rainbow at night and is the place where the red sun becomes orange at midday.
Some of the monks doubted the orthodoxy of this prayer technique...
		-- Roger Zelazny, "Lord of Light"
','No live organism can continue for long to exist sanely under conditions of
absolute reality; even larks and katydids are supposed, by some, to dream.
Hill House, not sane, stood by itself against its hills, holding darkness
within; it had stood so for eighty years and might stand for eighty more.
Within, walls continued upright, bricks met neatly, floors were firm, and
doors were sensibly shut; silence lay steadily against the wood and stone
of Hill House, and whatever walked there, walked alone.
		-- Shirley Jackson, "The Haunting of Hill House"','If you pick up a starving dog and make him prosperous, he will not bite you.
This is the principal difference between a dog and a man.
		-- Mark Twain, "Pudd\'nhead Wilson\'s Calendar"
','Q:	Why is Poland just like the United States?
A:	In the United States you can\'t buy anything for zlotys and in
	Poland you can\'t either, while in the U.S. you can get whatever
	you want for dollars, just as you can in Poland.
		-- being told in Poland, 1987','Q:	How many journalists does it take to screw in a light bulb?
A:	Three.  One to report it as an inspired government program to bring
	light to the people, one to report it as a diabolical government plot
	to deprive the poor of darkness, and one to win a Pulitzer prize for
	reporting that Electric Company hired a light bulb-assassin to break
	the bulb in the first place.
'];
print Arr::random($array);
	}



public static function get_o_message(){
		$array = ['	"One day, I\'d like to wake up in the morning to find that every gay
	and lesbian has lavender skin.  On that morning, I will be -- mauve."','"One day, I\'d like to wake up in the morning to find that every gay
	and lesbian has lavender skin.  On that morning, I will be -- mauve."
root@okello-Aspire-E1-571:/home/okello# fortune -o
We will follow Zarathustra,		We will worship like the Druids,
Zarathustra like we use to,		Dancing naked in the woods,
I\'m a Zarathustra booster,		Drinking strange fermented fluids,
And he\'s good enough for me!		And it\'s good enough for me!
(chorus)				(chorus)

In the church of Aphrodite,
The priestess wears a see through nightie,
She\'s a mighty righteous sightie,
And she\'s good enough for me!
(chorus)

CHORUS:	Give me that old time religion,
	Give me that old time religion,
	Give me that old time religion,
	\'Cause it\'s good enough for me!','mosquito, n.:
	The state bird of New Jersey.','I\'m having an emotional outburst!!','He used to kiss her on her lips, but it\'s all over now.','If you remember the 60\'s, you weren\'t there.','We are going to give a little something, a few little years more, to
socialism, because socialism is defunct.  It dies all by itself.  The bad
thing is that socialism, being a victim of its ... Did I say socialism?
		-- Fidel Castro','France is a country where the money falls apart and you can\'t tear
the toilet paper.
		-- Billy Wilder','"One does not have to appeal to God to set the initial conditions
 for the creation of the universe, but if one does He would have
 to act through the laws of physics."
        [Stephen Hawking, "Black Holes & Baby Universes"]','Militant agnostic: I don\'t know, and you don\'t either.','"Not only were a good many of the revolutionary leaders more deist than
 Christian, the acutal number of church members was rather small. Perhaps
 as few as five percent of the populace were church members in 1776"
    [Lynn R. Buzzard, Exec Dir of Christian Legal Society, as quoted in
     _They Haven\'t Got a Prayer_, Elgin IL: David C. Cook, 1982, p. 81]'];
print Arr::random($array);
	}




}