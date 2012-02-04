# Makefile for LaTeX resume

.PHONY: clean spell all

pdf:
	latex resume
	dvips -t letter resume.dvi
	ps2pdf resume.ps resume.pdf

html:
	htlatex resume.tex "xhtml"
	./dohtml.sh

all: pdf html text dist

dist:
	mkdir dist
	mv resume.html dist/
	mv resume.css dist/
	cp resume.tex dist/JasonAntman.tex
	mv resume.txt dist/JasonAntman.txt
	mv resume.pdf dist/JasonAntman.pdf

clean:
	-rm -f *.aux *.log *.ps *.pdf *.dvi *~ resume.html *.css *.4tc *.4ct *.idv *.lg *.tmp *.xref *.bak *.txt
	-rm -f labels.pl
	-rm -Rf dist

spell:
	aspell --mode=tex --dont-tex-check-comments check resume.tex

text:
	lynx -dump -nolist resume.html > resume.txt

