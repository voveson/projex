<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ heading }}</div>

                    <div class="panel-body">
                        {{ body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                heading: 'This is the heading',
                body: 'This is the body blah blah blah'
            }
        },
        mounted() {
            console.log('Component ready.')
        }
    }
</script>

<style lang="less" scoped>
    .container {
        padding-top: 50px;

        .panel-heading {
            font-weight: bold;
            font-size: 2.5rem;
            background-color: #c1c1c1;
        }
    }
</style>