<?php
$imgPath1 = 'resources/user1Img.png';
$imgPath2 = 'resources/user2Img.png';
$imgPath3 = 'resources/user3Img.png';
$imgPath4 = 'resources/user4Img.png';
$imgPath5 = 'resources/user5Img.png';

class memberDetails {
    public $image;
    public $name;
    public $fb;
    public $gitHub;
    public $gmail;
    public $linkedin;
    public $age;
    public $bday;
    public $likes;
    public $dislikes;
    public $hobby;
    public $desc;
}

$member1 = new memberDetails();
$member2 = new memberDetails();
$member3 = new memberDetails();
$member4 = new memberDetails();
$member5 = new memberDetails();

$member1->image = $imgPath1;
$member1->name = "Stephanie Binayon";
$member1->fb = "https://m.me/stephanie.binayon.5";
$member1->gitHub = "https://github.com/skywalker244";
$member1->gmail = "mailto:binayonstephanie_bsit@plmun.edu.ph";
$member1->linkedin = "https://www.linkedin.com/in/kawaii-potato-binayon-b43994322?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BKcxD6vLoS1yL3Rlzp%2FCpAw%3D%3D";
$member1->age = "20 years old";
$member1->bday = "November 24, 2003";
$member1->likes = "Cats, Sweets, Listening to Music";
$member1->dislikes = "Crowd and Noisy Places";
$member1->hobby = "Reading Novels and Playing Games";
$member1->desc = "I once dreamed of becoming a pastry chef, but that dream had to be set aside when I was forced to take an IT course. Although I may not excel in it and Im a slow learner who easily forgets things. Im doing my best to study and learn as much as I can";

$member2->image = $imgPath2;
$member2->name = "Izzy Conda";
$member2->fb = "https://m.me/izzy.mconda";
$member2->gitHub = "https://github.com/iceybae02";
$member2->gmail = "mailto:condaizzy_bsit@plmun.edu.ph";
$member2->linkedin = "https://www.linkedin.com/in/izzy-conda-6a69a4322/";
$member2->age = "21 years old";
$member2->bday = "July 02, 2003";
$member2->likes = "Listening T.S Songs";
$member2->dislikes = "Grumpy, Okra and Guyabano";
$member2->hobby = "Playing Roblox";
$member2->desc = "I am a swiftie and if someone says I am not nice that's true 'cause darling I am a nightmare dressed like a daydream'.";

$member3->image = $imgPath3;
$member3->name = "Trisia Mae Fajardo";
$member3->fb = "https://m.me/trisia.fajardo.1";
$member3->gitHub = "https://github.com/AeIsia";
$member3->gmail = "mailto:fajardotrisiamae_bsit@plmun.edu.ph";
$member3->linkedin = "https://www.linkedin.com/in/trisia-mae-fajardo-822088208/";
$member3->age = "21 years old";
$member3->bday = "January 15, 2003";
$member3->likes = "Honesty";
$member3->dislikes = "Liars and Manipulators";
$member3->hobby = "Reading and Watching";
$member3->desc = "I am a working student. I love to travel around and make more memories. I am a breadwinner (2nd child).";

$member4->image = $imgPath4;
$member4->name = "Cris Julius A. Malipico";
$member4->fb = "https://m.me/crismalipico12";
$member4->gitHub = "https://github.com/crississipi";
$member4->gmail = "mailto:malipicocrisjulius_bsit@plmun.edu.ph";
$member4->linkedin = "https://www.linkedin.com/in/crismalipico12/";
$member4->age = "22 years old";
$member4->bday = "July 12, 2002";
$member4->likes = "Quiet Place";
$member4->dislikes = "Smell of Cigarette";
$member4->hobby = "Reading eBooks/Novels";
$member4->desc = "I enjoy listening to old music. The stuffs I mostly do everyday was reading books and little bit of programming.";

$member5->image = $imgPath5;
$member5->name = "Jennifer S. Rodriguez";
$member5->fb = "https://m.me/jenrodriguez25";
$member5->gitHub = "https://github.com/Jen052504";
$member5->gmail = "mailto:rodriguezjennifer_bsit@plmun.edu.ph";
$member5->linkedin = "https://www.linkedin.com/in/jen-rodriguez-9bb9a2322/";
$member5->age = "20 years old";
$member5->bday = "May 25, 2004";
$member5->likes = "Faithful";
$member5->dislikes = "Liar and Smell of Cigarette";
$member5->hobby = "Watching Movies";
$member5->desc = "I am focused on learning essential skills for me to be ready and equipped enough on my journey on being part of IT Industry.";
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Group 1</title>
        <link href="styles2.css" rel="stylesheet"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9bd5c7f2ea.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header class="header">
            <section class="sec">
                <a href="#home" class="logo">GROUP 1</a>
                <nav class="menu">
                        <a href="#home">Home</a>
                        <a href="#members">Team</a>
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>
            </section>
        </header>

        <section id="home">
            <div class="poster">
                <div class="poster-holder"></div>
            </div>
            <div class="container">
                <h1>Group 1</h1>
                <h3>—"Excellence at its finest"</h3>
                <div class="cards">
                </div>
                <a href="#members">The Team</a>
            </div>
        </section>
        <section id="members">
            <h2>The Team</h2>
            <div class="member-container">
                <div class="member-box">
                    <div class="member-page mem-1">
                        <div class="mem-card">
                            <div class="mem-holder">
                                <div class="image-box">
                                    <div class="mem-img" <?php echo "style='background: url($member1->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain' "; ?> ></div>
                                </div>
                                <div class="bubbles">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mem-info">
                                <p><strong><?php echo $member1->name; ?></strong></p>
                                <p><em>Leader</em></p>
                                <div class="social-acc">
                                    <a <?php echo "href='$member1->fb'"; ?> ><i class="fa-brands fa-square-facebook"></i></a>
                                    <a <?php echo "href='$member1->gitHub'"; ?> ><i class="fa-brands fa-square-github"></i></a>
                                    <a <?php echo "href='$member1->gmail'"; ?> ><i class="fa-solid fa-square-envelope"></i></a>
                                    <a <?php echo "href='$member1->linkedin'"; ?> ><i class="fa-brands fa-linkedin"></i></a>
                                    <div class="acc-info">
                                        <span class="links"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <div class="mem-det">
                                <div class="description">
                                    <p class="det">
                                        <span><strong>Age: </strong><?php echo $member1->age; ?></span>
                                        <span><strong>Birthday: </strong><?php echo $member1->bday; ?></span>
                                        <span><strong>Likes: </strong><?php echo $member1->likes; ?></span>
                                        <span><strong>Dislikes: </strong><?php echo $member1->dislikes; ?></span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong><?php echo $member1->hobby; ?></span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span><?php echo $member1->desc; ?></span>
                                    </p>
                                </div>
                                <div class="fam">
                                    <div class="all-bars">
                                        <span class="per-bar">
                                            <p><strong>HTML</strong><strong>60%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr1"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr2"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr3"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr4"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr5"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
        
                    <div class="member-page mem-2">
                        <div class="mem-card">
                            <div class="mem-holder">
                                <div class="image-box">
                                    <div class="mem-img" <?php echo "style='background: url($member2->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain' "; ?> ></div>
                                </div>
                                <div class="bubbles">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mem-info">
                                <p><strong><?php echo $member2->name; ?></strong></p>
                                <p><em>Member</em></p>
                                <div class="social-acc">
                                    <a <?php echo "href='$member2->fb'"; ?> ><i class="fa-brands fa-square-facebook"></i></a>
                                    <a <?php echo "href='$member2->gitHub'"; ?> ><i class="fa-brands fa-square-github"></i></a>
                                    <a <?php echo "href='$member2->gmail'"; ?> ><i class="fa-solid fa-square-envelope"></i></a>
                                    <a <?php echo "href='$member2->linkedin'"; ?> ><i class="fa-brands fa-linkedin"></i></a>
                                    <div class="acc-info">
                                        <span class="links"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <div class="mem-det">
                                <div class="description">
                                    <p class="det">
                                        <span><strong>Age: </strong><?php echo $member2->age; ?></span>
                                        <span><strong>Birthday: </strong><?php echo $member2->bday; ?></span>
                                        <span><strong>Likes: </strong><?php echo $member2->likes; ?></span>
                                        <span><strong>Dislikes: </strong><?php echo $member2->dislikes; ?></span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong><?php echo $member2->hobby; ?></span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span><?php echo $member2->desc; ?></span>
                                    </p>
                                </div>
                                <div class="fam">
                                    <div class="all-bars">
                                        <span class="per-bar">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr1"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr2"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr3"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr4"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr5"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="member-page mem-3">
                        <div class="mem-card">
                            <div class="mem-holder">
                                <div class="image-box">
                                    <div class="mem-img" <?php echo "style='background: url($member3->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain' "; ?> ></div>
                                </div>
                                <div class="bubbles">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mem-info">
                                <p><strong><?php echo $member3->name; ?></strong></p>
                                <p><em>Member</em></p>
                                <div class="social-acc">
                                    <a <?php echo "href='$member3->fb'"; ?> ><i class="fa-brands fa-square-facebook"></i></a>
                                    <a <?php echo "href='$member3->gitHub'"; ?> ><i class="fa-brands fa-square-github"></i></a>
                                    <a <?php echo "href='$member3->gmail'"; ?> ><i class="fa-solid fa-square-envelope"></i></a>
                                    <a <?php echo "href='$member3->linkedin'"; ?> ><i class="fa-brands fa-linkedin"></i></a>
                                    <div class="acc-info">
                                        <span class="links"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <div class="mem-det">
                                <div class="description">
                                    <p class="det">
                                        <span><strong>Age: </strong><?php echo $member3->age; ?></span>
                                        <span><strong>Birthday: </strong><?php echo $member3->bday; ?></span>
                                        <span><strong>Likes: </strong><?php echo $member3->likes; ?></span>
                                        <span><strong>Dislikes: </strong><?php echo $member3->dislikes; ?></span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong><?php echo $member3->hobby; ?></span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span><?php echo $member3->desc; ?></span>
                                    </p>
                                </div>
                                <div class="fam">
                                    <div class="all-bars">
                                        <span class="per-bar">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr1"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr2"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>BOOTSTRAP</strong><strong>10%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr3"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>JAVASCRIPT</strong><strong>30%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr4"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>PHP</strong><strong>30%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr5"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="member-page mem-4">
                        <div class="mem-card">
                            <div class="mem-holder">
                                <div class="image-box">
                                    <div class="mem-img" <?php echo "style='background: url($member4->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain' "; ?> ></div>
                                </div>
                                <div class="bubbles">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mem-info">
                                <p><strong><?php echo $member4->name; ?></strong></p>
                                <p><em>Member</em></p>
                                <div class="social-acc">
                                    <a <?php echo "href='$member4->fb'"; ?> ><i class="fa-brands fa-square-facebook"></i></a>
                                    <a <?php echo "href='$member4->gitHub'"; ?> ><i class="fa-brands fa-square-github"></i></a>
                                    <a <?php echo "href='$member4->gmail'"; ?> ><i class="fa-solid fa-square-envelope"></i></a>
                                    <a <?php echo "href='$member4->linkedin'"; ?> ><i class="fa-brands fa-linkedin"></i></a>
                                    <div class="acc-info">
                                        <span class="links"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <div class="mem-det">
                                <div class="description">
                                    <p class="det">
                                        <span><strong>Age: </strong><?php echo $member4->age; ?></span>
                                        <span><strong>Birthday: </strong><?php echo $member4->bday; ?></span>
                                        <span><strong>Likes: </strong><?php echo $member4->likes; ?></span>
                                        <span><strong>Dislikes: </strong><?php echo $member4->dislikes; ?></span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong><?php echo $member4->hobby; ?></span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span><?php echo $member4->desc; ?></span>
                                    </p>
                                </div>
                                <div class="fam">
                                    <div class="all-bars">
                                        <span class="per-bar">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr1"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr2"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>BOOTSTRAP</strong><strong>10%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr3"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>JAVASCRIPT</strong><strong>20%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr4"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>PHP</strong><strong>40%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr5"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="member-page mem-5">
                        <div class="mem-card">
                            <div class="mem-holder">
                                <div class="image-box">
                                    <div class="mem-img" <?php echo "style='background: url($member5->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain' "; ?> ></div>
                                </div>
                                <div class="bubbles">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mem-info">
                                <p><strong><?php echo $member5->name; ?></strong></p>
                                <p><em>Member</em></p>
                                <div class="social-acc">
                                    <a <?php echo "href='$member5->fb'"; ?> ><i class="fa-brands fa-square-facebook"></i></a>
                                    <a <?php echo "href='$member5->gitHub'"; ?> ><i class="fa-brands fa-square-github"></i></a>
                                    <a <?php echo "href='$member5->gmail'"; ?> ><i class="fa-solid fa-square-envelope"></i></a>
                                    <a <?php echo "href='$member5->linkedin'"; ?> ><i class="fa-brands fa-linkedin"></i></a>
                                    <div class="acc-info">
                                        <span class="links"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <div class="mem-det">
                            <div class="description">
                                    <p class="det">
                                        <span><strong>Age: </strong><?php echo $member5->age; ?></span>
                                        <span><strong>Birthday: </strong><?php echo $member5->bday; ?></span>
                                        <span><strong>Likes: </strong><?php echo $member5->likes; ?></span>
                                        <span><strong>Dislikes: </strong><?php echo $member5->dislikes; ?></span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong><?php echo $member5->hobby; ?></span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span><?php echo $member5->desc; ?></span>
                                    </p>
                                </div>
                                <div class="fam">
                                    <div class="all-bars">
                                        <span class="per-bar">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr1"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class="bar">
                                                <span class="percent pr2"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr3"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr4"></span>
                                            </span>
                                        </span>
                                        <span class="per-bar">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class="bar">
                                                <span class="percent pr5"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.querySelector('.member-container').addEventListener('scroll', function() {
                const container = this;
                const elements = document.querySelectorAll('.member-page');

                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const containerHeight = container.clientHeight;

                    if (elementTop < containerHeight - 150) {
                        element.style.opacity = 1;
                        element.style.transform = 'translateY(0)';
                    } else {
                        element.style.opacity = 0;
                        element.style.transform = 'translateY(150px)';
                    }
                });
            });

            let lastScrollTop = 0;
            const header = document.querySelector('header');

            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    header.style.opacity = 0;
                } else {
                    header.style.opacity = 1;
                }

                lastScrollTop = scrollTop;
            });
        </script>
    </body>
</html>