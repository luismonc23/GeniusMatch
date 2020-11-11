// Import Vue
import Vue from 'vue';

// Import Framework7
import Framework7 from 'framework7/framework7-lite.esm.bundle.js';

// Import Framework7-Vue Plugin
import Framework7Vue from 'framework7-vue/framework7-vue.esm.bundle.js';

// Import Framework7 Styles
import 'framework7/css/framework7.bundle.css';

// Import Icons and App Custom Styles
import '../css/icons.css';
import '../css/app.css';

// Import App Component
import App from '../components/app.vue';
import TestData from '../js/testdata.json';
import TestData2 from '../js/testdata2.json';

// Init Framework7-Vue Plugin
Framework7.use(Framework7Vue);

// Init App
new Vue({
  el: '#app',
  render: (h) => h(App),

  // Register App Component
  components: {
    app: App
  },
  data() {
    return {
      f7params: {
      },

      appVersion: '0.1.0.0a',
      server: 'http://127.0.0.1:8080',
      serverP: '', //Prod AWS
      appPath: '/GeniusMatch',
      loginScreenOpened: false,
      signingUp: false,
      username: '',
      password: '',
      userData: TestData2,
      opportunityData2: [],
      opportunityData: TestData,
      signUpData: [],
      allCategories: [],
    }
  },
  mounted() {
    this.$f7ready((f7) => {
      const self = this;
      const app = self.$f7;

      self.auth();
      console.log(self.$root.opportunityData[0]);
      console.log(self.$root.userData);
    });
  },
  methods: {
    showLoginScreen: function(){
      this.loginScreenOpened = true;
    },
    auth: function(){
        const self = this;
        const $$ = this.$$;
        const app = self.$f7;
        this.loginScreenOpened = true;


        app.request.post(self.server + self.appPath + '/login.php',
        function (response) {
          var valid = true;
          try {
            JSON.parse(response);
          } catch (e) {
            valid = false;
          }
          if (valid) {
            var auth_data = JSON.parse(response);
            console.log(auth_data);
            if(auth_data.login == true){
                self.isLogged = true;
                self.userData = auth_data;

                self.user = auth_data;

                self.startUp();
            } else {
              self.showLoginScreen(); //Login mandatory
            }
          } else {
            app.dialog.alert("Oh no");
            console.log(response);
          }
        },
        function(error){
          console.log(error);
        });
    },
    login: function(){
        const self = this;
        const $$ = this.$$;
        const app = self.$f7;
        var username = self.username;
        var password = self.password;

        app.request.post(self.server + self.appPath + '/login.php', {user: user, password: password},
        function (response) {
          var valid = true;
          try {
            JSON.parse(response);
          } catch (e) {
            valid = false;
          }
          if (valid) {
            var auth_data = JSON.parse(response);
            console.log(auth_data);
            if(auth_data.login == true){
                self.isLogged = true;
                self.userData = auth_data;

                self.user = auth_data;

                self.startUp();
            } else {
              self.showLoginScreen(); //Login mandatory
            }
          } else {
            app.dialog.alert("Oh no");
            console.log(response);
          }
        },
        function(error){
          console.log(error);
        });
    },
    signup: function(){
        const self = this;
        const $$ = this.$$;
        const app = self.$f7;
        var username = self.username;
        var password = self.password;

        app.request.post(self.server + self.appPath + '/login.php', {user: user, password: password},
        function (response) {
          var valid = true;
          try {
            JSON.parse(response);
          } catch (e) {
            valid = false;
          }
          if (valid) {
            var auth_data = JSON.parse(response);
            console.log(auth_data);
            if(auth_data.login == true){
                self.isLogged = true;
                self.userData = auth_data;

                self.user = auth_data;

                self.startUp();
            } else {
              self.showLoginScreen(); //Login mandatory
            }
          } else {
            app.dialog.alert("Oh no");
            console.log(response);
          }
        },
        function(error){
          console.log(error);
        });
    },
    startUp: function () {
      const self = this;

      //self.getOportunities();
    },
    getOportunities: function() {
      const self = this;
      const $$ = this.$$;
      const app = self.$f7;
      const root = self.$root;


      app.request.post(root.server + root.appPath + '/scrape.php',
      function (response) {
        var valid = true;
        try {
          JSON.parse(response);
        } catch (e) {
          valid = false;
        }

        if (valid) {
          var userItemsData = [];
          userItemsData = JSON.parse(response);
          console.log(userItemsData);
         if(userItemsData.length > 0){
           root.opportunityData = userItemsData.data;
         } else {
           console.log('error');
         }
       } else {
         //Aquí ocurrió un error fatal del servidor

         console.log('error');
       }
     },
     function(){
       console.log('error');
     });
    },
    unicodeToChar: function (text) {
      return text.replace(/\\u[\dA-F]{4}/gi,
          function (match) {
               return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
          });
    }
  }
});
