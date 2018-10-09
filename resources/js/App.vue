<template>
    <v-app id="inspire">
        <v-navigation-drawer
                :clipped="$vuetify.breakpoint.lgAndUp"
                v-model="drawer"
                fixed
                right
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

                        <v-list-tile @click="">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الفنادق</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الصحيات</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>النقل</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الهدايا والنذور</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مراكز توزيع الكتب المجانيه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>المطاعم</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الضيافة</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مدن الزائرين</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>أدارة العتبات</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>مداخل المدينه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                         <v-list-tile to="/location">
                            <v-list-tile-action>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>الخريطه</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                </v-list-group>

                <v-list-tile to="/kkk">
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
                     <v-list-tile-title>الأسئله الشرعيه</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

             <v-list-tile to="/kkk">
                 <v-list-tile-action>
                     <v-icon>book</v-icon>
                 </v-list-tile-action>
                 <v-list-tile-content>
                     <v-list-tile-title>أصدارات الكتب</v-list-tile-title>
                 </v-list-tile-content>
             </v-list-tile>

            </v-list>
        </v-navigation-drawer>
        <v-toolbar
                :clipped-right="$vuetify.breakpoint.lgAndUp"
                color="teal"
                dark
                app
                fixed
        >
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>

                <span class="title mr-3">دليل خدمة الزائر</span>
           
           <!-- <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>more_vert</v-icon>
            </v-btn>-->
        </v-toolbar>
        <v-content>

            <router-view></router-view>

        </v-content>
    </v-app>
</template>

<script>
    export default {
        data: () => ({
            drawer: null,
        }),
    }
</script>

<style scoped>
    .v-list__tile__title {
        text-align: right;
    }
</style>