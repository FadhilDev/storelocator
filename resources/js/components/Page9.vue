<template>
      <v-container
              fluid
              grid-list-lg
      >
        <v-layout row wrap>
          <v-flex :key="index" v-for="(item,index) in list" xs12 sm6 md6 lg4>
            <v-card>
                     <v-img
                      class="white--text"
                      height="200px"
                      :src="item.filename ? 'storage/imgs/' + item.filename : 'storage/imgs/empty-image.png'"
              >
              </v-img>
              <v-card-title primary-title>
                <div>
                  <h3 class="headline mb-0">{{item.name}}</h3>
                  <div>{{item.details}}</div>
                    <span class="grey--text">{{item.phone}}</span>
                </div>
              </v-card-title>

              <v-card-actions>
                <v-icon color="red darken-1">location_on</v-icon>
                <v-btn flat color="orange" :to="{ name: 'single_location',params:{lat:item.lat,lng:item.lng}}" >{{$t('message.location')}}</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
            };
        },
        mounted() {
            this.initData();
        },
  watch: {
   '$i18n.locale': function () {
      this.initData();
   }
    },

        methods: {
            initData() {
                axios.get('api/services', {params: {category: 9,lang:this.$i18n.locale}})
                    .then(({data}) => {
                        this.list = data;
                    })
                    .catch(error => {
                    });
            },
        }
    };
</script>
