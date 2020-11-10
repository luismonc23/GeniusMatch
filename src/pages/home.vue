<template>
  <f7-page name="home">
    <!-- Top Navbar -->
    <!-- <f7-navbar large :sliding="false">
      <f7-nav-left>
        <f7-link icon-ios="f7:menu" icon-aurora="f7:menu" icon-md="material:menu" panel-open="left"></f7-link>
      </f7-nav-left>
      <f7-nav-title sliding>GeniusMatch</f7-nav-title>
      <f7-nav-right>
        <f7-link icon-ios="f7:menu" icon-aurora="f7:menu" icon-md="material:menu" panel-open="right"></f7-link>
      </f7-nav-right>
      <f7-nav-title-large>GeniusMatch</f7-nav-title-large>
    </f7-navbar> -->
    <!-- Toolbar-->
    <div class="job">
     <div class="header">
      <div class="logo">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path xmlns="http://www.w3.org/2000/svg" d="M512 503.5H381.7a48 48 0 01-45.3-32.1L265 268.1l-9-25.5 2.7-124.6L338.2 8.5l23.5 67.1L512 503.5z" fill="#0473ff" data-original="#28b446" />
        <path xmlns="http://www.w3.org/2000/svg" fill="#0473ff" data-original="#219b38" d="M361.7 75.6L265 268.1l-9-25.5 2.7-124.6L338.2 8.5z" />
        <path xmlns="http://www.w3.org/2000/svg" d="M338.2 8.5l-82.2 234-80.4 228.9a48 48 0 01-45.3 32.1H0l173.8-495h164.4z" fill="#0473ff" data-original="#518ef8" />
       </svg>
       GeniusMatch
      </div>
      <div class="header-menu">
       <a href="#" class="active">Encontrar oportunidades</a>
       <a href="#">Company Review</a>
       <a href="#">Find Salaries</a>
      </div>
      <div class="user-settings">
       <!-- <div class="dark-light">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
       </div> -->
       <div class="user-menu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square">
         <rect x="3" y="3" width="18" height="18" rx="2" ry="2" /></svg>
       </div>
       <img class="user-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="">
       <div class="user-name">Juan Álvarez</div>
      </div>
     </div>
     <f7-block>
     <div class="search-menu">
       <div class="search-bar">
        <input type="text" class="search-box" autofocus />
        <div class="search item">Product Designer
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <path d="M18 6L6 18M6 6l12 12" /></svg>
        </div>
        <div class="search item">UI Designer
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <path d="M18 6L6 18M6 6l12 12" /></svg>
        </div>
       </div>
       <div class="search-location">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
         <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
         <circle cx="12" cy="10" r="3" />
        </svg>
        Londontowne, MD
       </div>
       <div class="search-job">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
         <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
         <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" /></svg>
        <input type="text" placeholder="Job Type">
       </div>
       <div class="search-salary">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="currentColor" stroke-width=".4">
         <path d="M12.6 18H9.8a.8.8 0 010-1.5h2.8a.9.9 0 000-1.8h-1.2a2.4 2.4 0 010-4.7h2.8a.8.8 0 010 1.5h-2.8a.9.9 0 000 1.8h1.2a2.4 2.4 0 010 4.7z" stroke="currentColor" />
         <path d="M12 20a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8zM12 11.5a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8z" stroke="currentColor" />
         <path d="M21.3 23H2.6A2.8 2.8 0 010 20.2V3.9C0 2.1 1.2 1 2.8 1h18.4C22.9 1 24 2.2 24 3.8v16.4c0 1.6-1.2 2.8-2.8 2.8zM2.6 2.5c-.6 0-1.2.6-1.2 1.3v16.4c0 .7.6 1.3 1.3 1.3h18.4c.7 0 1.3-.6 1.3-1.3V3.9c0-.7-.6-1.3-1.3-1.3z" stroke="currentColor" />
         <path d="M23.3 6H.6a.8.8 0 010-1.5h22.6a.8.8 0 010 1.5z" stroke="currentColor" /></svg>
        <input type="text" placeholder="Salary Range">
       </div>
       <button class="search-button">Match</button>
      </div>
    </f7-block>
    <f7-block class="main-container">
      <div class="search-type">
        <div class="alert">
         <div class="alert-title">Create Job Alert</div>
         <div class="alert-subtitle">Create a job alert now and never miss a job</div>
         <input type="text" placeholder="Enter job keyword">
         <button class="search-buttons">Create Job Alerts</button>
        </div>
        <div class="job-time">
         <div class="job-time-title">Type of Employment</div>
         <div class="job-wrapper">
          <div class="type-container">
           <input type="checkbox" id="job1" class="job-style" checked>
           <label for="job1">Full Time Jobs</label>
           <span class="job-number">56</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job2" class="job-style">
           <label for="job2">Part Time Jobs</label>
           <span class="job-number">43</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job3" class="job-style">
           <label for="job3">Remote Jobs</label>
           <span class="job-number">24</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job4" class="job-style">
           <label for="job4">Internship Jobs</label>
           <span class="job-number">27</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job5" class="job-style">
           <label for="job5">Contract</label>
           <span class="job-number">76</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job6" class="job-style">
           <label for="job6">Training Jobs</label>
           <span class="job-number">28</span>
          </div>
         </div>
        </div>
        <div class="job-time">
         <div class="job-time-title">Seniority Level</div>
         <div class="job-wrapper">
          <div class="type-container">
           <input type="checkbox" id="job7" class="job-style">
           <label for="job7">Student Level</label>
           <span class="job-number">98</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job8" class="job-style">
           <label for="job8">Entry Level</label>
           <span class="job-number">44</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job9" class="job-style" checked>
           <label for="job9">Mid Level</label>
           <span class="job-number">35</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job10" class="job-style" checked>
           <label for="job10">Senior Level</label>
           <span class="job-number">29</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job11" class="job-style">
           <label for="job11">Directors</label>
           <span class="job-number">26</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job12" class="job-style">
           <label for="job12">VP or Above</label>
           <span class="job-number">56</span>
          </div>
         </div>
        </div>
        <div class="job-time">
         <div class="job-time-title">Salary Range</div>
         <div class="job-wrapper">
          <div class="type-container">
           <input type="checkbox" id="job1" class="job-style">
           <label for="job1">$700 - $1000</label>
           <span class="job-number">49</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job2" class="job-style">
           <label for="job2">$1000 - $1200</label>
           <span class="job-number">67</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job3" class="job-style">
           <label for="job3">$1200 - $1400</label>
           <span class="job-number">24</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job4" class="job-style">
           <label for="job4">$1500 - $1800</label>
           <span class="job-number">27</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job5" class="job-style" checked>
           <label for="job5">$2000 - $3000</label>
           <span class="job-number">76</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job6" class="job-style" checked>
           <label for="job6">$3000 - $4000</label>
           <span class="job-number">22</span>
          </div>
          <div class="type-container">
           <input type="checkbox" id="job6" class="job-style">
           <label for="job6">$4000 - $5000</label>
           <span class="job-number">18</span>
          </div>
         </div>
        </div>
       </div>
       <div class="searched-jobs">
         <div class="searched-bar">
          <div class="searched-show">Showing 46 Jobs</div>
          <div class="searched-sort">Sort by: <span class="post-time">Newest Post </span><span class="menu-icon">▼</span></div>
         </div>
         <div class="job-cards">
          <div class="job-card">
           <div class="job-card-header">
            <svg viewBox="0 -13 512 512" xmlns="http://www.w3.org/2000/svg" style="background-color:#2e2882">
             <g fill="#feb0a5">
              <path d="M256 92.5l127.7 91.6L512 92 383.7 0 256 91.5 128.3 0 0 92l128.3 92zm0 0M256 275.9l-127.7-91.5L0 276.4l128.3 92L256 277l127.7 91.5 128.3-92-128.3-92zm0 0" />
              <path d="M127.7 394.1l128.4 92 128.3-92-128.3-92zm0 0" />
             </g>
             <path d="M512 92L383.7 0 256 91.5v1l127.7 91.6zm0 0M512 276.4l-128.3-92L256 275.9v1l127.7 91.5zm0 0M256 486.1l128.4-92-128.3-92zm0 0" fill="#feb0a5" />
            </svg>
            <div class="menu-dot"></div>
           </div>
           <div class="job-card-title">UI / UX Designer</div>
           <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling and digital user experience through excellent design...
           </div>
           <div class="job-detail-buttons">
            <button class="search-buttons detail-button">Full Time</button>
            <button class="search-buttons detail-button">Min. 1 Year</button>
            <button class="search-buttons detail-button">Senior Level</button>
           </div>
           <div class="job-card-buttons">
            <button class="search-buttons card-buttons">MatchMe!</button>
            <button class="search-buttons card-buttons-msg">Messages</button>
           </div>
          </div>
         </div>
       </div>
    </f7-block>






    </div>
    <!-- <f7-toolbar bottom>
      <f7-link>Left Link</f7-link>
      <f7-link>Right Link</f7-link>
    </f7-toolbar> -->
    <!-- Page content-->
    <!-- <f7-block strong>
      <p>This is an example of split view application layout, commonly used on tablets. The main approach of such kind of layout is that you can see different views at the same time.</p>

      <p>Each view may have different layout, different navbar type (dynamic, fixed or static) or without navbar.</p>

      <p>The fun thing is that you can easily control one view from another without any line of JavaScript just using "data-view" attribute on links.</p>
    </f7-block>
    <f7-block-title>Navigation</f7-block-title>
    <f7-list>
      <f7-list-item link="/about/" title="About"></f7-list-item>
      <f7-list-item link="/form/" title="Form"></f7-list-item>
    </f7-list>

    <f7-block-title>Modals</f7-block-title>
    <f7-block strong>
      <f7-row>
        <f7-col width="50">
          <f7-button fill raised popup-open="#my-popup">Popup</f7-button>
        </f7-col>
        <f7-col width="50">
          <f7-button fill raised login-screen-open="#my-login-screen">Login Screen</f7-button>
        </f7-col>
      </f7-row>
    </f7-block> -->

    <!-- <f7-block-title>Panels</f7-block-title>
    <f7-block strong>
      <f7-row>
        <f7-col width="50">
          <f7-button fill raised panel-open="left">Left Panel</f7-button>
        </f7-col>
        <f7-col width="50">
          <f7-button fill raised panel-open="right">Right Panel</f7-button>
        </f7-col>
      </f7-row>
    </f7-block>

    <f7-list>
      <f7-list-item
        title="Dynamic (Component) Route"
        link="/dynamic-route/blog/45/post/125/?foo=bar#about"
      ></f7-list-item>
      <f7-list-item
        title="Default Route (404)"
        link="/load-something-that-doesnt-exist/"
      ></f7-list-item>
      <f7-list-item
        title="Request Data & Load"
        link="/request-and-load/user/123456/"
      ></f7-list-item>
    </f7-list> -->
  </f7-page>
</template>
