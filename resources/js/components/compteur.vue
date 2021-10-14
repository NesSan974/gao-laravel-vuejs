<template>
  <div>
    <v-row v-for="(horraire, key) in horraires" :key="key">
      <v-col class="col-md-2"> {{ key + 8 }}h </v-col>


        <v-col class="col-md-5" v-if="horraire.id">
          {{ horraire.nom }} {{ horraire.prenom }}
        </v-col>

        <v-col class="col-md-5" v-if="horraire.id">
          <modalDelAttribution @updateAtt="updateAttribution" :att=horraire />
        </v-col>


      <v-col v-else class="col-md-10">
        <modalAddAttribution
          :ord="ord"
          :horraire="horraire"
          :clients="clients"
          :date="date"
          @add="addAttribution"
        /> 
      </v-col>
    </v-row>
  </div>
</template>

<script src="../compteur.js">
</script>