<template>
 <v-container
              fluid
              grid-list-lg
      >
<v-layout row wrap>
        <v-flex md12 sm12 xs12>
            <v-card>
                <v-list two-line="">
                    <v-list-tile>
                        <v-list-tile-action>
                            <v-icon color="teal lighten-1">contact_phone</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>{{ $t('message.emergency_line')}}</v-list-tile-title>
                             <v-list-tile-sub-title>07435666666</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card>
        </v-flex>
        </v-layout>
         </v-container>
</template>
<style scoped>
    .v-list__tile__title{
        text-align: justify;
    }
    .v-list__tile__sub-title{
  text-align: justify;
    }
</style>

