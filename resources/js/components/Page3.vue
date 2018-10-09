<template>
      <v-container
              fluid
              grid-list-lg
      >
        <v-layout row wrap>
          <v-flex :key="index" v-for="(item,index) in list" xs12 sm6 md6>
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
                </div>
              </v-card-title>

              <v-card-actions>
                <v-icon color="red darken-1">location_on</v-icon>
                <v-btn flat color="orange">الموقع</v-btn>
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
            console.log('mounted');
            this.initData();
            console.log('list'+ this.list);
        },
 

        methods: {
            initData() {
                axios.get('api/services', {params: {category: 3}})
                    .then(({data}) => {
                       console.log('Data  '+ data);
                        this.list = data;
                    })
                    .catch(error => {
                    });
            },
        }
    };
</script>
