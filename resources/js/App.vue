<template>
    <v-app id="inspire">
        <v-navigation-drawer
                clipped
                v-model="drawer"
                fixed
                :right="right"
                app
        >
            <v-img :aspect-ratio="16/9" src="https://cdn.vuetifyjs.com/images/parallax/material.jpg">
                <v-layout pa-2 column fill-height class="lightbox white--text">
                    <v-spacer></v-spacer>
                    <v-flex shrink>
                        <div class="subheading">Fadhil A. Hussein</div>
                        <div class="body-1">fadhilabbash@gmail.com</div>
                    </v-flex>
                </v-layout>
            </v-img>

            <v-list dense>
                <v-list-group
                        prepend-icon="list"

                >
                    <v-list-tile slot="activator">
                        <v-list-tile-title>الخدمات</v-list-tile-title>
                    </v-list-tile>

                    <v-list-tile to="/">
                        <v-list-tile-action>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>المزارت</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                        <v-list-tile :to="{ name: 'Page2'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الفنادق</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page3'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الصحيات</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page4'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>النقل</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page5'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الهدايا والنذور</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page6'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مراكز توزيع الكتب المجانيه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page7'}" @click="title='المطاعم'">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>المطاعم</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page8'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الضيافة</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page9'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مدن الزائرين</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page10'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>أدارة العتبات</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile :to="{ name: 'Page11'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مداخل المدينه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                         <v-list-tile :to="{ name: 'google_map'}">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الخريطه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                </v-list-group>

                <v-list-tile :to="{ name: 'emergency_lines'}">
                 <v-list-tile-action>
                     <v-icon>phone_in_talk</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title>خطوط الطوارئ</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

             <v-list-tile to="/kkk">
                 <v-list-tile-action>
                     <v-icon>question_answer</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title >الأسئله الشرعيه</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

             <v-list-tile to="/kkk">
                 <v-list-tile-action>
                     <v-icon>import_contacts</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title>أصدارات الكتب</v-list-tile-title>
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
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>

                <span class="title mr-3">{{ $t('message.hello')}}</span>
    
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

        <v-list-tile @click="changeLang('ar')">
          <v-list-tile-title>عربي</v-list-tile-title>
        </v-list-tile>

        <v-list-tile @click="changeLang('fa')">
          <v-list-tile-title>فارسي</v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-menu>
    <v-avatar size="32px" tile>
                    <img
                            src="https://cdn.vuetifyjs.com/images/logos/logo.svg"
                            alt="Vuetify"
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
            right:true,
            clippedRight:true,
            clippedLeft:false,
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
                    case 'ar':
                        this.$i18n.locale='ar';
                   this.$vuetify.rtl=true;
                   this.right=true;
                   this.clippedRight=true;
                   this.clippedLeft=false;
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
</style>