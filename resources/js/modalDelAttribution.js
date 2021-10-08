

import Axios from 'axios'




export default {

    data() {
        return {
            dialog: false,
        }
    },

    props: {
        att: {
            default: function () {
                return {}
            },
        },
    },

    created() {

        //console.log('Component modalAddOrd created.')

    },

    methods: {
        delAtt() {

            Axios.delete("api/attribution/delete/" + this.att.id).then(({ data }) => {
                //emit
                this.$emit('updateAtt', this.att.id)
            })
        },
    },
}