const { template } = require("lodash");

<template>
    <nav class="navbar navbar-expand-sm bg-light">

    <!-- Links -->
    <ul class="navbar-nav">
        @foreach($pages as $page)
        <li class="nav-item">
        <a class="nav-link" href="/page/{{ $page->id }}">{{ $page->name }}</a>
        </li>
        @endforeach
        <li class="nav-item">
        <a class="nav-link" href="/contact-us">Contact Us</a>
        </li>
    </ul>
    </nav>
</template>
<script>
    export default{
        data(){
            return{
                loaded: false
            }
        },
        mounted(){

        },
        methods:{

        }
    }

</script>