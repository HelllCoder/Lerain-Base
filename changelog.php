<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u | Changelog - zmeny na stránke">
        <meta name="author" content="Benji" >
        <link rel = "stylesheet" title = "Page's CSS" href = "styles.css">
        <title> Lerain Software Base | Changelog </title>
    </head>
    
    <body>
        <nav id = "main">
            <a title = "Title page" href = "index.php"> Home </a>
			<a title = "What's new in Lerainsoft?" href = "news.php"> News </a>
            <a title = "Who is in our team?" href = "team.php"> Team </a>
            <a title = "Our products" href = "products.php"> Products </a>
			<a title = "Services offered by us" href = "services.php"> Services </a>
            <a title = "Lerainsoft Developer Network" href = "ldn.php"> LDN </a>
        </nav>
        
		<main>		
			<section>
				<pre id = "changelog">
<!-- Sorry for intending, but for changelog I think it is acceptable :) -->
<h3>VERSION 0.1.???</h3>
* Changed font for "category-type" headlines
* Renamed selector for "text-boxes" from "new" to "lerainBox"
* Fixed displaying of actual tab in menu (LDN page)
* Slightly improved size of each tab in menu

<h3>VERSION 0.1.109</h3>
* Fixed position of monitor on HOME page
* Moved "green-circle-styles" to DEPRECATED section of CSS file

<h3>VERSION 0.1.107</h3>
* Added page for Products (for now it is blank)
* Added page for Services (for now it is blank)
* Added page for LDN (for now it is blank)
* Changed border of changelog box
* Slightly improved background of changelog box
* Removed headline "CHANGELOG" from changelog page
* Completerely remaked menu and footer

<h3>VERSION 0.1.090</h3>
* New background for page
* Footer has now fixed position
* Menu has now also fixed position (so it is always avalaible)
* Footer is now slightly smaller by default
* Menu is now slightly smaller by default
* Completely restyled article boxes in News section
* Removed some uneccessary CSS styles

<h3>VERSION 0.1.074</h3>
* Slightly changed position of video
* Added CSS definition for author notes (small element)
* Added NEWS page
* Updated status of developer Sergej
* Removed uneccessary files
* Grammar fixes

<h3>VERSION 0.1.064</h3>
* Completely reworked main page (home)

<h3>VERSION 0.1.053</h3>
* Translated description of tabs in menu to English
* Moved "Contact" from menu to footer
* Reordered tabs in menu
* Added "News" and "Services" tabs to menu
* Changed descriptions of tabs in menu
* Added shadowing for h3 headlines
* Tabs will change its color to teal when is it clicked

<h3>VERSION 0.1.048</h3>
* Team page has been translated to English
* removed uneccessary group of blank lines from Team page's code
* removed part of whitespace from top of this changelog

<h3>VERSION 0.1.046</h3>
* added Team page, where are members of Lerainsoft displayed
* added shadowing for main headlines
* grammar fixes

<h3>VERSION 0.1.037</h3>
* added standard validation to e-mail field on contact page
* text-message field on contact page is now bigger
* added CSS-styling for e-mail fields
* changed mail-text-skeleton sent from contact page
* removed unneccessary condition from contact script

<h3>VERSION 0.1.034</h3>
* improved target links in menu from xxx.html to xxx.php (each xxx file
  should include at least footer, this is why .php)
* main content field of page have now minimal size 600px
* added "FORM" section to CSS styles. Here can be placed various styles
  for form controls
* added right padding (30px) for main content
* added contact form, now it is possible to send message to LS


<h3>VERSION 0.1.023</h3>
* merged lines with version and changelog in footer

<h3>VERSION 0.1.022</h3>
* index.html renamed to index.php (because of "includes")
* footer is now included by php from footer.html
* completely restyled h1 tags (headlines of highest level)
* renamed mainHeadline.otf to headline.otf (better semantic)
* added styling for h3 elements
* added this changelog on separate page 

<h3>VERSION 0.1.018</h3>
* Aditional informations added to footer
* Changed color of standard link from orange to green
* Standard links are now bold
* When mouser is over some of standard link, that link's color will be
  slightly changed

<h3>VERSION 0.1.015</h3>
* leftArea and rightArea divs replaced by section tags
* groups (circle and appropriate text) wrapped to aside tags
* all content (except footer and menu) wrapped to main tag
* removed uneccessary bottomInfo div
* removed uneccessary mainPageAside div
* removed duplicate use of background-color property for body tag in CSS
* removed duplicate use of background-color property for "nav a"
  selector in CSS
* standardized width of footer
* h1#mainHeadline in CSS is now commented. It haven't any use, 
  but we may use it later for something
* added comments to CSS styles
* added "DEPRECATED" section to CSS styles, where can be currently unused
  styles added

<h3>VERSION 0.1.007</h3>
* css styles are divided on sections (menu, images, texts, containers etc.)
* changed mouse cursor type on green circles
* changed position of Lerain Logo
* changed alignment of some lines of code

<h3>VERSION 0.1.004</h3>
* removed some adds
* changed description of "Lerain Account" tab in menu
* changed background color of current tab in menu
* prevented to change background-color when mouse is over current tab
  in menu (except font-color of that tab)
* removed uneccessary parts of Lerain Logo image
* when is mouse over some green-circles, text in right side is now 
  underlined instead of bold
<!-- End of changelog - (You don't say!) -->
				</pre>
			</section>
			<script> alert("This page is deprecated and obsolete."); </script>
		</main>	
		
        <? include "footer.html"; ?>   
    </body>
</html>
