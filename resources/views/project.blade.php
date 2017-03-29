@extends('layouts.app')

@section('page_scripts')
<script>
    var data = {};
    data.tasks = <?= json_encode($tasks); ?>;
</script>
@endsection

@section('content')
    <main id="app" v-cloak>
        <div class="section section--gray">
            <div class="row">
                <tasklist name="Backlog"
                          :list="tasks.backlog"
                          @update="onListUpdated(tasks.backlog, 'backlog')"
                          @open_task="onShowCardModal"
                ></tasklist>
                <tasklist name="Ready"
                          :list="tasks.ready"
                          @update="onListUpdated(tasks.ready, 'ready')"
                          @open_task="onShowCardModal"
                ></tasklist>
                <tasklist name="In Progress"
                          :list="tasks.in_progress"
                          @update="onListUpdated(tasks.in_progress, 'in_progress')"
                          @open_task="onShowCardModal"
                ></tasklist>
                <tasklist name="Done"
                          :list="tasks.done"
                          @update="onListUpdated(tasks.done, 'done')"
                          @open_task="onShowCardModal"
                ></tasklist>
            </div>
        </div>

        @include('blocks/_modal/_card-open')
    </main>
@endsection