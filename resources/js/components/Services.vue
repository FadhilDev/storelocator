<template>
      <v-container
              fluid
              grid-list-lg
      >
        <v-layout row wrap>
          <v-flex  xs12 sm6 md6>
            <v-card>
              <v-img
                      class="white--text"
                      height="200px"
                      src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
              >
              </v-img>
              <v-card-title primary-title>
                <div>
                  <h3 class="headline mb-0">مستشفى الامام زين العابدين</h3>
                  <div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales, ...</div>
                </div>
              </v-card-title>

              <v-card-actions>
                <v-icon color="red darken-1">location_on</v-icon>
                <v-btn flat color="orange">الموقع</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>

          <v-flex  xs12 sm6 md6>

            <v-card>
              <v-img
                      class="white--text"
                      height="200px"
                      src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
              >
                <v-container fill-height fluid>
                  <v-layout fill-height>
                    <v-flex xs12 align-end flexbox>
                      <span class="headline">Top 10 Australian beaches</span>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-img>
              <v-card-title>
                <div>
                  <span class="grey--text">Number 10</span><br>
                  <span>Whitehaven Beach</span><br>
                  <span>Whitsunday Island, Whitsunday Islands</span>
                </div>
              </v-card-title>
              <v-card-actions>
                <v-icon color="red darken-1">location_on</v-icon>
                <v-btn flat color="orange">Location</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>

          <v-flex  xs12 sm6 md6>
            <v-card>
              <v-img
                      class="white--text"
                      height="200px"
                      src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
              >
                <v-container fill-height fluid>
                  <v-layout fill-height>
                    <v-flex  xs6 md3>
                      <span class="headline">Top 10 Australian beaches</span>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-img>
              <v-card-title>
                <div>
                  <span class="grey--text">Number 10</span><br>
                  <span>Whitehaven Beach</span><br>
                  <span>Whitsunday Island, Whitsunday Islands</span>
                </div>
              </v-card-title>
              <v-card-actions>
                <v-icon color="red darken-1">location_on</v-icon>
                <v-btn flat color="orange">Location</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
</template>