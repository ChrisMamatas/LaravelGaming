<template>
    <button @click="$emit('click')" :disabled>
        <slot />
    </button>
</template>

<script setup lang="ts">
interface Props {
    disabled?: boolean;
    type?: string;
}

withDefaults(defineProps<Props>(), {
    disabled: false,
    type: 'button'
});
defineEmits(['click']);

</script>
