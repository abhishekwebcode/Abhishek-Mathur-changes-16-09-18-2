<?php
$page_yy = 3;
?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="assets/dist/css/appraisal.css"/>


<!-- <style>


    .wizard {
        margin: 20px auto;
        background: #fff;
    }

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;

    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 25%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    @media ( max-width: 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }

    .profile_left ul {
        list-style: none;
    }

    .profile_left h3 {
        padding: 15px;
        margin: 0px;
    }

    .profile_left ul li {
        padding: 13px 0px;
    }

    .profile_left ul li a {
        color: #000;
        text-decoration: none;
        transition: all 2s;
        margin-left: 0px;
    }

    .profile_left ul li a:hover {
        color: red;
        text-decoration: none;
        transition: all 2s;
        margin-left: 10px;
    }

    .top_two button {
        padding: 10px 50px;
        margin: 0 auto;
        display: block;
        margin-top: 4px;
        border-radius: 30px;
        background: linear-gradient(-93deg, rgb(65, 134, 211), rgb(65, 134, 211));
        color: #fff;
        font-size: 14px;
        border: medium;
    }

    .form-control {
        color: #4e4d4d;
    }

    .modal.profile_edit .modal-header {
        border: none;
    }

    .modal.profile_edit .modal-body {
        padding: 0;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a {
        padding: 3px 20px;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #333;
        position: relative;
        border: none;
        padding-bottom: 13px;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a::after {
        content: '';
        display: block;
        height: 2px;
        background: linear-gradient(-93deg, rgb(67, 84, 146), rgb(220, 120, 222));
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 0;
        margin: auto;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a.active::after {
        width: 100%;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a.active {
        border: none;
        background-color: transparent;
        color: #8362b1;
    }

    .modal.profile_edit .modal-dialog {
        max-width: 650px;
    }

    .modal.profile_edit .modal-content .tab-pane .tabs_block_inner label.profile {
        display: inline-block;
        width: 60px;
        height: 60px;
        vertical-align: middle;
        background-color: red;
        background-size: cover !important;
        border-radius: 50%;
        margin-bottom: 0;
        background-position: center center !important;
    }

    .changing_block {
        margin-left: 62px;
    }

    .changing_block a {
        font-size: 13px;
        margin-right: 20px;
        color: #333;
        border-bottom: 1px dotted #333;
        text-decoration: none;
    }

    .right_col .profie_wrap .profile_left .details_user p a#chnagePassword_btn {
        display: block;
        width: 200px;
        margin: 0 auto;
        text-align: center;
        color: #000;
        border: 1px solid #222;
        padding: 10px;
        margin-top: 20px;
        border-radius: 30px;
        text-decoration: none;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .right_col .profie_wrap .profile_left .details_user p a#chnagePassword_btn:hover {
        border-color: #007bff;
        color: #007bff;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .right_mining {
        padding-left: 0;
        margin-left: -4px;
    }

    .modal.profile_edit .modal-content .tab-pane .profile_block .tabs_block_inner input[type="email"] {
        color: #000;
        background-color: #f8f8f8;
    }

    .dificulty_form button {
        background: linear-gradient(-95deg, #59C3F5, #1CAAED);
        color: #fff;
        border: none;
    }

    .dificulty_form input {
        padding-left: 10px;
        background: #f5f5f5;
    }

    .accodian .accodian-heading i {
        float: right;
        font-size: 18px;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .accodian.active .accodian-heading i {
        transform: rotate(180deg);
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .aprlbls__ .checkbox {
        padding: 10px 30px;
        display: inline-block;
        width: 100%;
    }

    .checkbox {
        text-align: left;
    }

    /*newpage*/
    .deposits {
        background: #f8f9fb;
        padding: 20px 30px;
        width: 100%;
    }

    .deposits ul {
        list-style: none;
        padding: 0px;
        margin: 0px;
    }

    .deposits ul li {
        display: inline-block;
        width: 19%;
        font-size: 14px;
    }

    .deposits ul li span {
        display: block;
        font-size: 19px;
        font-weight: 800;
        color: #079cd3;
    }

    .deposits ul li:last-child {
        margin-right: 0px;
    }

    .new_table {
        margin-top: 0;
    }

    .new_table .table.table.table-striped thead {
        background: #f8f9fb;
    }

    .new_table .table-striped tbody tr:nth-of-type(odd) {
        background-color: #fafcfb;
    }

    .new_table .table-striped tbody td span {
        font-size: 14px;
        margin-top: -4px;
        display: block;
        font-weight: 600;
    }

    .new_table .table-striped tbody td span + span {
        display: block;
        font-size: 14px;
        color: #079cd3;
        font-weight: 700;
        letter-spacing: 0.9px;
        margin-top: 1px;
    }

    .new_table .table-striped tbody td i.fas.fa-check-circle {
        font-size: 25px;
        color: green;
    }

    .new_table .table td, .new_table .table th {
        padding: .75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
        text-align: center;
        font-size: 13px;
        color: #343434;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .new_table .table thead th {
        vertical-align: bottom;
        border-bottom: 0px;
        font-weight: 400;
        border-top: 0;
    }

    .deposits_button {
        border: 1px solid #f8f9fb;
        border-radius: 10px;
        background: #fff;
        color: #000;
        margin-top: 20px;
        padding: 4px 33px;
        outline: none;
    }

    .nav-tabs {
        border-bottom: 2px solid #DDD;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        border-width: 0;
    }

    .nav-tabs > li > a {
        border: none;
        color: #666;
    }

    li.active span.round-tab:before {
        content: "Step";
        position: absolute;
        display: block;
        font-size: 10px;
        text-align: center;
        margin-left: 22px;
        margin-top: 12px;
    }

    li.active span.round-tab h2 {
        font-size: 20px;
    }

    ul.nav.nav-tabs {
        margin-top: 25px;
        background: #fff;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #ffffff;
        background-color: #6ab8dd;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .nav-link {
        border: none;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    a#chnagePassword_btn {
        display: block;
        width: 200px;
        margin: 0 auto;
        text-align: center;
        color: #000;
        border: 1px solid #222;
        padding: 10px;
        margin-top: 20px;
        border-radius: 30px;
        text-decoration: none;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .profie_wrap .profile_left .profile_uploader_block form input {
        display: none;
    }

    .profie_wrap .profile_left .profile_uploader_block label {
        width: 50px;
        height: 50px;
        background: #0000002b;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
    }

    .profie_wrap .profile_left .profile_uploader_block {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .right_block_progress ul {
        padding: 0;
    }

    .right_block_progress li {

        background: #333254;
        list-style: none;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-content: center;

    }

    .right_block_progress li span {

        width: 49%;
        display: inline-block;
        color: #fff;
        display: flex;
        align-items: center;
        position: relative

    }

    .right_block_progress li span.right_block_progress_right button {

        float: right;
        position: absolute;
        right: 0;
        background: #fff;
        color: #333254;
        border: none;

    }

    .right_block_progress li span.right_block_progress_left img {

        width: 21px;
        margin-right: 8px;
        vertical-align: middle;

    }

    button#purchase_power {
        background: #26c9ff;
        padding: 8px 30px;
        float: right;
        color: #fff;
        border-radius: 3px;
        margin-top: 30px;
        border: medium;
        box-shadow: 0 2px 9px #efe4e4;
    }

    .profile_left {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 5px 10px #e6e6e6;
    }

    .top_two {
        width: 45% !important;
        float: left;
        background: #fff;
        height: 300px;
        margin-right: 5%;
        margin-bottom: 30px;
        text-align: center;
    }

    .profile_left .profile_pictures {
        width: 100%;
        height: 350px;
        background-size: cover !important;
        background-position: center center !important;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .profile_left .details_user p {
        margin: 0;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 0.5px;
    }

    .profile_left .details_user p > strong > a {
        text-decoration: none;
    }

    .profile_left .details_user h2 {
        font-size: 25px;
        font-weight: bold;
        margin-top: 20px;
        text-transform: capitalize
    }

    .profile_left .details_user h2 a {
        float: right;
        font-size: 16px;
        color: #22252a9c;
    }

    .profile_left .details_user h4 {
        font-size: 20px;
        font-weight: bold;
    }

    .profile_left {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 5px 10px #e6e6e6;
    }

    .profile_left .details_user {
        width: 90%;
        margin: 0 auto;
    }

    .profie_wrap {
        padding-top: 20px;
    }

    .profile_left {
        padding-bottom: 20px;
        position: relative
    }

    .profile_right .top_one, .profile_right .top_two {
        width: 47%;
        float: left;
        background: #fff;
        height: 234px;
        margin-right: 5%;
        margin-bottom: 30px;
        box-shadow: 1px 2px 21px #39363652;
    }

    .profile_right .top_two h3, .right_col .profie_wrap .profile_right .top_one h3 {
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
        font-weight: bold;
    }

    .right_col .profie_wrap .profile_right .top_one img {
        width: 50%;
        display: block;
        margin: 0 auto;
        margin-top: 15px;
    }

    .profie_wrap .profile_right .top_one button {
        padding: 10px 50px;
        margin: 0 auto;
        display: block;
        margin-top: 30px;
        border-radius: 30px;
        background: linear-gradient(-93deg, rgb(62, 130, 247), rgb(229, 134, 255));
        color: #fff;
        font-size: 14px;
        border: medium;
    }

    .profie_wrap .profile_right .top_two .img_top_two {
        width: 40%;
        float: left;
        background: url(../images/circle.png);
        height: 200px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .msg {

        color: red;
    }

    .error {
        color: red;
    }

    .add_emp {

    }

    .add_emp .heading__ {
        margin: 0;
        font-size: 24px;
        color: #222;
        font-weight: 600;
        margin-left: 20px;
        position: relative;
        top: 20px;
    }

    .add_emp .heading__ i {
        color: #4fbbe8;
        font-size: 40px;
    }

    .add_emp .wizard .wizard-inner li a em {
        position: relative;
        top: -23px;
        left: 15px;
        font-style: normal;
        font-weight: normal;
    }

    .add_emp .wizard {
        box-shadow: 1px 2px 7px #d3d3d3;
        border-radius: 15px;
    }

    .add_emp .wizard .form-control {
        height: 35px !important;
        font-size: 13px;
        border: 1px solid #d3d3d3;
        color: #333;
    }

    .add_emp .wizard label {
        font-weight: normal;
        font-size: 13px;

    }

    .checkbox label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
        font-size: 14px !important;
    }

    .left_row_profile {
        margin: 10px;
    }

    .left_row_profile h2 {
        font-size: 20px;
    }

    .left_row_profile ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    .left_row_profile ul li {
        font-weight: 400;
        color: #999;

    }

    .left_row_profile ul li span {
        font-weight: 800;
        color: #000;
        margin-right: 10px;
    }


</style> -->

<style>
    <
    style >
    .wizard {
        margin: 20px auto;
        background: #fff;
    }

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;
        padding-top: 10px;
    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 25%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    @media ( max-width: 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }

    .profile_left ul {
        list-style: none;
    }

    .profile_left h3 {
        padding: 15px;
        margin: 0px;
    }

    .profile_left ul li {
        padding: 13px 0px;
    }

    .profile_left ul li a {
        color: #000;
        text-decoration: none;
        transition: all 2s;
        margin-left: 0px;
    }

    .profile_left ul li a:hover {
        color: red;
        text-decoration: none;
        transition: all 2s;
        margin-left: 10px;
    }

    .top_two button {
        padding: 10px 50px;
        margin: 0 auto;
        display: block;
        margin-top: 4px;
        border-radius: 30px;
        background: linear-gradient(-93deg, rgb(65, 134, 211), rgb(65, 134, 211));
        color: #fff;
        font-size: 14px;
        border: medium;
    }

    .form-control {
        color: #4e4d4d;
    }

    .modal.profile_edit .modal-header {
        border: none;
    }

    .modal.profile_edit .modal-body {
        padding: 0;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a {
        padding: 3px 20px;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #333;
        position: relative;
        border: none;
        padding-bottom: 13px;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a::after {
        content: '';
        display: block;
        height: 2px;
        background: linear-gradient(-93deg, rgb(67, 84, 146), rgb(220, 120, 222));
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 0;
        margin: auto;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a.active::after {
        width: 100%;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .modal.profile_edit .modal-body ul.nav.nav-tabs li a.active {
        border: none;
        background-color: transparent;
        color: #8362b1;
    }

    .modal.profile_edit .modal-dialog {
        max-width: 650px;
    }

    .modal.profile_edit .modal-content .tab-pane .tabs_block_inner label.profile {
        display: inline-block;
        width: 60px;
        height: 60px;
        vertical-align: middle;
        background-color: red;
        background-size: cover !important;
        border-radius: 50%;
        margin-bottom: 0;
        background-position: center center !important;
    }

    .changing_block {
        margin-left: 62px;
    }

    .changing_block a {
        font-size: 13px;
        margin-right: 20px;
        color: #333;
        border-bottom: 1px dotted #333;
        text-decoration: none;
    }

    .right_col .profie_wrap .profile_left .details_user p a#chnagePassword_btn {
        display: block;
        width: 200px;
        margin: 0 auto;
        text-align: center;
        color: #000;
        border: 1px solid #222;
        padding: 10px;
        margin-top: 20px;
        border-radius: 30px;
        text-decoration: none;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .right_col .profie_wrap .profile_left .details_user p a#chnagePassword_btn:hover {
        border-color: #007bff;
        color: #007bff;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .right_mining {
        padding-left: 0;
        margin-left: -4px;
    }

    .modal.profile_edit .modal-content .tab-pane .profile_block .tabs_block_inner input[type="email"] {
        color: #000;
        background-color: #f8f8f8;
    }

    .dificulty_form button {
        background: linear-gradient(-95deg, #59C3F5, #1CAAED);
        color: #fff;
        border: none;
    }

    .dificulty_form input {
        padding-left: 10px;
        background: #f5f5f5;
    }

    .accodian .accodian-heading i {
        float: right;
        font-size: 18px;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .accodian.active .accodian-heading i {
        transform: rotate(180deg);
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .aprlbls__ .checkbox {
        padding: 10px 30px;
        display: inline-block;
        width: 100%;
    }

    .checkbox {
        text-align: left;
    }

    /*newpage*/
    .deposits {
        background: #f8f9fb;
        padding: 20px 30px;
        width: 100%;
    }

    .deposits ul {
        list-style: none;
        padding: 0px;
        margin: 0px;
    }

    .deposits ul li {
        display: inline-block;
        width: 19%;
        font-size: 14px;
    }

    .deposits ul li span {
        display: block;
        font-size: 19px;
        font-weight: 800;
        color: #079cd3;
    }

    .deposits ul li:last-child {
        margin-right: 0px;
    }

    .new_table {
        margin-top: 0;
    }

    .new_table .table.table.table-striped thead {
        background: #f8f9fb;
    }

    .new_table .table-striped tbody tr:nth-of-type(odd) {
        background-color: #fafcfb;
    }

    .new_table .table-striped tbody td span {
        font-size: 14px;
        margin-top: -4px;
        display: block;
        font-weight: 600;
    }

    .new_table .table-striped tbody td span + span {
        display: block;
        font-size: 14px;
        color: #079cd3;
        font-weight: 700;
        letter-spacing: 0.9px;
        margin-top: 1px;
    }

    .new_table .table-striped tbody td i.fas.fa-check-circle {
        font-size: 25px;
        color: green;
    }

    .new_table .table td, .new_table .table th {
        padding: .75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
        text-align: center;
        font-size: 13px;
        color: #343434;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .new_table .table thead th {
        vertical-align: bottom;
        border-bottom: 0px;
        font-weight: 400;
        border-top: 0;
    }

    .deposits_button {
        border: 1px solid #f8f9fb;
        border-radius: 10px;
        background: #fff;
        color: #000;
        margin-top: 20px;
        padding: 4px 33px;
        outline: none;
    }

    .nav-tabs {
        border-bottom: 2px solid #DDD;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        border-width: 0;
    }

    .nav-tabs > li > a {
        border: none;
        color: #666;
    }

    li.active span.round-tab:before {
        content: "Step";
        position: absolute;
        display: block;
        font-size: 10px;
        text-align: center;
        margin-left: 22px;
        margin-top: 12px;
        top: -25px;
    }

    li.active span.round-tab h2 {
        font-size: 20px;
    }

    ul.nav.nav-tabs {
        margin-top: 25px;
        background: #fff;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #ffffff;
        background-color: #6ab8dd;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .nav-link {
        border: none;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    a#chnagePassword_btn {
        display: block;
        width: 200px;
        margin: 0 auto;
        text-align: center;
        color: #000;
        border: 1px solid #222;
        padding: 10px;
        margin-top: 20px;
        border-radius: 30px;
        text-decoration: none;
        transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
    }

    .profie_wrap .profile_left .profile_uploader_block form input {
        display: none;
    }

    .profie_wrap .profile_left .profile_uploader_block label {
        width: 50px;
        height: 50px;
        background: #0000002b;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
    }

    .profie_wrap .profile_left .profile_uploader_block {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .right_block_progress ul {
        padding: 0;
    }

    .right_block_progress li {

        background: #333254;
        list-style: none;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-content: center;

    }

    .right_block_progress li span {

        width: 49%;
        display: inline-block;
        color: #fff;
        display: flex;
        align-items: center;
        position: relative

    }

    .right_block_progress li span.right_block_progress_right button {

        float: right;
        position: absolute;
        right: 0;
        background: #fff;
        color: #333254;
        border: none;

    }

    .right_block_progress li span.right_block_progress_left img {

        width: 21px;
        margin-right: 8px;
        vertical-align: middle;

    }

    button#purchase_power {
        background: #26c9ff;
        padding: 8px 30px;
        float: right;
        color: #fff;
        border-radius: 3px;
        margin-top: 30px;
        border: medium;
        box-shadow: 0 2px 9px #efe4e4;
    }

    .profile_left {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 5px 10px #e6e6e6;
    }

    .top_two {
        width: 45% !important;
        float: left;
        background: #fff;
        height: 300px;
        margin-right: 5%;
        margin-bottom: 30px;
        text-align: center;
    }

    .profile_left .profile_pictures {
        width: 100%;
        height: 350px;
        background-size: cover !important;
        background-position: center center !important;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .profile_left .details_user p {
        margin: 0;
        font-size: 14px;
        line-height: 25px;
        letter-spacing: 0.5px;
    }

    .profile_left .details_user p > strong > a {
        text-decoration: none;
    }

    .profile_left .details_user h2 {
        font-size: 25px;
        font-weight: bold;
        margin-top: 20px;
        text-transform: capitalize
    }

    .profile_left .details_user h2 a {
        float: right;
        font-size: 16px;
        color: #22252a9c;
    }

    .profile_left .details_user h4 {
        font-size: 20px;
        font-weight: bold;
    }

    .profile_left {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 5px 10px #e6e6e6;
    }

    .profile_left .details_user {
        width: 90%;
        margin: 0 auto;
    }

    .profie_wrap {
        padding-top: 20px;
    }

    .profile_left {
        padding-bottom: 20px;
        position: relative
    }

    .profile_right .top_one, .profile_right .top_two {
        width: 47%;
        float: left;
        background: #fff;
        height: 234px;
        margin-right: 5%;
        margin-bottom: 30px;
        box-shadow: 1px 2px 21px #39363652;
    }

    .profile_right .top_two h3, .right_col .profie_wrap .profile_right .top_one h3 {
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
        font-weight: bold;
    }

    .right_col .profie_wrap .profile_right .top_one img {
        width: 50%;
        display: block;
        margin: 0 auto;
        margin-top: 15px;
    }

    .profie_wrap .profile_right .top_one button {
        padding: 10px 50px;
        margin: 0 auto;
        display: block;
        margin-top: 30px;
        border-radius: 30px;
        background: linear-gradient(-93deg, rgb(62, 130, 247), rgb(229, 134, 255));
        color: #fff;
        font-size: 14px;
        border: medium;
    }

    .profie_wrap .profile_right .top_two .img_top_two {
        width: 40%;
        float: left;
        background: url(../images/circle.png);
        height: 200px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .msg {

        color: red;
    }

    .error {
        color: red;
    }

    .add_emp {

    }

    .add_emp .heading__ {
        margin: 0;
        font-size: 24px;
        color: #222;
        font-weight: 600;
        margin-left: 20px;
        position: relative;
        top: 20px;
    }

    .add_emp .heading__ i {
        color: #4fbbe8;
        font-size: 40px;
    }

    .add_emp .wizard .wizard-inner li a em {
        position: relative;
        top: -23px;
        left: 15px;
        font-style: normal;
        font-weight: normal;
    }

    .add_emp .wizard {
        box-shadow: 1px 2px 7px #d3d3d3;
        border-radius: 15px;
    }

    .add_emp .wizard .form-control {
        height: 35px !important;
        font-size: 13px;
        border: 1px solid #d3d3d3;
        color: #333;
    }

    .add_emp .wizard label {
        font-weight: normal;
        font-size: 13px;

    }

    .checkbox label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
        font-size: 14px !important;
    }

    .left_row_profile {
        margin: 10px;
    }

    .left_row_profile h2 {
        font-size: 20px;
    }

    .left_row_profile ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    .left_row_profile ul li {
        font-weight: 400;
        color: #999;

    }

    .left_row_profile ul li span {
        font-weight: 800;
        color: #000;
        margin-right: 10px;
    }

    .dashboard-card {
        background: white;
        text-align: center;
        min-height: 115px;
        border-radius: 4px;
    }

    .card-heading {
        padding-top: 16px;
        font-size: 16px;
    }

    .card-number {
        margin: 0;
        padding-top: 10px;
        font-size: 40px;
    }

    .push-down-20 {
        margin-bottom: 20px
    }

    @media (min-width: 1200px){
        .container {
           width: 1045px !important;
        }
    }


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">


        <div class="">
            <div class="row">
                <div class="container profie_wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile_left">
                                <div class="row">
                                    <h3 style="
    display: flex;
    float: left;
    margin: 7%;
">Appraisals</h3>
                                    <button type="button" class="btn btn-primary"
                                            style="float: right;margin: 7%;margin-top: 10%;" data-toggle="modal"
                                            data-target="#apprmodal">Add Appraisal
                                    </button>
                                </div>

                                <div class="left_row_profile apprcon">

                                </div>

                                <script>
                                    function listappr(dd) {
                                        $.post("modules/appraisal/get_appraisal_info.php", {id: dd}, iii => {
                                            i = JSON.parse(iii);
                                            console.log(i);
                                            temp1 = i;
                                            for (t in temp1.data) {
                                                $(`#appr_${t}`).html(temp1.data[t]);
                                            }
                                        });
                                    }

                                    function showlistem(vv) {
                                        console.log(vv);
                                        appraisal = vv;
                                        $.post("modules/reports/reports.php", {id: vv}, r => {
                                            r = JSON.parse(r);
                                            console.log(r);
                                            try {
                                                window.curemaptbh.destroy()
                                            } catch (e) {
                                                console.log(e);
                                            }
                                            try {
                                                console.log("Adding...");
                                                $(".listtable").html(`<table id="example_list" class="table table-striped table-bordered dt-responsive nowrap"
                               cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Manager's Name</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                        </table>`);
                                                var yyh = [];
                                                $(r.data).each((k, d) => {
                                                    console.log(d, "TESTING");
                                                    var done = true;
                                                    if (d.modules.search("SELF") > -1) {
                                                        if (d.self_rated == "no") {
                                                            done = false;
                                                            console.log`SELF`;
                                                        }
                                                    }
                                                    if (d.modules.search("MANAGER") > -1) {
                                                        if (d.manager_rated == "no") {
                                                            done = false;
                                                            console.log`MANAGR`;
                                                        }
                                                    }
                                                    if (d.modules.search("PEER") > -1) {
                                                        if (d.peer_rating == null || d.peer_rating == undefined || d.peer_rating == 0 || d.peer_rating == "0") {
                                                            done = false;
                                                            console.log`PEER`;
                                                        }
                                                    }
                                                    var stats = done ? "COMPLETE" : "INCOMPLETE";
                                                    yyuhn = stats.toLowerCase();
                                                    yyh.push({
                                                        "Employee Id": d["id"].toString(),
                                                        "First Name": d["first_name"].toString(),
                                                        "Last Name": d["last_name"].toString(),
                                                        "Department": d["name"].toString(),
                                                        "Email": d["email"].toString(),
                                                        "Manager Name": d["m"]["first_name"] + " " + d["m"]["last_name"],
                                                        "Status": `<span class="${yyuhn}" onclick="showEMREPORT('${d["id"]}','${appraisal}')" >${stats}</span>`
                                                    });
                                                });

                                                window.curemaptbh = $('#example_list').DataTable({
                                                    "processing": true,
                                                    "info": true,
                                                    "stateSave": true,
                                                    data: yyh,
                                                    "columns": [
                                                        {"data": "Employee Id"},
                                                        {"data": "First Name"},
                                                        {"data": "Last Name"},
                                                        {"data": "Department"},
                                                        {"data": "Email"},
                                                        {"data": "Manager Name"},
                                                        {"data": "Status"},
                                                    ]
                                                });

                                            }
                                            catch (e) {
                                                console.log(e)
                                            }
                                        });
                                    }

                                    $.post("modules/appraisal/getlistofappraisals.php", {}, pp => {
                                        pp = JSON.parse(pp);
                                        console.log(pp);
                                        for (t in pp.data) {
                                            y = pp.data[t];
                                            teamplate = `<div class="container appr_con" idappr="${y.id}" style="width:100%;">
                                    <a href="#" data-toggle="modal" data-target="#myModal_ddd" class="listappr" idappr="${y.id}" onclick="listappr('${y.id}')">${y.name}</a>
                                    <button  style="float:right;" onclick="showlistem('${y.id}')"
                                     type="button" class="btn btn-warning" data-toggle="modal" data-target="#appr_list"  >LIST</button>
                                    <br>
                                    <span class="red">${y.description}</span>
                                    </div>
                                    <hr>`;
                                            $(".apprcon").append(teamplate);
                                        }
                                        window.document.body.style.height = (300 + pp.data.length * 100) + "px";
                                    });

                                </script>

                            </div>
                        </div>
                        <div class="col-md-8 hidden">
                            <div class="profile_right">

                                <div class="top_two">
                                    <h3>Appraisal Configuration</h3>
                                    <div class="">
                                        <img src="assets/dist/img/apr.png" style="width:104px; margin-bottom: 13px;">
                                    </div>
                                    <button id="auth_success_btn"
                                    > Add Appraisal
                                    </button>
                                </div>
                                <div class="top_two hidden" onclick="window.document.location='?page=add-goal'"
                                     style="cursor: pointer;">
                                    <h3>Goal</h3>
                                    <div class="">
                                        <img src="assets/dist/img/Goal.png"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn"
                                    > view page
                                    </button>
                                </div>

                                <div class="top_two">
                                    <h3>KRA</h3>
                                    <div class="">
                                        <img src="assets/dist/img/Goal2.png"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn"
                                    > Add KRA
                                    </button>
                                </div>

                                <div class="top_two hidden">
                                    <h3>My Appraisal</h3>
                                    <div class="">
                                        <img src="assets/dist/img/m.ico"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn">
                                        view page
                                    </button>
                                </div>
                                <div class="top_two">
                                    <h3>Competency</h3>
                                    <div class="">
                                        <img src="assets/dist/img/tools-blue.svg"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn"
                                    "> Add Competency </button>
                                </div>

                                <div class="top_two hidden">
                                    <h3>Appraisal History</h3>
                                    <div class="">
                                        <img src="assets/dist/img/h.png"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn"
                                    "> view page  </button>
                                </div>
                                <div class="top_two hidden">
                                    <h3>Peers</h3>
                                    <div class="">
                                        <img src="assets/dist/img/p.png"
                                             style="width:104px; margin-bottom: 13px; opacity: 0.7;">
                                    </div>
                                    <button id="auth_success_btn"
                                    "> view page  </button>
                                </div>
                                <div class="top_two hidden">
                                    <h3>Reports</h3>
                                    <div class="">
                                        <img src="assets/dist/img/apr2.png"
                                             style="width:104px; margin-top: 15px; margin-bottom: 13px;">
                                    </div>
                                    <button id="auth_success_btn"
                                    "> view page  </button>
                                </div>


                            </div>


                        </div>


                        <!-- CANVAS JS START -->


                        <div class="col-md-8">
                            <div class="profile_right">


                                <!-- @ First Row -->
                                <div class="row push-down-20">
                                    <div class="col-sm-6">
                                        <div class="dashboard-card">
                                            <p class="card-heading">Performance Reviews Initiated</p>
                                            <h3 class="card-number">542</h3>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="dashboard-card">
                                            <p class="card-heading">Manager Rated Performance Reviews </p>
                                            <h3 class="card-number">368</h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- @ Second Row -->

                                <div class="row push-down-20">
                                    <div class="col-sm-6">
                                        <div class="dashboard-card">
                                            <p class="card-heading">Calibrated Performance Reviews</p>
                                            <h3 class="card-number">218</h3>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="dashboard-card">
                                            <p class="card-heading">Performance Reviews Completed </p>
                                            <h3 class="card-number">122</h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- @ Third Row -->
                                <div class="row push-down-20">
                                    <div class="col-md-12">
                                        <div class="dashboard-card">
                                            <div id="pieChartContainer" style="width: 100%; height: 300px"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- @ fourt Row -->
                                <div class="row push-down-20">
                                    <div class="col-md-12">
                                        <div class="dashboard-card">
                                            <div id="barGraphContainer" style="width: 100%; height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript"
                                        src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        //@Donut one
                                        $("#pieChartContainer").CanvasJSChart({
                                            title: {
                                                text: "Performance Review Status Summary"
                                            },
                                            data: [
                                                {
                                                    type: 'doughnut',
                                                    indexLabel: "{label}: {y}%",
                                                    toolTipContent: "{label}: {y}%",
                                                    dataPoints: [
                                                        {label: "A", y: 20},
                                                        {label: "B", y: 20},
                                                        {label: "C", y: 25},
                                                        {label: "D", y: 35},
                                                    ]
                                                }
                                            ]
                                        })

                                        //@ Bar-graph one
                                        $("#barGraphContainer").CanvasJSChart({
                                            title: {
                                                text: "Performance Reviews By Current Review Step"
                                            },
                                            axisY: {
                                                title: "Enter This Text Here "
                                            },
                                            data: [
                                                {
                                                    type: "bar",
                                                    toolTipContent: "{label}: US$ {y} billion",
                                                    dataPoints: [
                                                        {label: "Apple", y: 198},
                                                        {label: "Toyota", y: 250.1},
                                                        {label: "ConocoPhillips", y: 248},
                                                        {label: "Chevron", y: 270.1},
                                                        {label: "Sinopec", y: 290.5},
                                                        {label: "Vitol", y: 320.2},
                                                        {label: "British Petroleum", y: 410},
                                                        {label: "WalMart", y: 464},
                                                        {label: "Royal Dutch Shell", y: 492},
                                                        {label: "Exxon Mobil", y: 502.3}
                                                    ]
                                                }
                                            ]
                                        });

                                        //@ IF ANY DYNAMIC CHANGES ARE REQUIRED TO MAKE HERE IS INTIALIZATION
                                        var doNutChart = $("#pieChartContainer").CanvasJSChart();
                                        var doNutChart = $("#barGraphContainer").CanvasJSChart();
                                        //@ SET THE PROPERTY
                                        doNutChart.options.title.text += ": Updated";
                                        // @ AND RENDER IT
                                        doNutChart.render();

                                    });
                                </script>


                            </div>
                        </div>


                        <!-- CANVAS JS END -->


                    </div>

                </div>

            </div>
        </div>


    </section>
    <!-- /.content -->
</div>

<style type="text/css">
    #apprmodal .modal-dialog {
        width: 1000px;
        margin: 30px auto;
    }
</style>


<!-- Modal -->
<div id="apprmodal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Appraisal Configuration</h4>
            </div>
            <div class="modal-body">


                <section>
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                               <h2>1</h2>
                            </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <h2>2</h2>
                            </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <h2>3</h2>
                            </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab"
                                       title="Complete">
                            <span class="round-tab">
                                <h2>4</h2>
                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form role="form">
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="col-md-12 addapprform1wrap">
                                        <!--  <h2>CONFIGURE APPRAISAL</h2> -->

                                        <h4>Add Appraisal Cycle</h4>

                                        <div style="border-top: 2px solid #d3d3d3;"></div>

                                        <form id="data_val">
                                            <div class="form-group"><br>
                                                <label>Name of the Appraisal*</label>
                                                <input class="form-control csinput_" required="" id="app_name"
                                                       name="app_name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control csinput_ csinput_text" id="desc_name"
                                                          name="desc_name" required></textarea>
                                            </div>

                                            <div class="form-group fileerrorcon">
                                                <label>Guideline Document</label>
                                                <input class="form-control csinput_" required="required" type="file"
                                                       onchange="checkfilerror(this)"
                                                       id="guidlines" name="guidlines"
                                                       accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf, image/*, application/zip, application/rtf, audio/*, video/*"
                                                >
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-primary form1submit">Save and continue
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="col-md-12">

                                        <h4 style="">Applicable For</h4>

                                        <div style="border-top: 2px solid #d3d3d3;"></div>
                                        <br>

                                        <div class="form-group">
                                            <label>Date of Joining</label><br>
                                            <label class="radio-inline"><input style="height:auto !important"
                                                                               type="radio" id="until" name="until"
                                                                               onchange="get_dates(1);" value="Until"
                                                                               checked>Until</label>
                                            <label class="radio-inline"><input style="height:auto !important"
                                                                               type="radio" id="fromTo" name="until"
                                                                               onchange="get_dates(2);" value="fromTo">From
                                                & To</label><br>
                                        </div>

                                        <div class="form-group" id="date_from_div" style="margin-top: 35px;">
                                            <label>Date From</label>
                                            <input class="form-control csinput_" required="" type="date" id="date_from">
                                            <label for="app_name" generated="true" class="error error_from_date"
                                                   style="display: inline-block;">Please select a start date</label>
                                        </div>

                                        <div class="form-group" style="" id="date_to_div">
                                            <label>Date To</label>
                                            <input class="form-control csinput_" required="" type="date" id="date_to">
                                            <label for="app_name" generated="true" class="error error_to_date"
                                                   style="display: inline-block;">Please select an end date</label>
                                        </div>

                                        <div class="form-group" id="until_date_div" style="">
                                            <label>Date</label>
                                            <input class="form-control csinput_" required="" type="date"
                                                   id="until_date">
                                            <label for="app_name" generated="true" class="error error_until_date"
                                                   style="display: inline-block;">Please select the until date</label>
                                        </div>


                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control csinput_" required="" type="text" id="location"
                                                   name="location">
                                            <label for="app_name" generated="true" class="error error_location"
                                                   style="display: inline-block;">Please enter a location</label>
                                        </div>


                                        <div class="form-group">
                                            <label>Rating Type</label>
                                            <select class="form-control csinput_" id="rtype" name="rtype">
                                                <option>Weighted Checklist</option>
                                                <option>Graphic Rating Scale</option>
                                                <option>Mixed Standard Scales</option>
                                                <option>Forced Choice Scale</option>
                                                <option>Behaviourly Anchored Rating Scale</option>
                                                <option>Forced Distribution</option>
                                            </select>
                                        </div>

                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary formsubmit2">Save and continue
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="col-md-12">

                                        <h4>Select Employee Range</h4>
                                        <div style="border-top: 2px solid #d3d3d3;"></div>
                                        <br>

                                        <div class="form-group slctemprng">
                                            <select onchange="bs();" id="mtype" class="form-control csinput_">

                                                <option value="1">Whole Company</option>
                                                <option value="2">By Department</option>
                                                <option value="3">By Individual</option>
                                            </select>
                                        </div>


                                    </div>

                                    <div id="departments_table">


                                        <table id="example5" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>
                                            <tr>

                                                <th>#</th>
                                                <!--  <th>Sno</th>   -->
                                                <th>Department Name</th>


                                            </tr>
                                            </thead>
                                            <tbody class="depbodytable">
                                            <tr></tr>

                                            </tbody>

                                            </tfoot>
                                        </table>
                                        <label for="app_name" generated="true" class="error error_select_department"
                                               style="display: inline-block;">Please select a department</label>

                                    </div>
                                    <div id="b_type" style="display:none">


                                        <table id="example3" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>
                                            <tr>

                                                <th><input type="checkbox" id="select_all"></th>
                                                <th>Emp ID</th>
                                                <th>Name</th>

                                                <th>Department</th>
                                                <th>Start Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>

                                    </div>
                                    <div id="appraisal_button">

                                    </div>
                                    <div id="bs_type" style="display:none !important;">
                                        <table id="example4" class="table" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Emp ID</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Appraisal Start Date</th>

                                            </tr>
                                            </thead>
                                            <tbody class="em_table">

                                            </tbody>

                                            </tfoot>
                                        </table>
                                        <label for="app_name" generated="true" class="error error_an_employee"
                                               style="display: inline-block;">Please select an employee</label>
                                        <label for="app_name" generated="true" class="error error_employee_date"
                                               style="display: inline-block;">Please select correct start dates for all
                                            employees</label>
                                    </div>

                                    <div id="date_form">
                                        <div class="col-md-12"><label> Overall Apprasal Period </label></div>
                                        <div class="col-md-12" style="border-top: 2px solid #d3d3d3;">


                                            <div>

                                                <br style="clear:both">

                                                <label> Start Date </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" id="ostart_date"
                                                           name="ostart_date" required="">
                                                    <script>
                                                        $("#ostart_date").attr("min", new Date().toJSON().split('T')[0]);
                                                    </script>
                                                    <label for="app_name" generated="true"
                                                           class="error error_ostart_date"
                                                           style="display: inline-block;">Please select a start
                                                        date</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div id="get_employees"></div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                        </li>
                                        <li style="display: none;">
                                            <button type="button" class="btn btn-default next-step">Skip</button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary btn-info-full formsubmit3">Save
                                                and continue
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="complete">

                                    <h4>Select Appraisal Modules</h4>
                                    <div style="border-top: 2px solid #d3d3d3;"></div>
                                    <br>
                                    <div class="col-md-3">

                                        <div class="aprlbls__">
                                            <div class="checkbox">
                                                <input id="self" onchange="appraisal_type_add_on(1);"
                                                       name="selfAppraisel" value="1"
                                                       type="checkbox">
                                                <label for="self">Self Appraisal</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="manager" name="managerAppraisel"
                                                       onchange="appraisal_type_add_on(2);" value="1"
                                                       type="checkbox">
                                                <label for="manager">Manager Appraisal</label>
                                            </div>
                                            <div class="checkbox hidden">
                                                <input id="hr" name="hrAppraisel" value="1" type="checkbox"
                                                       onchange="appraisal_type_add_on(5);" checked="checked">
                                                <label for="hr">HR Review</label>
                                            </div>

                                            <div class="checkbox">
                                                <input id="peer" name="peerAppraisel" value="1" type="checkbox">
                                                <label for="peer">Peer Appraisal</label>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6" id="self_div" style="visibility: hidden;">

                                            <div class="row">

<style>
    .float-left {
        float:left;
    }
</style>
                                                <div class="form-group float-left">
                                                    <input id="self_number" type="number" min="0" class="form-control" value="0">
                                                </div>

                                                <div class="form-group float-left">

                                                    <select class="form-control" id="self_period">
                                                        <option value="0">Select Period</option>
                                                        <option value="day">Days</option>
                                                        <option value="week">Weeks</option>
                                                        <option value="month">Months</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>

                                        </div>



                                        <div class="col-md-6" id="manager_div" style="visibility: hidden;">
                                            <div class="row">
                                            <div class="form-group float-left">
                                                <input id="manager_number" type="number" min="0" class="form-control" value="0">
                                            </div>

                                            <div class="form-group float-left">

                                                <select class="form-control" id="manager_period">
                                                    <option value="0">Select Period</option>
                                                    <option value="day">Days</option>
                                                    <option value="week">Weeks</option>
                                                    <option value="month">Months</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="col-md-3"></div>

                                        <div class="col-md-3 hidden" id="peer_div">
                                            <div class="form-group">


                                                <select class="form-control" id="peer_period">
                                                    <option value="0">Select Period</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Month</option>
                                                    <option value="3">3 Month</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>

                                    </div>
                                    <div class="row" id="aapraisal_form">
                                        <div class="form-group" id="confirm">
                                            <label for="app_name" generated="true" class="error module-error"
                                                   style="display: inline-block;">Please select self or manager
                                                appraisal module</label>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step">Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" id="confirm_button" name="submit"
                                                            onclick="save_appraisal();" class="btn btn-primary">Initiate
                                                        Appraisal
                                                    </button>
                                                </li>
                                            </ul>


                                        </div>
                        </form>
                    </div>


            </div>


            <div class="clearfix"></div>
        </div>
        </form>
    </div>
    </section>


    <div class="panel-body">

        <div class="row appraisal_headin cnfgapp_">


        </div>


        <br><br><br>
        <div style="display:none" class="appraisal_form_with_type">
            <div class="row">


                <div class="add_appr">


                </div>


            </div>
            <input type="hidden" id="valfordepartment" name="valfordepartment">
        </div>

    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>


<script>
    window.doneIndiEM = false;
    $(".module-error").hide();

    function appraisal_type_add_on(type) {

        if ($('#self').prop('checked') == true) {
            $("#self_div").show();
            $("#self_div").css("visibility", "visible");
        } else {
            //$("#self_div").hide();<
            $("#self_div").css("visibility", "hidden");
        }

        if ($('#manager').prop('checked') == true) {
            $("#manager_div").show();
            $("#manager_div").css("visibility", "visible");
        } else {
            //$("#manager_div").hide();
            $("#manager_div").css("visibility", "hidden");
        }


        if ($('#peer').prop('checked') == true) {
            $("#peer_div").show();
        } else {
            $("#peer_div").hide();
        }

    }

    $("#peer_div").hide();

    var id;

    function get_dates(id) {

        if (id == 1) {
            $("#until_date_div").show();
            $("#date_from_div").hide();
            $("#date_to_div").hide();
        } else {

            $("#until_date_div").hide();
            $("#date_from_div").show();
            $("#date_to_div").show();
        }
    }

    $("#until_date_div").show();
    $("#date_from_div").hide();
    $("#date_to_div").hide();

    function get_students() {

        jQuery(".emp_checkbox1").click(function () {

            var as = [];
            $("input[name='student_id1']:checked").each(function () {
                as.push($(this).attr('value'));
            });
            $("#val").val(as);
        });

    }

    function save_appraisal_dept() {
        let data = {};
        data.name = $("#app_name").val();
        data.description = $("#desc_name").val();
        data.file_doc_path = "";
        if ($("input[name='until']:checked").val() == "Until") {
            data.date_of_joining_from = "1980-01-01";
            data.date_of_joining_to = $("#until_date").val();
        } else {
            data.date_of_joining_from = $("#date_from").val();
            data.date_of_joining_to = $("#date_to").val();
        }
        data.location = $("#location").val();
        data.rating_type = $("#rtype").val();
        data.employee_range = $("#mtype").val();
        data.modules = [];
        let meta = {};
        if ($("#self")[0].checked) {
            data.modules.push("SELF");
            meta["self_period"] = $("#self_period").val();
        }
        if ($("#manager")[0].checked) {
            data.modules.push("MANAGER");
            meta["manager_period"] = $("#manager_period").val();
        }
        if ($("#peer")[0].checked) {
            data.modules.push("PEER");
        }
        if ($("#hr")[0].checked) {
            data.modules.push("HR");
            meta["hr_period"] = $("#hr_period").val();
        }
        let departments = [];
        $(`input[type='checkbox'].deptbox:checked`).each((a, b) => {
            departments.push({
                id: $(b).attr("value")
            });
        });

        var file = $("#guidlines")[0].files[0];
        var upload = new Upload(file);
        var formdata = (upload.doUpload());
        formdata.append("data", JSON.stringify(data));
        formdata.append("departments", JSON.stringify(departments));
        formdata.append("meta", JSON.stringify(meta));
        formdata.append("start_date", $("#ostart_date").val());

        $.ajax({
            type: "POST",
            url: "modules/appraisal/department_appraisal.php",
            success: function (data) {
                alert("Appraisal was successfully done");
                window.location.reload(true);
                console.log(data);
            },
            error: function (error) {
                console.log(error);
            },
            async: true,
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            timeout: 600000
        });

    }


    function save_appraisal() {
        $(".module-error").hide();
        if (!(($("#self").prop("checked")) || ($("#manager").prop("checked")))) {
            $(".module-error").show();
            return;
        }


        if ($("#mtype").val() == "2") {
            save_appraisal_dept();
            return;
        }

        let data = {};
        data.name = $("#app_name").val();
        data.description = $("#desc_name").val();
        data.file_doc_path = "";
        if ($("input[name='until']:checked").val() == "Until") {
            data.date_of_joining_from = "1980-01-01";
            data.date_of_joining_to = $("#until_date").val();
        } else {
            data.date_of_joining_from = $("#date_from").val();
            data.date_of_joining_to = $("#date_to").val();
        }
        data.location = $("#location").val();
        data.rating_type = $("#rtype").val();
        data.employee_range = $("#mtype").val();
        data.modules = [];
        let meta = {};
        if ($("#self")[0].checked) {
            data.modules.push("SELF");
            meta["self_period"] = $("#self_period").val();
            meta["self_number"]=$("#self_number").val();
        }
        if ($("#manager")[0].checked) {
            data.modules.push("MANAGER");
            meta["manager_period"] = $("#manager_period").val();
            meta["manager_number"]=$("#manager_number").val();
        }
        if ($("#peer")[0].checked) {
            data.modules.push("PEER");
        }
        if ($("#hr")[0].checked) {
            data.modules.push("HR");
            meta["hr_period"] = $("#hr_period").val();
        }
        let employees = [];
        $(".emp_checkbox2").each((a, b) => {
            if ($(b).prop("checked")) {
                employees.push({
                    id: $(b).attr("employeeid"),
                    start_date: $($(b).parent().parent().children()[4]).first().children().val()
                });
            }
        });


        var send = (
            {
                data: JSON.stringify(data),
                employees: JSON.stringify(employees),
                meta: meta
            }
        );

        var file = $("#guidlines")[0].files[0];
        var upload = new Upload(file);
        var formdata = (upload.doUpload());
        formdata.append("data", JSON.stringify(data));
        formdata.append("employees", JSON.stringify(employees));
        formdata.append("meta", JSON.stringify(meta));

        $.ajax({
            type: "POST",
            url: "modules/appraisal/indivisual_appraisal.php",
            success: function (data) {
                console.log(data);
                alert("CREATED");
                window.location.reload(true);
            },
            error: function (error) {
                console.log(error);
            },
            async: true,
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            timeout: 600000
        });
    }


    function save_appraisal_old() {

        var employee_range = $("#mtype").val();

        var data = $("#data_val").serialize();

        alert(data);


        /*var self=$('#self').prop('checked');
        var manager=$('#manager').prop('checked');
        var peer=$('#peer').prop('checked');
        var hr=$('#hr').prop('checked');
        var self_start_date=$("#self_start_date").val();
        var self_end_date=$("#self_end_date").val();
        var self_period=$("#self_period").val();*/

//var errors = [];


        /*//appraisal dates case 1

        if(self==true){
                    if(self_start_date=="" && self_end_date=="" && self_period=="0"){

                    errors.push("Please Select,Start Date and End Date or Choose Period");

                    }

                    if(self_start_date=="" && self_period=="0"){

                      errors.push("Please Select,Start Date");

                    }

                    if(self_end_date=="" && self_period=="0"){
                       errors.push("Please Select,Start Date");


                    }


                        $(errors).each(function(){
                        alert($(this).text())
                        });


        }*/


        if (self || manager || peer || hr == "true") {

            if (self == true) {
                self = 1;
            } else {
                self = "";
            }
            if (manager == true) {
                manager = 1;
            } else {
                manager = "";
            }
            if (peer == true) {
                peer = 1;
            } else {
                peer = "";
            }
            if (hr == true) {
                hr = 1;
            } else {
                hr = "";
            }

            if (employee_range == 3) {


                if ($("#val").val() == "") {

                    alert("Please Select Atleast One Employee");
                    return false;
                } else {
                    var final_array = $("#final_array").val();
                    var data = "&data=" + final_array + "&Appraiselmethod=3" + "&selfAppraisel=" + self + "&managerAppraisel=" + manager + "&peerAppraisel=" + peer + "&HRAppraisel=" + hr;
                    alert(data);

                    $.ajax({
                        type: "post",
                        //url: "save_app.php",
                        data: data,
                        success: function (response) {
                            //alert(response);
                            if (response != 2) {
                                alert("Appraisal Initiated Successfully");
                                location.reload();
                            } else if (response == 2) {
                                alert("You already Initiated The Appraisal For the Whole Company");
                            }
                        }
                    });
                }

            }
            else if (employee_range == 1) {

                var end = $("#end_date").val();
                var start = $("#start_date").val();

                if ($("#start_date").val() == "") {
                    alert("Please Select the Start Date");
                    return false;
                }

                else if ($("#end_date").val() == "") {
                    alert("Please Select the End Date");
                    return false;
                }

                else if (start > end) {
                    alert("Start Date Cannot be Greater Than End Date");
                    return false;
                }

                else {
                    var data = $('#appraisal_form').serialize() + "&start=" + start + "&end=" + end;

                    alert(data);
                    $.ajax({
                        type: "post",
                        url: "save_app.php",
                        data: data,
                        success: function (response) {

                            if (response != 2) {
                                alert("Appraisal Initiated Successfully");
                                location.reload();
                            } else if (response == 2) {
                                alert("You already Initiated The Appraisal For the Whole Company");
                            }
                        }
                    });
                }


            } else if (employee_range == 2) {

                if ($("#valfordepartment").val() == "") {
                    alert("Please Select The Department");
                    return false;
                } else if ($("#val").val() == "") {

                    alert("Please Select Atleast One Employee");
                    return false;
                } else {
                    var final_array = $("#final_array").val();
                    var data = "&data=" + final_array + "&Appraiselmethod=2" + "&selfAppraisel=" + self + "&managerAppraisel=" + manager + "&peerAppraisel=" + peer + "&HRAppraisel=" + hr;

                    $.ajax({
                        type: "post",
                        url: "save_app.php",
                        data: data,
                        success: function (response) {

                            if (response != 2) {
                                alert("Appraisal Initiated Successfully");
                                location.reload();
                            } else if (response == 2) {
                                alert("You already Initiated The Appraisal For the Whole Company");
                            }
                        }
                    });
                }

            }

        } else {

            alert("Please Select Any Appraisal Type");
        }

    }

    function bs() {
        var id = $("#mtype").val();

        if (id == 1) {
            $("#appraisal_button").show();
            $('input[name="student_id1"]').not(this).prop('checked', false);
            $("#val").val('');
            $(".appraisal_form_with_type").show();
            $("#b_type").hide();
            $("#bs_type").hide();
            $('#departments_table').hide();
            $('#employee_response').hide();
            $("#date_form").show();


        }
        if (id == 2) {

            $("#appraisal_button").hide();
            $('input[name="student_id2"]').not(this).prop('checked', false);
            $("#val").val('');
            $(".appraisal_form_with_type").show();
            $("#b_type").hide();
            $("#confirm").show();
            $("#bs_type").hide();
            $(".depbodytable")[0].innerHTML = "";
            $.get("modules/appraisal/get_depts.php", {}, edd => {
                edd = JSON.parse(edd);
                $(".depbodytable")[0].innerHTML = "";
                e = edd.depts;
                for (let t in e) {
                    let a = e[t];
                    let template = `<tr><td><input type="checkbox" value="${a.id}" class="emp_checkbox3 deptbox" name="student_id3" deptid="${a.id}" data-emp-id="1"></td>
                                <td>${a.name}</td>
                            </tr>`;
                    $(".depbodytable").append(template);
                }
            });
            $('#departments_table').show();
            $("#date_form").hide();
        }
        if (id == 3) {
            $("#appraisal_button").hide();
            $('input[name="student_id3"]').not(this).prop('checked', false);
            $("#val").val('');
            $("#confirm").show();
            $("#aapraisal_form").show();
            $(".appraisal_form_with_type").show();
            $("#date_form").hide();
            $("#confirm").show();
            $("#bs_type").show();
            $('#departments_table').hide();
            $('#employee_response').hide();
            $("#date_form").hide();
            if (window.doneIndiEM) {
                console.log();
            }
            window.doneIndiEM = true;
            $(".em_table").html("");

            var from1 = "", to1 = "";
            if ($("input[name='until']:checked").val() == "Until") {
                from1 = "1980-01-01";
                to1 = $("#until_date").val();
            } else {
                from1 = $("#date_from").val();
                to1 = $("#date_to").val();
            }
            console.log("SENDING GET EMPLOYEE,", from1, to1);
            $.get("modules/appraisal/get_employees.php", {from: from1, to: to1}, e => {

                $(".em_table").html("");
                for (let a in e) {
                    console.log(e[a]);
                    let template = `<tr style="">
                                <td><input type="checkbox" value="123" employeeid=${e[a].id} class="emp_checkbox2" name="student_id2" id="123" data-emp-id="123" enabled></td>
                                <td>${e[a].emp_id} </td>
                                <td>${e[a].first_name} ${e[a].last_name}</td>
                                <td>${e[a].name}</td>
                                <td>
                                    <input type="date" class="datepicker" id="" data-id="end123" name="start_date" onclick="showstarte(this)"  >
                                </td>
                            </tr>`;
                    $(".em_table").append(template);
                }

                window.emDT = $("#example4").DataTable();
                $(".startdatepicker,.startdatepicker1").off();
                //$(".startdatepicker,.startdatepicker1").datepicker();

            });

        } else {
            $("#appraisal_button").show();
            $('input[name="student_id1"]').not(this).prop('checked', false);
            $("#val").val('');
            $(".appraisal_form_with_type").show();
            $("#b_type").hide();
            $("#bs_type").hide();
            $('#departments').hide();
            $('#employee_response').hide();
            $("#date_form").show();
        }

    }

    $("#appraisal_button").hide();
    $("#b_type").hide();
    $("#bs_type").hide();
    $('#departments').hide();
    $('#employee_response').hide();
    $("#date_form").hide();
    bs();

    function chooseappraiselType() {

        if ($('#Bycomapany').prop('checked') != true) {
            var sid = $("#val").val();
            var array = sid.split(',');
            if ($("#val").val() == "") {
                alert("Please Select Atleast One Employee");
                return false;
            } else {
                $(".appraisal_form_with_type").show();
            }
        } else {
            $(".appraisal_form_with_type").show();
        }
    }


    function get_data() {
        var sid = $("#val").val();
        var student_data = $("#student").val(sid);
        if ($("#val").val() == "") {
            alert("Please Select Atleast One Employee");
            return false;
        }
    }

    jQuery(".emp_checkbox1").click(function () {

        var as = [];
        $("input[name='student_id1']:checked").each(function () {
            as.push($(this).attr('value'));
        });
        $("#val").val(as);
    });

    jQuery(".emp_checkbox2").click(function () {
        var id = $(this).val();
        var as = [];
        var id = [];
        $("input[name='student_id2']:checked").each(function () {
            var emp_id = $(this).attr('value');
            var start_date = $("#StartDate" + emp_id).val();
            var end_date = $("#EndDate" + emp_id).val();
            if (start_date == "" || end_date == "") {
                $(this).attr('checked', false);
                alert("Please Select start Daate and End Date first");

            }
            if (start_date != "" || end_date != "") {
                as.push({
                    emp_id: emp_id,
                    startdate: start_date,
                    enddate: end_date
                });


                id.push($(this).attr('value'));
                var final_array = JSON.stringify(as);
                $("#final_array").val(final_array);
                $("#val").val(id);
            }
        });
    });

    jQuery(".emp_checkboxbydepart").click(function () {
        var as = [];
        $("input[name='student_idbydepart']:checked").each(function () {
            as.push($(this).attr('value'));
        });
        $("#val").val(as);
    });

    // Function for bind Employe id by department
    function bindvalues(value) {
        var as = [];
        $("input:checkbox[name=student_idbydepart]:checked").each(function () {
            as.push($(this).attr('value'));
        });
        $("#val").val(as);
    }

    // Function for bydepartment table bind
    jQuery(".emp_checkbox3").change(function () {
        var as = [];
        $("input[name='student_id3']:checked").each(function () {
            as.push($(this).attr('value'));
        });
        var dddd = $("#valfordepartment").val(as);
        $.ajax({
            type: "GET",
            url: "ajaxfunction.php",
            data: {dddd: as},
            success: function (response) {
                if (response != "") {
                    $("#get_employees").html(response);
                }

            }
        });

    });


    $("#departments").hide();

    $("#select_all").click(function () {
        $('input[name="student_id1"]').not(this).prop('checked', this.checked);
        var as = [];


        $("input[name='student_id1']:checked").each(function () {
            as.push($(this).attr('value'));
        });


        $("#val").val(as);
    });

    $("#select_all2").click(function () {
        $('input[name="student_id2"]').not(this).prop('checked', this.checked);
        var as = [];
        $("input[name='student_id2']:checked").each(function () {
            as.push($(this).attr('value'));
        });
        $("#val").val(as);
    });

    $("#select_all3").click(function () {
        $('input[name="student_id3"]').not(this).prop('checked', this.checked);
        var as = [];
        $("input[name='student_id3']:checked").each(function () {
            as.push($(this).attr('value'));
        });
        $("#val").val(as);
    });

    $("#ui-datepicker-div").remove();
    $(document).ready(function () {
        try {
            $('#example6').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        } catch (e) {
            console.log(e);
        }
    });


    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });


        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextone() {
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    }

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    var Upload = function (file) {
        this.file = file;
    };

    Upload.prototype.getType = function () {
        return this.file.type;
    };
    Upload.prototype.getSize = function () {
        return this.file.size;
    };
    Upload.prototype.getName = function () {
        return this.file.name;
    };
    Upload.prototype.doUpload = function () {
        var that = this;
        var formData = new FormData();

        // add assoc key values, this will be posts values
        formData.append("document", this.file, this.getName());
        formData.append("upload_file", true);
        return formData;
    };


</script>
<style>
    #example4_paginate > ul > li.paginate_button.active:after {
        display: none !important;
    }
</style>

<div class="modal fade" id="myModal_ddd" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Appraisal Configuration</h4>
            </div>
            <div class="modal-body">
                <div class="left_row_profile">
                    <h2>Add Appraisal Cycle</h2>
                    <ul>
                        <li><span>Name of the Appraisal*</span>
                            <p id="appr_name">Name</p></li>
                        <li><span>Description</span>
                            <p id="appr_description">Description</p></li>
                        <li><span>Guideline Document</span>
                            <p id="appr_file">Download</p></li>
                    </ul>
                </div>


                <div class="left_row_profile">
                    <h2>Applicable For</h2>
                    <ul>
                        <li><span>Date of Joining</span>
                            <p id="appr_date_of_joining_from_date">DOJ</p></li>
                        <li><span>Date</span>
                            <p id="appr_date">Date</p></li>
                        <li><span>Location</span>
                            <p id="appr_location">Location</p></li>
                        <li><span>Rating Type</span>
                            <p id="appr_rating_type">Rating Type</p></li>
                    </ul>
                </div>

                <div class="left_row_profile">
                    <h2>Select Employee Range</h2>
                    <ul>
                        <li><span>Overall Apprasal Period</span>Overall Apprasal Period</li>
                        <li><span>Start Date</span>
                            <p id="appr_start">Start Date</p></li>

                    </ul>
                </div>

                <div class="left_row_profile">
                    <h2>Select Appraisal Modules</h2>
                    <ul>
                        <li><span>Self Appraisal</span>Self Appraisal</li>
                        <li><span>Manager</span>Appraisal</li>
                        <li><span>HR Review Peer</span>Appraisal</li>
                        <li><span>Appraisal KRA</span>Appraisal</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="appr_list" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" style="width: 87%;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Appraisal Information</h4>
            </div>
            <div class="modal-body">


                <div class="row">

                    <div class="col-md-12 listtable" style="margin-top: 20px;">

                        <table id="example_list" class="table table-striped table-bordered dt-responsive nowrap"
                               cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Manager's Name</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                        </table>

                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.curemaptbh = $('#example_list').DataTable({
        "processing": true,
        "info": true,
        "stateSave": true,
        data: [],
        "columns": [
            {"data": "Employee Id"},
            {"data": "First Name"},
            {"data": "Last Name"},
            {"data": "Department"},
            {"data": "Email"},
            {"data": "Manager Name"},
            {"data": "Status"},
        ]
    });

</script>
<style>
    .complete {
        background: #3fb733;
        color: #fff;
        padding: 2px 13px;
        border-radius: 6px;
    }

    .incomplete {
        background: red;
        color: #fff;
        padding: 2px 13px;
        border-radius: 6px;
    }
</style>


<div class="modal fade" id="show_aaa" role="dialog">
    <div class="modal-dialog" style="width: 87%;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Employee Appraisal Report</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2 class="text-center report_name">Name</h2>
                    <div class="row">
                        <style>
                            .detl {
                                float: left;
                                margin: 1%;
                                padding: 1%;
                            }
                        </style>
                        <div class="detl col-md-3"><span style=""><b>Department:</b></span><span
                                    class="report_department"></span></div>
                        <div class="detl col-md-3"><span style=""><b>Phone:</b></span><span class="report_no"></span>
                        </div>
                        <div class="detl col-md-3"><span style=""><b>Email:</b></span><span class="report_email"></span>
                        </div>
                        <div class="detl col-md-3"><span style=""><b>Job Title:</b></span><span
                                    class="report_title"></span></div>
                        <div class="detl col-md-3"><span style=""><b>Manager:</b></span><span
                                    class="report_manager"></span></div>
                    </div>
                </div>
                <div class="container " style="border :0.5px grey solid;padding:2%;margin-top:1%;margin-bottom:1%;">
                    <h4>Team Goals</h4>
                    <div class="container report_team_goals">
                        <p>Team goal one</p>
                        <p>Team goal two</p>
                        <p>Team goal two</p>
                        <p>Team goal and so on...</p>
                    </div>
                </div>
                <div class="container " style="border :0.5px grey solid;padding:2%;margin-top:1%;margin-bottom:1%;">
                    <h4>Own Goals</h4>
                    <div class="container goals_report">
                        <p>Own goal one</p>
                        <p>Own goal two</p>
                        <p>Own goal and so on...</p>

                    </div>
                </div>
                <div style="border :0.5px grey solid;padding:2%;margin-top:1%;margin-bottom:1%;" class="container">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <th class="text-center">Peer Discussion</th>
                        <th class="text-center">Peer Rating</th>
                        </thead>
                        <tbody class="report_peer_questions">

                        </tbody>
                    </table>
                </div>
                <div style="border :0.5px grey solid;padding:2%;margin-top:1%;margin-bottom:1%;" class="container">
                    <h4 class="text-center">Chat History</h4>
                    <div class="container report_chat" style="padding:7%;">

                    </div>
                </div>

                <div class="container center text-center"
                     style="border :0.5px grey solid;padding:0%;margin-top:1%;margin-bottom:1%;">
                    <div class="col-md-6">
                        <div class="row">
                            <h3>SELF RATING</h3>
                            <br>
                            <div class="row self_rater">
                                <i rate="1" class="fa fa-star me" aria-hidden="true"></i> <i rate="2" goal_id="32"
                                                                                             class="fa fa-star me"
                                                                                             aria-hidden="true"></i> <i
                                        rate="3" goal_id="32" class="fa fa-star me" aria-hidden="true"></i> <i rate="4"
                                                                                                               goal_id="32"
                                                                                                               class="fa fa-star me"
                                                                                                               aria-hidden="true"></i>
                                <i goal_id="32" rate="5" class="fa fa-star me" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <h3>MANAGER RATING</h3>
                            <br>
                            <div class="row manager_rater">
                                <i goal_id="32" rate="1" class="fa fa-star me" aria-hidden="true"></i> <i rate="2"
                                                                                                          goal_id="32"
                                                                                                          class="fa fa-star me"
                                                                                                          aria-hidden="true"></i>
                                <i rate="3" goal_id="32" class="fa fa-star me" aria-hidden="true"></i> <i rate="4"
                                                                                                          goal_id="32"
                                                                                                          class="fa fa-star me"
                                                                                                          aria-hidden="true"></i>
                                <i goal_id="32" rate="5" class="fa fa-star me" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container" style="border : 0.5px grey solid;padding:2%;">

                    <h4>HR comments</h4>
                    <h5 style="width: 100%;">
                        Abhishek did a good job and has been offered a 15% raise
                    </h5>

                </div>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-3" style="border : 0.5px grey solid;padding:2%;margin-top:2%;">
                        <h4 class="text-center">Overall Final Rating</h4>
                        <div>
                            <h3 class="text-center">A</h3>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function showEMREPORT(a11, k11) {
        console.log(a11, k11);
        a11 = Number(a11);
        k11 = Number(k11);
        $.post("modules/appraisal/get_appraisal_report.php", {id: a11, appr: k11}, qwe => {
            qwe = JSON.parse(qwe);
            console.log("MAINDATA", qwe);
            $(".report_name").text(qwe.profile[0].first_name + " " + qwe.profile[0].last_name);
            $(".report_department").text(qwe.department[0].name);
            $(".report_email").text(qwe.profile[0].email);
            $(".report_no").text(qwe.profile[0].phone);
            $(".report_manager").text(qwe.manager[0].first_name + " " + qwe.manager[0].last_name);
            $(".report_title").text(qwe.profile[0].job_title);
            $(".goals_report").html("");
            $(qwe.goal).each((e, t) => {
                $(".goals_report").append(`<p>${t.definition}</p>`)
            });
            $(".report_team_goals").html("");
            $(qwe.team).each((e, t) => {
                $(".report_team_goals").append(`<p>${t.definition}</p>`)
            });
            var responses = {};
            $(qwe.q1).each((a, b) => {
                responses[b.question_id] = b;
            });
            $(".report_peer_questions").html("");
            $(qwe.q).each((r, h) => {
                console.log`ADDING PEER QUESTION`;
                $(".report_peer_questions").append(`<tr>
                            <td>${h.question}</td>
                            <td class="text-center">
                                <span>
                                <i class="fa fa-star me" aria-hidden="true" rate="1" idenratpeer="${h.id}"></i>
                                <i class="fa fa-star me" aria-hidden="true" rate="2" idenratpeer="${h.id}"></i>
                                <i class="fa fa-star me" aria-hidden="true" rate="3" idenratpeer="${h.id}"></i>
                                <i class="fa fa-star me" aria-hidden="true" rate="4" idenratpeer="${h.id}"></i>
                                <i class="fa fa-star me" aria-hidden="true" rate="5" idenratpeer="${h.id}"></i>
                                </span>
                            </td>
                        </tr>`);
                try {
                    if (responses[h.id]) {
                        temp = (responses[h.id]).rating;
                        if (temp && temp > 0) {
                            a1 = $(`.me[idenratpeer="${h.id}"]`);
                            a1.css("color", "grey");
                            b1 = (a1.filter(function () {
                                return Number($(this).attr("rate")) <= temp;
                            }));
                            $(b1).each((e, l) => {
                                l.style.color = "blue";
                            });
                        }
                    }
                } catch (e) {
                    console.log(e);
                }
            });
            $(".report_chat").html("");
            $(qwe.chat).each((i, hh) => {
                var astd = (hh.sender_id == a11) ? "EMPLOYEE_MESSAGE" : "MANAGER_MESSAGE";
                $(".report_chat").append(`<div class="row chat_msg ${astd}">${hh.message}</div><br>`);
            });
            self_rating = 0;
            manager_raing = 0;
            $(qwe.goal).each((e, j) => {
                if (j.self_rating != null && j.self_rating != undefined) {
                    self_rating += Number(j.self_rating);
                }
                if (j.manager_rating != null && j.manager_rating != undefined) {
                    manager_raing += Number(j.manager_rating);
                }
            });
            self_rating_average = Math.floor(self_rating / qwe.goal.length);
            self_manager_average = Math.floor(manager_raing / qwe.goal.length);
            console.log("LENGTH", qwe.goal.length);
            console.log("SELF RATING", self_rating_average, self_rating);
            console.log("MANAGER RATING", self_manager_average, manager_raing);
            a1 = $(`.self_rater`).children();
            a1.css("color", "grey");
            b1 = (a1.filter(function () {
                return Number($(this).attr("rate")) <= self_rating_average;
            }));
            $(b1).each((e, l) => {
                l.style.color = "blue";
            });

            a1 = $(`.manager_rater`).children();
            a1.css("color", "grey");
            b1 = (a1.filter(function () {
                return Number($(this).attr("rate")) <= self_manager_average;
            }));
            $(b1).each((e, l) => {
                l.style.color = "blue";
            });


            $("#show_aaa").modal("show");
        });

    }
</script>
<style>
    .EMPLOYEE_MESSAGE {
        float: right;
        color: green;
    }

    .MANAGER_MESSAGE {
        float: left;
        color: orange;
    }
</style>
<script>
    (function () {
        $(".addapprform1wrap").wrapInner(`<form action="#" id="form_one" ></form>`);
    })();
</script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
<script>
    $(".error_from_date,.error_to_date,.error_until_date,.error_location").hide();
    $(".error_an_employee,.error_employee_date,.error_ostart_date,.error_select_department").hide();
    window.form1 = $(`#form_one`).validate({});
    $(".form1submit").click(function () {
        if (window.form1.checkForm()) {
            nextone();
        }
        else {
            window.form1.showErrors();
        }
    });
    $(".formsubmit2").click(function () {
        // TODO form 2 submit
        error = false;
        $(".error_from_date,.error_to_date,.error_until_date,.error_location").hide();
        if ($("input[name='until']:checked").val() == "Until") {
            date_of_joining_from = "1980-01-01";
            date_of_joining_to = $("#until_date").val();
            if (date_of_joining_to == "") {
                $(".error_until_date").show();
                error = true;
            }
        } else {
            date_of_joining_from = $("#date_from").val();
            date_of_joining_to = $("#date_to").val();
            if (date_of_joining_from == "") {
                $(".error_from_date").show();
                error = true;
            }
            if (date_of_joining_to == "") {
                error = true;
                $(".error_to_date").show();
            }
        }
        if ($("#location").val() == "") {
            error = true;
            $(".error_location").show();
        }
        if (!error) {
            nextone();
            bs();
        }
    })

    $(".formsubmit3").click(function () {
        error = false;
        $(".error_an_employee,.error_employee_date,.error_ostart_date,.error_select_department").hide();
        if ($("#mtype").val() == "3") {
            console.log(`employee`);
            a = $(".emp_checkbox2:checked");
            if (a.length == 0) {
                $(".error_an_employee").show();
                error = true;
            }
            a.each((a, b) => {
                if ($(b).parent().parent().find(".datepicker").val() == "") {
                    $(".error_employee_date").show();
                    error = true;
                }
            });

        }
        else if ($("#mtype").val() == "2") {
            console.log(`department`);
            if ($("#ostart_date").val() == "") {
                $(".error_ostart_date").show();
                error = true;
            }
            a = $(".deptbox:checked");
            if (a.length == 0) {
                $(".error_select_department").show();
                error = true;
            }
        }
        else {
            console.log(`company`);
            if ($("#ostart_date").val() == "") {
                $(".error_ostart_date").show();
                error = true;
            }
        }
        if (!error) {
            nextone()
        }
        ;
    });

    function checkfilerror(f) {
        if ($(f).val() != "") {
            $(".fileerrorcon").find(`[generated='true'].error`).hide();
        }
    }
</script>
