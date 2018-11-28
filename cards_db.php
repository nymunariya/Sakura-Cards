<?php
	
	class SakuraDeck {
	
		//protected $cards = [];
		//protected $groups = [];
	
		public function __construct() {
			$this->cards = array(
		    array(
		        "id" => 0,
		        "name"=> "Light",
		        "img"=> "74,3",
		        "group"=> "Red",
		        "summary"=> "Lead everything yourself. Your prospect for the distant future.",
		        "message"=> "You attract the attention of everyone with your radiant spirit. No matter what you do, it will always go well, with a great amount of good luck. You will be able to improve your abilities in your area of specialty/study, and there’s a better chance of secret admirers declaring their love.",
		        "warning"=> "It is possible to obtain a bright future by doing your very best. Rush into action without fearing failure."
		    ),
		    array(
		        "id"=> 1,
		        "name"=> "Dark",
		        "img"=> "143,3",
		        "group"=> "Red",
		        "summary"=> "As usual, let nature take its course.",
		        "message"=> "Your energy is low, so stop trying to make your schedule full to bursting with visits to/from friends/relatives/acquaintances and take a day off from socializing so you can rest. Even if you lead a fast-paced life, you still need to find the time to take a deep breath and relax.<br />As you don't have a lot of energy, instead of trying to fit into your friends/company, leave some time for yourself to calm down. Even if you lead a very busy life, leave some time for yourself to take a deep breath and rest.",
		        "warning"=> "Haste makes waste. The truth is, you need to accept your situation and save your energy for the next step.<br />Haste makes waste. Accept the current situation. Save your energy for the next big step."
		    ),
		    array(
		        "id"=> 2,
		        "name"=> "Firey",
		        "img"=> "212,3",
		        "group"=> "Red",
		        "summary"=> "Strong beliefs. Overcoming obstacles.",
		        "message"=> "Full of life and energy. You will be able to get rid of any obstacle and overcome any crisis/difficulty. Even if you are on the verge to give up, this energy will support you all the way, and may help you reach your target.",
		        "warning"=> "Be careful not to be over-confident, as it may cause the people around you to dislike you or be angry with you."
		    ),
		    array(
		        "id"=> 3,
		        "name"=> "Earthy",
		        "img"=> "281,3",
		        "group"=> "Purple",
		        "summary"=> "Source of life. Symbol of effort and acceptability.",
		        "message"=> "Now is the time to focus on the foundation. What is important are the basics, and to not forget to make an effort. There is no immediate effect, but the results will eventually bring about a big chance to become productive.",
		        "warning"=> "Occasionally, a big heart can accept and stop everything. Nothing turns egocentric, and there is no expected growth."
		    ),
		    array(
		        "id"=> 4,
		        "name"=> "Windy",
		        "img"=> "350,3",
		        "group"=> "Red",
		        "summary"=> "Hints of progress. Enrichment. Anticipation.",
		        "message"=> "A time of change and activity. The possibility of getting meaningful information is big. Observe the situation around you with caution more than you usually would. A decision is important at this time and place.<br />This is the time for you to change and move forward. You may receive significant information. Pay attention to your surroundings. Once you have set your target/goal, work towards it at once.",
		        "warning"=> "If you have the urge to call someone names or to lash out at someone verbally, hold it back. If you don’t, both parties will go through a painful experience.<br />Don't be a parrot( and repeat what others say). Be creative. Don't be capricious. Be mindful of what you say."
		    ),
		    array(
		        "id"=> 5,
		        "name"=> "Watery",
		        "img"=> "419,3",
		        "group"=> "Red",
		        "summary"=> "Cooperation. The ability to open people’s minds. Unlock the energy in others.",
		        "message"=> "Everyone trusts you because you are such an understanding person. The ability to govern things smoothly with friendliness and capability is very helpful for work.",
		        "warning"=> "Demonstrate great leadership–it will transform your environment into one of a gentle aura. Bring warmth and happiness to people around you; this way, you can lead to your full potential."
		    ),
		    array(
		        "id"=> 6,
		        "name"=> "Time",
		        "img"=> "488,3",
		        "group"=> "Green",
		        "summary"=> "Every experience improves you. Independence.",
		        "message"=> "Our existence consists of continuously improving ourselves through our experiences–always progressing. It’s important to enjoy the moment to the best of your abilities.",
		        "warning"=> "An event always has a message attached. You’ll get better at timing if you try to stay aware of it."
		    ),
		    array(
		        "id"=> 7,
		        "name"=> "Return",
		        "img"=> "557,3",
		        "group"=> "Blue",
		        "summary"=> "The revival of a loser. Never give up!",
		        "message"=> "You will settle your regrets and the problem that you ran away from. The person who has been labeled as shy will slowly recover. Your natural fortune improves with a good decision.",
		        "warning"=> "Though you cannot turn back time, you can still change the present and the future with your own power."
		    ),
		    array(
		        "id"=> 8,
		        "name"=> "Shadow",
		        "img"=> "626,3",
		        "group"=> "Purple",
		        "summary"=> "The unknown. The reason and solution of the problem.",
		        "message"=> "In fact, the problem haunting you like a shadow is going to give you a message. Since it faces away from the front of the problem, the direction which should be followed probably will come into view.",
		        "warning"=> "When you always avoid poor and unpleasant things, you’ll miss the turning point in the other side of the shadow."
		    ),
		    array(
		        "id"=> 9,
		        "name"=> "Wood",
		        "img"=> "695,3",
		        "group"=> "Purple",
		        "summary"=> "Symbolizing individual growth and development.",
		        "message"=> "Steady growth and/or development. Obtain trust in interpersonal relationships and connect with deep bonds. Talent and bility shine in future months and there is a lot of admiration to receive.",
		        "warning"=> "This is surely a favorable time to lose your original intentions, don’t. If you get too caught up in the moment, the things which you built with much effort will become spoiled."
		    ),
		    array(
		        "id"=> 10,
		        "name"=> "Flower",
		        "img"=> "5,149",
		        "group"=> "Purple",
		        "summary"=> "Results. Rewards. The chance of accomplishing a goal is high.",
		        "message"=> "There's a chance that your current efforts will finally bloom and let you reach your goal. If you have self-confidence and positive feelings, all will open out towards the right direction.",
		        "warning"=> "Even if a small obstacle shows up, forget about it and don’t get angry. Progress can be made with a smile."
		    ),
		    array(
		        "id"=> 11,
		        "name"=> "Mist",
		        "img"=> "74,149",
		        "group"=> "Red",
		        "summary"=> "Be clear of the situation, and decide which direction you will take.",
		        "message"=> "You are given the chance to reconsider what you want to do. You will not be able to fully analyze the problems as a result of your indecisiveness.",
		        "warning"=> "Be calm. If you think simply and with honest feelings, the mist/dust surrounding you will eventually turn into good weather."
		    ),
		    array(
		        "id"=> 12,
		        "name"=> "Snow",
		        "img"=> "143,149",
		        "group"=> "Red",
		        "summary"=> "A new beginning/start. Peace. Purity.",
		        "message"=> "Change your attitude and create a new beginning. This is a very good time to start taking lessons/learning new things. You will also get to know good mentors. You may become lifelong friends with the people you meet in this time period.",
		        "warning"=> "Stop fussing about the past. Try changing your point-of-view and take an active part in the “new” world."
		    ),
		    array(
		        "id"=> 13,
		        "name"=> "Sand",
		        "img"=> "212,149",
		        "group"=> "Purple",
		        "summary"=> "The challenge to change without fear.",
		        "message"=> "Time and a person’s feelings change constantly, yet they are always in existence so there is no single point of view. Reconciliation with the friend or the lover is sure to go well too, if it is taken one step at a time.",
		        "warning"=> "Do you not notice the person who thinks you are important? They are actually surprisingly closer then you realize."
		    ),
		    array(
		        "id"=> 14,
		        "name"=> "Fight",
		        "img"=> "281,149",
		        "group"=> "Blue",
		        "summary"=> "An omen to the big turning point.",
		        "message"=> "You will be thanked for taking the lead without hesitating, and for going through a lot of trouble for people. Physical strength and willpower are enhanced, and a current misfortune can be fixed.",
		        "warning"=> "Don't build up on momentum, or you will make a stupid error in judgment. An elaborate preliminary investigation is necessary. Listening to the advice of an elder is plus."
		    ),
		    array(
		        "id"=> 15,
		        "name"=> "Dream",
		        "img"=> "350,149",
		        "group"=> "Green",
		        "summary"=> "A chance to get to know oneself.",
		        "message"=> "You have a keen and strong sixth sense. You'll get important information from your dreams or intuition. It is important to have dreams(as in your goals or targets). Leave some space for yourself/in your heart.",
		        "warning"=> "Try calling or writing to friends that you haven't contacted for a long time. You may just understand yourself better in the process."
		    ),
		    array(
		        "id"=> 16,
		        "name"=> "Silent",
		        "img"=> "419,149",
		        "group"=> "Green",
		        "summary"=> "Forethoughtfulness. A time for recharging.",
		        "message"=> "Even if your honesty seems to be quiet, everyone recognizes it. If you serve your role properly in life, good news may come unexpectedly.",
		        "warning"=> "Even if every day seems to be repetitive, do not be driven to desperation. An understanding person is always nearby"
		    ),
		    array(
		        "id"=> 17,
		        "name"=> "Through",
		        "img"=> "488,149",
		        "group"=> "Blue",
		        "summary"=> "The improvement of an unexpected situation.",
		        "message"=> "The key to success is a change in perspective. When you change your way of life and thinking completely, it is very likely that your situation will improve for the better, and good luck will come your way. It is important to say &quot;Yes&quot; and &quot;No&quot; clearly.",
		        "warning"=> "Even if a strong rival appears, face each other without tricks, fairly. They might turn out to be an unexpected cooperator."
		    ),
		    array(
		        "id"=> 18,
		        "name"=> "Erase",
		        "img"=> "557,149",
		        "group"=> "Blue",
		        "summary"=> "Stagnation of luck. A warning to wait.",
		        "message"=> "Are there any expenses that were planned out or did you just spend recklessly on desires? Even if a plan fails, continue making steady efforts and wait for the next chance.",
		        "warning"=> "The successful person approaches you in time of need. Humans are resilient and equipped with profoundness."
		    ),
		    array(
		        "id"=> 19,
		        "name"=> "Big",
		        "img"=> "626,149",
		        "group"=> "Green",
		        "summary"=> "Big possibility and ability. An increase of the thirst for knowledge.",
		        "message"=> "At this time, your desire to learn will be intense. There’s also a good chance for you to LEVEL UP– and improve every plan and possibility in the process. An unexpected accomplishment might take place involving an impossible (in your opinion) love/relationship or a dream/goal of yours.",
		        "warning"=> "Join group activities and/or parties. You might get Significant hints and information about the future."
		    ),
		    array(
		        "id"=> 20,
		        "name"=> "Little",
		        "img"=> "695,149",
		        "group"=> "Green",
		        "summary"=> "A small but meaningful transformation period.",
		        "message"=> "For every obstacle that makes you anxious and uneasy you will eventually find a way to calm yourself down and overcome it. You will be successful for a long time if you do your work little by little and keep that pace up. Accumulation is important.",
		        "warning"=> "If you doubt your own feelings or the feelings of the other party, it will weaken your own energy and cause you to lose something important."
		    ),
		    array(
		        "id"=> 21,
		        "name"=> "Twin",
		        "img"=> "5,295",
		        "group"=> "Green",
		        "summary"=> "The best partner’s appearance.",
		        "message"=> "Operating as a team rather than by yourself will bring you more luck. Every member should contribute what they are good at in a give-and-take fashion. Abundant personal connections will become your fortune.",
		        "warning"=> "&quot;Thanks&quot; is a beautiful word which should be cherished. There is a chance that you will come across someone who can talk sincerely."
		    ),
		    array(
		        "id"=> 22,
		        "name"=> "Mirror",
		        "img"=> "74,295",
		        "group"=> "Purple",
		        "summary"=> "A time in which you stare deeply at yourself.",
		        "message"=> "Through the behavior of others, your merit and weak point can be found. It is often that the flaw of another person, especially when upset, will cause you to reflect upon yourself.",
		        "warning"=> "Once again, become modest and reflect on your actions. Renew yourself at once if you remember something you regret."
		    ),
		    array(
		        "id"=> 23,
		        "name"=> "Storm",
		        "img"=> "143,295",
		        "group"=> "Red",
		        "summary"=> "Intense emotions. Frustration being reduced. Too much desires to fulfil.",
		        "message"=> "Suppressed emotions and fears will come bursting to the surface. You may encounter severe problems. To improve your situation, you need to stop being pessimistic and be more assertive of your opinions.",
		        "warning"=> "If you stay quiet, your charm will be reduced by half. Be brave, express yourself."
		    ),
		    array(
		        "id"=> 24,
		        "name"=> "Cloud",
		        "img"=> "212,295",
		        "group"=> "Red",
		        "summary"=> "Choose your decisions carefully. Judge firmly and impartially",
		        "message"=> "Your ability to make decisions wisely is questioned. Relax and open your heart before judging a situation. If you make the best decision, your heart will be at ease.<br />You need to have strong judgement. Relax and open your inner self before you judge. If you make the best decision, you will be able to set your mind at rest.",
		        "warning"=> "Your heart determines whether your luck will rise or fall. Happy and optimistic people attract other people, and good luck is sure to follow.<br />Your heart determines your luck. People who are happy and optimistic will attract the attention and presence of other people, and thus, good luck will follow."
		    ),
		    array(
		        "id"=> 25,
		        "name"=> "Rain",
		        "img"=> "281,295",
		        "group"=> "Red",
		        "summary"=> "Finally, things turn for the better.",
		        "message"=> "Things that had happened appear to be misfortune, but it is actually blessing in disguise - these 'misfortunes' will train you and enhance your development. Don’t be pessimistic.",
		        "warning"=> "Painful experiences are only temporary. Relax and enjoy life."
		    ),
		    array(
		        "id"=> 26,
		        "name"=> "Bubbles",
		        "img"=> "350,295",
		        "group"=> "Purple",
		        "summary"=> "Purification of emotions. When you break away from a vicious cycle.",
		        "message"=> "Worries and problems can be beautifully cleaned. A solution will gradually rise if you can work with an obedient feeling without showing off.",
		        "warning"=> "A person who will support you appears, but it is bad to rely on only one person."
		    ),
		    array(
		        "id"=> 27,
		        "name"=> "Sweet",
		        "img"=> "419,295",
		        "group"=> "Green",
		        "summary"=> "New Love. Popularity. Appearance of dependent mind.",
		        "message"=> "A special person that softens your heart just by being near you. Your work evaluation seems to rise quickly if you use your cheerfulness to the best of your ability. Your love life can be kept at a stable state for a while.",
		        "warning"=> "It is good to value communication with a friend, but watch out because you tend to sometimes depend on it a bit too much."
		    ),
		    array(
		        "id"=> 28,
		        "name"=> "Power",
		        "img"=> "488,295",
		        "group"=> "Green",
		        "summary"=> "A wish fulfilled. Development.",
		        "message"=> "Your curiosity and diligence will become combined, and not only will your wish come true, but you will also obtain a higher position. Hereafter, aspects concerning work and love are enhanced more and more.",
		        "warning"=> "A good state will continue as long as you don’t treat anyone poorly or become arrogant. Kindness and modesty are necessary during this time."
		    ),
		    array(
		        "id"=> 29,
		        "name"=> "Arrow",
		        "img"=> "557,295",
		        "group"=> "Purple",
		        "summary"=> "A surge of energy. Aggressiveness.",
		        "message"=> "Energy that can charge towards the goal. Achieving your goals and desires in the shortest amount of time is done by moving and acting more positively than usual.",
		        "warning"=> "It is important to set a goal. Unnecessary trouble can be created when you are too greedy, so take care."
		    ),
		    array(
		        "id"=> 30,
		        "name"=> "Shot",
		        "img"=> "626,295",
		        "group"=> "Blue",
		        "summary"=> "Focus on the goal.",
		        "message"=> "If you become greedy, you will fail. Ascertain why the goal is necessary. It is easy to become aggressive, but scolding yourself when you do will bring progress.",
		        "warning"=> "You might hurt the other party, even though you didn't mean any harm. If you notice this occurring, humbly apologize."
		    ),
		    array(
		        "id"=> 31,
		        "name"=> "Song",
		        "img"=> "695,295",
		        "group"=> "Green",
		        "summary"=> "Joy, harmony. The energy of healing.",
		        "message"=> "It becomes possible to express what you want to convey freely when you learn to respect the opinion of the other party. Plan something new with your friend–it would be good for you to go on a trip.",
		        "warning"=> "Even if you intend to find happiness on your own, it will not be easy. Everyone should share their happiness with each other."
		    ),
		    array(
		        "id"=> 32,
		        "name"=> "Voice",
		        "img"=> "5,441",
		        "group"=> "Green",
		        "summary"=> "I want to make friends; relationships properly resulting in feelings.",
		        "message"=> "You seem fatigued due to neighborliness. Yet, do your true feelings take on the opposite meaning during communication? First, call out to the person with “Good morning” or “Good afternoon”.",
		        "warning"=> "Your luck will abate if you are not able to greet your friend correctly. Bright greetings are the key to good luck."
		    ),
		    array(
		        "id"=> 33,
		        "name"=> "Sleep",
		        "img"=> "74,441",
		        "group"=> "Blue",
		        "summary"=> "Rest. A calm state of mind.",
		        "message"=> "You are ordinary, but stable without a lot of trouble or fights. Spend every day in an honest, sincere attitude. If you get stuck in a couple of ruts, take a carefree hike--it will bring good luck.",
		        "warning"=> "Glib(insecure and insincere) talk will lead to a pitfall. Be careful not to cross a dangerous bridge. (Metaphorically speaking.)"
		    ),
		    array(
		        "id"=> 34,
		        "name"=> "Glow",
		        "img"=> "143,441",
		        "group"=> "Green",
		        "summary"=> "An omen of getting lucky.",
		        "message"=> "Lucky fortune approaches. All hesitation is lost, and you will naturally know what you have to do. The improtant thing is to prepare really well for it.",
		        "warning"=> "Make a solid foundation for learning. Good luck will follow if you participate in voluntary activities. You have to have a foundation before making any plans."
		    ),
		    array(
		        "id"=> 35,
		        "name"=> "Freeze",
		        "img"=> "212,441",
		        "group"=> "Blue",
		        "summary"=> "Establishment of basic power. It's ok to go at your own pace.",
		        "message"=> "There are also seasons in life. A time of growth would be like spring, and winter would be a time of gathering strength. Right now seems to be your charging period of winter. Do not spread yourself out too thin, just settle down slowly and work on things.",
		        "warning"=> "You must backpedal a bit in order to begin something new. In order to develop basic power, the first priority is to continuously investigate and train."
		    ),
		    array(
		        "id"=> 36,
		        "name"=> "Thunder",
		        "img"=> "281,441",
		        "group"=> "Red",
		        "summary"=> "Good luck will come your way if you don’t lose yourself.",
		        "message"=> "You are being tested to see if you can control your explosive and intense emotions. You are able to express your personality as you keep generating great ideas.",
		        "warning"=> "Actions based upon rationality and courage will attract supporters, but selfish desires and behaviors will attract enemies."
		    ),
		    array(
		        "id"=> 37,
		        "name"=> "Change",
		        "img"=> "350,441",
		        "group"=> "Blue",
		        "summary"=> "Change of heart. Waste.",
		        "message"=> "Lack of concentration. You are envious of others and view things and goals in this negative way of thinking. This disturbing mood makes you do useless shopping.",
		        "warning"=> "A change for oneself will result in refreshment. It would be good if you tried playing sports or redecorating your room."
		    ),
		    array(
		        "id"=> 38,
		        "name"=> "Dash",
		        "img"=> "419,441",
		        "group"=> "Blue",
		        "summary"=> "The instantaneous power of victory in your hand. An internal fight with yourself.",
		        "message"=> "The goal is just ahead. Spiritual strength is tried as a result of the internal fight with yourself. Keep running as fast as you can, even if it is a little painful. Afterwards, happiness awaits.",
		        "warning"=> "You'll go back to the starting point if you give up now. Precious natural luck fades away when suffering heavy losses."
		    ),
		    array(
		        "id"=> 39,
		        "name"=> "Fly",
		        "img"=> "488,441",
		        "group"=> "Blue",
		        "summary"=> "A challenge to leap, a chance.",
		        "message"=> "Development of human relations. Your fortune will be strengthened as well, and all progresses smoothly. Taking the challenge of qualification examinations for auditions is recommended too. Keep a carefree action in mind, brightly, without withering.",
		        "warning"=> "Confidence and the economic fortune can be remarkably fostered by accomplishing work and favors when a friend asks for them."
		    ),
		    array(
		        "id"=> 40,
		        "name"=> "Jump",
		        "img"=> "557,441",
		        "group"=> "Blue",
		        "summary"=> "Loss of ability. The best condition.",
		        "message"=> "Original power can be demonstrated to your heart's content. Human charm is like a power-up. You will become busy both officially and privately, but will still be able to make enough time for adequate sleep.",
		        "warning"=> "Tasks at work may be demanded that are above your current ability, leading to confusion, but you can ride it out using wisdom and experience."
		    ),
		    array(
		        "id"=> 41,
		        "name"=> "Sword",
		        "img"=> "626,441",
		        "group"=> "Purple",
		        "summary"=> "Quest for truth. Compensation. A destructive power, sometimes.",
		        "message"=> "Symbol of truth and power. When you can make progress with something just as desired. If what you say is true, the highest reward will be obtained. If what I have sown is truth, the highest harvest will be obtained.",
		        "warning"=> "However, hurting someone and every other wicked scheme can never utilize power."
		    ),
		    array(
		        "id"=> 42,
		        "name"=> "Shield",
		        "img"=> "695,441",
		        "group"=> "Purple",
		        "summary"=> "Protection. A defensive measure to maintain harmony.",
		        "message"=> "Even if a crisis is approaching, you have many people firmly defending you. You can obtain greater power in exchange for love and harmony in particular.",
		        "warning"=> "Don’t forget the feeling of gratitude. When friends are in trouble do not hesitate to reach out to them."
		    ),
		    array(
		        "id"=> 43,
		        "name"=> "Wave",
		        "img"=> "5,587",
		        "group"=> "Red",
		        "summary"=> "A flexible attitude/gentleness will bring good fortune.",
		        "message"=> "Although you have your ups and downs, but eventually, you will still be able to move forward. In the past, you may have some friction with other people. However, as long as you accept the other party, both of you can be good friends.  If you are looking for an advisor to help fix a soured interpersonal relationship, turn to the magnanimous ocean.",
		        "warning"=> "Someone may make an unexpected love confession. In this situation, even if you don’t like this person, don’t reject them."
		    ),
		    array(
		        "id"=> 44,
		        "name"=> "Illusion",
		        "img"=> "74,587",
		        "group"=> "Green",
		        "summary"=> "The desire to escape from reality.",
		        "message"=> "You have a tendency to only notice changes on the immediate surface of things and to ignore/escape from reality. Even if the environment of your life and work change, don’t forget that everyone has the power to adapt.",
		        "warning"=> "Instead of pursuing perfection, try to relax. Things might turn out a lot more easier than you think if you do that."
		    ),
		    array(
		        "id"=> 45,
		        "name"=> "Maze",
		        "img"=> "143,587",
		        "group"=> "Green",
		        "summary"=> "Losing confidence. Confusion.",
		        "message"=> "If you can't make it to a scheduled event, and there's no time to arrange it at a different time, take a short little break. Think about the following=> Are you stubborn? Do you consider the other party's feelings? Are you too timid?",
		        "warning"=> "Draw an image of the achievement that you desire. It is also important to listen to other people's advice."
		    ),
		    array(
		        "id"=> 46,
		        "name"=> "Loop",
		        "img"=> "212,587",
		        "group"=> "Purple",
		        "summary"=> "Connection. Chance to step-up.",
		        "message"=> "If there are sympathizing, gentle feelings, a lot of people and things begin to connect. Linked by a deep friendship, greater aid will likely be acquirable.",
		        "warning"=> "You will go round and round in circles if you can't develop any self-satisfaction. Bright, open feelings are important."
		    ),
		    array(
		        "id"=> 47,
		        "name"=> "Create",
		        "img"=> "281,587",
		        "group"=> "Red",
		        "summary"=> "Full of affection. The blooming of passion.",
		        "message"=> "When you express your thoughts and emotions, you feel at ease. You will experience increased creativity in the fields of art and music. Inspiration and wonderful ideas will come as a result of focusing in these two fields.<br />Express your opinion and affection. Stay close to art and music, as these can cause you to be more creative; you may even get some great ideas as a result.",
		        "warning"=> "Don’t allow yourself to be restricted by traditional concepts or rules. Follow your intuition and act accordingly—the possibility of unexpected discoveries or encounters will be high.<br />Don't get tied down by traditional rules and ideas, and instead act according to your instincts; it may just bring you unexpected discoveries or meetings(with someone)."
		    ),
		    array(
		        "id"=> 48,
		        "name"=> "Float",
		        "img"=> "350,587",
		        "group"=> "Blue",
		        "summary"=> "Liberation from restraint. Freedom.",
		        "message"=> "If you make a steady effort, you will be freed from all pressures. When you don't make a steady effort, it is a sign of pending troubles. Be careful to pay attention to personal relationships, including romantic ones.",
		        "warning"=> "When it comes to decisions concerning financial problems and work, you should follow an elder's advice* instead of making an arbitrary decision."
		    ),
		    array(
		        "id"=> 49,
		        "name"=> "Lock",
		        "img"=> "419,587",
		        "group"=> "Purple",
		        "summary"=> "Intelligence. Inner awareness of the truth.",
		        "message"=> "The door of truth can be opened and shut. I notice my own heart and can know the secret of another. However, it would be better to leave if alone for now.",
		        "warning"=> "A pleasant chat will lose trust, if it goes on too long. Be careful, because it is difficult to regain trust that is lost."
		    ),
		    array(
		        "id"=> 50,
		        "name"=> "Move",
		        "img"=> "488,587",
		        "group"=> "Blue",
		        "summary"=> "Be careful about fidgety actions and remarks.",
		        "message"=> "Though it's not bad, your natural fortune is a bit off, timing-wise. The cause seems to be an impromptu remark and / or a whimsical action. Don't become a person who does nothing but overexaggerate.",
		        "warning"=> "Keep your promises. Communicate to the best of your ability. It's easy to become influenced by feelings, so think before you speak."
		    ),
		    array(
		        "id"=> 51,
		        "name"=> "Libra",
		        "img"=> "557,587",
		        "group"=> "Purple",
		        "summary"=> "Life, action, and adjusting the balance of ideas.",
		        "message"=> "Using calm, fair judgment, it is possible to start choosing humble decisions. In addition, the matter that caused a loss in balance will return to the best state.",
		        "warning"=> "However, the best state cannot be obtained if you compare lies to the past. If you reflect, you can gradually restore your balance."
		    )
		);
		$this->groups = array(
		    "Red"=> 		[0, 1, 2, 4, 5,11,12,23,24,25,36,43,47],
		    "Green"=> 	[6,15,16,19,20,21,27,28,31,32,34,44,45],
		    "Purple"=> [2, 8, 9,10,13,22,26,29,41,42,46,49,51],
		    "Blue"=> 	[7,14,17,18,30,33,35,37,38,39,40,48,50]
		);
		
		$this->spreads = array(
			array(
				"id" => 0,
				"name" => "General",
				"img" => "",
				"description" => "When you want to do a reading for a more general question.",
				"method" => "Cut and shuffle the Clow Cards, making sure that they are lying pattern-side up (the back). Count five cards from the top of the deck, and put the fifth card into position 1. (Place the remaining 4 cards into a pile away from the reading area, so you don’t get them confused with other cards and/or accidentally put them back in the deck.)||Count another 5 cards from the remaining top of the deck and place the fifth card into position 2. Repeat this step for positions 3-9.||Take the card from the very bottom of the deck and place it into position 10.",
				"cards" => "Subject of the matter||Cause of the matter||Past problems regarding the matter||Surrounding circumstances of the matter||Solution to the matter||Keyword of solving the matter||Obstacle when solving the matter||Future of the matter||Result of the matter||How others may see the matter",
				"cards_num" => "10"
			),
			array(
				"id" => 1,
				"name" => "Romance",
				"img" => "",
				"description" => "When love is on your mind",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Take the first card from the top of the deck and put it into position 1.||Count 10 cards from the top of the remaining deck of cards and place the 10th card into position 2. Count another 10 cards from the top of the remaining deck and place the 10th card into position 3. Continue doing this for positions 4-6.||The last remaining card of the deck is placed in position 7.",
				"cards" => "The liked/loved person's personality and true nature||The liked/loved person and the questioner's past situation||The liked/loved person and the questioner's present situation||The liked/loved person and the questioner's future||The problem the questioner must overcome in order to get along well with the liked/loved person||The result of the liked/loved person and the questioner's romance||Advice for a good relationship with the liked/loved person",
				"cards_num" => "7"
			),
			array(
				"id" => 2,
				"name" => "Daily",
				"img" => "",
				"description" => "When you want to do a quick reading at the beginning of the day.",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Spread the cards out from left to right, making sure it is a straight line with a 1 card length (See Figure 1 above).||Let your eyes drift down the line of cards until you feel a flash of intuition pulling you toward a certain card (See Figure 2 above). The card you choose will show your fortune for the day.",
				"cards" => "Today's fortune",
				"cards_num" => "1"
			),
			array(
				"id" => 3,
				"name" => "Moon",
				"img" => "",
				"description" => "When you want to foretell various matters and problems other than love.",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Count 7 cards from the top of the deck and place that 7th card into position 1.||Count another 7 cards from the remainder of the deck and place that 7th card into position 2. Continue doing this for positions 3-6 as well.||Take the card from the bottom of the remaining deck and place it into position 7.",
				"cards" => "The problem||How you now influence the concerned person(s)||What kind of influence you have on surrounding people||The key and key person to solving the problem||The result if the problem is settled well||The result if the problem is not settled well||The solution to the problem",
				"cards_num" => "7"
			),
			array(
				"id" => 4,
				"name" => "Speed",
				"img" => "",
				"description" => "When you want to do a quick reading to discover the cause and the solution of a  problem.",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Count 13 cards from the top of the deck and place the 13th card into position 1.||Count 13 more cards from the remaining deck and place the 13th card into position 2.||Count another 13 cards from the deck, and place that 13th card into position 3. Count another 13 cards from the the deck, and place that 13th card into position 4.",
				"cards" => "The Cause||The Past Situation||The Current Situation||The Solution",
				"cards_num" => "4"
			),
			array(
				"id" => 5,
				"name" => "Sun",
				"img" => "",
				"description" => "For when you want to know more about your worries and etc. in detail.",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Count six cards from the top of the deck and place that sixth card into position 1.||Count another six cards from the top of the deck, and place that sixth card into position 2. Continue repeating this method for positions 3-8.||Take the very last card in the deck and place it into position 9.",
				"cards" => "What your personality seems to be perceived as by surrounding people||Your actual personality||Current problem||The current problem's solution||An obstacle that will hinder you while solving the current problem||The key and key person who will/can help when solving the current problem||Warning for when solving the current problem||Your situation after the current problem is solved||The matter that you should be careful about in the future",
				"cards_num" => "9"
			),
			array(
				"id" => 6,
				"name" => "Guest",
				"img" => "",
				"description" => "When you want to know what your guest thinks of themself.",
				"method" => "Shuffle and cut the Clow Cards, making sure that they are lying pattern-side up (the back). Spread the cards out from left to right, making sure it is a straight line with a 1 card length.||Have your guest pull any four cards from the line.",
				"cards" => "Compatibility with your guest||What your guest thinks of themself in reality||Method to get along well with your guest||A warning for you and your guest",
				"cards_num" => "4"
			),
			array(
				"id" => 7,
				"name" => "Compatibility",
				"img" => "",
				"description" => "When you want to see what your compatibility is with a specific person.",
				"method" => "Shuffle and cut the Clow Cards while imagining the name of the person you want to do the reading for. (If you are doing a reading for you and someone else, think of the other person. If you're doing a reading for another couple, think of the two of them.)||Gather the cards up so they are lying pattern-side up. Spread the cards out surface-side up in a 1 card-length line, going from left to right.||Now, the card-surface designs are classified into 4 different groups. When 2 cards of the same group are side-by-side, remove them. Repeat this procedure until there are no more cards to take away.||The fewer the cards that are left remaining, the better the compatibility!||The compatibility is based on the number of cards that are left remaining:<br />0-10 cards = considerably good compatibility<br />11-20 cards = slightly good compatibility<br />21-30 cards = normal compatibility<br />31-40 cards = compatibility is slightly bad<br />41-50 cards = compatibility is considerably bad<br /><br />Group Classifications:<br /> Red Group: <br />CLOUD CREATE DARK FIREY LIGHT MIST RAIN SNOW   <br /> STORM THUNDER WATERY WAVE WINDY <br />  <br /> Green Group:  <br /> BIG DREAM GLOW ILLUSION LITTLE MAZE POWER   <br /> SILENT SONG SWEET TIME TWIN VOICE  <br />   <br /> Blue Group:  <br /> CHANGE DASH ERASE FIGHT FLOAT FLY FREEZE   <br /> JUMP MOVE RETURN SHOT SLEEP THROUGH   <br />  <br /> Purple Group:  <br /> ARROW BUBBLES EARTHY FLOWER LIBRA LOCK LOOP   <br /> MIRROR SAND SHADOW SHIELD SWORD WOOD||In the case of remaining cards, the card mostly to the left in the line of cards will show the cause of deteriorating compatibility and the card mostly to the right in the line of cards will show a method for a good relationship.||If no cards are remaining,  that means best compatibility!",
				"cards" => "What deteriorates compatibility||Method for a good relationship",
				"cards_num" => "2"
			)
		);
	}

}
/*$ii = 0;
for( $i = 52; $i > 0; $i-- ) {
	echo( "div.Daily#spread #card" . $i . "{<br />" );
	echo( "left: " . $ii++ * 14 . "px;<br />" );
	echo( "}" );
}*/

//$SakuraDeck = new SakuraDeck;

//echo $SakuraDeck->cards[0]['name'];
//echo count($SakuraDeck->groups); 

?>
