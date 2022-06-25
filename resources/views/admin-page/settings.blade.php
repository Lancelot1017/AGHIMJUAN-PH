@extends('admin-page.layout')
@section('title')
    Settings
@endsection
@section('current10')
    current
@endsection
@section('section')
    <div class="settings-header">
        <span class="text-uppercase">SETTINGS</span>
    </div>
    <div class="settings-content">
        <div class="card-form">
            <p class="settings-input">SITE NAME</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">QUERY EMAIL</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">BUSINESS EMAIL</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">SUPPORT EMAIL</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">ADDRESS</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
        </div>
        <div class="card-form2">
            <p class="settings-input">FACEBOOK</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">TWITTER</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">INSTAGRAM</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">DISCORD</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
            <p class="settings-input">STEAM</p>
                <div class="input-field">
                    <input type="text" placeholder="">
                </div>
        </div>
        <input type="submit" value="Submit" class="btn" id="btnfont">
    </div>
@endsection
