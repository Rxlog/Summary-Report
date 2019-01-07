<script>
    export default {
        data() {
            return {
                containerDetails: ''
            }
        },

        methods: {
            showDetails(teuDetails) {
                this.containerDetails = teuDetails.container_details;
            }
        }
    }
</script>
