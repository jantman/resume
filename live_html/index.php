<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jason Antman&#39;s Resume</title>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<div class="heading">Jason Antman</div>
<div class="heading2">Linux System Administrator/Architect</div>

<div class="area">
<?php
$mtime = filemtime("JasonAntman.pdf");
$mtimeStr = date("Y-m-d", $mtime);
?>
<p><span class="areatitle">My current resume is available in the following formats <em>(last updated <?php echo $mtimeStr; ?>)</em>:</span></p>
<ul>
<li><a href="resume.html">HTML</a></li>
<li><a href="JasonAntman.pdf">Adobe PDF</a></li>
<li><a href="JasonAntman.txt">Plain (ASCII) Text</a> <em>(most suitable for keyword scanners)</em></li>
<li><a href="JasonAntman.tex">L<sup><small>A</small></sup>T<small>E</small>X Source</a></li>
<!-- <li><a href="JasonAntman.doc">Word Document</a> <em>(the format I created my resume in does not allow easy conversion to Word, so the PDF is much better for viewing. But given the number of requests I got for this format, I&#39;m providing it, though it requires substantial manual effort to generate.)</em></li> -->
</ul>
</div> <!-- END DIV area -->

<div class="area">
<p><span class="areatitle">Potential employers may also be interested in visiting:</span></p>
<ul>
<li><a href="http://blog.jasonantman.com">My blog</a> - an esoteric collection of posts on my projects and other technical matters.</li>
<li>My <a href="http://www.jasonantman.com">homepage</a>, including links to most of my personal projects.</li>
<li>My <a href="http://serverfault.com/users/22283/jason-antman">ServerFault.com</a> user profile (ServerFault is the StackExchange site for system administration).</li>
<li>My <a href="http://cvs.jasonantman.com">CVS repository (ViewVC)</a> - many of my smaller personal projects and useful scripts.</li>
<li>My <a href="http://svn.jasonantman.com">Subversion repository</a> - my larger personal projects.</li>
</ul>

<p><a href="http://www.jasonantman.com/contact.php">Contact Me</a></p>

<p><span class="areatitle">What I do:</span></p>
<p class="indented">
I&#39;m currently employed full-time as a System Administrator at <a href="http://www.techtarget.com/">TechTarget</a> in Alpharetta, Georgia, in the Operations group. We are an IT media and marketing company with an international presence. My team of five supports a homogeneous mix of approximately 300 Linux, Solaris and Windows servers (physical and virtual) which power TechTarget's support systems and public web presence of of over 1,000 domains, serving over 30M requests per day. My largest project so far has been the implementation of Puppet for all new systems, as well as the day-to-support of our systems.</p>
<p class="indented">Prior to working at TechTarget, I was a sysadmin at Rutgers University, working almost exclusively on Linux systems, with an occasional bit of Mac. My primary roles were design and implementation of new systems and services, top tier support of the systems I have developed, overseeing documentation, monitoring, and performance analysis of production systems, third-level support of the campus-wide wireless network (approx. 1000 access points and approx. 50,000 users), and occasional field work installing and supporting the wireless and dorm networks. While the bulk of my time was spent in my real passions - designing and implementing new services and monitoring/performance analysis, I&#39;m no stranger to some manual labor now and then, and have always had a penchant for building or repairing things with my hands; I was responsible for managing our data center space and physical infrastructure, and had a number of projects with Soekris single-board computers. My largest projects at Rutgers were specification, design and implementation of the DHCP infrastructure for wireless users, residential (dorm) networking and back-end systems (an IPAM-ish system with respect to residential networking), centralized logging (based on rsyslog) including extensive real-time syslog-to-relational database parsing, configuration management (Puppet), RADIUS authentication and accounting for all University wireless users, and development of server configuration and security policies. I have also done extensive custom tool development and scripting, and managed the relocation of three racks of production equipment within our data center (including fiber relocation and migration the three phase power) in a six hour downtime window.
</p>

<p><span class="areatitle">A bit about me:</span></p>

<p class="indented">
I was born and raised in Midland Park, New Jersey, where I lived until October 2011 when my wife and I moved to Athens, Georgia. I have always been a techie, and have a knack for working with most things electrical or mechanical. Until arriving in Georgia, I also spent a large amount of my time volunteering with the local non-profit ambulance corps (see below), both as an EMT and a techie, and taking on whatever else came my way - whether it was chairing the by-laws committee or electrical work on ambulances. When I&#39;m not at the console, I&#39;m quite happy anywhere outdoors, whether it&#39;s in the mountains or on the water - though now living in an apartment, I no longer have yard work as an excuse to get outside.</p>
</p>

<p class="indented">
Since 2006, have been the sole system administrator and architect for the <a href="http://www.midlandparkambulance.com">Midland Park Ambulance Corps</a>, a volunteer, non-profit BLS ambulance provider. In addition to designing and administering the general use and mission-critical LANs, I also developed a custom application for electronic patient care report management (ePCR). <a href="http://www.php-ems-tools.com">PHP EMS Tools</a>, an open source application that I originally developed for the Corps, tracks on-duty scheduling, membership roster, equipment maintenance, emergency response statistics, and other EMS management tasks. In early 2009, I also developed an Asterisk-based add-on to allow members responding to emergency calls to notify dispatch and other members of their response via telephone (results displayed in a web application, and on monitors around headquarters). I am currently underway with a zero-downtime migration of critical systems from self-hosting to an external hosting provider. From 2006 until I moved to Georgia in late 2011, I was also an active volunteer EMT, holding various positions including First Lieutenant. 
</p>

<p class="indented">
Personally, I have been a Linux user for nine years, and have been administering Linux servers for over five years. I have a strong interest in use of the latest technologies, lately including <a href="http://www.puppet.org">Puppet</a> for automation. My experience with open source software has allowed me not only to gain extensive experience with the latest technologies outside the workplace, but also to complete a number of major projects at Rutgers with zero software budget. I used to maintain a small server farm at home for my personal web site and projects, and as my initial testbed for new technologies before implementing them at work, but I&#39;ve migrated this to <a href="http://www.linode.com/?r=5c8ad2931b410b55455aadbcf0a8d86d6f698a91">Linode</a> hosting. I consider myself to be a healthy mix of programmer, general system administrator and network administrator.
</p>

<p><span class="areatitle">Contact Information:</span></p>
<table style="margin-left: 2em;">
<tr><th>cell</th><td>201-906-7347</td></tr>
<tr><th>email</th><td><a href="mailto:jason@jasonantman.com">jason@jasonantman.com</a></td></tr>
</table>

</div> <!-- END DIV area -->

<p style="text-align: center;"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
</p>


</body>

</html>
