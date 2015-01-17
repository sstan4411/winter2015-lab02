<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <link href="../../public/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/css/text.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <span class="myhead">Simple Image Gallery</span>
                <span class="mynav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/index.php/gallery">Gallery</a></li>
                        <li><a href="/index.php/about">About</a></li>
                    </ul>
                </span>
            </div>
            <div class="alone"></div>
            <div id="content">
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2014,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/lightbox.min.js"></script> 
    </body>
</html>

