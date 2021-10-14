<template>
  <div class="container" data-app="true">

    <v-col cols="12" sm="6" md="4">
        <v-dialog
          ref="dialog"
          v-model="modal"
          :return-value.sync="date"
          width="290px"
        > 
          <template v-slot:activator="{ on, attrs }">
            <v-text-field
              v-model="date"
              label="Date"
              prepend-icon="mdi-calendar"
              readonly
              v-bind="attrs"
              v-on="on"

            ></v-text-field>
          </template>
          <v-date-picker v-model="date" @change="dateUpdate()" scrollable>
            <v-spacer></v-spacer>
            <v-btn text color="error" @click="modal = false"> Cancel </v-btn>
            <v-btn text color="success" @click="$refs.dialog.save(date)">
              OK
            </v-btn>
          </v-date-picker>
        </v-dialog>

    </v-col>

    <div cols="12" class="mb-7">
      <modalAddOrd @update="updateOrd" />
    </div>

    <div class="row justify-content-center">
      <v-row >
        <v-col
        cols="12"
        sm="4"
        
        v-for="(ordinateur, key) in ordinateurs" :key="key">
          <ordinateur @delOrd="deleteOrdinateur" v-bind:ord="ordinateur" :date="date" :clients="clients" />

        </v-col>
      </v-row>
    </div>
  </div>


</template>

<script src="../home.js"></script>
