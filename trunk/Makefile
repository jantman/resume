# Makefile for LaTeX resume

.PHONY: clean spell

pdf:
	latex resume
	dvips -t letter resume.dvi
	ps2pdf resume.ps resume.pdf

clean:
	-rm -f *.aux *.log *.ps *.pdf *.dvi *~

spell:
	aspell --mode=tex --dont-tex-check-comments check resume.tex