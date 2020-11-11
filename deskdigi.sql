-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 11:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deskdigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description1` text NOT NULL,
  `stitle` text NOT NULL,
  `description2` text NOT NULL,
  `sec2title` varchar(50) NOT NULL,
  `sec2description` text NOT NULL,
  `support` text NOT NULL,
  `Awesome` text NOT NULL,
  `Performance` text NOT NULL,
  `vision_title` varchar(50) NOT NULL,
  `vision_description` text NOT NULL,
  `clint_title` varchar(50) NOT NULL,
  `client_description` text NOT NULL,
  `client1` varchar(50) NOT NULL,
  `client2` varchar(50) NOT NULL,
  `client3` varchar(50) NOT NULL,
  `client4` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `ptitle`, `title`, `description1`, `stitle`, `description2`, `sec2title`, `sec2description`, `support`, `Awesome`, `Performance`, `vision_title`, `vision_description`, `clint_title`, `client_description`, `client1`, `client2`, `client3`, `client4`, `status`, `date_updated`) VALUES
(1, 'About Our Agency', 'Short Story About Our Company', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Ut wisi enim ad minim veniam, quis nostrud exerci tation.', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', 'Mirum est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum formas.', 'We Work for Your Profit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad veniam.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum investigationes demonstraverunt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.', 'hyewfcerfcre', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.', 'Our Valuable Clientss', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima', 'client1-hover.png', 'client2-hover.png', 'client3-hover.png', 'client4-hover.png', 'Active', '2020-06-07 09:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advisor`
--

CREATE TABLE `tbl_advisor` (
  `id` int(11) NOT NULL,
  `slid_title1` varchar(200) NOT NULL,
  `slid_subtitle1` varchar(180) NOT NULL,
  `slid_img1` varchar(150) NOT NULL,
  `slid_title2` varchar(200) NOT NULL,
  `slid_subtitle2` varchar(180) NOT NULL,
  `slid_img2` varchar(150) NOT NULL,
  `pdes` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `pi1` varchar(150) NOT NULL,
  `pi2` varchar(150) NOT NULL,
  `pi3` varchar(150) NOT NULL,
  `pi4` varchar(150) NOT NULL,
  `pi5` varchar(150) NOT NULL,
  `pi6` varchar(150) NOT NULL,
  `pi7` varchar(150) NOT NULL,
  `p5pr` text NOT NULL,
  `pt7` text NOT NULL,
  `pt5pr` text NOT NULL,
  `sec3pt6` text NOT NULL,
  `sec3pt7` text NOT NULL,
  `sec4pt6` text NOT NULL,
  `sec4pt7` text NOT NULL,
  `pt6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_advisor`
--

INSERT INTO `tbl_advisor` (`id`, `slid_title1`, `slid_subtitle1`, `slid_img1`, `slid_title2`, `slid_subtitle2`, `slid_img2`, `pdes`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `pi1`, `pi2`, `pi3`, `pi4`, `pi5`, `pi6`, `pi7`, `p5pr`, `pt7`, `pt5pr`, `sec3pt6`, `sec3pt7`, `sec4pt6`, `sec4pt7`, `pt6`) VALUES
(1, 'Social Media Marketing', 'Social Media Marketing Services', 'social-photo.png', 'Professional Tools for Your Business', 'Brand Monitoring', 'investment-banner-web-icon-business-finance_35632-165.jpg', 'Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum per seacula quarta.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. ', '43%', 'Social Media Contests', 'Nam liber tempor cum soluta nobis eleifend option congue nihil.', '68%', 'Social Media Management', 'Mirum est notare quam littera gothica, quam nunc putamus parum.', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'aaw.png', '90%', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum sollemnes ', '19%', 'CONTENT MARKETING', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.', 'GREAT RANKINGS', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum per seacula quarta decima et quinta decima.\r\n\r\n', 'Setup & Custom Profile Design');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benefits`
--

CREATE TABLE `tbl_benefits` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat2_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `sal_image` varchar(150) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_benefits`
--

INSERT INTO `tbl_benefits` (`id`, `cat_id`, `subcat_id`, `subcat2_id`, `designation_id`, `sal_image`, `date_created`, `date_updated`, `isDeleted`, `status`) VALUES
(1, 1, 1, 1, 1, 'Capture3.png', '2020-01-11 06:26:17', '2020-02-03 12:25:29', 0, 'Active'),
(2, 1, 1, 1, 1, 'Capture3.png', '2020-01-11 06:31:26', '2020-02-04 10:07:45', 1, 'Inactive'),
(3, 1, 1, 1, 1, 'Capture3.png', '2020-01-11 06:32:10', '2020-02-04 10:09:50', 1, 'Inactive'),
(4, 1, 1, 1, 1, 'Capture3.png', '2020-01-11 06:32:47', '2020-02-03 12:25:38', 0, 'Active'),
(5, 1, 1, 1, 3, 'complete-software-developer.jpeg', '2020-02-03 12:37:04', '2020-02-04 10:07:38', 1, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benefit_img`
--

CREATE TABLE `tbl_benefit_img` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `c_image` varchar(290) NOT NULL,
  `date_created` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_benefit_img`
--

INSERT INTO `tbl_benefit_img` (`id`, `b_id`, `c_image`, `date_created`, `isDeleted`, `status`) VALUES
(1, 1, '1.jpg', '2020-01-11 06:26:17', 0, 'Active'),
(2, 1, '2.jpg', '2020-01-11 06:26:17', 0, 'Active'),
(3, 1, '3.jpg', '2020-01-11 06:26:17', 0, 'Active'),
(4, 1, '4.jpg', '2020-01-11 06:26:17', 1, 'Inactive'),
(5, 2, '1.jpg', '2020-01-11 06:31:26', 0, 'Active'),
(6, 2, '2.jpg', '2020-01-11 06:31:26', 0, 'Active'),
(7, 2, '3.jpg', '2020-01-11 06:31:26', 0, 'Active'),
(8, 3, '8.jpg', '2020-01-11 06:32:10', 0, 'Active'),
(9, 3, '9.jpg', '2020-01-11 06:32:10', 0, 'Active'),
(10, 3, '10.jpg', '2020-01-11 06:32:10', 0, 'Active'),
(11, 3, '11.jpg', '2020-01-11 06:32:10', 1, 'Inactive'),
(12, 4, '5.jpg', '2020-01-11 06:32:47', 0, 'Active'),
(13, 4, '6.jpg', '2020-01-11 06:32:47', 0, 'Active'),
(14, 4, '7.jpg', '2020-01-11 06:32:47', 0, 'Active'),
(15, 4, '8.jpg', '2020-01-11 06:32:47', 0, 'Active'),
(16, 1, 'cus1.png', '2020-02-03 11:26:44', 0, 'Active'),
(17, 1, '111.png', '2020-02-03 11:27:04', 0, 'Active'),
(18, 1, 'Black-with-red-umbrellas-creative-background-02.jpg', '2020-02-03 11:49:14', 1, 'Inactive'),
(19, 1, 'Mediqop_Logo.png', '2020-02-03 11:49:46', 1, 'Inactive'),
(20, 1, 'logo11.png', '2020-02-03 11:52:25', 0, 'Active'),
(21, 3, 'mr.png', '2020-02-03 12:25:04', 0, 'Active'),
(22, 2, 'cus2.png', '2020-02-03 12:25:24', 0, 'Active'),
(23, 5, 'cus.png', '2020-02-03 12:37:04', 0, 'Active'),
(24, 5, 'supplier.png', '2020-02-03 12:37:04', 1, 'Inactive'),
(25, 5, 'Black-with-red-umbrellas-creative-background-02.jpg', '2020-02-03 12:37:04', 1, 'Inactive'),
(26, 5, 'photo-1515879218367-8466d910aaa4.jpg', '2020-02-03 12:38:14', 1, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_modified` datetime NOT NULL,
  `date` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `content`, `status`, `date_modified`, `date`, `isDeleted`) VALUES
(3, 'Advanced MS Excel functions s', '<ol>\r\n	<li>VLOOKUP, Hlookup, Offset, Index, Match&nbsp;</li>\r\n	<li>Choose, Sumifs, Sumproduct, Ifs, Array, AND, OR</li>\r\n	<li>Data table, Data validation, Goal seek&nbsp;</li>\r\n	<li>Conditional formatting, Cell referencing, Name manager</li>\r\n	<li>Advanced Charts - Bridge, Waterfall</li>\r\n	<li>NPV, IRR, PMT and IPMT, CoVar, Var</li>\r\n	<li>Concatenate, CELL, LEFT, MID and RIGHT&nbsp;</li>\r\n	<li>&nbsp;Excel shortcuts, Freeze function, Filters</li>\r\n</ol>\r\n', 'Active', '2020-03-12 08:04:23', '2020-03-07 00:00:00', 0),
(4, 'Financial statement analysis', '<ol>\r\n	<li>Understanding of each line item of IS, BS, and CF.&nbsp;</li>\r\n	<li>Three statement linking</li>\r\n	<li>Ratio analysis (leverage, working capital, return, margins, DuPont, basic/Diluted EPS, industry specific ratios),&nbsp;</li>\r\n	<li>Nature of BS items: Operating, Working capital, Net debt, and Surplus assets/liabilities,&nbsp;</li>\r\n	<li>Key financial concepts: Minority interest, Deferred tax, Pension liabilities, Due to/from related parties, Direct costs/indirect expenses, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 11:58:22', '2020-03-07 00:00:00', 0),
(5, 'Income approach valuation', '<ol>\r\n	<li>&nbsp;Different types of valuation methods and application&nbsp;</li>\r\n	<li>Income approach: DCF (FCFF, FCFE), and Dividend discount model</li>\r\n	<li>Cost of capital: CoE, CoD, and WACC analysis,&nbsp;</li>\r\n	<li>Other valuation concepts: EV, Levered/Unlevered beta, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 11:59:20', '2020-03-07 00:00:00', 0),
(6, 'Market approach valuation', '<ol>\r\n	<li>Peer search and transaction analysis</li>\r\n	<li>Peer benchmarking</li>\r\n	<li>Relative valuation: Multiple analysis (LTM and forward multiples)</li>\r\n	<li>Other relative valuation concepts: , DLOC, DLOM, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:22:57', '2020-03-07 00:00:00', 0),
(7, 'Financial Modeling approach and best practices', '<ol>\r\n	<li>&nbsp;Financial Modelling approach and best practices&nbsp;</li>\r\n	<li>&nbsp;Setting-up a financial model template (cover, input, assumptions, financial statements, ratio analysis, valuation, output)</li>\r\n	<li>Making of error free model: Application of checks and controls in the template</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:24:47', '2020-03-07 00:00:00', 0),
(8, 'Financial Modeling - Historical statement analysis', '<ol>\r\n	<li>Linking of historical statements&nbsp;</li>\r\n	<li>&nbsp;Deriving historical ratios and growth rate</li>\r\n	<li>&nbsp;Setting up of a working financial model with complete linking</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:26:58', '2020-03-07 00:00:00', 0),
(9, 'Financial Modeling - Projections of financial statements', '<ol>\r\n	<li>Financial statements projections</li>\r\n	<li>Preparation of various schedules: Revenue model, cost model, working capital, financial structure</li>\r\n	<li>Matching of balance sheet</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:27:38', '2020-03-07 00:00:00', 0),
(10, 'Financial Modeling - DCF and Market approach Valuation', '<ol>\r\n	<li>DCF valuation and WACC analysis</li>\r\n	<li>Market approach valuation</li>\r\n	<li>Analysis and comparison of valuation with market</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:28:21', '2020-03-07 00:00:00', 0),
(11, 'Report writing (Equity research)', '<ol>\r\n	<li>&nbsp;Report writing- Best practices</li>\r\n	<li>Writing of different sections such as Financial Analysis, Company Overview, Industry Overview, Valuation Summary and Executive Summary</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:29:26', '2020-03-07 00:00:00', 0),
(12, 'Real-life project based case studies and test', '<ol>\r\n	<li>Concepts check based on real-life case study</li>\r\n	<li>&nbsp;Project based case study test 1 (mid-term) and final test</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:29:55', '2020-03-07 00:00:00', 0),
(13, 'Preparation for the Job interview', '<ol>\r\n	<li>Creation of impactful resume</li>\r\n	<li>Email writing</li>\r\n	<li>Technical interview and feedback</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:30:27', '2020-03-07 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tech` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `image`, `title`, `tech`, `date`, `date_updated`, `status`, `isDeleted`) VALUES
(1, 'case1.jpg', 'Peter Spenser', 'Copywriter', '2020-06-07 10:15:20', '2020-06-08 10:00:48', 'Active', 0),
(2, 'case2.jpg', 'INVESTIGATIONES LEGERE', 'Ecommerce, SEO, SMM', '2020-06-07 10:16:42', '2020-06-07 10:16:42', 'Active', 0),
(3, 'case2.jpg', 'INVESTIGATIONES LEGERE', 'Ecommerce, SEO, SMM', '2020-06-07 10:16:42', '2020-06-07 10:16:42', 'Active', 0),
(4, 'case1.jpg', 'INVESTIGATIONES LEGERE', 'SMM, Technology', '2020-06-07 10:15:20', '2020-06-08 09:31:40', 'Active', 0),
(5, 'case2.jpg', 'INVESTIGATIONES LEGERE', 'Ecommerce, SEO, SMM', '2020-06-07 10:16:42', '2020-06-07 10:16:42', 'Active', 0),
(6, 'case1.jpg', 'INVESTIGATIONES LEGERE', 'SMM, Technology', '2020-06-07 10:15:20', '2020-06-07 10:15:20', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campain`
--

CREATE TABLE `tbl_campain` (
  `id` int(11) NOT NULL,
  `coupon` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_expired` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_campain`
--

INSERT INTO `tbl_campain` (`id`, `coupon`, `image`, `date_created`, `date_expired`, `status`, `isDeleted`) VALUES
(2, 'NEWYEAR2020', 'flash-banner.png', '2020-01-06 17:30:00', '2020-01-31 01:00:00', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certifications`
--

CREATE TABLE `tbl_certifications` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat2_id` int(11) NOT NULL,
  `cert_name` varchar(150) NOT NULL,
  `w_exp` varchar(150) NOT NULL,
  `edu_titme` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `isDeleted` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_consulting`
--

CREATE TABLE `tbl_consulting` (
  `id` int(11) NOT NULL,
  `slid_title1` varchar(200) NOT NULL,
  `slid_subtitle1` varchar(180) NOT NULL,
  `slid_img1` varchar(150) NOT NULL,
  `slid_title2` varchar(200) NOT NULL,
  `slid_subtitle2` varchar(180) NOT NULL,
  `slid_img2` varchar(150) NOT NULL,
  `pdes` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `pi1` varchar(150) NOT NULL,
  `pi2` varchar(150) NOT NULL,
  `pi3` varchar(150) NOT NULL,
  `pi4` varchar(150) NOT NULL,
  `pi5` varchar(150) NOT NULL,
  `pi6` varchar(150) NOT NULL,
  `pi7` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_consulting`
--

INSERT INTO `tbl_consulting` (`id`, `slid_title1`, `slid_subtitle1`, `slid_img1`, `slid_title2`, `slid_subtitle2`, `slid_img2`, `pdes`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `pi1`, `pi2`, `pi3`, `pi4`, `pi5`, `pi6`, `pi7`) VALUES
(1, 'Delivering Job-Ready Professionals to our clients by bridging the skill gap', ' Provide extensive training on technical as well as soft skills', 'ONKJAU0.jpg', '100% Placement Guaranteed', ' Your success is our promise', 'ONKJAU0.jpg', 'HR consulting synergizes with our training business, therefore, we promise to deliver best candidates to our clients. Fincore provides best “Talent Acquisition Solutions” to financial firms as we understand client requirements in detail and accordingly we train students in our classrooms to make them job-ready.', 'Collaboration with recruiters (Discussion with recruiters to understand their job requirements) ', 'Extensive training (Train professionals on all required skills with real-life case studies)', 'Final assessment and certification (Live project based financial modeling test and issue a certificate to successful candidates)', 'Soft skills training (Interview preparation and resume writing)', 'Scheduling of interviews (Receive current job openings from recruiters and share resumes of certified students)', 'Hire the candidate (Recruiters feedback)', '', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'ONKJAU0.jpg', 'aaw.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(40) NOT NULL,
  `twitter` varchar(40) NOT NULL,
  `instagram` varchar(40) NOT NULL,
  `youtube` varchar(40) NOT NULL,
  `google` varchar(40) NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `about_title` text NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `address`, `phone`, `mobile`, `email`, `facebook`, `twitter`, `instagram`, `youtube`, `google`, `date`, `status`, `about_title`, `logo`) VALUES
(1, '<p>sample address</p>\r\n', '9468248979', '9468248979', 'info@example.com', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.google.com/', '2020-06-07 17:0', 'Active', 'Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', 'aas.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_query`
--

CREATE TABLE `tbl_contact_query` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact_query`
--

INSERT INTO `tbl_contact_query` (`id`, `fname`, `lname`, `email`, `mobile`, `message`, `isDeleted`, `status`, `date`) VALUES
(1, 'aa', '', 'amitaajamit@gmail.com', 'aa', 'aa', 0, 'Active', '2020-01-03 05:33:03'),
(2, 'adsf', '', 'amitaajamit@gmail.com', '0901 554 8', 'sd', 0, 'Active', '2020-01-03 05:33:57'),
(3, 'adsf', '', 'amitaajamit@gmail.com', '0901 554 8', 'sd', 0, 'Active', '2020-01-03 05:34:52'),
(4, 'adsf', '', 'amitaajamit@gmail.com', '0901 554 8', 'sd', 0, 'Active', '2020-01-03 05:35:06'),
(5, 'adsf', '', 'amitaajamit@gmail.com', '0901 554 8', 'sd', 0, 'Active', '2020-01-03 05:35:14'),
(6, 'asd', '', 'amitaajamit@gmail.com', '0901 554 8', 'asd', 0, 'Active', '2020-01-03 05:36:51'),
(7, 'asdf', '', 'amitaajamit@gmail.com', '0901 554 8', 'asdasd', 0, 'Active', '2020-01-03 05:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat2_id` int(11) NOT NULL,
  `c_title` varchar(150) NOT NULL,
  `c_short_desc` text NOT NULL,
  `c_points` text NOT NULL,
  `c_image` varchar(100) NOT NULL,
  `c_video` varchar(100) DEFAULT NULL,
  `c_overview` text NOT NULL,
  `c_keyfeature` text NOT NULL,
  `c_overvideo` varchar(100) DEFAULT NULL,
  `c_description` text NOT NULL,
  `c_desimage` varchar(100) NOT NULL,
  `c_benifit_des` text NOT NULL,
  `c_syllabus` text NOT NULL,
  `c_syllabus_doc` varchar(150) NOT NULL,
  `c_faqs` text NOT NULL,
  `c_icon_image` varchar(125) NOT NULL,
  `c_cert_img` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `cat_id`, `subcat_id`, `subcat2_id`, `c_title`, `c_short_desc`, `c_points`, `c_image`, `c_video`, `c_overview`, `c_keyfeature`, `c_overvideo`, `c_description`, `c_desimage`, `c_benifit_des`, `c_syllabus`, `c_syllabus_doc`, `c_faqs`, `c_icon_image`, `c_cert_img`, `status`, `isDeleted`, `date_created`, `date_modified`) VALUES
(1, 1, 1, 1, 'PMP® Plus', '         Do you want to maintain your PMP certification and earn 60 PDUs? Simplilearn’s PMP+ bundle will take care of that by providing you with the option of taking your pick from 6 courses which are Project Management, ITIL, Lean Six Sigma Green Belt, PMI-RMP, Microsoft Project, and Agile Scrum Master.\r\n', '      <li> Work breakdown structure </li>\r\n                        <li> Resource allocation </li>\r\n                         <li> Gantt charts </li>', 'banner2.png', '', 'The course covers new trends, emerging practices, tailoring considerations, and core competencies required of a Project Management professional. Placing a greater emphasis on strategic and business knowledge, this course also includes a new section on the role of the project manager in both large and small companies.', '<div class=\"col-sm-6\">\r\n                 	<ul>\r\n                    	<li> Guidewire Configuration Fundamentals </li>\r\n                        <li> Guidewire Policy Centre version 10 </li>\r\n                        <li> Guidewire Billing Centre version 10 </li>\r\n                        <li> 8 industry case studies, 20 industry-based business scenarios </li>\r\n                        <li> 100% Money back guarantee</li>\r\n                    </ul>\r\n                 </div>\r\n                 <div class=\"col-sm-6\">\r\n                 	<ul>\r\n                    	<li> Guidewire Integration Fundamentals </li>\r\n                        <li> Guidewire Claim Centre version 10 </li>\r\n                        <li> 30hrs of high-quality e-learning content </li>\r\n                        <li> Guidewire Training App (Contact Manager) – For Students hands on sessions </li>\r\n                        <li> Free Online Demo </li>\r\n                    </ul>\r\n                 </div>', '', '<h5>Eligibility</h5>\r\n                <p>In the Guidewire Online training, we can customize the training as per the need of the participants.</p>\r\n                \r\n                <h5>Pre-requisites</h5>\r\n                <p>You should have a secondary degree (i.e. high school diploma, associate’s degree or the global equivalent) with 7,500 hours leading and directing projects along with 35 hours of project management education. OR...</p>\r\n                \r\n                <p>We include Technical and Functional components in the training.</p>\r\n                \r\n                <h4>Technical Part Includes:</h4>\r\n                <span>1. Configuration Fundamentals</span>\r\n                <span>2. Integration Fundamentals </span>\r\n                <div class=\"clearfix\"></div>\r\n                <p>These technicalities are required to make customization as per Client requirements.</p>\r\n                <p>Since Guidewire has 80% of the functionality in Out of the box version itself, so the technical feature help you understand all the existing functionality supported by Guidewire modules.</p>\r\n                \r\n                 <h4>Functional Discussion:</h4>\r\n                  <span> 1 .Will Include Policy Centre business use cases.</span>\r\n                <span>2. Will Include Claim Centre business use cases. </span>\r\n                <span>3. Will Include Billing Centre business use cases. </span>\r\n                 <p>Just knowing the technical knowledge to make the necessary changes will not suffice the requirement to be productive on Guidewire project. You need to have an understanding of Property and Casualty insurance, thus will make you acquainted with the business processes using the Guidewire modules vanilla version. Default Guidewire software provided features.</p>\r\n               ', 'technical-architecture.jpg', 'The globally recognized PMP® certification can help you land lucrative roles in IT, manufacturing, finance, healthcare, and other exciting industries. Certified PMP®\'s drive better project performance and are often rewarded with substantial pay raises as shown below.', '<div class=\"panel panel-default\">\r\n    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n        <h3 class=\"pull-right\">Preview</h3>\r\n        <h4 class=\"panel-title\">                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">                         <i class=\"accordion_icon fa fa-plus\"></i> Lesson 0 :Intro to PolicyCentre                         </a>                      </h4> </div>\r\n    <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n        <div class=\"panel-body\">\r\n            <div class=\"panel panel-default\">\r\n                <div class=\"panel-heading\" role=\"tab\" id=\"headingtwo\">\r\n                    <h3 class=\"pull-right\">Preview</h3>\r\n                    <h4 class=\"panel-title\">                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsetwo\" aria-expanded=\"true\" aria-controls=\"collapsetwo\">                        <i class=\"accordion_icon fa fa-plus\"></i>  Lesson 01 :Intro to PolicyCentre                         </a>                      </h4> </div>\r\n                <div id=\"collapsetwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingtwo\">\r\n                    <div class=\"panel-body\">\r\n                        <ul>\r\n                            <li> 1. The PolicyCentre User Interface</li>\r\n                            <li> 2. The BillingCenterUser Interface </li>\r\n                            <li> 3 .The Billing Process</li>\r\n                            <li> 4 .User Interaction with BillingCenter </li>\r\n                            <li> 5 .Accounts </li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"panel panel-default\">\r\n                <div class=\"panel-heading\" role=\"tab\" id=\"headingthree\">\r\n                    <h3 class=\"pull-right\">Preview</h3>\r\n                    <h4 class=\"panel-title\">                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsethree\" aria-expanded=\"true\" aria-controls=\"collapsethree\">                        <i class=\"accordion_icon fa fa-plus\"></i>Lesson 02 :Billing Instruction                         </a>                      </h4> </div>\r\n                <div id=\"collapsethree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingthree\">\r\n                    <div class=\"panel-body\">\r\n                        <ul>\r\n                            <li> The PolicyCentre User Interface</li>\r\n                            <li> How Charges Are Invoiced </li>\r\n                            <li> Invoicing Life Cycle </li>\r\n                            <li> Payments </li>\r\n                            <li> Payment Corrections and Credit Distributions </li>\r\n                            <li> Producers </li>\r\n                            <li> Commissions and Producer Maintenance </li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"panel panel-default\">\r\n                <div class=\"panel-heading\" role=\"tab\" id=\"headingfour\">\r\n                    <h3 class=\"pull-right\">Preview</h3>\r\n                    <h4 class=\"panel-title\">                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsefour\" aria-expanded=\"true\" aria-controls=\"collapsefour\">                         <i class=\"accordion_icon fa fa-plus\"></i>Lesson 03 :Billing Instruction                         </a>                      </h4> </div>\r\n                <div id=\"collapsefour\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingfour\">\r\n                    <div class=\"panel-body\">\r\n                        <ul>\r\n                            <li> 1. Disbursements</li>\r\n                            <li> 2. Delinquency </li>\r\n                            <li> 3 .Trouble Tickets and Activities </li>\r\n                            <li> 4 .Security </li>\r\n                            <li> 5 .Configuring BillingCenter </li>\r\n                            <li> 6 .Introduction to Agency Bill</li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"panel panel-default\">\r\n                <div class=\"panel-heading\" role=\"tab\" id=\"headingfive\">\r\n                    <h3 class=\"pull-right\">Preview</h3>\r\n                    <h4 class=\"panel-title\">                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsefive\" aria-expanded=\"true\" aria-controls=\"collapsefive\">                        <i class=\"accordion_icon fa fa-plus\"></i>Lesson 04 :Billing Instruction                         </a>                      </h4> </div>\r\n                <div id=\"collapsefive\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingfive\">\r\n                    <div class=\"panel-body\">\r\n                        <ul>\r\n                            <li>1. Gosu programming Intro</li>\r\n                            <li>2 .Intro to Arrays</li>\r\n                            <li>3 .Business Rules</li>\r\n                            <li> 4.PCF Methods</li>\r\n                            <li> 5.Enhancements</li>\r\n                            <li>6 .Script Parameters</li>\r\n                            <li>7 .Entity Names</li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"panel panel-default\">\r\n                <div class=\"panel-heading\" role=\"tab\" id=\"headingsix\">\r\n                    <h3 class=\"pull-right\">Preview</h3>\r\n                    <h4 class=\"panel-title\">                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsesix\" aria-expanded=\"true\" aria-controls=\"collapsesix\">                         <i class=\"accordion_icon fa fa-plus\"></i>Lesson 05 :Billing Instruction                        </a>                      </h4> </div>\r\n                <div id=\"collapsesix\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingsix\">\r\n                    <div class=\"panel-body\">\r\n                        <ul>\r\n                            <ul>\r\n                                <li> 1 . Agency Bill Cycles and Account Current</li>\r\n                                <li> 2 .Account Current Promises and Payments </li>\r\n                            </ul>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', '', '<div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse1\">About Guidewire Software and P&C Insurance</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse1\" class=\"panel-collapse collapse\">\r\n               <p>Guidewire Software Inc., commonly Guidewire, is a software publisher based in Foster City, California. It offers core back-end software for property and casualty (P&C) insurance carriers in the U.S. and worldwide, as well as the Guidewire Live suite of online analytics services for P&C insurers. They are a recurring revenue software company as they sell term licenses. Its three main software products are Claim Center, Policy Center, and Billing Center, each servicing a major component of a P&C insurance carrier. There are a number of add-on modules, as well as an increasing number of value-added online services provided via Guidewire Live. Guidewire develops the Gosu programming language, it released as open source in 2010</p>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      			<div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse2\">What\'s in Guidewire Insurance Suite ?</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse2\" class=\"panel-collapse collapse\">\r\n               <p>Guidewire InsuranceSuite is a proven solution that has helped insurers worldwide significantly enrich customer and agent/broker relationships while simultaneously growing profitably and enabling agile responses to market threats and opportunities. InsuranceSuite provides a complete set of systems to support your core operations—underwriting, policy administration, billing, and claims management—to deliver the technology you need to successfully and continually advance your products, processes, and customer relationships. InsuranceSuite’s comprehensive components are built on a common platform that covers the entire insurance lifecycle while providing the deep functionality required for you to adapt and succeed in a time of rapid industry change.</p>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      \r\n      <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse14\"> InsuranceSuite Design Principles </a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse14\" class=\"panel-collapse collapse\">\r\n               <p>Breadth and Depth We provide applications covering the breadth of the P&C insurance lifecycle and the richness of innovative functionality, including embedded analytics like geolocation risk assessment for underwriters, a comprehensive customer view that ensures that you have a single customer record, and Service Tiers, which enable you to deliver differentiated service to your different customer segments.</p>\r\n\r\n                                            <p>One-Mind Design Our development teams work together to ensure our technology works in a unified manner. We maximize reuse to reduce the work you have to put in, and free you up to focus on innovation—with things like SOLR search that is leveraged across the platform, shared data elements, or the many pre-built integrations between products. This not only reduces the effort for your IT staff; it also frees you from having to worry about product compatibility and integrations.</p>\r\n\r\n                                            <p>User Journeys We look at our products from the end user’s perspective. Rather than having products designed with siloed views focused only on isolated transactions, we design solutions focused on the full user experience. This enables insurers to deliver an omnichannel experience for policyholders and automate agent interactions. </p>\r\n\r\n                                            <p> Flexible and Evolving “Flexibility” means that our customers can adapt the system according to their specific needs and that they can support a wide spectrum of business operations —whether it’s business rules and logic in the core or branding in the portals. This also means flexibility for deployment by region, line of business, and functional area. “Evolving” refers to the responsibility we have to continually update our technology to deliver value in future versions and ensure that customers have new opportunities to adapt and succeed.</p>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      		\r\n            <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse15\"> At the Core of Guidewire Insurance Platform !!!</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse15\" class=\"panel-collapse collapse\">\r\n               <p> <p>At Guidewire we are always working with our customers, partners, industry analysts, and colleagues to understand how current technology and market trends are impacting the insurance world, and how we can evolve our product offerings and enable insurers to leverage technology to improve all facets of their operations.</p>\r\n               <p>Our customers are looking for solutions that enable them to accomplish many things:</p>\r\n               <ul><li>Tailored products and services that can continually evolve to ensure that insurers remain competitive in the marketplace</li><li>Automated processes and workflows that support straight-through processing, operational efficiencies, and self-service capabilities</li>\r\n <li>Proactive measures to improve upon catastrophe management, fraud prevention, recovery management, and other critical areas across their organization</li></ul><p>Insurers are also looking to take advantage of third-party data sources and complex analytic tools to improve decision making across their organization.</p><p>And, insurers also want to offer streamlined digital experiences to both internal and external constituents across the insurance life-cycle in order to create efficiencies and offer unsurpassed customer service.</p></p>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      \r\n      <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse16\">  Why Get a Guidewire Certification?</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse16\" class=\"panel-collapse collapse\">\r\n               <p>Guidewire certification will ensure you a jump in your career and mandate your career growth. This will help you to get acquainted with the Insurance domain and get hands on with the leading flagship software implementation GUIDEWIRE. Certification will make it certain that you are qualified to work on any given Insurance domain primarily Property and casualty insurance..</p>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      			<div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse6\">  Why Get a Guidewire Certification? </a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse6\" class=\"panel-collapse collapse\">\r\n               <p>Guidewire certification will ensure you a jump in your career and mandate your career growth. This will help you to get acquainted with the Insurance domain and get hands on with the leading flagship software implementation GUIDEWIRE. Certification will make it certain that you are qualified to work on any given Insurance domain primarily Property and casualty insurance.</p>\r\n\r\n                                            <p>Moreover Guidewire has been implemented on 350 Global insurance companies and you have good chance to work with any one of them. Either you can appear for you chances to be working with these insurance as a Business Analyst or you can work for many IT companies which are working on the implementation for these 350 global insurance players.</p>\r\n\r\n                                            <p>We will be covering all the basic fundamentals required for your Guidewire Certification. Say all the basic Screens and database configuration fundamentals, all the Data Model changes and making UI changes. Will cover all the Integration fundamentals, covering all the industry standard technologies while communication between different applications, like Web Service Producing and consuming both, or asynchronous messaging or Batch Processes.</p>\r\n              </div>\r\n        </div>\r\n      </div>		\r\n			\r\n                 <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse7\">  Guidewire Core Operations</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse7\" class=\"panel-collapse collapse\">\r\n               <p>InsuranceSuite provides a complete set of applications to support the insurance lifecycle—from underwriting, rating, and policy administration to reinsurance, billing, and claims management to customer contact data management.</p>\r\n <p>Underwriting and Policy Administration</p>\r\n<p><strong>Billing and Receivables Management</strong></p>\r\n       <ul>\r\n           <li>Empower business users to enhance customer service: User-friendly Account and Policy summary screens, new Charge Invoicing capabilities, and seamless integration between BillingCenter and Guidewire Account Management Portal™ for Policyholders to give policyholders anytime access to their billing information</li>\r\n <li>Improve workflows and optimize operations: Integrated Payment between BillingCenter and PolicyCenter to enable both billing teams and underwriters</li>\r\n<li>Facilitate sound decision-making: Integration between BillingCenter and DataHub™ and InfoCenter™ delivers transactional and aggregate data marts for self-service BI</li>\r\n<li>Reduce IT workloads: Business-friendly configuration to reduce IT requests, improved batch processing, and archiving with Read-Only Restore</li>\r\n </ul>\r\n      <p><strong>Claims Management</strong></p>\r\n\r\n     <ul>                                   \r\n<li>Increase operational efficiency: Streamline and automate processes across the claims lifecycle</li>\r\n <li>Reduce loss costs: Free adjusters to focus on higher-value activities and implement quantifiable loss-cost improvements</li>\r\n<li>Strengthen focus on customers: From a dynamic, responsive first claim entry process to account special handling and mobile access</li>\r\n</ul>\r\n<p><strong>Underwriting Management System PAS</strong></p>\r\n   <ul>\r\nli>Be responsive to the market: Flexible definition of products and processes to seize opportunities</li>\r\n<li>Increase efficiency: Automated support for straight-through processing, work assignment, and other tasks</li>\r\n <li>Improve underwriting excellence: Consistent application of complex guidelines for low-touch or no-touch underwriting</li>\r\n</ul>\r\n <p><strong>Billing and Receivable Managements</strong></p>\r\n<ul>\r\n<li>Empower business users to enhance customer service: User-friendly Account and Policy summary screens, new Charge Invoicing capabilities, and seamless integration between BillingCenter and Guidewire Account Management Portal™ for Policyholders to give policyholders anytime access to their billing information</li>\r\n<li>Improve workflows and optimize operations: Integrated Payment between BillingCenter and PolicyCenter to enable both billing teams and underwriters</li>\r\n<li>Facilitate sound decision-making: Integration between BillingCenter and DataHub™ and InfoCenter™ delivers transactional and aggregate data marts for self-service BI</li>\r\n<li>Reduce IT workloads: Business-friendly configuration to reduce IT requests, improved batch processing, and archiving with Read-Only Restore</li>\r\n </ul> \r\n              \r\n              \r\n              </div>\r\n        </div>\r\n      </div>\r\n      			<div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse8\">Guidewire Certifications?</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse8\" class=\"panel-collapse collapse\">\r\n               <p>Guidewire Certifications:</p>\r\n <ol>\r\n<li>Fundamentals Certification – This is must for all the people working on Guidewire.</li>\r\n<li>Specialist Certification – This is for module specific. Be it Policy Center, Claim Center or Billing Center.</li>\r\n<li>Trainers Certification – This is to work as a Certified Guidewire trainer role.</li>\r\n </ol>\r\n         </div>\r\n        </div>\r\n      </div>\r\n        \r\n         <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse9\"> Guidewire Course Objective</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse9\" class=\"panel-collapse collapse\">\r\n               <p>Course objectives would be:</p>\r\n<ol>\r\n<li>Configuration Fundamentals:\r\n <ol>\r\n<li>Data Model changes.</li>\r\n<li>UI Architecture</li>\r\n<li>Atomic widgets and container widgets</li>\r\n<li>Locations Group</li>\r\n<li>Business Rules</li>\r\n</ol>\r\n</li>\r\n <li>Integration Fundamentals:\r\n<ol>\r\n <li>Integration Architecture.</li>\r\n<li>Gosu programming basics</li>\r\n<li>Gosu queries.</li>\r\n<li>Web Services Consumption and Production.</li>\r\n<li>Messaging</li>\r\n<li>Batch Processes.</li>\r\n </ol>\r\n </li>\r\n</ol>\r\n              </div>\r\n        </div>\r\n      </div>\r\n      			<div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse10\">Guidewire Implementation Team</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse10\" class=\"panel-collapse collapse\">\r\n                <ul>\r\n <li>Business architect\r\n <ul>\r\n<li>Writes business requirements documents</li>\r\n</ul>\r\n</li>\r\n<li>Configuration developer\r\n<ul>\r\n<li>Configure product data model, user interface, and business logic</li>\r\n </ul>\r\n </li>\r\n<li>Integration developer\r\n  <ul>\r\n <li>Create integration points to external systems to share data with Guidewire application</li>\r\n</ul>\r\n</li>\r\n<li>Reporting developer\r\n <ul>\r\n<li>Develops data warehouses and reports</li>\r\n</ul>\r\n </li>\r\n<li>Data migration developer\r\n<ul>\r\n <li>Migrates data from legacy system to Guidewire application</li>\r\n </ul>\r\n</li>\r\n</ul>\r\n              </div>\r\n        </div>\r\n      </div>\r\n          \r\n            <div class=\"panel-group\">\r\n            <div class=\"panel panel-default\">\r\n              <div class=\"panel-heading\">\r\n                <h4 class=\"panel-title\">\r\n                  <a data-toggle=\"collapse\" href=\"#collapse11\"> Guidewire Documentation?</a>\r\n                  <a href=\"#\" class=\"pull-right\"><i class=\"fa fa-angle-down rotate-icon\"></i></a>\r\n                </h4>\r\n              </div>\r\n              <div id=\"collapse11\" class=\"panel-collapse collapse\">\r\n                 <ul>\r\n <li>Guidewire Integration Guide\r\n<ul>\r\n<li>For questions specific to integration mechanisms</li>\r\n </ul>\r\n</li>\r\n<li>Guidewire Gosu Reference\r\n<ul>\r\n<li>For questions specific to Gosu</li>\r\n</ul>\r\n</li>\r\n<li>Guidewire Rules Guide\r\n <ul>\r\n<li>Useful for integration points that require rules, especially messaging</li>\r\n</ul>\r\n</li>\r\n<li>Guidewire Configuration Guide\r\n <ul>\r\n <li>Occasionally needed for some integration steps</li>\r\n<li>Also documents functionality of every Studio editor (including some that are exclusive to integration)</li>\r\n</ul>\r\n</li>\r\n<li>Generated documentation</li>\r\n</ul>\r\n\r\n              </div>\r\n        </div>\r\n      </div>', 'pmp-badge-1.png', '1.png', 'Active', 0, '2020-01-03 06:59:43', '2020-01-13 13:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_category`
--

CREATE TABLE `tbl_course_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_category`
--

INSERT INTO `tbl_course_category` (`id`, `cat_name`, `url`, `isDeleted`, `date_created`, `date_modified`, `status`) VALUES
(1, 'Advanced Valuations and Financial Modeling (Comprehensive)', 'advanced-valuations-and-financial-modeling-comprehensive', 0, '2020-03-02 09:51:49', '2020-03-02 09:51:49', 'Active'),
(2, 'Advanced Valuations and Financial Modeling (Big4 firms)', 'advanced-valuations-and-financial-modeling-big4-firms', 0, '2020-03-02 09:52:17', '2020-03-02 09:52:17', 'Active'),
(3, 'Advanced excel and PowerPoint', 'advanced-excel-and-powerpoint', 0, '2020-03-02 09:52:46', '2020-03-02 09:52:46', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_subcategory`
--

CREATE TABLE `tbl_course_subcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(150) NOT NULL,
  `url` varchar(200) NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_subcategory2`
--

CREATE TABLE `tbl_course_subcategory2` (
  `id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat2_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`id`, `designation`) VALUES
(1, 'Project Director'),
(2, 'Senior Project Manager'),
(3, 'Project Management Officer (PMO)'),
(4, 'Team Leads/Team Managers');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examcerti`
--

CREATE TABLE `tbl_examcerti` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat2_id` int(11) NOT NULL,
  `certi_name` varchar(150) NOT NULL,
  `work_exp` varchar(150) NOT NULL,
  `guide_edu` varchar(150) NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_examcerti`
--

INSERT INTO `tbl_examcerti` (`id`, `cat_id`, `subcat_id`, `subcat2_id`, `certi_name`, `work_exp`, `guide_edu`, `isDeleted`, `date_created`, `date_updated`, `status`) VALUES
(4, 1, 1, 1, 'Specialist – Guidewire Billing Centre Configuration', 'Hands on in Billing Centre changes', '20 hours', 0, '2020-01-03 13:00:47', '2020-01-03 13:00:47', 'Active'),
(5, 1, 1, 1, 'Specialist – Guidewire Billing Centre Integration', 'Hands on in Billing Centre changes', '20 hours', 0, '2020-01-03 13:01:22', '2020-01-03 13:01:22', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experts`
--

CREATE TABLE `tbl_experts` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tech` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_experts`
--

INSERT INTO `tbl_experts` (`id`, `image`, `title`, `tech`, `date`, `date_updated`, `status`, `isDeleted`) VALUES
(1, 'teammember11.png', 'Peter Spenser', 'Copywriter', '2020-06-08 09:39:57', '2020-06-08 09:39:57', 'Active', 0),
(2, 'teammember21.png', 'Angelina Johnson', 'SEO Specialist', '2020-06-08 09:43:41', '2020-06-08 09:43:41', 'Active', 0),
(3, 'teammember1.png', 'Philip Demarco', 'Senior Developer', '2020-06-08 09:49:32', '2020-06-08 09:49:32', 'Active', 0),
(4, 'teammember3.png', 'James Anderson', 'Senior Developer', '2020-06-08 09:49:57', '2020-06-08 09:49:57', 'Active', 0),
(5, 'services2.png', 'Local SEO', 'Claritas est etiam processus dynamicus, qui sequit', '2020-06-09 10:44:30', '2020-06-09 10:46:31', 'Inactive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fcategory`
--

CREATE TABLE `tbl_fcategory` (
  `id` int(11) NOT NULL,
  `fcatname` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fcategory`
--

INSERT INTO `tbl_fcategory` (`id`, `fcatname`, `date`, `status`) VALUES
(1, 'Roses', '2019-12-13 00:00:00', 'Active'),
(2, 'Flower', '2019-12-13 00:00:00', 'Active'),
(3, 'Lille Flower', '2019-12-13 00:00:00', 'Active'),
(4, 'Sunflower', '2019-12-13 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flower`
--

CREATE TABLE `tbl_flower` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flower`
--

INSERT INTO `tbl_flower` (`id`, `title`, `image`, `date`, `date_updated`, `isDeleted`, `cat_id`, `updatedBy`, `status`) VALUES
(2, 'Abuor', '1231.jpg', '2019-12-13 09:03:00', '2019-12-14 06:14:36', 0, 2, 1, 'Active'),
(3, 'Roses', '1231.jpg', '2019-12-13 09:21:22', '2019-12-14 06:14:07', 0, 1, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`, `description`, `date`, `date_updated`, `status`, `isDeleted`, `updatedBy`, `cat_id`) VALUES
(7, 'Test', 'otp1.jpg', '', '2019-12-11 13:09:23', '2019-12-11 13:20:51', 'Inactive', 1, 1, 1),
(8, 'Wedding Flower Decoration', 'all.jpg', '', '2019-12-11 13:11:32', '2019-12-16 07:31:25', 'Active', 0, 1, 3),
(9, 'Wedding Flower Decoration', 'all.jpg', '', '2019-12-11 13:20:22', '2019-12-16 13:40:36', 'Active', 0, 1, 1),
(10, 'Wedding Flower Decoration', 'all-for-you-400x400.jpg', '', '2019-12-11 13:21:02', '2019-12-16 07:30:15', 'Active', 0, 1, 1),
(11, 'Pre Wedding Functions', 'red-rose.jpg', '', '2019-12-16 07:32:24', '2019-12-16 07:32:24', 'Active', 0, 1, 2),
(12, 'Pre Wedding Functions', 'all-for-you-400x4001.jpg', '', '2019-12-16 07:32:54', '2019-12-16 07:32:54', 'Active', 0, 1, 2),
(13, 'Theme Events Decoration', 'mix-rose.jpg', '', '2019-12-16 07:33:42', '2019-12-16 07:33:42', 'Active', 0, 1, 3),
(14, 'Devotional Flower Decoration', 'yellow.jpg', '', '2019-12-16 07:34:32', '2019-12-16 07:34:32', 'Active', 0, 1, 5),
(15, 'Car Flower Decoration', 'beautiful-blue-orchids-500x500.jpg', '', '2019-12-16 07:35:16', '2019-12-16 07:35:16', 'Active', 0, 1, 6),
(16, 'Corporate Flower Decoration', 'Flowers-Bouquet-of-Red-and-Pink-Carnations-500x500.jpg', '', '2019-12-16 07:36:00', '2019-12-16 13:38:26', 'Active', 0, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gcategory`
--

CREATE TABLE `tbl_gcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gcategory`
--

INSERT INTO `tbl_gcategory` (`id`, `name`, `date`, `status`) VALUES
(1, 'Wedding Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(2, 'Pre Wedding Functions', '2019-12-11 00:00:00', 'Active'),
(3, 'Theme Events Decoration', '2019-12-11 00:00:00', 'Active'),
(4, 'Home Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(5, 'Devotional Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(6, 'Car Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(7, 'Corporate Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(8, 'Diwali Flower Decoration', '2019-12-11 00:00:00', 'Active'),
(9, 'Birthday Decoration', '2019-12-11 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gyan`
--

CREATE TABLE `tbl_gyan` (
  `id` int(11) NOT NULL,
  `slid_title1` varchar(200) NOT NULL,
  `slid_subtitle1` varchar(180) NOT NULL,
  `slid_img1` varchar(150) NOT NULL,
  `pro1_title` varchar(200) NOT NULL,
  `pro1_des` text NOT NULL,
  `pro1_url` varchar(100) NOT NULL,
  `pro1_images` varchar(100) NOT NULL,
  `pro2_title` varchar(100) NOT NULL,
  `pro2_des` text NOT NULL,
  `pro2_url` text NOT NULL,
  `pro2_images` varchar(100) NOT NULL,
  `pro3_title` varchar(150) NOT NULL,
  `pro3_des` text NOT NULL,
  `pro3_url` varchar(100) NOT NULL,
  `pro3_images` varchar(100) NOT NULL,
  `pdes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gyan`
--

INSERT INTO `tbl_gyan` (`id`, `slid_title1`, `slid_subtitle1`, `slid_img1`, `pro1_title`, `pro1_des`, `pro1_url`, `pro1_images`, `pro2_title`, `pro2_des`, `pro2_url`, `pro2_images`, `pro3_title`, `pro3_des`, `pro3_url`, `pro3_images`, `pdes`) VALUES
(1, 'Search Engine Optimization', '#Investigationes demonstraverunt lectores legere me lius quod saepius.', 'mac-book.png', 'Our Search Engine Optimization Core Services Include', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.', '#ORGANIC SEARCH', 'analysis.jpg', 'ON-PAGE SEO', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '41.png', 'LINK BUILDING', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.', 'Website Analysis', '6.png', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima qui nunc nobis videntur parum clari, fiant sollemnes in futurum legentis qui.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_page`
--

CREATE TABLE `tbl_home_page` (
  `id` int(11) NOT NULL,
  `sec1_title` varchar(200) NOT NULL,
  `sec1_des` text NOT NULL,
  `sec1_image` varchar(200) NOT NULL,
  `sec2_title` varchar(200) NOT NULL,
  `sec2_des` text NOT NULL,
  `sec2_image` varchar(200) NOT NULL,
  `sec3_title` varchar(200) NOT NULL,
  `sec3_des` text NOT NULL,
  `sec3_image` varchar(200) NOT NULL,
  `pro1_title` varchar(150) NOT NULL,
  `pro1_des` text NOT NULL,
  `pro1_image` varchar(150) NOT NULL,
  `pro2_title` varchar(150) NOT NULL,
  `pro2_des` text NOT NULL,
  `pro2_image` varchar(150) NOT NULL,
  `pro3_title` varchar(150) NOT NULL,
  `pro3_des` text NOT NULL,
  `pro3_image` varchar(150) NOT NULL,
  `pro4_title` varchar(150) NOT NULL,
  `pro4_des` text NOT NULL,
  `pro4_image` varchar(150) NOT NULL,
  `team_title` varchar(150) NOT NULL,
  `team_des` text NOT NULL,
  `team1_title` varchar(150) NOT NULL,
  `team1_des` text NOT NULL,
  `team2_title` varchar(150) NOT NULL,
  `team2_des` text NOT NULL,
  `team3_title` varchar(150) NOT NULL,
  `team3_des` text NOT NULL,
  `team4_title` varchar(150) NOT NULL,
  `team4_des` text NOT NULL,
  `team5_title` varchar(150) NOT NULL,
  `team5_des` text NOT NULL,
  `team6_title` varchar(150) NOT NULL,
  `team6_des` text NOT NULL,
  `sec1_url` varchar(100) NOT NULL,
  `sec2_url` varchar(100) NOT NULL,
  `sec3_url` varchar(100) NOT NULL,
  `pro1_url` varchar(100) NOT NULL,
  `pro2_url` varchar(100) NOT NULL,
  `pro3_url` varchar(100) NOT NULL,
  `sec3_des1` text NOT NULL,
  `sub4pro1_des` text NOT NULL,
  `sub6pro2_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_page`
--

INSERT INTO `tbl_home_page` (`id`, `sec1_title`, `sec1_des`, `sec1_image`, `sec2_title`, `sec2_des`, `sec2_image`, `sec3_title`, `sec3_des`, `sec3_image`, `pro1_title`, `pro1_des`, `pro1_image`, `pro2_title`, `pro2_des`, `pro2_image`, `pro3_title`, `pro3_des`, `pro3_image`, `pro4_title`, `pro4_des`, `pro4_image`, `team_title`, `team_des`, `team1_title`, `team1_des`, `team2_title`, `team2_des`, `team3_title`, `team3_des`, `team4_title`, `team4_des`, `team5_title`, `team5_des`, `team6_title`, `team6_des`, `sec1_url`, `sec2_url`, `sec3_url`, `pro1_url`, `pro2_url`, `pro3_url`, `sec3_des1`, `sub4pro1_des`, `sub6pro2_des`) VALUES
(1, 'About us', 'We believe that designing products and services in close partnership with our clients is the only way to have a real impact on their business.', 'bnr_03.jpg', 'Our Expereince', 'As one of the leading web design agencies in New York, we understand that every client has a unique set of requirements that can be in the form of either generating leads, increasing sales or boosting traffic.', '', 'Marketing Analysis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'bnr_02.jpg', 'Website Optimization', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore', '', '', ' <h4>DRIVING THOUSANDS OF</h4>\r\n <h2>Customers At <br> Your Doorsteps</h2>', '', '', '', 'bnr_01.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' <h4>DRIVING THOUSANDS OF</h4>\r\n <h2>Customers At <br> Your Doorsteps</h2>', 'We develop digital strategies products and services.', 'We have completed 150+ projects succesfully', 'Email Marketing', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore', ' <h4>EMPOWERING BUSINESSES THROUGH</h4> \r\n<h2>Creative, Strategic <br> & ROI Driven Solutions</h2>', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 13:21:32'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 13:38:52'),
(3, 9, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Amit Kumar\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 14:48:53'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 16:37:54'),
(5, 9, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Amit Kumar\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 16:55:15'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 16:59:44'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 17:11:50'),
(8, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 17:26:52'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-09 17:33:30'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-10 10:40:39'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-10 10:54:38'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-10 15:13:17'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-11 11:13:45'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-11 15:31:21'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-12 11:02:29'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-12 14:57:08'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-13 08:49:42'),
(18, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 10', '2019-12-13 11:45:25'),
(19, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 'Windows 10', '2019-12-14 10:29:42'),
(20, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 'Windows 10', '2019-12-16 11:55:30'),
(21, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-23 12:08:18'),
(22, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-26 12:22:37'),
(23, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-27 11:34:16'),
(24, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-27 11:35:26'),
(25, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-28 11:41:28'),
(26, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-30 12:03:29'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 71.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0', 'Windows 10', '2019-12-30 18:04:41'),
(28, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-31 11:50:42'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-02 11:29:56'),
(30, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '171.79.67.33', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-02 17:50:33'),
(31, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '122.161.64.65', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-03 11:59:20'),
(32, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '182.64.176.40', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-06 17:11:01'),
(33, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '182.68.58.191', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-07 11:29:50'),
(34, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '182.68.58.191', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-07 14:24:10'),
(35, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '182.68.113.8', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-08 12:10:46'),
(36, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '146.196.35.4', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-10 15:31:56'),
(37, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '122.161.217.252', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-10 16:54:54'),
(38, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '182.64.212.2', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-11 11:46:14'),
(39, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '117.99.175.109', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-13 18:49:31'),
(40, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-14 14:52:27'),
(41, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-20 18:47:48'),
(42, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-03 15:36:45'),
(43, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-25 16:52:55'),
(44, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-26 14:01:47'),
(45, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-27 10:30:50'),
(46, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-29 11:50:45'),
(47, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-29 11:50:46'),
(48, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-29 17:37:50'),
(49, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-03-02 10:20:42'),
(50, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-03-03 10:14:34'),
(51, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-03-03 17:36:02'),
(52, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-03-04 10:23:12'),
(53, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-05 10:41:19'),
(54, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-07 12:24:30'),
(55, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-09 12:20:28'),
(56, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-11 12:29:01'),
(57, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-11 22:44:55'),
(58, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-12 11:10:49'),
(59, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-05 15:47:59'),
(60, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-05 20:23:59'),
(61, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-06 10:45:13'),
(62, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-07 12:32:49'),
(63, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-07 20:38:18'),
(64, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-08 10:28:18'),
(65, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-08 20:45:49'),
(66, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-09 11:28:50'),
(67, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-09 20:11:50'),
(68, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-10 11:17:06'),
(69, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'Windows 10', '2020-06-10 11:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `ord_amt` float NOT NULL,
  `payment_status` enum('Unpaid','Paid','Pending') NOT NULL,
  `date` datetime NOT NULL,
  `pay_method` varchar(40) NOT NULL,
  `txn_id` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `gst` varchar(20) NOT NULL,
  `promo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'amitaajamit@gmail.com', 'G5nDrAHZfTcEq9W', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-09 10:19:43', NULL, NULL),
(2, 'amitaajamit@gmail.com', 'kTGn0XbmWJOSAzy', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-10 06:23:13', NULL, NULL),
(3, 'amitaajamit@gmail.com', '8JqIRkcL7V6FdBn', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-13 06:00:56', NULL, NULL),
(4, 'amitaajamit@gmail.com', 'Gz7fTXEH1FMALwa', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-13 06:03:29', NULL, NULL),
(5, 'amitaajamit@gmail.com', 'fMGglH5w7iB9bJv', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-13 06:03:36', NULL, NULL),
(6, 'amitaajamit@gmail.com', 'bvcez3OC2BrTwIS', 'Chrome 78.0.3904.108', '::1', 0, 1, '2019-12-13 06:03:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scategory`
--

CREATE TABLE `tbl_scategory` (
  `id` int(11) NOT NULL,
  `scatname` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_scategory`
--

INSERT INTO `tbl_scategory` (`id`, `scatname`, `date`, `status`) VALUES
(1, 'Wedding Flower Decoration', '2019-12-13 00:00:00', 'Active'),
(2, 'Pre Wedding Function', '2019-12-13 00:00:00', 'Active'),
(3, 'Themes Event Decoration', '2019-12-13 00:00:00', 'Active'),
(4, 'Home Flower Decoration', '2019-12-13 00:00:00', 'Active'),
(5, 'Car Flower Decoration', '2019-12-13 00:00:00', 'Active'),
(6, 'Corporate Flower Decoration', '2019-12-13 00:00:00', 'Active'),
(7, 'Diwali Flower Decoration', '2019-12-13 00:00:00', 'Active'),
(8, 'Birthday Flower Decoration', '2019-12-13 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tech` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `image`, `title`, `tech`, `date`, `date_updated`, `status`, `isDeleted`) VALUES
(1, 'services1.png', 'Search Engine Optimization', 'Lorem ipsum dolor sit amet, consectetuer adipiscin', '2020-06-09 10:40:09', '2020-06-09 10:48:15', 'Active', 0),
(2, 'services2.png', 'Local SEO', 'Claritas est etiam processus dynamicus, qui sequit', '2020-06-09 10:47:38', '2020-06-09 10:48:04', 'Active', 0),
(3, 'services3.png', 'Social Media Marketing', 'Investigationes demonstraverunt legere me lius quo', '2020-06-09 10:49:48', '2020-06-09 10:49:48', 'Active', 0),
(4, 'services4.png', 'Email Marketing', 'Nam liber tempor cum soluta nobis eleifend option ', '2020-06-09 10:50:24', '2020-06-09 10:50:24', 'Active', 0),
(5, 'services5.png', 'Pay Per Click Management', 'Eodem modo typi, qui nunc nobis videntur parum cla', '2020-06-09 10:50:57', '2020-06-09 10:50:57', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sev`
--

CREATE TABLE `tbl_sev` (
  `id` int(11) NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description1` text NOT NULL,
  `stitle` text NOT NULL,
  `description2` text NOT NULL,
  `sec2title` varchar(50) NOT NULL,
  `sec2description` text NOT NULL,
  `support` text NOT NULL,
  `Awesome` text NOT NULL,
  `Performance` text NOT NULL,
  `vision_title` varchar(50) NOT NULL,
  `vision_description` text NOT NULL,
  `clint_title` varchar(50) NOT NULL,
  `client_description` text NOT NULL,
  `client1` varchar(50) NOT NULL,
  `client2` varchar(50) NOT NULL,
  `client3` varchar(50) NOT NULL,
  `client4` varchar(50) NOT NULL,
  `titlesec3` text NOT NULL,
  `descriptionsec3` text NOT NULL,
  `client_subdescriptions1` text NOT NULL,
  `client_subdescription2` text NOT NULL,
  `client_descriptionq` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sev`
--

INSERT INTO `tbl_sev` (`id`, `ptitle`, `title`, `description1`, `stitle`, `description2`, `sec2title`, `sec2description`, `support`, `Awesome`, `Performance`, `vision_title`, `vision_description`, `clint_title`, `client_description`, `client1`, `client2`, `client3`, `client4`, `titlesec3`, `descriptionsec3`, `client_subdescriptions1`, `client_subdescription2`, `client_descriptionq`, `status`, `date_updated`) VALUES
(1, 'Our Services', 'Full Services of Our Digital Agency', 'Local Search Strategy', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna.', ' Maps Search', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum investigationes demonstraverunt.', 'Link Building & Content', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius per seacula quarta decima et quinta decima.', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum investigationes demonstraverunt.', ' Paid Search Advertising', ' Custom Website Design', 'Investigationes demonstraverunt lectores legere me', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna.', 'client1-hover.png', 'client2-hover.png', 'client3-hover.png', 'client4-hover.png', 'Our Product Based Services', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', '', '', ' Custom Email Design', 'Active', '2020-06-09 12:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE `tbl_sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(160) NOT NULL,
  `image` varchar(150) NOT NULL,
  `title_upper` varchar(200) NOT NULL,
  `title_bottom` varchar(200) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_modified` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `links` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `title`, `image`, `title_upper`, `title_bottom`, `status`, `date_modified`, `isDeleted`, `links`) VALUES
(1, 'Fincore School of Advanced Valuation and Financial Modeling', '14084.png', '', 'Experienced trainers , Customized courses for Big4 and KPOs, 100% Placement Guaranteed ', 'Active', '2020-03-07 08:50:10', 0, 'http://localhost/Fincore_Analytics/programs/advanced-valuations-and-financial-modeling-comprehensive'),
(2, 'Delivering Job-Ready Profesionals to recruiters by bridging the skill gap ', 'ONKJAU0.jpg', '', 'Provide extensive training on technical as well as soft skills', 'Active', '2020-03-07 08:49:11', 0, 'https://www.google.co.in/'),
(3, '100% Placement Guaranteed ', '1511872.jpg', '', 'Your success is our Guarrantee', 'Active', '2020-03-07 08:53:13', 0, 'http://localhost/Fincore_Analytics/Placements');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stplacement`
--

CREATE TABLE `tbl_stplacement` (
  `id` int(11) NOT NULL,
  `slid_title1` varchar(200) NOT NULL,
  `slid_subtitle1` varchar(180) NOT NULL,
  `slid_img1` varchar(150) NOT NULL,
  `slid_title2` varchar(200) NOT NULL,
  `slid_subtitle2` varchar(180) NOT NULL,
  `slid_img2` varchar(150) NOT NULL,
  `pdes` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `pi1` varchar(150) NOT NULL,
  `pi2` varchar(150) NOT NULL,
  `pi3` varchar(150) NOT NULL,
  `pi4` varchar(150) NOT NULL,
  `pi5` varchar(150) NOT NULL,
  `pi6` varchar(150) NOT NULL,
  `pi7` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stplacement`
--

INSERT INTO `tbl_stplacement` (`id`, `slid_title1`, `slid_subtitle1`, `slid_img1`, `slid_title2`, `slid_subtitle2`, `slid_img2`, `pdes`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `pi1`, `pi2`, `pi3`, `pi4`, `pi5`, `pi6`, `pi7`) VALUES
(1, 'Conversation Optimaization', 'Claritas Etiam Processus', 'description-mac.png', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option.', 'Challenge', 'solutions.jpg', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.', 'Consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.\r\n\r\n  ', 'Design the course content (Design the course content in-line with required skills and get the confirmation from the recruiter)', 'The Result of Our Work', '', 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.', '', '', 'product-solution.png', 'results-ver2.png', '01.png', '02.png', '03.png', 'consulting.png', 'aaw.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_syllabus`
--

CREATE TABLE `tbl_syllabus` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_modified` datetime NOT NULL,
  `date` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_syllabus`
--

INSERT INTO `tbl_syllabus` (`id`, `title`, `content`, `status`, `date_modified`, `date`, `isDeleted`) VALUES
(3, 'Advanced MS Excel functionsss', '<ol>\r\n	<li>VLOOKUP, Hlookup, Offset, Index, Match&nbsp;</li>\r\n	<li>Choose, Sumifs, Sumproduct, Ifs, Array, AND, OR</li>\r\n	<li>Data table, Data validation, Goal seek&nbsp;</li>\r\n	<li>Conditional formatting, Cell referencing, Name manager</li>\r\n	<li>Advanced Charts - Bridge, Waterfall</li>\r\n	<li>NPV, IRR, PMT and IPMT, CoVar, Var</li>\r\n	<li>Concatenate, CELL, LEFT, MID and RIGHT&nbsp;</li>\r\n	<li>&nbsp;Excel shortcuts, Freeze function, Filters</li>\r\n</ol>\r\n', 'Active', '2020-03-12 08:02:57', '2020-03-07 00:00:00', 0),
(4, 'Financial statement analysis', '<ol>\r\n	<li>Understanding of each line item of IS, BS, and CF.&nbsp;</li>\r\n	<li>Three statement linking</li>\r\n	<li>Ratio analysis (leverage, working capital, return, margins, DuPont, basic/Diluted EPS, industry specific ratios),&nbsp;</li>\r\n	<li>Nature of BS items: Operating, Working capital, Net debt, and Surplus assets/liabilities,&nbsp;</li>\r\n	<li>Key financial concepts: Minority interest, Deferred tax, Pension liabilities, Due to/from related parties, Direct costs/indirect expenses, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 11:58:22', '2020-03-07 00:00:00', 0),
(5, 'Income approach valuation', '<ol>\r\n	<li>&nbsp;Different types of valuation methods and application&nbsp;</li>\r\n	<li>Income approach: DCF (FCFF, FCFE), and Dividend discount model</li>\r\n	<li>Cost of capital: CoE, CoD, and WACC analysis,&nbsp;</li>\r\n	<li>Other valuation concepts: EV, Levered/Unlevered beta, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 11:59:20', '2020-03-07 00:00:00', 0),
(6, 'Market approach valuation', '<ol>\r\n	<li>Peer search and transaction analysis</li>\r\n	<li>Peer benchmarking</li>\r\n	<li>Relative valuation: Multiple analysis (LTM and forward multiples)</li>\r\n	<li>Other relative valuation concepts: , DLOC, DLOM, etc.</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:22:57', '2020-03-07 00:00:00', 0),
(7, 'Financial Modeling approach and best practices', '<ol>\r\n	<li>&nbsp;Financial Modelling approach and best practices&nbsp;</li>\r\n	<li>&nbsp;Setting-up a financial model template (cover, input, assumptions, financial statements, ratio analysis, valuation, output)</li>\r\n	<li>Making of error free model: Application of checks and controls in the template</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:24:47', '2020-03-07 00:00:00', 0),
(8, 'Financial Modeling - Historical statement analysis', '<ol>\r\n	<li>Linking of historical statements&nbsp;</li>\r\n	<li>&nbsp;Deriving historical ratios and growth rate</li>\r\n	<li>&nbsp;Setting up of a working financial model with complete linking</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:26:58', '2020-03-07 00:00:00', 0),
(9, 'Financial Modeling - Projections of financial statements', '<ol>\r\n	<li>Financial statements projections</li>\r\n	<li>Preparation of various schedules: Revenue model, cost model, working capital, financial structure</li>\r\n	<li>Matching of balance sheet</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:27:38', '2020-03-07 00:00:00', 0),
(10, 'Financial Modeling - DCF and Market approach Valuation', '<ol>\r\n	<li>DCF valuation and WACC analysis</li>\r\n	<li>Market approach valuation</li>\r\n	<li>Analysis and comparison of valuation with market</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:28:21', '2020-03-07 00:00:00', 0),
(11, 'Report writing (Equity research)', '<ol>\r\n	<li>&nbsp;Report writing- Best practices</li>\r\n	<li>Writing of different sections such as Financial Analysis, Company Overview, Industry Overview, Valuation Summary and Executive Summary</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:29:26', '2020-03-07 00:00:00', 0),
(12, 'Real-life project based case studies and test', '<ol>\r\n	<li>Concepts check based on real-life case study</li>\r\n	<li>&nbsp;Project based case study test 1 (mid-term) and final test</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:29:55', '2020-03-07 00:00:00', 0),
(13, 'Preparation for the Job interview', '<ol>\r\n	<li>Creation of impactful resume</li>\r\n	<li>Email writing</li>\r\n	<li>Technical interview and feedback</li>\r\n</ol>\r\n', 'Active', '2020-03-07 12:30:27', '2020-03-07 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_modified` datetime NOT NULL,
  `date` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `title`, `image`, `author`, `content`, `designation`, `status`, `date_modified`, `date`, `isDeleted`) VALUES
(3, '', 'avatar.png', 'Robin Hawks', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.\r\n', 'CREATIVE DESIGNER', 'Active', '2020-06-09 09:02:19', '2019-12-16 00:00:00', 0),
(4, '', 'avatar.png', 'Eric Hathaways', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.\r\n\r\n\r\n', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-09 09:02:12', '2019-12-16 00:00:00', 0),
(5, '', 'avatar.png', 'Eric Hathaway', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt.', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-09 09:01:59', '2019-12-23 00:00:00', 0),
(6, '', 'avatar.png', 'Eric Hathaway', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-09 09:02:06', '2019-12-23 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_modified` datetime NOT NULL,
  `date` datetime NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `title`, `image`, `author`, `content`, `designation`, `status`, `date_modified`, `date`, `isDeleted`) VALUES
(3, '', 'user.png', 'Robin Hawks', 'Great work I got a lot more than what I ordered, they are very leg&iacute;timas and catchy. I went for one of them for my brand but is always better to have more options.\r\n', 'CREATIVE DESIGNER', 'Active', '2020-06-06 10:18:37', '2019-12-16 00:00:00', 0),
(4, '', 'user.png', 'Eric Hathaways', 'Great work I got a lot more than what I ordered, they are very legítimas and catchy. I went for one of them for my brand but is always better to have more options.\r\n\r\n\r\n', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-09 08:00:07', '2019-12-16 00:00:00', 0),
(5, '', 'user.png', 'Eric Hathaway', 'Great work I got a lot more than what I ordered, they are very legítimas and catchy. I went for one of them for my brand but is always better to have more options.\r\n\r\n<p> </p>\r\n', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-06 10:18:28', '2019-12-23 00:00:00', 0),
(6, '', 'user.png', 'Eric Hathaway', 'Great work I got a lot more than what I ordered, they are very legítimas and catchy. I went for one of them for my brand but is always better to have more option\r\n', 'Process Improvement Consultant at Avanza CS', 'Active', '2020-06-06 10:18:33', '2019-12-23 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training_options`
--

CREATE TABLE `tbl_training_options` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat2_id` int(11) NOT NULL,
  `c_title` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  `c_description` text NOT NULL,
  `c_price` float NOT NULL,
  `isDeleted` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `feature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_training_options`
--

INSERT INTO `tbl_training_options` (`id`, `cat_id`, `subcat_id`, `subcat2_id`, `c_title`, `image`, `c_description`, `c_price`, `isDeleted`, `date_created`, `date_updated`, `status`, `feature`) VALUES
(1, 1, 0, 0, 'Advanced Valuations and Financial Modeling (Comprehensive)', '11.jpg', '<p>Financial Modeling and strong technical knowledge are very important for career development for finance professionals in the field of investment banking, equity research, and corporate finance. Fincore has specifically designed this course to strengthen your technical knowledge and develop strong financial modelling skill which would make you Job-Ready for any valuation/equity research role. The trainer for this course has more than 10+ years of experience in valuation and financial modeling.</p>\r\n\r\n<p>Target audience: BCom/CA students, MBA graduates, The CFA&reg; charterholders and CFA pursuing students, Experienced finance professionals.</p>\r\n', 0, 0, '2020-03-02 12:38:46', '2020-03-05 08:53:44', 'Active', '               <ul>\r\n            <li>Get Trained by Industry experts and to make you Job Ready</li>\r\n            <li>90+ hrs training program (3 months)</li>\r\n            <li> Live projects to give you a real-life industry experience</li>\r\n            <li>Training materials</li>\r\n            <li>Certification on successful completion</li>\r\n            <li>< Batches available in both full time and weekend modes</li>\r\n        </ul>'),
(2, 2, 0, 0, 'Advanced Valuations and Financial Modeling (Big4 firms)', '12824.jpg', '<p>nyunyu</p>\r\n', 0, 0, '2020-03-02 13:04:08', '2020-03-04 07:19:37', 'Active', 'nthn'),
(3, 3, 0, 0, 'Advanced excel and PowerPoint', '21.jpg', '<p>MS Excel is one of the most powerful and easy to use tools when it comes to playing with numbers. MS Excel is very important to develop expertise in the financial modeling as it improves your productivity as well as efficiency &amp; accuracy. While MS PowerPoint is core skill for creating impactful presentation/report for firms. We at Fincore train students/professionals in a proper, structured manner with lot of real-life examples.</p>\r\n', 0, 0, '2020-03-04 06:38:54', '2020-03-04 07:42:12', 'Active', '               <ul>\r\n            <li>Get Trained by MS Excel/PowerPoint experts </li>\r\n            <li>30+ hrs. training program (1 month)</li>\r\n            <li> Real-life examples to explain each excel function</li>\r\n            <li>Training materials</li>\r\n            <li>Certification on successful completion</li>\r\n            <li>< Batches available in both full time and weekend modes</li>\r\n        </ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$q4G47CtpUBNXTGMoejjqFeoXs58N8dbbgLTJZaHlWcYUrqywFGdKy', 'System Administrator', '9560326000', 1, 0, 0, '2015-07-01 18:56:49', 1, '2019-12-09 11:13:29'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2019-12-09 11:13:22'),
(3, 'employee@example.com', '$2y$10$q4G47CtpUBNXTGMoejjqFeoXs58N8dbbgLTJZaHlWcYUrqywFGdKy', 'Employees', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 1, '2019-12-09 09:10:02'),
(9, 'amitaajamit@gmail.com', '$2y$10$b/Bi66rY6dCk0fQyr9HNEOKPud0FPxzeQ1x6urhCnCLDPyBTwN0Fu', 'Amit Kumar', '9015548748', 3, 0, 1, '2019-12-09 10:18:04', NULL, NULL),
(10, 'amitaajamit@gmail.com', '$2y$10$b/Bi66rY6dCk0fQyr9HNEOKPud0FPxzeQ1x6urhCnCLDPyBTwN0Fu', 'Amit Kumar', '9015548748', 3, 0, 1, '2019-12-09 10:18:04', NULL, NULL),
(11, 'amitaajamit@gmail.com', '$2y$10$b/Bi66rY6dCk0fQyr9HNEOKPud0FPxzeQ1x6urhCnCLDPyBTwN0Fu', 'Amit Kumar', '9015548748', 3, 0, 1, '2019-12-09 10:18:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_advisor`
--
ALTER TABLE `tbl_advisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_benefits`
--
ALTER TABLE `tbl_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_benefit_img`
--
ALTER TABLE `tbl_benefit_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_campain`
--
ALTER TABLE `tbl_campain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_certifications`
--
ALTER TABLE `tbl_certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_consulting`
--
ALTER TABLE `tbl_consulting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_query`
--
ALTER TABLE `tbl_contact_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_category`
--
ALTER TABLE `tbl_course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_subcategory`
--
ALTER TABLE `tbl_course_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_subcategory2`
--
ALTER TABLE `tbl_course_subcategory2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_examcerti`
--
ALTER TABLE `tbl_examcerti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_experts`
--
ALTER TABLE `tbl_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fcategory`
--
ALTER TABLE `tbl_fcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_flower`
--
ALTER TABLE `tbl_flower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gcategory`
--
ALTER TABLE `tbl_gcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gyan`
--
ALTER TABLE `tbl_gyan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_page`
--
ALTER TABLE `tbl_home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_scategory`
--
ALTER TABLE `tbl_scategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sev`
--
ALTER TABLE `tbl_sev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stplacement`
--
ALTER TABLE `tbl_stplacement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_syllabus`
--
ALTER TABLE `tbl_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_training_options`
--
ALTER TABLE `tbl_training_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_advisor`
--
ALTER TABLE `tbl_advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_benefits`
--
ALTER TABLE `tbl_benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_benefit_img`
--
ALTER TABLE `tbl_benefit_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_campain`
--
ALTER TABLE `tbl_campain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_certifications`
--
ALTER TABLE `tbl_certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_consulting`
--
ALTER TABLE `tbl_consulting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact_query`
--
ALTER TABLE `tbl_contact_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_course_category`
--
ALTER TABLE `tbl_course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_course_subcategory`
--
ALTER TABLE `tbl_course_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_course_subcategory2`
--
ALTER TABLE `tbl_course_subcategory2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_examcerti`
--
ALTER TABLE `tbl_examcerti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_experts`
--
ALTER TABLE `tbl_experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fcategory`
--
ALTER TABLE `tbl_fcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_flower`
--
ALTER TABLE `tbl_flower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_gcategory`
--
ALTER TABLE `tbl_gcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gyan`
--
ALTER TABLE `tbl_gyan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_page`
--
ALTER TABLE `tbl_home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_scategory`
--
ALTER TABLE `tbl_scategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sev`
--
ALTER TABLE `tbl_sev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_stplacement`
--
ALTER TABLE `tbl_stplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_syllabus`
--
ALTER TABLE `tbl_syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_training_options`
--
ALTER TABLE `tbl_training_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
