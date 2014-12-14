from fabric.api import *
import fabric.contrib.project as project
import os
import re
import sys
import datetime

# Local path configuration (can be absolute or relative to fabfile)
env.deploy_path = 'output'
DEPLOY_PATH = env.deploy_path

def clean():
    """ remove intermediate files """
    local('rm -f *.aux *.log *.ps *.pdf *.dvi *~ resume.html *.css *.4tc *.4ct *.idv *.lg *.tmp *.xref *.bak *.txt')
    local('rm -f labels.pl')

def build():
    """ build output """
    clean()
    # pdf
    local('latex resume')
    local('dvips -t letter resume.dvi')
    local('ps2pdf resume.ps resume.pdf')
    # html
    local('htlatex resume.tex "xhtml"')
    local('./dohtml.sh')
    # text
    local('pandoc -f html -t plain -o resume.txt resume.html')
    # dist
    local('mv resume.html live_html/')
    local('mv resume.css live_html/')
    local('cp resume.tex live_html/JasonAntman.tex')
    local('mv resume.txt live_html/JasonAntman.txt')
    local('mv resume.pdf live_html/JasonAntman.pdf')

def spell():
    """ aspell check tex source """
    local('aspell --mode=tex --dont-tex-check-comments check resume.tex')

def publish():
    """ publish to GH pages """
    resp = prompt("This will push live_html/ to GH pages (NO REBUILD). Ok? [yes|No]")
    if not re.match(r'(y|Y|yes|Yes|YES)', resp):
        return False
    local("ghp-import live_html")
    local("git push origin gh-pages")
