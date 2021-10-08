<template>
  <v-row justify="center">
    <v-dialog
      v-model="dialog"
      persistent
      max-width="290"
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          color="red"
          dark
          v-bind="attrs"
          v-on="on"
        >
          -
        </v-btn>
      </template>
      <v-card>
        <v-card-title class="headline">
          Supprimer ?
        </v-card-title>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="red"
            text
            @click="dialog = false"
          >
            non
          </v-btn>
          <v-btn
            color="green"
            text
            @click="delAtt();dialog = false"
          >
            oui
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

  <script src="../modalDelAttribution.js" type="text/javascript"></script>
