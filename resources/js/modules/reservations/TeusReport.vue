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

                    Vue.set(
                        this.containerDetails[containerName],
                        'total',
                        containerTeuTotal
                    );

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
