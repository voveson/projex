@extends('layouts.app')

@section('content')
<div class="content">
    <div id="app">
        <h1>@{{ message }}</h1>
        <input class="form-control" v-model="message">
        <alert v-show="alert_class" :alert_class="alert_class" @dismissed="dismissAlert()">
            @{{ alert_message }}
        </alert>

        <div class="control is-grouped">
            <p class="control">
                <a class="button is-success" @click="showAlert('success', 'This is a success alert')">
                    Show success alert
                </a>
            </p>
            <p class="control">
                <a class="button is-danger" @click="showAlert('danger', 'This is a danger alert')">
                    Show danger alert
                </a>
            </p>
            <p class="control">
                <a class="button is-warning" @click="showAlert('warning', 'This is a warning alert')">
                    Show warning alert
                </a>
            </p>
        </div>

    </div>
</div>
@endsection