<template>
    <label class="control-label mb-1">{{text}} <b class="text-danger" v-if="isRequired">*</b></label>
</template>

<script>
export default {
    props: {
        text: String,
        isRequired: Boolean
    }
}
</script>