<template>
    <div>
        <Alert/>        
        <VehiclesIndex/>
    </div>
</template>

<script>
import VehiclesIndex from './index/VehiclesIndex.vue'
import Alert from '../_template/sub/Alert.vue'

export default {
    components: {
        VehiclesIndex, Alert
    }
}
</script>
