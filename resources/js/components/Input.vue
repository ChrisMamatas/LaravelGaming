<template>
    <input class="" v-model="model" :placeholder />
</template>

<script setup lang="ts">
interface Props {
    placeholder?: string;
}
defineProps<Props>();

const model = defineModel<string>();
</script>
