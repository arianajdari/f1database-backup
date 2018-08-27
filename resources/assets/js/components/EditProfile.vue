<template>
    <div>
        <div id="empty-space"></div>

        <div id="profile" class="gadgets-big">
            
            <div id="header">
                <h3>Edit your Profile</h3>
            </div>

            <br>
            <br>    

            <div  id="marker">
                <div v-bind:style="{backgroundImage : url}" id="profile-photo"></div>
            </div>

            <div id="info">
                <form method="post" action="#">
                    <div class="form-piece">
                        <div>Full Name:</div>
                        <input type="text" name="name" v-bind:value="name">
                    </div>

                    <div class="form-piece">
                        <div>Email:</div>
                        <input type="email" name="email" v-bind:value="email" readonly="readonly">
                    </div>
                </form>
               
            </div>

        </div>
    </div>
</template>

<style>
    #profile{
        background-color: white;
        border-radius: 5px;
    }
    #empty-space{
        width:100%;
        height:5px;
        margin-bottom: 30px;
    }
    #profile #header{
        width:98%;
        background-color: #52AB56;
        margin: -30px auto 0 auto;
        height:80px;
        border-radius: 5px;
    }

    #profile #header h3{
        margin-top: 15px;
        color: white;
        line-height: 80px;
        padding-left: 10px;
    }

    #profile #marker{
        width:100%;
        min-height: 200px;
    }

    #profile #marker #profile-photo{
        margin: 0 auto;
        width:300px;
        height:300px;
        background-position: center;
        border-radius: 100%;
        background-size: 300px 300px;

    }

    #profile #info{
        width:100%;
        min-height: 100px;
    }

    #profile #info .form-piece{
        width:300px;
        margin: 0 auto;
        background-color: red;
        
    }

    #profile #info .form-piece div,
    #profile #info .form-piece input{
        float:left;
    }

    #profile #info .form-piece input{
        font-family: 'Raleway', sans-serif;
        font-size: 20px;
        height: 30px;
        border-bottom: 1px solid black;
        border-radius: 2px;
        width:100%;
        margin-bottom: 10px;
    }
</style>


<script>
    export default {
        data() {
            return {
                url : "url('images/" + this.$root.$children[0].userImageFilename + "')",
                success : true,
                name : this.$root.$children[0].userName,
                email : this.$root.$children[0].userEmail
            }
        },
        mounted() {
            console.log('Profile edit mounted.');
        }
    }
</script>
