<template>
  <v-row class="flex-row-reverse">
    <v-dialog v-model="dialog" persistent max-width="290">
      <template v-slot:activator="{ on, attrs }">
        <v-btn v-bind="attrs" v-on="on" icon>
          <v-icon color="error">mdi-delete-alert</v-icon>
        </v-btn>
      </template>

      <v-card>
        <v-card-title class="headline"> Supprimer ? </v-card-title>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="red" text @click="dialog = false"> non </v-btn>
          <v-btn
            color="green"
            text
            @click="
              delOrd();
              dialog = false;
            "
          >
            oui
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

  <script src="../modalDelOrdinateur.js" type="text/javascript"></script>
