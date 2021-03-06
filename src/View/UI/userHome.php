<?php $this->layout('Template::mainTemplate', ['title' => 'Librarium', 'css' => 'root,main'])?>
<div class="app-container">
    <div class="app-header">
        <div class="app-header-left">
            <span class="app-icon"></span>
            <button onclick="showArea()" id="mobile-btn" value="1"><i class="fas fa-bars"></i></button>
            
            <p class="app-name">Librarium</p>
            <div class="search-wrapper">
                <input type="text" class="search-input" placeholder="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                <defs></defs>
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
                </svg>
            </div>
        </div>
            <?php if(isset($user)):?>
            <div class="app-header-right">
                <button class="profile-btn">
                    <img src="assets/ProfileCV.jpg"/>
                    <span><?=$user?></span>
                    </button>
            </div>
            <?php endif;?>
    </div>
    <div class="app-mobile-btn" id="target">
            <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" /></svg>
            </a>
            <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
            </a>
            <a href="" class="">
                <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                    <defs></defs>
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                </svg>
            </a>
            <a href="" class="">
                <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
                <defs />
                <circle cx="12" cy="12" r="3" />
                <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                </svg>
            </a>
    </div>
    <div class="app-content">
        <div class="app-sidebar">
            <a href="" class="app-sidebar-link active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" /></svg>
            </a>
            <a href="" class="app-sidebar-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
            </a>
            <a href="" class="app-sidebar-link">
                <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                    <defs></defs>
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                </svg>
            </a>
            <a href="" class="app-sidebar-link">
                <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
                <defs />
                <circle cx="12" cy="12" r="3" />
                <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                </svg>
            </a>
            </div>
        <div class="app-shelf">
            <div class="app-shelf-header">
                <p>My Books</p>
                <p class="small">Favorites</p>
            </div>
            <div class="shelf-grid">
                <div class="shelf-grid-wrapper">
                    <img src="assets/re-zer_cover.jpg" alt="">
                    <div class="shelf-grid-details">
                        
                    </div>
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/kagerou_days_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/tate_cover.jpg" alt="">
                </div>
                
            </div>
            <div class="app-shelf-header">
                <p class="small">Following</p>
            </div>
            <div class="shelf-grid">
                <div class="shelf-grid-wrapper">
                    <img src="assets/re-zer_cover.jpg" alt="">
                    <div class="shelf-grid-details">
                        
                    </div>
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/kagerou_days_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/tate_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/coraline_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/heart_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/littlePrince_cover.jpg" alt="">
                </div>
                <div class="shelf-grid-wrapper">
                    <img src="assets/clt_cover.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let btnVal = document.getElementById("mobile-btn").value;
    function showArea(){
        if(btnVal == 2){
            document.getElementById("target").style.height = "0";
            btnVal = 1; 
        } else {
            document.getElementById("target").style.height = "auto";
            btnVal = 2; 
        }           
        }
</script>
