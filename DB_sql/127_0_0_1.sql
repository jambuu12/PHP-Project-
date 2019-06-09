-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 03 2018 г., 06:31
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_db`
--
CREATE DATABASE IF NOT EXISTS `test_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test_db`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `image` varchar(255) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `pubdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `user`, `title`, `text`, `image`, `categorie_id`, `pubdate`, `views`) VALUES
(1, '', 'How to bake Cookies', 'Ingredients\r\n3/4\r\ncup granulated sugar\r\n3/4\r\ncup packed brown sugar\r\n1\r\ncup butter or margarine, softened\r\n1\r\nteaspoon vanilla\r\n1\r\negg\r\n2 1/4\r\ncups Gold Medal™ all-purpose flour\r\n1\r\nteaspoon baking soda\r\n1/2\r\nteaspoon salt\r\n1\r\ncup coarsely chopped nuts\r\n1\r\npackage (12 ounces) semisweet chocolate chips (2 cups) ', '', 4, '2018-06-18 16:00:00', 100),
(2, '', 'Feeling Depressed', 'Are you waking up just feeling “blah”? Perhaps you don’t want to do anything except lie like a couch potato and watch TV, and even that is unsatisfying?  You not only feel low energy, but kind of miserable.  Perhaps you’re mad at yourself for not getting the house cleaned or not getting your work done and papers filed. Perhaps you’re feeling a bit lonely, left out by friends or unsupported by family.  You may dwell on mounting bills or the fact that you’re 10 or 20 pounds overweight.  You may feel aches and pains in your neck or back.  Or you may just may feel grouchy and want to remain undisturbed by life’s demands and conversational opportunities.  You may compare yourself unfavorably to your friend, roommate, cousin, or neighbor, who always seems to be on time, well-groomed, and on track to meet her goals.  We all have those “blah” days, but why do they happen and what can we do about them?\r\nBelow are ten scientific reasons why you may be feeling out of sorts:\r\nBrain Chemicals\r\n\r\nSome of us have brains that are more  sensitive to the effects of stress. Researchers are just beginning to uncover the biochemistry behind this differential.  The most common forms of antidepressants target the neurotransmitters serotonin and norepinephrine because research shows that low levels of these chemical motivators are part of what makes us depressed. However, only some people respond well to the most common forms of antidepressants, while others try drug after drug with no substantial mood improvement. A recent research study may reveal the reason why. A study published earlier this year in Proceedings of the National Academy of Sciences suggests that differences in the way our brain’s process a chemical called galanin makes some of us less resilient and able to bounce back after difficult experiences.\r\nThe Weather\r\n\r\nLess sunshine during the winter months can give us the blues, and this effect is more pronounced for some people than others.  Researchers Keller and colleagues studied hundreds of people and found that during the spring, moods improved along with doing more outdoor activities. We are also more cognitively flexible and able to think creatively about solving our problems in the spring, compared to winter.  A subgroup of us suffer from Seasonal Affective Disorder in which the winter blues turn into full-blown depression along with associated changes in sleep, appetite, and motivation.  Sufferers are more likely to be women. Exposure to outdoor sunlight also provides us with vitamin D; a substance with clear links to depressed mood.', '', 4, '2018-06-24 15:43:33', 125),
(3, '', 'Science fiction', 'Science fiction is often celebrated as a forward-thinking genre that promotes peace among all life forms. But deciding which sci-fi TV series is the best? That debate could start an intergalactic war.\r\n\r\nTo determine which series is the supreme ruler of the sci-fi genre, we took into consideration Tomatometer data culled from critics’ reviews, plus a number of reputable “best of” lists, and sprinkled the effort with some editorial discretion, asking ourselves which shows have stood the test of time, inspired spin-offs and copycats, and even made their influence known on the big screen.\r\n\r\nSome usual suspects naturally came out on top: Doctor Who, Fringe, Firefly, Orphan Black, and creator Ronald D. Moore’s mid-2000s re-imagining of Battlestar Galactica received high marks across the board — not surprising, since they all also have high Tomatometer scores, as do relative newcomers like Westworld, The Expanse, and Black Mirror.\r\n\r\nOne of the toughest calls we had to make was what exactly constitutes science fiction. Fantasy, mystery, horror, and postapocalyptic genres can appear to enter the sci-fi realm, but we had to create some boundaries. David Lynch and Mark Frost’s Twin Peaks, which famously popularized the dead-girl murder-mystery trope before dovetailing into something more complicated, was deemed horror-fantasy (so don’t bother “Where’s Twin Peaks?!”–ing us in the comments). What about shows in the Marvel Cinematic Universe like Jessica Jones and Agents of S.H.I.E.L.D.? Superhero shows were deemed a separate category.\r\n\r\nRanking each of these shows is a Gorn wrestling match all its own – especially when it comes to now-classic titles whose scores are so Rotten, they threaten to stink up the whole list. Have fond memories of 1979’s Buck Rogers in the 25th Century? Hate to ruin any childhood reverie, but it stands at a ripe 33% with 15 reviews on season 1. It still makes the list because of its nostalgia value and the relatively low number of reviews available.\r\n\r\nDisagree with our ranking of the best sci-fi TV series? Tell us about your favorites in the comments!', '', 4, '2018-06-24 15:43:33', 123),
(11, 'Admin', 'Articles', 'Articles are words that define a noun as specific or unspecific. Consider the following examples:\r\nAfter the long day, the cup of tea tasted particularly good.\r\nBy using the article the, weâ€™ve shown that it was one specific day that was long and one specific cup of tea that tasted good.\r\nAfter a long day, a cup of tea tastes particularly good.\r\nBy using the article a, weâ€™ve created a general statement, implying that any cup of tea would taste good after any long day. English has two types of articles: definite and indefinite. Letâ€™s discuss them now in more detail.', '', 5, '2018-07-03 06:07:08', 0),
(12, 'Admin', 'Lorem Ipsum', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a suscipit leo, eu sagittis justo. Vestibulum faucibus dui eu sem tincidunt tincidunt. Proin accumsan, augue a placerat malesuada, turpis magna porta ipsum, at sagittis mauris risus eu odio. Maecenas vel tellus vel nisi maximus venenatis. Proin interdum justo risus. Fusce sodales sit amet massa at blandit. Sed rutrum, metus non posuere facilisis, odio leo laoreet leo, eu blandit mi ex ut massa. Duis eleifend ante sem, non cursus nisl ultricies vel.\r\n\r\nSuspendisse lectus urna, placerat in porttitor sed, mattis accumsan dui. Nam semper neque et varius tempor. Proin condimentum magna velit, eu aliquet leo lobortis vel. Vivamus maximus maximus porta. Praesent finibus velit eget velit venenatis dapibus. Aliquam id odio ligula. Fusce et rhoncus turpis, vel venenatis quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris vitae dolor sapien. Donec vitae accumsan ex. Aliquam eleifend, metus non varius auctor, ipsum augue ornare sapien, sed consectetur justo libero sed nisi. Nam nec libero ante. Sed et est eleifend, vehicula sem quis, molestie risus. Cras enim diam, sagittis sed tincidunt vitae, efficitur id risus.\r\n\r\nAenean id finibus sem, sagittis feugiat est. Vivamus tincidunt id ex non interdum. Aliquam vel eros ultrices, congue tellus vitae, vestibulum tortor. Maecenas ac accumsan ante. Maecenas blandit condimentum rutrum. Etiam efficitur tempor velit, at porttitor magna ultrices eget. Vivamus ultrices tristique metus id suscipit. Sed eu vulputate urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla et tincidunt dui. Proin id ornare augue. Ut quis molestie purus.\r\n\r\nUt mattis, lacus vitae tincidunt maximus, ante arcu cursus dolor, id tristique eros velit vel mauris. Etiam nisi lorem, laoreet ut elementum eget, convallis vel urna. Aenean risus tortor, maximus eu tincidunt eget, rutrum id diam. Ut a dignissim enim. In venenatis in elit ac ullamcorper. Proin eget nunc in massa ullamcorper sodales. Sed tristique enim est, eget feugiat leo volutpat eu. Nulla eu fermentum arcu. Donec quis cursus urna. Pellentesque nec sagittis nisi.\r\n\r\nInteger sit amet euismod odio. Cras tempus est odio, eu eleifend nisl maximus nec. Phasellus nec luctus elit. Ut aliquet elit in tellus imperdiet interdum. Ut a nulla sed diam tempus rhoncus ac ac leo. Nullam vel risus euismod, bibendum sem nec, lacinia mauris. Curabitur sapien nulla, pretium quis mauris non, congue accumsan elit.\r\n\r\nIn vitae velit vel ipsum laoreet pulvinar eu quis diam. Curabitur elementum odio ut diam sagittis finibus. Vivamus sollicitudin dolor sed velit rhoncus, sollicitudin consequat ex semper. Praesent varius lorem lacus, dictum venenatis urna commodo eget. Nulla vel dolor scelerisque, condimentum lacus eget, suscipit velit. Mauris volutpat mattis sapien eleifend facilisis. Mauris ac malesuada dui, nec sollicitudin elit. ', '', 1, '2018-07-03 06:07:09', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'Fantasy'),
(2, 'IT'),
(4, 'Cooking'),
(5, 'Other'),
(6, 'Fun'),
(7, 'Football');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `articles`) VALUES
(5, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd@mail.com', 0),
(49, 'g_manukiani', '7815696ecbf1c96e6894b779456d330e', 'manu@gmail.com', 0),
(50, 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 'Admin@mail.ru', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
