thesuppositoryofwisdom.com
==========================

A political satire site containing quotes made by current Australian Prime Minister. Tony Abbott.

Setup SQL
==========
-- MySQL dump 10.13  Distrib 5.5.37, for Linux (x86_64)
--
-- Host: localhost    Database: suppository
-- ------------------------------------------------------
-- Server version       5.5.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `suppository`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `suppository` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `suppository`;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HREF` text NOT NULL,
  `POSITION` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'resources/images/abbott6.jpg','-70px 0'),(2,'resources/images/abbott5.jpg','0 0 '),(3,'resources/images/abbott4.jpg','-100px 0'),(4,'resources/images/abbott3.jpg','-100px 0'),(5,'resources/images/abbott2.jpg','-75px 0'),(6,'resources/images/abbott1.jpg','0 0'),(7,'resources/images/abbott7.jpg','-10px 0'),(8,'resources/images/abbott8.gif','-20px 0'),(9,'resources/images/abbott9.jpg','-90px 0'),(10,'resources/images/abbott10.jpg','-35px 0'),(11,'resources/images/abbott11.jpg','-60px 0');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `QUOTE` text NOT NULL,
  `REF` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (1,'No one. However smart, however well-educated, however experienced is the suppository of all wisdom','http://edition.cnn.com/2013/08/12/world/asia/australia-abbott-suppository-gaffe/'),(2,'I think that they\'civilisation came to this country in 1788 and are perfectly appropriate remarks for the Canadian Prime Minister to make. Canadia ... Canada probably has more involvement in the affairs of Europe than Australia often does','http://news.ninemsn.com.au/world/2014/06/09/14/09/tony-abbott-calls-canada-canadia-during-tour#lCKgL1Q93hl0WQ3j.99'),(3,'If you wanna know who to vote for, I\'m the guy with the not bad-looking daughters.','https://www.youtube.com/watch?v=OmyoRNL0hrQ'),(4,'It\'s not goodies versus baddies, it\'s baddies versus baddies','http://www.abc.net.au/news/2013-09-02/abbott-seeks-to-explain-baddies-v-baddies-comment/4929118'),(5,'I think it would be folly to expect that women will ever dominate or even approach equal representation in a large number of areas simply because their aptitudes, abilities and interests are different for physiological reasons.','http://www.abc.net.au/4corners/content/2010/s2846485.htm'),(6,'I am, as you know, hugely unconvinced by the so-called settled science on climate change.','http://www.abc.net.au/7.30/content/2009/s2638036.htm'),(7,'If we\'re honest, most of us would accept that a bad boss is a little bit like a bad father or a bad husband. you find that he tends to do more good than harm. He might be a bad boss but at least he\'s employing someone while he is in fact a boss.','http://www.abc.net.au/am/stories/s596135.htm'),(8,'Abortion is the easy way out. It\'s hardly surprising that people should choose the most convenient exit from awkward situations.','http://www.tonyabbott.com.au/LatestNews/ArticleswrittenbyTony/tabid/87/articleType/ArticleView/articleId/3653/RATE-OF-ABORTION-HIGHLIGHTS-OUR-MORAL-FAILINGS.aspx'),(9,'The problem with the Australian practice of abortion is that an objectively grave matter has been reduced to a question of the mother\'s convenience.','http://www.tonyabbott.com.au/LatestNews/ArticleswrittenbyTony/tabid/87/articleType/ArticleView/articleId/3653/RATE-OF-ABORTION-HIGHLIGHTS-OUR-MORAL-FAILINGS.aspx'),(10,'I want to make it clear that I do not judge or condemn any woman who has had an abortion, but every abortion is a tragedy and up to 100,000 abortions a year is this generation\'s legacy of unutterable shame.',NULL),(11,'I won\'t be rushing out to get my daughters vaccinated [for cervical cancer], maybe that\'s because I\'m a cruel, callow, callous, heartless bastard but, look, I won\'t be','http://www.theaustralian.com.au/news/nation/i-could-be-seen-as-cruel-on-gardasil-abbott/story-e6frg6nf-1111112494271'),(12,'I think there does need to be give and take on both sides, and this idea that sex is kind of a woman\'s right to absolutely withhold, just as the idea that sex is a man\'s right to demand I think they are both they both need to be moderated, so to speak.','http://www.abc.net.au/tv/qanda/txt/s2514401.htm'),(13,'When you are challenging the young, they can come back at you with language of tremendous power and they are no respecters of sacred cows, you know, the young. There\'s nothing politically correct about the average young Australian when it comes to use of language.','http://www.news.com.au/story/0,27574,25992545-421,00.html'),(14,'The argument [behind climate change] is absolute crap. However, the politics of this are tough for us. Eighty per cent of people believe climate change is a real and present danger.','http://www.theaustralian.com.au/politics/the-town-that-turned-up-the-temperature/story-e6frgczf-1225809567009'),(15,'What the housewives of Australia need to understand as they do the ironing is that if they get it done commercially it\'s going to go up in price and their own power bills when they switch the iron on are going to go up.','http://www.smh.com.au/national/abbott-accused-of-being-incredibly-oldfashioned-as-he-lets-off-steam-20100209-nnqr.html'),(16,'There may not be a great job for [aboriginal people] but whatever there is, they just have to do it... And if it\'s picking up rubbish around the community, it just has to be done.','http://www.news.com.au/features/federal-election/aboriginal-people-must-get-jobs-says-opposition-leader-tony-abbott/story-fn5tas5k-1225886350430'),(17,'Jesus knew that there was a place for everything and it\'s not necessarily everyone\'s place to come to Australia.','http://www.abc.net.au/tv/qanda/txt/s2859473.htm'),(18,'I know politicians are going to be judged on everything they say but sometimes in the heat of discussion you go a little bit further than you would if it was an absolutely calm, considered, prepared, scripted remark. The statements that need to be taken absolutely as gospel truth are those carefully prepared scripted remarks.','http://www.news.com.au/national/dont-believe-everything-i-say-tony-abbott/story-e6frfkvr-1225867979082'),(19,'It seems that, notwithstanding the dramatic increases in manmade CO2 emissions over the last decade, the world\'s warming has stopped.','http://www.heraldsun.com.au/news/australias-second-warmest-year-ever-according-to-bureau-of-meteorology-figures/story-e6frf7jo-1225816322149'),(20,'While I think men and women are equal, they are also different and I think it\'s inevitable and I don\'t think it\'s a bad thing at all that we always have, say, more women doing things like physiotherapy and an enormous number of women simply doing housework','http://www.heraldsun.com.au/opinion/rudd-hands-pm-a-crucial-lifeline/story-e6frfhqf-1225902277655'),(21,'I think I would say to my daughters if they were to ask me this question... it [their virginity] is the greatest gift that you can give someone, the ultimate gift of giving and don\'t give it to someone lightly, that\'s what I would say.','http://www.theage.com.au/opinion/the-monk-might-make-sense-20100127-mz0v.html#ixzz249o58Ykh'),(22,'The poor will always be with us.','http://www.brisbanetimes.com.au/opinion/bible-bashing-the-homeless-abbott-style-20100215-o2tj.html?comments=105'),(23,'These people aren\'t so much seeking asylum, they\'re seeking permanent residency. If they were happy with temporary protection visas, then they might be able to argue better that they were asylum seekers','http://www.abc.net.au/7.30/content/2012/s3573785.htm'),(24,'I think there does need to be give and take on both sides, and this idea that sex is kind of a woman\'s right to absolutely withhold, just as the idea that sex is a man\'s right to demand I think they are both they both need to be moderated, so to speak','http://www.abc.net.au/tv/qanda/txt/s2514401.htm'),(25,'Climate change is absolute crap','http://www.abc.net.au/7.30/content/2010/s2808321.htm'),(26,'If you want to put a price on carbon why not just do it with a simple tax','http://www.youtube.com/watch?v=ckcH0Wrmy74'),(27,'[on homosexuality] I\'d probably ... I feel a bit threatened','http://sixtyminutes.ninemsn.com.au/article.aspx?id=1020354'),(28,'[on homosexuality] If you\'d asked me for advice I would have said to have adopt a sort of \"don\'t ask, don\'t tell\" policy about all of these things...','http://www.abc.net.au/tv/qanda/txt/s2514401.htm'),(29,'Now, I know that there are some Aboriginal people who aren\'t happy with Australia Day. For them it remains Invasion Day. I think a better view is the view of Noel Pearson, who has said that Aboriginal people have much to celebrate in this country\'s British Heritage','http://www.abc.net.au/tv/qanda/txt/s2859473.htm'),(30,'Western civilisation came to this country in 1788 and I\'m proud of that...','http://www.abc.net.au/4corners/content/2010/s2846485.htm'),(31,'[on Fiona Scott] I think I can probably say [she] has a bit of sex appeal','http://www.abc.net.au/news/2013-08-13/tony-abbott-highlights-fellow-candidates-sex-appeal/4884346'),(32,'[on teenage netballers] A bit of body contact never hurt anyone','http://www.news.com.au/national-news/federal-election/tony-abbott-jokes-about-8216body-contact8217-with-teen-netballers/story-fnho52ip-1226706352231');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
