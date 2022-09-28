-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 02:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_image` varchar(100) DEFAULT NULL,
  `v_name` varchar(150) DEFAULT NULL,
  `v_url` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category_id`, `slug`, `description`, `blog_image`, `v_name`, `v_url`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Paleo Diet Beginner Guide: 7 Things To Know Before Eating Like a Caveman!', 1, 'Paleo-Diet-Beginner-Guide-7-Things-To-Know-Before-Eating-Like-a-Caveman', '<p><strong>So you wanna learn about the Paleo Diet, aka &ldquo;the Caveman Diet,&rdquo; eh?</strong></p>\r\n\r\n<p>Paleo is one of the most popular diets on the planet (up there with&nbsp;<a href=\"https://www.nerdfitness.com/blog/the-beginners-guide-to-the-keto-diet-or-ketogenic-diet/\" target=\"_blank\">the Keto Diet</a>), and I bet you have questions.</p>\r\n\r\n<p>Well I got answers, sucka! And lots of LEGO photos.</p>\r\n\r\n<p>In addition to helping people go paleo with our&nbsp;<a href=\"https://www.nerdfitness.com/coaching-overview-page/\" target=\"_blank\">Online Coaching Program</a>, we also create epic guides like this one that covers all the basics!</p>\r\n\r\n<p>Is Paleo right for you? Maybe! Our coaches can help you decide:</p>\r\n\r\n<p><strong>Below in this guide, I&rsquo;m going to give you the good, the bad, and the&nbsp;<em>ugly</em>&nbsp;when it comes to the Paleolithic Diet (click to go right to that section):</strong></p>\r\n\r\n<p><strong>INTRODUCTION TO PALEO:</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_is_paleo_diet\">What is the Paleo Diet and how does it work?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#weight_loss_on_paleo_diet\">Will I lose weight on the Paleo Diet?</a></li>\r\n</ul>\r\n\r\n<p><strong>WHAT CAN I EAT ON THE PALEO DIET?</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#foods_on_paleo_diet\">What can I eat on the Paleo Diet? (Paleo Diet Rules)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#restrictions_on_paleo_diet\">What CAN&rsquo;T I eat on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#grains_on_paleo_diet\">Can I eat grains on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#dairy_on_paleo_diet\">Can I eat dairy on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#cheese_on_paleo_diet\">Can I eat cheese on the Paleo Diet?</a></li>\r\n</ul>\r\n\r\n<p><strong>SHOPPING LIST AND EATING PLAN</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#shopping_on_paleo_diet\">Paleo Diet Shopping Guide: List of foods on the Paleo Diet</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#typical_day_on_paleo_diet\">What does a typical day look like on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#resources_for_paleo_diet\">Paleo Recipes &amp; Paleo Resources.</a></li>\r\n</ul>\r\n\r\n<p><strong>IS PALEO DANGEROUS?</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#dangers_of_paleo_diet\">Is the Paleo Diet dangerous?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#should_i_do_the_paleo_diet\">Who shouldn&rsquo;t do the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#safely_trying_the_paleo_diet\">How to do the Paleo Diet safely.</a></li>\r\n</ul>\r\n\r\n<p><strong>Now, this guide is SUPER long, so we took the liberty of converting it into a nicely designed guide for easy consumption (not literal consumption, unless you print it on bacon).</strong></p>\r\n', 'ca1cd0bb8bbac8df41ad1dafa13f562b.png', '', '', '2020-11-01 21:09:20', 1, '2020-11-02 01:39:20', NULL),
(2, 'Benefits and Advantages of Going Vegetarian', 1, 'Benefits-and-Advantages-of-Going-Vegetarian', '<p>Vegetarian, vegan, plant-based, all similar terms with some distinct differences. It can be confusing to know which approach is the best for you, especially if you&rsquo;re trying to make some healthy changes. This article examines the differences between these diets and looks at the available research on the benefits of making the switch to a diet that is focused primarily on plants (and may or may not eschew meat altogether).</p>\r\n\r\n<p>Types of Plant-based Diets<br />\r\nVegetarian diets usually include all fruits, vegetables, grains, legumes, nuts and seeds, and may include eggs and dairy products. All of these diets typically exclude all meats (flesh). Plant-based is an encompassing term for vegan and vegetarian diets that are defined by the type or frequency of animal product(s) consumed. There also are subsets within these diets, which are defined by the types of animal-based products that are consumed or avoided:</p>\r\n\r\n<p>Lacto-ovo-vegetarian: Consumes eggs and dairy products<br />\r\nLacto-vegetarian: Consumes dairy products<br />\r\nOvo-vegetarian: Consumes eggs<br />\r\nPescetarian: Consumes fish<br />\r\nSemi-vegetarian: Occasionally consumes meat (once or twice per week) or excludes all red meat<br />\r\nFlexitarian: Rarely consumes meat (once or twice per month)<br />\r\nVegan: Does not consume any animal products<br />\r\nGiven this range of plant-based classifications, it can be difficult to determine from the available research exactly which types provide the most health benefits. Cardiovascular disease (CVD), for example, takes years to develop, so a well-controlled, short-term study cannot adequately assess CVD risk. Therefore, we must rely on examining the correlations between dietary habits and health factors. Overall, a well-planned and executed vegetarian diet can provide adequate nutrition, promote overall health and lower the risk of major chronic diseases.</p>\r\n\r\n<p>Let&rsquo;s take a look at some of the specific health benefits of following a plant-based diet.</p>\r\n\r\n<p>Benefit #1: Increased Healthy Food Intake<br />\r\nEating a variety of vegetables and whole fruits is a key recommendation of healthy eating patterns. A varied consumption of fruits, vegetables, whole-grains, legumes and nuts at an appropriate calorie level usually leads to an adequate intake of dietary fiber and a low intake of saturated fat and hydrogenated vegetable oils. As a result, vegetarians commonly have lower body mass indexes (BMI), LDL-cholesterol, blood pressure and reduced rates of stroke, type 2 diabetes, certain cancers, and death from heart diseasethan do non-vegetarians.</p>\r\n\r\n<p>Further, vegetarian eating patterns are rich in health-promoting phytochemicals and vitamins C and E, which function as antioxidants to protect against oxidative stress. Additionally, these eating patterns provide magnesium and potassium rich foods which can improve insulin sensitivity and vascular function, respectively The dietary fiber along with phytochemicals can help improve and maintain gut the microbiome.</p>\r\n\r\n<p>To summarize, potential mechanisms for improved health from vegetarian eating plans include weight loss/maintenance, blood sugar control, improved lipid profile, reduced blood pressure, decreased inflammation and improved gut health.</p>\r\n\r\n<p>Benefit #2: Decreased Unhealthy Food Intake<br />\r\nSeveral dietary factors in animal foods have been associated with increased risk of CVD. Historically, saturated fats, prevalent in meats, have been linked to elevated cholesterol and other unfavorable disease risk profiles. Interestingly, saturated fats themselves may not be responsible for many of the adverse health effects that they have been associated with, but rather the processing of meats may be at fault. Consuming preservatives in processed meats, such as sodium, nitrates and nitrites, may raise blood pressure and impair insulin response.</p>\r\n\r\n<p>Most research shows a sliding scale of improved health outcomes from increased plant intake with decreased meat intake. Completely eliminating meat and dairy products may not be necessary for good health, however, as they can be part of a healthy eating pattern. Choosing whole foods over processed foods also is an important strategy for maximizing the health benefits from any diet plan.</p>\r\n\r\n<p>Going Vegetarian<br />\r\nAs mentioned, the term &ldquo;vegetarian&rdquo; can mean a lot of things to a lot of people, as vegetarians exhibit diverse dietary practices. Here are some suggestions for making the shift toward a plant-based diet:</p>\r\n\r\n<p>Gradually reduce animal food intake, as this method is easier to adopt and adhere to than more extreme recommendations, such as completely excluding all animal products.<br />\r\nStart with a few plant-based meals per week and build toward creating a sustainable habit.<br />\r\nIncorporate a theme into your meal planning. For example, you could start with &ldquo;Meatless Mondays&rdquo; and gradually expand the idea to include two to three days per week. Or try &ldquo;Vegan Before 6,&rdquo; which is an approach that allows meat and animal products only at dinner.<br />\r\nConsider sustainability in how it applies to the longevity of a diet plan. For example, following a semi-vegetarian eating plan is likely to be easier to maintain than a strict vegan plan over a long period of time.<br />\r\nUnderstand that healthy eating is a lifestyle, not a 30-day challenge.<br />\r\nThe Wrong Way to Follow a Vegetarian Diet<br />\r\nAs with any diet plan, there are healthy and less-healthy versions of vegetarianism, and being any type of vegetarian by name does not guarantee the health benefits discussed earlier. &nbsp;Soda, cookies, French fries, macaroni and cheese, and sugary cereals are all vegetarian foods. Certainly, a vegetarian diet can be high in calories, sugar, preservatives and unhealthy fats. Also, strict vegetarian diets can omit certain nutrients, primarily omega-3 fatty acids, calcium, vitamin D, iron, zinc and vitamin B12. Constructing a healthy vegetarian diet includes meal planning and preparation to avoid missing out on important nutrients.</p>\r\n\r\n<p>A plant-based diet may also need to include fortified foods (i.e., vitamins and minerals added to the product) and potentially supplementation. Vitamin B12, specifically, is only obtainable through animal foods or dietary supplements. Eggs and milk, however, contain B12; thus, a lacto-ovo-vegetarian will have fewer nutrient gaps to fill than a vegan.</p>\r\n\r\n<p>Summary<br />\r\nConsuming adequate amounts of vegetables and fruits is, in fact, the strongest correlate with reduced disease risks, particularly CVD (USDA, 2015). A healthy diet (including or excluding meat products) should include more vegetables and fewer processed foods. Regardless of which dietary approach you follow, make healthy eating a lifestyle that you can follow for years to come.</p>\r\n', 'ca1cd0bb8bbac8df41ad1dafa13f562b.png', '', '', '2020-11-01 21:17:59', 1, '2020-11-02 01:47:59', NULL),
(3, '30 Minute HIIT Workout You Can Do at Home', 2, '30-Minute-HIIT-Workout-You-Can-Do-at-Home', '<p>Between work, family, activities and schedule changes, having a quick and effective workout ready to knock out can be very useful. High-intensity interval training (HIIT) workouts are meant to challenge the entire body and push intensity limits. While the intensity is meant to be high, adjusting for the energy level you have and/or injuries you may be experiencing is perfectly appropriate and recommended. HIIT training can be either high- or low-impact or a combination of both.</p>\r\n\r\n<p>The following HIIT workout can be completed in 30 minutes and requires no extra equipment. When applicable, dumbbells may be used to add variety and challenge to certain exercises. The exercises are based on time instead of repetitions, as individual speeds will vary based on your fitness level.</p>\r\n\r\n<p>Warm-up: Perform five minutes of moderate-intensity movement, such as walking briskly, jogging or riding a stationary bike. A quick and easy way to determine if you are working at a moderate intensity is to use the talk test.&nbsp; If you can talk comfortably while exercising or can talk but not sing you are most likely at a moderate intensity.</p>\r\n\r\n<p>Perform each exercise for one minute followed by a two-minute recovery. The work portion should be challenging yet sustainable. For the recovery segment, perform low-intensity movements, such as walking at a slow or leisurely pace or slow jogging. The idea is to recover while continuing to move. &nbsp;</p>\r\n\r\n<p><strong>Butt Kickers (1 minute):&nbsp;</strong>High- or low-intensity, bring your heels up to your glutes; rest for 2 minutes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mountain Climbers (1 minute):&nbsp;</strong>From a plank position, walk or run your feet toward your chest; rest for 2 minutes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Alternating Lunge (1 minute):</strong>&nbsp;Walk into a forward lunge or jump to transition (or do a combination of speeds); rest for 2 minutes. For increased challenge, add dumbbell biceps curls.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Walk Out to Push-up (1 minute):</strong>&nbsp;From a standing position, place hands on the floor and walk out into a plank position. Perform a push on your toes or knees and then walk back up to a standing position; rest for 2 minutes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hip Bridge to Crunch (1 minute):</strong>&nbsp;From a seated position with feet flat on the floor, place hands behind you on the floor. Push up into a hip bridge, keeping your head in alignment with the spine. Drop the hips back down and through your hands for spinal flexion (crunch); rest for 2 minutes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Alternating Curtsey Lunges (1 minute):</strong>&nbsp;Bring one leg back into a lunge att a diagonal behind you. Keep the toes and knee of your front leg tracking in the same direction. Repeat on the other side and then rest for 2 minutes. For increased challenge, add dumbbell lateral raises.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cool-down:</strong>&nbsp;Perform five minutes of low-intensity movement and stretching.</p>\r\n\r\n<p>Remember, HIIT training means high-intensity effort for a short period of time. During your one minute of work, give it all you&rsquo;ve got to maximize the results and to earn your rest.</p>\r\n', '7d77cc5b2f119abeb37c477fd987c15a.png', '', '', '2020-11-01 21:21:23', 1, '2020-11-02 01:51:23', 1),
(7, '5 Simple Habits to Make You Healthier and Happier', 2, '5-Simple-Habits-to-Make-You-Healthier-and-Happier', '<p>Happiness has become a popular field of study for researchers over the last decade, and universities are creating whole courses around the topic. Dr. Laurie Santos, a professor in psychology and cognitive science, teaches a hugely popular course on happiness at Yale and is a leading researcher on the science of happiness. Through her research, she has developed&nbsp;<a href=\"https://www.acefitness.org/education-and-resources/professional/expert-articles/exercise-science/\">science-based</a>&nbsp;recommendations on how we can increase our happiness levels. Here are five simple ways we can create happier, healthier lives for ourselves.</p>\r\n\r\n<h2><strong>1. List three things you feel grateful for every day</strong></h2>\r\n\r\n<p>According to Santos, writing down three awesome things about your day can have a significant effect on retraining your brain to feel more gratitude and, as a result, feel happier. Pairing this practice with another habit, such as brushing your teeth, can enhance your awareness and make it easier to remember to do each day. Becoming more aware of the things for which you feel grateful&mdash;even small things such as your morning cup of coffee or a call from a friend&mdash;is a great way to help you focus on the positives in your life rather than the things you may perceive to be lacking.</p>\r\n\r\n<h2><strong>2. Get moving</strong></h2>\r\n\r\n<p>People who are physically active for even small amounts of time each week (150 minutes or less) have lower odds for&nbsp;<a href=\"https://ajp.psychiatryonline.org/doi/full/10.1176/appi.ajp.2018.17111194\">developing depression</a>&nbsp;And the options for adding activity to your day are endless. Take your dog for a walk, for example, or go to a playground and play on the equipment. Practice mobility drills while watching your favorite television show. Find stairs and take them. Go for an easy swim in a lake or work in the garden. The point is to get moving, whenever and wherever you can.</p>\r\n\r\n<h2><strong>3. Spend time in nature and unplug</strong></h2>\r\n\r\n<p>The writer Anne Lamott wrote, &ldquo;Almost everything will work again if you&nbsp;unplug&nbsp;it for a few minutes, including you.&rdquo;&nbsp;Taking time away from technology is important, particularly for those who feel overstimulated and fatigued by constant notifications and work-related stress. And if you can unplug outdoors, even better. David Strayer, a professor and cognitive psychologist, has been researching brain-based measures in cognitive restoration and believes that spending time in nature is important for elevating mood and reducing stress. For example, one&nbsp;<a href=\"https://bjsm.bmj.com/content/49/4/272.abstract?sid=56b97a4c-0e75-46d0-a6ba-%20%20%20%20%20%2041c7f41a089c\">study</a>&nbsp;of people walking through an urban green space showed that participants&rsquo; brains exhibited lower frustration, engagement and arousal while in the green area. So get outside without any tech. Again, the possibilities are endless. Walk through a garden. Go hiking. Scramble up some rocks. Run barefoot in the grass. Rent a canoe. Listen and take it all in, allowing nature and its calming effects to wash over you.</p>\r\n\r\n<h2><strong>4. Take care of others</strong></h2>\r\n\r\n<p>Acts of kindness make us happier and spending time caring for others is a great way to increase your happiness level, says Santos. &ldquo;Spending time and money on ourselves isn&rsquo;t as fulfilling as focusing your time and money on other people,&rdquo; Santos explains. &ldquo;Those that&nbsp;<a href=\"https://www.happinesslab.fm/\">volunteer</a>&nbsp;more, tend to be more on the happier side than those that do not volunteer.&rdquo; Pure altruism&mdash;the kind that you want to do rather than feel obligated to&mdash;has long-lasting effects on happiness levels, so take some time to think about issues or causes that speak to you and consider what simple acts you can take to help. Could you offer to go grocery shopping for those who may be unable to leave their homes or take dinner to someone who recently had a baby? If you love nature, consider planting perennials for bees and butterflies. Send a friend a favorite book. Bring in your neighbor&rsquo;s garbage cans. Send a card full of encouragement to someone who needs it, or volunteer for your favorite organization. Time spent helping others is time well spent.</p>\r\n\r\n<h2><strong>5. Meditate</strong></h2>\r\n\r\n<p>So much of modern life is geared toward getting as much done as possible, which leads to increased stress and anxiety. Meditation is a way to use the breath to help calm the nervous system. When you breathe properly, the diaphragm stimulates the vagus nerve, which helps you connect to the parasympathetic system. Just&nbsp;<a href=\"https://www.researchgate.net/profile/Paul_Seli/publication/315790389_Mindfulness_and_mind_wandering_The_protective_effects_of_brief_meditation_in_anxious_individuals/links/5bbcb45e92851c7fde373a67/Mindfulness-and-mind-wandering-The-protective-effects-of-brief-meditation-in-anxious-individuals.pdf\">10 minutes a day</a>&nbsp;can begin to change the patterns of your brain. While starting a meditation practice can feel challenging, here are some ideas on how to get started: Begin your day in silence, before you check your phone for emails or texts. Find a comfortable chair or go outside and find a peaceful spot where you can pause and bring awareness to your breath. Close your eyes and count your breaths for 10 minutes. You can also find many useful apps that will help guide your meditation practice, which can be particularly useful for beginners. While learning to meditate requires discipline and practice, it doesn&rsquo;t have to require a lot of time and you don&rsquo;t have to do it perfectly to reap the benefits.</p>\r\n', '07e63bd741d12de5585f49acec629cc6.png', '', '', '2020-11-01 21:32:03', 1, '2020-11-02 02:02:03', NULL),
(8, 'The Beginner’s Guide to the Keto Diet', 3, 'The-Beginners-Guide-to-the-Keto-Diet', '<p><strong>If&nbsp;</strong><strong>you have questions</strong><strong>&nbsp;about the Keto Diet, well&nbsp;</strong><strong>my</strong><strong>&nbsp;friend, you&rsquo;ve come to the right place!</strong></p>\r\n\r\n<p>We help our coaching clients completely&nbsp;overhaul&nbsp;their nutrition, including going low-carb, and today we&rsquo;ll give you everything you need to start a Ketogenic Diet.&nbsp;</p>\r\n\r\n<p>Is Keto right for you? Maybe! Our coaches can help you decide.</p>\r\n\r\n<p>We&rsquo;ve learned a lot by helping people begin the Keto Diet: there&rsquo;s&nbsp;plenty&nbsp;of good, there&rsquo;s&nbsp;plenty&nbsp;of bad, and there&rsquo;s&nbsp;plenty&nbsp;of&nbsp;<em>ugly</em>.&nbsp;</p>\r\n\r\n<p>Today, we share with you what we&rsquo;ve discovered.&nbsp;</p>\r\n\r\n<p><strong>Here&rsquo;s what we&rsquo;ll cover in our&nbsp;GINORMOUS&nbsp;</strong><strong>Guide to the Keto Diet (click to skip to that section):</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_is_keto\">What is the Keto Diet or Ketogenic Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_are_ketones\">What are ketones?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_weight_loss\">Will I lose weight on the Keto Diet? What are the other benefits of Keto?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_vs_atkins_vs_paleo\">What&rsquo;s the difference between Keto, Atkins, and Paleo?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#how_to_do_keto\">How do I DO the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_to_eat_on_keto\">What can I eat on the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#am_i_in_ketosis\">How do I KNOW I&rsquo;m in Ketosis?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#fasting_keto\">How to fast on the Keto Diet (The Killer Combo!)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#avoid_the_keto_flu\">How to avoid the &ldquo;Keto Flu&rdquo; and other negative side effects</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_exercise\">The Keto Diet and exercise (training under a low-carb diet)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#supplements_and_keto\">Supplements on the Keto Diet (exogenous ketones)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_meal_plans_and_recipes\">Keto meal plans and low-carb recipes</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_snacks_and_desserts\">What are Keto-friendly snacks and&nbsp;desserts?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_alcohol\">Can I drink alcohol on the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#more_keto_resouces\">Your first week of the Keto Diet (what to do and what to expect)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#faq_on_keto_diet\">The top 6 frequently asked questions on the Keto Diet&nbsp;</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#should_you_do_the_keto_diet\">Should you do the Keto Diet?</a></li>\r\n</ul>\r\n\r\n<p>Whew. It&rsquo;s a lot to cover. Even just typing out the Table of Contents was exhausting.</p>\r\n\r\n<p>But hang in there!</p>\r\n\r\n<p><strong>You&rsquo;ll learn how to do Keto right, plus I&rsquo;ll share cute animal gifs to make sure you&rsquo;re still paying attention, like this one:</strong></p>\r\n\r\n<p><img alt=\"This carrot will definitely knock this bunny out of ketosis. \" src=\"https://www.nerdfitness.com/wp-content/uploads/2018/06/BunnyGif.gif\" style=\"height:249px; width:332px\" /></p>\r\n\r\n<p>If you don&rsquo;t have a lot of time, but do want an exact plan to follow, I got you. Since this is a&nbsp;MASSIVE article (the longest published on Nerd Fitness!), if you&rsquo;d rather read it in a snazzy digital guide form, you can download our&nbsp;<em>Beginner&rsquo;s Guide to the Keto Diet</em>&nbsp;free when you sign up in the box below:</p>\r\n', 'noimage.jpg', '', '', '2020-11-01 21:55:13', 1, '2020-11-02 02:25:13', NULL),
(52, 'createcommentform4', 4, 'createcommentform', NULL, 'c851af2bad387b7e2c89f9e1a017db19.png', 'Advanced Cattle Management System Using PHP/SQL', 'Gzhw9p5NMko', '2022-06-28 14:25:37', 2, '2022-06-28 17:55:37', NULL),
(53, 'createcommentform5', 3, 'createcommentform', NULL, 'c32920e989b25a8fc57e02f479a925cb.png', 'Advanced Cattle Management System Using PHP/SQL', 'Gzhw9p5NMko', '2022-06-28 14:34:07', 2, '2022-06-28 18:04:07', NULL),
(54, 'createcommentform6', 4, 'createcommentform', NULL, 'c35e382568609e678160c6a3c3d36bd5.png', 'Advanced Cattle Management System Using PHP/SQL', 'Gzhw9p5NMko', '2022-06-28 14:34:12', 2, '2022-06-28 18:04:12', NULL),
(55, 'createcommentform7', 1, 'createcommentform', NULL, '18144e35a95f8b005c4e55d0c50fe456.png', 'Advanced Cattle Management System Using PHP/SQL', 'Gzhw9p5NMko', '2022-06-28 14:34:16', 2, '2022-06-28 18:04:16', NULL),
(56, 'testing', 1, 'testing', NULL, '123576144b2a7decf9dff2493050c7f6.jpg', 'Simple POS System in PHP/MYSQL (Point of Sale Made Easy)--2020', 'E3RCmVOxPds', '2022-06-29 03:27:39', 2, '2022-06-29 06:57:39', 2),
(57, 'testing 2', 6, 'testing-2', NULL, 'de1af9f29764d080658f0ce7633f0019.jpg', 'TOP 10 Friends funniest episodes [in my opinion]', 'Hwiyue-w2O4', '2022-06-29 03:32:39', 2, '2022-06-29 07:02:39', 2),
(58, 'Stanton', 1, 'Stanton', NULL, 'bddf47acbeffee618a0a6fe7d4971e5c.jpg', 'Sally\'s Seashells (Extended) | Big Game Commercial 2022', 'o0rl8j5631Q', '2022-06-29 09:57:04', 2, '2022-06-29 13:27:04', 2),
(59, 'Image Testing', 1, 'Image-Testing', NULL, '9bb4f3b63d57cbfd1b26f91e33a777cc.jpg', 'ULTIMATE ADVERTISEMENT PLATFORM - CONNECTS ADVERTISER & PUBLISHER (SAAS)', '3ffGvBiH1EI', '2022-06-30 09:21:17', 2, '2022-06-30 12:51:17', 2),
(60, 'The Mission Within Us', 1, 'The-Mission-Within-Us', NULL, '49998241cc8ae560fec9444062253d16.png', 'Electronic Music for Studying, Concentration and Focus | Chill House Electronic Study Music Mix', 'ypQZV03l80g', '2022-07-04 14:02:07', 2, '2022-07-04 17:32:07', 2),
(61, 'Calling in Context', 9, 'Calling-in-Context', NULL, '796175d09c51ffe3eb5f06ba12f33eaa.jpg', 'LXST CXNTURY - AMNESIA', '2263oFDoImk', '2022-07-04 14:05:28', 2, '2022-07-04 17:35:28', NULL),
(62, 'Discovering Missional Rhythms', 10, 'Discovering-Missional-Rhythms', NULL, '633d7a50586a6a46c7d459384abb5f53.jpg', 'Deep Focus Music To Improve Concentration - 12 Hours of Ambient Study Music to Concentrate #256', 'xcVZdRSiVhU', '2022-07-04 14:10:57', 2, '2022-07-04 17:40:57', NULL),
(63, 'Take a Next Step Towards Being a Neighbor', 11, 'Take-a-Next-Step-Towards-Being-a-Neighbor', NULL, 'a142fd91b2fb76723cf5dc8be335b6bd.jpg', 'Save Your Tears', 'cqgIWsjE_dk', '2022-07-04 14:19:23', 2, '2022-07-04 17:49:23', 2),
(64, 'The Sociology of Evangelism', 12, 'The-Sociology-of-Evangelism', NULL, 'a55ca6df208954bc8e601a6e8b87ff5c.jpg', 'There are 12+ Things Wrong with this Layout..', 'g2crbT9RBAE', '2022-07-04 14:21:22', 2, '2022-07-04 17:51:22', 2),
(65, 'Plastic in the Ocean', 16, 'Plastic-in-the-Ocean', NULL, 'e9dc8488a57cb0f2863f6470ef65df6a.jpg', 'Dummy Video For YouTube API Test', '9xwazD5SyVg', '2022-07-06 13:55:21', 2, '2022-07-06 17:25:21', NULL),
(66, 'Testing Ultimate Editor', 16, 'Testing-Ultimate-Editor', NULL, '568f066da150c08c754f1c558a84be6b.jpg', 'Chill Music For Productivity and Creativity — Smooth Downtempo Mix', 'AX869YpWs08', '2022-07-08 07:32:21', 2, '2022-07-08 11:02:21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `modified_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(10) NOT NULL,
  `published` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_on`, `created_by`, `type`, `modified_on`, `modified_by`, `published`) VALUES
(1, 'Diet', '2020-11-01 20:57:54', 1, 1, '2020-11-02 01:27:54', 0, '1'),
(2, 'Nutrition', '2020-11-01 21:16:49', 1, 1, '2020-11-02 01:46:49', 0, '1'),
(3, 'Fitness', '2020-11-01 21:18:43', 1, 1, '2020-11-02 01:48:43', 0, '1'),
(4, 'Fit Facts', '2020-11-01 21:57:35', 20, 1, '2020-11-02 02:27:35', 0, '1'),
(5, 'Time Management', '2022-06-29 07:54:06', 2, 1, '2022-06-29 11:24:06', 0, '1'),
(6, 'Excercise', '2022-06-29 08:44:18', 2, 1, '2022-06-29 12:14:18', 2, '1'),
(7, 'Time Managementtwo', '2022-07-04 12:41:06', 2, 1, '2022-07-04 16:11:06', 0, '1'),
(8, 'Mission-Accomplished', '2022-07-04 13:57:50', 2, 1, '2022-07-04 17:27:50', 2, '1'),
(9, 'Context', '2022-07-04 14:04:01', 2, 1, '2022-07-04 17:34:01', 0, '1'),
(10, 'Rhythms', '2022-07-04 14:09:46', 2, 1, '2022-07-04 17:39:46', 0, '1'),
(11, 'Translators', '2022-07-04 14:18:01', 2, 1, '2022-07-04 17:48:01', 2, '1'),
(12, 'Evangelism', '2022-07-04 14:20:34', 2, 2, '2022-07-04 17:50:34', 0, '1'),
(13, 'NEWBREED BLOG', '2022-07-04 14:22:33', 2, 1, '2022-07-04 17:52:33', 0, '1'),
(14, 'Goals', '2022-07-04 14:25:05', 2, 1, '2022-07-04 17:55:05', 0, '1'),
(16, 'Minnal', '2022-07-06 03:34:39', 2, 2, '2022-07-06 07:04:39', 0, '1'),
(17, 'Minnal two', '2022-07-06 07:32:34', 2, 2, '2022-07-06 11:02:34', 2, '1'),
(18, 'Ross', '2022-07-07 07:18:25', 2, 2, '2022-07-07 10:48:25', 0, '1'),
(19, 'Excercise', '2022-07-18 08:42:55', 2, 1, '2022-07-18 12:12:55', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `commentstwo`
--

CREATE TABLE `commentstwo` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `comments` varchar(2000) NOT NULL,
  `blog_id` int(20) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentstwo`
--

INSERT INTO `commentstwo` (`id`, `user_name`, `comments`, `blog_id`, `createdOn`) VALUES
(58, 'Rolex', 'Nice place', 39, '2022-06-24 10:06:28'),
(86, 'Naamith', 'Nice view from top?', 63, '2022-07-08 11:19:38'),
(87, 'Black Beard', 'yoga?', 66, '2022-07-08 11:23:31'),
(88, 'Ace', 'Why empty blog?', 67, '2022-07-08 11:33:11'),
(89, 'Luffy', 'Is this AT funded?', 57, '2022-07-11 11:55:27'),
(90, 'Sanji', 'Is it paradox?', 62, '2022-07-13 09:48:30'),
(91, 'Ussop', 'testing', 66, '2022-07-15 11:09:47'),
(92, 'Amai Mask', 'testing', 65, '2022-07-15 11:10:23'),
(94, 'Punith', 'testing', 63, '2018-07-22 00:00:00'),
(95, 'Saithama', 'Is it Record for Month?', 57, '2022-07-20 10:41:50'),
(96, 'Manoj Dubey', 'Does it requires transition?', 63, '2022-07-25 09:57:31'),
(0, 'Punith', 'checking?', 62, '2022-09-28 14:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments_replies`
--

CREATE TABLE `comments_replies` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_replies`
--

INSERT INTO `comments_replies` (`id`, `comment_id`, `reply`, `createdOn`) VALUES
(6, 58, 'Thank You', '2022-06-24 10:06:40'),
(7, 88, 'We will delete it soon', '2022-07-08 11:33:35'),
(8, 86, 'Thank you', '2022-07-08 12:11:35'),
(9, 90, 'Yes, it is.', '2022-07-13 09:48:56'),
(10, 92, 'testing', '2022-07-15 11:13:02'),
(11, 95, 'No', '2022-07-20 10:42:40'),
(12, 96, 'No', '2022-07-25 09:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `description_id` int(100) NOT NULL,
  `description` varchar(12000) NOT NULL,
  `blogs_id` int(10) NOT NULL,
  `order_no` int(12) DEFAULT NULL,
  `created_on` date NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`description_id`, `description`, `blogs_id`, `order_no`, `created_on`, `created_by`) VALUES
(24, '<p><strong>see</strong> images; Manage your account &amp; settings; Supervised experience on&nbsp;<strong>YouTube</strong>;&nbsp;<strong>YouTube</strong>&nbsp;Premium &amp; Music Premium Help; Create &amp; grow your channel; Monetize with the&nbsp;<strong>YouTube light</strong></p>\r\n', 2, 2, '2022-06-15', 2),
(42, '<p>ddfdfdsf</p>\r\n', 52, 1, '2022-06-28', 2),
(43, '<p>ddfdfdsf</p>\r\n', 53, 1, '2022-06-28', 2),
(44, '<p>ddfdfdsf</p>\r\n', 54, 1, '2022-06-28', 2),
(45, '<p>ddfdfdsf</p>\r\n', 56, 1, '2022-06-28', 2),
(46, '<p>W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.</p>\r\n', 57, 1, '2022-06-29', 2),
(47, '<p>W3schools is the world&#39;s largest web developer learning site. Complete the learning modules, pass the exam, and get the certification trusted by top companies and institutions worldwide.</p>\r\n\r\n<p>Upgrade your CV by documenting your jQuery knowledge with the W3schools jQuery certification.</p>\r\n\r\n<p>Join +50,000 certified developers that trusted W3schools certificates to jumpstart their careers!</p>\r\n', 57, 2, '2022-06-29', 2),
(48, '<h3>With the hyper-convenience of modern life, many of us can only operate a microwave. A home-cooked meal is not a luxury, anyone can do it!</h3>\r\n', 58, 1, '2022-06-29', 2),
(49, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>\r\n', 58, 2, '2022-06-29', 2),
(50, '<p><img alt=\"\" src=\"/CodeIgniter-Blog-project/application/assets/kcfinder/upload/files/layers.png\" style=\"height:26px; width:26px\" />&nbsp;<strong>If you&rsquo;re thinking of starting a blog of your own, but just don&rsquo;t have a clue on what to blog about, then fear not!</strong></p>\r\n', 59, 1, '2022-06-30', 2),
(51, '<p>by Andrea Jones My journey with living on mission began the summer of 1983.&nbsp;I was watching T.V. with the other kids at the house of my brother in law&rsquo;s best friend, Keith Green.&nbsp;I knew Keith as the crazy Jesus Freak friend of my sister who&rsquo;d come over, bang on our piano, and make me laugh.&hellip;</p>\r\n', 60, 1, '2022-07-04', 2),
(52, '<p>by Candy Gibson I was laid off. For sixteen years I have had the honor of doing work I knew I was called to. I got to use my skills, gifts, innovation, and voice for THE THING I knew I was supposed to be doing. I got laid off and my life did not crumble.&hellip;</p>\r\n', 60, 2, '2022-07-04', 2),
(53, '<p>by Susan L. Maros When I ask people to list names of individuals in the Bible they see as examples of people who are called by God, those lists almost always include Moses, Paul, and David. Frequently, lists also include Abraham and the disciples. Jeremiah and Isaiah may appear farther down on some lists. There&hellip;</p>\r\n', 61, 1, '2022-07-04', 2),
(54, '<h3><a href=\"https://newbreedtraining.com/i-smell-smoke/\">I Smell Smoke</a></h3>\r\n\r\n<p>April 5, 2022</p>\r\n\r\n<p>by Andrea Jones I smelled smoke&hellip; &nbsp; After a few whiffs around I realized it was me. If I had been 16 rather than 39, I &nbsp;would have had some serious explaining to do. I smelt like the rich, thick, smokey aroma of someone who&rsquo;d stayed far too long in a late night bar&hellip;yet I&rsquo;d&hellip;</p>\r\n', 61, 2, '2022-07-04', 2),
(55, '<p>Liturgy forces us into a rhythm that is intentional. The repetition is not for the sake of rote memorization, it is to keep God fresh, to keep the Church active in the redemptive story of Jesus woven throughout scripture. The Church year wraps around us as we wait together for the intertestamental silence to be shattered through Mary&rsquo;s obedience. We celebrate Epiphany by humbling our hearts and leaving our treasure and power at the feet of the Holy Child. We fast to feel a fraction of the pain of our Suffering Savior through Lent. We Shout, &ldquo;Hosanna,&rdquo; and we rejoice in the resurrection of our Returning King at Easter.</p>\r\n', 62, 1, '2022-07-04', 2),
(56, '<p>As we walk in holiness, Christ walks before us&mdash;breaking down walls, speaking truth, preparing good works, and unfurling the hem of His robe, so all who touch it are healed. The ordinary, the everyday becoming&nbsp;<em>other</em>; solely because He is present.&nbsp;<strong>Jesus shows us that Holiness became flesh and flesh can become holy, and the ordinary can be sacred.</strong></p>\r\n', 62, 2, '2022-07-04', 2),
(57, '<h2>Develop Your Missional Rhythms</h2>\r\n\r\n<p>If you want to learn more about developing a liturgy of the everyday, letting the sacred spill out into secular spaces, check out&nbsp;<a href=\"https://kannedgoodsgirl.wordpress.com/2016/12/21/a-liturgy-of-the-ordinary/\">Candy&rsquo;s blog</a>&nbsp;where she writes regularly on ministry and mission.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You can also dive deeper into crafting a gathering with a missional impulse through Newbreed&rsquo;s free download&nbsp;<a href=\"https://newbreedtraining.com/apest-gathering-toolbox/\"><em>Crafting an APEST Gathering Toolbox</em></a>.</p>\r\n', 62, 3, '2022-07-04', 2),
(58, '<div class=\"container-fluid\" data-bootstrap-contains=\"containers\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<p>If you\'ve been challenged by this article and what it means to be someone\'s neighbor, we encourage you to check out some of the resources available to gain a deeper understanding and move from idea to implementation.</p>\r\n\r\n<p>Catherine McNiel\'s book&nbsp;<a href=\"https://www.navpress.com/p/fearing-bravely/9781641583268\"><em>Fearing Bravely: Risking Love for Our Neighbors, Strangers, and Enemies</em></a>&nbsp;takes a much closer look at this subject and practical implications.</p>\r\n\r\n<p>Newbreed Training\'s course<a href=\"https://newbreedtraining.com/product/missional-engagement-course/\"><em>&nbsp;Missional Engagement: Taking Steps to Build Gospel Relationships</em></a>&nbsp;also dives into how to engage our neighborhood in a meaningful, Christlike way.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div><script src=\"//cdn.public.n1ed.com/CKEDDFLT/widgets.js\"></script>', 63, 1, '2022-07-04', 2),
(59, '<div class=\"container-fluid\" data-bootstrap-contains=\"containers\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<p><a href=\"http://catherinemcniel.com/\"><strong>Catherine McNiel</strong></a>&nbsp;writes about the creative and redemptive work of God in our real, ordinary lives. She is the author of&nbsp;<a href=\"https://www.navpress.com/p/fearing-bravely/9781641583268\"><em>Fearing Bravely: Risking Love for Our Neighbors, Strangers, and Enemies</em></a>,&nbsp;<em>Long Days of Small Things: Motherhood as a Spiritual Discipline,</em>&nbsp;and&nbsp;<em>All Shall Be Well: Awakening to God\'s Presence in His Messy, Abundant World</em>. Catherine studies theology while caring for three kids, two jobs, and one enormous garden. Visit Catherine on&nbsp;<a href=\"https://www.facebook.com/catherine.mcniel\">Facebook</a>,&nbsp;<a href=\"https://twitter.com/CatherineMcNiel\">Twitter</a>, and&nbsp;<a href=\"https://www.instagram.com/catherinemcniel/\">Instagram</a>.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div><div class=\"container-fluid\" data-bootstrap-contains=\"containers\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-lg-4 py-3\">\r\n<p><img class=\"img-fluid\" src=\"https://fm.n1ed.com/files/christmas-ball.png\"></p>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-4 py-3\">\r\n<p><img class=\"img-fluid\" src=\"https://fm.n1ed.com/files/flowers.png\"></p>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-4 py-3\">\r\n<p><img class=\"img-fluid\" src=\"https://fm.n1ed.com/files/paper.png\"></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div><script src=\"//cdn.public.n1ed.com/CKEDDFLT/widgets.js\"></script>', 63, 2, '2022-07-04', 2),
(60, '<p>by Scott Brennan Many years ago I worked as a sales and marketing manager for a high end internet consultant company in Edinburgh. My job was to generate leads that converted into sales and build a good rapport with new clients. This is a classic job for an evangelist. My clients included The Royal Bank&hellip;</p>\r\n', 64, 1, '2022-07-04', 2),
(61, '<p>Plastic pollution is one of the most urgent environmental issues today. It contributes to the rapid acceleration of global</p>\r\n', 65, 1, '2022-07-06', 2),
(62, '<p>World Ocean Day takes place annually on June 8th. The concept was originally proposed in 1992 by Canada&#39;s International Centre for Ocean Development (ICOD) and the Ocean Institute of Canada (OIC) at the Earth Summit</p>\r\n\r\n<p>&nbsp;<a href=\"https://seasmartschool.com/blog/2022/2/17/world-oceans-day-celebration-8-actions-you-can-take-today\">Read More</a></p>\r\n\r\n<p><a href=\"https://seasmartschool.com/blog?author=61e873236358fb7f47db5fbe\">RW DIGITAL</a>MAY 18, 2022</p>\r\n', 65, 2, '2022-07-06', 2),
(63, '<div class=\"container-fluid\" data-bootstrap-contains=\"containers\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-lg-6 py-3\">\r\n<p><img class=\"img-fluid\" src=\"https://fm.n1ed.com/files/paper.png\" style=\"height:526px; width:500px\"></p>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-6 py-3\">\r\n<p>&nbsp;</p>\r\n\r\n<h2>Cloud 9 properties</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Check out this bad boy.</p>\r\n\r\n<p>Fully furnished, 4BHK, 72 Ammenities.</p>\r\n\r\n<p>With a time-honoured tradition of compassionate care and state-of-the-art infrastructure, Cloudnine has carved a significant footprint in India’s Garden City. The Cloudnine marque has become synonymous with world-class woman and child care and has an award-winning portfolio of healthcare services to its credit. On Cloudnine, our focus on advancing the science of maternal and neonatal clinical care has remained steadfast over the years, and has been equally underpinned by our efforts to offer outstanding outpatient services.</p>\r\n\r\n<p>We believe that every guest deserves a unique treatment plan and we go to great lengths to nurture every relationship, old or new. Our custom-crafted solutions are designed in line with your medical background, health profile and goals for the future. Our nationally and internationally acclaimed physicians are divided across maternity, gynaecology, fertility, neonatal intensive care and pediatric in all of our Bengaluru units.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div><script src=\"//cdn.public.n1ed.com/CKEDDFLT/widgets.js\"></script>', 66, 1, '2022-07-08', 2),
(65, '<div class=\"container-fluid\" data-bootstrap-contains=\"containers\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<p><strong>How do you know if the topics you choose are capable of attracting and engaging a significant portion of your target audience?</strong></p>\r\n\r\n<p>One thing is for sure: Researching blog topics require<strong>s strategy</strong>.</p>\r\n\r\n<p>Let’s get straight into the complete workflow for compiling a content plan for your business blog, using a strategic and data-led approach.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div><script src=\"//cdn.public.n1ed.com/CKEDDFLT/widgets.js\"></script>', 63, 3, '2022-07-08', 2),
(66, '<p><strong>So you wanna learn about the Paleo Diet, aka &ldquo;the Caveman Diet,&rdquo; eh?</strong></p>\r\n\r\n<p>Paleo is one of the most popular diets on the planet (up there with&nbsp;<a href=\"https://www.nerdfitness.com/blog/the-beginners-guide-to-the-keto-diet-or-ketogenic-diet/\" target=\"_blank\">the Keto Diet</a>), and I bet you have questions.</p>\r\n\r\n<p>Well I got answers, sucka! And lots of LEGO photos.</p>\r\n\r\n<p>In addition to helping people go paleo with our&nbsp;<a href=\"https://www.nerdfitness.com/coaching-overview-page/\" target=\"_blank\">Online Coaching Program</a>, we also create epic guides like this one that covers all the basics!</p>\r\n\r\n<p>Is Paleo right for you? Maybe! Our coaches can help you decide:</p>\r\n\r\n<p><strong>Below in this guide, I&rsquo;m going to give you the good, the bad, and the&nbsp;<em>ugly</em>&nbsp;when it comes to the Paleolithic Diet (click to go right to that section):</strong></p>\r\n\r\n<p><strong>INTRODUCTION TO PALEO:</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_is_paleo_diet\">What is the Paleo Diet and how does it work?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#weight_loss_on_paleo_diet\">Will I lose weight on the Paleo Diet?</a></li>\r\n</ul>\r\n\r\n<p><strong>WHAT CAN I EAT ON THE PALEO DIET?</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#foods_on_paleo_diet\">What can I eat on the Paleo Diet? (Paleo Diet Rules)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#restrictions_on_paleo_diet\">What CAN&rsquo;T I eat on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#grains_on_paleo_diet\">Can I eat grains on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#dairy_on_paleo_diet\">Can I eat dairy on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#cheese_on_paleo_diet\">Can I eat cheese on the Paleo Diet?</a></li>\r\n</ul>\r\n\r\n<p><strong>SHOPPING LIST AND EATING PLAN</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#shopping_on_paleo_diet\">Paleo Diet Shopping Guide: List of foods on the Paleo Diet</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#typical_day_on_paleo_diet\">What does a typical day look like on the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#resources_for_paleo_diet\">Paleo Recipes &amp; Paleo Resources.</a></li>\r\n</ul>\r\n\r\n<p><strong>IS PALEO DANGEROUS?</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#dangers_of_paleo_diet\">Is the Paleo Diet dangerous?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#should_i_do_the_paleo_diet\">Who shouldn&rsquo;t do the Paleo Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#safely_trying_the_paleo_diet\">How to do the Paleo Diet safely.</a></li>\r\n</ul>\r\n\r\n<p><strong>Now, this guide is SUPER long, so we took the liberty of converting it into a nicely designed guide for easy consumption (not literal consumption, unless you print it on bacon).</strong></p>\r\n', 1, 1, '2022-07-15', 1),
(67, '<p><strong>If&nbsp;</strong><strong>you have questions</strong><strong>&nbsp;about the Keto Diet, well&nbsp;</strong><strong>my</strong><strong>&nbsp;friend, you&rsquo;ve come to the right place!</strong></p>\r\n\r\n<p>We help our coaching clients completely&nbsp;overhaul&nbsp;their nutrition, including going low-carb, and today we&rsquo;ll give you everything you need to start a Ketogenic Diet.&nbsp;</p>\r\n\r\n<p>Is Keto right for you? Maybe! Our coaches can help you decide.</p>\r\n\r\n<p>We&rsquo;ve learned a lot by helping people begin the Keto Diet: there&rsquo;s&nbsp;plenty&nbsp;of good, there&rsquo;s&nbsp;plenty&nbsp;of bad, and there&rsquo;s&nbsp;plenty&nbsp;of&nbsp;<em>ugly</em>.&nbsp;</p>\r\n\r\n<p>Today, we share with you what we&rsquo;ve discovered.&nbsp;</p>\r\n\r\n<p><strong>Here&rsquo;s what we&rsquo;ll cover in our&nbsp;GINORMOUS&nbsp;</strong><strong>Guide to the Keto Diet (click to skip to that section):</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_is_keto\">What is the Keto Diet or Ketogenic Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_are_ketones\">What are ketones?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_weight_loss\">Will I lose weight on the Keto Diet? What are the other benefits of Keto?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_vs_atkins_vs_paleo\">What&rsquo;s the difference between Keto, Atkins, and Paleo?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#how_to_do_keto\">How do I DO the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#what_to_eat_on_keto\">What can I eat on the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#am_i_in_ketosis\">How do I KNOW I&rsquo;m in Ketosis?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#fasting_keto\">How to fast on the Keto Diet (The Killer Combo!)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#avoid_the_keto_flu\">How to avoid the &ldquo;Keto Flu&rdquo; and other negative side effects</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_exercise\">The Keto Diet and exercise (training under a low-carb diet)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#supplements_and_keto\">Supplements on the Keto Diet (exogenous ketones)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_meal_plans_and_recipes\">Keto meal plans and low-carb recipes</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_snacks_and_desserts\">What are Keto-friendly snacks and&nbsp;desserts?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#keto_and_alcohol\">Can I drink alcohol on the Keto Diet?</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#more_keto_resouces\">Your first week of the Keto Diet (what to do and what to expect)</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#faq_on_keto_diet\">The top 6 frequently asked questions on the Keto Diet&nbsp;</a></li>\r\n	<li><a href=\"https://www.nerdfitness.com/blog/#should_you_do_the_keto_diet\">Should you do the Keto Diet?</a></li>\r\n</ul>\r\n\r\n<p>Whew. It&rsquo;s a lot to cover. Even just typing out the Table of Contents was exhausting.</p>\r\n\r\n<p>But hang in there!</p>\r\n\r\n<p><strong>You&rsquo;ll learn how to do Keto right, plus I&rsquo;ll share cute animal gifs to make sure you&rsquo;re still paying attention, like this one:</strong></p>\r\n\r\n<p><img alt=\"This carrot will definitely knock this bunny out of ketosis. \" src=\"https://www.nerdfitness.com/wp-content/uploads/2018/06/BunnyGif.gif\" style=\"height:249px; width:332px\" /></p>\r\n\r\n<p>If you don&rsquo;t have a lot of time, but do want an exact plan to follow, I got you. Since this is a&nbsp;MASSIVE article (the longest published on Nerd Fitness!), if you&rsquo;d rather read it in a snazzy digital guide form, you can download our&nbsp;<em>Beginner&rsquo;s Guide to the Keto Diet</em>&nbsp;free when you sign up in the box below:</p>\r\n', 8, 1, '2022-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'OC'),
(2, 'EMS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created_on`) VALUES
(1, 'Medge Conner', 'medge', 'medge@gmail.com', 'dc3ea37c73422ac968f360827ac32f5d', '2020-11-01 20:49:47'),
(2, 'Test User', 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-11-01 21:56:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
