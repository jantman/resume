# Makefile for LaTeX resume

.PHONY: clean spell all

pdf:
	latex resume
	dvips -t letter resume.dvi
	ps2pdf resume.ps resume.pdf

html:
	latex2html -strict -nonavigation -split 0 -title "Jason Antman&#39;s Resume" -html_version 4.0 -nosubdir -iso_language EN.US resume.tex

all: pdf text html

clean:
	-rm -f *.aux *.log *.ps *.pdf *.dvi *~ *.html *.css *.4tc *.4ct *.idv *.lg *.tmp *.xref *.bak
	-rm -f labels.pl

spell:
	aspell --mode=tex --dont-tex-check-comments check resume.tex

text:
	catdvi resume.dvi