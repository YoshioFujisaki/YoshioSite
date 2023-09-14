<header class="mb-8">
    <div class="main_nav">
        <nav class="flex justify-between py-10 px-12">
            <h3><a class="name" href="#">Sato Kashiwaguma</a></h3>
            <ul class="category flex">
                <li class="md:ml-4"><button id="works_btn">Works</button></li>
                <li class="md:ml-4"><button id="profile_btn">Profile</button></li>
                <li class="md:ml-4"><a href="https://www.instagram.com/sato39_kuma/">instagram</a></li>
            </ul>
        </nav>
    </div>
    <div class="res_nav">

        <nav class="Menu">
            <button type="button" class="Menu-CloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="Menu-CloseBtn-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>

        <div class="header__inner">
            <nav class="sp_menu flex justify-between py-10 px-12">

                <button class="hamburger header__hamburger" id="js-hamburger">
                    <span></span>
                    <span></span>
                </button>

                <nav class="ham_menu header__nav" id="js-nav">
                    <ul class="nav__itmes nav-itmes">
                        <li class="Menu-Group-Item">
                            <a class="Menu-Group-Item-Link" href="<?php get_template_directory_uri() ?>/">
                                <span>TOP</span>
                            </a>
                        </li>
                        <li class="Menu-Group-Item">
                            <a class="Menu-Group-Item-Link" href="/about/">
                                <span>PROFILE</span>
                            </a>
                        </li>
                        <li class="Menu-Group-Item">
                            <a class="Menu-Group-Item-Link" href="/works/">
                                <span>WORKS</span>
                            </a>
                        </li>
                        <li class="Menu-Group-Item">
                            <a class="Menu-Group-Item-Link" href="/company/">
                                <span>COMPANY</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <h3><a class="name" href="#">Sato Kashiwaguma</a></h3>

                <div class="instagram_icon">
                    <a href="https://www.instagram.com/sato39_kuma/"><i class="bi bi-instagram"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>