
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('multiple-select');
var Prism = require('prismjs');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('draggable', require('vuedraggable')); // https://github.com/SortableJS/Vue.Draggable
Vue.component('example', require('./components/Example.vue'));
Vue.component('alert', require('./components/Alert.vue'));
Vue.component('tasklist', require('./components/TaskList.vue'));
Vue.component('task', require('./components/Task.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: "hello Vue.js",
        alert_message: '',
        alert_class: false,
        open_task: null,
        modal_open: false,
        new_comment: '',
        tasks: {
            backlog: [],
            ready: [],
            in_progress: [],
            done: []
        }
    },
    methods: {
        showAlert(type, message) {
            this.alert_message = message;
            this.alert_class = type;
        },
        dismissAlert() {
            this.alert_message = '';
            this.alert_class = false;
        },
        onShowCardModal(task) {
            this.open_task = task;
            this.setSelects();

            setTimeout(() => Prism.highlightAll(), 200);

            $('#card').one('hide.bs.modal', this.onHideCardModal).modal('show');
        },
        onHideCardModal() {
            this.open_task = null;
            $("#assignee").multipleSelect("uncheckAll");
        },
        setSelects() {
            $("#assignee").multipleSelect("setSelects", [this.open_task.assignee.id]);
        },
        onListUpdated(list, status)
        {
            $.ajax({
                url: '/projex/public/api/update-tasks',
                type: 'POST',
                data: { status, list }
            });
        },
        onPostComment()
        {
            data = $('#new_comment_form').serializeArray();

            $.ajax({
                url: '/projex/public/api/post-comment',
                type: 'POST',
                data: data,
                success(data) {
                    app.open_task.comments.push(data.comment);
                    app.new_comment = '';
                    Prism.highlightAll(false);
                }
            });
        }
    },
    mounted() {
        this.tasks = data.tasks;
    }
});

$(function() {
    $('.js-multiple-select').multipleSelect({
        filter: true,
        multiple: true,
        placeholder: $(this).data('placeholder'),
        onClick(e) {
            selected = e.instance.getSelects();
            $.ajax({
                type: 'POST',
                url: '/projex/public/api/update-assignee',
                data: {
                    assignees: selected,
                    task_id: app.open_task.id
                }
            });
        }
    });

    $('body').on('click', '.dropdown-menu select, .dropdown-menu .ms-choice', function(e) {
        e.stopPropagation();
    });
});
