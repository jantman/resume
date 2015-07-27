My Resume
=========

[![Project Status: Active - The project has reached a stable, usable state and is being actively developed.](http://www.repostatus.org/badges/0.1.0/active.svg)](http://www.repostatus.org/#active)

See http://resume.jasonantman.com or the live_html/ directory for the actual assets. This is mostly just internals and how it's built.

OS Requirements
---------------

For package requirements on Arch Linux, see ``requirements_arch.pp``.

Python Requirements
--------------------

    Fabric==1.7.0
    ghp-import==0.4.1

Building
--------

* To build all assets (HTML, PDF, plain text): ``fab build``
* To publish to live site: ``fab publish``

License
-------

The supporting code here and LaTeX sources (and my resume itself, for what that's worth)
are licensed under the GNU GPL version 3.0.
