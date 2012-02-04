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
I&#39;m currently employed full-time as a System Administrator at Rutgers University in Piscataway, NJ, in the Central Systems and Services group. I work almost exclusively on Linux systems, with an occasional bit of Mac. My primary roles are design and implementation of new systems and services, top tier support of the systems I have developed, overseeing documentation, monitoring, and performance analysis of production systems, third-level support of the campus-wide wireless network (now at approx. 1000 access points and approx. 50,000 users), and occasional field work installing and supporting the wireless and dorm networks. While the bulk of my time is spent in my real passions - designing and implementing new services and monitoring/performance analysis, I'm no stranger to some manual labor now and then, and have always had a penchant for building or repairing things with my hands; I'm currently responsible for managing our data center space and physical infrastructure, and have done a number of projects with Soekris single-board computers.
</p>
<p class="indented">
My largest projects at Rutgers have been specification, design and implementation of our DHCP infrastructure for wireless users, residential (dorm) networking and back-end systems (an IPAM-ish system with respect to residential networking), centralized logging (based on rsyslog) including extensive realtime syslog-to-relational database parsing, configuration management (Puppet), RADIUS authentication and accounting for all University wireless users, and development of our server configuration and security policies. I have also done extensive custom tool development and scripting, and have identified numerous bugs in open source software projects.
</p>


<p><span class="areatitle">What I&#39;m looking for:</span></p>
<p class="indented">I am currently employed with Rutgers University, and residing in New Jersey. I am in the process of relocating to Athens, Georgia within the next few weeks, and am seeking a full-time position in the Athens to Atlanta area. I am in the process of handing off my current projects to coworkers, and should be able to relocate with relatively short notice. My current position has a quite a bit of freedom for experimentation, design, and development, which I greatly value, and has given way to some of our most successful projects. I would ideally like to find something that allows me freedom to "dream up new things", to take charge of new services from identification of need through production, and the ability to put my interest in monitoring, logging, and performance analysis to good use. I also enjoy spending a fair amount of my time programming, whether scripting (PHP, shell, Python) or developing web-based tools and administrative interfaces (both PHP/static HTML and Ajax/JavaScript). My current position falls into <a href="http://www.sage.org/field/jobs-descriptions.html">SAGE Level 3</a>, and I am looking for something with similar responsibility and challenges.</p>

<p class="indented">
My real passions include performance and availability monitoring (Nagios / Cacti), configuration management and automation (Puppet and custom tools), development of new services, network troubleshooting, and custom tool development. I enjoy being challenged by my work and a variety of different problems, and work well under stress. I have also greatly enjoyed supporting the Rutgers University-wide wireless network, and the engineering and support challenges of wieless data networks.
</p>


<p><span class="areatitle">A bit about me:</span></p>

<p class="indented">
Since 2006, have been the sole system administrator and architect for the <a href="http://www.midlandparkambulance.com">Midland Park Ambulance Corps</a>, a volunteer, non-profit BLS ambulance provider. In addition to designing and administering the general use and mission-critical LANs, I also developed a custom application for electronic patient care report management (ePCR). <a href="http://www.php-ems-tools.com">PHP EMS Tools</a>, an open source application that I originally developed for the Corps, tracks on-duty scheduling, membership roster, equipment maintenance, emergency response statistics, and other EMS management tasks. In early 2009, I also developed an Asterisk-based add-on to allow members responding to emergency calls to notify dispatch and other members of their response via telephone (results displayed in a web application, and on monitors around headquarters). I am currently underway with a zero-downtime migration of critical systems from self-hosting to an external hosting provider.
</p>

<p class="indented">
Personally, I have been a Linux user for nine years, and have been administering Linux servers for over five years. I have a strong interest in use of the latest technologies, lately including <a href="http://www.puppet.org">Puppet</a> for automation. My experience with open soruce software has allowed me not only to gain extensive experience with the latest technologies outside the workplace, but also to complete a number of major projects at Rutgers with zero software budget. I maintain a small server farm at home for my personal web site and projects, and generally use this as my initial testbed for new technologies before implementing them at work. I consider myself to be a healthy mix of programmer, general system administrator and network administrator.
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
