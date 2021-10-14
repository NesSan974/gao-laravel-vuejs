
import Axios from 'axios'
import compteur from './components/compteur.vue';
import modalDelOrdinateur from './components/modalDelOrdinateur.vue';




export default {

    components: {
        compteur,
        modalDelOrdinateur

    },

    props: {
        ord: {
            default: function () {
                return {}
            },

        },
        date: {
            default: function () {
                return []
            },

        },
        clients: {
            default: function () {
                return []
            },
        }
    },

    data() {
        return {
            attributions: [],
            horraires: [],
        }
    },

    watch : {
        ord: function (){

            this.initialize()

        }
    },

    created() {

        this.initialize()

    },

    methods: {

        initialize() {

            console.log("ord dans init")
            console.log(this.ord)

            this.attributions = []

            for (let i = 0; i < this.ord.attributions.length; i++) {
                this.attributions[this.ord.attributions[i].horraire] =
                {
                    'id': this.ord.attributions[i].id,
                    'nom': this.ord.attributions[i].client.nom,
                    'prenom': this.ord.attributions[i].client.prenom
                }
            }

            this.displayHorraire()
        },


        displayHorraire() {
            this.horraires = []
            for (var i = 8; i <= 18; i++) {
                if (this.attributions[i] != undefined) {
                    this.horraires.push(this.attributions[i])
                } else {
                    this.horraires.push(i)
                }

            }
        },

        updateAtt(att) { //ajout attribution + update

            this.ord.attributions.push(att)


            this.attributions[att.horraire] = {
                id: att.id,
                nom: att.client.nom,
                prenom: att.client.prenom
            };

            this.displayHorraire()

        },

        delAtt(idAtt) { //del attribution + update

            var refreshDeleteData = []

            for (let i = 8; i <= 18; i++) {
                if (this.attributions[i] != undefined && this.attributions[i].id != idAtt) {

                    refreshDeleteData[i] = this.attributions[i]

                }
            }

            this.attributions = refreshDeleteData

            this.displayHorraire()

        },

        deleteOrdinateur(ordi) {
            this.$emit('delOrd', ordi)
            
        }

    }
}