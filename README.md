# Baseball Pitches
The full source code for a PHP website I made that shows a visual glossary of the main types of baseball pitches.

<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://baseball-pitches.com)

This is a simple PHP website I made for myself to learn a little more about baseball ⚾. Pitching is like 90% of the game, so I figured if I could recognize the pitches as they're thrown, I could enjoy the games a little more. And it worked! I have grown to really enjoy watching baseball games : )

The project structure is very simple. It is a one page site with a side navigation menu for choosing the different types of pitches to show. When the user selects a pitch type, the same page reloads and the selected pitch type appears in the address bar as a url parameter, like "pitch=1", and the video reel corresponding to that pitch number is shown.

The one main webpage in the project is named "index.php". The default page that is shown when entering a domaim name in the address bar is always the file with the name "index". This is true for all websites.

This index.php file imports a few PHP fragment files, which use the naming convention of prepending the file name with three underscores, like "___config.php". In this project, seperating the code into a few PHP fragment files was done for readability. But in larger, multi-page projects, it's also done for reusability. Like for showing the same menu across multiple pages. So if you have to make a change to the menu, you only have to make it in one file, the menu fragment file.

### Built With

These are the major frameworks/libraries used in the project.

Click on a badge to see an all-in-one, crash course on that technology.

* [![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=whit)](https://www.youtube.com/watch?v=pWBRjQBWuYA)
* [![HTML](https://img.shields.io/badge/HMTL-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://www.youtube.com/watch?v=kDyJN7qQETA)
* [![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://www.youtube.com/watch?v=CUxH_rWSI1k)
* [![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=323330)](https://www.youtube.com/playlist?list=PLBA965A22D89CF13B)
* [![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://www.youtube.com/watch?v=BWXggB-T1jQ)
* [![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://www.youtube.com/watch?v=Jyvffr3aCp0)
* [![YouTube](https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://developers.google.com/youtube/iframe_api_reference)

<!-- DOWNLOADING THE SOURCE CODE -->
## Downloading The Source Code

There are two ways to get the source code on your computer.

1. If you have Git installed on your machine, you can clone the repo
   ```sh
   git clone https://github.com/ajaydhar1/baseball-pitches.git
   ```
2. Or you can just download the project by:
   
   1. Clicking the green Code button on the top right of the screen
   2. Selecting "Download ZIP"


<!-- CONFIGURING THE CODE FOR YOUR OWN USE -->
## Configuring The Code For Your Own Use

Modifying the project to make it your own is very easy. I have externalized three variables into the file "___config.php" (for configuration). These variables are the only things you need to change, at a minimum, to personalize the site as your own.

The three variables are:

1. $site_name = "Baseball Pitches"; ----- (What you want to name your site)
2. $site_domain = "baseball-pitches.com"; ----- (The domain name you purchased for the site)
3. $ga_measurement_id = "G-XXXXXXXXXX"; ----- (The Google Analytics measurement ID for tracking the users on your site)

Since you have the full source code under your control, you can make more changes too, like to the CSS styling, or the contents of the navigation menu.

You can even change the main YouTube video and purpose of the site from baseball pitching to something else. It all depends on your comfort level and requirements.

<!-- GETTING YOUR SITE ONLINE -->
## Getting Your Site Online


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[product-screenshot]: https://baseball-pitches.com/images/screenshot.jpg
