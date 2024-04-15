<template>

    <button @click="count++">
        Count is: {{ count }}
    </button>
</template>

<script>
import { ref } from "vue";
export default {
    
    setup() {
        return {
            count: ref(0)
        }
    }
};
</script>

<style></style>