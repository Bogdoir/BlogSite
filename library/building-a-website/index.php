<?php $title = "Building a Website"; include_once "C:/xampp/htdocs/BlogSite/assets/html/header.html"; ?>
	<main id="ArticlePage">
		<section>
			<div class="Container" id="Description">
				<h2>Description</h2><hr>
				<table>
					<colgroup>
						<col span="1" style="width: 12%;">
						<col span="1" style="width: 88%;">
					</colgroup>
					<tbody>
						<tr><td>Author</td><td>J. J. O'Ceallacháin</td></tr>
						<tr><td>Published</td><td>28/12/2022</td></tr>
						<tr><td>Written in</td><td>English <select><option selected disabled>Translations</option><option>English</option><option>Spanish</option></select></td></tr>
						<tr><td>Chapters</td><td>11</td></tr>
						<tr><td>Tags</td><td><a title="From one person's opinion.">Opinionized</a>, First-Hand-Experience, Tutorial</td></tr>
					</tbody>
				</table>
				<h3>Blurb</h3>
				<p>This article should hopefully help those getting into web design figure out their first steps into creating their own website.</p>
				<h3>Author's Notes</h3>
				<p>Enjoy the read!</p>
			</div>
			<div class="Container" id="Index">
				<h2>Index</h2><hr>
				<ul>
					<li><b><a href="#Title">Title</a></b></li>
					<li><a href="#Chapter1">Terminologies</a></li>
					<li><a href="#Chapter2">Designing a Webpage</a></li>
					<li><a href="#Chapter3">Level 1 - Structure Format using HTML:</a>
						<ul>
							<li><a href="#Chapter3a">Step 1:</a></li>
							<li><a href="#Chapter3b">Step 2:</a></li>
							<li><a href="#Chapter3c">Step 3:</a></li>
							<li><a href="#Chapter3d">Step 4 - Putting on a Face:</a></li>
							<li><a href="#Chapter3e">Step 5 - Adding Content:</a></li>
							<li><a href="#Chapter3f">Step 6 - Formatting:</a></li>
						</ul>
					</li>
					<li><b><a href="#Conclusion">Conclusion</a></b></li>
				</ul>
			</div>
			<div class="Container">
				<h2>Sources</h2><hr>
				<ul>
					<li><a href="">_ _ _ _ _ _</a></li>
					<li><a href="">_ _ _ _ _ _</a></li>
					<li><a href="">_ _ _ _ _ _</a></li>
					<li><a href="">_ _ _ _ _ _</a></li>
				</ul>
			</div>
		</section>
		<article class="Container">
			<h1 id="Title">Building a Website</h1>
			<p>Greetings and welcome to my article. Today I plan to show to you and explain how to create a simple website. First, let's start with the understanding the terminologies we'll be using.</p>
			<div class="Chapter" id="Chapter1">
				<h2>Terminologies</h2>
				<p>The majority of websites on the internet are built using two coding languages; <bold>HTML</bold> and <bold>CSS</bold>. Similar to the languages used to communicate between people such as, English, Spanish, French etc, coding languages are used to communicate within a virtual environment, such as when creating programs, applications and websites.</p>
				<p>These two languages - HTML, shortened for "HyperText Markup Language" and CSS, shortened for Cascading Style Sheet - will be the virtual languages we'll be using when creating our wesbite.</p>
				<p>What does a website consist of? A website is a virtual environment on the internet made up of multiple "webpages" that display information.</p>
			</div>
			<div class="Chapter" id="Chapter2">
				<h2>Building a Webpage</h2>
				<p>Let's build our first webpage for our future website. Before moving forward, however, it is highly advantageous to have content before you begin. It really helps moving forward. Practicing web design without content is certainly possible but it may stunt your website growth once you have reached a certain point.</p>
				<p>I will be creating a series of articles to help guide you through the different levels of building a website. Each level will strive to be as concise as possible.</p>
			</div>
			<div class="Chapter" id="Chapter3">
				<h2>Level 1; Structure Format using HTML:</h2>
				<div id="Chapter3a">
					<h3>Step 1:</h3>
					<p>Create a folder on your computer, advisably in a place easy to return to, and give it the name of the website you plan to create. Inside this folder, create a text document and name it "index.html". Like a book, this page will be the index of your website providing links to new pages in the future.</p>
				</div>
				<div id="Chapter3b">
					<h3>Step 2:</h3>
					<p>Open this new "index.html" file in a text editor. Return to the file and open it up in your internet browser. Notepad++ and Google will be the text editing application and browser I'll be using for this article, respectively.</p>
					<span class="ImgCol"><img src="01-ShowFolder.png"><img src="02-ShowIndexFile.png"></span>
				</div>
				<div id="Chapter3c">
					<h3>Step 3:</h3>
					<p>Let's begin! Inside your index text file, format it in this way;</p>
					<img src="03-Format.png">
					<p>The "DOCTYPE html" is a statement that tells the browser what kind of document file type is being opened. Although no longer absolutely necessary in web design anymore due to website advancement, it is still good practice to include it to avoid any unforeseen problems.</p>
					<p>The opening and closing "html" are tags that encapsulate your page. They ensure everything within are displayed correctly.</p>
					<p>The "head" and "body" are also tags, best written in that order. The "head" is used for providing code inside of it while the "body" is used for visually displaying content on your page.</p>
				</div>
				<div id="Chapter3d">
					<h3>Step 4 - Putting on a Face:</h3>
					<p>Give your website an identity; provide a name and face to your page. These will be seen in the tabs of the browser. To do this, make space between your open and closing "head" tag and add the following;</p>
					<img src="04-FormatHead.png">
					<p>Here the title simply states the title/name of the page. and the second line links an image, such as a logo, for the page. Now you need to provide that image. To do this, return to your initial website folder and create a new folder called "images" and place a suitable image inside it. For now, this is where all images will be stored, including your website image/logo. In web design, this image is called a "favicon" and uses the ".ico" suffix.</p>
					<span class="ImgCol"><img src="05-SiteTab.png"><img src="06-ImageFolder.png"></span>
				</div>
				<div id="Chapter3e">
					<h3>Step 5 - Adding Content:</h3>
					<p>Now to add your content; information, articles, images, videos etc. Between your opening and closing "body" tags, place in all your text-based content. To add images to your page, place them inside your "images" folder with your "favicon.ico" image.</p>
					<p>Once inside, return to your index document and write the following for wherever you'd like an image;</p>
					<img src="07-FormatBody.png">
					<p>Within each of the quotation marks, add the path and name of your image, including it's suffix. The current path is written "images/".</p>
				</div>
				<div id="Chapter3f">
					<h3>Step 6 - Formatting:</h3>
					<p>Reload the website page in your browser. There, your website is complete. If this were to be hosted online, people may now find your page and look at... this. It's unclear and a little untidy, right?</p>
					<p>Let's format everything!</p>
					<p>Inside the text document, take your time and specify aspects of the page. Define headings, paragraphs, bullet points etc. and reload.</p>
					<span class="ImgCol"><b>Before</b><b>After</b></span>
					<span class="ImgCol"><img src="08-FormatNO.png"><img src="09-FormatYES.png"></span>
				</div>
			</div>
			<div class="Chapter" id="Conclusion">
				<h2>Conclusion</h2>
				<p>And there we go, we've created our first webpage for our future website! Now yes, although our site still looks quite simple, this is pretty much it. You'll need to continue this process for each page, attach links to each of them and there you have it, your website is created!</p>
				<p>In the next article I write, relating to web design, I'll teach you how to use CSS to decorate your page. Repositioning content, colouring, formatting and so on... I hope this article has helped! Thank you for reading~</p>
			</div>
		</article>
	</main>
<?php include_once "C:/xampp/htdocs/BlogSite/assets/html/footer.html"; ?>