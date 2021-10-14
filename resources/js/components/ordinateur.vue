<template>
  <div class="col-md-12">
    <v-card>
      <v-toolbar color="indigo" dark>
        <v-toolbar-title>{{ ord.nom }}</v-toolbar-title>

        <v-spacer></v-spacer>

      <modalDelOrdinateur @delOrd="deleteOrdinateur" :ord="ord" />

      </v-toolbar>

      <v-card-text>
        <compteur
          @updateAtt="updateAtt"
          @delatt="delAtt"
          :horraires="horraires"
          :date="date"
          :ord="ord"
          :clients="clients"
        />
      </v-card-text>
    </v-card>
  </div>
</template>

<script src="../ordinateur.js">
</script>