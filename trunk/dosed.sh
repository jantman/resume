#!/bin/bash
# script to cleanup latex2html output

sed -i -e 's/<title><\/title>/<title>Jason Antman\&#39;s Resume<\/title><!-- edited by dosed.sh -->/' resume.html

grep -v "^div.tabular, div.center div.tabular {" resume.css > resume.css.temp
mv resume.css.temp resume.css
grep -v "^table.tabular {" resume.css > resume.css.temp
mv resume.css.temp resume.css

echo "/* ADDED BY dosed.sh script : */" >> resume.css
echo "div.tabular, div.center div.tabular {text-align: left; margin-top:0.5em; margin-bottom:0.5em; }" >> resume.css
echo "table.tabular {margin-left: 2em; margin-top: 1em;}" >> resume.css
echo ".description dt {margin-top: .8em;}" >> resume.css
