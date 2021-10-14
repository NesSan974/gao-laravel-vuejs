

import Axios from 'axios'




export default {

    data() {
        return {
            dialog: false,
        }
    },

    props: {
        ord: {
            default: function () {
                return {}
            },
        },
    },

    created() {
        //console.log('Component modalAddOrd created.')
    },

    methods: {
        delOrd() {
            Axios.delete("api/ordinateur/delete/" + this.ord.id).then(({ data }) => {
                this.$emit('delOrd', this.ord)
                // // destroy the vue listeners, etc
                // this.$destroy();

                // // remove the element from the DOM
                // this.$el.parentNode.removeChild(this.$el);
            })
        },
    },
}