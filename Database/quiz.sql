-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 09:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `androidanswer`
--

CREATE TABLE `androidanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `androidanswer`
--

INSERT INTO `androidanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Webkit', 1),
(2, 'Dalvik', 1),
(3, 'OpenGL', 1),
(4, 'SQLite', 1),
(5, ' Telephony', 2),
(6, 'Applications', 2),
(7, 'Sensors', 2),
(8, 'The emulator can emulate/simulate all aspects of a smart phone', 2),
(9, 'ZoomControls.Enabled=true', 3),
(10, 'mapView.setBuiltInZoomControls(true);', 3),
(11, 'mapView= ZoomControls(true);', 3),
(12, 'None of the above', 3),
(13, 'LocationManager LM =new LocationManager();', 4),
(14, 'LocationManager LM = getSystemService(Context.LOCATION_SERVICE);', 4),
(15, 'LocationManager LM = Context.LOCATION_SERVICE', 4),
(16, 'None of the above', 4),
(17, 'Intents', 5),
(18, 'Content Providers', 5),
(19, 'Applications', 5),
(20, 'Services', 5),
(21, 'R.style ', 6),
(22, 'X.style', 6),
(23, 'menifeest.XML ', 6),
(24, 'application', 6),
(25, '1,2,3,4,6 ', 7),
(26, '2,3,4,5,6 ', 7),
(27, '1,2,3,4,5 ', 7),
(28, 'all of above', 7),
(29, 'A Java project', 8),
(30, 'A Java class ', 8),
(31, 'A method call', 8),
(32, 'An object field', 8),
(33, 'PackageManager m = getPackageManager(); <br>\r\n    if (!m.hasSystemFeature(PackageManager.FEATURE_SENSOR_COMPASS)) {<br>\r\n        // This device does not have a compass, turn off the compass feature <br>\r\n    }\r\n', 9),
(34, 'SensorManager m = getSensorManager(); <br>\r\n    if (!m.hasSystemFeature(SensorManager.FEATURE_SENSOR_COMPASS)) {<br>\r\n        // This device does not have a compass, turn off the compass feature <br>\r\n    }\r\n', 9),
(35, 'Sensor s = getSensor(); <br>\r\n    if (!s.hasSystemFeature(Sensor.FEATURE_SENSOR_COMPASS)) { <br>\r\n        // This device does not have a compass, turn off the compass feature <br>\r\n    }\r\n', 9),
(36, 'All of above', 9),
(37, '< uses-permission android:name =”android.Internet”/>', 10),
(38, '< uses-permission android:name =”android.Internet”>< /uses-permission>', 10),
(39, '< uses-permission android:name =”android. permission .Internet”/>', 10),
(40, '< uses-permission android:name =”android.permission.Internet”>', 10);

-- --------------------------------------------------------

--
-- Table structure for table `androidquestion`
--

CREATE TABLE `androidquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `androidquestion`
--

INSERT INTO `androidquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'Which among these are NOT a part of Android’s native libraries?\r\n', 2),
(2, 'The Emulator is identical to running a real phone EXCEPT when emulating/simulating what?', 7),
(3, 'To enable zoom control on google map, Which method of MapView is used? Suppose that instance of MapView is mapView.', 10),
(4, 'How will you instantiate LocationManager object?', 14),
(5, 'What runs in the background and doesn’t have any UI components?', 20),
(6, 'Android provides a few standard themes, listed in__________', 21),
(7, 'Which of the following are different storage methods available in Android? 1) Shared Preferences 2) Internal Storage 3) External Storage 4) SQLite Databases 5) Network Connection 6)Intermediate storage\r\n', 27),
(8, 'An activity can be thought of as corresponding to what? 	', 30),
(9, 'Which of the following code is the correct way to check if a Compass sensor is present on the system?', 36),
(10, 'Which of the following is a correct Android Manifest statement', 39);

-- --------------------------------------------------------

--
-- Table structure for table `javaanswer`
--

CREATE TABLE `javaanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `javaanswer`
--

INSERT INTO `javaanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Compiler Error\r\n', 1),
(2, 'Derived::show() called', 1),
(3, 'Base::show() called', 1),
(4, 'None of the Above\r\n', 1),
(5, 'block -ve made -ve', 2),
(6, 'block -ve made -ve2e', 2),
(7, 'block -ve2e made -ve2e', 2),
(8, 'None of Above', 2),
(9, 'Aggregation', 3),
(10, 'Composition\r\n', 3),
(11, 'Encapsulation', 3),
(12, 'Association', 3),
(13, 'An interface', 4),
(14, 'An abstract class', 4),
(15, 'A static class', 4),
(16, 'None\r\n', 4),
(17, 'Form, setVisible, setOn', 5),
(18, 'Window, setSize, paint', 5),
(19, 'Frame, setSize, setVisible', 5),
(20, ' Frame, setVisible, setSize', 5),
(21, 'serialization', 6),
(22, 'synchronization', 6),
(23, 'inheritance', 6),
(24, 'polymorphism\r\n', 6),
(25, 'Can be modified at runtime in non static constructor only', 7),
(26, 'Can be modified from both method and constructor', 7),
(27, 'Can never be modified as it behave as constant variable', 7),
(28, 'All are correct', 7),
(29, 'Int', 8),
(30, 'Float\r\n', 8),
(31, 'Double', 8),
(32, 'Class', 8),
(33, 'ArrayIndexOutOfBoundsException\r\n', 9),
(34, 'ArithmeticException', 9),
(35, 'NullPointerException', 9),
(36, 'None', 9),
(37, 'NullPointerException at compile time', 10),
(38, 'NullPointerException at run time\r\n', 10),
(39, 'FileNotFoundException at compiler time', 10),
(40, 'FileNotFoundException at runtime', 10);

-- --------------------------------------------------------

--
-- Table structure for table `javaquestion`
--

CREATE TABLE `javaquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `javaquestion`
--

INSERT INTO `javaquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'class Base \r\n{ <br>\r\n	final public void show() <br>\r\n	{ <br>\r\n		System.out.println(\"Base::show() called\"); <br>\r\n	} <br>\r\n} <br>\r\nclass Derived extends Base <br>\r\n{ <br>\r\n	public void show() <br>\r\n	{ <br>\r\n		System.out.println(\"Derived::show() called\"); <br>\r\n	} <br>\r\n} <br>\r\nclass Main <br>\r\n{ <br>\r\n	public static void main(String[] args) <br>\r\n	{ <br>\r\n		Base b = new Derived(); <br>\r\n		b.show(); <br>\r\n	} <br>\r\n}\r\n', 1),
(2, 'abstract class Vibrate \r\n{ <br>\r\n	static String s = \"-\"; <br>\r\n	Vibrate() <br>\r\n	{ <br>\r\n		s += \"v\"; <br>\r\n	} <br>\r\n} <br>\r\npublic class Echo extends Vibrate <br>\r\n{ <br>\r\n	Echo() <br>\r\n	{ <br>\r\n		this(7); <br>\r\n		s += \"e\"; <br>\r\n	} <br>\r\n	Echo(int x) <br>\r\n	{ <br>\r\n		s += \"e2\"; <br>\r\n	} <br>\r\n	public static void main(String[] args) <br>\r\n	{ <br>\r\n		System.out.print(\"made \" + s + \" \"); <br>\r\n	} <br>\r\n	static<br>\r\n	{ <br>\r\n		Echo e = new Echo(); <br>\r\n		System.out.print(\"block \" + s + \" \"); <br>\r\n	} <br>\r\n}\r\n', 7),
(3, 'What is it called if an object has its own lifecycle and there is no owner?', 12),
(4, 'If I want to have common functions in a class and want to defer implementations of some other functions to derived classes, then we need to use', 14),
(5, 'import java.awt.*;\r\n<br>\r\npublic class microGUI\r\n{ <br>\r\n  public static void main ( String[] args ) <br>\r\n  { <br>\r\n    Frame frm = new ___________(); <br>\r\n    frm.___________( 150, 100 ); <br>\r\n    frm.___________( true ); <br>\r\n  }<br>\r\n}\r\n', 19),
(6, 'Transient keyword in java is used in', 21),
(7, 'Readonly variables in java', 25),
(8, 'Which one is reference type?', 32),
(9, 'public class TException { <br>\r\n\r\n	public static void main(String[] args) {<br>\r\n\r\n		try { <br>\r\n\r\n			int a[] = { 5, 10, 15, 20 }; <br>\r\n			\r\n			System.out.println(\"Element :\" + a[4]);	 <br>		\r\n		} <br>\r\n		finally{} <br>\r\n\r\n	} <br>\r\n}\r\n', 33),
(10, 'public static void main(String[] args) { <br>\r\n    	\r\n    	 FileReader file = new FileReader(\"test.txt\");       <br>\r\n    }\r\n', 39);

-- --------------------------------------------------------

--
-- Table structure for table `mandroidanswer`
--

CREATE TABLE `mandroidanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandroidanswer`
--

INSERT INTO `mandroidanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, 'onCreate() −> onStart() −> onActivityStarted() −> onResume() −> onPause() −> onStop() −> onActivityDistroy() −> onDestroy()', 1),
(2, 'OnCreate() −> onStart() −>onResume() −> onPause() −> onStop() −> onRestart() −> onDestroy()', 1),
(3, 'OnCreate() −> onStart() −> onPause() −> onResume() −> onStop() −> onDestroy()', 1),
(4, '−>onResume()', 1),
(5, 'Binder is responsible to manage the thread while using aidl in android', 2),
(6, 'Binder is responsible for marshalling and un-marshalling of the data', 2),
(7, 'A & B', 2),
(8, 'None of the above', 2),
(9, 'Java', 3),
(10, 'Ajax', 3),
(11, 'Android', 3),
(12, 'None of the Above', 3),
(13, 'Android deprecated version', 4),
(14, 'There is no value for 1', 4),
(15, 'Android doesn\'t allow min version 1', 4),
(16, 'None of the above', 4),
(17, 'onCreate() −> onStart() −> onResume() −> onStop() −> onRestart()', 5),
(18, 'onCreate() −> onStart() −> onResume() −>onStop()', 5),
(19, 'onCreate() −> onStart() −> onResume()', 5),
(20, 'None of the above', 5),
(21, 'True', 6),
(22, 'False', 6),
(23, 'View', 7),
(24, 'Map', 7),
(25, 'MapView', 7),
(26, 'None of the above.', 7),
(27, 'USEMAP', 8),
(28, 'USE_GOOGLE_MAP', 8),
(29, 'INTERNET', 8),
(30, 'None of the above.', 8),
(31, 'Geocoding is the act of converting an address into its coordinates (latitude and longitude).', 9),
(32, 'Geocoding converts a pair of location coordinates into an address.', 9),
(33, 'Geocoding means geographical coding.', 9),
(34, 'None of the above', 9),
(35, 'LocationManager', 10),
(36, 'Object', 10),
(37, 'GoogleManager', 10),
(38, 'None of the above', 10),
(39, 'LocationManager LM =new LocationManager();', 11),
(40, 'LocationManager LM = getSystemService(Context.LOCATION_SERVICE);', 11),
(41, 'LocationManager LM = Context.LOCATION_SERVICE.', 11),
(42, 'None of the above', 11),
(43, 'ACCESS_FINE and ACCESS_COARSE', 12),
(44, 'GPRS permission', 12),
(45, 'Internet permission', 12),
(46, 'WIFI permission', 12),
(47, 'Goggle Could Messaging for chrome', 13),
(48, 'Goggle Count Messaging', 13),
(49, 'Goggle Message pack', 13),
(50, 'None of the above', 13),
(51, 'XML', 14),
(52, 'Java', 14),
(53, 'Windows', 14),
(54, 'Linux', 14),
(55, 'Activity manager contains too much content', 15),
(56, 'Virus on the server', 15),
(57, 'Hardware malfunctions', 15),
(58, 'Network latency', 15),
(59, 'Altering permissions', 16),
(60, 'Network receivers', 16),
(61, 'A content provider', 16),
(62, 'Intents', 16),
(63, 'I and II only', 17),
(64, 'II and III only', 17),
(65, 'II and IV only', 17),
(66, 'IV only', 17),
(67, '.text file', 18),
(68, '.java file', 18),
(69, '.dex file', 18),
(70, '.xml file', 18),
(71, 'stopSelf()', 19),
(72, 'onStop()', 19),
(73, 'onDestroy()', 19),
(74, 'stopService()', 19),
(75, 'properties', 20),
(76, 'component tree', 20),
(77, 'layout', 20),
(78, 'terminal', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mandroidquestion`
--

CREATE TABLE `mandroidquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandroidquestion`
--

INSERT INTO `mandroidquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'Explain android activity life cycle?', 2),
(2, 'What are the functionalities of Binder services in android?', 7),
(3, 'In which technique, we can refresh the dynamic content in android?', 10),
(4, 'Why don\'t we give MIN SDK as 1 in android?', 13),
(5, 'What is the life cycle of foreground activity in android?', 19),
(6, 'Android is open source true or false?', 21),
(7, 'Which element is used to display Google map in your UI.', 25),
(8, 'For using Google map which permission you will specify in the AndroidManifest.xml?', 29),
(9, 'What is geocoding?', 31),
(10, 'Which class is used to access to the system location services?', 35),
(11, 'How will you instantiate LocationManager object?', 40),
(12, 'Which permissions are required to get a location in android?', 43),
(13, 'What is a GCM in android?', 47),
(14, 'The operating system used for Android stack is ________', 54),
(15, 'If the User Interface (UI) begins to behave sluggishly or crash while making network calls, this is likely due to _________', 58),
(16, 'Status data will be exposed to the rest of the Android system via:', 61),
(17, 'Which of the following is/are example(s) of stateful application layer protocols?<br>\r\n(I) HTTP<br>\r\n(II) FTP<br>\r\n(III) TCP<br>\r\n(IV) POP3 <br>', 65),
(18, 'the layout or design of an android application is saved in ', 70),
(19, 'The method that is called to clean up any resources used by services is', 73),
(20, 'The UI hierarchy and individual design elements can be seen using', 76);

-- --------------------------------------------------------

--
-- Table structure for table `mhtmlanswers`
--

CREATE TABLE `mhtmlanswers` (
  `aid` int(3) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhtmlanswers`
--

INSERT INTO `mhtmlanswers` (`aid`, `answers`, `ans_id`) VALUES
(1, '$_SERVER[‘REQUEST_URI’]', 1),
(2, '$_SERVER[‘HTTP_REFERER’]', 1),
(3, '$_SERVER[‘HTTP_USER_AGENT’]', 1),
(4, '$_SERVER[‘REMOTE_ADDR’]', 1),
(5, 'i and ii only', 2),
(6, 'ii and iii only', 2),
(7, 'i and iii only', 2),
(8, 'All i, ii and iii', 2),
(9, 'Timeout( )', 3),
(10, 'TimeInterval( )', 3),
(11, 'setTimeout( )', 3),
(12, 'All of the above', 3),
(13, 'window.reload', 4),
(14, 'location. reload\r\n', 4),
(15, 'window. refresh', 4),
(16, 'page.refresh', 4),
(17, 'd-index', 5),
(18, 's-index', 5),
(19, 'x-index', 5),
(20, 'z-index', 5),
(21, 'Yes, we can', 6),
(22, 'Not Possible', 6),
(23, 'Quit', 7),
(24, 'Closing', 7),
(25, 'Exit', 7),
(26, 'Anti', 7),
(27, 'Deactivate', 7),
(28, 'Tags', 8),
(29, 'Codas', 8),
(30, 'Slashes', 8),
(31, 'Properties', 8),
(32, 'Cod', 8),
(33, 'echo()', 9),
(34, 'printf()', 9),
(35, 'print()', 9),
(36, 'sprintf( )', 9),
(37, '$_SERVER[‘REQUEST_URI’]', 10),
(38, '$_SERVER[‘HTTP_REFERER’]', 10),
(39, '$_SERVER[‘HTTP_USER_AGENT’]', 10),
(40, '$_SERVER[‘REMOTE_ADDR’]', 10),
(41, 'Local variables', 11),
(42, 'Function parameters', 11),
(43, 'Global variables', 11),
(44, 'Static variables', 11),
(45, 'i, ii and iii only', 12),
(46, 'i, iii and iv only', 12),
(47, 'i, ii and iv only', 12),
(48, 'All i, ii, iii, and iv', 12),
(49, 'i-d, ii-c, iii-b, iv-a', 13),
(50, 'i-b, ii-c, iii-a, iv-d', 13),
(51, 'i-c, ii-d, iii-a, iv-b', 13),
(52, 'i-a, ii-c, iii-d, iv-b', 13),
(53, 'window. Reload', 14),
(54, 'window.location', 14),
(55, 'page.location', 14),
(56, 'url.newlocation', 14),
(57, 'RegExpObj', 15),
(58, 'RegExpClass', 15),
(59, 'RegExp', 15),
(60, 'StringExp', 15),
(61, 'Browser', 16),
(62, 'Editor', 16),
(63, 'Converter', 16),
(64, 'Processor', 16),
(65, 'Parse', 16),
(66, 'Portable', 17),
(67, 'Discrete', 17),
(68, 'Uniform', 17),
(69, '~', 18),
(70, '!', 18),
(71, '&', 18),
(72, '|', 18),
(73, 'Yes, it\'s possible', 19),
(74, 'No, not possible', 19),
(75, 'border-color', 20),
(76, 'border-decoration', 20),
(77, 'border-style', 20),
(78, 'border-line', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mhtmlquestion`
--

CREATE TABLE `mhtmlquestion` (
  `qid` int(11) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhtmlquestion`
--

INSERT INTO `mhtmlquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'The PHP superglobal variable …………………. contains the path component of the URL.', 2),
(2, 'Which of the following are the advantages of PHP language.\r\n    			<br>\r\ni) There is no need to explicitly create, typecast or destroy a variable.<br>\r\nii) It will automatically destroy variables and return resources to the system when the scripts completes.<br>\r\niii) It allows the developer to concentrate almost exclusively on the final goal, namely a working application.\r\n', 8),
(3, '………………….. is a built-in JavaScript function which can be used to execute another function after a given time interval.\r\n', 11),
(4, 'You can refresh the webpage in JavaScript by using ……………. method', 14),
(5, 'Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack?\r\n', 20),
(6, 'Can we align a Block element by setting the left and right margins ?', 22),
(7, 'The Browser applies the feature of a tag until it encounters_____tag', 24),
(8, '_______are the HTML codes that control the apearance of the document contents', 28),
(9, 'The …………………….. statement is ideal when you want to output a blend of static text and dynamic information stored within one or several variables', 34),
(10, '…………………………….is the client’s user agent, which typically offfers information about both the operating system and browser', 39),
(11, '…………………. eliminate the possibility of unexpected side effects that can result from globally accessible variables that are modified, intentionally or not.\r\n', 41),
(12, ' The different types of dialog boxes supported by JavaScript are\r\ni) Alert dialog box\r\nii) Information dialog box\r\niii) Confirmation dialog box\r\niv) Prompt dialog box\r\n', 46),
(13, 'Match the following with their description.<br>\r\na) Encapsulation &emsp;&emsp;&emsp;    i) The capability to write on function or method that works a variety of different ways.<br>\r\nb) Aggregation  &emsp;&emsp;&emsp;     ii) The capability of a class to rely upon another class.<br>\r\nc) Inheritance    &emsp;&emsp;&emsp;     iii) The capability to store one object inside of another object.<br>\r\nd) Polymorphism   &emsp;&emsp;&emsp; iv) The capability to store related information.\r\n', 49),
(14, 'You can redirect the webpage in JavaScript by using ………………… method. ', 54),
(15, 'The JavaScript …………………… class represents regular expressions, and both string and ……………….. define methods that use regular expressions.\r\n', 59),
(16, 'An HTML_____takes text in one format and changes it to HTML code.\r\n', 63),
(17, ' Relative path make your hypertext links______.', 66),
(18, 'What operator makes converts 00110011 into 11001100?\r\n', 69),
(19, 'Is it possible to declare font-weight, font-face & font-size by using ONLY ONE css propery ?\r\n', 73),
(20, 'If we want to use a nice looking green dotted border around an image, which css property will we use?\r\n', 77);

-- --------------------------------------------------------

--
-- Table structure for table `mjavaanswer`
--

CREATE TABLE `mjavaanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mjavaanswer`
--

INSERT INTO `mjavaanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Bytecode is executed by JVM', 1),
(2, 'The applet makes the Java code secure and portable', 1),
(3, 'Use of exception handling', 1),
(4, 'Dynamic binding between objects', 1),
(5, 'char ch = \'\\utea\';', 2),
(6, 'char ca = \'tea\';', 2),
(7, 'char cr = \\u0223;', 2),
(8, 'char cc = \'\\itea\';', 2),
(9, '0', 3),
(10, 'Not a Number', 3),
(11, 'Infinity', 3),
(12, 'Run time exception', 3),
(13, '24', 4),
(14, '23', 4),
(15, '20', 4),
(16, '25', 4),
(17, 'A final method cannot be overridden in its subclasses.', 5),
(18, 'A final class cannot be extended.', 5),
(19, 'A final class cannot extend other classes.', 5),
(20, 'A final method can be inherited.', 5),
(21, 'public static Final Variables only', 6),
(22, 'public Abstract methods', 6),
(23, 'Abstract methods(unimplemented) and implemented methods both', 6),
(24, 'public static Final Variables and abstract methods both', 6),
(25, 'class Cat implements IAnimal{}\r\n', 7),
(26, 'class Cat extends IAnimal{}', 7),
(27, 'class Cat import IAnimal{}', 7),
(28, 'None is correct', 7),
(29, 'Compile time error', 8),
(30, 'Run time error', 8),
(31, 'Source code is OK', 8),
(32, 'class', 9),
(33, 'class fields', 9),
(34, 'class methods', 9),
(35, 'All of the above', 9),
(36, 'Value of final variable cannot be changed once initialized.', 10),
(37, 'Final method is inherited but we cannot override it', 10),
(38, 'If you make a class final then you cannot extend the class', 10),
(39, 'Constructor can be declared as final', 10),
(40, 'ArrayIndexOutOfBoundsException', 11),
(41, 'ArithmeticException', 11),
(42, 'NullPointerException', 11),
(43, 'None', 11),
(44, 'NullPointerException at compile time', 12),
(45, 'NullPointerException at run time', 12),
(46, 'FileNotFoundException at compiler time', 12),
(47, 'FileNotFoundException at runtime', 12),
(48, 'Heap', 13),
(49, 'Stack', 13),
(50, 'Disk', 13),
(51, 'File', 13),
(52, 'Graphics class', 14),
(53, 'Component class', 14),
(54, 'Both A & B', 14),
(55, 'None of the above', 14),
(56, 'True', 15),
(57, 'False', 15),
(58, 'True', 16),
(59, 'False', 16),
(60, 'Window', 17),
(61, 'Panel', 17),
(62, 'Frame', 17),
(63, 'Container', 17),
(64, 'Button, List, MenuItem', 18),
(65, 'Button, Checkbox, Choice', 18),
(66, 'Scrollbar, Component, Button', 18),
(67, 'None of the above', 18),
(68, 'Choice', 19),
(69, 'List', 19),
(70, 'Labels', 19),
(71, 'Checkbox', 19),
(72, '7', 20),
(73, '6', 20),
(74, '5', 20),
(75, '8', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mjavaquestion`
--

CREATE TABLE `mjavaquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mjavaquestion`
--

INSERT INTO `mjavaquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'Which of the following option leads to the portability and security of Java?\r\n', 1),
(2, 'Which of the following is a valid declaration of a char?\r\n', 5),
(3, 'What does the expression float a = 35 / 0 return?\r\n', 11),
(4, 'Evaluate the following Java expression,<br> if x=3, y=5, and z=10:      <br>++z + y - y + z + x++', 13),
(5, 'Which option is false about the final keyword?', 19),
(6, 'java interface can contain ......', 24),
(7, 'Which is the correct way to inherit and implement the interface?\r\nConsider and example, Interface is IAnimal and a class is Cat that wants to implement interface.\r\n', 25),
(8, 'What is wrong with below source code?<br>\r\ninterface IShape {<br>\r\n&emsp;&emsp;&emsp;	void f1();<br>\r\n&emsp;&emsp;&emsp;	void f2();<br>\r\n&emsp;&emsp;&emsp;	void f3();<br>\r\n}<br>\r\nclass Circle implements IShape {<br>	\r\n&emsp;&emsp;	public void f1() {<br>\r\n&emsp;&emsp;	}<br>\r\n}', 29),
(9, 'Final keyword in java is used with', 35),
(10, 'False statement about final method in java', 39),
(11, 'What exception can occur in the below java program if we access 5 element in the array that does not exist?\r\n<br><br>\r\npublic class TException {<br>\r\n&emsp;	public static void main(String[] args) {<br>\r\n&emsp;&emsp;		try {<br>\r\n&emsp;&emsp;			int a[] = { 5, 10, 15, 20 };<br>\r\n&emsp;&emsp;			System.out.println(\"Element :\" + a[4]);<br>	\r\n&emsp;&emsp;		} <br>&emsp;&emsp;      finally{}<br>\r\n&emsp;	}     }\r\n', 40),
(12, 'In below java program, which exception will occur?<br><br>\r\n\r\npublic static void main(String[] args) {<br>\r\n    	<br>&emsp;&emsp;&emsp;\r\n    	 FileReader file = new FileReader(\"test.txt\"); <br>       \r\n} \r\n', 46),
(13, 'Where an object of a class get stored?\r\n', 48),
(14, 'Where are the following four methods commonly used?\r\n<br>\r\n1) public void add(Component c) <br>\r\n2) public void setSize(int width,int height) <br>\r\n3) public void setLayout(LayoutManager m) <br>\r\n4) public void setVisible(boolean) <br>\r\n', 53),
(15, 'Implement the Listener interface and overrides its methods is required to perform in event handling.', 56),
(16, 'These two ways are used to create a Frame\r\nBy creating the object of Frame class (association)\r\nBy extending Frame class (inheritance)\r\n', 58),
(17, 'Which is used to store data and partial results, as well as to perform dynamic linking, return values for methods, and dispatch exceptions?', 62),
(18, 'Which class is used for this Processing Method processActionEvent( )?', 64),
(19, 'Which are passive controls that do not support any interaction with the user?', 70),
(20, 'How many types of controls does AWT support?', 72);

-- --------------------------------------------------------

--
-- Table structure for table `mpythonanswer`
--

CREATE TABLE `mpythonanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpythonanswer`
--

INSERT INTO `mpythonanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, '2 and 1', 1),
(2, '3 and 3', 1),
(3, '3 and 1', 1),
(4, '3 and 2', 1),
(5, '\"std\" is the reference variable for object Student(1,20)', 2),
(6, 'id and age are called the parameters.', 2),
(7, 'Every class must have a constructor.', 2),
(8, 'None of the above', 2),
(9, 'A method', 3),
(10, 'An object', 3),
(11, 'A class', 3),
(12, 'An operator', 3),
(13, '100\r\n100', 4),
(14, '100\r\n102', 4),
(15, '102\r\n102', 4),
(16, 'Error', 4),
(17, 'Deleting an instance of class', 5),
(18, 'Modifying an instance of class', 5),
(19, 'Copying an instance of class', 5),
(20, 'Creating an instance of class', 5),
(21, 'Special methods', 6),
(22, 'In-built methods', 6),
(23, 'User-defined methods', 6),
(24, 'Additional methods', 6),
(25, '12', 7),
(26, '52', 7),
(27, '13', 7),
(28, '60', 7),
(29, 'The __new__() method automatically invokes the __init__ method', 8),
(30, 'The __init__ method is defined in the object class', 8),
(31, 'The __eq(other) method is defined in the object class', 8),
(32, 'The __repr__() method is defined in the object class', 8),
(33, 'ImportError', 9),
(34, 'ValueError', 9),
(35, 'TypeError', 9),
(36, 'NameError', 9),
(37, 'destroy the widget', 10),
(38, 'place the widget', 10),
(39, 'change property of the widget', 10),
(40, 'configure the widget', 10),
(41, 'According to x,y coordinate', 11),
(42, 'According to row and column vise', 11),
(43, 'According to left,right,up,down', 11),
(44, 'None of the above', 11),
(45, 'Window', 12),
(46, 'Frame', 12),
(47, 'Label', 12),
(48, 'All of the above', 12),
(49, 'position', 13),
(50, 'fillcolor', 13),
(51, 'goto', 13),
(52, 'setheading()', 13),
(53, 'From sqlite3 import Connection\r\n              Connection = Connection(“test_database.db”)\r\n', 14),
(54, 'import sql\r\n    Connection = sql.connect(“test_database.db”)\r\n', 14),
(55, 'import sqlite3\r\n    Connection = sqlite3.create(“test_database.db”)\r\n', 14),
(56, 'import sqlite3\r\n    Connection = sqlite.connect(“test_database.db”)\r\n', 14),
(57, 'Cursor.fetchmany()', 15),
(58, 'Cursor.execute()', 15),
(59, 'Cursor.fetchall()', 15),
(60, 'Cursor.run()', 15),
(61, 'Dict', 16),
(62, 'Tuple', 16),
(63, 'List', 16),
(64, 'querySet', 16),
(65, 'list', 17),
(66, 'set', 17),
(67, 'dictionary', 17),
(68, 'tuple', 17),
(69, 'Error', 18),
(70, 'The local variable is shadowed', 18),
(71, 'Undefined behavior', 18),
(72, 'The global variable is shadowed', 18),
(73, 'error', 19),
(74, 'butter\r\nerror', 19),
(75, 'bitter\r\nerror', 19),
(76, 'bitterbutter', 19),
(77, 'Error', 20),
(78, '4', 20),
(79, 'Junk value', 20),
(80, '1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mpythonquestion`
--

CREATE TABLE `mpythonquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpythonquestion`
--

INSERT INTO `mpythonquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'How many objects and reference variables are there for the given Python code? <br>\r\nclass A:<br>\r\n	&emsp; print(\"Inside class\")\r\n<br>A()\r\n<br>A()\r\n<br>obj=A()', 3),
(2, 'Which of the following is False with respect Python code?<br>\r\nclass Student:<br><br>\r\n\r\n&emsp;	def __init__(self,id,age): <br>\r\n&emsp;&emsp;		self.id=id <br>\r\n&emsp;&emsp;		self.age=age <br>\r\n\r\nstd=Student(1,20)\r\n', 7),
(3, '_____ represents an entity in the real world with its identity and behaviour.', 10),
(4, 'What will be the output of below Python code? <br>\r\nclass A():<br>\r\n&emsp;	def __init__(self,count=100):<br>\r\n&emsp;&emsp;		self.count=count<br>\r\nobj1=A()<br>\r\nobj2=A(102)<br>\r\nprint(obj1.count)<br>\r\nprint(obj2.count)<br>\r\n', 14),
(5, 'What is Instantiation in terms of OOP terminology?', 20),
(6, 'What are the methods which begin and end with two underscore characters called?', 21),
(7, 'What will be the output of the following Python code?<br>\r\nclass fruits:<br>\r\n&emsp;    def __init__(self, price):<br>\r\n&emsp;&emsp;        self.price = price<br>\r\nobj=fruits(50)<br>\r\n \r\nobj.quantity=10<br>\r\nobj.bags=2 <br>\r\n<br>\r\nprint(obj.quantity+len(obj.__dict__))\r\n', 27),
(8, 'Which of the following statements is true?', 31),
(9, 'The output of the code shown below is:  int(\'65.43\')', 34),
(10, 'Config() in Python  are used for', 39),
(11, 'How the grid() function put the widget on the screen ?', 42),
(12, 'In which of the following field, we can put our Button?', 48),
(13, 'Which of the following functions does not accept any arguments?', 49),
(14, 'Which of the following code snippets creates and connects to a new SQLite Database?', 56),
(15, 'Which of the following are valid Cursor methods used to execute SQL statments and retrieve query results? Select all that apply.', 60),
(16, 'Suppose you have a SQLite database called “people.db” with the following table named People:\r\n<br>\r\nID - FirstName - LastName <br>\r\n--------------------------------<br>\r\n01 - Grace     - Hopper <br>\r\n02 - Mary      - Keller <br>\r\n03 - Ada       - Lovelace <br>\r\n<br>\r\nQ) What is the type of the results variable in the following code snippet?\r\n<br>\r\nImport sqlite3 <br>\r\nConnection = sqlite3.connection(“people.db”) <br>\r\n\r\nCursor = connection.cursor() <br>\r\n\r\nCursor.execute(“SELECT * FROM People”) <br>\r\n\r\nResults = cursor.fetchall()<br>', 63),
(17, 'Which of the following data structures is returned by the functions globals() and locals()?', 67),
(18, 'What happens if a local variable exists with the same name as the global variable you want to access?', 72),
(19, 'What will be the output of the following Python code? <br>\r\ne=\"butter\" <br>\r\ndef f(a): print(a)+e <br>\r\nf(\"bitter\") <br>', 75),
(20, 'What will be the output of the following Python code? <br>\r\ndef f(): x=4 <br>\r\nx=1 <br>\r\nf() <br>\r\nx', 80);

-- --------------------------------------------------------

--
-- Table structure for table `pythonanswer`
--

CREATE TABLE `pythonanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pythonanswer`
--

INSERT INTO `pythonanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, '11 22 11.22', 1),
(2, 'TypeError\r\n', 1),
(3, '11 ’22’ 11.22', 1),
(4, '‘11’ 22 11.22', 1),
(5, '< type ‘double’ >', 2),
(6, '< type ‘int’ >', 2),
(7, '< type ‘float’ >', 2),
(8, '< type ‘long’ >', 2),
(9, 'According to x,y coordinate', 3),
(10, 'According to left,right,up,down', 3),
(11, 'According to row and column vise', 3),
(12, 'None of the above.', 3),
(13, '1,112,223,334', 4),
(14, '111,222,333,4', 4),
(15, 'Error', 4),
(16, '1112223334', 4),
(17, '[‘a’, ‘b’, ‘c’, ‘d’].', 5),
(18, '[‘abcd’].', 5),
(19, '[[‘a’], [‘b’], [‘c’], [‘d’]]', 5),
(20, 'none of the mentioned', 5),
(21, '100\r\n', 6),
(22, '90.0', 6),
(23, '270.0', 6),
(24, '360.0', 6),
(25, 'A class', 7),
(26, 'An object', 7),
(27, 'A method', 7),
(28, 'A data field', 7),
(29, 'import sqlite3 <br>\r\nconnection = sqlite3.create(\"test_database.db\") \r\n', 8),
(30, 'from sqlite3 import Connection <br>\r\nconnection = Connection(\"test_database.db\") \r\n', 8),
(31, 'import sqlite3 <br>\r\nconnection = sqlite3.connect(\"test_database.db\") \r\n', 8),
(32, 'import sql <br>\r\nconnection = sql.connect(\"test_database.db\") \r\n', 8),
(33, 'True False', 9),
(34, 'True True', 9),
(35, 'False False\r\n', 9),
(36, 'False True', 9),
(37, 'Class B inherits all the data fields of class A', 10),
(38, 'Class B needs an Argument', 10),
(39, 'The data field ‘j’ cannot be accessed by object b', 10),
(40, 'Class B is inheriting class A but the data field ‘i’ in A cannot be inherited', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pythonquestion`
--

CREATE TABLE `pythonquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pythonquestion`
--

INSERT INTO `pythonquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, 'What is the output of the following print() function<br>\r\nprint(\'%d %d %.2f\' % (11, \'22\', 11.22))?<br>\r\n', 2),
(2, 'What will be the output? <br>\r\nvar = 100000000000000<br>\r\nprint(type(var))', 6),
(3, 'How pack() function works on tkinter widget ?', 10),
(4, 'What will be the output of the following Python code snippet? <br>\r\nprint(\'{:#}\'.format(1112223334)) \r\n', 16),
(5, 'What is the output of the following? <br>\r\nx = abcd <br>\r\nprint(list(map(list, x)))\r\n', 20),
(6, 'What is the output of the following code?<br>\r\nimport turtle <br>\r\nt=turtle.Pen() <br>\r\nt.right(90) <br>\r\nt.forward(100) <br>\r\nt.heading() \r\n', 23),
(7, 'Which of the following represents a template, blueprint, or contract that defines objects of the same type?', 25),
(8, 'Which of the following code snippets creates and connects to a new SQLite Database? ', 31),
(9, 'class Count: <br>\r\n&emsp;   def __init__(self, count=0): <br>\r\n&emsp;&emsp;&emsp;      self.__count=count <br>\r\na=Count(2) <br>\r\nb=Count(2) <br>\r\nprint(id(a)==id(b), end = \'\' \'\') <br>\r\n\r\nc= \'\'hello\'\' <br>\r\nd= \'\'hello\'\' <br>\r\nprint(id(c)==id(d))\r\n\r\n', 36),
(10, 'What happens in the below code? <br>\r\nclass A: <br>\r\n&emsp;   def __init__(self, i=100):  <br>\r\n&emsp;&emsp;      self.i=i <br>\r\nclass B(A): <br>\r\n&emsp;   def __init__(self,j=0): <br>\r\n&emsp;&emsp;      self.j=j <br>\r\ndef main(): <br>\r\n&emsp;   b= B() <br>\r\n&emsp;   print(b.i) <br>\r\n&emsp;   print(b.j) <br>\r\nmain()\r\n', 40);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` varchar(7) NOT NULL,
  `course` varchar(10) NOT NULL,
  `marks` int(2) NOT NULL,
  `results` varchar(5) NOT NULL,
  `sid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `course`, `marks`, `results`, `sid`) VALUES
('18dco13', 'Web Design', 3, 'FAIL', '18dco13Web Design'),
('18dco20', 'Web Design', 2, 'FAIL', '18dco20Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `webanswer`
--

CREATE TABLE `webanswer` (
  `aid` int(3) NOT NULL,
  `answers` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webanswer`
--

INSERT INTO `webanswer` (`aid`, `answers`, `ans_id`) VALUES
(1, 'The body of the web page will not contain any text\r\n', 1),
(2, 'The body of the web page will contain the text “hello world” as an H1 heading\r\n', 1),
(3, 'The background color of the web page will be green', 1),
(4, 'document.write(\"< h1 > hello world < /h1  >”); is a comment.', 1),
(5, 'An error is displayed', 2),
(6, 'An exception is thrown', 2),
(7, 'The values of count variable are logged or stored in a particular location or storage', 2),
(8, 'The value of count from 0 to 9 is displayed in the console', 2),
(9, 'get code name of the browser of a visitor', 3),
(10, 'set code name of the browser of a visitor', 3),
(11, 'None of the above', 3),
(12, '9123', 4),
(13, '91234', 4),
(14, '80000', 4),
(15, 'None of the above', 4),
(16, 'a {text: no-underline;}', 5),
(17, 'a {text-decoration:none;}', 5),
(18, 'a {text-style: no-underline;}', 5),
(19, 'a {text-decoration: no-underline;}', 5),
(20, 'border-width:10px 20px 5px 1px', 6),
(21, 'border-width:10px 1px 5px 20px', 6),
(22, 'border-width:5px 20px 10px 1px', 6),
(23, 'border-width:10px 5px 20px 1px', 6),
(24, 'I love arsenal', 7),
(25, 'Error\r\n', 7),
(26, 'I love arsenalI love manc', 7),
(27, 'I love arsenalI love mancI love manu', 7),
(28, '5', 8),
(29, '6', 8),
(30, '7', 8),
(31, '8', 8),
(32, 'ArrayArrayArrayArrayArrayArray….infinitely', 9),
(33, '(“hi”,”hello”,”bye”)(“hi”,”hello”,”bye”)(“hi”,”hello”,”bye”)(“hi”,”hello”,”bye”)…infinitely\r\n', 9),
(34, 'hihellobyehihellobyehihellobyehihellobyehihellobyehihellobye…..infinitely\r\n', 9),
(35, 'no output\r\n', 9),
(36, 'Array ( [0] => Hello [0] => world. [0] => It’s [0] => a [0] => beautiful [0] => day. )', 10),
(37, 'Array ( [0] => Hello [1] => world. [2] => It’s [3] => a [4] => beautiful [5] => day. )\r\n', 10),
(38, 'Hello world. It’s a beautiful day', 10),
(39, 'Array ( [1] => Hello [2] => world. [3] => It’s [4] => a [5] => beautiful [6] => day. )\r\n', 10);

-- --------------------------------------------------------

--
-- Table structure for table `webquestion`
--

CREATE TABLE `webquestion` (
  `qid` int(3) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `ans_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webquestion`
--

INSERT INTO `webquestion` (`qid`, `questions`, `ans_id`) VALUES
(1, '< html > <br>\r\n     < head > < title >JavaScript< /title > < /head > <br>\r\n      < body bgcolor=\"\"#0000ff\"\"> <br>\r\n          < script language=\"\"JavaScript\"\" > <br>\r\n               < !-- document.write (\"\"< h1 > hello world < /h1 >\"\" ); //--> <br>\r\n          < /script> <br>\r\n     < /body> <br>\r\n< /html> <br>\r\n\r\nWhen the above web page is loaded into a browser, what will happen? <br>\r\n', 1),
(2, 'var count =0;  <br>\r\nwhile (count <10)  <br>\r\n{  <br>\r\n     console.log(count);  <br>\r\n     count++;  <br>\r\n}  \r\n', 7),
(3, '< script > <br>\r\ndocument.write(navigator.appCodeName); <br>\r\n< /script >', 9),
(4, '< script type = \"text/javascript\" > <br>\r\nvar s = \"9123456 or 80000?\"; <br>\r\nvar pattern = /\\d{4}/; <br>\r\nvar output = s.match(pattern); <br>\r\ndocument.write(output); <br>\r\n< /script >', 12),
(5, 'By default Hyperlinks are displayed with an underline. How do you remove the underline from all hyperlinks by using CSS code ?', 18),
(6, 'How do you display a border like this: <br>\r\nThe top border = 10 pixels <br>\r\nThe bottom border = 5 pixels <br>\r\nThe left border = 20 pixels <br>\r\nThe right border = 1pixel?', 21),
(7, 'What will be the output of the following PHP code? <br>\r\n   < ?php <br>\r\n    $team = \"arsenal\"; <br>\r\n    switch ($team) { <br>\r\n    case \"manu\": <br>\r\n        echo \"I love man u\"; <br>\r\n    case \"arsenal\": <br>\r\n        echo \"I love arsenal\"; <br>\r\n    case \"manc\":<br>\r\n        echo \"I love manc\"; } \r\n    ?>\r\n', 26),
(8, 'How many validation filters like FILTER_VALIDATE_EMAIL are currently available?', 30),
(9, ' What will be the output of the following code: <br>\r\n< ?php <br>\r\n$a = array(\"hi\", \"hello\", \"bye\"); <br>\r\nfor (;count($a) < 5;) <br>\r\n{<br>\r\n    if (count($a) == 3) <br>\r\n	    print $a;         <br>\r\n} <br>\r\n?>\r\n', 32),
(10, 'what will be the output of the following code <br>\r\n< ?php <br>\r\n    $str = \"Hello world. It\'s a beautiful day.\"; <br>\r\n    print_r (explode(\" \",$str)); <br>\r\n ?>\r\n', 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `androidanswer`
--
ALTER TABLE `androidanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `androidquestion`
--
ALTER TABLE `androidquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `javaanswer`
--
ALTER TABLE `javaanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `javaquestion`
--
ALTER TABLE `javaquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mandroidanswer`
--
ALTER TABLE `mandroidanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `mandroidquestion`
--
ALTER TABLE `mandroidquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mhtmlanswers`
--
ALTER TABLE `mhtmlanswers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `mhtmlquestion`
--
ALTER TABLE `mhtmlquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mjavaanswer`
--
ALTER TABLE `mjavaanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `mjavaquestion`
--
ALTER TABLE `mjavaquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mpythonanswer`
--
ALTER TABLE `mpythonanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `mpythonquestion`
--
ALTER TABLE `mpythonquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `pythonanswer`
--
ALTER TABLE `pythonanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `pythonquestion`
--
ALTER TABLE `pythonquestion`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `webanswer`
--
ALTER TABLE `webanswer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `webquestion`
--
ALTER TABLE `webquestion`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `androidanswer`
--
ALTER TABLE `androidanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `androidquestion`
--
ALTER TABLE `androidquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `javaanswer`
--
ALTER TABLE `javaanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `javaquestion`
--
ALTER TABLE `javaquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mandroidanswer`
--
ALTER TABLE `mandroidanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `mandroidquestion`
--
ALTER TABLE `mandroidquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mhtmlanswers`
--
ALTER TABLE `mhtmlanswers`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `mhtmlquestion`
--
ALTER TABLE `mhtmlquestion`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mjavaanswer`
--
ALTER TABLE `mjavaanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mjavaquestion`
--
ALTER TABLE `mjavaquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mpythonanswer`
--
ALTER TABLE `mpythonanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `mpythonquestion`
--
ALTER TABLE `mpythonquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pythonanswer`
--
ALTER TABLE `pythonanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pythonquestion`
--
ALTER TABLE `pythonquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webanswer`
--
ALTER TABLE `webanswer`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `webquestion`
--
ALTER TABLE `webquestion`
  MODIFY `qid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
