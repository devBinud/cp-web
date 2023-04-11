-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 10:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `cat_names` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `blog_meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_header` text DEFAULT NULL,
  `meta_footer` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `blog_tags` text DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 - published',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cat_names`, `blog_img`, `blog_title`, `slug`, `blog_description`, `author`, `blog_meta_title`, `meta_description`, `meta_header`, `meta_footer`, `meta_keywords`, `blog_tags`, `is_published`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(27, 'Marketing,SEO', 'bImage6315b5ba7184f0.png', 'Can too much SEO lower your ranking?', 'can-too-much-seo-lower-your-ranking', '<p>Too Much SEO</p><p>Yes, it can, just as it did when we partied too much right before our midterms. If you over-optimize your website for the sake of improving its visibility, chances are Google may see your content as <strong>‘trying too hard\'</strong> might not rank it at all.</p><p>Google May Become Wary Of Your Website</p><p>Overusing keywords, linking to irrelevant websites, or choosing irrelevant keywords merely to increase page visits are the simplest ways to escape Google\'s detection. Google will soon begin to view your website as \"fishy,\" and will attentively examine its content.</p><blockquote><p><i>Focus on the searcher\'s intention This should serve as the basis for all of your endeavours, including development and dissemination. What exactly is the searcher seeking to accomplish, and how does your material help them get there?</i></p></blockquote><p>You can be labeled as an SEO spammer</p><p>Google may impose restrictions on the visibility of your content once it verifies the spamming techniques being used on your website. Due to its \"No compromise\" approach, it seeks to ensure that only the most pertinent and accurate information is presented to its users. Additionally, even if your content is appropriate, your promotion strategies might not be.</p><p>Your advertisement may move back to page two or perhaps further.</p><p>Google may gradually stop displaying your ad for searches related to your business and start favoring other websites that are similar to yours, which could result in a decline in ad position.</p><p>Your advertisement may move back to page two or perhaps further.</p><p>But it\'s possible. Utilizing excessive SEO could result in the removal of your website from SERP. Your advertising can also rank so low that no one will ever see them.</p><p>How Much SEO Is Too Much?</p><p>While increasing website traffic is the goal, relying solely on the SEO strategies that have been advocated online is not the best course of action. It\'s crucial to know which techniques will work best for you. The following list of frequent SEO blunders could harm your website\'s traffic.</p><p>&nbsp;</p><p>Excessive Stuffing of keywords</p><p>Let\'s be clear about one thing: it\'s acceptable to begin with simple terms. The clever Google algorithm will display your adverts for keywords that are similar to the ones you have selected. Therefore, there is no need to pack your goods in every potential variation (cake and cakes are the same). So, concentrate on 7–10 keywords that are highly trafficked, have medium–low competition, and are directly relevant to your business. Utilize keyword planning tools like Google\'s Keyword Planner, Moz, Semrush, etc. to determine which keywords would be effective for you.</p><p>All Internal and External Links That Lead To The Website\'s Home Page.</p><p>Although it\'s excellent to add connections to your website\'s home page, you must remember that users are more interested in your content than you are. Therefore, when visitors click on a link that promises vegan pasta recipes, they prefer to see those recipes right away rather than being taken to the homepage of a blog on veganism and then having to search for the recipes there. The better, the more approachable your content should be.</p><p>Linking Too Much To Spam Websites</p><p>The content of the websites you\'ve linked to is just as crucial to SEO as your own content. Your credibility may suffer if you point users toward spammy or pointless websites. Additionally, refrain from keyword stuffing and excessive linking. Only look at a few (ideally one or two) links to appropriate websites.</p><p>Choosing SEO Over Good Content</p><p>When attempting to attract a sizable audience through your website, it\'s simple to become lost in the complexities of SEO. However, if your content isn\'t what people are seeking for, no amount of SEO will ever be able to help you.Therefore, focus on what your customers want from you and deliver on it. Always focus on your brand before your marketing strategy. What you intend to promote must, after all, be promotable.</p>', 'Aqib', 'META TITLE *Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 'META DESCRIPTION *Lorem ipsum dolor sit amet, consectetur adipiscing elit,', '', '', 'META KEYWORDS * Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 'IT,SEO,SMO,DATA', 1, '2022-09-05 08:39:22', 0, '2022-09-08 08:05:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_slug` varchar(200) NOT NULL,
  `cat_description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`cat_id`, `cat_name`, `cat_slug`, `cat_description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(5, 'Marketing', 'marketing', '<p>Marketing</p>', '2022-09-05 08:26:20', 1, NULL, NULL),
(6, 'SEO', 'seo', '<p>SEO category</p>', '2022-09-07 11:42:08', 1, NULL, NULL),
(7, 'IT', 'it', '', '2022-09-08 06:48:08', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(11) NOT NULL,
  `cs_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cs_description` text NOT NULL,
  `tech_used` varchar(255) NOT NULL,
  `tech_icon` varchar(255) NOT NULL,
  `cs_image` varchar(255) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_header` text DEFAULT NULL,
  `meta_footer` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `cs_title`, `slug`, `cs_description`, `tech_used`, `tech_icon`, `cs_image`, `meta_title`, `meta_description`, `meta_header`, `meta_footer`, `meta_keywords`, `is_published`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(13, 'Korangini', 'korangini', '<p>&nbsp;It was back in 1926 that Late Jadav Prasad Chaliha,freedom-fighter</p><p>and a pioneer tea-planter of Assam, undertook the daunting task of clearing a</p><p>densely forested grant of land locally known as “Korangani”, due to the abundance of</p><p>the “Koranga” tree and refilling the plot with tea plants. Battling the hardships of</p><p>a severe environment and colonial harassments, his determination bore fruit and the</p><p>&nbsp;young plantation began to flourish.Between 1953 and 1970, the reins of</p><p>administration of the plantations, which by then included the neighbouring Azizbagh</p><p>Tea Estate, fell on the hands of his wife, late Debabala Chaliha, whose single</p><p>&nbsp;handed toil and devotion established Korangani Tea Estate as a producer of high</p><p>&nbsp;quality teas at the Tea – Auction Centre at Calcutta.</p><p>&nbsp;</p><p>Two generations later, Korangani Tea Estate produces over one million kilograms of</p><p>&nbsp;tea annually, while continuing to uphold the values of quality and consistency.</p><p>&nbsp;Under the management of Korangani Tea Co. Pvt. Ltd., Korangani Tea was introduced in</p><p>packaged form in 1994 with its maiden venture at Maharashtra. In 1997, its products</p><p>were launched in North-East India through its distribution unit, DKD Marketing-</p><p>where it is now a market leader. Korangani Tea is now available in most parts of</p><p>eastern India in modern retail stores like Big Bazaar. It will soon be available in</p><p>&nbsp;Western and Northern India.</p><p>&nbsp;Blending, tasting and packaging operations are carried out under</p><p>the personal supervision of the management at Korangani Tea Estate and at the</p><p>registered-office of the company at Guwahati, Assam.</p><p>&nbsp; With a home-grown and garden-fresh source of teas throughout the season, all</p><p>&nbsp; products of Korangani Tea assure the consumer of a consistently high quality around</p><p>&nbsp; the year at market-friendly prices.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', 'HTML,CSS', 'bImage63185f51548a300.png,bImage63185f51575d910.png', 'akib__1662539539.png', '', '', '', '', '', NULL, '2022-09-06 06:48:33', 0, '2022-09-08 08:23:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `p_image`, `link`, `url`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(20, 'pImage62c805849a90b0.png', 'neindianews.com', 'https://www.neindianews.com/', '2022-07-08 10:23:00', 0, NULL, NULL),
(21, 'pImage62c805a7a21670.png', 'alohiin.com', 'https://www.alohiin.com/', '2022-07-08 10:23:35', 0, NULL, NULL),
(22, 'pImage62c805cb1980b0.png', 'digitalad360.com', 'https://digitalad360.com/', '2022-07-08 10:24:11', 0, NULL, NULL),
(23, 'pImage62c80611e4e4d0.png', 'anchorcontainerindia.com', 'https://anchorcontainerindia.com/', '2022-07-08 10:25:21', 0, NULL, NULL),
(24, 'pImage62c80626793050.png', 'slsmeeassam.in', 'https://slsmeeassam.in/', '2022-07-08 10:25:42', 0, NULL, NULL),
(25, 'pImage62c806313c77b0.png', 'talkchild.com', 'https://www.talkchild.com/', '2022-07-08 10:25:53', 0, '2022-07-14 06:36:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$s85M8RB8hkNKwDf5Uc2MmuRtCFac.R1YV1m7zjwFikXTsDKnkiY6y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
