const { template } = require("lodash");

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="/contact-us/sendmessage" class="was-validated"> 
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input @keyup="buttonText = nama" v-model="nama" type="text" class="form-control" id="name" placeholder="Name" name="name" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea class="form-control" name="message" placeholder="Enter Your Message" ></textarea>
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div @click="buttonText = nama" class="btn btn-primary">{{buttonText}}</div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            loaded: false,
            nama: null,
            buttonText: 'Click to Change my text to name text'
        }
    },
    mounted(){

    },
    methods:{

    }
}
</script>

