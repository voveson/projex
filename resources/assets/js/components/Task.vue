<template>
    <div class="card" @click="fire('open_task')">
        <div class="card__inner">
            <div class="card__header">
                <span v-show="task.comments.length">
                    {{ task.comments.length }} <span class="icon-comment-empty"></span>
                </span>
                <span>
                    3 <span class="icon-doc"></span>
                </span>
                <span>
                    <span class="icon-git"></span>
                </span>
                <div class="card__assigned">
                    <span class="profile-image"><img src="//placehold.it/24x24.jpg" alt=""></span>
                </div>
            </div>
            <div class="card__content">
                <p>{{ task.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['task'],
        methods: {
            fire(event) {
                this.$emit(event, this.task);
            }
        }
    }
</script>

