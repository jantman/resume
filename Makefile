# Makefile for LaTeX resume

# on OpenSuSE, this requires:
# texlive-latex texlive-bin-latex ( for latex itself)
# texlive-bin-tex4ht texlive-tex4ht (for htlatex)
# aspell
#
# This was last built on OpenSuSE 12.1 using:
# texlive-latex-2011-1.1.2.noarch
# texlive-bin-latex-2011-1.1.2.x86_64
# texlive-bin-tex4ht-2011-1.1.2.x86_64
# texlive-tex4ht-2011-1.1.2.noarch
#


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
	mv resume.html live_html/
	mv resume.css live_html/
	cp resume.tex live_html/JasonAntman.tex
	mv resume.txt live_html/JasonAntman.txt
	mv resume.pdf live_html/JasonAntman.pdf

clean:
	-rm -f *.aux *.log *.ps *.pdf *.dvi *~ resume.html *.css *.4tc *.4ct *.idv *.lg *.tmp *.xref *.bak *.txt
	-rm -f labels.pl

spell:
	aspell --mode=tex --dont-tex-check-comments check resume.tex

text: html
	pandoc -f html -t plain -o resume.txt resume.html

