<template>
  <countTo :startVal="startVal" :endVal="endVal" :duration="extent"></countTo>
</template>

<script>
    import countTo from 'vue-count-to';

    export default {
        components: { countTo },
        props: {
            from: {
                type: Number|String,
                default: 0
            },
            to: Number|String,
            duration: {
                type: Number|String,
                default: 3000
            }
        },
        data () {
            return {
                startVal: parseInt(this.from),
                endVal: parseInt(this.to),
                extent: parseInt(this.duration)
            }
        }
    }
</script>
