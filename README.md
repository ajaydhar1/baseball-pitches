# Baseball Pitches
The full source code for a PHP website I built that shows a visual glossary of the primary types of baseball pitches.

Click here to see the live site: [https://baseball-pitches.com](https://baseball-pitches.com)

![Pitching_Flames][pitching-flames]

This README file is meant for people at every level of software experience, from Zero to Hero.

<!-- TOC -->
## Table Of Contents 📓

<!-- TABLE OF CONTENTS -->
<!--
<details>
  <summary>TOC</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
         <li><a href=#project-file-structure>Project File Structure</a></li>
         <ul>
            <li><a href="#the-files">The Files</a></li>
            <li><a href="#the-directories">The Directories</a></li>
         </ul>
         <li><a href="#webpage-design">Webpage Design</a></li>
         <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#downloading-the-source-code">Downloading The Source Code</a></li>
    <li><a href="#configuring-the-code-for-your-own-use">Configuring The Code For Your Own Use</a></li>
    <li><a href="#getting-your-site-online">Getting Your Site Online</a></li>
  </ol>
</details>
-->

<details>
  <summary>TOC</summary>
  <ol>
    <li>
      About The Project
      <ul>
         <li>Project File Structure</li>
         <ul>
            <li>📝 The Files</li>
            <li>📂 The Directories</li>
         </ul>
         <li>Webpage Design</li>
         <li>Built With 🔨</li>
      </ul>
    </li>
    <li>Downloading The Source Code</li>
    <li>Configuring The Code For Your Own Use</li>
    <li>Getting Your Site Online</li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

This is a simple PHP website I made for myself to learn a little more about baseball ⚾. Pitching is like 90% of the game, so I figured if I could recognize the pitches as they're thrown, I could enjoy the games a little more. And it worked! I have grown to really enjoy watching baseball games :)

[![Product Name Screen Shot][product-screenshot]](https://baseball-pitches.com)

### Project File Structure

The project structure for this website is very simple, and is the standard file structure for most websites. Here is the directory tree:

![Directory_Screen_Short][directory-screenshot]

For this site there is one webpage, ```index.php```, and it imports three PHP fragments. 

#### 📝 The Files

* index.php (homepage)
* ___pitch-selector.php
* ___navigation.php
* ___config.php

🏠 **The Homepage**

The one and only webpage in this project is named ```index.php```.

**Note:** the default webpage displayed when the domain name is entered into the address bar is always the file named ```index```. This is true for all websites.

👑 **The PHP Fragments**

There are three PHP fragment files that are imported into the homepage. These fragments use the naming convention that prepends the filename with three underscores, like ```___config.php```.

While developing this site, some of the code from the ```index.php``` file was separated out into three PHP fragments for readability, but in larger, multi-page projects, it's also done for reusability. For instance, in order to show the same menu across multiple pages. This way, if you have to make a change to the menu, you only have to make it in one file: the menu fragment file.

#### 📂 The Directories

* css/
   * Contains the CSS files for styling the site
* images/
   * Contains the images used for the site and also for this README file
* js/
   * Contains a JavaScript file

### Webpage Design

The webpage consists of a full-screen YouTube video and a side navigation menu for choosing the different types of pitches to show.

[![Product Name Screen Shot][product-screenshot]](https://baseball-pitches.com)

#### 💼 How It Works

When the user first lands on the website, the reel for the Four Seam Fastball is shown by default.

If the user then selects another pitch type from the side nav, the same ```index.php``` page is reloaded, and the selected pitch type appears in the address bar as a URL parameter, like ```pitch=1```. When the page is reloaded, the ```___pitch_selector.php``` fragment determines which video reel to show based on the pitch number in the URL.

### Built With 🔨

These are the major frameworks/libraries used in the project.

Click on a badge to see an all-in-one crash course on that technology.

* [![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.youtube.com/watch?v=pWBRjQBWuYA)
* [![HTML](https://img.shields.io/badge/HMTL-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://www.youtube.com/watch?v=kDyJN7qQETA)
* [![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://www.youtube.com/watch?v=CUxH_rWSI1k)
* [![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=323330)](https://www.youtube.com/playlist?list=PLBA965A22D89CF13B)
* [![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://www.youtube.com/watch?v=BWXggB-T1jQ)
* [![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://www.youtube.com/watch?v=Jyvffr3aCp0)
* [![YouTube](https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://developers.google.com/youtube/iframe_api_reference)

<!-- DOWNLOADING THE SOURCE CODE -->
## Downloading The Source Code ⬇

There are two ways to get the source code on your computer.

1. If you have Git installed on your machine, you can clone the repo
   ```sh
   git clone https://github.com/ajaydhar1/baseball-pitches.git
   ```
2. Or you can just download the project:
   
   1. Click the green Code button at the top right of the screen
   2. Select "Download ZIP"


<!-- CONFIGURING THE CODE FOR YOUR OWN USE -->
## Configuring The Code For Your Own Use 🔪

Modifying the project to make it your own is very easy. I have externalized three variables into a configuration file named ```___config.php```. These variables are the only things you need to change, at a minimum, to personalize the site and make it your own.

![Config_File_Screen_Short][config-screenshot]

The 3 variables are:

1. **$site_name** = "Baseball Pitches";
   * What you want to name your site
3. **$site_domain** = "baseball-pitches.com";
   * The domain name you purchased for the site
5. **$ga_measurement_id** = "G-XXXXXXXXXX";
   * The Google Analytics Measurement ID for tracking the users on your site

Since you have the full source code available to you, you can make more changes too, whether to the CSS styling, the contents of the navigation menu, or something else.

You can even change the main YouTube video and repurpose the site from baseball pitching to another topic. It all depends on your comfort level and your goals.

<!-- GETTING YOUR SITE ONLINE -->
## Getting Your Site Online 🔌

There are a few steps you need to take to put the site online:

### Step 1:
Buy a domain name from a site like GoDaddy.com ([instructions](https://www.godaddy.com/how-to/real-tips-from-real-guides/how-to-buy-a-domain-with-godaddy)).
  * I recommend getting Full Domain Protection so people can't look up your name and address based on the domain name
  * Also, uncheck "Start your website for FREE"

### Step 2:
Sign up for a hosting plan from a site like Hostinger.com ([instructions](https://www.youtube.com/watch?v=s8OwGRqmdMs) - Stop at 2:15 into the video!! Unlike they say in the video, I recommend you do not buy the domain name through Hostinger! I like keeping all my domain names in one place at GoDaddy).

### Step 3:
Point your GoDaddy domain name to your website account at Hostinger ([instructions](https://www.youtube.com/watch?v=k7M1p3ExdfM)).

### Step 4:
Create a Google Analytics account for your new domain name ([instructions - step 1](https://www.youtube.com/watch?v=ybK-VUAxZ_8)) ([instructions - step 2](https://www.youtube.com/watch?v=kYdRHSH2l8k) - Stop at 0:38 into this video!! You can see the Measurement ID in the top right of the screen. Copy that for Step 5.).

### Step 5:
Update the configuration file ```___config.php``` in the project as mentioned above. Update the site name, site domain (from Step 1), and Google Analytics Measurement ID (from Step 4).

### Step 6:
Connect to your hosting provider using FileZilla and upload the project files into the ```public_html``` folder ([instructions for connecting FileZilla to Hostinger account](https://www.youtube.com/watch?v=efgPQw0Aq2A)).

   ![Filezilla_Screen_Short][filezilla-screenshot]
When you connect to Hostinger using FileZilla, your computer's directory structure is on the left and the server's directory structure is on the right. On the left, navigate to your project folder. On the right, you should click on the public_html folder (this is where your website files will live). Then just select all the files from your project folder on the left, and drag and drop them into the public_html folder on the right. That's it!

### Step 7:
Test your site by opening a browser and typing your domain name into the address bar.

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[product-screenshot]: https://baseball-pitches.com/images/screenshot.jpg
[directory-screenshot]: https://baseball-pitches.com/images/directory-structure.jpg
[config-screenshot]: https://baseball-pitches.com/images/config-file-4.jpg
[filezilla-screenshot]: https://baseball-pitches.com/images/filezilla-3.jpg
[pitching-flames]: https://baseball-pitches.com/images/pitching-flames.gif
