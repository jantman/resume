#!/bin/bash
# script to cleanup latex2html output

# add a title
sed -i -e 's/<title><\/title>/<title>Jason Antman\&#39;s Resume<\/title><!-- edited by dosed.sh -->/' resume.html

# manipulate the CSS

# remove old lines
grep -v "^div.tabular, div.center div.tabular {" resume.css > resume.css.temp
mv resume.css.temp resume.css
grep -v "^table.tabular {" resume.css > resume.css.temp
mv resume.css.temp resume.css

# add new lines
echo "/* ADDED BY dosed.sh script : */" >> resume.css
echo "div.tabular, div.center div.tabular {text-align: left; margin-top:0.5em; margin-bottom:0.5em; }" >> resume.css
echo "table.tabular {margin-left: 2em; margin-top: 1em;}" >> resume.css
echo ".description dt {margin-top: .8em;}" >> resume.css
echo ".leftdiv{ float: left; margin-left: 2em; text-align: left;}" >> resume.css
echo ".rightdiv{ float: right; margin-right: 2em; text-align: right;}" >> resume.css
echo ".clearing{ clear: both;}" >> resume.css



# BIG WORK - put the parts of the html before and after the name/contact info table in their own files
PART1=`grep -n "<div" resume.html | head -1 | awk -F: '{ print $1 }'`
PART1=`echo "$PART1 - 1" | bc`
head "-$PART1" resume.html > resume.html.1

PART2=`grep -n "</tr></table></div>" resume.html | head -1 | awk -F: '{ print $1 }'`
LEN=`wc -l resume.html | awk '{ print $1 }'`
PART2=`echo "$LEN - $PART2" | bc`
tail "-$PART2" resume.html > resume.html.2

# put it all together
cat /dev/null > resume.html
cat resume.html.1 >> resume.html
cat resume-static-head.html >> resume.html
cat resume.html.2 >> resume.html

rm resume.html.1
rm resume.html.2
