<template>
    <div>
        <VehiclesModalAdd/>
        <VehiclesIndex/>
    </div>
</template>

<script>
import VehiclesIndex from './index/VehiclesIndex.vue'
import VehiclesModalAdd from './modal/VehiclesModalAdd.vue'

export default {
    components: {
        VehiclesIndex, VehiclesModalAdd
    }
}
</script>
