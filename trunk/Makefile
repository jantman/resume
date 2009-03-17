# Makefile for LaTeX resume

pdf:
	latex resume
	dvips -t letter resume.dvi
	ps2pdf resume.ps resume.pdf

clean:
	-rm -f *.aux *.log *.ps *.pdf *.dvi *~