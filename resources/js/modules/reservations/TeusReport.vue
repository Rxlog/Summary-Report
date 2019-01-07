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

                var totalTeus = 0;
                var totalContainers = 0;
                var grandTotal = 0;

                for (var containerName in this.containerDetails) {
                    let containerTeuTotal = this.containerDetails[containerName].teus * this.containerDetails[containerName].containers;

                    totalTeus += this.containerDetails[containerName].teus;
                    totalContainers += this.containerDetails[containerName].containers;
                    grandTotal += containerTeuTotal;

                    // Add fourth column for the total count per container size name in the TEUS details modal
                    Vue.set(
                        this.containerDetails[containerName],
                        'total',
                        containerTeuTotal
                    );

                    /*
                    * Add sixth row in the TEUS details modal for total TEUS points,
                    * total container sizes count and grandTotal (TEUS * Container Size)
                    */
                    Vue.set(
                        this.containerDetails,
                        '',
                        {
                            'teus': `<strong><u>${totalTeus}</u></strong>`,
                            'containers': `<strong><u>${totalContainers}</u></strong>`,
                            'total': `<strong><u>${grandTotal}</u></strong>`,
                        }
                    )
                }
            }
        }
    }
</script>
