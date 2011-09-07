<?php 
include_once("test_head.php");
?>

<h1>THE RISLEY PURITY TEST</h1>

<p>Last updated 061205. Version 2.2.4: 268 questions, 325 points. Now weighted for <em>Her Pleasure</em>!</p>

<div>

This test is designed to measure both how involved and how "spiritually connected" you are with Risley Hall. Note: Some questions are worth more than others.

<h3>Instructions: Check all boxes for which your answer is "yes".</h3>

</div>

<FORM name="test" action="http://www.armory.com/cgi-bin/purity-test" method=post>
<!-- This tells the scorer that it should expect an "end" tag -->
<INPUT type="hidden" name="start">
<!-- This is the base in which question numbers are given -->
<INPUT type=hidden value="10" name=base> 
<!-- The debug parameter causes the scorer to report any errors it encounters back to the test submittor.  This ensures that if there are any problems with your test, you will see them when you test it out. If you remove it, only fatal errors will be reported. To get a more detailed report about your test, change the parameter name from debug to verify and then submit an instance of your test with all of the checkboxes selected. This will give a report regardless of whether there are problems or not, so after fixing any problems that show up, remove the verify parameter. -->
<!-- input type=hidden name=verify -->
<!-- Be sure to change NumQuest if you change the number of questions! -->
<INPUT type=hidden value="267" name=NumQuest>
<INPUT type=hidden value="risley100" name=Name> 
<!-- Make sure that if you add/remove questions or change the point values of any questions, you change maxscore so that it remains the sum of all of the question values! -->
<INPUT type=hidden value="325" name=maxscore> 
<INPUT type=hidden value="Risley" name=longName> 
<INPUT type=hidden value="Risley" name=domain> 
<INPUT type=hidden value="Risley" name=domainName> 
<INPUT type=hidden value="Risley" name=inyou> 
<INPUT type=hidden value="mailto:david.schoonover@gmail.com" name=commentURL>

<!-- Insert a scoring guide entry into the value field of each of the Map lines below.  Change the 0 that precedes the
colon to the maximum-score for the category, and add the category's description immediately after the colon. Here is 
how the scoring guide works: A test submittor will be put in a given category if they get any score from that 
category's maximum score down to (but not including) the next lowest category's maximum score.  That means that one 
of the categories must have a maximum score exactly equal to the maximum score possible for your test.  The category 
with the lowest maximum score will be assigned to submittors who get any score from its maximum score down through zero. 
Remember, scores are calculated as the number of purity points *retained*, so the category that has a maximum score 
equal to your test's maximum score should have a category name appropriate for someone who has retained all or 
nearly all of their purity in your test's domain (that is, they answered yes to few questions or none at all). The 
order that the categories are given in here is not important. -->

<INPUT type=hidden value="304:InvisiRis" name="Map">
<INPUT type=hidden value="287:RisNovice" name="Map">
<INPUT type=hidden value="263:Risleyite" name="Map">
<INPUT type=hidden value="244:RisMilitiaman&#58; One Minute Man" name="Map">
<INPUT type=hidden value="234:RisMilitiaman&#58; Musket Packer" name="Map">
<INPUT type=hidden value="224:RisMilitiaman&#58; Cannon Master" name="Map">
<INPUT type=hidden value="214:RisMilitiaman&#58; First Sergent, Dildo Company" name="Map">
<INPUT type=hidden value="204:RisMilitiaman&#58; Master and Commander" name="Map">
<INPUT type=hidden value="198:RisNinja&#58; White Belt" name="Map">
<INPUT type=hidden value="190:RisNinja&#58; Blue Belt" name="Map">
<INPUT type=hidden value="182:RisNinja&#58; Pink Belt" name="Map">
<INPUT type=hidden value="176:RisNinja&#58; Flamin' Belt" name="Map">
<INPUT type=hidden value="168:Rear Admiral of Risley&#58; One Star" name="Map">
<INPUT type=hidden value="159:Rear Admiral of Risley&#58; Two Stars" name="Map">
<INPUT type=hidden value="150:Rear Admiral of Risley&#58; Three Stars" name="Map">
<INPUT type=hidden value="141:Rear Admiral of Risley&#58; Four Stars" name="Map">
<INPUT type=hidden value="134:Rearest of the Admirals of Risley" name="Map">
<INPUT type=hidden value="125:Mr. Wiggles of the Kommittee Funkadelic Allstars" name="Map">
<INPUT type=hidden value="116:P-Ris of the Kommittee Funkadelic Allstars" name="Map">
<INPUT type=hidden value="107:Starchild of the Kommittee Funkadelic Allstars" name="Map">
<INPUT type=hidden value="98:Dr. Funkenstein of the Kommittee Funkadelic Allstars" name="Map">
<INPUT type=hidden value="89:The Mothership Connection, the Arrival of the Holy Funk, the Cause of Creation, and Source of All Life" name="Map">
<INPUT type=hidden value="81:RisChampion&#58; Prudence Risley, True and Firm" name="Map">
<INPUT type=hidden value="78:RisChampion&#58; Olympia Slocum Sage, Truer and Firmer" name="Map">
<INPUT type=hidden value="75:RisChampion&#58; Rev. Andrew McNair, Fast and Furious" name="Map">
<INPUT type=hidden value="72:RisChampion&#58; Mathis Jackson, Man and Machine" name="Map">
<INPUT type=hidden value="69:RisDeity&#58; A Seductive Robot Decked out as a Beautiful Red-haired Girl" name="Map">
<INPUT type=hidden value="61:RisDeity&#58; A Being Run Over by a Martian Bishop Driving a Steamroller" name="Map">
<INPUT type=hidden value="53:RisDeity&#58; An Intergalactic Walrus that Perished after Falling out of a Flying Saucer" name="Map">
<INPUT type=hidden value="45:RisDeity&#58; Xenu, the Ancient Alien Emperor who Stacked Millions of Humans around Volcanoes and Blew them Up with Hydrogen Bombs" name="Map">
<INPUT type=hidden value="35:RisLegend" name="Map">
<INPUT type=hidden value="0:Godot!" name="Map">

<!-- Append a question to each checkbox line below. For each question line, the value gives the question number, then a comma,then the point value. If you want any question to have a point value other than one, change it.
Point values must be positive integers. If you don't use all of the checkbox lines, delete the unused ones. If you need more, add them, incrementing the question number of each line. If you make any such changes, remember to adjust the NumQuest and maxscore values as described above! -->
<div>

<h2>RisCulture</h2>

<p>(94 possible points.)</p>

<p>Have you ever...</p>
<OL>
	<LI><INPUT type=checkbox value="1,1" name=q> lived in Risley?</li>
	<LI><INPUT type=checkbox value="2,1" name=q> ... without attending Cornell?</li>
	<LI><INPUT type=checkbox value="247,3" name=q> ... for all the time you were at Cornell until you graduated, failed out or died? (RisLifer) (3 points)</li>
	<LI><INPUT type=checkbox value="246,2" name=q> ... specifically, lived in the Risley shops? (2 points)</li>
	<LI><INPUT type=checkbox value="3,1" name=q> been a nude model for Life Drawing?</li>
	<LI><INPUT type=checkbox value="259,1" name=q> ... run Life Drawing?</li>
	<LI><INPUT type=checkbox value="4,1" name=q> been a Risley Shop manager?</li>
	<LI><INPUT type=checkbox value="5,2" name=q> painted a mural? (2 points)</li>
	<LI><INPUT type=checkbox value="6,1" name=q> ... with your naked body?</li>
	<LI><INPUT type=checkbox value="7,1" name=q> worked in RisDining?</li>
	<LI><INPUT type=checkbox value="8,1" name=q> eaten on the Mathis Jackson Mealplan?</li>
	<LI><INPUT type=checkbox value="9,3" name=q> ... exclusively? (3 points)</li>
	<LI><INPUT type=checkbox value="10,1" name=q> been Risley staff? (RA, PA, RHD, Grand Vizier, GSA/AIR)</li>
	<LI><INPUT type=checkbox value="11,2" name=q> attended Kommittee? (2 points)</li>
	<LI><INPUT type=checkbox value="12,1" name=q> ... for 2+ hours?</li>
	<LI><INPUT type=checkbox value="253,2" name=q> ... for 5+ hours? (Drafting GSA Sub Charter, Theatre Insurrection '06) (2 points)</li>
	<LI><INPUT type=checkbox value="13,1" name=q> ... drunk (or othrewise altered)?</li>
	<LI><INPUT type=checkbox value="254,1" name=q> ... ... drunk but still "contributing" to discussion? (Things this does not include: Dumping your drink all over a couch, giggling uncontrollably, throwing things at people, etc.)</li>
	<LI><INPUT type=checkbox value="14,1" name=q> ... ... and drinking throughout?</li>
	<LI><INPUT type=checkbox value="15,1" name=q> ... ... every week for a month?</li>
	<LI><INPUT type=checkbox value="16,1" name=q> ... as the Rebel Alliance? (The Rebel Alliance is an elected Kommittee member who takes satirical and snarky minutes during the meeting, and then sends them to the listserv.)</li>
	<LI><INPUT type=checkbox value="17,1" name=q> been a Kommittee member? (Elected or Endured)</li>
	<LI><INPUT type=checkbox value="261,1" name=q> ... been elected to Kommittee?</li>
	<LI><INPUT type=checkbox value="18,2" name=q> ... specifically, &iexcl;El Presidente for Life!? (2 points)</li>
	<LI><INPUT type=checkbox value="260,2" name=q> ... specifically, the Grand Vizier? (2 points)</li>
	<LI><INPUT type=checkbox value="19,2" name=q> ... specifically, the Kommittee Mime? (2 points)</li>
	<LI><INPUT type=checkbox disabled> ... specifically, the Kommittee Barber? (infinite points)</li>
	<LI><INPUT type=checkbox value="20,1" name=q> been a sub-Kommittee member?</li>
	<LI><INPUT type=checkbox value="262,1" name=q> ... been elected to an office in Theatre Subcommittee?</li>
	<LI><INPUT type=checkbox value="263,2" name=q> ... ... been elected General Manager, Financial Manager, or Technical Director of Risley Theatre? (2 points)</li>
	<LI><INPUT type=checkbox value="21,2" name=q> been a performer at a Risley event? (2 points)</li>
	<LI><INPUT type=checkbox value="22,2" name=q> ... whilst scantily clad? (2 points)</li>
	<LI><INPUT type=checkbox value="23,2" name=q> come to a Ris event in drag? (2 points)</li>
	<LI><INPUT type=checkbox value="24,1" name=q> been to the Risley performance of the Rocky Horror Picture Show?</li>
	<LI><INPUT type=checkbox value="25,2" name=q> ... as a member of Denton Drama Troupe? (DDT puts on the Rocky Horror Picture Show.) (2 points)</li>
	<LI><INPUT type=checkbox value="26,1" name=q> been to Masquerave?</li>
	<LI><INPUT type=checkbox value="264,2" name=q> ... run Masquerave? (2 points)</li>
	<LI><INPUT type=checkbox value="153,1" name=q> been to a rave in the Subbasement?</li>
	<LI><INPUT type=checkbox value="154,2" name=q> ... No one runs a rave in the Subbasement. (2 points)</li>
	<LI><INPUT type=checkbox value="27,1" name=q> been to Messiah?</li>
	<LI><INPUT type=checkbox value="28,2" name=q> ... and performed? (2 points)</li>
	<LI><INPUT type=checkbox value="29,1" name=q> found Lost Coffee?</li>
	<LI><INPUT type=checkbox value="265,2" name=q> ... run Lost Coffee? (2 points)</li>
	<LI><INPUT type=checkbox value="30,1" name=q> been to RisBrunch?</li>
	<LI><INPUT type=checkbox value="31,2" name=q> ... run RisBrunch? (2 points)</li>
	<LI><INPUT type=checkbox value="32,1" name=q> been to Eat This!?</li>
	<LI><INPUT type=checkbox value="33,2" name=q> ... run Eat This!? (2 points)</li>
	<LI><INPUT type=checkbox value="34,1" name=q> been to Spring Faire?</li>
	<LI><INPUT type=checkbox value="266,2" name=q> ... run Spring Faire? (2 points)</li>
	<LI><INPUT type=checkbox value="35,1" name=q> ... and Jello Wrestled?</li>
	<LI><INPUT type=checkbox value="36,1" name=q> been to the Patriot Day Jenga Tournament?</li>
	<LI><INPUT type=checkbox value="37,1" name=q> ... and won?</li>
	<LI><INPUT type=checkbox value="39,1" name=q> contributed to an independent publication made in Risley? (The Second East Probe, Risley Revue)</li>
	<LI><INPUT type=checkbox value="40,1" name=q> been to Porn Night?</li>
	<LI><INPUT type=checkbox value="41,1" name=q> ... as a member of the Risley Porn Collective? (RPC puts on Porn Night.)</li>
	<LI><INPUT type=checkbox value="42,2" name=q> been a RisOC? (Risley Orientation Counselor) (2 points)</li>
	<LI><INPUT type=checkbox value="43,1" name=q> ... a hungover RisOC on move-in day?</li>
	<LI><INPUT type=checkbox value="44,2" name=q> ... a "special" RisOC on move-in day? (Each year, one special person gets completly wasted, vomits everywhere, sleeps in it, and probably should have their stomach pumped.) (2 points)</li>
	<LI><INPUT type=checkbox value="38,2" name=q> ... been elected Lord of the RisOCs? (2 points)</li>
	<LI><INPUT type=checkbox value="45,1" name=q> been a member of the Risley Ice Hockey and Blood Donation Team?</li>
	<LI><INPUT type=checkbox value="46,1" name=q> hung out with a Risley Faculty Fellow?</li>
	<LI><INPUT type=checkbox value="47,1" name=q> ... and was read a bedtime story in a real British accent?</li>
	<LI><INPUT type=checkbox value="48,2" name=q> began a new Risley tradition or recurring program? (2 points)</li>
	<LI><INPUT type=checkbox value="49,2" name=q> kept a Risley tradition alive? (2 points)</li>
	<LI><INPUT type=checkbox value="50,1" name=q> been in a protest organized by a Risleyite?</li>
	<LI><INPUT type=checkbox value="51,1" name=q> organized a protest?</li>
	<LI><INPUT type=checkbox value="52,1" name=q> owned a non-aquatic fish in Risley?</li>
</OL>

</div>

<div>

<h2>Exploring Risley</h2>

<p>(25 possible points.)</p>

<p>Have you ever...</p>

<ol start="68">
	<LI><INPUT type=checkbox value="53,1" name=q> been in Risley's Gorge? (Yes, it's <i>ours</i>.)</li>
	<LI><INPUT type=checkbox value="54,2" name=q> been on the roof of the tower? (2 points)</li>
	<LI><INPUT type=checkbox value="55,2" name=q> ... on the roof, but somewhere <em>other than</em> the tower? (2 points)</li>
	<LI><INPUT type=checkbox value="56,1" name=q> been in the tower's fire escape?</li>
	<LI><INPUT type=checkbox value="57,1" name=q> been on top of the eschervator (the elevator) itself?</li>
	<LI><INPUT type=checkbox value="58,2" name=q> been in the room above the eschervator? (2 points)</li>
	<LI><INPUT type=checkbox value="59,1" name=q> been in fourth lost? (eg. the attic)</li>
	<LI><INPUT type=checkbox value="60,1" name=q> been in the crawlspace above three and a half or fourth and a half?</li>
	<LI><INPUT type=checkbox value="61,1" name=q> been in the attic above fourth main/east?</li>
	<LI><INPUT type=checkbox value="62,2" name=q> been behind the fence where the machinery is in the sub-basement? (2 points)</li>
	<LI><INPUT type=checkbox value="63,1" name=q> been in one of the driers in the laundry room?</li>
	<LI><INPUT type=checkbox value="64,1" name=q> ... to impress a girl or boy?</li>
	<LI><INPUT type=checkbox value="65,1" name=q> been in the room behind the dryers in the laundry room?</li>
	<LI><INPUT type=checkbox value="66,1" name=q> been under the front steps?</li>
	<LI><INPUT type=checkbox value="67,1" name=q> been in that narrow-doored room next to the elevator in the basement?</li>
	<LI><INPUT type=checkbox value="68,1" name=q> been in the Risley router room?</li>
	<LI><INPUT type=checkbox value="69,1" name=q> ... and graffiti'd it?</li>
	<LI><INPUT type=checkbox value="70,1" name=q> crawled up the dumbwaiter shaft?</li>
	<LI><INPUT type=checkbox value="72,1" name=q> entered Risley through a window?</li>
	<LI><INPUT type=checkbox value="73,1" name=q> ... naked?</li>
	<LI><INPUT type=checkbox value="74,1" name=q> left Risley through a window?</li>
</ol>
	
</div>

<div>

<h2>Pool</h2>

<p>(32 possible points.)</p>

<p>Have you ever...</p>

<OL start="89">
  <LI><INPUT type=checkbox value="75,1" name=q> done Pool?</li> 
  <LI><INPUT type=checkbox value="76,1" name=q> ... naked?</li>
  <LI><INPUT type=checkbox value="77,1" name=q> done Jello Pool?</li>
  <LI><INPUT type=checkbox value="78,2" name=q> ... naked? (ew) (2 points)</li>
  <LI><INPUT type=checkbox value="79,1" name=q> done any other, non-water version of Pool? (ex. Chicken Broth, Kool-Aid, Vodka, etc)</li>
  <LI><INPUT type=checkbox value="80,3" name=q> ... NAKED? (oh, god, THE BURNING) (3 points)</li>
  <LI><INPUT type=checkbox value="245,1" name=q> done "the worst pool ever"? (The hot water for the main and east sides of the building weren't exactly working.)</li>
  <LI><INPUT type=checkbox value="81,1" name=q> done Pool with a family member?</li>
  <LI><INPUT type=checkbox value="82,1" name=q> done Pool with a Risleyite's family member?</li>
  <LI><INPUT type=checkbox value="83,1" name=q> ... without the Risleyite there?</li>
  <LI><INPUT type=checkbox value="84,2" name=q> done Pool with a professor? (2 points)</li>
  <LI><INPUT type=checkbox value="85,2" name=q> ... while taking his/her class? (2 points)</li>
  <LI><INPUT type=checkbox value="86,1" name=q> Pooled with someone you'd boink?</li>
  <LI><INPUT type=checkbox value="87,1" name=q> boinked with someone you'd pool? Erm. Been to Pool with someone you have boinked/are boinking?</li>
  <LI><INPUT type=checkbox value="88,1" name=q> been a Pool voyeur?</li>
  <LI><INPUT type=checkbox value="89,1" name=q> ... and serenaded the occupants with your guitar?</li>
  <LI><INPUT type=checkbox value="90,1" name=q> gotten out to cool off and been seen naked by passers by?</li>
  <LI><INPUT type=checkbox value="91,1" name=q> been caught by CUPD?</li>
  <LI><INPUT type=checkbox value="92,2" name=q> ... and/or had them confiscate your clothes? ("I'd like my property back, please." "Were you involved with the streaking?" "No." "What are you missing?" "My pants and wallet." "... Take a seat.") (2 points)</li>
  <LI><INPUT type=checkbox value="93,1" name=q> done a Balch Run?</li>
  <LI><INPUT type=checkbox value="94,2" name=q> ... and been caught by the cops? (2 points)</li>
  <LI><INPUT type=checkbox value="95,1" name=q> given the Cardinal Rules of Pool?</li>
  <LI><INPUT type=checkbox value="96,1" name=q> broken a Cardinal Rule of Pool?</li>
  <LI><INPUT type=checkbox value="97,2" name=q> ... or *all* of the Cardinal Rules of Pool? (2 points, but please don't) (please)</li>
</OL>

</div>

<div>

<h2>Crimes and Misdemeanors</h2>

<p>(13 possible points.)</p>

<p>Have you ever...</p>

<OL start="113">
  <LI><INPUT type=checkbox value="98,1" name=q> created such a disturbance that you were asked to leave a dining hall?</li>
  <LI><INPUT type=checkbox value="99,1" name=q> caused other tables to get up and leave?</li>
  <LI><INPUT type=checkbox value="102,1" name=q> bought drugs in Risley?</li>
  <LI><INPUT type=checkbox value="103,1" name=q> dealt drugs in Risley? </li>
  <LI><INPUT type=checkbox value="104,1" name=q> used illicit drugs in Risley?</li>
  <LI><INPUT type=checkbox value="105,1" name=q> manufactured or grown your own drugs in Risley?</li>
  <LI><INPUT type=checkbox value="106,1" name=q> ... used Risley shops to that end? </li>
  <LI><INPUT type=checkbox value="107,2" name=q> ... used Risley kitchens for storage to that end? (2 points)</li>
  <LI><INPUT type=checkbox value="108,1" name=q> drunk alcohol while underage in Risley? </li>
  <LI><INPUT type=checkbox value="109,1" name=q> endrunkened underage Risleyites?</li>
  <LI><INPUT type=checkbox value="110,1" name=q> been blessed by a Risley X Fairy (Beer, Cheese, Hopskip, Feast, etc)? </li>
  <LI><INPUT type=checkbox value="111,2" name=q> ... been a Risley X Fairy? (2 points)</li>
</OL>

</div>

<div>

<h2>Unkatunk and Intra-Building Relations</h2>

<p>(42 possible points.)</p>

<h3>A few Terms...</h3>

<p><span class="ris-h3">Unkatunk to</span> &mdash; The relationship between two people, A and C, whereby A has boinked B and B has boinked C.</p>

<p><span class="ris-h3">Unkatunk through</span> &mdash; The relationship between two people, A and B, whereby A has boinked B and B has boinked C. 
To be unkatunk through someone, you must be unkatunk to someone.</p>

<p>For example, pretend that Dale kisses Stacy. Stacy then goes on to kiss Dave. Dale would then be "unkatunk to" Dave, 
and "unkatunk through" Stacy.</p>

<h3>Boink</h3> &mdash; (Big B) To have oral, anal, or vaginal sex with a person.<br>

<h3>boink</h3> &mdash; (Little B) To have intimate contact with a person that is not Boinking.

<p>Are you unkatunk...</p>

<OL start="125">
	<LI><INPUT type=checkbox value="112,1" name=q> to 5 or more Risleyites? (You probably have this point if you've kissed anyone in Risley.)</li>
	<LI><INPUT type=checkbox value="113,1" name=q> through 5 or more Risleyites? (Have you kissed 5 people?) (You are a Node.)</li>
	<LI><INPUT type=checkbox value="114,1" name=q> to 10 or more Risleyites? (You probably also have *this* point if you've kissed anyone in Risley.)</li>
	<LI><INPUT type=checkbox value="115,1" name=q> through 10 or more Risleyites? (Have you kissed 10 people?)</li>
	<LI><INPUT type=checkbox value="116,2" name=q> through 5 or more Nodes? (You are a Hub.) (2 points)</li>
	<LI><INPUT type=checkbox value="117,3" name=q> through 10 or more Nodes? (You are a FUCKING AIRPORT. PLANES FLY IN AND OUT OF YOU.) (3 points)</li>
	<LI><INPUT type=checkbox value="118,4" name=q> through 5 or more FUCKING AIRPORTS? (You are a OH MY GOD GO GET TESTED NOW. WHAT THE FUCK ARE YOU TAKING THIS TEST FOR? THERE ARE MORE IMPORTANT TESTS FOR YOU.) (OMG points)</li>
</ol>

<p>Have you ever...</p>

<OL start="132">
	<LI><INPUT type=checkbox value="119,1" name=q> been propositioned by a Risleyite? </li>
	<LI><INPUT type=checkbox value="120,1" name=q> ... a naked Risleyite? (Pool counts.) </li>
	<LI><INPUT type=checkbox value="121,1" name=q> ... a staff member? </li>
	<LI><INPUT type=checkbox value="122,2" name=q> ... a naked staff member? (2 points)</li>
	<LI><INPUT type=checkbox value="123,1" name=q> accepted any of the above?</li>
	<LI><INPUT type=checkbox value="125,1" name=q> been sleazed on by Old School Ris-Sleaze (Michael Niederman, Michael Freiert), or New Ris-Sleaze (Dante H., Meredith M., or Mitchell S.)?</li>
	<LI><INPUT type=checkbox value="126,1" name=q> ... by all of them?</li>
	<LI><INPUT type=checkbox value="127,1" name=q> ... boinked any of them?</li>
	<LI><INPUT type=checkbox value="128,2" name=q> ... boinked all of them? (shame) (2 points)</li>
</OL>

<p>Have you boinked:</p>

<OL start="141">
  <LI><INPUT type=checkbox value="129,2" name=q> the Risley Mascot? (The Risley Mascot is the person living in Risley while not attending Cornell or having another residence.) (2 points)</li>
  <LI><INPUT type=checkbox value="130,5" name=q> the RHD? (5 points)</li>
  <LI><INPUT type=checkbox value="131,3" name=q> a GSA/AIR? (3 points)</li>
  <LI><INPUT type=checkbox value="132,1" name=q> an RA?</li>
  <LI><INPUT type=checkbox value="133,5" name=q> ... all the RA's from one particular year (not necessarily all in that year)? (5 points)</li>
  <LI><INPUT type=checkbox value="134,2" name=q> a PA? (2 points)</li>
</OL>

</div>

<div>

<h2>Naughtiness</h2>

<p>(114 possible points.)</p>

<p>With a Risleyite or in Risley have you ever...</p>

<OL start="147">
	<LI><INPUT type=checkbox value="135,1" name=q> been nekkid in Risley? </li>
	<LI><INPUT type=checkbox value="136,1" name=q> ... with more than one person at once?</li>
	<LI><INPUT type=checkbox value="137,1" name=q> snuggled or spooned or dryhumped?</li>
	<LI><INPUT type=checkbox value="138,1" name=q> ... with more than one person at once?</li>
	<LI><INPUT type=checkbox value="139,1" name=q> made out?</li>
	<LI><INPUT type=checkbox value="140,1" name=q> ... with more than one person at once? </li>
	<LI><INPUT type=checkbox value="141,1" name=q> groped?</li>
	<LI><INPUT type=checkbox value="142,1" name=q> been in naughty pictures? (either taken by a Risleyite or in Risley)</li>
	<LI><INPUT type=checkbox value="143,1" name=q> masturbated?</li>
	<LI><INPUT type=checkbox value="144,1" name=q> ... with more than, you know, just you? (circle jerk?)</li>
	<LI><INPUT type=checkbox value="145,2" name=q> ... with others in the room, unaware? (!) (2 points)</li>
	<LI><INPUT type=checkbox value="146,1" name=q> been involved in bondage? (Rocky and/or Masquerave do not count.) </li>
	<LI><INPUT type=checkbox value="147,1" name=q> ... with more than one person at once?</li>
	<LI><INPUT type=checkbox value="150,1" name=q> rimmed?</li>
	<LI><INPUT type=checkbox value="124,1" name=q> ... with more than one person at once?</li>
	<LI><INPUT type=checkbox value="151,1" name=q> fisted? </li>
	<LI><INPUT type=checkbox value="152,2" name=q> ... with more than one person at once? (<a href="http://www.ivygateblog.com/blog/2006/11/risley_hall_cornells_raging_id.html" target="_blank">Nothing quite like "a good ol' triple-fisting in the building's dungeon-like bowels"!</a>) (2 points)</li>
	<LI><INPUT type=checkbox value="148,1" name=q> 69'd?</li>
	<LI><INPUT type=checkbox value="149,1" name=q> ... with more than one person at once? (daisy chain!)</li>
	<LI><INPUT type=checkbox value="155,1" name=q> had vaginal sex?</li>
	<LI><INPUT type=checkbox value="156,1" name=q> ... with more than one person at once? (That is, had group sex where there was vaginal sex.)</li>
	<LI><INPUT type=checkbox value="157,1" name=q> had anal sex?</li>
	<LI><INPUT type=checkbox value="158,1" name=q> ... with more than one person at once? (That is, had group sex where there was anal sex.)</li>
</OL>

<h3>Super Bonus Naughtiness!</h3>

<p>Have you ever...</p>

<OL start="170">
	<LI><INPUT type=checkbox value="159,1" name=q> broken furniture in Risley during a sexual act?</li>
	<LI><INPUT type=checkbox value="160,2" name=q> ... owned by Cornell? (2 points)</li>
	<LI><INPUT type=checkbox value="161,1" name=q> been beaten, pounded, mauled, bruised, scarred, bitten or otherwise assaulted by a Risleyite (or vice-versa)?</li>
	<LI><INPUT type=checkbox value="162,1" name=q> ... with sexual intent?</li>
	<LI><INPUT type=checkbox value="163,1" name=q> ... and drew blood or bled?</li>
	<LI><INPUT type=checkbox value="164,1" name=q> ... any of the above, but with knives? ("The Adri Point")</li>
	<LI><INPUT type=checkbox value="165,1" name=q> lost your virginity in Risley or to a Risleyite?</li>
	<LI><INPUT type=checkbox value="166,1" name=q> taken somone's virginity in Risley?</li>
	<LI><INPUT type=checkbox value="167,1" name=q> ... a Risleyite's virginity in Risley? (2 points)</li>
	<LI><INPUT type=checkbox value="168,1" name=q> boinked a Risleyite with a significant other? (Your sig does not count.)</li>
	<LI><INPUT type=checkbox value="169,1" name=q> ... with their sig in the room? (<em>Swingin'</em>)</li>
	<LI><INPUT type=checkbox value="170,2" name=q> participated in a Risley orgy? (Daily Sun-worthy!) (2 points)</li>
	<LI><INPUT type=checkbox value="171,2" name=q> hosted an orgy or group boinking in Risley? (2 points)</li>
	<LI><INPUT type=checkbox value="172,2" name=q> ... without your presence? (2 points)</li>
	<LI><INPUT type=checkbox value="173,1" name=q> been referred to as the "easiest lay in Risley"?</li>
	<LI><INPUT type=checkbox value="174,3" name=q> ... competed for the title? (3 points)</li>
	<LI><INPUT type=checkbox value="175,1" name=q> been rumoured to be the "best lay in Risley"?</li>
	<LI><INPUT type=checkbox value="176,1" name=q> used this test as a checklist? (Well? Get on it.)</li>
	<LI><INPUT type=checkbox value="177,1" name=q> waxed/shaved/naired a Risleyite's pubes (or had yours done by a Risleyite)?</li>
	<LI><INPUT type=checkbox value="178,1" name=q> been a force of evil? (eg. Successfully persuaded Risleyites to get naked or hook up for your personal amusement.)</li>
	<LI><INPUT type=checkbox value="179,1" name=q> succumbed to a force of evil?</li>
</OL>

<h3>Naughty Locations!</h3>

<p>With a Risleyite or in Risley, have you ever boinked or Boinked:</p>

<p><em>Easy...</em></p>

<OL start="191">
	<LI><INPUT type=checkbox value="180,1" name=q> in your room?</li>
	<LI><INPUT type=checkbox value="181,1" name=q> in someone else's room?</li>
	<LI><INPUT type=checkbox value="182,1" name=q> in the showers?</li>
	<LI><INPUT type=checkbox value="183,1" name=q> in the Front Hall, the Great Hall, or Tammany?</li>
	<LI><INPUT type=checkbox value="184,1" name=q> in the TV room/CLR/Cowcliffes?</li>
	<LI><INPUT type=checkbox value="185,1" name=q> in the laundry room or music room?</li>
	<LI><INPUT type=checkbox value="186,1" name=q> in the eschervator? </li>
	<LI><INPUT type=checkbox value="187,1" name=q> in the practice rooms or shops?</li>
	<LI><INPUT type=checkbox value="188,1" name=q> in the 2nd floor library?</li>
	<LI><INPUT type=checkbox value="189,1" name=q> in the sub basement?</li>
</ol>

<p><em>Moderate...</em></p>

<ol start="201">
	<LI><INPUT type=checkbox value="190,1" name=q> in a relative stranger's room? </li>
	<LI><INPUT type=checkbox value="191,1" name=q> with others in the room? </li>
	<LI><INPUT type=checkbox value="192,1" name=q> in a kitchen?</li>
	<LI><INPUT type=checkbox value="193,1" name=q> on a balcony or a ledge?</li>
	<LI><INPUT type=checkbox value="194,1" name=q> in the theatre or theatre related space? </li>
</ol>

<p><em>Hard...</em></p>

<ol start="206">
	<LI><INPUT type=checkbox value="195,2" name=q> on the roof? (2 points)</li>
	<LI><INPUT type=checkbox value="196,2" name=q> in the RisDining Kitchen? (2 points)</li>
	<LI><INPUT type=checkbox value="197,2" name=q> in a staff member's apartment? (2 points)</li>
	<LI><INPUT type=checkbox value="198,2" name=q> in the service center? (2 points)</li>
	<LI><INPUT type=checkbox value="199,2" name=q> in the Louie's Lunch truck? (2 points)</li>
</OL>

<h3>Big 'B' Boinking</h3>

<p>With a Risleyite or in Risley, have you Boinked (remember, at least oral sex):</p>

<OL start="211">
	<LI><INPUT type=checkbox value="200,1" name=q> in the laundry room?</li>
	<LI><INPUT type=checkbox value="201,1" name=q> in the practice rooms or shops?</li>
	<LI><INPUT type=checkbox value="202,1" name=q> in the 2nd floor library?</li>
	<LI><INPUT type=checkbox value="203,2" name=q> ... with more than one person at once? (2 points)</li>
	<LI><INPUT type=checkbox value="204,1" name=q> in the theatre or theatre related space (ie. the <em>tool</em> room)? </li>
	<LI><INPUT type=checkbox value="205,1" name=q> in the room of someone who is not party to the Boinking? </li>
	<LI><INPUT type=checkbox value="206,1" name=q> in a relative stranger's room? </li>
	<LI><INPUT type=checkbox value="207,1" name=q> in the service center/RA office?</li>
	<LI><INPUT type=checkbox value="208,1" name=q> in the dance studio/music room?</li>
	<LI><INPUT type=checkbox value="209,3" name=q> ... with an allocation beforehand explicitly for that purpose? (3 points)</li>
	<LI><INPUT type=checkbox value="210,2" name=q> in the RisDining Kitchen? (2 points)</li>
	<LI><INPUT type=checkbox value="211,2" name=q> ... on the food prep tables (ew) or the grill (ow)? (2 points)</li>
	<LI><INPUT type=checkbox value="212,2" name=q> in the Front Hall? (2 points)</li>
	<LI><INPUT type=checkbox value="213,2" name=q> in the Great Hall? (2 points)</li>
	<LI><INPUT type=checkbox value="214,2" name=q> in Tammany? (2 points)</li>
	<LI><INPUT type=checkbox value="215,2" name=q> in the TV room/CLR/Cowcliffes? (2 points)</li>
	<LI><INPUT type=checkbox value="216,2" name=q> in the eschervator? (2 points)</li>
	<LI><INPUT type=checkbox value="217,2" name=q> on the roof? (2 points)</li>
	<LI><INPUT type=checkbox value="218,2" name=q> in a kitchen? (2 points)</li>
	<LI><INPUT type=checkbox value="219,2" name=q> with others in the room not participating? (2 points)</li>
	<LI><INPUT type=checkbox value="220,2" name=q> in an impressive place on-campus (eg. Big Red Barn, Plantations, the Slope?) (2 points)</li>
	<li><input type=checkbox value="221,2" name=q> ... did you get caught in any of the above? (2 points)</li>
</OL>

</div>

<div>

<h2>EXTRA CREDIT!</h2>

<p>(36 possible extra-credit points.)</p>

<h3>The Freshman Competition!</h3>

<p>(Note: Ties go to everyone.) This is a competition between the members of your freshman class. You don't have to be a freshman to compete&mdash;for example, 
all the members of the class of 2009 are able to earn these points even though they're no longer frosh. So... were you <strong>the *first* Risleyite in 
your freshman class to</strong>...</p>

<ol start="233">
	<LI><INPUT type=checkbox value="248,1" name=q> be elected &iexcl;El Presidente for Life! of Kommittee?</li>
	<LI><INPUT type=checkbox value="249,1" name=q> plan or run an impressive Risley event? (ex. plan Masquerave, cook RisFeast, direct Rocky, or book Tammany Night Club)</li>
	<LI><INPUT type=checkbox value="250,1" name=q> become a FUCKING AIRPORT?</li>
	<LI><INPUT type=checkbox value="251,1" name=q> Boink (big 'B') your roommate?</li>
	<LI><INPUT type=checkbox value="252,1" name=q> Boink (big 'B') a staff member? (PA, RA, RHD, GSA/AIR, Grand Vizier, Maintenance)</li>
</ol>

<h3>Extraordinary Historical Events</h3>

<P>Have you ever...</p>

<OL start="238">
	<LI><INPUT type=checkbox value="222,1" name=q> boinked your friends? (platonic)</li>
	<LI><INPUT type=checkbox value="223,1" name=q> boinked your enemies? (silly)</li>
	<LI><INPUT type=checkbox value="224,1" name=q> been committed while living in Risley? (Like, to a mental institution.)</li>
	<LI><INPUT type=checkbox value="225,1" name=q> ... forcibly--like, by the men in the white coats.</li>
	<LI><INPUT type=checkbox value="226,1" name=q> helped someone find their sexual orientation? (Did you get the toaster?)</li>
	<LI><INPUT type=checkbox value="227,1" name=q> screamed out in sexual ecstasy and had someone not involved scream back?</li>
	<LI><INPUT type=checkbox value="256,1" name=q> had or induced an orgasm while having an amicable conversation with the orgasmee's roommate?</li>
	<LI><INPUT type=checkbox value="228,1" name=q> been accosted/hit on/interrupted mid-coitus by a housekeeper?</li>
	<LI><INPUT type=checkbox value="257,1" name=q> been accosted/hit on/interrupted mid-coitus by a President of Cornell University?</li>
	<LI><INPUT type=checkbox value="229,1" name=q> had ribs broken by a staff member during sex?</li>
	<LI><INPUT type=checkbox value="230,1" name=q> lost a Lee Press-On-Nail in a bodily orifice? (Other brands are also acceptable)</li>
	<LI><INPUT type=checkbox value="268,1" name=q> ever addressed a crowd of 300 including firemen dressed as Carmen Miranda? </li>
	<LI><INPUT type=checkbox value="231,1" name=q> been on David Baines' Nookie List?</li>
	<LI><INPUT type=checkbox value="232,1" name=q> had Rachael Applebaum honk her rubber chicken at you while you were Boinking?</li>
	<LI><INPUT type=checkbox value="258,1" name=q> had porn featuring you circulated on the campus filesharing network (ex. DC++)?</li>
	<LI><INPUT type=checkbox value="233,1" name=q> used Risley's "Toys" from the Masquerave (Love Ewe, Chin Fucker, etc...) after the fact? </li>
	<LI><INPUT type=checkbox value="243,1" name=q> been to a party thrown by Gordon F. Sander?</li>
	<LI><INPUT type=checkbox value="234,1" name=q> been walled into your room by soda cans? (They have to still be full of soda. Yes, this is what Points are for.)</li>
	<LI><INPUT type=checkbox value="235,1" name=q> fired an RHD? (She says she "left voluntarily".)</li>
	<LI><INPUT type=checkbox value="236,1" name=q> advertised on the listserv for someone to take your virginity? (The answer to your question is "KANE".)</li>
	<LI><INPUT type=checkbox value="237,1" name=q> been JA'd for planning and executing House Meeting? (Specifically for lighting a foot-tall pure Ethanol fire, perhaps?)</li>
	<LI><INPUT type=checkbox value="238,1" name=q> been beaten brutally by a drunken GSA/AIR such that you receive a huge bruise which lasted for weeks.</li>
	<LI><INPUT type=checkbox value="239,1" name=q> while in pool, been asked by a uniformed police officer whether you were, maybe, looking for any of your clothing?</li>
	<LI><INPUT type=checkbox value="71,1" name=q> crossed the catwalk under the Thurston Avenue bridge?</li>
	<LI><INPUT type=checkbox value="267,1" name=q> won the Patriot Day Jenga Tournament by tiebreaker?</li>
	<LI><INPUT type=checkbox value="100,3" name=q> built a giant trebuchet on the roof? (3 points)</li>
	<LI><INPUT type=checkbox value="101,2" name=q> ... and lobbed things at Zeta Psi? (2 points)</li>
</ol>

<h3>Meta</h3>

<p>Have you ever...</p>

<ol start="265">
	<LI><INPUT type=checkbox value="240,1" name=q> boinked a Risley Purity Test author? (If you aren't sure, you probably haven't.) </li>
	<LI><INPUT type=checkbox value="241,1" name=q> been Unkatunk to a Risley purity test author? (If you aren't sure, you probably are.) </li>
	<LI><INPUT type=checkbox value="244,3" name=q> ... boinked all the Risley Purity Test authors? (Aleksey, Gaea, Nate, Dale, Mim and Dave) (3 points)</li>
	<LI><INPUT type=checkbox value="242,1" name=q> written a Risley purity test?</LI>
</OL>
</div>

<p>
<INPUT type=submit value="GIVE IT TO ME">
&nbsp;&nbsp;
<INPUT type=reset value="(reset)"> <!-- This and the start tag are an attempt at detecting the case where a browser only transfers part of the form due to internal limitations -->
</p>

<p>Maintained by <a href="mailto:david.schoonover@gmail.com?subject=Risley Purity Test">David Schoonover</a>. (<a href="#" onclick="SetAllCheckBoxes('test','q',true);">check all</a>)</p>

<INPUT type=hidden name=end> 

</form>


</body>
</html>

<?php 
include_once("test_foot.php");
?>