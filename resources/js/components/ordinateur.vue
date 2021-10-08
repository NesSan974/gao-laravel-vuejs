<template>
    <div class="col-md-10">

    	<v-card class="">

            <v-card-title>
                <v-row>{{ ord.nom }}</v-row>
                <v-btn color="red white--text">-</v-btn>
                
            </v-card-title>
 
            <v-card-text>

            	<compteur @updateAtt="updateAtt" @delatt="delAtt" :horraires="horraires" :date="date" :ord="ord" :clients="clients"/>
				
                
            </v-card-text>

        </v-card>

                   
    </div>
</template>

<script src="../ordinateur.js">

</script>