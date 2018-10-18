<template>
    <v-app id="inspire">
        <v-navigation-drawer
                clipped
                v-model="drawer"
                fixed
                :right="right"
                app
        >
            <v-img :aspect-ratio="16/9" src="storage/imgs/side-logo.png">
                <!--v-layout pa-2 column fill-height class="lightbox white--text">
                    <v-spacer></v-spacer>
                    <v-flex shrink>
                        <div class="subheading">Fadhil A. Hussein</div>
                        <div class="body-1">fadhilabbash@gmail.com</div>
                    </v-flex>
                </v-layout-->
            </v-img>
            <v-list dense>
                <v-list-group id="my-list" prepend-icon="place">
                    <v-list-tile slot="activator">
                        <v-list-tile-title>{{ $t('message.locations')}}</v-list-tile-title>
                    </v-list-tile>

                    <v-list-tile :to="{ name: 'Page1'}">
                        <v-list-tile-action>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>{{ $t('message.shrines')}}</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                        <v-list-tile :to="{ name: 'Page2'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.hotels')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page3'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.toilets')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page4'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.transportation')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page5'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.giftsVow')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page6'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.freeBooksCenters')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page7'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.restaurants')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page8'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.hospitality')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page9'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.visitorCities')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page10'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.shrinesManagement')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page11'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.cityEntries')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                         <v-list-tile :to="{ name: 'all_location'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ $t('message.map')}}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                </v-list-group>

                <v-list-tile :to="{ name: 'emergency_lines'}">
                 <v-list-tile-action>
                     <v-icon color="green" >phone_in_talk</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title>{{ $t('message.emergency_lines')}}</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

             <v-list-tile :to="{ name: 'question_answer'}">
                 <v-list-tile-action>
                     <v-icon color="light-blue lighten-1">question_answer</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title >{{ $t('message.religious_questions')}}</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

             <v-list-tile :to="{ name: 'books_edition'}">
                 <v-list-tile-action>
                     <v-icon color="teal lighten-1">import_contacts</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title>{{ $t('message.books')}}</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

            </v-list>
        </v-navigation-drawer>
        <v-toolbar
                :clipped-right="clippedRight"
                :clipped-left="clippedLeft"
                color="teal"
                dark
                app
                fixed
        >
        <v-toolbar-title >
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <span>{{ $t('message.app_title')}}</span>
        </v-toolbar-title>
     
    
          <v-spacer></v-spacer>
  <div class="text-xs-center">
    <v-menu offset-y>
      <v-btn 
      icon
        slot="activator"
      >
        <v-icon>language</v-icon>
      </v-btn>
      <v-list>
        <v-list-tile @click="changeLang('en')">
          <v-list-tile-title>English</v-list-tile-title>
        </v-list-tile>

        <v-list-tile @click="changeLang('fr')">
          <v-list-tile-title>Franc</v-list-tile-title>
        </v-list-tile>

        <v-list-tile @click="changeLang('fa')">
          <v-list-tile-title>فارسي</v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-menu>
    <v-avatar size="32px" tile>
                    <img
                            src="storage/imgs/logo.png"
                            alt="logo"
                    >
                </v-avatar>
  </div>

        </v-toolbar>
        <v-content>

            <router-view></router-view>

        </v-content>
    </v-app>
</template>

<script>
    export default {
         
        data: () => ({
            right:false,
            clippedRight:false,
            clippedLeft:true,
            drawer: null,
        }),
    methods: {
    changeLang(lang){
         switch (lang) {
                    case 'en':
                   this.$i18n.locale='en';
                   this.$vuetify.rtl=false;
                   this.right=false;
                   this.clippedRight=false;
                   this.clippedLeft=true;
                        break;
                    case 'fr':
                    this.$i18n.locale='fr';
                   this.$vuetify.rtl=false;
                   this.right=false;
                   this.clippedRight=false;
                   this.clippedLeft=true;
                        break;
                    case 'fa':
                         this.$i18n.locale='fa';
                   this.$vuetify.rtl=true;
                   this.right=true;
                   this.clippedRight=true;
                   this.clippedLeft=false;
                        break;
                }
       
    }
    }
 }
</script>
<style scoped>
    .v-list__tile__title{
        text-align: justify;
    } 

#my-list .v-list__group__header__prepend-icon .v-icon {
    color: red;
}
</style>