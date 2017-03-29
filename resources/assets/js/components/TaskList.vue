<template>
    <div class="task-list">
        <h2 class="task-list__title">{{ name }} <span class="badge">{{ list.length }}</span></h2>
        <div class="task-list__scroll-area">
            <draggable :list="list"
                       :options="{group: 'tasks', animation: 200}"
                       @add="fire('update')"
                       @update="fire('update')"
                       style="min-height: 100px"
            >
                <task v-for="task in list" @open_task="fire('open_task', task)" :task="task"></task>
            </draggable>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['name', 'list'],
        methods: {
            fire(name, obj) {
                this.$emit(name, obj);
            }
        }
    }
</script>

<style lang="less" rel="stylesheet/less">
    .column-header {
        margin-bottom: 10px;

        .column-count {
            color: #fcb941;
        }

        strong {
            text-transform: uppercase;
            font-weight: 500;
        }
    }
</style>