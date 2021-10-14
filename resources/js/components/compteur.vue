<template>
  <div>
    <v-row v-for="(horraire, key) in horraires" :key="key">
      <v-col class="col-md-2"> {{ key + 8 }}h </v-col>

      <v-row v-if="horraire.id">
        <v-col class="col-md-9">
          {{ horraire.nom }} {{ horraire.prenom }}
        </v-col>

        <v-col>
          <modalDelAttribution @updateAtt="updateAttribution" :att=horraire />
        </v-col>
      </v-row>

      <v-col v-else class="col-md-9">
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