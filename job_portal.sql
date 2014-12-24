-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2013 at 11:55 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE IF NOT EXISTS `applied_jobs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_id` int(100) NOT NULL,
  `stu_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `job_id`, `stu_id`) VALUES
(1, 23, 2),
(2, 23, 1),
(3, 2, 1),
(4, 19, 2),
(5, 19, 1),
(6, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs_guest`
--

CREATE TABLE IF NOT EXISTS `applied_jobs_guest` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `applied_jobs_guest`
--

INSERT INTO `applied_jobs_guest` (`id`, `job_id`, `name`, `email`, `message`) VALUES
(1, 2, 'gurpreet', 'gurpreet@gmail.com', 'sdfgh.'),
(2, 2, 'sdf', 'tyfyfg', 'yugiuh'),
(3, 2, 'sdgh', 'hgvhj', 'jkhkj'),
(4, 2, 'jhghg', 'kjbh', 'kjnkj'),
(5, 2, 'jhghg', 'kjbh', 'kjnkj'),
(6, 2, 'jhbghj', 'kjnkj', 'kjbjk'),
(7, 2, 'jhghj', 'kjnkjl', 'kjbkj'),
(8, 2, 'aaaaaaaaaaaa', 'hjgkj', 'kjbkj'),
(9, 2, 'shagufi', 'jhghj', 'jhbhjb'),
(10, 0, 'dhuri', 'upasanamittal82@gmail.com', 'ghfvghjb'),
(11, 0, 'dhuri', 'upasanamittal82@gmail.com', 'ghfvghjb'),
(12, 2, 'itu', 'ituthakur1000@gmail.com', 'vckjhn;olk'),
(13, 2, 'itu', 'it@gmail.com', 'gfcvbkjnbvhmj'),
(14, 4, 'gopi', 'gur@gmail.com', 'jugvgmbhn'),
(15, 1, 'itu', 'ituthakur1000@gmail.com', 'juhbj'),
(16, 4, 'pooja', 'deepika_arora1243@yahoo.in', 'jhvbj,n'),
(17, 2, 'itu`', 'ituthakur1000@gmail.com', 'zaksjO;''SIaps'),
(18, 24, 'sam', 'sam07.sumit@gmail.com', 'nlkhl'),
(19, 24, 'sam', 'sam07.sumit@gmail.com', 'nlkhl'),
(20, 24, 'kawal', 'preetsandhu@yahoo.com', 'mohali'),
(21, 25, 'baljinder', 'b.sandhu@yahoo.com', 'chandighar'),
(22, 26, 'aman', 'aksandhu@ymail.com', 'hiiiii'),
(23, 27, 'kuldip', 'ak@ymail.com', 'hello'),
(24, 24, 'raman', 'ramandeep@yahoo.com', 'hello'),
(25, 24, 'kuldip', 'deep@yahoo.com', 'hey'),
(26, 24, 'kiranpreet', 'preet100@gmail.com', 'hello'),
(27, 27, 'gurjit', 'sandhu@ymail.com', 'hey'),
(28, 28, 'ramandeep', 'raman@gmil.com', 'h r u'),
(29, 27, 'jaspreet', 'bal123.bablu@gmail.com', '8 months experience in php'),
(30, 27, 'jaspreet', 'jaspreet@gmail.com', 'hello i m jass'),
(31, 46, 'kamaljeet', 'hggjhg@gm.com', 'jcxkjz xzjk xzjjh xzkj'),
(32, 27, 'ravi', 'rvi@gmail.com', 'hello ravi');

-- --------------------------------------------------------

--
-- Table structure for table `career_detail`
--

CREATE TABLE IF NOT EXISTS `career_detail` (
  `stu_id` int(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `function` varchar(100) NOT NULL,
  `key_skills` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_detail`
--

INSERT INTO `career_detail` (`stu_id`, `industry`, `function`, `key_skills`, `experience`, `resume`) VALUES
(1, 'Automotive', 'makeup', 'fasion', '3-7', '1.docx'),
(2, 'Automotive', 'jh', 'jh', '1-1', '2.docx'),
(10, 'Automotive', '', '', '0-0', '10.docx'),
(12, 'Banking', 'lkjkn', 'nklnlk', '1-1', '12.docx'),
(13, 'Automotive', '', '', '0-0', '13.docx'),
(15, 'IT', '', 'php developer', '0-0', '15.docx'),
(16, 'IT', 'employee', 'c,c++,java,php,vb', '0-0', '16.docx'),
(17, 'IT', 'java', 'java,c,php', '0-0', '17.docx'),
(18, 'Banking', '', 'typing', '0-0', '18.docx'),
(19, 'IT', '', 'dream weawer', '0-0', '19.docx'),
(38, 'Automotive', '', '', '0-0', '38.docx'),
(43, 'IT', 'developer', 'php, jumla', '1-2', '43.docx'),
(44, 'Banking', 'developer', 'telly,  accounting', '1-0', '44.docx'),
(45, 'IT', 'php', 'hgfudy', '0-0', '45.docx'),
(46, 'IT', 'developer', 'php,c++', '2-8', '46.docx');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `job_cat`) VALUES
(1, 'software developer'),
(2, 'designer'),
(3, 'Application programming'),
(4, 'client/Server programming'),
(5, 'DBA'),
(6, 'ERP'),
(7, 'Testing'),
(8, 'System programming'),
(9, 'marketing');

-- --------------------------------------------------------

--
-- Table structure for table `catgory`
--

CREATE TABLE IF NOT EXISTS `catgory` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catgory`
--

INSERT INTO `catgory` (`cat_id`, `cat_name`) VALUES
(1, 'software'),
(2, 'designer');

-- --------------------------------------------------------

--
-- Table structure for table `edu_detail`
--

CREATE TABLE IF NOT EXISTS `edu_detail` (
  `stu_id` int(100) NOT NULL,
  `high_qual` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fav_subjects` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `passout` varchar(100) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `passout_10` varchar(100) NOT NULL,
  `marks_10` varchar(100) NOT NULL,
  `school_10` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_detail`
--

INSERT INTO `edu_detail` (`stu_id`, `high_qual`, `type`, `fav_subjects`, `course`, `branch`, `state`, `institute`, `university`, `passout`, `marks`, `passout_10`, `marks_10`, `school_10`, `board`) VALUES
(1, 'Graduation', 'Full Time', 'ca,dbms', 'btech', 'cse', 'bihar', 'ssiet', 'ptu', 'January-1998', '', 'January-1998', '77', 'dav', 'cbse'),
(2, '', 'Full Time', 'ca,fghj', 'hgvb', 'jhbjh', 'jhvb', 'ssiet', '', 'January-1998', '', 'January-1998', '', '', ''),
(10, '', '', ',', '', '', '', '', '', 'January-1998', '', 'January-1998', '', '', ''),
(12, 'PG/PG Diploma', 'Part Time', 'kj,jk', 'jkj', 'kjn', 'jkj', 'jnjk', 'jnjn', 'June-1998', '', 'January-1998', '99', 'jkkj', 'jkjkj'),
(13, 'PG/PG Diploma', 'Full Time', ',', '', '', '', '', '', 'January-1998', '', 'January-1998', '', '', ''),
(14, 'Graduation', 'Full Time', 'php,java', 'mca', 'ptu', 'punjab', 'picnframe', 'ptu', 'January-2010', '', 'January-2005', '60%', 'govt', 'pu'),
(15, 'Graduation', 'Full Time', 'java,vb', 'bca', 'ptu', 'punjab', 'bms', 'ptu', 'January-2010', '', 'January-2005', '60%', 'govt', 'pu'),
(16, 'Graduation', 'Full Time', 'java,php', 'mca', 'ptu (jalander)', 'punjab', 'picnfram', 'ptu', 'June-2013', '', 'March-2005', '60', 'govment', 'pu'),
(17, 'Graduation', 'Full Time', 'php,vb', 'bca', 'ptu', 'punjab', 'bms', 'ptu', 'May-2013', '', 'March-2005', '60', 'gvt', 'pu'),
(18, 'Graduation', 'Full Time', 'dbms,cg', 'btech', 'cse', 'punjab', 'bmsce', 'ptu', 'June-2013', '', 'March-2007', '65%', 'dav public school', 'cbse'),
(19, 'Graduation', 'Full Time', 'dbms,cg', 'btech', 'cse', 'assam', 'invimind', 'ptu', 'June-2013', '', 'April-2007', '80%', 'dav public school', 'cbse'),
(45, 'Graduation', 'Full Time', 'cg,dbms', 'btech', 'cse', 'punjab', 'bmsce', 'PTU', 'June-2013', '', 'March-2007', '70%', 'dav public school', 'cbse'),
(44, 'Graduation', 'Full Time', 'english,economics', '', '', '', '', '', 'January-1998', '', 'January-1998', '', '', ''),
(43, 'PG/PG Diploma', 'Full Time', 'mathematics,java', 'MCA', 'cse', 'punjab', 'GNE college', 'PTU', 'August-2012', '', 'January-1998', '', '', ''),
(46, 'PG/PG Diploma', 'Full Time', 'math, english,,punjabi', 'b-tech', 'cse', 'punjab', 'rayat ', 'PTU', 'February-2013', '', 'February-2008', '80%', 'dav public school', 'pseb');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(20) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `com_adrs` text NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `com_name`, `com_adrs`) VALUES
(1, 'php ', 'cfgsyvhazv', 'tgfsvhybvux'),
(2, 'java', 'vjkjl', 'njj/l;l;''');

-- --------------------------------------------------------

--
-- Table structure for table `job2cat`
--

CREATE TABLE IF NOT EXISTS `job2cat` (
  `job_id` int(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job2cat`
--

INSERT INTO `job2cat` (`job_id`, `cat_id`) VALUES
(1, '1'),
(2, '1'),
(3, '2'),
(4, '2'),
(5, '3'),
(6, '3'),
(30, '1'),
(49, '2');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(100) NOT NULL,
  `job_desc` text NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `comp_adrs` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `recute_id` int(100) NOT NULL,
  `job_type` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_desc`, `comp_name`, `comp_adrs`, `location`, `salary`, `cat_id`, `recute_id`, `job_type`, `status`) VALUES
(1, 'php developer', '', 'pic n frames', 'sec 34A chandigarh', 'mohali', '10000', 1, 0, '', 1),
(2, 'designer', '', 'navigant', 'sec 7 mohali', 'chandigarh', '20000', 2, 0, '', 1),
(49, 'java trainee', 'hello world', 'invimind', '', '34-a', '10000', 1, 0, '1', 1),
(19, 'web designer ', 'hello', 'bebo', '34', 'chd', '10000', 2, 1, '', 1),
(52, 'php developer', 'core php, joomla,\r\nwordpress,', 'invimind tech ', 'sec 34', 'chandigarh', '20000', 3, 20, 'y', 1),
(27, 'php developer', 'kutfvkjb', 'invimind', '34-a', 'Chandigarh', '10000', 1, 2, 'y', 1),
(37, 'java designer', 'fysdufys', 'invimind', '34-a', 'Chandigarh', '10,000', 1, 1, 'y', 1),
(51, 'web developer', 'core php, joomla', 'invimind tech', 'sec 34 a', 'chandigarh', '10000', 1, 20, 'y', 1),
(31, 'software developer', 'jgkhl', 'pnf', 'chandighar 34(a)', 'chandighar', '50000', 2, 1, 'y', 1),
(32, 'teacher', '34a,chd', 'babo', 'sector 34', 'chandighar', '60000', 5, 1, 'y', 1),
(33, 'software', 'ghkhkj', 'invimind', 'chd', 'chd sector34', '30000', 1, 1, 'y', 1),
(34, ' designer', 'java', 'invimind', '34-a', 'chd', '10000', 2, 1, 'y', 1),
(39, 'web developer', 'web  developer and programmer', 'invimind tech', 'sec-34A, chandigarh', 'chandigarh', '10000', 1, 43, 'y', 1),
(40, 'web developer', 'sjdnd', 'jdsjn', 'dsjn', 'djn', '20000', 1, 44, 'y', 1),
(41, 'cleark', 'database adminis', 'sd', 'chandigarh', '', '', 5, 44, 'y', 1),
(42, 'merketing', 'marketing management', 'tata sky', 'mohali', '7 phase , ind area, mohali', '25000', 9, 44, 'y', 1),
(48, 'php trainer', 'hello world', 'invimind tech', '34-a', 'chd', '10,000', 1, 1, 'y', 1),
(44, 'bal', 'web developer', 'dvfdvfdf', 'dffdv', 'dfd', '5465', 1, 44, 'y', 1),
(46, 'rajvir', 'software designer and programmer', 'bal tech pvt. ltd.', 'xzc', 'zxc', '654', 1, 44, 'y', 1),
(47, 'programmer', 'dsd', 'asdd', 'asdasd', 'asdd', '644684', 3, 44, 'y', 1),
(50, 'kamal', 'php, java  script, wordpress', 'invimind tech', 'sec 34 a', 'chandigarh', '10,000', 3, 2, 'y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE IF NOT EXISTS `personal_detail` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `current_city` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `name`, `username`, `email`, `password`, `dob`, `gender`, `address`, `pincode`, `mobile`, `current_city`, `status`) VALUES
(1, 'thakur', 'sam', 'sony@gmail.com', '123', '4-January-1974', 'female', 'uyhgkuhbgkuyfcytg"', '14002', '23456789', 'chandigarh', 1),
(2, 'gopi', 'gopi', 'gopi', 'sam', '4-April-1976', 'male', 'yughjkll', '1234', '4456789', 'chandigarh', 1),
(14, 'simran', 'simran', 'simran.brar@ymail.com', '1234', '1-January-1970', 'female', 'moga', '142001', '123345', 'amritsar', 1),
(12, 'SUMIT SETHI', 'abc', 'sam07.sumit@gmail.com', '123', '1-January-1970', 'male', 'pk,''p,''', '160022', '8054336474', 'chandigarh', 1),
(11, 'Administrator', 'admin', 'sam07.sumit@gmail.com', 'admin', '11/10/1989', 'male', 'Admin', '123456', '918054336474', 'Chandigarh', 1),
(15, 'baljinder', 'sandhu', 'b.sandhu', '1234', '1-January-1970', 'female', 'chandighar', '143005', '9856734521', 'chandigarh', 1),
(16, 'simran', 'simran brar', 'simranbrar@yahoo.com', '123456', '1-January-1989', 'female', 'amritsar', '145006', '9875634520', 'amritsar', 1),
(17, 'gagan', 'gagandeep', 'gdeep@ymail.com', '1234', '10-August-1989', '', 'moga', '142001', '9865498765', 'amritsar', 1),
(18, 'kamaljeet kaur', 'kamal', 'kmlbrar5422gmail.com', 'kamaljeet', '3-January-1990', 'female', 'dist:muktsar', '152026', '9417189986', 'chandigarh', 1),
(19, 'jaspreet kaur', 'jaspreet', 'jassisran09@gmail.com', 'jassi', '11-January-1988', 'female', 'dist:faridkot,state:punjab', '152026', '9417123333', 'chandigarh', 1),
(20, 'rajvir', 'bal', 'bal@gmail.com', '1234', '3-January-1989', 'male', 'kkjk', '75657', '67676767', 'chandigarh', 1),
(45, 'kamaljeet', 'kamal', 'admin@gmail.com', '1234', '1-January-1970', 'female', 'gf7yufyvhduo', '15026', '6587658658', 'mohali', 1),
(43, 'harjinder singh', 'harjinder', 'harjinder@gm.co', '1234', '1-January-1970', 'male', 'chandigarh', '2544877', '99886655', 'chandigarh', 1),
(46, 'akash', 'akash@gmail.com', 'akash@gmail.com', '1234', '3-March-1990', 'male', 'sec 34 chandigarh', '124578', '998899', 'chandigarh', 1),
(40, 'jaspreet', 'jass', 'kmlhu@gmail.com', '123', '1-January-1970', 'female', 'eytfgyduf', '1573574', '5674564573', '--city--', 1),
(39, 'jaspreet', 'jass', 'kmlhu@gmail.com', '123', '1-January-1970', 'female', 'eytfgyduf', '1573574', '5674564573', '--city--', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recute_login`
--

CREATE TABLE IF NOT EXISTS `recute_login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `recute_login`
--

INSERT INTO `recute_login` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'gopi', '123', 'y', 1),
(2, 'sahil', '123', 'n', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
