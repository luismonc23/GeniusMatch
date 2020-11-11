<template>
  <f7-app :params="f7params" >

  <!-- Left panel with cover effect when hidden -->
  <!-- <f7-panel left cover theme-dark :visible-breakpoint="960"> -->
  <f7-panel left cover theme-dark>
    <f7-view>
      <f7-page>
        <f7-navbar title="GeniusMatch"><div class="logo">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path xmlns="http://www.w3.org/2000/svg" d="M512 503.5H381.7a48 48 0 01-45.3-32.1L265 268.1l-9-25.5 2.7-124.6L338.2 8.5l23.5 67.1L512 503.5z" fill="#0473ff" data-original="#28b446" />
          <path xmlns="http://www.w3.org/2000/svg" fill="#0473ff" data-original="#219b38" d="M361.7 75.6L265 268.1l-9-25.5 2.7-124.6L338.2 8.5z" />
          <path xmlns="http://www.w3.org/2000/svg" d="M338.2 8.5l-82.2 234-80.4 228.9a48 48 0 01-45.3 32.1H0l173.8-495h164.4z" fill="#0473ff" data-original="#518ef8" />
         </svg>
         GeniusMatch
        </div></f7-navbar>

        <f7-block-title>Left View Navigation</f7-block-title>
        <f7-list>
          <f7-list-item link="/left-page-1/" title="Left Page 1"></f7-list-item>
          <f7-list-item link="/left-page-2/" title="Left Page 2"></f7-list-item>
        </f7-list>
        <f7-block-title>Control Main View</f7-block-title>
        <f7-list>
          <f7-list-item link="/about/" view=".view-main" panel-close title="About"></f7-list-item>
          <f7-list-item link="/form/" view=".view-main" panel-close title="Form"></f7-list-item>
          <f7-list-item link="#" view=".view-main" back panel-close title="Back in history"></f7-list-item>
        </f7-list>
      </f7-page>
    </f7-view>
  </f7-panel>


  <!-- Right panel with reveal effect-->
  <f7-panel right reveal theme-dark>
    <f7-view>
      <f7-page>
        <f7-navbar title="Right Panel"></f7-navbar>
        <f7-block>Right panel content goes here</f7-block>
      </f7-page>
    </f7-view>
  </f7-panel>


  <!-- Your main view, should have "view-main" class -->
  <f7-view main class="safe-areas" url="/"></f7-view>


    <!-- Popup -->
    <f7-popup id="my-popup">
      <f7-view>
        <f7-page>
          <f7-navbar title="Popup">
            <f7-nav-right>
              <f7-link popup-close>Close</f7-link>
            </f7-nav-right>
          </f7-navbar>
          <f7-block>
            <p>Popup content goes here.</p>
          </f7-block>
        </f7-page>
      </f7-view>
    </f7-popup>

    <f7-login-screen class="login-screen" id="login-screen" :opened="$root.loginScreenOpened" @loginscreen:closed="$root.loginScreenOpened = false">
      <f7-page login-screen>
        <f7-login-screen-title>

          {{ $root.signingUp ? 'Registrarse' : 'Ingresar'  }}

        </f7-login-screen-title>
        <f7-list form>
          <f7-list-input
            v-if="!$root.signingUp"
            label="Dirección de email"
            type="email"
            name="email"
            placeholder="Tu dirección de correo electrónico"
            :value="$root.username"
            @input="$root.username = $event.target.value"
            validate
            required
            clear-button
          ></f7-list-input>
          <f7-list-input
            v-if="!$root.signingUp"
            label="Contraseña"
            type="password"
            name="password"
            placeholder="Tu contraseña"
            :value="$root.password"
            @input="$root.password = $event.target.value"
            validate
            required
            clear-button
          ></f7-list-input>
        </f7-list>
        <f7-list>
          <f7-button v-if="!$root.signingUp" large fill raised @click="$root.login()">Entrar</f7-button>

          <hr v-if="!$root.signingUp" style="width: 70%">

          <f7-button v-if="!$root.signingUp" large fill raised @click="$root.signingUp = true" color="green">Crear cuenta</f7-button>

          <br>
          <f7-button v-if="!$root.signingUp" big fill raised @click="" color="blue">Log in con LinkedIn</f7-button>

        </f7-list>
        <f7-list form class="signupform" v-if="$root.signingUp">
              <f7-list-input
                name="name"
                label="Nombre"
                type="text"
                placeholder="Tu nombre"
                validate
                required
                clear-button
              />
              <f7-list-input
                name="lastname"
                label="Apellido"
                type="text"
                placeholder="Tu primer apellido"
                validate
                required
                clear-button
              />
          <f7-list-input
            name="email"
            label="E-mail"
            type="email"
            placeholder="Tu dirección de correo electrónico"
            validate
            required
            clear-button
          />
          <f7-list-input
            name="password"
            label="Contraseña"
            type="password"
            placeholder="Selecciona una contraseña"
            validate
            required
            clear-button
          />
          <!-- <f7-list-input
            name="confirm_pass"
            label="Confirmar contraseña"
            type="password"
            placeholder="Confirma la contraseña"
            validate
            required
            clear-button
          /> -->
          <f7-list-input
            name="phone"
            label="CV"
            type="textarea"
            placeholder="Pega aquí la información de tu CV, obtendremos la información clave automáticamente, pero siempre podrás editarla"
            validate
            required
            clear-button
          />
          <f7-list-input
            name="phone"
            label="Valores de trabajo"
            type="textarea"
            placeholder="Describe tu forma de trabajo de manera personal, en un nivel no técnico, para asegurar un match más adecuado"
            validate
            required
            clear-button
          />
        </f7-list>
        <f7-list v-if="$root.signingUp">
          <f7-block strong>
            <p>Al continuar, aceptas nuestra <f7-link external>Política de Privacidad y Términos y Condiciones</f7-link></p>
          </f7-block>

          <f7-button large fill raised @click="signup()">Registrarse</f7-button>

          <hr style="width: 70%">

          <f7-button large fill raised @click="$root.signingUp = false" color="green">Ya tengo cuenta</f7-button>

        </f7-list>
      </f7-page>
    </f7-login-screen>
  </f7-app>
</template>
<script>

  import routes from '../js/routes.js';

  export default {
    data() {
      return {
        // Framework7 Parameters
        f7params: {
          name: 'GeniusMatch', // App name
          theme: 'auto', // Automatic theme detection



          // App routes
          routes: routes,
        },
        // Login screen data
        username: '',
        password: '',
      }
    },
    methods: {
      alertLoginData() {
        this.$f7.dialog.alert('Username: ' + this.username + '<br>Password: ' + this.password, () => {
          this.$f7.loginScreen.close();
        });
      },
      signup() {
        const self = this;
        this.$f7.preloader.show();

        setTimeout(function () {
          self.$f7.preloader.hide();
          self.$f7.dialog.alert('¡Bienvenido! Se ha procesado tu información', () => {
            self.$f7.loginScreen.close();
          });
        },3000);
      }
    },
    mounted() {
      this.$f7ready((f7) => {

        // Call F7 APIs here
      });
    }
  }
</script>
