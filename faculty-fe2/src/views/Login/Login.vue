<template>
    <div class="vue-tempalte">
        <form class="form">
            <h3>Sign In</h3>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" id="email" class="form-control form-control-lg" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" class="form-control form-control-lg" />
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block" @click="getDetails()">Sign In</button>
         
        </form>
    </div>
</template>
<script>

    export default {
        name: "LogIn",
        data() {
            return {}
        },
        methods: {
            getDetails() {
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const data ={
                    email,
                    password
                }
                const returnedData = this.$store.dispatch(this.login, data);
                if(returnedData === 'success'){
                    this.$router.push('/home')
                }
            },

            login(data){
                this.$router.push('localhost:8000/'+ data)
            }
        },
    }
</script>