<template>
  <f7-page name="home">

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

       <div class="user-menu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square">
         <rect x="3" y="3" width="18" height="18" rx="2" ry="2" /></svg>
       </div>

      </div>
     </div>
     <f7-block>
     <div class="search-menu">
       <div class="search-bar">
        <input type="text" class="search-box" />

       </div>

       <button class="search-button" @click="$root.getOportunities()">Match</button>
      </div>
    </f7-block>
    <f7-block class="main-container">

       <div class="searched-jobs">
         <div class="searched-bar">
          <div class="searched-show">Tus oportunidades</div>
         </div>
         <div class="job-cards">
          <div class="job-card"
            v-for="(item, index) in $root.opportunityData[0]"
            :key="item.id">
           <div class="job-card-header">
             <img :src="item.image" style="height: 150px; margin: auto;"/>

           </div>
           <div class="job-card-title">{{item.title}}</div>
           <div class="job-card-subtitle">
            {{
              item.cv.substr(0, 400) + ' ...'
            }}
           </div>
           <div class="job-detail-buttons">
            <button class="search-buttons detail-button">Tiempo completo</button>
            <button class="search-buttons detail-button">Exp. 1 año</button>
            <button class="search-buttons detail-button">Nivel Senior</button>
           </div>
           <div class="job-card-buttons">
            <button class="search-buttons card-buttons">MatchMe!</button>
            <f7-button large class="search-buttons card-buttons-msg" external :href="item.href">Ver</f7-button>
           </div>
          </div>
         </div>
       </div>
    </f7-block>






    </div>

  </f7-page>
</template>
