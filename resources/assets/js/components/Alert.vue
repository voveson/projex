<template>
    <div :class="class_list">
        <button class="delete" @click="dismiss()"></button>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['alert_class'],
        computed: {
            class_list() {
                return 'notification is-' + this.alert_class;
            }
        },
        methods: {
            dismiss() {
                this.$emit('dismissed');
            }
        }
    }
</script>

<style lang="less" scoped>
    .notification {
        margin: 15px;
    }
</style>