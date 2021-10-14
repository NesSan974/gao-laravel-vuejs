<template>
  <div class="col">
    <v-card>
      <v-card-title>
        <v-row>{{ ord.nom }}</v-row>

        <modalDelOrdinateur @delOrd="delOrd" :ord="ord" />
      </v-card-title>

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